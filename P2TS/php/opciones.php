<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subnet</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <style>
    .contenedor2
    {
        display:inline;
    }
    </style>
</head>
<body>
    <div id="home-section">
        <div class="contenedor1">
            <h1 class="text-center  text-white display-4">Llene Los Siguientes Campos De La Aplicacion</h1><br><br>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 contenedor2 my-auto">
                <input class="text-center" type="text" style="width:100px; border-radius:12px; padding:7px; text-decoration:none;"  id="opt1" placeholder="???">.
                <input class="text-center" type="text" style="width:100px; border-radius:12px; padding:7px; text-decoration:none;"  id="opt2" placeholder="???">.
                <input class="text-center" type="text" style="width:100px; border-radius:12px; padding:7px; text-decoration:none;"  id="opt3" placeholder="???">.
                <input class="text-center" type="text" style="width:100px; border-radius:12px; padding:7px; text-decoration:none;"  id="opt4" placeholder="???">
            </div>
            <div class="col-md-4 contenedor3 my-auto">
                <center>
                <input class="text-center" type="text" type="text" style="width:100px; border-radius:12px; padding:7px; text-decoration:none;" id="prefijo" placeholder="Prefijo">
                <input class="text-center" type="text" type="text" style="width:100px; border-radius:12px; padding:7px; text-decoration:none;" id="host" placeholder="No Host">
                </center>
                <br><br>
                <input type="submit" id="btn-procesar" class="btn btn-outline-danger btn-block" value="Generar Listado de Redes">
            </div>
        </div>
    </div><br><br><br>
    <div class="container" id="preguntas">
        <h2 class="text-center text-white">Preguntas de Comprension</h2>
        <div class="row" >
            <div class="col-md-3">
                <img src="../img/a.gif" alt="">
            </div>
            <div class="col-md-9 my-auto"><br>
                <h3 class="text-white">¿De Cuanto Seria El Salto de Red De la Operacion Resultante?</h3>
                <input type="text" class="form-control" placeholder="Salto de Red">
                <h3 class="text-white">¿Cual Seria La Mascara Resultante?</h3>
                <input type="text" class="form-control" placeholder="Mascara -> ??? . ??? . ??? . ???">
                <h3 class="text-white">¿Cual Seria La Clase a Cual Pertenece La Red?</h3>
                <input type="text" class="form-control" placeholder="Clase Perteneciente -> A , B o C">
                <input type="submit" id="btn-continuar" class="btn btn-outline-danger btn-block" value="Continuar">
            </div>
        </div>
    </div>
    <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered table-dark table-hover">
                    <thead>
                        <th>No</th>
                        <th>Direccion Red</th>
                        <th>Rango Direcciones IP</th>
                        <th>Broadcast</th>
                        <th>Mascara</th>
                        <th>Red A Binario</th>
                    </thead>
                    <tbody id="mostrar">

                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row" id="mostrar2">
          </div>
        </div>
    </div>  
    <footer class="page-footer font-small mdb-color lighten-3 pt-4 contenedor4" style="background: #A3CB38;">

        <!-- Footer Elements -->
        <div class="container">
      
          <!--Grid row-->
          <div class="row">
      
            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4 my-auto contenedor6">
      
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img src="../img/logo-unah-blue.png" class="img-fluid"
                  alt="">
                <a href="">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
      
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 my-auto contenedor6">
      
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img src="../img/2.jpg" style="border-radius: 15px;" class="img-fluid"
                  alt="">
                <a href="">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
      
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 my-auto contenedor6">
      
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img src="../img/3.jpg" style="border-radius: 15px;" class="img-fluid"
                  alt="">
                <a href="">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
      
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4 img-fluid">
      
              <!--Image-->
              <div class="view overlay z-depth-1-half"><br>
                <img src="../img/4.png" style="border-radius: 15px;" class="img-fluid"
                  alt="">
                <a href="">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
      
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 my-auto contenedor6">
      
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img src="../img/F.I.-LOGO.png" style="border-radius: 15px;" class="img-fluid"
                  alt="">
                <a href="">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
      
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 my-auto contenedor6">
      
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img src="../img/6.png" style="border-radius: 15px;" class="img-fluid"
                  alt="">
                <a href="">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
      
            </div>
            <!--Grid column-->
      
          </div>
          <!--Grid row-->
      
        </div>
        <!-- Footer Elements -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 ING en Sistemas UNAH
          <a href="https://mdbootstrap.com/education/bootstrap/"> Teoria Simulacion</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/controlador.js"></script>
    <!--script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script-->
    <script>
      window.sr = ScrollReveal();
      sr.reveal('.contenedor1', {
        duration: 2000,
        origin: 'bottom'
      });
      sr.reveal('.contenedor2', {
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });
      sr.reveal('.contenedor3', {
        duration: 2000,
        origin: 'right',
        distance: '300px'
      });
      sr.reveal('.contenedor4', {
        duration: 2000,
        delay: 1000, 
        origin: 'bottom'
      });
      sr.reveal('.contenedor6', {
        duration: 2000,
        origin: 'left',
        distance: '300px',
        viewFactor: 0.2
      });
    </script>
</body>
</html>