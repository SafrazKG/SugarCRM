<?php

$manifest = array (
    'readme' => '',
    'key' => 'addoptify-customer-journey-custom-modules-abc_deedbacks-abc_estoppels-abc_inventories-abc_transfers',
    'description' => 'Enables the Customer Journey Plugin® for modules: abc_Deedbacks, abc_Estoppels, abc_Inventories, abc_Transfers',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Customer Journey Plugin® - Custom Modules - abc_Deedbacks, abc_Estoppels, abc_Inventories, abc_Transfers - 1.0.7',
    'published_date' => '2018-04-20 15:00:22',
    'type' => 'module',
    'version' => '1.0.7',
    'remove_tables' => 'prompt',
    'author' => 'Emil Kilhage <emil@addoptify.com>',
    array ('acceptable_sugar_versions' =>  array ('7.6.x', '7.7.x', '7.8.x', '7.9.x', '7.10.x', '7.11.x')),
    array ('acceptable_sugar_flavors' => array ('PRO', 'CORP', 'ENT', 'ULT')),
);

$installdefs = array (
    'id' => 'addoptify-customer-journey-custom-modules-abc_deedbacks-abc_estoppels-abc_inventories-abc_transfers',
    'post_execute' => array (
        '<basepath>/actions/post_install_actions.php',
    ),
    'post_uninstall' => array (
        '<basepath>/actions/post_uninstall_actions.php',
    ),
    'copy' => array (
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Deedbacks/Ext/LogicHooks/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Deedbacks/Ext/LogicHooks/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Deedbacks/Ext/Vardefs/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Deedbacks/Ext/Vardefs/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Deedbacks/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Deedbacks/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/modules/abc_Deedbacks/CustomerJourney/EnumManager.php',
            'to' => 'custom/modules/abc_Deedbacks/CustomerJourney/EnumManager.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
            'to' => 'custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Deedbacks.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Estoppels.php',
            'to' => 'custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Estoppels/Ext/LogicHooks/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Estoppels/Ext/LogicHooks/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Estoppels/Ext/Vardefs/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Estoppels/Ext/Vardefs/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Estoppels/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Estoppels/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/modules/abc_Estoppels/CustomerJourney/EnumManager.php',
            'to' => 'custom/modules/abc_Estoppels/CustomerJourney/EnumManager.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Estoppels.php',
            'to' => 'custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Estoppels.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Inventories.php',
            'to' => 'custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Inventories/Ext/LogicHooks/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Inventories/Ext/LogicHooks/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Inventories/Ext/Vardefs/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Inventories/Ext/Vardefs/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Inventories/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Inventories/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/modules/abc_Inventories/CustomerJourney/EnumManager.php',
            'to' => 'custom/modules/abc_Inventories/CustomerJourney/EnumManager.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Inventories.php',
            'to' => 'custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Inventories.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/clients/base/views/dri-customer-journey-dashlet/abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Transfers.php',
            'to' => 'custom/Extension/modules/DRI_Workflows/Ext/Vardefs/parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Transfers/Ext/LogicHooks/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Transfers/Ext/LogicHooks/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Transfers/Ext/Vardefs/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Transfers/Ext/Vardefs/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/modules/abc_Transfers/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
            'to' => 'custom/Extension/modules/abc_Transfers/Ext/clients/base/layouts/extra-info/addoptify-customer-journey-parent.php',
        ),
        array (
            'from' => '<basepath>/src/custom/modules/abc_Transfers/CustomerJourney/EnumManager.php',
            'to' => 'custom/modules/abc_Transfers/CustomerJourney/EnumManager.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/bg_BG.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/cs_CZ.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/da_DK.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/de_DE.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/el_EL.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/es_ES.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/fr_FR.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/he_IL.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/hu_HU.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/hr_HR.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/it_it.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/lt_LT.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/ja_JP.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/ko_KR.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/lv_LV.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/nb_NO.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/nl_NL.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/pl_PL.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_PT.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/ro_RO.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/ru_RU.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/sv_SE.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/th_TH.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/tr_TR.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_TW.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/zh_CN.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/pt_BR.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/ca_ES.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/en_UK.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/sr_RS.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/sk_SK.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/sq_AL.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/et_EE.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/es_LA.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/fi_FI.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/ar_SA.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
        array (
            'from' => '<basepath>/src/custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Transfers.php',
            'to' => 'custom/Extension/application/Ext/Language/uk_UA.x-addoptify-customer-journey-parent-abc_Transfers.php',
        ),
    ),
    'beans' => array (),
);
