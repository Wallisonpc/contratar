<?php


//require_once 'Route.php';


/* start session */
if (!session_id()) session_start();

/* start routes */
$routes = require_once __DIR__ . "/../routes.php";

require_once 'Route.php';

$route = new \Core\Route ($routes);
