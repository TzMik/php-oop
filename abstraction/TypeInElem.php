<?php
require_once __DIR__ . "/HTMLElem.php";

class TypeInElem extends HTMLElem {
    private string $name;
    private string $value;
    private string $label;
    private string $type;

    const VALID_TYPES = ["password", "text"];
    const DEFAULT_TYPE = "text";

    public function __construct(string $type, string $name, string $value = "", string $label = "")
    {
        $this->type = self::DEFAULT_TYPE;
        if (in_array($type, self::VALID_TYPES)) {
            $this->type = $type;
        }
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

    public function render(): string
    {
        return '<div>
            <label>' . $this->label . '</label><br>
            <input type="' . $this->type . '" name="' . $this->name . '" id="' . $this->name . '" value="' . $this->value . '">
        </div>';
    }
}