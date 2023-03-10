<?php

//This is my controller for the pets project

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();
//Java equivalent -> Base f3 = new Base();

//Define a default route ("home page" for hello project
$f3->route('GET /', function() {
//    echo '<h1>Pet Home</h1>';
    $view = new Template();
    echo $view->render('views/home.html');
});

//Run Fat Free
$f3->run();
//Java -> f3.run();



