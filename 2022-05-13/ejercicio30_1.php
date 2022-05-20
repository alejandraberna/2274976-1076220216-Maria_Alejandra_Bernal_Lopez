<?php
session_start();

if( isset($_session["usuario"])){

echo"usuario: ".$_session["usuario"]." estatus: ".$_session["estatus"];

}else{
echo "no hay datos";
}




?>