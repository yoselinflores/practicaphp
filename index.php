<?php
    if(isset($_POST['submit'])){
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $confirmarcontraseña = $_POST['confirmarcontraseña'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificacion</title>
    <link rel="stylesheet"href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <h1>Registro</h1>
        <label for="">Correo:</label>
        <input type="text" name="correo">
        <label for="">Contraseña:</label>
        <input type="text" name="contraseña">
        <label for="">Confirmar Contraseña:</label>
        <input type="text" name="contraseña">
        <br>
        <input type="submit" name="submit">

        <?php
        include("validar-form.php");
        ?>
    </form>    
</body>
</html>