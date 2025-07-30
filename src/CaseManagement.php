<?php

namespace LicensePanel;

class CaseManagement
{
    public function __construct(LicensePanelAPI $api_key) {
        $this->api = $api_key->api_key;
    }

    public function toUpperCase($text) {
        return strtoupper($text).' ' . $this->api;
    }
}