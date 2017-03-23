<?php

/**
 * Created by PhpStorm.
 * User: riima
 * Date: 23/03/2017
 * Time: 12:04
 */




class HomeController
{

    function index(){
        $array = array('FirstName' => 'John',
            'LastName' => 'Doe'
        );
        require_once('../Views/home/default.php');
}
    function about(){
        $array = array('Title' => 'About',
            'Description' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nam non fringilla ligula. Nullam luctus, odio ut pulvinar pretium, ante magna vehicula mauris, eget porttitor libero diam eget urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent ornare tempor ultricies. Aliquam enim lorem, tempor cursus leo vel, tempus convallis diam. Cras sapien felis, pulvinar in velit eu, gravida fringilla neque. Maecenas rutrum id lorem eu porttitor. Sed ornare'
        );
        require_once("../Views/home/about.php");

    }
}