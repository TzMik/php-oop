<?php
require_once  __DIR__ . "/HTMLElem.php";

class Form extends HTMLElem
{
    private string $method;
    private string $action;
    private array $elems = [];

    public function __construct(string $action, string $method = "post")
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function addElement(HTMLElem $elem):void
    {
        $this->elems[] = $elem;
    }

    public function render(): string
    {
        $strElems = implode(PHP_EOL, array_map(fn($elem) => $elem->render(), $this->elems));
        return '<form action="' . $this->action . '" method="' . $this->method . '">
            ' . $strElems . '
        </form>';
    }
}