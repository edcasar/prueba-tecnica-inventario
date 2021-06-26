<?php
require_once 'Model/conexion.php';
$controller = 'producto';

// Con esta sección hacemos el Controlador del Frontend
if(!isset($_REQUEST['controller']))
{
    require_once "Controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // buscamos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['controller']);
    $accion = isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'Index';

    // Instanciamos el controlador
    require_once "Controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Función para llamar las acciones a ejecutar
    call_user_func( array( $controller, $accion ) );
}
?>
