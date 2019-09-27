<?php
require_once __DIR__ . "/poblacion.php";

$pagina = "inicio";
if (isset($_GET["q"])) {
    $pagina = $_GET["q"];
}
switch ($pagina) {

    case "inicio":
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/inicio.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
    case "proyeccion":
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/proyeccion.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
    case "historial":
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/historial.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
    case "creditos":
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/creditos.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
        
}
?>

