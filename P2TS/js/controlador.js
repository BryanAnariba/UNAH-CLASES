$(document).ready(function(){
    $("#preguntas").hide();
    $("#btn-procesar").click(function (){
        $("#preguntas").show(2000);
    });
    $("#btn-continuar").click(function (){
        var parametros;
        parametros = `opt1=${$("#opt1").val()}&opt2=${$("#opt2").val()}&opt3=${$("#opt3").val()}
        &opt4=${$("#opt4").val()}&prefijo=${$("#prefijo").val()}&host=${$("#host").val()}`;
        console.log(parametros);
        $.ajax({
            url:"procesarDatos.php",
            method:"POST",
            dataType:"json",
            data:parametros,
            success:function(respuesta){
                console.log(respuesta);
                document.getElementById("mostrar").innerHTML="";
                for(var i = 0 ; i < respuesta.length ; i++) {
                    $("#mostrar").append(`
                        <tr>
                            <td>
                                ${respuesta[i].NoRed}
                            </td>
                            <td>
                                ${respuesta[i].Red}
                            </td>
                            <td>
                                ${respuesta[i].primer} - ${respuesta[i].ultima}
                            </td>
                            <td>
                                ${respuesta[i].broadcast}
                            </td>
                            <td>
                                ${respuesta[i].mask}
                            </td>
                            <td>
                                ${respuesta[i].binario}
                            </td>
                        </tr>

                    `);
                }
            },
            error:function(error){
                console.log(error);
            }
        });
    });
    $("#btn-continuar").click(function (){
        var parametros;
        parametros = `opt1=${$("#opt1").val()}&opt2=${$("#opt2").val()}&opt3=${$("#opt3").val()}
        &opt4=${$("#opt4").val()}&prefijo=${$("#prefijo").val()}&host=${$("#host").val()}`;
        $.ajax({
            url:"procesarDatos2.php",
            method:"POST",
            dataType:"json",
            data:parametros,
            success:function(respuesta){
                console.log(respuesta);
                for(var i = 0; i<respuesta.length ; i++){
                    $("#mostrar2").append(`
                    <div class="col-md-5">
                        <img src="../img/Ok-Download-PNG.png" alt="">
                    </div>  
                    <div class="col-md-7 my-auto"><br>
                        <h3 class="text-white">¿De Cuanto Seria El Salto de Red De la Operacion Resultante?</h3>
                        <input type="text" class="form-control" value="${respuesta[i].Salto}">
                        <h3 class="text-white">¿Cual Seria La Mascara Resultante?</h3>
                        <input type="text" class="form-control" value="${respuesta[i].Mask}">
                        <h3 class="text-white">¿Cual Seria La Clase a Cual Pertenece La Red?</h3>
                        <input type="text" class="form-control" value="${respuesta[i].Clase}">
                    </div>  
                    `);
                }
            },
            error:function(error){
                console.log(error);
            }
        });
    });
});