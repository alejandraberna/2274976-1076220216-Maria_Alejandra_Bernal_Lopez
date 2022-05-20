<?php

   if($_POST){
       print_r($_POST);

       print_r($_files['archivo']['name']);

       move_uploaded_file($_files['archivo']['tmp_name'],$_FILES['archivo']['name']);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charser="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documet</title>
</head>
<body>

    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
        Imagen:
        <input type="file" name="archivo" id="">
        <br/>
        <input type="submit" name="envie" value="Enviar informacion">

    </form>

</body>
</html>