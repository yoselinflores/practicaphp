
<?php
if (isset($_POST['submit'])) {
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $juicio = $_POST['juicio'];

    $errors = [];

    if ($altura < 120) {
        $errors[] = "La altura debe ser mayor a 120 cm.";
    }
    if ($edad < 16) {
        $errors[] = "Debe tener una edad superior a 16 años.";
    }
    if ($juicio !== 'yes') {
        $errors[] = "Debe aceptar no llevarnos a juicio por daños y perjuicios.";
    }

    if (empty($errors)) {
        echo '<p class="success">¡Felicidades! Puede subir a la Montaña Rusa. Aquí está su ticket:</p>';
        echo '<img class="ticket" src="./ticket.webp" alt="Ticket">';
    } else {
        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }
    }
}
?>
</di>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Montaña Rusa</title>
    <link rel="stylesheet"href="styles.css">
</head>
<body>
    <form action="" method="post">
    <h1>La Montaña Rusa</h1>
    <label for="">Altura:</label>
    <input type="text" name="altura" required>
    <label for="">Edad:</label>
    <input type="text" name="edad" required>


        <div class="form-group">
            <label>¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label><br>
        <input type="radio" id="acepta" name="juicio" value="acepta" required>
        <label for="acepta">Sí</label>
        <input type="radio" id="rechaza" name="juicio" value="rechaza"required>
        <label for="rechaza">No</label>
        </div>

        
        <div class="form-group">

            <input type="submit" name="submit" id="addImageBtn" >
            
            
        </div>

        <?php
        include("validar-juego.php");
        ?>

    </form>
</body>
</html>