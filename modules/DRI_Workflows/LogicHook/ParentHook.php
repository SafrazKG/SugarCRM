<?php

use DRI_Workflow_Task_Templates\Activity\ActivityHandlerFactory;

require_once 'modules/DRI_Workflow_Task_Templates/Activity/ActivityHandlerFactory.php';

/**
 * This class contains logic hooks related to the Addoptify Customer Journey plugin for the parent modules
 *
 * @author Emil Kilhage <emil.kilhage@addoptify.com>
 */
class DRI_Workflows_LogicHook_ParentHook
{
    const ACTIVITY_DATE_CACHE_PREFIX = 'DRI_Workflows_LogicHook_ParentHook::updateActivityDates';

    /**
     * @param string $module
     */
    public static function clearParentActivityDatesCache($module)
    {
        $key = self::ACTIVITY_DATE_CACHE_PREFIX.':'.$module;
        sugar_cache_clear($key);
    }

    /**
     * This logic hook stores the fetched_row before a parent is saved.
     *
     * It makes the fetched_row available after save for self::startJourney
     *
     * @param \SugarBean $bean
     */
    public function saveFetchedRow(\SugarBean $bean)
    {
        $bean->dri_customer_journey_fetched_row = $bean->fetched_row;
    }

    /**
     * This logic hook gets triggered after a parent is saved.
     *
     * If the conditions of self::shouldStartJourney is met, a new journey
     * will be started related to the parent if not already started..
     *
     * If the conditions of self::toRemoveJourneys is met,
     * all non completed journeys will be unlinked
     *
     * @param \SugarBean $bean
     * @throws \SugarApiException
     */
    public function startJourney(\SugarBean $bean)
    {
        try {
            if ($this->shouldStartJourney($bean)) {
                DRI_Workflow::start($bean, $bean->dri_workflow_template_id);
                $bean->dri_customer_journey_started_template = $bean->dri_workflow_template_id;
            }
        } catch (\SugarApiException $e) {
            if ('ERROR_INVALID_LICENSE' !== $e->messageLabel) {
                throw $e;
            }
        }
    }

    /**
     * @param SugarBean $bean
     */
    public function updateActivityDates(\SugarBean $bean)
    {
        // if the bean is new there is no need to check if we should update the date
        if (empty($bean->dri_customer_journey_fetched_row)) {
            return;
        }

        $key = self::ACTIVITY_DATE_CACHE_PREFIX.':'.$bean->module_dir;
        $rows = sugar_cache_retrieve($key);

        if (null === $rows) {
            // get activity templates to check for updates in
            $query = new SugarQuery();
            $query->from(BeanFactory::newBean('DRI_Workflow_Task_Templates'));
            $query->select('id', 'activity_type', 'due_date_field');
            $query->where()
                ->equals('task_due_date_type', \DRI_Workflow_Task_Template::TASK_DUE_DATE_TYPE_DAYS_FROM_PARENT_DATE_FIELD)
                ->equals('due_date_module', $bean->module_dir);

            $rows = $query->execute();
            sugar_cache_put($key, $rows);
        }

        // check for updates in relevant fields
        $templates = array ();
        foreach ($rows as $row) {
            if ($bean->{$row['due_date_field']} !== $bean->dri_customer_journey_fetched_row[$row['due_date_field']]) {
                $templates[$row['activity_type']][] = $row['id'];
            }
        }

        if (!empty($templates)) {
            foreach ($templates as $module => $ids) {
                $handler = ActivityHandlerFactory::factory($module);
                $activity = BeanFactory::newBean($module);

                // build query to fetch activities related to the parent and the activity template
                $query = new SugarQuery();
                $query->from($activity);
                $query->select('id');
                $query->where()
                    ->in('dri_workflow_task_template_id', array_unique($ids))
                    ->equals('parent_id', $bean->id)
                    ->equals('parent_type', $bean->module_dir);

                foreach ($query->execute() as $row) {
                    /** @var \SugarBean $activity */
                    $activity = BeanFactory::retrieveBean($module, $row['id']);

                    if ($activity) {
                        $handler->setDueDateFromParentField($activity);
                        $activity->save();
                    }
                }
            }
        }
    }

    /**
     * The Journey will be started if the template id is set and one of the following conditions is met:
     *
     *   - the parent is new
     *   - the template id has been changed
     *
     * @param \SugarBean $bean
     * @return bool
     */
    private function shouldStartJourney(\SugarBean $bean)
    {
        return !empty($bean->dri_workflow_template_id)
            && empty($bean->is_customer_journey_activity)
            && (empty($bean->dri_customer_journey_started_template) || $bean->dri_workflow_template_id !== $bean->dri_customer_journey_started_template)
            && (empty($bean->dri_customer_journey_fetched_row)
                || $bean->dri_workflow_template_id !== $bean->dri_customer_journey_fetched_row['dri_workflow_template_id']);
    }
}
