<?php

$txtNombre="";    
$rdgLenguaje="";
$chkphp="";  
$chkhtml=""; 
$chkcss="";  

$lsAnime="";   


$txtcomentario="";



if ($_POST ){ 
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; 
    $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:""; 
   print_r($rdgLenguaje );

   $chkphp= (isset($_POST['chkphp'])=="si" )?"checked":"" ;
   $chkhtml=(isset($_POST['chkhtml'])=="si" )?"checked":"" ;;
   $chkcss=(isset($_POST['chkcss'])=="si" )?"checked":"" ;;


   $lsAnime=( isset($_POST['lsAnime']) )?$_POST['lsAnime']:""  ;
print_r($_POST);


$txtcomentario= (isset($_POST['txtcomentario']))?$_POST['txtcomentario']:""; 

// Instruccion de insertar
//Rutina de algun calculo
// aqui puedes alterar esos valores para mostra diferentes valores modificandolos

}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>formulario</title>
</head>


<body>
   
    <?php  if($_POST) { ?>

        
      <strong> Hola </strong>: <?php echo $txtNombre;?><br/>
      <strong>tu lenguaje es: </strong><?php echo $rdgLenguaje;?>
      <br/>
      <strong>estas aprendiendo: </strong><br/>
      -<?php echo ($chkphp=="checked")?"PHP":""?><br/>
      -<?php echo ($chkhtml=="checked")?"HTML":""?><br/>
      -<?php echo ($chkcss=="checked")?"CSS":""?><br/>
      <br/>
      <strong>tu serie  es: </strong>
      <?php echo $lsAnime; ?><br/>
      <br/>

      <strong>tu mensaje  es: </strong><?php echo $txtcomentario;?>
      <br/>
      <br/>

    <?php } ?>
      
    <form action="ejercicio31.php" method="post">
    
    Nombre:<br/>
 
     <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
     
     <br/>
     ¿te gusta?:<br/>

    <br/>PHP : <input type="radio"   <?php echo ($rdgLenguaje=="PHP")?"checked":""?>    name="lenguaje" value="PHP" id=""><br/>
    <br/>HTML :<input type="radio" <?php echo ($rdgLenguaje=="HTML")?"checked":""?>name="lenguaje" value="HTML" id=""><br/>
    <br/>CSS   :<input type="radio" <?php echo ($rdgLenguaje=="CSS")?"checked":""?> name="lenguaje" value="CSS"  id=""><br/>
     
    <br/><br/>
    estas aprendiendo...<br/>
    <br/>PHP <input type="checkbox"  <?php echo $chkphp; ?>  name="chkphp" value="si" id="">
    <br/>HTML <input type="checkbox" <?php echo $chkhtml; ?>  name="chkhtml" value="si" id="">
    <br/>CSS <input type="checkbox" <?php echo $chkcss; ?>  name="chkcss" value="si" id="">
    <br/>

    <br/>

    ¿Que anime te gusta?...<br/><br/>
    <select name="lsAnime" id="" >

    <option value="">[Ninguna serie]</option>
    <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":""; ?>  >naruto </option>
<option value="Dragon" <?php echo ($lsAnime=="Dragon")?"selected":""; ?>  >Dragon Ball</option>
    <option value="Dragon" <?php echo ($lsAnime=="Dragon")?"selected":""; ?>  >Dragon Ball</option>



    </select>


    <br/>

    <br/>
    

    ¿Tienes alguna duda?<br/>
    <textarea name="txtcomentario" id="" cols="30" rows="10"> 
    <?php echo $txtcomentario; ?> 
        
         </textarea>

    



    <br/><br/>
    
     <input type="submit" value="enviar informacion">

</body>
</html>