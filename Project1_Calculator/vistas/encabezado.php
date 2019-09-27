<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Proyecto 1: Calculadora Poblacional</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-1.10.2.js"></script>

    <!--Scripts para las gráficas con Morris.js, JQuery es indispensable-->
    <link rel="stylesheet" href="./libs/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="./libs/morris.min.js"></script>

  </head>
  
<body cz-short-listen="true" style>
    <div id="wrapper">
      <!-- Sidebar -->
     <nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-lg" role="navigation">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?q=inicio">Calculadora Poblacinal <sup><small><span class="label label-info">v2.0</span></small></sup> </a>
      </div>

      <!--La barra de menu de lado izquierdo-->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
       <ul class="nav navbar-nav side-nav">
          <li class="nav-item <?php echo isset($_GET["q"]) && $_GET["q"] === "inicio" ? "active": ""?>">
            <a href="?q=inicio"><i class="fa fa-home"></i> Inicio </a></li>
          <li class="nav-item <?php echo isset($_GET["q"]) && $_GET["q"] === "proyeccion" ? "active": ""?>">
          <a href="?q=proyeccion"><i class="fa fa-users"></i> Proyección Poblacional</a></li>
          <li class="nav-item <?php echo isset($_GET["q"]) && $_GET["q"] === "historial" ? "active": ""?>">
          <a href="?q=historial"><i class="fa fa-history"></i> Historial</a></li>
          <li class="nav-item <?php echo isset($_GET["q"]) && $_GET["q"] === "creditos" ? "active": "" ?>">
          <a href="?q=creditos"><i class="fa fa-info-circle"></i> Información</a></li>
       </ul>
      </div>
    </nav>