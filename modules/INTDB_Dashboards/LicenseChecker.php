<?php

namespace INTDB_Dashboards;

use INTDB_Dashboards\ExceptionLicenseInvalid;

class LicenseChecker
{
    const APPLICATION_NAME = 'Intelestream Dashboards Deployer';

    const MODULE_NAME = 'INTDB_Dashboards';

    const MIN_LICENSE_KEY_LENGTH = 10;

    private $timeDeltaBeforeSendingFirstExpirationNotification = 2592000; // 30*24*60*60 - 30 days

    private $timeDeltaBeforeSendingLastExpirationNotification = 604800; //7*24*60*60 - 7 days

    private $licenseKey;

    private $validationKey;

    private $validationData;

    /**
     * LicenseChecker constructor.
     */
    public function __construct()
    {
        try {
            $this->getDataFromConfig();
            $this->extractValidationKey();
            return $this;
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * @throws \INTDB_Dashboards\ExceptionLicenseInvalid
     */
    public function validateLicense()
    {
        if (isset($_REQUEST['module']) && isset($_REQUEST['action'])) {
            return;
        }
        try {
            $this->checkIfValidationKeyIsValid();
            $this->checkIfLicenseKeyExpired();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get License Expiration Date
     * @return bool|void
     * @throws \INTDB_Dashboards\ExceptionLicenseInvalid
     */
    public function getLicenseExpirationDate() {
        if (isset($_REQUEST['module']) && isset($_REQUEST['action'])) {
            return;
        }
        try {
            $this->checkIfValidationKeyIsValid();
            $timedate = \TimeDate::getInstance();
            return $timedate->asUserDate(\TimeDate::fromTimestamp($this->validationData['expiry_timestamp']));
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get data from System Config
     */
    private function getDataFromConfig()
    {
        $settings = \Administration::getSettings('INTDB_Dashboards');
        if (isset($settings->settings[self::MODULE_NAME . '_license_key'])) {
            $this->licenseKey = $settings->settings[self::MODULE_NAME . '_license_key'];
        }
        if (isset($settings->settings[self::MODULE_NAME . '_validation_key'])) {
            $this->validationKey = $settings->settings[self::MODULE_NAME . '_validation_key'];
        }
    }

    /**
     * Extract data from validation key
     * @throws \INTDB_Dashboards\ExceptionLicenseInvalid
     */
    private function extractValidationKey()
    {
        if (empty($this->validationKey)){
            throw new ExceptionLicenseInvalid('EXCEPTION_MISSING_VALIDATION_KEY');
        }
        $decodedData = base64_decode($this->validationKey);
        if (empty($decodedData)){
            throw new ExceptionLicenseInvalid('EXCEPTION_INVALID_VALIDATION_KEY');
        }
        $validationKey = unserialize($decodedData);
        $this->validationData = $validationKey;
    }

    /**
     * Check if validation key data are valid
     * @throws \INTDB_Dashboards\ExceptionLicenseInvalid
     */
    private function checkIfValidationKeyIsValid()
    {
        $validationData = $this->validationData;
        if (empty($validationData) || !is_array($validationData)) {
            throw new ExceptionLicenseInvalid('EXCEPTION_INVALID_VALIDATION_KEY');
        }
        if (!isset($validationData['license_key']) || empty($validationData['license_key']) ||
            strlen($validationData['license_key']) < self::MIN_LICENSE_KEY_LENGTH) {
            throw new ExceptionLicenseInvalid('EXCEPTION_INVALID_VALIDATION_KEY');
        }
        if ($validationData['license_key'] != $this->licenseKey) {
            throw new ExceptionLicenseInvalid('EXCEPTION_INVALID_VALIDATION_KEY');
        }
        if ($validationData['application_name'] != self::APPLICATION_NAME) {
            throw new ExceptionLicenseInvalid('EXCEPTION_INVALID_VALIDATION_KEY');
        }
        if (empty($validationData['expiry_timestamp']) || (int)$validationData['expiry_timestamp'] <= 0) {
            throw new ExceptionLicenseInvalid('EXCEPTION_INVALID_VALIDATION_KEY');
        }
    }

    /**
     * Check if license key is expired
     * @throws \INTDB_Dashboards\ExceptionLicenseInvalid
     */
    private function checkIfLicenseKeyExpired() {
        $timedate = \TimeDate::getInstance();
        $now = time();
        if ($this->validationData['expiry_timestamp'] < $now) {
            $subject = translate('LBL_INTDB_DASHBOARDS_LICENSE_EXPIRED');
            $message = string_format(
                translate('LBL_INTDB_DASHBOARDS_LICENSE_EXPIRED_DESC'),
                array ($timedate->asUserDate(\TimeDate::fromTimestamp($this->validationData['expiry_timestamp'])))
            );
            $this->sendNotificationIfNotSent($subject, $message, "error");
            throw new ExceptionLicenseInvalid('EXCEPTION_LICENSE_KEY_EXPIRED');
        }
        if ($this->validationData['expiry_timestamp'] < ($now + $this->timeDeltaBeforeSendingFirstExpirationNotification)) {
            $subject = translate('LBL_INTDB_DASHBOARDS_LICENSE_WILL_EXPIRE_FIRST_WARNING');
            $message = string_format(
                translate('LBL_INTDB_DASHBOARDS_LICENSE_WILL_EXPIRE_FIRST_WARNING_DESC'),
                array ($timedate->asUserDate(\TimeDate::fromTimestamp($this->validationData['expiry_timestamp'])))
            );
            $this->sendNotificationIfNotSent($subject, $message);
        }
        elseif ($this->validationData['expiry_timestamp'] < ($now + $this->timeDeltaBeforeSendingLastExpirationNotification)) {
            $subject = translate('LBL_INTDB_DASHBOARDS_LICENSE_WILL_EXPIRE_LAST_WARNING');
            $message = string_format(
                translate('LBL_INTDB_DASHBOARDS_LICENSE_WILL_EXPIRE_LAST_WARNING_DESC'),
                array ($timedate->asUserDate(\TimeDate::fromTimestamp($this->validationData['expiry_timestamp'])))
            );
            $this->sendNotificationIfNotSent($subject, $message);
        }
    }

    /**
     * Send notification message to user in case syncing with Google fail
     * @param string $subject
     * @param string $message
     * @param string $severity
     * @param null SugarBean $bean
     */
    private function sendNotificationIfNotSent($subject, $message, $severity = "warning"){
        require_once('include/SugarQuery/SugarQuery.php');
        $userBean = \BeanFactory::getBean("Users");
        $sql = new \SugarQuery();
        $sql->select('id');
        $sql->from($userBean);
        $sql->Where()->equals('is_admin', 1);
        $sql->Where()->equals('deleted', 0);
        $adminUsersIds = $sql->execute();

        foreach ($adminUsersIds as $userId) {
            if (!$this->isNotificationSent($subject, $userId['id'])) {
                $notificationBean = \BeanFactory::getBean("Notifications");
                $notificationBean->name = $subject;
                $notificationBean->description = $message;
                $notificationBean->assigned_user_id = $userId['id'];
                $notificationBean->severity = $severity;
                $notificationBean->is_read = 0;
                $notificationBean->save();
            }
        }
    }

    /**
     * Check if notification is already sent to user
     * @param string $subject
     * @param integer $userId
     * @return bool
     */
    private function isNotificationSent($subject, $userId) {
        $timedate = \TimeDate::getInstance();
        $notificationBean = \BeanFactory::getBean("Notifications");
        $sql = new \SugarQuery();
        $sql->select('id');
        $sql->from($notificationBean);
        $sql->Where()->equals('name', $subject);
        $sql->Where()->equals('deleted', 0);
        // Get only results that happan in last year, otherwise message might be from last year
        $sql->Where()->gt('date_entered', $timedate->asDb(\TimeDate::fromTimestamp(time() - 365*24*60*60)));
        $sql->Where()->equals('assigned_user_id', $userId);
        $notificationIds = $sql->execute();
        if (count($notificationIds) > 0) {
            return true;
        }
        return false;
    }
}