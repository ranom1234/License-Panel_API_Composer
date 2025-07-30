<?php

namespace LicensePanel;

class IsNumeric
{
    private $api;
    public function __construct(LicensePanelAPI $api) {
        $this->api = $api->api_key;
    }
    public function isNumeric($number) {
        if($this->api == "1234" || $this->api == "abcd") {
            return is_numeric($number);
        }
        else {
            return "f";
        }
    }

}