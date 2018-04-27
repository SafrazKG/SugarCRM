<?php

namespace DRI_Workflow_Task_Templates\Activity;

/**
 * Top implementation of the Task Activity Handler
 *
 * @author Emil Kilhage <emil.kilhage@addoptify.com>
 */
class TaskHandler extends AbstractActivityHandler
{
    const STATUS_NOT_STARTED = 'Not Started';
    const STATUS_IN_PROGRESS = 'In Progress';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_NOT_APPLICABLE = 'Not Applicable';

    /**
     * @var string
     */
    protected $linkName = 'tasks';

    /**
     * @var string
     */
    protected $moduleName = 'Tasks';

    /**
     * {@inheritdoc}
     */
    public function isCompleted(\SugarBean $activity)
    {
        return in_array($activity->status, array (self::STATUS_COMPLETED, self::STATUS_NOT_APPLICABLE), true);
    }

    /**
     * {@inheritdoc}
     */
    public function isStarted(\SugarBean $activity)
    {
        return $activity->status === self::STATUS_IN_PROGRESS;
    }

    /**
     * {@inheritdoc}
     */
    public function isNotStarted(\SugarBean $activity)
    {
        return $activity->status === self::STATUS_NOT_STARTED;
    }

    /**
     * {@inheritdoc}
     */
    public function isNotApplicable(\SugarBean $activity)
    {
        return $activity->status === self::STATUS_NOT_APPLICABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotStartedStatus()
    {
        return static::STATUS_NOT_STARTED;
    }

    /**
     * {@inheritdoc}
     */
    public function getInProgressStatus()
    {
        return static::STATUS_IN_PROGRESS;
    }

    /**
     * {@inheritdoc}
     */
    public function getCompletedStatus()
    {
        return static::STATUS_COMPLETED;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotApplicableStatus()
    {
        return static::STATUS_NOT_APPLICABLE;
    }

    /**
     * {@inheritdoc}
     */
    public function start(\SugarBean $activity)
    {
        $save = parent::start($activity);

        if (!empty($activity->dri_workflow_task_template_id)) {
            $template = \DRI_Workflow_Task_Template::getById($activity->dri_workflow_task_template_id);

            switch ($template->task_due_date_type) {
                case \DRI_Workflow_Task_Template::TASK_DUE_DATE_TYPE_DAYS_FROM_STAGE_STARTED:
                    if (empty($activity->date_due)) {
                        $activity->date_due = $this->getDueDate($template, \TimeDate::getInstance()->getNow());
                        $save = true;
                    }
                    break;
            }
        }

        return $save;
    }

    /**
     * {@inheritdoc}
     */
    public function previousActivityCompleted(\SugarBean $activity, \SugarBean $previous)
    {
        if (!empty($activity->dri_workflow_task_template_id)) {
            $template = \DRI_Workflow_Task_Template::getById($activity->dri_workflow_task_template_id);

            switch ($template->task_due_date_type) {
                case \DRI_Workflow_Task_Template::TASK_DUE_DATE_TYPE_DAYS_FROM_PREVIOUS_ACTIVITY_COMPLETED:
                    if (empty($activity->date_due)) {
                        $activity->date_due = $this->getDueDate($template, \TimeDate::getInstance()->getNow());
                        $activity->save();
                    }
                    break;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        return new \Task();
    }

    /**
     * {@inheritdoc}
     */
    public function populateFromTemplate(\SugarBean $activity, \DRI_Workflow_Task_Template $template)
    {
        /** @var \Task $activity */
        parent::populateFromTemplate($activity, $template);

        $timeDate = \TimeDate::getInstance();
        $activity->priority = $template->priority;
        $activity->customer_journey_type = $template->type;
        $activity->status = self::STATUS_NOT_STARTED;

        $dateCreated = $timeDate->getNow();
        $activity->date_start = $timeDate->asUser($dateCreated);

        switch ($template->task_due_date_type) {
            case \DRI_Workflow_Task_Template::TASK_DUE_DATE_TYPE_DAYS_FROM_CREATED:
                $activity->date_due = $this->getDueDate($template, $dateCreated);
                break;
            case \DRI_Workflow_Task_Template::TASK_DUE_DATE_TYPE_DAYS_FROM_PARENT_DATE_FIELD:
                $this->setDueDateFromParentField($activity);
                break;
        }
    }

    /**
     * @param \SugarBean $activity
     */
    public function setDueDateFromParentField(\SugarBean $activity)
    {
        $template = $this->getActivityTemplate($activity);
        $date = $this->getDueDateFromParentField($activity, $template);

        if (!empty($date)) {
            $activity->date_due = $this->getDueDate($template, $date);
        }
    }

    /**
     * @param \DRI_Workflow_Task_Template $template
     * @param \DateTime $date
     * @return string
     */
    private function getDueDate(\DRI_Workflow_Task_Template $template, \DateTime $date)
    {
        $timeDate = \TimeDate::getInstance();
        $dueDate = clone $date;

        if ($template->task_due_days > 0) {
            $dueDate->modify(sprintf(
                '+ %s days',
                $template->task_due_days
            ));
        } else {
            $dueDate->modify(sprintf(
                '- %s days',
                -$template->task_due_days
            ));
        }

        return $timeDate->asUser($dueDate);
    }
}
