<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS TRANSFERIDOS DEL FORMULARIO</h1>
    <?php 
    //viene de form login.php -->transferencia de datos
    echo "El Usuario ingresado es...";
    echo "<br>";
    echo $_POST['username']; //Datos proviene del formulario
    ?>    
</body>
</html>