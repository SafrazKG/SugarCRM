<?php

if (SugarAutoLoader::fileExists('modules/DRI_Workflows/VardefManager.php')) {
    require_once 'modules/DRI_Workflows/VardefManager.php';

    DRI_Workflows\VardefManager::addParent(array (
        'module_name' => 'abc_Estoppels',
        'object_name' => 'abc_Estoppels',
        'table_name' => 'abc_estoppels',
    ));
}
