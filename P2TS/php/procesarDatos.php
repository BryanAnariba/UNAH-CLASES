<?php
    include("conexion.php");
    $opt1 = $_POST["opt1"];
    $opt2 = $_POST["opt2"];
    $opt3 = $_POST["opt3"];
    $opt4 = $_POST["opt4"];
    $prefijo = $_POST["prefijo"];
    $host = $_POST["host"];

    function retornaHost($host){
        $i = 1;
        $numHost = 0;
        while($numHost <= $host){
            $numHost = pow ( 2 , $i );
            $i = $i + 1;
        }
        return $numHost;
    }
    //retorna la cantidad de host necesarios por red mediante la funcion de arriba
    $res = retornaHost($host) - 2;

    //no funciona
    if($opt1 >= 0 && $opt1 <= 127 && $res > 65536){
        $mensaje = "A";
        $salto = (256*256*256)/($res + 2);
        $ip = $opt1 . "." . 0 . "." . 0 . "." . 0;
        $i = 0;
        $k = 0;
        $json = array();
        while($i < 256){
            $bin = sprintf( "%08d", decbin( $opt1 ));
            $bin2 = sprintf( "%08d", decbin( $i ));
            $bin3 = sprintf( "%08d", decbin( 0 ));
            $bin4 = sprintf( "%08d", decbin( 0 ));
            $noRed = $k;
            $ip = $opt1 . "." . $i . "." . 0 . "." . 0;
            $primer = $opt1 . "." . $i . "." . 0 . "." . 1;
            $i = $i + $salto;
            $ultima = $opt1 . "." . ($i - 1) . "." . 255 . "." . (256 - 2);
            $broadcast = $opt1 . "." . ($i - 1) . "." . 255 . "." . (256 - 1);
            $binario = $bin . "." . $bin2 . "." . $bin3 . "." . $bin4;
            $mask = 255 . "." . (256 - $salto) . "." . 0 . "." . 0;
            $json[] = array(
                "NoRed"=>$noRed,
                "Red"=>$ip,
                "primer"=>$primer,
                "ultima"=>$ultima,
                "broadcast"=>$broadcast,
                "mask"=>$mask,
                "binario"=>$binario
            );
            $k = $k + 1;
        }
        $query = "INSERT INTO TBL_INFORMACION (SALTO , CLASE , IP , MASCARA , CANT_HOST) VALUES 
        ($salto , '$mensaje' , '$ip' , '$mask' , $res);";
        $res2 = mysqli_query($conexionBaseDatos , $query);
        if($res2){
            $string = json_encode($json);
            echo $string;
        }else{
            echo "Insercion Rechazada";
        }
    }
    if($opt1 >= 128 && $opt1 <= 191 && $res > 256 && $res < 65536){
        $mensaje = "B";
        $salto = 65536/($res + 2);
        $ip = $opt1 . "." . $opt2 . "." . 0 . "." . 0;
        $i = 0;
        $k = 0;
        $json = array();
        while($i < 256){
            $bin = sprintf( "%08d", decbin( $opt1 ));
            $bin2 = sprintf( "%08d", decbin( $opt2 ));
            $bin3 = sprintf( "%08d", decbin( $i ));
            $bin4 = sprintf( "%08d", decbin( 0 ));
            $noRed = $k;
            $ip = $opt1 . "." . $opt2 . "." . $i . "." . 0;
            $primer = $opt1 . "." . $opt2 . "." . $i . "." . 1;
            $i = $i + $salto;
            $ultima = $opt1 . "." . $opt2 . "." . ($i - 1) . "." . (256 - 2);
            $broadcast = $opt1 . "." . $opt2 . "." . ($i - 1) . "." . (256 - 1);
            $binario = $bin . "." . $bin2 . "." . $bin3 . "." . $bin4;
            $mask = 255 . "." . 255 . "." . (256 - $salto) . "." . 0;
            $json[] = array(
                "NoRed"=>$noRed,
                "Red"=>$ip,
                "primer"=>$primer,
                "ultima"=>$ultima,
                "broadcast"=>$broadcast,
                "mask"=>$mask,
                "binario"=>$binario
            );
            $k = $k + 1;
        }
        $query = "INSERT INTO TBL_INFORMACION (SALTO , CLASE , IP , MASCARA , CANT_HOST) VALUES 
        ($salto , '$mensaje' , '$ip' , '$mask' , $res);";
        $res2 = mysqli_query($conexionBaseDatos , $query);
        if($res2){
            $string = json_encode($json);
            echo $string;
        }else{
            echo "Insercion Rechazada";
        }
    }
    if($opt1 >= 192 && $opt1 <= 223 && $res > 0 && $res < 255){
        $mensaje = "C";
        $salto = 256 - ($res + 2);
        $salto2 = $res + 2;
        $ip = $opt1 . "." . $opt2 . "." . $opt3 . "." . 0;
        $i = 0;
        $k = 0;
        $json = array();
        while($i <= $salto){
            $bin = sprintf( "%08d", decbin( $opt1 ));
            $bin2 = sprintf( "%08d", decbin( $opt2 ));
            $bin3 = sprintf( "%08d", decbin( $opt3 ));
            $bin4 = sprintf( "%08d", decbin( $i ));
            $noRed = $k;
            $ip = $opt1 . "." . $opt2 . "." . $opt3 . "." . $i;
            $primer = $opt1 . "." . $opt2 . "." . $opt3 . "." . ($i + 1);
            $i = $i + $salto2;
            $ultima = $opt1 . "." . $opt2 . "." . $opt3 . "." . ($i - 2);
            $broadcast = $opt1 . "." . $opt2 . "." . $opt3 . "." . ($i - 1);
            $binario = $bin . "." . $bin2 . "." . $bin3 . "." . $bin4;
            $mask = 255 . "." . 255 . "." . 255 . "." . $salto;
            $json[] = array(
                "NoRed"=>$noRed,
                "Red"=>$ip,
                "primer"=>$primer,
                "ultima"=>$ultima,
                "broadcast"=>$broadcast,
                "mask"=>$mask,
                "binario"=>$binario
            );
            $k = $k + 1;
        }
        $query = "INSERT INTO TBL_INFORMACION (SALTO , CLASE , IP , MASCARA , CANT_HOST) VALUES 
        ($salto , '$mensaje' , '$ip' , '$mask' , $res);";
        $res2 = mysqli_query($conexionBaseDatos , $query);
        if($res2){
            $string = json_encode($json);
            echo $string;
        }else{
            echo "Insercion Rechazada";
        }

    }

?>