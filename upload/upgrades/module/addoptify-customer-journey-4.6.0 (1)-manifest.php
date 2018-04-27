<?php

$manifest = array (
  'readme' => '',
  'key' => 'addoptify-customer-journey',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Customer Journey Plugin® - 4.6.0',
  'published_date' => '2018-02-02 15:19:13',
  'type' => 'module',
  'version' => '4.6.0',
  'remove_tables' => 'prompt',
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '7.6.x',
      1 => '7.7.x',
      2 => '7.8.x',
      3 => '7.9.x',
      4 => '7.10.x',
      5 => '7.11.x',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'PRO',
      1 => 'CORP',
      2 => 'ENT',
      3 => 'ULT',
    ),
  ),
  'author' => 'Emil Kilhage <emil@addoptify.com>',
);

$installdefs = array (
  'id' => 'addoptify-customer-journey',
  'post_execute' => 
  array (
    0 => '<basepath>/actions/post_install_actions.php',
  ),
  'post_uninstall' => 
  array (
    0 => '<basepath>/actions/post_uninstall_actions.php',
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/layouts/dri-workflows/dri-workflows.js',
      'to' => 'custom/clients/base/layouts/dri-workflows/dri-workflows.js',
    ),
    1 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/layouts/dri-workflows/dri-workflows.php',
      'to' => 'custom/clients/base/layouts/dri-workflows/dri-workflows.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/fields/cj_progress_bar/detail.hbs',
      'to' => 'custom/clients/base/fields/cj_progress_bar/detail.hbs',
    ),
    3 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/fields/cj_progress_bar/cj_progress_bar.js',
      'to' => 'custom/clients/base/fields/cj_progress_bar/cj_progress_bar.js',
    ),
    4 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/fields/cj_time/cj_time.js',
      'to' => 'custom/clients/base/fields/cj_time/cj_time.js',
    ),
    5 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/fields/cj_time/edit.hbs',
      'to' => 'custom/clients/base/fields/cj_time/edit.hbs',
    ),
    6 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-license-errors/dri-license-errors.js',
      'to' => 'custom/clients/base/views/dri-license-errors/dri-license-errors.js',
    ),
    7 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-customer-journey-dashlet/dri-customer-journey-dashlet.php',
      'to' => 'custom/clients/base/views/dri-customer-journey-dashlet/dri-customer-journey-dashlet.php',
    ),
    8 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-customer-journey-dashlet/error.hbs',
      'to' => 'custom/clients/base/views/dri-customer-journey-dashlet/error.hbs',
    ),
    9 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-customer-journey-dashlet/dri-customer-journey-dashlet.js',
      'to' => 'custom/clients/base/views/dri-customer-journey-dashlet/dri-customer-journey-dashlet.js',
    ),
    10 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-customer-journey-dashlet/dri-customer-journey-dashlet.hbs',
      'to' => 'custom/clients/base/views/dri-customer-journey-dashlet/dri-customer-journey-dashlet.hbs',
    ),
    11 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-customer-journey-dashlet/invalid-license.hbs',
      'to' => 'custom/clients/base/views/dri-customer-journey-dashlet/invalid-license.hbs',
    ),
    12 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflows-header/dri-workflows-header.js',
      'to' => 'custom/clients/base/views/dri-workflows-header/dri-workflows-header.js',
    ),
    13 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflows-header/dri-workflows-header.hbs',
      'to' => 'custom/clients/base/views/dri-workflows-header/dri-workflows-header.hbs',
    ),
    14 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflows-header/dri-workflows-header.php',
      'to' => 'custom/clients/base/views/dri-workflows-header/dri-workflows-header.php',
    ),
    15 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflow/dri-workflow.hbs',
      'to' => 'custom/clients/base/views/dri-workflow/dri-workflow.hbs',
    ),
    16 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflow/error.hbs',
      'to' => 'custom/clients/base/views/dri-workflow/error.hbs',
    ),
    17 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflow/dri-workflow.less',
      'to' => 'custom/clients/base/views/dri-workflow/dri-workflow.less',
    ),
    18 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflow/dri-workflow.js',
      'to' => 'custom/clients/base/views/dri-workflow/dri-workflow.js',
    ),
    19 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflow/dri-workflow.php',
      'to' => 'custom/clients/base/views/dri-workflow/dri-workflow.php',
    ),
    20 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflow/invalid-license.hbs',
      'to' => 'custom/clients/base/views/dri-workflow/invalid-license.hbs',
    ),
    21 => 
    array (
      'from' => '<basepath>/src/custom/clients/base/views/dri-workflow/dri-workflow.css',
      'to' => 'custom/clients/base/views/dri-workflow/dri-workflow.css',
    ),
    22 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/JSGroupings/addCssLoaderPlugin.php',
      'to' => 'custom/Extension/application/Ext/JSGroupings/addCssLoaderPlugin.php',
    ),
    23 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Utils/dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Utils/dri-customer-journey.php',
    ),
    24 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/cs_CZ.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/cs_CZ.dri-customer-journey.php',
    ),
    25 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ko_KR.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/ko_KR.dri-customer-journey.php',
    ),
    26 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sk_SK.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/sk_SK.dri-customer-journey.php',
    ),
    27 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ru_RU.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/ru_RU.dri-customer-journey.php',
    ),
    28 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nl_NL.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/nl_NL.dri-customer-journey.php',
    ),
    29 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fi_FI.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/fi_FI.dri-customer-journey.php',
    ),
    30 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_us.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/en_us.dri-customer-journey.php',
    ),
    31 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ro_RO.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/ro_RO.dri-customer-journey.php',
    ),
    32 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/fr_FR.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/fr_FR.dri-customer-journey.php',
    ),
    33 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/en_UK.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/en_UK.dri-customer-journey.php',
    ),
    34 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/uk_UA.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/uk_UA.dri-customer-journey.php',
    ),
    35 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/de_DE.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/de_DE.dri-customer-journey.php',
    ),
    36 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/tr_TR.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/tr_TR.dri-customer-journey.php',
    ),
    37 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_PT.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/pt_PT.dri-customer-journey.php',
    ),
    38 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/it_it.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/it_it.dri-customer-journey.php',
    ),
    39 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/et_EE.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/et_EE.dri-customer-journey.php',
    ),
    40 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pl_PL.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/pl_PL.dri-customer-journey.php',
    ),
    41 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/hu_HU.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/hu_HU.dri-customer-journey.php',
    ),
    42 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/zh_CN.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/zh_CN.dri-customer-journey.php',
    ),
    43 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ar_SA.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/ar_SA.dri-customer-journey.php',
    ),
    44 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lt_LT.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/lt_LT.dri-customer-journey.php',
    ),
    45 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sr_RS.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/sr_RS.dri-customer-journey.php',
    ),
    46 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/he_IL.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/he_IL.dri-customer-journey.php',
    ),
    47 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/bg_BG.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/bg_BG.dri-customer-journey.php',
    ),
    48 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ja_JP.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/ja_JP.dri-customer-journey.php',
    ),
    49 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/pt_BR.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/pt_BR.dri-customer-journey.php',
    ),
    50 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/ca_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/ca_ES.dri-customer-journey.php',
    ),
    51 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sq_AL.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/sq_AL.dri-customer-journey.php',
    ),
    52 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/el_EL.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/el_EL.dri-customer-journey.php',
    ),
    53 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/es_ES.dri-customer-journey.php',
    ),
    54 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/lv_LV.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/lv_LV.dri-customer-journey.php',
    ),
    55 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/es_LA.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/es_LA.dri-customer-journey.php',
    ),
    56 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/sv_SE.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/sv_SE.dri-customer-journey.php',
    ),
    57 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/da_DK.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/da_DK.dri-customer-journey.php',
    ),
    58 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Language/nb_NO.dri-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/Language/nb_NO.dri-customer-journey.php',
    ),
    59 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/WirelessModuleRegistry/addoptify-customer-journey.php',
      'to' => 'custom/Extension/application/Ext/WirelessModuleRegistry/addoptify-customer-journey.php',
    ),
    60 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/clients/base/filters/default/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/clients/base/filters/default/dri-customer-journey.php',
    ),
    61 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/clients/base/views/record/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/clients/base/views/record/dri-customer-journey.php',
    ),
    62 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/cs_CZ.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/cs_CZ.dri-customer-journey.php',
    ),
    63 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/ko_KR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/ko_KR.dri-customer-journey.php',
    ),
    64 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/sk_SK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/sk_SK.dri-customer-journey.php',
    ),
    65 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/ru_RU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/ru_RU.dri-customer-journey.php',
    ),
    66 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/nl_NL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/nl_NL.dri-customer-journey.php',
    ),
    67 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/fi_FI.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/fi_FI.dri-customer-journey.php',
    ),
    68 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/en_us.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/en_us.dri-customer-journey.php',
    ),
    69 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/ro_RO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/ro_RO.dri-customer-journey.php',
    ),
    70 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/fr_FR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/fr_FR.dri-customer-journey.php',
    ),
    71 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/en_UK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/en_UK.dri-customer-journey.php',
    ),
    72 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/uk_UA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/uk_UA.dri-customer-journey.php',
    ),
    73 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/de_DE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/de_DE.dri-customer-journey.php',
    ),
    74 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/tr_TR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/tr_TR.dri-customer-journey.php',
    ),
    75 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/pt_PT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/pt_PT.dri-customer-journey.php',
    ),
    76 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/it_it.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/it_it.dri-customer-journey.php',
    ),
    77 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/et_EE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/et_EE.dri-customer-journey.php',
    ),
    78 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/pl_PL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/pl_PL.dri-customer-journey.php',
    ),
    79 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/hu_HU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/hu_HU.dri-customer-journey.php',
    ),
    80 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/zh_CN.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/zh_CN.dri-customer-journey.php',
    ),
    81 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/ar_SA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/ar_SA.dri-customer-journey.php',
    ),
    82 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/lt_LT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/lt_LT.dri-customer-journey.php',
    ),
    83 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/sr_RS.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/sr_RS.dri-customer-journey.php',
    ),
    84 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/he_IL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/he_IL.dri-customer-journey.php',
    ),
    85 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/bg_BG.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/bg_BG.dri-customer-journey.php',
    ),
    86 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/ja_JP.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/ja_JP.dri-customer-journey.php',
    ),
    87 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/pt_BR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/pt_BR.dri-customer-journey.php',
    ),
    88 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/ca_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/ca_ES.dri-customer-journey.php',
    ),
    89 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/sq_AL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/sq_AL.dri-customer-journey.php',
    ),
    90 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/el_EL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/el_EL.dri-customer-journey.php',
    ),
    91 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/es_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/es_ES.dri-customer-journey.php',
    ),
    92 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/lv_LV.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/lv_LV.dri-customer-journey.php',
    ),
    93 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/es_LA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/es_LA.dri-customer-journey.php',
    ),
    94 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/sv_SE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/sv_SE.dri-customer-journey.php',
    ),
    95 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/da_DK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/da_DK.dri-customer-journey.php',
    ),
    96 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Language/nb_NO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Language/nb_NO.dri-customer-journey.php',
    ),
    97 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/LogicHooks/dri-customer-journey.php',
    ),
    98 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Calls/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Calls/Ext/Vardefs/dri-customer-journey.php',
    ),
    99 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/clients/base/filters/default/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/clients/base/filters/default/dri-customer-journey.php',
    ),
    100 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/clients/base/views/record/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/clients/base/views/record/dri-customer-journey.php',
    ),
    101 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/cs_CZ.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/cs_CZ.dri-customer-journey.php',
    ),
    102 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/ko_KR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/ko_KR.dri-customer-journey.php',
    ),
    103 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/sk_SK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/sk_SK.dri-customer-journey.php',
    ),
    104 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/ru_RU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/ru_RU.dri-customer-journey.php',
    ),
    105 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/nl_NL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/nl_NL.dri-customer-journey.php',
    ),
    106 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/fi_FI.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/fi_FI.dri-customer-journey.php',
    ),
    107 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/en_us.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/en_us.dri-customer-journey.php',
    ),
    108 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/ro_RO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/ro_RO.dri-customer-journey.php',
    ),
    109 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/fr_FR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/fr_FR.dri-customer-journey.php',
    ),
    110 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/en_UK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/en_UK.dri-customer-journey.php',
    ),
    111 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/uk_UA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/uk_UA.dri-customer-journey.php',
    ),
    112 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/de_DE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/de_DE.dri-customer-journey.php',
    ),
    113 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/tr_TR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/tr_TR.dri-customer-journey.php',
    ),
    114 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/pt_PT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/pt_PT.dri-customer-journey.php',
    ),
    115 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/it_it.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/it_it.dri-customer-journey.php',
    ),
    116 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/et_EE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/et_EE.dri-customer-journey.php',
    ),
    117 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/pl_PL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/pl_PL.dri-customer-journey.php',
    ),
    118 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/hu_HU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/hu_HU.dri-customer-journey.php',
    ),
    119 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/zh_CN.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/zh_CN.dri-customer-journey.php',
    ),
    120 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/ar_SA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/ar_SA.dri-customer-journey.php',
    ),
    121 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/lt_LT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/lt_LT.dri-customer-journey.php',
    ),
    122 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/sr_RS.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/sr_RS.dri-customer-journey.php',
    ),
    123 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/he_IL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/he_IL.dri-customer-journey.php',
    ),
    124 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/bg_BG.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/bg_BG.dri-customer-journey.php',
    ),
    125 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/ja_JP.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/ja_JP.dri-customer-journey.php',
    ),
    126 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/pt_BR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/pt_BR.dri-customer-journey.php',
    ),
    127 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/ca_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/ca_ES.dri-customer-journey.php',
    ),
    128 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/sq_AL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/sq_AL.dri-customer-journey.php',
    ),
    129 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/el_EL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/el_EL.dri-customer-journey.php',
    ),
    130 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/es_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/es_ES.dri-customer-journey.php',
    ),
    131 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/lv_LV.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/lv_LV.dri-customer-journey.php',
    ),
    132 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/es_LA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/es_LA.dri-customer-journey.php',
    ),
    133 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/sv_SE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/sv_SE.dri-customer-journey.php',
    ),
    134 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/da_DK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/da_DK.dri-customer-journey.php',
    ),
    135 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Language/nb_NO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Language/nb_NO.dri-customer-journey.php',
    ),
    136 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/LogicHooks/dri-customer-journey.php',
    ),
    137 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Tasks/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Tasks/Ext/Vardefs/dri-customer-journey.php',
    ),
    138 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Opportunities/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
    ),
    139 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Opportunities/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/LogicHooks/dri-customer-journey.php',
    ),
    140 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Opportunities/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/dri-customer-journey.php',
    ),
    141 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Leads/Ext/clients/base/layouts/record-dashboard/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/record-dashboard/dri-customer-journey.php',
    ),
    142 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Leads/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
    ),
    143 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Leads/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Leads/Ext/LogicHooks/dri-customer-journey.php',
    ),
    144 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Leads/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/dri-customer-journey.php',
    ),
    145 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Contacts/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
    ),
    146 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Contacts/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/dri-customer-journey.php',
    ),
    147 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Contacts/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/dri-customer-journey.php',
    ),
    148 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Cases/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Cases/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
    ),
    149 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Cases/Ext/clients/base/views/record/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Cases/Ext/clients/base/views/record/dri-customer-journey.php',
    ),
    150 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Cases/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Cases/Ext/LogicHooks/dri-customer-journey.php',
    ),
    151 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Cases/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/dri-customer-journey.php',
    ),
    152 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Accounts/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/clients/base/layouts/extra-info/dri-customer-journey.php',
    ),
    153 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Accounts/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/LogicHooks/dri-customer-journey.php',
    ),
    154 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Accounts/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs/dri-customer-journey.php',
    ),
    155 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/clients/base/filters/basic/addoptify-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/clients/base/filters/basic/addoptify-customer-journey.php',
    ),
    156 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/clients/base/filters/default/addoptify-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/clients/base/filters/default/addoptify-customer-journey.php',
    ),
    157 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/cs_CZ.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/cs_CZ.dri-customer-journey.php',
    ),
    158 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/ko_KR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/ko_KR.dri-customer-journey.php',
    ),
    159 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/sk_SK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/sk_SK.dri-customer-journey.php',
    ),
    160 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/ru_RU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/ru_RU.dri-customer-journey.php',
    ),
    161 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/nl_NL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/nl_NL.dri-customer-journey.php',
    ),
    162 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/fi_FI.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/fi_FI.dri-customer-journey.php',
    ),
    163 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/en_us.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.dri-customer-journey.php',
    ),
    164 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/ro_RO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/ro_RO.dri-customer-journey.php',
    ),
    165 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/fr_FR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/fr_FR.dri-customer-journey.php',
    ),
    166 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/en_UK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/en_UK.dri-customer-journey.php',
    ),
    167 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/uk_UA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/uk_UA.dri-customer-journey.php',
    ),
    168 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/de_DE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/de_DE.dri-customer-journey.php',
    ),
    169 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/tr_TR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/tr_TR.dri-customer-journey.php',
    ),
    170 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/pt_PT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/pt_PT.dri-customer-journey.php',
    ),
    171 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/it_it.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/it_it.dri-customer-journey.php',
    ),
    172 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/et_EE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/et_EE.dri-customer-journey.php',
    ),
    173 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/pl_PL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/pl_PL.dri-customer-journey.php',
    ),
    174 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/hu_HU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/hu_HU.dri-customer-journey.php',
    ),
    175 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/zh_CN.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/zh_CN.dri-customer-journey.php',
    ),
    176 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/ar_SA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/ar_SA.dri-customer-journey.php',
    ),
    177 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/lt_LT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/lt_LT.dri-customer-journey.php',
    ),
    178 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/sr_RS.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/sr_RS.dri-customer-journey.php',
    ),
    179 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/he_IL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/he_IL.dri-customer-journey.php',
    ),
    180 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/bg_BG.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/bg_BG.dri-customer-journey.php',
    ),
    181 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/ja_JP.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/ja_JP.dri-customer-journey.php',
    ),
    182 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/pt_BR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/pt_BR.dri-customer-journey.php',
    ),
    183 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/ca_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/ca_ES.dri-customer-journey.php',
    ),
    184 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/sq_AL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/sq_AL.dri-customer-journey.php',
    ),
    185 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/el_EL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/el_EL.dri-customer-journey.php',
    ),
    186 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/es_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/es_ES.dri-customer-journey.php',
    ),
    187 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/lv_LV.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/lv_LV.dri-customer-journey.php',
    ),
    188 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/es_LA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/es_LA.dri-customer-journey.php',
    ),
    189 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/sv_SE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/sv_SE.dri-customer-journey.php',
    ),
    190 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/da_DK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/da_DK.dri-customer-journey.php',
    ),
    191 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Language/nb_NO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Language/nb_NO.dri-customer-journey.php',
    ),
    192 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Users/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Users/Ext/Vardefs/dri-customer-journey.php',
    ),
    193 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/tr_TR.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/tr_TR.dri_customer_journey_settings.php',
    ),
    194 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/es_LA.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/es_LA.dri_customer_journey_settings.php',
    ),
    195 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/de_DE.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/de_DE.dri_customer_journey_settings.php',
    ),
    196 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/sk_SK.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/sk_SK.dri_customer_journey_settings.php',
    ),
    197 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/ja_JP.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/ja_JP.dri_customer_journey_settings.php',
    ),
    198 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/el_EL.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/el_EL.dri_customer_journey_settings.php',
    ),
    199 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/fr_FR.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/fr_FR.dri_customer_journey_settings.php',
    ),
    200 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/sv_SE.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/sv_SE.dri_customer_journey_settings.php',
    ),
    201 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/pt_BR.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/pt_BR.dri_customer_journey_settings.php',
    ),
    202 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/lt_LT.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/lt_LT.dri_customer_journey_settings.php',
    ),
    203 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/en_UK.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/en_UK.dri_customer_journey_settings.php',
    ),
    204 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/ca_ES.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/ca_ES.dri_customer_journey_settings.php',
    ),
    205 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/ro_RO.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/ro_RO.dri_customer_journey_settings.php',
    ),
    206 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/et_EE.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/et_EE.dri_customer_journey_settings.php',
    ),
    207 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/sq_AL.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/sq_AL.dri_customer_journey_settings.php',
    ),
    208 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/sr_RS.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/sr_RS.dri_customer_journey_settings.php',
    ),
    209 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/cs_CZ.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/cs_CZ.dri_customer_journey_settings.php',
    ),
    210 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/he_IL.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/he_IL.dri_customer_journey_settings.php',
    ),
    211 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/pl_PL.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/pl_PL.dri_customer_journey_settings.php',
    ),
    212 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/nb_NO.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/nb_NO.dri_customer_journey_settings.php',
    ),
    213 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/pt_PT.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/pt_PT.dri_customer_journey_settings.php',
    ),
    214 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/fi_FI.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/fi_FI.dri_customer_journey_settings.php',
    ),
    215 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/uk_UA.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/uk_UA.dri_customer_journey_settings.php',
    ),
    216 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/es_ES.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/es_ES.dri_customer_journey_settings.php',
    ),
    217 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/ru_RU.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/ru_RU.dri_customer_journey_settings.php',
    ),
    218 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/da_DK.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/da_DK.dri_customer_journey_settings.php',
    ),
    219 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/ar_SA.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/ar_SA.dri_customer_journey_settings.php',
    ),
    220 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/nl_NL.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/nl_NL.dri_customer_journey_settings.php',
    ),
    221 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/it_it.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/it_it.dri_customer_journey_settings.php',
    ),
    222 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/ko_KR.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/ko_KR.dri_customer_journey_settings.php',
    ),
    223 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/lv_LV.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/lv_LV.dri_customer_journey_settings.php',
    ),
    224 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/zh_CN.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/zh_CN.dri_customer_journey_settings.php',
    ),
    225 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/bg_BG.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/bg_BG.dri_customer_journey_settings.php',
    ),
    226 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/hu_HU.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/hu_HU.dri_customer_journey_settings.php',
    ),
    227 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Language/en_us.dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.dri_customer_journey_settings.php',
    ),
    228 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Administration/Ext/Administration/dri_customer_journey_settings.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Administration/dri_customer_journey_settings.php',
    ),
    229 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/clients/base/filters/default/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/clients/base/filters/default/dri-customer-journey.php',
    ),
    230 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/clients/base/views/record/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/clients/base/views/record/dri-customer-journey.php',
    ),
    231 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/cs_CZ.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/cs_CZ.dri-customer-journey.php',
    ),
    232 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/ko_KR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/ko_KR.dri-customer-journey.php',
    ),
    233 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/sk_SK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/sk_SK.dri-customer-journey.php',
    ),
    234 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/ru_RU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/ru_RU.dri-customer-journey.php',
    ),
    235 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/nl_NL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/nl_NL.dri-customer-journey.php',
    ),
    236 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/fi_FI.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/fi_FI.dri-customer-journey.php',
    ),
    237 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/en_us.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/en_us.dri-customer-journey.php',
    ),
    238 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/ro_RO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/ro_RO.dri-customer-journey.php',
    ),
    239 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/fr_FR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/fr_FR.dri-customer-journey.php',
    ),
    240 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/en_UK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/en_UK.dri-customer-journey.php',
    ),
    241 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/uk_UA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/uk_UA.dri-customer-journey.php',
    ),
    242 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/de_DE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/de_DE.dri-customer-journey.php',
    ),
    243 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/tr_TR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/tr_TR.dri-customer-journey.php',
    ),
    244 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/pt_PT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/pt_PT.dri-customer-journey.php',
    ),
    245 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/it_it.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/it_it.dri-customer-journey.php',
    ),
    246 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/et_EE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/et_EE.dri-customer-journey.php',
    ),
    247 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/pl_PL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/pl_PL.dri-customer-journey.php',
    ),
    248 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/hu_HU.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/hu_HU.dri-customer-journey.php',
    ),
    249 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/zh_CN.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/zh_CN.dri-customer-journey.php',
    ),
    250 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/ar_SA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/ar_SA.dri-customer-journey.php',
    ),
    251 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/lt_LT.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/lt_LT.dri-customer-journey.php',
    ),
    252 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/sr_RS.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/sr_RS.dri-customer-journey.php',
    ),
    253 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/he_IL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/he_IL.dri-customer-journey.php',
    ),
    254 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/bg_BG.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/bg_BG.dri-customer-journey.php',
    ),
    255 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/ja_JP.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/ja_JP.dri-customer-journey.php',
    ),
    256 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/pt_BR.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/pt_BR.dri-customer-journey.php',
    ),
    257 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/ca_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/ca_ES.dri-customer-journey.php',
    ),
    258 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/sq_AL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/sq_AL.dri-customer-journey.php',
    ),
    259 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/el_EL.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/el_EL.dri-customer-journey.php',
    ),
    260 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/es_ES.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/es_ES.dri-customer-journey.php',
    ),
    261 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/lv_LV.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/lv_LV.dri-customer-journey.php',
    ),
    262 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/es_LA.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/es_LA.dri-customer-journey.php',
    ),
    263 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/sv_SE.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/sv_SE.dri-customer-journey.php',
    ),
    264 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/da_DK.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/da_DK.dri-customer-journey.php',
    ),
    265 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Language/nb_NO.dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Language/nb_NO.dri-customer-journey.php',
    ),
    266 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/LogicHooks/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/LogicHooks/dri-customer-journey.php',
    ),
    267 => 
    array (
      'from' => '<basepath>/src/custom/Extension/modules/Meetings/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/dri-customer-journey.php',
    ),
    268 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/clients/base/layouts/extra-info/extra-info.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/clients/base/layouts/extra-info/extra-info.php',
    ),
    269 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/Ext/LogicHooks/addoptify-customer-journey.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/Ext/LogicHooks/addoptify-customer-journey.php',
    ),
    270 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/de_DE.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/de_DE.lang.php',
    ),
    271 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/lv_LV.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/lv_LV.lang.php',
    ),
    272 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/es_LA.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/es_LA.lang.php',
    ),
    273 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/ar_SA.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/ar_SA.lang.php',
    ),
    274 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/sq_AL.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/sq_AL.lang.php',
    ),
    275 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/pt_PT.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/pt_PT.lang.php',
    ),
    276 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/ro_RO.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/ro_RO.lang.php',
    ),
    277 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/pt_BR.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/pt_BR.lang.php',
    ),
    278 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/sv_SE.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/sv_SE.lang.php',
    ),
    279 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/sk_SK.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/sk_SK.lang.php',
    ),
    280 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/fi_FI.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/fi_FI.lang.php',
    ),
    281 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/uk_UA.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/uk_UA.lang.php',
    ),
    282 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/cs_CZ.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/cs_CZ.lang.php',
    ),
    283 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/da_DK.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/da_DK.lang.php',
    ),
    284 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/ca_ES.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/ca_ES.lang.php',
    ),
    285 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/fr_FR.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/fr_FR.lang.php',
    ),
    286 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/tr_TR.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/tr_TR.lang.php',
    ),
    287 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/bg_BG.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/bg_BG.lang.php',
    ),
    288 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/sr_RS.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/sr_RS.lang.php',
    ),
    289 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/lt_LT.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/lt_LT.lang.php',
    ),
    290 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/it_it.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/it_it.lang.php',
    ),
    291 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/et_EE.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/et_EE.lang.php',
    ),
    292 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/en_UK.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/en_UK.lang.php',
    ),
    293 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/hu_HU.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/hu_HU.lang.php',
    ),
    294 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/nl_NL.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/nl_NL.lang.php',
    ),
    295 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/pl_PL.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/pl_PL.lang.php',
    ),
    296 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/en_us.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/en_us.lang.php',
    ),
    297 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/ru_RU.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/ru_RU.lang.php',
    ),
    298 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/ja_JP.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/ja_JP.lang.php',
    ),
    299 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/el_EL.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/el_EL.lang.php',
    ),
    300 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/zh_CN.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/zh_CN.lang.php',
    ),
    301 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/he_IL.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/he_IL.lang.php',
    ),
    302 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/nb_NO.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/nb_NO.lang.php',
    ),
    303 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/es_ES.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/es_ES.lang.php',
    ),
    304 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/language/ko_KR.lang.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/language/ko_KR.lang.php',
    ),
    305 => 
    array (
      'from' => '<basepath>/src/custom/include/SugarObjects/implements/customer_journey_parent/vardefs.php',
      'to' => 'custom/include/SugarObjects/implements/customer_journey_parent/vardefs.php',
    ),
    306 => 
    array (
      'from' => '<basepath>/src/custom/include/javascript/sugar7/plugins/CssLoader.js',
      'to' => 'custom/include/javascript/sugar7/plugins/CssLoader.js',
    ),
    307 => 
    array (
      'from' => '<basepath>/src/custom/modules/Opportunities/CustomerJourney/EnumManager.php',
      'to' => 'custom/modules/Opportunities/CustomerJourney/EnumManager.php',
    ),
    308 => 
    array (
      'from' => '<basepath>/src/custom/modules/Leads/LogicHook/DRICustomerJourney.php',
      'to' => 'custom/modules/Leads/LogicHook/DRICustomerJourney.php',
    ),
    309 => 
    array (
      'from' => '<basepath>/src/custom/modules/Leads/CustomerJourney/EnumManager.php',
      'to' => 'custom/modules/Leads/CustomerJourney/EnumManager.php',
    ),
    310 => 
    array (
      'from' => '<basepath>/src/custom/modules/Contacts/CustomerJourney/EnumManager.php',
      'to' => 'custom/modules/Contacts/CustomerJourney/EnumManager.php',
    ),
    311 => 
    array (
      'from' => '<basepath>/src/custom/modules/Cases/CustomerJourney/EnumManager.php',
      'to' => 'custom/modules/Cases/CustomerJourney/EnumManager.php',
    ),
    312 => 
    array (
      'from' => '<basepath>/src/custom/modules/Accounts/CustomerJourney/EnumManager.php',
      'to' => 'custom/modules/Accounts/CustomerJourney/EnumManager.php',
    ),
    313 => 
    array (
      'from' => '<basepath>/src/custom/modules/Users/clients/base/views/customer-journey-config-users/customer-journey-config-users.php',
      'to' => 'custom/modules/Users/clients/base/views/customer-journey-config-users/customer-journey-config-users.php',
    ),
    314 => 
    array (
      'from' => '<basepath>/src/custom/modules/Users/clients/base/views/customer-journey-config-users/customer-journey-config-users.js',
      'to' => 'custom/modules/Users/clients/base/views/customer-journey-config-users/customer-journey-config-users.js',
    ),
    315 => 
    array (
      'from' => '<basepath>/src/custom/data/acl/SugarACLCustomerJourney.php',
      'to' => 'custom/data/acl/SugarACLCustomerJourney.php',
    ),
    316 => 
    array (
      'from' => '<basepath>/src/custom/themes/default/less/dri-customer-journey.less',
      'to' => 'custom/themes/default/less/dri-customer-journey.less',
    ),
    317 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/mobile/layouts/edit/edit.php',
      'to' => 'modules/DRI_Workflows/clients/mobile/layouts/edit/edit.php',
    ),
    318 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/mobile/layouts/detail/detail.php',
      'to' => 'modules/DRI_Workflows/clients/mobile/layouts/detail/detail.php',
    ),
    319 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/mobile/layouts/list/list.php',
      'to' => 'modules/DRI_Workflows/clients/mobile/layouts/list/list.php',
    ),
    320 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/mobile/views/edit/edit.php',
      'to' => 'modules/DRI_Workflows/clients/mobile/views/edit/edit.php',
    ),
    321 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/mobile/views/detail/detail.php',
      'to' => 'modules/DRI_Workflows/clients/mobile/views/detail/detail.php',
    ),
    322 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/mobile/views/list/list.php',
      'to' => 'modules/DRI_Workflows/clients/mobile/views/list/list.php',
    ),
    323 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/filters/basic/basic.php',
      'to' => 'modules/DRI_Workflows/clients/base/filters/basic/basic.php',
    ),
    324 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/filters/default/default.php',
      'to' => 'modules/DRI_Workflows/clients/base/filters/default/default.php',
    ),
    325 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/subpanels/subpanels.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/subpanels/subpanels.php',
    ),
    326 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/configuration/configuration.js',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/configuration/configuration.js',
    ),
    327 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/configuration/configuration.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/configuration/configuration.php',
    ),
    328 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/record/record.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/record/record.php',
    ),
    329 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/record-dashboard/record-dashboard.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/record-dashboard/record-dashboard.php',
    ),
    330 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/extra-info/extra-info.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/extra-info/extra-info.php',
    ),
    331 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/edit/edit.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/edit/edit.php',
    ),
    332 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/detail/detail.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/detail/detail.php',
    ),
    333 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/layouts/configure-modules/configure-modules.php',
      'to' => 'modules/DRI_Workflows/clients/base/layouts/configure-modules/configure-modules.php',
    ),
    334 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/menus/header/header.php',
      'to' => 'modules/DRI_Workflows/clients/base/menus/header/header.php',
    ),
    335 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/api/DRIWorkflowsApi.php',
      'to' => 'modules/DRI_Workflows/clients/base/api/DRIWorkflowsApi.php',
    ),
    336 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/configure-modules-headerpane/configure-modules-headerpane.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/configure-modules-headerpane/configure-modules-headerpane.js',
    ),
    337 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/configure-modules-headerpane/configure-modules-headerpane.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/configure-modules-headerpane/configure-modules-headerpane.php',
    ),
    338 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/config-headerpane/config-headerpane.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/config-headerpane/config-headerpane.js',
    ),
    339 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/config-headerpane/config-headerpane.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/config-headerpane/config-headerpane.php',
    ),
    340 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/record/record.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/record/record.php',
    ),
    341 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/record/record.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/record/record.js',
    ),
    342 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/configure-modules-content/configure-modules-content.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/configure-modules-content/configure-modules-content.js',
    ),
    343 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/configure-modules-content/configure-modules-content.hbs',
      'to' => 'modules/DRI_Workflows/clients/base/views/configure-modules-content/configure-modules-content.hbs',
    ),
    344 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/configure-modules-content/configure-modules-content.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/configure-modules-content/configure-modules-content.php',
    ),
    345 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/config-content/config-content.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/config-content/config-content.js',
    ),
    346 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/config-content/config-content.hbs',
      'to' => 'modules/DRI_Workflows/clients/base/views/config-content/config-content.hbs',
    ),
    347 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/config-content/config-content.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/config-content/config-content.php',
    ),
    348 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/subpanel-list/subpanel-list.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/subpanel-list/subpanel-list.php',
    ),
    349 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/massupdate/massupdate.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/massupdate/massupdate.php',
    ),
    350 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/selection-list/selection-list.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/selection-list/selection-list.php',
    ),
    351 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/list/list.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/list/list.php',
    ),
    352 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/create-actions/create-actions.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/create-actions/create-actions.js',
    ),
    353 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/create-actions/create-actions.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/create-actions/create-actions.php',
    ),
    354 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/create/create.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/create/create.js',
    ),
    355 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/create/create.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/create/create.php',
    ),
    356 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/list-headerpane/list-headerpane.php',
      'to' => 'modules/DRI_Workflows/clients/base/views/list-headerpane/list-headerpane.php',
    ),
    357 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/clients/base/views/recordlist/recordlist.js',
      'to' => 'modules/DRI_Workflows/clients/base/views/recordlist/recordlist.js',
    ),
    358 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/LogicHook/ParentHook.php',
      'to' => 'modules/DRI_Workflows/LogicHook/ParentHook.php',
    ),
    359 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Ext/LogicHooks/license_check.php',
      'to' => 'modules/DRI_Workflows/Ext/LogicHooks/license_check.php',
    ),
    360 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'modules/DRI_Workflows/Ext/Vardefs/dri-customer-journey.php',
    ),
    361 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/VardefManager.php',
      'to' => 'modules/DRI_Workflows/VardefManager.php',
    ),
    362 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/de_DE.lang.php',
      'to' => 'modules/DRI_Workflows/language/de_DE.lang.php',
    ),
    363 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/lv_LV.lang.php',
      'to' => 'modules/DRI_Workflows/language/lv_LV.lang.php',
    ),
    364 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/es_LA.lang.php',
      'to' => 'modules/DRI_Workflows/language/es_LA.lang.php',
    ),
    365 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/ar_SA.lang.php',
      'to' => 'modules/DRI_Workflows/language/ar_SA.lang.php',
    ),
    366 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/sq_AL.lang.php',
      'to' => 'modules/DRI_Workflows/language/sq_AL.lang.php',
    ),
    367 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/pt_PT.lang.php',
      'to' => 'modules/DRI_Workflows/language/pt_PT.lang.php',
    ),
    368 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/ro_RO.lang.php',
      'to' => 'modules/DRI_Workflows/language/ro_RO.lang.php',
    ),
    369 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/pt_BR.lang.php',
      'to' => 'modules/DRI_Workflows/language/pt_BR.lang.php',
    ),
    370 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/sv_SE.lang.php',
      'to' => 'modules/DRI_Workflows/language/sv_SE.lang.php',
    ),
    371 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/sk_SK.lang.php',
      'to' => 'modules/DRI_Workflows/language/sk_SK.lang.php',
    ),
    372 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/fi_FI.lang.php',
      'to' => 'modules/DRI_Workflows/language/fi_FI.lang.php',
    ),
    373 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/uk_UA.lang.php',
      'to' => 'modules/DRI_Workflows/language/uk_UA.lang.php',
    ),
    374 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/cs_CZ.lang.php',
      'to' => 'modules/DRI_Workflows/language/cs_CZ.lang.php',
    ),
    375 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/da_DK.lang.php',
      'to' => 'modules/DRI_Workflows/language/da_DK.lang.php',
    ),
    376 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/ca_ES.lang.php',
      'to' => 'modules/DRI_Workflows/language/ca_ES.lang.php',
    ),
    377 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/fr_FR.lang.php',
      'to' => 'modules/DRI_Workflows/language/fr_FR.lang.php',
    ),
    378 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/tr_TR.lang.php',
      'to' => 'modules/DRI_Workflows/language/tr_TR.lang.php',
    ),
    379 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/bg_BG.lang.php',
      'to' => 'modules/DRI_Workflows/language/bg_BG.lang.php',
    ),
    380 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/sr_RS.lang.php',
      'to' => 'modules/DRI_Workflows/language/sr_RS.lang.php',
    ),
    381 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/lt_LT.lang.php',
      'to' => 'modules/DRI_Workflows/language/lt_LT.lang.php',
    ),
    382 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/it_it.lang.php',
      'to' => 'modules/DRI_Workflows/language/it_it.lang.php',
    ),
    383 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/et_EE.lang.php',
      'to' => 'modules/DRI_Workflows/language/et_EE.lang.php',
    ),
    384 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/en_UK.lang.php',
      'to' => 'modules/DRI_Workflows/language/en_UK.lang.php',
    ),
    385 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/hu_HU.lang.php',
      'to' => 'modules/DRI_Workflows/language/hu_HU.lang.php',
    ),
    386 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/nl_NL.lang.php',
      'to' => 'modules/DRI_Workflows/language/nl_NL.lang.php',
    ),
    387 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/pl_PL.lang.php',
      'to' => 'modules/DRI_Workflows/language/pl_PL.lang.php',
    ),
    388 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/en_us.lang.php',
      'to' => 'modules/DRI_Workflows/language/en_us.lang.php',
    ),
    389 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/ru_RU.lang.php',
      'to' => 'modules/DRI_Workflows/language/ru_RU.lang.php',
    ),
    390 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/ja_JP.lang.php',
      'to' => 'modules/DRI_Workflows/language/ja_JP.lang.php',
    ),
    391 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/el_EL.lang.php',
      'to' => 'modules/DRI_Workflows/language/el_EL.lang.php',
    ),
    392 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/zh_CN.lang.php',
      'to' => 'modules/DRI_Workflows/language/zh_CN.lang.php',
    ),
    393 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/he_IL.lang.php',
      'to' => 'modules/DRI_Workflows/language/he_IL.lang.php',
    ),
    394 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/nb_NO.lang.php',
      'to' => 'modules/DRI_Workflows/language/nb_NO.lang.php',
    ),
    395 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/es_ES.lang.php',
      'to' => 'modules/DRI_Workflows/language/es_ES.lang.php',
    ),
    396 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/language/ko_KR.lang.php',
      'to' => 'modules/DRI_Workflows/language/ko_KR.lang.php',
    ),
    397 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/vardefs.php',
      'to' => 'modules/DRI_Workflows/vardefs.php',
    ),
    398 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/DRI_Workflow.php',
      'to' => 'modules/DRI_Workflows/DRI_Workflow.php',
    ),
    399 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Config.php',
      'to' => 'modules/DRI_Workflows/Config.php',
    ),
    400 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/ProgressCalculator.php',
      'to' => 'modules/DRI_Workflows/ProgressCalculator.php',
    ),
    401 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/version.php',
      'to' => 'modules/DRI_Workflows/version.php',
    ),
    402 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/ConnectorHelper.php',
      'to' => 'modules/DRI_Workflows/ConnectorHelper.php',
    ),
    403 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/StateCalculator.php',
      'to' => 'modules/DRI_Workflows/StateCalculator.php',
    ),
    404 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Exception.php',
      'to' => 'modules/DRI_Workflows/Exception.php',
    ),
    405 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Exception/InvalidLicenseException.php',
      'to' => 'modules/DRI_Workflows/Exception/InvalidLicenseException.php',
    ),
    406 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Exception/UserNotAuthorizedException.php',
      'to' => 'modules/DRI_Workflows/Exception/UserNotAuthorizedException.php',
    ),
    407 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Exception/ParentNotFound.php',
      'to' => 'modules/DRI_Workflows/Exception/ParentNotFound.php',
    ),
    408 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Exception/NameNotFound.php',
      'to' => 'modules/DRI_Workflows/Exception/NameNotFound.php',
    ),
    409 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Exception/NotFound.php',
      'to' => 'modules/DRI_Workflows/Exception/NotFound.php',
    ),
    410 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/Exception/IdNotFound.php',
      'to' => 'modules/DRI_Workflows/Exception/IdNotFound.php',
    ),
    411 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/metadata/SearchFields.php',
      'to' => 'modules/DRI_Workflows/metadata/SearchFields.php',
    ),
    412 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/metadata/popupdefs.php',
      'to' => 'modules/DRI_Workflows/metadata/popupdefs.php',
    ),
    413 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/metadata/studio.php',
      'to' => 'modules/DRI_Workflows/metadata/studio.php',
    ),
    414 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/metadata/searchdefs.php',
      'to' => 'modules/DRI_Workflows/metadata/searchdefs.php',
    ),
    415 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflows/LicenseValidator.php',
      'to' => 'modules/DRI_Workflows/LicenseValidator.php',
    ),
    416 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/DRI_SubWorkflow.php',
      'to' => 'modules/DRI_SubWorkflows/DRI_SubWorkflow.php',
    ),
    417 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/mobile/layouts/edit/edit.php',
      'to' => 'modules/DRI_SubWorkflows/clients/mobile/layouts/edit/edit.php',
    ),
    418 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/mobile/layouts/detail/detail.php',
      'to' => 'modules/DRI_SubWorkflows/clients/mobile/layouts/detail/detail.php',
    ),
    419 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/mobile/layouts/list/list.php',
      'to' => 'modules/DRI_SubWorkflows/clients/mobile/layouts/list/list.php',
    ),
    420 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/mobile/views/edit/edit.php',
      'to' => 'modules/DRI_SubWorkflows/clients/mobile/views/edit/edit.php',
    ),
    421 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/mobile/views/detail/detail.php',
      'to' => 'modules/DRI_SubWorkflows/clients/mobile/views/detail/detail.php',
    ),
    422 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/mobile/views/list/list.php',
      'to' => 'modules/DRI_SubWorkflows/clients/mobile/views/list/list.php',
    ),
    423 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/filters/basic/basic.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/filters/basic/basic.php',
    ),
    424 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/filters/default/default.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/filters/default/default.php',
    ),
    425 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/datas/model/model.js',
      'to' => 'modules/DRI_SubWorkflows/clients/base/datas/model/model.js',
    ),
    426 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/layouts/subpanels/subpanels.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/layouts/subpanels/subpanels.php',
    ),
    427 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/layouts/extra-info/extra-info.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/layouts/extra-info/extra-info.php',
    ),
    428 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/layouts/edit/edit.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/layouts/edit/edit.php',
    ),
    429 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/layouts/detail/detail.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/layouts/detail/detail.php',
    ),
    430 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/menus/header/header.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/menus/header/header.php',
    ),
    431 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/views/record/record.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/views/record/record.php',
    ),
    432 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/views/subpanel-list/subpanel-list.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/views/subpanel-list/subpanel-list.php',
    ),
    433 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/views/massupdate/massupdate.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/views/massupdate/massupdate.php',
    ),
    434 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/views/list/list.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/views/list/list.php',
    ),
    435 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/clients/base/views/list-headerpane/list-headerpane.php',
      'to' => 'modules/DRI_SubWorkflows/clients/base/views/list-headerpane/list-headerpane.php',
    ),
    436 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/Ext/Dependencies/name_dep.php',
      'to' => 'modules/DRI_SubWorkflows/Ext/Dependencies/name_dep.php',
    ),
    437 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/Ext/LogicHooks/license_check.php',
      'to' => 'modules/DRI_SubWorkflows/Ext/LogicHooks/license_check.php',
    ),
    438 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'modules/DRI_SubWorkflows/Ext/Vardefs/dri-customer-journey.php',
    ),
    439 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/de_DE.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/de_DE.lang.php',
    ),
    440 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/lv_LV.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/lv_LV.lang.php',
    ),
    441 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/es_LA.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/es_LA.lang.php',
    ),
    442 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/ar_SA.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/ar_SA.lang.php',
    ),
    443 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/sq_AL.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/sq_AL.lang.php',
    ),
    444 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/pt_PT.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/pt_PT.lang.php',
    ),
    445 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/ro_RO.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/ro_RO.lang.php',
    ),
    446 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/pt_BR.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/pt_BR.lang.php',
    ),
    447 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/sv_SE.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/sv_SE.lang.php',
    ),
    448 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/sk_SK.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/sk_SK.lang.php',
    ),
    449 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/fi_FI.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/fi_FI.lang.php',
    ),
    450 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/uk_UA.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/uk_UA.lang.php',
    ),
    451 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/cs_CZ.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/cs_CZ.lang.php',
    ),
    452 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/da_DK.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/da_DK.lang.php',
    ),
    453 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/ca_ES.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/ca_ES.lang.php',
    ),
    454 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/fr_FR.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/fr_FR.lang.php',
    ),
    455 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/tr_TR.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/tr_TR.lang.php',
    ),
    456 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/bg_BG.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/bg_BG.lang.php',
    ),
    457 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/sr_RS.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/sr_RS.lang.php',
    ),
    458 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/lt_LT.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/lt_LT.lang.php',
    ),
    459 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/it_it.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/it_it.lang.php',
    ),
    460 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/et_EE.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/et_EE.lang.php',
    ),
    461 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/en_UK.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/en_UK.lang.php',
    ),
    462 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/hu_HU.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/hu_HU.lang.php',
    ),
    463 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/nl_NL.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/nl_NL.lang.php',
    ),
    464 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/pl_PL.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/pl_PL.lang.php',
    ),
    465 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/en_us.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/en_us.lang.php',
    ),
    466 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/ru_RU.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/ru_RU.lang.php',
    ),
    467 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/ja_JP.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/ja_JP.lang.php',
    ),
    468 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/el_EL.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/el_EL.lang.php',
    ),
    469 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/zh_CN.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/zh_CN.lang.php',
    ),
    470 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/he_IL.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/he_IL.lang.php',
    ),
    471 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/nb_NO.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/nb_NO.lang.php',
    ),
    472 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/es_ES.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/es_ES.lang.php',
    ),
    473 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/language/ko_KR.lang.php',
      'to' => 'modules/DRI_SubWorkflows/language/ko_KR.lang.php',
    ),
    474 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/vardefs.php',
      'to' => 'modules/DRI_SubWorkflows/vardefs.php',
    ),
    475 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/ProgressCalculator.php',
      'to' => 'modules/DRI_SubWorkflows/ProgressCalculator.php',
    ),
    476 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/StateCalculator.php',
      'to' => 'modules/DRI_SubWorkflows/StateCalculator.php',
    ),
    477 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/Exception.php',
      'to' => 'modules/DRI_SubWorkflows/Exception.php',
    ),
    478 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/Exception/NameNotFound.php',
      'to' => 'modules/DRI_SubWorkflows/Exception/NameNotFound.php',
    ),
    479 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/Exception/NotFound.php',
      'to' => 'modules/DRI_SubWorkflows/Exception/NotFound.php',
    ),
    480 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/Exception/IdNotFound.php',
      'to' => 'modules/DRI_SubWorkflows/Exception/IdNotFound.php',
    ),
    481 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/metadata/SearchFields.php',
      'to' => 'modules/DRI_SubWorkflows/metadata/SearchFields.php',
    ),
    482 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/metadata/popupdefs.php',
      'to' => 'modules/DRI_SubWorkflows/metadata/popupdefs.php',
    ),
    483 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/metadata/studio.php',
      'to' => 'modules/DRI_SubWorkflows/metadata/studio.php',
    ),
    484 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflows/metadata/searchdefs.php',
      'to' => 'modules/DRI_SubWorkflows/metadata/searchdefs.php',
    ),
    485 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/mobile/layouts/edit/edit.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/mobile/layouts/edit/edit.php',
    ),
    486 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/mobile/layouts/detail/detail.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/mobile/layouts/detail/detail.php',
    ),
    487 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/mobile/layouts/list/list.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/mobile/layouts/list/list.php',
    ),
    488 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/mobile/views/edit/edit.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/mobile/views/edit/edit.php',
    ),
    489 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/mobile/views/detail/detail.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/mobile/views/detail/detail.php',
    ),
    490 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/mobile/views/list/list.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/mobile/views/list/list.php',
    ),
    491 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/filters/basic/basic.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/filters/basic/basic.php',
    ),
    492 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/filters/default/default.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/filters/default/default.php',
    ),
    493 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/datas/model/model.js',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/datas/model/model.js',
    ),
    494 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/layouts/subpanels/subpanels.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/layouts/subpanels/subpanels.php',
    ),
    495 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/layouts/extra-info/extra-info.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/layouts/extra-info/extra-info.php',
    ),
    496 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/layouts/edit/edit.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/layouts/edit/edit.php',
    ),
    497 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/layouts/detail/detail.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/layouts/detail/detail.php',
    ),
    498 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/menus/header/header.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/menus/header/header.php',
    ),
    499 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/api/DRISubWorkflowTemplatesApi.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/api/DRISubWorkflowTemplatesApi.php',
    ),
    500 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/api/DRISubWorkflowTemplatesRelateApi.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/api/DRISubWorkflowTemplatesRelateApi.php',
    ),
    501 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/record/record.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/record/record.php',
    ),
    502 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/subpanel-list/subpanel-list.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/subpanel-list/subpanel-list.php',
    ),
    503 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/massupdate/massupdate.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/massupdate/massupdate.php',
    ),
    504 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/list/list.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/list/list.php',
    ),
    505 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/create-actions/create-actions.js',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/create-actions/create-actions.js',
    ),
    506 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/create-actions/create-actions.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/create-actions/create-actions.php',
    ),
    507 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/create/create.js',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/create/create.js',
    ),
    508 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/create/create.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/create/create.php',
    ),
    509 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/clients/base/views/list-headerpane/list-headerpane.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/clients/base/views/list-headerpane/list-headerpane.php',
    ),
    510 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/DRI_SubWorkflow_Template.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/DRI_SubWorkflow_Template.php',
    ),
    511 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/Ext/LogicHooks/license_check.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/Ext/LogicHooks/license_check.php',
    ),
    512 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/Ext/Vardefs/dri-customer-journey.php',
    ),
    513 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/de_DE.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/de_DE.lang.php',
    ),
    514 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/lv_LV.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/lv_LV.lang.php',
    ),
    515 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/es_LA.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/es_LA.lang.php',
    ),
    516 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/ar_SA.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/ar_SA.lang.php',
    ),
    517 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/sq_AL.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/sq_AL.lang.php',
    ),
    518 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/pt_PT.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/pt_PT.lang.php',
    ),
    519 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/ro_RO.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/ro_RO.lang.php',
    ),
    520 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/pt_BR.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/pt_BR.lang.php',
    ),
    521 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/sv_SE.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/sv_SE.lang.php',
    ),
    522 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/sk_SK.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/sk_SK.lang.php',
    ),
    523 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/fi_FI.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/fi_FI.lang.php',
    ),
    524 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/uk_UA.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/uk_UA.lang.php',
    ),
    525 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/cs_CZ.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/cs_CZ.lang.php',
    ),
    526 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/da_DK.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/da_DK.lang.php',
    ),
    527 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/ca_ES.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/ca_ES.lang.php',
    ),
    528 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/fr_FR.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/fr_FR.lang.php',
    ),
    529 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/tr_TR.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/tr_TR.lang.php',
    ),
    530 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/bg_BG.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/bg_BG.lang.php',
    ),
    531 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/sr_RS.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/sr_RS.lang.php',
    ),
    532 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/lt_LT.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/lt_LT.lang.php',
    ),
    533 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/it_it.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/it_it.lang.php',
    ),
    534 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/et_EE.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/et_EE.lang.php',
    ),
    535 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/en_UK.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/en_UK.lang.php',
    ),
    536 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/hu_HU.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/hu_HU.lang.php',
    ),
    537 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/nl_NL.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/nl_NL.lang.php',
    ),
    538 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/pl_PL.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/pl_PL.lang.php',
    ),
    539 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/en_us.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/en_us.lang.php',
    ),
    540 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/ru_RU.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/ru_RU.lang.php',
    ),
    541 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/ja_JP.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/ja_JP.lang.php',
    ),
    542 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/el_EL.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/el_EL.lang.php',
    ),
    543 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/zh_CN.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/zh_CN.lang.php',
    ),
    544 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/he_IL.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/he_IL.lang.php',
    ),
    545 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/nb_NO.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/nb_NO.lang.php',
    ),
    546 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/es_ES.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/es_ES.lang.php',
    ),
    547 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/language/ko_KR.lang.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/language/ko_KR.lang.php',
    ),
    548 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/vardefs.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/vardefs.php',
    ),
    549 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/Exception.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/Exception.php',
    ),
    550 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/Exception/NameNotFound.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/Exception/NameNotFound.php',
    ),
    551 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/Exception/NotFound.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/Exception/NotFound.php',
    ),
    552 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/Exception/IdNotFound.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/Exception/IdNotFound.php',
    ),
    553 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/metadata/SearchFields.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/metadata/SearchFields.php',
    ),
    554 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/metadata/popupdefs.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/metadata/popupdefs.php',
    ),
    555 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/metadata/studio.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/metadata/studio.php',
    ),
    556 => 
    array (
      'from' => '<basepath>/src/modules/DRI_SubWorkflow_Templates/metadata/searchdefs.php',
      'to' => 'modules/DRI_SubWorkflow_Templates/metadata/searchdefs.php',
    ),
    557 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/mobile/layouts/edit/edit.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/mobile/layouts/edit/edit.php',
    ),
    558 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/mobile/layouts/detail/detail.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/mobile/layouts/detail/detail.php',
    ),
    559 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/mobile/layouts/list/list.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/mobile/layouts/list/list.php',
    ),
    560 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/mobile/views/edit/edit.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/mobile/views/edit/edit.php',
    ),
    561 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/mobile/views/detail/detail.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/mobile/views/detail/detail.php',
    ),
    562 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/mobile/views/list/list.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/mobile/views/list/list.php',
    ),
    563 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/filters/basic/basic.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/filters/basic/basic.php',
    ),
    564 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/filters/default/default.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/filters/default/default.php',
    ),
    565 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/layouts/subpanels/subpanels.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/layouts/subpanels/subpanels.php',
    ),
    566 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/layouts/extra-info/extra-info.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/layouts/extra-info/extra-info.php',
    ),
    567 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/layouts/edit/edit.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/layouts/edit/edit.php',
    ),
    568 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/layouts/detail/detail.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/layouts/detail/detail.php',
    ),
    569 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/menus/header/header.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/menus/header/header.php',
    ),
    570 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/fields/due_date_field/due_date_field.js',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/fields/due_date_field/due_date_field.js',
    ),
    571 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/fields/blocked_by/blocked_by.js',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/fields/blocked_by/blocked_by.js',
    ),
    572 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/record/record.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/record/record.php',
    ),
    573 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/subpanel-list/subpanel-list.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/subpanel-list/subpanel-list.php',
    ),
    574 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/massupdate/massupdate.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/massupdate/massupdate.php',
    ),
    575 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/selection-list/selection-list.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/selection-list/selection-list.php',
    ),
    576 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/list/list.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/list/list.php',
    ),
    577 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/create-actions/create-actions.js',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/create-actions/create-actions.js',
    ),
    578 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/create-actions/create-actions.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/create-actions/create-actions.php',
    ),
    579 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/create/create.js',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/create/create.js',
    ),
    580 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/create/create.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/create/create.php',
    ),
    581 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/clients/base/views/list-headerpane/list-headerpane.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/clients/base/views/list-headerpane/list-headerpane.php',
    ),
    582 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/ActivityHandlerFactory.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/ActivityHandlerFactory.php',
    ),
    583 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/TaskHandler.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/TaskHandler.php',
    ),
    584 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/AbstractActivityHandler.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/AbstractActivityHandler.php',
    ),
    585 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/MeetingHandler.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/MeetingHandler.php',
    ),
    586 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
    ),
    587 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/ActivityHandlerInterface.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/ActivityHandlerInterface.php',
    ),
    588 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/AbstractAppointmentHandler.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/AbstractAppointmentHandler.php',
    ),
    589 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Activity/CallHandler.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Activity/CallHandler.php',
    ),
    590 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Ext/Dependencies/days_type_dep.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Ext/Dependencies/days_type_dep.php',
    ),
    591 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Ext/LogicHooks/license_check.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Ext/LogicHooks/license_check.php',
    ),
    592 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Ext/Vardefs/dri-customer-journey.php',
    ),
    593 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/de_DE.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/de_DE.lang.php',
    ),
    594 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/lv_LV.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/lv_LV.lang.php',
    ),
    595 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/es_LA.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/es_LA.lang.php',
    ),
    596 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/ar_SA.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/ar_SA.lang.php',
    ),
    597 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/sq_AL.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/sq_AL.lang.php',
    ),
    598 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/pt_PT.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/pt_PT.lang.php',
    ),
    599 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/ro_RO.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/ro_RO.lang.php',
    ),
    600 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/pt_BR.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/pt_BR.lang.php',
    ),
    601 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/sv_SE.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/sv_SE.lang.php',
    ),
    602 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/sk_SK.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/sk_SK.lang.php',
    ),
    603 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/fi_FI.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/fi_FI.lang.php',
    ),
    604 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/uk_UA.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/uk_UA.lang.php',
    ),
    605 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/cs_CZ.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/cs_CZ.lang.php',
    ),
    606 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/da_DK.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/da_DK.lang.php',
    ),
    607 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/ca_ES.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/ca_ES.lang.php',
    ),
    608 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/fr_FR.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/fr_FR.lang.php',
    ),
    609 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/tr_TR.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/tr_TR.lang.php',
    ),
    610 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/bg_BG.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/bg_BG.lang.php',
    ),
    611 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/sr_RS.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/sr_RS.lang.php',
    ),
    612 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/lt_LT.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/lt_LT.lang.php',
    ),
    613 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/it_it.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/it_it.lang.php',
    ),
    614 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/et_EE.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/et_EE.lang.php',
    ),
    615 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/en_UK.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/en_UK.lang.php',
    ),
    616 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/hu_HU.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/hu_HU.lang.php',
    ),
    617 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/nl_NL.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/nl_NL.lang.php',
    ),
    618 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/pl_PL.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/pl_PL.lang.php',
    ),
    619 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/en_us.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/en_us.lang.php',
    ),
    620 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/ru_RU.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/ru_RU.lang.php',
    ),
    621 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/ja_JP.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/ja_JP.lang.php',
    ),
    622 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/el_EL.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/el_EL.lang.php',
    ),
    623 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/zh_CN.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/zh_CN.lang.php',
    ),
    624 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/he_IL.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/he_IL.lang.php',
    ),
    625 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/nb_NO.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/nb_NO.lang.php',
    ),
    626 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/es_ES.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/es_ES.lang.php',
    ),
    627 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/language/ko_KR.lang.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/language/ko_KR.lang.php',
    ),
    628 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/vardefs.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/vardefs.php',
    ),
    629 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/DRI_Workflow_Task_Template.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/DRI_Workflow_Task_Template.php',
    ),
    630 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Exception.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Exception.php',
    ),
    631 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Exception/NameNotFound.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Exception/NameNotFound.php',
    ),
    632 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Exception/NotFound.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Exception/NotFound.php',
    ),
    633 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/Exception/IdNotFound.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/Exception/IdNotFound.php',
    ),
    634 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/metadata/SearchFields.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/metadata/SearchFields.php',
    ),
    635 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/metadata/popupdefs.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/metadata/popupdefs.php',
    ),
    636 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/metadata/studio.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/metadata/studio.php',
    ),
    637 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Task_Templates/metadata/searchdefs.php',
      'to' => 'modules/DRI_Workflow_Task_Templates/metadata/searchdefs.php',
    ),
    638 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/TemplateExporter.php',
      'to' => 'modules/DRI_Workflow_Templates/TemplateExporter.php',
    ),
    639 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/mobile/layouts/edit/edit.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/mobile/layouts/edit/edit.php',
    ),
    640 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/mobile/layouts/detail/detail.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/mobile/layouts/detail/detail.php',
    ),
    641 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/mobile/layouts/list/list.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/mobile/layouts/list/list.php',
    ),
    642 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/mobile/views/edit/edit.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/mobile/views/edit/edit.php',
    ),
    643 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/mobile/views/detail/detail.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/mobile/views/detail/detail.php',
    ),
    644 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/mobile/views/list/list.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/mobile/views/list/list.php',
    ),
    645 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/filters/basic/basic.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/filters/basic/basic.php',
    ),
    646 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/filters/default/default.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/filters/default/default.php',
    ),
    647 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/datas/model/model.js',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/datas/model/model.js',
    ),
    648 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/layouts/subpanels/subpanel.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/layouts/subpanels/subpanel.php',
    ),
    649 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/layouts/extra-info/extra-info.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/layouts/extra-info/extra-info.php',
    ),
    650 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/layouts/edit/edit.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/layouts/edit/edit.php',
    ),
    651 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/layouts/detail/detail.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/layouts/detail/detail.php',
    ),
    652 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/layouts/template-import/template-import.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/layouts/template-import/template-import.php',
    ),
    653 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/layouts/designer/designer.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/layouts/designer/designer.php',
    ),
    654 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/menus/header/header.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/menus/header/header.php',
    ),
    655 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesRelateApi.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesRelateApi.php',
    ),
    656 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyTemplatesImportExportApi.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyTemplatesImportExportApi.php',
    ),
    657 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyControlPanelApi.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyControlPanelApi.php',
    ),
    658 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
    ),
    659 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesApi.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesApi.php',
    ),
    660 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/record/record.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/record/record.php',
    ),
    661 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/record/record.js',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/record/record.js',
    ),
    662 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/template-import-headerpane/template-import-headerpane.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/template-import-headerpane/template-import-headerpane.php',
    ),
    663 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/template-import-headerpane/template-import-headerpane.js',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/template-import-headerpane/template-import-headerpane.js',
    ),
    664 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/template-import/template-import.hbs',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/template-import/template-import.hbs',
    ),
    665 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/template-import/template-import.js',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/template-import/template-import.js',
    ),
    666 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/template-import/template-import.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/template-import/template-import.php',
    ),
    667 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/subpanel-list/subpanel-list.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/subpanel-list/subpanel-list.php',
    ),
    668 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/massupdate/massupdate.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/massupdate/massupdate.php',
    ),
    669 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/list/list.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/list/list.php',
    ),
    670 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/designer/designer.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/designer/designer.php',
    ),
    671 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/designer/designer.js',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/designer/designer.js',
    ),
    672 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/recordlist/recordlist.js',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/recordlist/recordlist.js',
    ),
    673 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/clients/base/views/recordlist/recordlist.php',
      'to' => 'modules/DRI_Workflow_Templates/clients/base/views/recordlist/recordlist.php',
    ),
    674 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/DRI_Workflow_Template.php',
      'to' => 'modules/DRI_Workflow_Templates/DRI_Workflow_Template.php',
    ),
    675 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/ControlPanel.php',
      'to' => 'modules/DRI_Workflow_Templates/ControlPanel.php',
    ),
    676 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/Ext/LogicHooks/license_check.php',
      'to' => 'modules/DRI_Workflow_Templates/Ext/LogicHooks/license_check.php',
    ),
    677 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/Ext/Vardefs/dri-customer-journey.php',
      'to' => 'modules/DRI_Workflow_Templates/Ext/Vardefs/dri-customer-journey.php',
    ),
    678 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/de_DE.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/de_DE.lang.php',
    ),
    679 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/lv_LV.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/lv_LV.lang.php',
    ),
    680 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/es_LA.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/es_LA.lang.php',
    ),
    681 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/ar_SA.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/ar_SA.lang.php',
    ),
    682 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/sq_AL.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/sq_AL.lang.php',
    ),
    683 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/pt_PT.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/pt_PT.lang.php',
    ),
    684 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/ro_RO.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/ro_RO.lang.php',
    ),
    685 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/pt_BR.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/pt_BR.lang.php',
    ),
    686 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/sv_SE.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/sv_SE.lang.php',
    ),
    687 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/sk_SK.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/sk_SK.lang.php',
    ),
    688 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/fi_FI.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/fi_FI.lang.php',
    ),
    689 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/uk_UA.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/uk_UA.lang.php',
    ),
    690 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/cs_CZ.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/cs_CZ.lang.php',
    ),
    691 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/da_DK.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/da_DK.lang.php',
    ),
    692 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/ca_ES.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/ca_ES.lang.php',
    ),
    693 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/fr_FR.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/fr_FR.lang.php',
    ),
    694 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/tr_TR.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/tr_TR.lang.php',
    ),
    695 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/bg_BG.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/bg_BG.lang.php',
    ),
    696 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/sr_RS.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/sr_RS.lang.php',
    ),
    697 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/lt_LT.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/lt_LT.lang.php',
    ),
    698 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/it_it.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/it_it.lang.php',
    ),
    699 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/et_EE.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/et_EE.lang.php',
    ),
    700 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/en_UK.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/en_UK.lang.php',
    ),
    701 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/hu_HU.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/hu_HU.lang.php',
    ),
    702 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/nl_NL.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/nl_NL.lang.php',
    ),
    703 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/pl_PL.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/pl_PL.lang.php',
    ),
    704 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/en_us.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/en_us.lang.php',
    ),
    705 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/ru_RU.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/ru_RU.lang.php',
    ),
    706 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/ja_JP.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/ja_JP.lang.php',
    ),
    707 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/el_EL.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/el_EL.lang.php',
    ),
    708 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/zh_CN.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/zh_CN.lang.php',
    ),
    709 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/he_IL.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/he_IL.lang.php',
    ),
    710 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/nb_NO.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/nb_NO.lang.php',
    ),
    711 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/es_ES.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/es_ES.lang.php',
    ),
    712 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/language/ko_KR.lang.php',
      'to' => 'modules/DRI_Workflow_Templates/language/ko_KR.lang.php',
    ),
    713 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/vardefs.php',
      'to' => 'modules/DRI_Workflow_Templates/vardefs.php',
    ),
    714 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/TemplateImporter.php',
      'to' => 'modules/DRI_Workflow_Templates/TemplateImporter.php',
    ),
    715 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/74c487f0-869d-11e7-81da-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/74c487f0-869d-11e7-81da-5254009e5526.php',
    ),
    716 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/467fb2a6-fcc9-11e6-b7a6-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/467fb2a6-fcc9-11e6-b7a6-5254009e5526.php',
    ),
    717 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/57daaef6-5b1c-11e6-a4fe-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/57daaef6-5b1c-11e6-a4fe-5254009e5526.php',
    ),
    718 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/all.php',
      'to' => 'modules/DRI_Workflow_Templates/data/all.php',
    ),
    719 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/f4dd8362-6f63-11e6-9f30-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/f4dd8362-6f63-11e6-9f30-5254009e5526.php',
    ),
    720 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/95ce91b8-9baf-11e6-8e72-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/95ce91b8-9baf-11e6-8e72-5254009e5526.php',
    ),
    721 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/6c671044-f838-11e6-90aa-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/6c671044-f838-11e6-90aa-5254009e5526.php',
    ),
    722 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/241ed50e-5ee8-11e6-ad9d-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/241ed50e-5ee8-11e6-ad9d-5254009e5526.php',
    ),
    723 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/ea1ecdea-f835-11e6-b8bd-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/ea1ecdea-f835-11e6-b8bd-5254009e5526.php',
    ),
    724 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/data/ceef2f14-6f56-11e6-8f28-5254009e5526.php',
      'to' => 'modules/DRI_Workflow_Templates/data/ceef2f14-6f56-11e6-8f28-5254009e5526.php',
    ),
    725 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/Exception.php',
      'to' => 'modules/DRI_Workflow_Templates/Exception.php',
    ),
    726 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/Exception/NameNotFound.php',
      'to' => 'modules/DRI_Workflow_Templates/Exception/NameNotFound.php',
    ),
    727 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/Exception/NotFound.php',
      'to' => 'modules/DRI_Workflow_Templates/Exception/NotFound.php',
    ),
    728 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/Exception/IdNotFound.php',
      'to' => 'modules/DRI_Workflow_Templates/Exception/IdNotFound.php',
    ),
    729 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/metadata/SearchFields.php',
      'to' => 'modules/DRI_Workflow_Templates/metadata/SearchFields.php',
    ),
    730 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/metadata/popupdefs.php',
      'to' => 'modules/DRI_Workflow_Templates/metadata/popupdefs.php',
    ),
    731 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/metadata/studio.php',
      'to' => 'modules/DRI_Workflow_Templates/metadata/studio.php',
    ),
    732 => 
    array (
      'from' => '<basepath>/src/modules/DRI_Workflow_Templates/metadata/searchdefs.php',
      'to' => 'modules/DRI_Workflow_Templates/metadata/searchdefs.php',
    ),
  ),
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'DRI_Workflows',
      'class' => 'DRI_Workflow',
      'path' => 'modules/DRI_Workflows/DRI_Workflow.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'DRI_SubWorkflows',
      'class' => 'DRI_SubWorkflow',
      'path' => 'modules/DRI_SubWorkflows/DRI_SubWorkflow.php',
      'tab' => false,
    ),
    2 => 
    array (
      'module' => 'DRI_Workflow_Templates',
      'class' => 'DRI_Workflow_Template',
      'path' => 'modules/DRI_Workflow_Templates/DRI_Workflow_Template.php',
      'tab' => false,
    ),
    3 => 
    array (
      'module' => 'DRI_SubWorkflow_Templates',
      'class' => 'DRI_SubWorkflow_Template',
      'path' => 'modules/DRI_SubWorkflow_Templates/DRI_SubWorkflow_Template.php',
      'tab' => false,
    ),
    4 => 
    array (
      'module' => 'DRI_Workflow_Task_Templates',
      'class' => 'DRI_Workflow_Task_Template',
      'path' => 'modules/DRI_Workflow_Task_Templates/DRI_Workflow_Task_Template.php',
      'tab' => false,
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Calls' => 'dri_workflow_sort_order',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'Calls' => 'customer_journey_points',
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
        'Meetings' => 'dri_workflow_sort_order',
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
        'Meetings' => 'customer_journey_points',
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
        'Tasks' => 'dri_workflow_sort_order',
      ),
    ),
    5 => 
    array (
      'additional_fields' => 
      array (
        'Tasks' => 'customer_journey_type',
      ),
    ),
    6 => 
    array (
      'additional_fields' => 
      array (
        'Tasks' => 'customer_journey_points',
      ),
    ),
  ),
);
