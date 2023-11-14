<?php

include_once "libs/Router.php";
include_once "controller/JugadoresApiController.php";

$router = new Router();

$router->addRoute('jugadores'     ,'GET'    ,'JugadoresApiController', 'getAll');
$router->addRoute('jugadores/:ID' ,'GET'    ,'JugadoresApiController', 'mostrarJugador');
$router->addRoute('jugadores/:ID' ,'DELETE' ,'JugadoresApiController', 'borrarJugador');
$router->addRoute('jugadores/:ID' ,'PUT'    ,'JugadoresApiController', 'actualizarJugador');
$router->addRoute('jugadores'     ,'POST'   ,'JugadoresApiController', 'agregarJugador');

//Rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);