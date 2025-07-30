<?php

namespace LicensePanel;

//PROPERTIES
/**
 * @property IsNumeric $isNumeric
 * @property CaseManagement $caseManagement
 */


class LicensePanelAPI
{
    public $api_key;
    private $service;

    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }
    public function __get($name) {
        return $this->getService($name);
    }

    public function getService($name) {
        if($this->service == null) {
            $this->service = new Service\ServiceReturner($this);
        }

        return $this->service->getService($name, $this);
    }

}