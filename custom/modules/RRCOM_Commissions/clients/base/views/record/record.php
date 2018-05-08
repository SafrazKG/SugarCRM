<?php
$module_name = 'RRCOM_Commissions';
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
                'acl_module' => 'RRCOM_Commissions',
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
                'name' => 'id_rr_c',
                'label' => 'LBL_ID_RR',
              ),
              1 => 
              array (
                'name' => 'consys_crm_id_c',
                'label' => 'LBL_CONSYS_CRM_ID',
              ),
              2 => 
              array (
                'name' => 'property_id_c',
                'label' => 'LBL_PROPERTY_ID',
              ),
              3 => 
              array (
                'name' => 'rrcom_commissions_accounts_1_name',
              ),
              4 => 
              array (
                'name' => 'rrcom_commissions_abc_mortgages_1_name',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'resort_c',
                'label' => 'LBL_RESORT',
              ),
              6 => 
              array (
                'name' => 'payment_status_c',
                'label' => 'LBL_PAYMENT_STATUS',
              ),
              7 => 
              array (
                'name' => 'assigned_to_fronter_c',
                'studio' => 'visible',
                'label' => 'LBL_ASSIGNED_TO_FRONTER',
              ),
              8 => 
              array (
                'name' => 'second_fronter_c',
                'studio' => 'visible',
                'label' => 'LBL_SECOND_FRONTER',
              ),
              9 => 
              array (
                'name' => 'assigned_to_closer_c',
                'studio' => 'visible',
                'label' => 'LBL_ASSIGNED_TO_CLOSER',
                'span' => 12,
              ),
              10 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'fronter_commission_c',
                'label' => 'LBL_FRONTER_COMMISSION',
              ),
              11 => 
              array (
                'name' => 'commission_r_c',
                'label' => 'LBL_COMMISSION_R',
              ),
              12 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'second_fronter_commission_c',
                'label' => 'LBL_SECOND_FRONTER_COMMISSION',
              ),
              13 => 
              array (
                'name' => 'commission_rr_c',
                'label' => 'LBL_COMMISSION_RR',
              ),
              14 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'assigned_to_closer_commissio_c',
                'label' => 'LBL_ASSIGNED_TO_CLOSER_COMMISSIO',
              ),
              15 => 
              array (
                'name' => 'commission_c',
                'label' => 'LBL_COMMISSION',
              ),
              16 => 
              array (
                'name' => 'sale_date_c',
                'label' => 'LBL_SALE_DATE',
              ),
              17 => 
              array (
                'name' => 'payment_date_c',
                'label' => 'LBL_PAYMENT_DATE',
              ),
              18 => 
              array (
                'name' => 'note_c',
                'studio' => 'visible',
                'label' => 'LBL_NOTE',
              ),
              19 => 
              array (
                'name' => 'pay_type_c',
                'label' => 'LBL_PAY_TYPE',
              ),
              20 => 
              array (
                'name' => 'deal_type_c',
                'label' => 'LBL_DEAL_TYPE',
              ),
              21 => 
              array (
                'name' => 'holding_c',
                'label' => 'LBL_HOLDING',
              ),
              22 => 
              array (
                'name' => 'holding_rr_c',
                'label' => 'LBL_HOLDING_RR',
              ),
              23 => 
              array (
                'name' => 'bonus_month_c',
                'label' => 'LBL_BONUS_MONTH',
              ),
              24 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'bonus_c',
                'label' => 'LBL_BONUS',
              ),
              25 => 
              array (
                'name' => 'invoice_c',
                'label' => 'LBL_INVOICE',
              ),
              26 => 
              array (
                'name' => 'rec_status_c',
                'label' => 'LBL_REC_STATUS',
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
