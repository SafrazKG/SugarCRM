<?PHP
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/INTWS_WorkStreams/INTWS_WorkStreams_sugar.php');
class INTWS_WorkStreams extends INTWS_WorkStreams_sugar {
    public function __construct()
    {
        parent::__construct();
    }

    public function fetchFromQuery(SugarQuery $query, array $fields = array(), array $options = array())
    {
        /**
         * @var $orderByClauses SugarQuery_Builder_Orderby[]
         */
        $orderByClauses = $query->order_by;

        if (empty($orderByClauses)) {
            return parent::fetchFromQuery($query, $fields, $options);
        }

        /**
         * @var $orderByClause SugarQuery_Builder_Field_Orderby
         */
        foreach ($orderByClauses as $orderByClause) {
            if ($orderByClause->column->field == 'activity_age_c') {
                $orderByClause->column->field = 'activity_date_c';
            }
        }

        $query->order_by = $orderByClauses;

        return parent::fetchFromQuery($query, $fields, $options);
    }
}
