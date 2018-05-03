<?php
$viewdefs['Contacts'] = 
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
                'type' => 'manage-subscription',
                'name' => 'manage_subscription_button',
                'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
                'showOn' => 'view',
                'value' => 'edit',
              ),
              6 => 
              array (
                'type' => 'vcard',
                'name' => 'vcard_button',
                'label' => 'LBL_VCARD_DOWNLOAD',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'divider',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Contacts',
                'acl_action' => 'create',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              12 => 
              array (
                'type' => 'divider',
              ),
              13 => 
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
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
              ),
              1 => 
              array (
                'name' => 'full_name',
                'label' => 'LBL_NAME',
                'dismiss_label' => true,
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
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
                'name' => 'account_name',
              ),
              1 => 
              array (
                'name' => 'contact_type_c',
                'label' => 'LBL_CONTACT_TYPE',
              ),
              2 => 'phone_work',
              3 => 
              array (
                'name' => 'phone_other',
                'comment' => 'Other phone number for the contact',
                'label' => 'LBL_OTHER_PHONE',
              ),
              4 => 'phone_mobile',
              5 => 'email',
              6 => 
              array (
                'name' => 'role_ps_c',
                'label' => 'LBL_ROLE_PS',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'relationship_d_c',
                'label' => 'LBL_RELATIONSHIP_D',
              ),
              9 => 
              array (
                'name' => 'relationship_status_c',
                'label' => 'LBL_RELATIONSHIP_STATUS',
              ),
              10 => 
              array (
                'name' => 'primary_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_PRIMARY_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'primary_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'primary_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'primary_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'primary_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'primary_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              11 => 
              array (
              ),
              12 => 
              array (
                'name' => 'abc_transfers_contacts_1_name',
              ),
            ),
          ),
          2 => 
          array (
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'assigned_c',
                'studio' => 'visible',
                'label' => 'LBL_ASSIGNED',
              ),
              2 => 'team_name',
              3 => 
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
              4 => 
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
