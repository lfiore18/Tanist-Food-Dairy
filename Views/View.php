<?php

class View
{
    private $model;
    private $controller;

    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        return "<h1 class='container-md'>" . $this->model->PageTitle . "</h1>";
    }
}