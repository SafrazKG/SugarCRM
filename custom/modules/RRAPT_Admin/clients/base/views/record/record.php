<?php
$module_name = 'RRAPT_Admin';
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
                'acl_module' => 'RRAPT_Admin',
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
                'name' => 'date_field_c',
                'label' => 'LBL_DATE_FIELD',
              ),
              1 => 
              array (
                'name' => 'day_field_c',
                'label' => 'LBL_DAY_FIELD',
              ),
              2 => 
              array (
                'name' => 'active_c',
                'label' => 'LBL_ACTIVE',
              ),
              3 => 
              array (
              ),
              4 => 
              array (
                'name' => 'transfer_8am_c',
                'label' => 'LBL_TRANSFER_8AM',
              ),
              5 => 
              array (
                'name' => 'mortgage_8am_c',
                'label' => 'LBL_MORTGAGE_8AM',
              ),
              6 => 
              array (
                'name' => 'transfer_9am_c',
                'label' => 'LBL_TRANSFER_9AM',
              ),
              7 => 
              array (
                'name' => 'mortgage_9am_c',
                'label' => 'LBL_MORTGAGE_9AM',
              ),
              8 => 
              array (
                'name' => 'transfer_10am_c',
                'label' => 'LBL_TRANSFER_10AM',
              ),
              9 => 
              array (
                'name' => 'mortgage_10am_c',
                'label' => 'LBL_MORTGAGE_10AM',
              ),
              10 => 
              array (
                'name' => 'transfer_11am_c',
                'label' => 'LBL_TRANSFER_11AM',
              ),
              11 => 
              array (
                'name' => 'mortgage_11am_c',
                'label' => 'LBL_MORTGAGE_11AM',
              ),
              12 => 
              array (
                'name' => 'transfer_12pm_c',
                'label' => 'LBL_TRANSFER_12PM',
              ),
              13 => 
              array (
                'name' => 'mortgage_12pm_c',
                'label' => 'LBL_MORTGAGE_12PM',
              ),
              14 => 
              array (
                'name' => 'transfer_1pm_c',
                'label' => 'LBL_TRANSFER_1PM',
              ),
              15 => 
              array (
                'name' => 'mortgage_1pm_c',
                'label' => 'LBL_MORTGAGE_1PM',
              ),
              16 => 
              array (
                'name' => 'transfer_2pm_c',
                'label' => 'LBL_TRANSFER_2PM',
              ),
              17 => 
              array (
                'name' => 'mortgage_2pm_c',
                'label' => 'LBL_MORTGAGE_2PM',
              ),
              18 => 
              array (
                'name' => 'transfer_3pm_c',
                'label' => 'LBL_TRANSFER_3PM',
              ),
              19 => 
              array (
                'name' => 'mortgage_3pm_c',
                'label' => 'LBL_MORTGAGE_3PM',
              ),
              20 => 
              array (
                'name' => 'transfer_4pm_c',
                'label' => 'LBL_TRANSFER_4PM',
              ),
              21 => 
              array (
                'name' => 'mortgage_4pm_c',
                'label' => 'LBL_MORTGAGE_4PM',
              ),
              22 => 
              array (
                'name' => 'transfer_5pm_c',
                'label' => 'LBL_TRANSFER_5PM',
              ),
              23 => 
              array (
                'name' => 'mortgage_5pm_c',
                'label' => 'LBL_MORTGAGE_5PM',
              ),
              24 => 
              array (
                'name' => 'transfer_6pm_c',
                'label' => 'LBL_TRANSFER_6PM',
              ),
              25 => 
              array (
                'name' => 'mortgage_6pm_c',
                'label' => 'LBL_MORTGAGE_6PM',
              ),
              26 => 
              array (
                'name' => 'transfer_7pm_c',
                'label' => 'LBL_TRANSFER_7PM',
              ),
              27 => 
              array (
                'name' => 'mortgage_7pm_c',
                'label' => 'LBL_MORTGAGE_7PM',
              ),
              28 => 
              array (
                'name' => 'transfer_8pm_c',
                'label' => 'LBL_TRANSFER_8PM',
              ),
              29 => 
              array (
                'name' => 'mortgage_8pm_c',
                'label' => 'LBL_MORTGAGE_8PM',
              ),
              30 => 
              array (
                'name' => 'transfer_9pm_c',
                'label' => 'LBL_TRANSFER_9PM',
              ),
              31 => 
              array (
                'name' => 'mortgage_9pm_c',
                'label' => 'LBL_MORTGAGE_9PM',
              ),
              32 => 
              array (
                'name' => 'transfer_10pm_c',
                'label' => 'LBL_TRANSFER_10PM',
              ),
              33 => 
              array (
                'name' => 'mortgage_10pm_c',
                'label' => 'LBL_MORTGAGE_10PM',
              ),
              34 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
            ),
          ),
          2 => 
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
