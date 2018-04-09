<?php
function isUserActive($userid = null) {
    global $current_user;
    if (!isset($_SESSION['user_activity'])) $_SESSION['user_activity'] = array();
    if (is_array($userid)) {
        if (isset($userid['assigned_user_id'])) $_SESSION['user_activity'][$userid['assigned_user_id']] = $userid['last_activity_c'];
        else if (isset($userid['fronter_id'])) $_SESSION['user_activity'][$userid['fronter_id']] = $userid['last_activity_c'];
        return ($userid['last_activity_c']+300>=time());
    }
    if (!$userid) $userid = $current_user->id;
    if (isset($_SESSION['user_activity'][$userid]) && $_SESSION['user_activity'][$userid]+300>=time()) return true;
    $db = DBManagerFactory::getInstance();
    $q = $db->query("SELECT last_activity_c FROM users_cstms WHERE id_c='".$db->quote($userid)."'");
    $row = $db->fetchByAssoc($q);
    $_SESSION['user_activity'][$userid] = $row['last_activity_c']+0;
    return ($_SESSION['user_activity'][$userid]+300>=time());
}