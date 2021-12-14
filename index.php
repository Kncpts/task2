<?php
require 'flight/Flight.php';

use app\Bootstrap;
use app\ControllerBuilder;
use app\ModelBuilder;

Flight::set('flight.views.path', __DIR__.'/app/views');

$controller= new ControllerBuilder;

Flight::route('/', function(){

    Flight::render('form.php', ['data' => (new ModelBuilder)->getconfig()] );

});


Flight::route('POST /@model',[$controller, 'build']);


Flight::start();

// echo '<br>';
// print_r( (new ModelBuilder)->getconfig());
// echo '<br>';
// echo '<br>';
// print_r( (new ControllerBuilder)->getconfig());
// echo '<br>';
// var_dump((new Bootstrap));

