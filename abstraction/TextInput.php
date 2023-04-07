<?php
require_once __DIR__ . "/TypeInElem.php";

class TextInput extends TypeInElem
{
    public function __construct(string $name, string $value = "", string $label = "") {
        parent::__construct("text", $name, $value, $label);
    }


}