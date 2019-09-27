<div id="page-wrapper">

<div class="row">
    <h2>Cálculo de la Población</h2>
    <hr>
    <div class="col-md-6">
        <div class="modal-body">
           <form action="poblacion.php" method="POST">                    
              <div class="form-group"><label for="poblacionInicial">Poblacion Inicial:</label><input class="form-control" id="poblacionInicial" name="poblacionInicial" type="number" placeholder="3000"></div>
              <div class="form-group"><label for="tasaNatalidad">Tasa de Natalidad:</label><input class="form-control" id="tasaNatalidad" name="tasaNatalidad" type="number" placeholder="0.20"></div>
              <div class="form-group"><label for="tasaInmigracion">Tasa de Inmigración:</label><input class="form-control" id="tasaInmigracion" name="tasaInmigracion" type="number" placeholder="0.01"></div>
              <div class="form-group"><label for="porcentajeMujeres">Porcentaje de Mujeres:</label><input class="form-control" id="porcentajeMujeres" name="porcentajeMujeres" type="number" placeholder="0.48"></div>
           </form>
         </div>
     </div>
     <div class="col-md-6">
        <div class="modal-body">
           <form action="poblacion.php" method="POST">                    
              <div class="form-group"><label for="anio">Año de proyección:</label><input class="form-control" id="anio" name="anio" type="number" placeholder="1"></div>
              <div class="form-group"><label for="tasaMortalidad">Tasa de Mortalidad:</label><input class="form-control" id="tasaMortalidad" name="tasaMortalidad" type="number" placeholder="0.03"></div>
              <div class="form-group"><label for="tasaEmigracion">Tasa de Emigracion:</label><input class="form-control" id="tasaEmigracion" name="tasaEmigracion" type="number" placeholder="0.05"></div>
              <div class="form-group"><label for="porcentajeHombres">Porcentaje de Hombres:</label><input class="form-control" id="porcentajeHombres" name="porcentajeHombres" type="number" placeholder="0.52"></div>
           </form>
         </div>
     </div>
     <br>
     <input type="submit" class="btn btn-success" value="Calcular">
  </div>
</div>