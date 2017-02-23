<?php
$loader = require 'vendor/autoload.php';

use Core\FrontController;
use App;


$frontController = new FrontController(array(
    "controller" => "app\Index", 
    "action"     => "index", 
    "params"     => array()
));

$frontController->run();