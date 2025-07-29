<?php
namespace LicensePanel\Api;
//JUST FOR TESTING RIGHT NOW, NEW TO COMPOSER :(
class TestClass
{
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function returnsFancyName() {
        return htmlspecialchars(strip_tags(strtoupper($this->name)));
    }

}