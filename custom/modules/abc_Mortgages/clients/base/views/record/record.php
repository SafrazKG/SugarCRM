<?php
$module_name = 'abc_Mortgages';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'abc_Mortgages',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'lead_source_c',
                'label' => 'LBL_LEAD_SOURCE',
              ),
              1 => 
              array (
                'name' => 'year_purchased_c',
                'label' => 'LBL_YEAR_PURCHASED',
              ),
              2 => 
              array (
                'name' => 'location_of_presentation_c',
                'label' => 'LBL_LOCATION_OF_PRESENTATION',
              ),
              3 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'original_sales_price_c',
                'label' => 'LBL_ORIGINAL_SALES_PRICE',
              ),
              4 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'down_payment_c',
                'label' => 'LBL_DOWN_PAYMENT',
              ),
              5 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'original_amount_financed_c',
                'label' => 'LBL_ORIGINAL_AMOUNT_FINANCED',
              ),
              6 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'current_balance_owed_c',
                'label' => 'LBL_CURRENT_BALANCE_OWED',
              ),
              7 => 
              array (
                'name' => 'payment_made_to_c',
                'label' => 'LBL_PAYMENT_MADE_TO',
              ),
              8 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'payment_amount_c',
                'label' => 'LBL_PAYMENT_AMOUNT',
              ),
              9 => 
              array (
                'name' => 'payments_auto_debited_c',
                'label' => 'LBL_PAYMENTS_AUTO_DEBITED',
              ),
              10 => 
              array (
                'name' => 'last_mortgage_pay_date_c',
                'label' => 'LBL_LAST_MORTGAGE_PAY_DATE',
              ),
              11 => 
              array (
                'name' => 'length_of_loan_c',
                'label' => 'LBL_LENGTH_OF_LOAN',
              ),
              12 => 
              array (
                'name' => 'current_c',
                'label' => 'LBL_CURRENT_C',
              ),
              13 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'past_due_amount_c',
                'label' => 'LBL_PAST_DUE_AMOUNT',
              ),
              14 => 
              array (
                'name' => 'number_of_upgrades_c',
                'label' => 'LBL_NUMBER_OF_UPGRADES',
              ),
              15 => 
              array (
                'name' => 'last_upgrade_date_c',
                'label' => 'LBL_LAST_UPGRADE_DATE',
              ),
              16 => 
              array (
                'name' => 'upgrade_date_c',
                'label' => 'LBL_UPGRADE_DATE',
              ),
              17 => 
              array (
                'name' => 'account_number_c',
                'label' => 'LBL_ACCOUNT_NUMBER',
              ),
              18 => 
              array (
                'name' => 'number_of_contracts_c',
                'label' => 'LBL_NUMBER_OF_CONTRACTS',
              ),
              19 => 
              array (
                'name' => 'size_of_unit_c',
                'label' => 'LBL_SIZE_OF_UNIT',
              ),
              20 => 
              array (
                'name' => 'type_of_ownership_c',
                'label' => 'LBL_TYPE_OF_OWNERSHIP',
              ),
              21 => 
              array (
                'name' => 'week_points_c',
                'label' => 'LBL_WEEK_POINTS',
              ),
              22 => 
              array (
                'name' => 'usage_d_c',
                'label' => 'LBL_USAGE_D',
              ),
              23 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'm_fees_c',
                'label' => 'LBL_M_FEES',
              ),
              24 => 
              array (
                'name' => 'mfees_paid_c',
                'label' => 'LBL_MFEES_PAID',
              ),
              25 => 
              array (
                'name' => 'due_date_c',
                'label' => 'LBL_DUE_DATE',
              ),
              26 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'past_due_c',
                'label' => 'LBL_PAST_DUE',
              ),
              27 => 
              array (
                'name' => 'week_will_use_a_c',
                'label' => 'LBL_WEEK_WILL_USE_A',
              ),
              28 => 
              array (
                'name' => 'week_will_use_b_c',
                'label' => 'LBL_WEEK_WILL_USE_B',
              ),
              29 => 
              array (
                'name' => 'week_will_use_c',
                'label' => 'LBL_WEEK_WILL_USE_C',
              ),
              30 => 
              array (
                'name' => 'vacation_booked_for_c',
                'label' => 'LBL_VACATION_BOOKED_FOR',
              ),
              31 => 
              array (
                'name' => 'name_as_it_appears_c',
                'label' => 'LBL_NAME_AS_IT_APPEARS',
              ),
              32 => 
              array (
                'name' => 'leads_abc_mortgages_1_name',
              ),
              33 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
              ),
              34 => 
              array (
                'name' => 'accounts_abc_mortgages_1_name',
                'span' => 12,
              ),
              35 => 
              array (
                'name' => 'abc_mortgages_abc_properties_1_name',
              ),
              36 => 
              array (
                'name' => 'rrpay_payment_plans_abc_mortgages_1_name',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'how_long_c',
                'studio' => 'visible',
                'label' => 'LBL_HOW_LONG',
              ),
              1 => 
              array (
                'name' => 'did_you_say_no_c',
                'label' => 'LBL_DID_YOU_SAY_NO',
              ),
              2 => 
              array (
                'name' => 'were_you_told_c',
                'studio' => 'visible',
                'label' => 'LBL_WERE_YOU_TOLD',
              ),
              3 => 
              array (
                'name' => 'value_would_increase_c',
                'label' => 'LBL_VALUE_WOULD_INCREASE',
              ),
              4 => 
              array (
                'name' => 'rent_or_resale_c',
                'studio' => 'visible',
                'label' => 'LBL_RENT_OR_RESALE',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'false_sense_c',
                'studio' => 'visible',
                'label' => 'LBL_FALSE_SENSE',
              ),
              6 => 
              array (
                'name' => 'today_only_c',
                'label' => 'LBL_TODAY_ONLY',
              ),
              7 => 
              array (
                'name' => 'extra_exchange_fees_c',
                'studio' => 'visible',
                'label' => 'LBL_EXTRA_EXCHANGE_FEES',
              ),
              8 => 
              array (
                'name' => 'cost_to_use_c',
                'label' => 'LBL_COST_TO_USE',
              ),
              9 => 
              array (
                'name' => 'closing_rushed_c',
                'studio' => 'visible',
                'label' => 'LBL_CLOSING_RUSHED',
              ),
              10 => 
              array (
                'name' => 'rush_paperwork_c',
                'label' => 'LBL_RUSH_PAPERWORK',
              ),
              11 => 
              array (
                'name' => 'cancellation_period_c',
                'studio' => 'visible',
                'label' => 'LBL_CANCELLATION_PERIOD',
              ),
              12 => 
              array (
                'name' => 'how_many_c',
                'label' => 'LBL_HOW_MANY',
              ),
              13 => 
              array (
                'name' => 'incentive_c',
                'studio' => 'visible',
                'label' => 'LBL_INCENTIVE',
              ),
              14 => 
              array (
                'name' => 'cpa_advice_c',
                'label' => 'LBL_CPA_ADVICE',
              ),
              15 => 
              array (
                'name' => 'owner_update_c',
                'studio' => 'visible',
                'label' => 'LBL_OWNER_UPDATE',
              ),
              16 => 
              array (
                'name' => 'promises_c',
                'studio' => 'visible',
                'label' => 'LBL_PROMISES',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'assigned_user_name',
              2 => 'team_name',
              3 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              4 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
