<?php
session_start();

$_session["usuario"]="develoteca";
$_session["estatus"]="logueado";

echo"sesion iniciada".":<br/>";

echo"usuario: ".$_session["usuario"]." estatus: ".$_session["estatus"];

?>