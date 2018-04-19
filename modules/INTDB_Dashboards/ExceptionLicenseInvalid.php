<?php

namespace INTDB_Dashboards;

class ExceptionLicenseInvalid extends \SugarApiException
{
    public $errorLabel = 'licence_validation_error';
    public $messageLabel = 'EXCEPTION_LICENSE_INVALID';
    public $httpCode = 403;
}
