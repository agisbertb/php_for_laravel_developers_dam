<?php

use Framework\App;

require 'vendor/autoload.php';

require 'framework/bootstrap.php';

$routes = require 'routes.php';

//dd($_SERVER['REQUEST_URI']); URI

//$routes = new Router();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);

//FACADES -> IOC CONTAINER -> App
App::get('router')->redirect($_SERVER['REQUEST_URI']);

//require 'app/index.php';
//require 'resources/views/index.blade.php';