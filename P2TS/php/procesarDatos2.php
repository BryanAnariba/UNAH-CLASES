<?php
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
    $json = array();
    //retorna la cantidad de host necesarios por red mediante la funcion de arriba
    $res = retornaHost($host) - 2;
    $salto = $res + 2;
    if($opt1 > 0 && $opt1 < 128){
        $mensaje = "A";
        $salto;
    }
    if($opt1 >= 128 && $opt1 <= 191){
        $mensaje = "B";
        $salto2 = (65536/$salto);
        $salto3 = 256 - $salto2;
        $mask = 255 . "." . 255 . "." . $salto3 . "." . 0;
        $json[] = array(
            "Clase"=>$mensaje,
            "Salto"=>$salto2,
            "Mask"=>$mask
        );
        $string = json_encode($json);
        echo $string;

    }
    
    if($opt1 >= 192 && $opt1 < 224){
        $mensaje = "C";
        $salto2 = 256 - $salto;
        $mask = 255 . "." . 255 . "." . 255 . "." . $salto2;
        $json[] = array(
            "Clase"=>$mensaje,
            "Salto"=>$salto,
            "Mask"=>$mask
        );
        $string = json_encode($json);
        echo $string;
    }

?>