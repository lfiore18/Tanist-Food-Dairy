<?php

$resource = $_GET["resource"];

require_once "Models/HomeModel.php";
require_once "Controllers/HomeController.php";

$model = new HomeModel();
$controller = new HomeController($model);

if ($resource == "cards")
{
    echo json_encode($controller->GetPageData());
}





//takes a url e.g. "/url
//dissects the url
//sees if each part of the url matches a predefined controller/action
//if yes, call said action on said controller
//if no, do nothing

// class Router
// {
//     private $url;

//     public function __construct($url)
//     {
//         $this->url = $url;
//     }

//     function dissectUrl()
//     {
//         $exploded_url = explode('/', $this->url);
//         echo $this->url;
//         echo $exploded_url[0];
//     }
// }