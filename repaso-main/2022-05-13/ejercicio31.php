<?php
$txtNombre="";
$rdglenguaje="";

$chkphp="";
$chkhtml="";
$chkcss ="";

$lsAnime="";
$txtcomentario

if ($_POST ){
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdglenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $chkphp= (isset($_POST['chkphp'])=="si" )?"checked":"" ;
    $chkhtml= (isset($_POST['chkhtml'])=="si" )?"checked":"" ;;
    $chkcss = (isset($_POST['chkcss'])=="si" )?"checked":"" ;;

    $lsAnime=( isset($_POST['lsAmine']) )?$_POST['lsAmine']:"" ;

    $txtcomentario= (isset($_POST['txtcomentario']))?$_POST['txtcomentario']:""; 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if($_POST){ ?>
    <strong> Hola </strong>: <?php echo $txtNombre;?>
    <br/>
    <strong>Tu lenguaje es: </strong><?php echo $rdglenguaje;?>
    <br/>
    <strong>Estas aprendiendo: </strong><br/>
    -<?php echo ($chkphp=="checked")?"PHP":""; ?><br/>
    -<?php echo ($chkhtml=="checked")?"HTML":""; ?><br/>
    -<?php echo ($chkcss=="checked")?"CSS":""; ?><br/>
    <br/>
    <strong>Tu lenguaje es: </strong><?php echo $lsAnime; ?>
    <br/>
    <strong>TU mensaje es</strong> <?php echo $txtcomentario; ?>
 
    <?php } ?>

    <form action="ejercicio31.php" method="post">

    Nombre:<br/>
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
    <br/>

    ¿Te gusta?:<br/>
    <br/>php: <input type="radio" <?php echo ($rdglenguaje=="php")?"checked":""; ?> name="lenguaje"  value="php"  id=""><br/>
    <br/>html: <input type="radio" <?php echo ($rdglenguaje=="php")?"checked":""; ?> name="lenguaje" value="html" id=""><br/>
    <br/>css: <input type="radio" <?php echo ($rdglenguaje=="php")?"checked":""; ?> name="lenguaje" value="css" id=""><br/>

    Estas aprendiendo...<br/>
    <br/>php:<input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id="">
    <br/>html:<input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si" id="">
    <br/>css:<input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si" id="">
    <br/>

    ¿que anime te gusta?...<br/>
    <select name="lsAnime" id="" >
        <option value="">[Ninguna serie]</option>
        <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":""; ?>  >Naruto</option>
        <option value="bleach"  <?php echo ($lsAnime=="bleach")?"selected":""; ?> >Bleach</option>
        <option value="dragon"  <?php echo ($lsAnime=="dragon")?"selected":""; ?> >Dragon Ball</option>
    </select>
    <br/>

    ¿Tienes alguna Duda?<br/>
    <textarea name="txtcomentario" id="" cols="30" rows="10">
<?php echo $txtcomentario; ?>
    </textarea>
    <br/>
    <input type="submit" value="Enviar informacion">


    </form>

</body>
</html>