<?php


class Card {
    public $name;
    public $description;
    public $imgStr;

    public function __construct($name, $description, $imgStr)
    {
        $this->name = $name;
        $this->description = $description;
        $this->imgStr = $imgStr;
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name($description)
    {
        $this->description = $description;
    }
}