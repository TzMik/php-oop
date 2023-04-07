<?php
require_once __DIR__ . "/HTMLElem.php";
class ButtonElem extends HTMLElem
{

    private string $type;
    private string $text;

    public function __construct(string $text, string $type = "submit") {
        $this->text = $text;
        $this->type = $type;
    }

    public function render(): string
    {
        return '<div>
            <button type="' . $this->type . '">' . $this->text . '</button>
        </div>';
    }
}