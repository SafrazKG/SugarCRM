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
                'name' => 'consys_crm_id_c',
                'label' => 'LBL_CONSYS_CRM_ID_C',
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'leads_abc_transfers_1_name',
                'label' => 'LBL_LEADS_ABC_TRANSFERS_1_FROM_LEADS_TITLE',
              ),
              3 => 
              array (
                'name' => 'resort_c',
                'label' => 'LBL_RESORT',
              ),
              4 => 
              array (
              ),
              5 => 
              array (
                'name' => 'transfer_status_c',
                'label' => 'LBL_TRANSFER_STATUS',
              ),
              6 => 
              array (
                'name' => 'management_company_c',
                'label' => 'LBL_MANAGEMENT_COMPANY',
              ),
              7 => 
              array (
                'name' => 'deeded_or_rtu_c',
                'label' => 'LBL_DEEDED_OR_RTU',
              ),
              8 => 
              array (
                'name' => 'resort_location_c',
                'label' => 'LBL_RESORT_LOCATION',
              ),
              9 => 
              array (
                'name' => 'resort_account_number_c',
                'label' => 'LBL_RESORT_ACCOUNT_NUMBER',
              ),
              10 => 
              array (
                'name' => 'size_of_unit_c',
                'label' => 'LBL_SIZE_OF_UNIT',
              ),
              11 => 
              array (
                'name' => 'member_of_exchange_company_c',
                'label' => 'LBL_MEMBER_OF_EXCHANGE_COMPANY',
              ),
              12 => 
              array (
                'name' => 'week_fixed_c',
                'label' => 'LBL_WEEK_FIXED',
              ),
              13 => 
              array (
                'name' => 'week_fixed_week_c',
                'label' => 'LBL_WEEK_FIXED_WEEK',
              ),
              14 => 
              array (
                'name' => 'inventory_autobooked_c',
                'label' => 'LBL_INVENTORY_AUTOBOOKED',
              ),
              15 => 
              array (
              ),
              16 => 
              array (
                'name' => 'usage_a_c',
                'label' => 'LBL_USAGE_A',
              ),
              17 => 
              array (
                'name' => 'number_of_timeshares_p_c',
                'label' => 'LBL_NUMBER_OF_TIMESHARES_P',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL12',
            'label' => 'LBL_RECORDVIEW_PANEL12',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'disposition_type_c',
                'label' => 'LBL_DISPOSITION_TYPE',
              ),
              1 => 
              array (
                'name' => 'disposition_c',
                'label' => 'LBL_DISPOSITION',
              ),
              2 => 
              array (
                'name' => 'disposition_note_c',
                'label' => 'LBL_DISPOSITION_NOTE',
                'span' => 12,
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
                'name' => 'poperty_id_c',
                'label' => 'LBL_POPERTY_ID',
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'maintenance_fees_c',
                'label' => 'LBL_MAINTENANCE_FEES',
              ),
              3 => 
              array (
                'name' => 'maintenance_paid_c',
                'label' => 'LBL_MAINTENANCE_PAID',
              ),
              4 => 
              array (
                'name' => 'maintenance_fees_current_c',
                'label' => 'LBL_MAINTENANCE_FEES_CURRENT',
              ),
              5 => 
              array (
                'name' => 'maintenance_fees_due_date_c',
                'label' => 'LBL_MAINTENANCE_FEES_DUE_DATE',
              ),
              6 => 
              array (
              ),
              7 => 
              array (
                'name' => 'maintenance_fees_paid_throug_c',
                'label' => 'LBL_MAINTENANCE_FEES_PAID_THROUG',
              ),
              8 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'club_dues_amount_c',
                'label' => 'LBL_CLUB_DUES_AMOUNT',
              ),
              9 => 
              array (
                'name' => 'club_dues_date_c',
                'label' => 'LBL_CLUB_DUES_DATE',
              ),
              10 => 
              array (
              ),
              11 => 
              array (
                'name' => 'club_dues_paid_c',
                'label' => 'LBL_CLUB_DUES_PAID',
              ),
              12 => 
              array (
                'name' => 'week_will_use_2017_c',
                'label' => 'LBL_WEEK_WILL_USE_2017',
              ),
              13 => 
              array (
                'name' => 'week_will_use_2018_c',
                'label' => 'LBL_WEEK_WILL_USE_2018',
              ),
              14 => 
              array (
                'name' => 'week_will_use_2019_c',
                'label' => 'LBL_WEEK_WILL_USE_2019',
              ),
              15 => 
              array (
              ),
              16 => 
              array (
                'name' => 'reservation_dates_c',
                'studio' => 'visible',
                'label' => 'LBL_RESERVATION_DATES',
              ),
              17 => 
              array (
                'name' => 'names_on_deed_c',
                'label' => 'LBL_NAMES_ON_DEED',
              ),
              18 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'mortgage_balance_c',
                'label' => 'LBL_MORTGAGE_BALANCE',
              ),
              19 => 
              array (
                'name' => 'length_of_ownership_c',
                'label' => 'LBL_LENGTH_OF_OWNERSHIP',
              ),
              20 => 
              array (
                'name' => 'actively_using_c',
                'label' => 'LBL_ACTIVELY_USING',
              ),
              21 => 
              array (
                'name' => 'trust_name_c',
                'label' => 'LBL_TRUST_NAME',
              ),
              22 => 
              array (
                'name' => 'names_of_deceased_c',
                'label' => 'LBL_NAMES_OF_DECEASED',
              ),
              23 => 
              array (
                'name' => 'divorced_c',
                'label' => 'LBL_DIVORCED',
              ),
              24 => 
              array (
                'name' => 'deed_or_rtu_c',
                'label' => 'LBL_DEED_OR_RTU',
              ),
              25 => 
              array (
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL8',
            'label' => 'LBL_RECORDVIEW_PANEL8',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'crmid_c',
                'label' => 'LBL_CRMID_C',
              ),
              1 => 
              array (
                'name' => 'sale_status_c',
                'label' => 'LBL_SALE_STATUS_C',
              ),
              2 => 
              array (
                'name' => 'deceased_seller_involved_c',
                'label' => 'LBL_DECEASED_SELLER_INVOLVED_C',
                'span' => 12,
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => true,
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
                'name' => 'maintenance_fees_last_paid_c',
                'label' => 'LBL_MAINTENANCE_FEES_LAST_PAID_C',
                'span' => 12,
              ),
              5 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'holding_fee_c',
                'label' => 'LBL_HOLDING_FEE',
              ),
              6 => 
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
          7 => 
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
                'name' => 'status_hidden_c',
                'label' => 'LBL_STATUS_HIDDEN',
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
              ),
              3 => 
              array (
                'name' => 'accounts_abc_transfers_1_name',
                'label' => 'LBL_ACCOUNTS_ABC_TRANSFERS_1_FROM_ACCOUNTS_TITLE',
              ),
              4 => 
              array (
                'name' => 'estoppel_status1_c',
                'label' => 'LBL_ESTOPPEL_STATUS1',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'inventory_status1_c',
                'label' => 'LBL_INVENTORY_STATUS1',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'deedback_status1_c',
                'label' => 'LBL_DEEDBACK_STATUS1',
              ),
              9 => 
              array (
              ),
              10 => 
              array (
                'name' => 'docs_received_date_c',
                'label' => 'LBL_DOCS_RECEIVED_DATE',
              ),
              11 => 
              array (
                'name' => 'start_date_c',
                'label' => 'LBL_START_DATE',
              ),
              12 => 
              array (
                'name' => 'estoppel_edoc_c',
                'label' => 'LBL_ESTOPPEL_EDOC',
              ),
              13 => 
              array (
                'name' => 'estoppel_completion_c',
                'label' => 'LBL_ESTOPPEL_COMPLETION',
              ),
              14 => 
              array (
                'name' => 'inventory_edoc_c',
                'label' => 'LBL_INVENTORY_EDOC',
              ),
              15 => 
              array (
                'name' => 'inventory_completion_c',
                'label' => 'LBL_INVENTORY_COMPLETION',
              ),
              16 => 
              array (
                'name' => 'transfer_edoc_c',
                'label' => 'LBL_TRANSFER_EDOC',
              ),
              17 => 
              array (
                'name' => 'transfer_completion_c',
                'label' => 'LBL_TRANSFER_COMPLETION',
              ),
              18 => 
              array (
                'name' => 'doc_date_c',
                'label' => 'LBL_DOC_DATE',
              ),
              19 => 
              array (
                'name' => 'est_date_c',
                'label' => 'LBL_EST_DATE',
              ),
              20 => 
              array (
                'name' => 'trf_date_c',
                'label' => 'LBL_TRF_DATE',
              ),
              21 => 
              array (
                'name' => 'closed_date_c',
                'label' => 'LBL_CLOSED_DATE',
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'estoppel_status_c',
                'label' => 'LBL_ESTOPPEL_STATUS',
              ),
              1 => 
              array (
                'name' => 'rtu_expiration_c',
                'label' => 'LBL_RTU_EXPIRATION_C',
              ),
              2 => 
              array (
                'name' => 'usage_type_c',
                'label' => 'LBL_USAGE_TYPE_C',
              ),
              3 => 
              array (
                'name' => 'usage_interval_c',
                'label' => 'LBL_USAGE_INTERVAL_C',
              ),
              4 => 
              array (
                'name' => 'first_year_available_c',
                'label' => 'LBL_FIRST_YEAR_AVAILABLE_C',
              ),
              5 => 
              array (
                'name' => 'usage_period_c',
                'label' => 'LBL_USAGE_PERIOD_C',
              ),
              6 => 
              array (
                'name' => 'black_out_periods_c',
                'label' => 'LBL_BLACK_OUT_PERIODS_C',
              ),
              7 => 
              array (
                'name' => 'check_in_days_c',
                'label' => 'LBL_CHECK_IN_DAYS_C',
              ),
              8 => 
              array (
                'name' => 'fixed_week_c',
                'label' => 'LBL_FIXED_WEEK_C',
              ),
              9 => 
              array (
                'name' => 'floating_weeks_c',
                'label' => 'LBL_FLOATING_WEEKS_C',
              ),
              10 => 
              array (
                'name' => 'season_c',
                'label' => 'LBL_SEASON_C',
              ),
              11 => 
              array (
                'name' => 'deeded_week_c',
                'label' => 'LBL_DEEDED_WEEK_C',
              ),
              12 => 
              array (
                'name' => 'number_of_points_c',
                'label' => 'LBL_NUMBER_OF_POINTS_C',
                'span' => 12,
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'building_c',
                'label' => 'LBL_BUILDING_C',
              ),
              1 => 
              array (
                'name' => 'unit_c',
                'label' => 'LBL_UNIT_C',
              ),
              2 => 
              array (
                'name' => 'unit_name_c',
                'label' => 'LBL_UNIT_NAME_C',
              ),
              3 => 
              array (
                'name' => 'bedroom_c',
                'label' => 'LBL_BEDROOM_C',
              ),
              4 => 
              array (
                'name' => 'sleeps_c',
                'label' => 'LBL_SLEEPS_C',
              ),
              5 => 
              array (
                'name' => 'bathroom_c',
                'label' => 'LBL_BATHROOM_C',
              ),
              6 => 
              array (
                'name' => 'jacuzzi_c',
                'label' => 'LBL_JACUZZI_C',
              ),
              7 => 
              array (
                'name' => 'lock_off_c',
                'label' => 'LBL_LOCK_OFF_C',
              ),
              8 => 
              array (
                'name' => 'kitchen_c',
                'label' => 'LBL_KITCHEN_C',
              ),
              9 => 
              array (
                'name' => 'sqft_c',
                'label' => 'LBL_SQFT_C',
              ),
              10 => 
              array (
                'name' => 'view_a_c',
                'label' => 'LBL_VIEW_A_C',
              ),
              11 => 
              array (
                'name' => 'estoppel_requirements_notes__c',
                'studio' => 'visible',
                'label' => 'LBL_ESTOPPEL_REQUIREMENTS_NOTES_',
              ),
            ),
          ),
          10 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
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
                'name' => 'special_assessments_amount_c',
                'label' => 'LBL_SPECIAL_ASSESSMENTS_AMOUNT_C',
              ),
              1 => 
              array (
                'name' => 'special_assessments_due_date_c',
                'label' => 'LBL_SPECIAL_ASSESSMENTS_DUE_DATE',
              ),
              2 => 
              array (
                'name' => 'of_years_for_special_asses_c',
                'label' => 'LBL_OF_YEARS_FOR_SPECIAL_ASSES_C',
              ),
              3 => 
              array (
                'name' => 'estoppel_bed_baths_c',
                'label' => 'LBL_ESTOPPEL_BED_BATHS_C',
              ),
              4 => 
              array (
                'name' => 'estoppel_weekor_points_value_c',
                'label' => 'LBL_ESTOPPEL_WEEKOR_POINTS_VALUE',
              ),
              5 => 
              array (
                'name' => 'estoppel_unit_c',
                'label' => 'LBL_ESTOPPEL_UNIT_C',
              ),
              6 => 
              array (
                'name' => 'estoppel_urgent_notes_c',
                'label' => 'LBL_ESTOPPEL_URGENT_NOTES_C',
              ),
              7 => 
              array (
                'name' => 'id_number_c',
                'label' => 'LBL_ID_NUMBER_C',
              ),
            ),
          ),
          11 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
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
          12 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL9',
            'label' => 'LBL_RECORDVIEW_PANEL9',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'status_transfer_c',
                'label' => 'LBL_STATUS_TRANSFER',
              ),
              1 => 
              array (
                'name' => 'first_list_date_c',
                'label' => 'LBL_FIRST_LIST_DATE_C',
              ),
              2 => 
              array (
                'name' => 'end_date_c',
                'label' => 'LBL_END_DATE_C',
              ),
              3 => 
              array (
                'name' => 'scheduled_listing_date_c',
                'label' => 'LBL_SCHEDULED_LISTING_DATE_C',
              ),
              4 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'sale_price_c',
                'label' => 'LBL_SALE_PRICE_C',
              ),
              5 => 
              array (
                'name' => 'paid_c',
                'label' => 'LBL_PAID_C',
              ),
              6 => 
              array (
                'name' => 'number_of_times_relisted_c',
                'label' => 'LBL_NUMBER_OF_TIMES_RELISTED_C',
              ),
              7 => 
              array (
                'name' => 'start_incentive_amount_c',
                'label' => 'LBL_START_INCENTIVE_AMOUNT_C',
              ),
              8 => 
              array (
                'name' => 'finish_incentive_amount_c',
                'label' => 'LBL_FINISH_INCENTIVE_AMOUNT_C',
              ),
              9 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'ebay_fees_c',
                'label' => 'LBL_EBAY_FEES_C',
              ),
              10 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'total_cost_c',
                'label' => 'LBL_TOTAL_COST_C',
              ),
              11 => 
              array (
                'name' => 'suggested_incentive_c',
                'label' => 'LBL_SUGGESTED_INCENTIVE_C',
              ),
              12 => 
              array (
                'name' => 'company_c',
                'label' => 'LBL_COMPANY_C',
              ),
              13 => 
              array (
                'name' => 'sales_origin_c',
                'label' => 'LBL_SALES_ORIGIN_C',
              ),
              14 => 
              array (
                'name' => 'ebay_item_number_c',
                'label' => 'LBL_EBAY_ITEM_NUMBER_C',
              ),
              15 => 
              array (
                'name' => 'ebay_link_c',
                'label' => 'LBL_EBAY_LINK_C',
              ),
              16 => 
              array (
                'name' => 'joint_listed_with_pid_c',
                'label' => 'LBL_JOINT_LISTED_WITH_PID_C',
              ),
              17 => 
              array (
                'name' => 'sales_form_data_c',
                'studio' => 'visible',
                'label' => 'LBL_SALES_FORM_DATA',
              ),
              18 => 
              array (
                'name' => 'buyer_info_text_array_c',
                'studio' => 'visible',
                'label' => 'LBL_BUYER_INFO_TEXT_ARRAY',
              ),
              19 => 
              array (
                'name' => 'crm_all_notes_from_inventory_c',
                'studio' => 'visible',
                'label' => 'LBL_CRM_ALL_NOTES_FROM_INVENTORY',
              ),
            ),
          ),
          13 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL10',
            'label' => 'LBL_RECORDVIEW_PANEL10',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'type_transfer_c',
                'label' => 'LBL_TYPE_TRANSFER',
              ),
              1 => 
              array (
                'name' => 'status_ttransfer_c',
                'label' => 'LBL_STATUS_TTRANSFER',
              ),
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
