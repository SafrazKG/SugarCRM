<?php
$module_name = 'abc_Estoppels';
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
                'acl_module' => 'abc_Estoppels',
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
                'name' => 'property_information_c',
                'label' => 'LBL_PROPERTY_INFORMATION',
              ),
              1 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
              ),
              2 => 
              array (
                'name' => 'name_on_deed_ownership_c',
                'label' => 'LBL_NAME_ON_DEED_OWNERSHIP',
              ),
              3 => 
              array (
                'name' => 'deed_or_rtu_c',
                'label' => 'LBL_DEED_OR_RTU',
              ),
              4 => 
              array (
                'name' => 'rtu_expiration_c',
                'label' => 'LBL_RTU_EXPIRATION',
              ),
              5 => 
              array (
                'name' => 'usage_type_c',
                'label' => 'LBL_USAGE_TYPE',
              ),
              6 => 
              array (
                'name' => 'first_year_available_c',
                'label' => 'LBL_FIRST_YEAR_AVAILABLE',
              ),
              7 => 
              array (
                'name' => 'usage_period_c',
                'label' => 'LBL_USAGE_PERIOD',
              ),
              8 => 
              array (
                'name' => 'black_out_periods_c',
                'label' => 'LBL_BLACK_OUT_PERIODS',
              ),
              9 => 
              array (
                'name' => 'check_in_days_c',
                'label' => 'LBL_CHECK_IN_DAYS',
              ),
              10 => 
              array (
                'name' => 'fixed_week_c',
                'label' => 'LBL_FIXED_WEEK',
              ),
              11 => 
              array (
                'name' => 'floating_weeks_c',
                'label' => 'LBL_FLOATING_WEEKS',
              ),
              12 => 
              array (
                'name' => 'season_c',
                'label' => 'LBL_SEASON',
              ),
              13 => 
              array (
                'name' => 'deeded_week_c',
                'label' => 'LBL_DEEDED_WEEK',
              ),
              14 => 
              array (
                'name' => 'number_of_points_c',
                'label' => 'LBL_NUMBER_OF_POINTS',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 'assigned_user_name',
              1 => 'team_name',
              2 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
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
          3 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'building_c',
                'label' => 'LBL_BUILDING',
              ),
              1 => 
              array (
                'name' => 'unit_c',
                'label' => 'LBL_UNIT',
              ),
              2 => 
              array (
                'name' => 'unit_name_c',
                'label' => 'LBL_UNIT_NAME',
              ),
              3 => 
              array (
                'name' => 'bedroom_c',
                'label' => 'LBL_BEDROOM',
              ),
              4 => 
              array (
                'name' => 'sleeps_c',
                'label' => 'LBL_SLEEPS',
              ),
              5 => 
              array (
                'name' => 'bathroom_c',
                'label' => 'LBL_BATHROOM',
              ),
              6 => 
              array (
                'name' => 'jacuzzi_c',
                'label' => 'LBL_JACUZZI',
              ),
              7 => 
              array (
                'name' => 'lock_off_c',
                'label' => 'LBL_LOCK_OFF',
              ),
              8 => 
              array (
                'name' => 'kitchen_c',
                'label' => 'LBL_KITCHEN',
              ),
              9 => 
              array (
                'name' => 'sqft_c',
                'label' => 'LBL_SQFT',
              ),
              10 => 
              array (
                'name' => 'estoppel_requirements_notes_c',
                'studio' => 'visible',
                'label' => 'LBL_ESTOPPEL_REQUIREMENTS_NOTES',
                'span' => 12,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
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
                'name' => 'maintenance_fees_information_c',
                'label' => 'LBL_MAINTENANCE_FEES_INFORMATION',
              ),
              1 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'special_assessments_amount_c',
                'label' => 'LBL_SPECIAL_ASSESSMENTS_AMOUNT',
              ),
              2 => 
              array (
                'name' => 'special_assessments_due_date_c',
                'label' => 'LBL_SPECIAL_ASSESSMENTS_DUE_DATE',
              ),
              3 => 
              array (
                'name' => 'of_years_for_special_asses_c',
                'label' => 'LBL_OF_YEARS_FOR_SPECIAL_ASSES',
              ),
              4 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'transfer_fee_amount_c',
                'label' => 'LBL_TRANSFER_FEE_AMOUNT',
                'span' => 12,
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => true,
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
                'name' => 'estoppel_bed_baths_c',
                'label' => 'LBL_ESTOPPEL_BED_BATHS',
              ),
              1 => 
              array (
                'name' => 'estoppel_weekor_points_value_c',
                'label' => 'LBL_ESTOPPEL_WEEKOR_POINTS_VALUE',
              ),
              2 => 
              array (
                'name' => 'estoppel_unit_c',
                'label' => 'LBL_ESTOPPEL_UNIT',
              ),
              3 => 
              array (
                'name' => 'estoppel_urgent_notes_c',
                'label' => 'LBL_ESTOPPEL_URGENT_NOTES',
              ),
              4 => 
              array (
                'name' => 'id_number_c',
                'label' => 'LBL_ID_NUMBER',
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
                'name' => 'crmid_c',
                'label' => 'LBL_CRMID',
              ),
              1 => 
              array (
                'name' => 'sale_status_c',
                'label' => 'LBL_SALE_STATUS',
              ),
              2 => 
              array (
                'name' => 'deceased_seller_involved_c',
                'label' => 'LBL_DECEASED_SELLER_INVOLVED',
                'span' => 12,
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
