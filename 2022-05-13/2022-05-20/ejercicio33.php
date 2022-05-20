<?php

$jsonContenido='[
    {"nombre":"oscar", "apellido":"Uh"},
    {"nombre":"jose", "apellido":"Perez"}
    ]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach ($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br/>";
    
    }

?>