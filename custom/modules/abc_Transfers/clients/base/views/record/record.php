<?php
$module_name = 'abc_Transfers';
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
                'acl_module' => 'abc_Transfers',
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
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'leads_abc_transfers_1_name',
                'label' => 'LBL_LEADS_ABC_TRANSFERS_1_FROM_LEADS_TITLE',
              ),
              1 => 
              array (
                'name' => 'resort_c',
                'label' => 'LBL_RESORT',
              ),
              2 => 
              array (
                'name' => 'management_company_c',
                'label' => 'LBL_MANAGEMENT_COMPANY',
              ),
              3 => 
              array (
                'name' => 'deeded_or_rtu_c',
                'label' => 'LBL_DEEDED_OR_RTU',
              ),
              4 => 
              array (
                'name' => 'resort_location_c',
                'label' => 'LBL_RESORT_LOCATION',
              ),
              5 => 
              array (
                'name' => 'resort_account_number_c',
                'label' => 'LBL_RESORT_ACCOUNT_NUMBER',
              ),
              6 => 
              array (
                'name' => 'size_of_unit_c',
                'label' => 'LBL_SIZE_OF_UNIT',
              ),
              7 => 
              array (
                'name' => 'member_of_exchange_company_c',
                'label' => 'LBL_MEMBER_OF_EXCHANGE_COMPANY',
              ),
              8 => 
              array (
                'name' => 'week_fixed_c',
                'label' => 'LBL_WEEK_FIXED',
              ),
              9 => 
              array (
                'name' => 'week_fixed_week_c',
                'label' => 'LBL_WEEK_FIXED_WEEK',
              ),
              10 => 
              array (
                'name' => 'inventory_autobooked_c',
                'label' => 'LBL_INVENTORY_AUTOBOOKED',
              ),
              11 => 
              array (
              ),
              12 => 
              array (
                'name' => 'usage_a_c',
                'label' => 'LBL_USAGE_A',
              ),
              13 => 
              array (
                'name' => 'number_of_timeshares_p_c',
                'label' => 'LBL_NUMBER_OF_TIMESHARES_P',
              ),
              14 => 
              array (
                'name' => 'rrpay_payment_plans_abc_transfers_1_name',
              ),
              15 => 
              array (
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'agent_holding_fee_c',
                'label' => 'LBL_AGENT_HOLDING_FEE',
              ),
              1 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'title_fee_c',
                'label' => 'LBL_TITLE_FEE',
              ),
              2 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'maintenance_pad_c',
                'label' => 'LBL_MAINTENANCE_PAD',
              ),
              3 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'transfer_fee_c',
                'label' => 'LBL_TRANSFER_FEE',
              ),
              4 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'holding_fee_c',
                'label' => 'LBL_HOLDING_FEE',
              ),
              5 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'total_investment_c',
                'label' => 'LBL_TOTAL_INVESTMENT',
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
            'panelDefault' => 'collapsed',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'resort_address_street_c',
                'studio' => 'visible',
                'label' => 'LBL_RESORT_ADDRESS_STREET',
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'resort_address_city_c',
                'label' => 'LBL_RESORT_ADDRESS_CITY',
              ),
              3 => 
              array (
              ),
              4 => 
              array (
                'name' => 'resort_address_state_c',
                'label' => 'LBL_RESORT_ADDRESS_STATE',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'resort_address_postalcode_c',
                'label' => 'LBL_RESORT_ADDRESS_POSTALCODE',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'resort_address_country_c',
                'label' => 'LBL_RESORT_ADDRESS_COUNTRY',
              ),
              9 => 
              array (
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'maintenance_fees_c',
                'label' => 'LBL_MAINTENANCE_FEES',
              ),
              1 => 
              array (
                'name' => 'maintenance_paid_c',
                'label' => 'LBL_MAINTENANCE_PAID',
              ),
              2 => 
              array (
                'name' => 'maintenance_fees_current_c',
                'label' => 'LBL_MAINTENANCE_FEES_CURRENT',
              ),
              3 => 
              array (
                'name' => 'maintenance_fees_due_date_c',
                'label' => 'LBL_MAINTENANCE_FEES_DUE_DATE',
              ),
              4 => 
              array (
              ),
              5 => 
              array (
                'name' => 'maintenance_fees_paid_throug_c',
                'label' => 'LBL_MAINTENANCE_FEES_PAID_THROUG',
              ),
              6 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'club_dues_amount_c',
                'label' => 'LBL_CLUB_DUES_AMOUNT',
              ),
              7 => 
              array (
                'name' => 'club_dues_date_c',
                'label' => 'LBL_CLUB_DUES_DATE',
              ),
              8 => 
              array (
              ),
              9 => 
              array (
                'name' => 'club_dues_paid_c',
                'label' => 'LBL_CLUB_DUES_PAID',
              ),
              10 => 
              array (
                'name' => 'week_will_use_a_c',
                'label' => 'LBL_WEEK_WILL_USE_A',
              ),
              11 => 
              array (
                'name' => 'week_will_use_b_c',
                'label' => 'LBL_WEEK_WILL_USE_B',
              ),
              12 => 
              array (
                'name' => 'week_will_use_c',
                'label' => 'LBL_WEEK_WILL_USE_C',
              ),
              13 => 
              array (
              ),
              14 => 
              array (
                'name' => 'reservation_dates_c',
                'studio' => 'visible',
                'label' => 'LBL_RESERVATION_DATES',
              ),
              15 => 
              array (
                'name' => 'names_on_deed_c',
                'label' => 'LBL_NAMES_ON_DEED',
              ),
              16 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'mortgage_balance_c',
                'label' => 'LBL_MORTGAGE_BALANCE',
              ),
              17 => 
              array (
                'name' => 'length_of_ownership_c',
                'label' => 'LBL_LENGTH_OF_OWNERSHIP',
              ),
              18 => 
              array (
                'name' => 'actively_using_c',
                'label' => 'LBL_ACTIVELY_USING',
              ),
              19 => 
              array (
                'name' => 'trust_name_c',
                'label' => 'LBL_TRUST_NAME',
              ),
              20 => 
              array (
                'name' => 'names_of_deceased_c',
                'label' => 'LBL_NAMES_OF_DECEASED',
              ),
              21 => 
              array (
                'name' => 'divorced_c',
                'label' => 'LBL_DIVORCED',
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
              ),
              1 => 
              array (
                'name' => 'accounts_abc_transfers_1_name',
                'label' => 'LBL_ACCOUNTS_ABC_TRANSFERS_1_FROM_ACCOUNTS_TITLE',
              ),
              2 => 
              array (
                'name' => 'abc_transfers_abc_estoppels_1_name',
                'label' => 'LBL_ABC_TRANSFERS_ABC_ESTOPPELS_1_FROM_ABC_ESTOPPELS_TITLE',
              ),
              3 => 
              array (
                'name' => 'estoppel_status1_c',
                'label' => 'LBL_ESTOPPEL_STATUS1',
              ),
              4 => 
              array (
                'name' => 'abc_transfers_abc_inventories_1_name',
                'label' => 'LBL_ABC_TRANSFERS_ABC_INVENTORIES_1_FROM_ABC_INVENTORIES_TITLE',
              ),
              5 => 
              array (
                'name' => 'inventory_status1_c',
                'label' => 'LBL_INVENTORY_STATUS1',
              ),
              6 => 
              array (
                'name' => 'abc_transfers_abc_deedbacks_1_name',
                'label' => 'LBL_ABC_TRANSFERS_ABC_DEEDBACKS_1_FROM_ABC_DEEDBACKS_TITLE',
              ),
              7 => 
              array (
                'name' => 'deedback_status1_c',
                'label' => 'LBL_DEEDBACK_STATUS1',
              ),
              8 => 
              array (
                'name' => 'doc_date_c',
                'label' => 'LBL_DOC_DATE',
              ),
              9 => 
              array (
                'name' => 'est_date_c',
                'label' => 'LBL_EST_DATE',
              ),
              10 => 
              array (
                'name' => 'trf_date_c',
                'label' => 'LBL_TRF_DATE',
              ),
              11 => 
              array (
                'name' => 'closed_date_c',
                'label' => 'LBL_CLOSED_DATE',
              ),
            ),
          ),
          6 => 
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
                'name' => 'description',
                'span' => 12,
              ),
              1 => 
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
              2 => 
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
              3 => 'assigned_user_name',
              4 => 'team_name',
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
