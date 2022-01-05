<?php

class HomeController {
    
    private HomeModel $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    // GET page data
    public function GetPageData()
    {
        return $this->model;
    }

    public function PostPageData($title)
    {
        $this->model->PageTitle = $title;
    }
}