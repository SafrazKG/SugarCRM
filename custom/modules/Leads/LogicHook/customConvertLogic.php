<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * Class CustomConvertLogic.
 * Contains method for checking if Lead is getting converted.
 * In case it does, new relations are getting created for newly created
 * Account to Mortgages and Transfers for converted Lead.
 */
class CustomConvertLogic
{
    /**
     * Method for adding custom logic after Leads convert.
     *
     * @param   Lead    $lead       Lead bean.
     * @param   string  $event      Event type. ('before_save' in this case)
     * @param   array   $arguments  Arguments passed.
     */
    public function onConvert(Lead $lead, $event, $arguments)
    {
        // Check if Lead is getting converted
        if ($lead->status == 'Converted' && $lead->fetched_row['converted'] == 0) {
            $account = BeanFactory::getBean('Accounts', $lead->account_id);
            $lead->load_relationship('leads_abc_transfers_1');
            $lead->load_relationship('leads_abc_mortgages_1');
            $account->load_relationship('accounts_abc_transfers_1');
            $account->load_relationship('accounts_abc_mortgages_1');

            if ($lead->leads_abc_transfers_1) {
                $transfers = $lead->leads_abc_transfers_1->getBeans();

                if (!empty($transfers)) {
                    foreach ($transfers as $transfer) {
                        $account->accounts_abc_transfers_1->add($transfer->id);
                    }
                }
            }

            if ($lead->leads_abc_mortgages_1) {
                $mortgages = $lead->leads_abc_mortgages_1->getBeans();

                if (!empty($mortgages)) {
                    foreach ($mortgages as $mortgage) {
                        $account->accounts_abc_mortgages_1->add($mortgage->id);
                    }
                }
            }
        }
    }
}
