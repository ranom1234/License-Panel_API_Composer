<?php

namespace LicensePanel\Service;


//USES
use LicensePanel\CaseManagement;
use LicensePanel\IsNumeric;


class ServiceReturner
{
    private static $classMap = [
        //ALL THE API CLASSES
        'isNumeric' => IsNumeric::class,
        'caseManagement' => CaseManagement::class,
    ];

    public function getService($name, $api_key)
    {

        if (!array_key_exists($name, self::$classMap)) {
            throw new \Exception("Service '{$name}' not found.");
        }

        // Lazy load + Caching
        if (!isset($this->serviceCache[$name])) {
            $class = self::$classMap[$name];
            $this->serviceCache[$name] = new $class($api_key);
        }

        return $this->serviceCache[$name];
    }

}