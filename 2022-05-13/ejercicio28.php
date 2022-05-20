<?php

$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contrasenia="";

try{

$conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasenia );
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="SELECT * FROM `fotos`";
    
}catch(PDOException $error) {
echo "conexion erronea".$error;