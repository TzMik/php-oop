<?php
require_once __DIR__ . "/TypeInElem.php";

class PasswordInput extends TypeInElem {
    public function __construct(string $name, string $value = "", string $label = "")
    {
        parent::__construct("password", $name, $value, $label);
    }
}