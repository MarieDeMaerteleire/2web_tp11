<?php
/**
 * Created by PhpStorm.
 * User: riima
 * Date: 23/03/2017
 * Time: 12:07
 */

include('./Views/home/about.php');
include('./Views/home/default.php');
include ('./Controllers/HomeController.php');
$controller = new HomeController();

if(isset($_GET['controller'])){
    if($_GET['controller']== "home"){
        if($_GET['view'] == "about"){
            $controller->about();
        }
        elseif ($_GET['view'] == "default"){
            $controller->index();
        }
    }
}
else{
    $controller->index();
}