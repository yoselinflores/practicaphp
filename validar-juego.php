<?php
// Función para generar el ticket HTML
function generarTicket($nombre, $altura) {
    $ticket = "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Ticket para Montaña Rusa</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    padding: 20px;
                }
                .ticket {
                    max-width: 400px;
                    margin: auto;
                    background: #f9f9f9;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                    text-align: center;
                }
                .ticket img {
                    max-width: 100%;
                    margin-top: 20px;
                }
            </style>
        </head>
        <body>
            <div class='ticket'>
                <h2>Ticket para Montaña Rusa</h2>
                <p>Hola $nombre,</p>
                <p>Felicidades, cumples con los requisitos para ingresar a la Montaña Rusa.</p>
                <p>Tu altura es $altura cm.</p>
                <img src='./ticket.webp' alt='./ticket.webp'>
            </div>
        </body>
        </html>
    ";
    return $ticket;
}

// Obtener los datos del formulario
$usuario = "Usuario"; // Puedes personalizar el nombre según tus necesidades
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$juicio = $_POST['juicio'];

// Validar los requisitos
if ($altura >= 120 && $edad > 16 && $juicio === 'acepta') {
    // Generar el ticket
    $ticketHTML = generarTicket($nombre, $altura);
    // Mostrar el ticket generado
    echo $ticketHTML;
} else {
    // Mostrar un mensaje de error
    echo "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Error de Validación</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    padding: 20px;
                }
                .error {
                    max-width: 400px;
                    margin: auto;
                    background: #f9f9f9;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class='error'>
                <h2>No cumples con los requisitos para ingresar a la Montaña Rusa.</h2>
                <p>Por favor, verifica que cumplas con todos los requisitos.</p>
                <a href='javascript:history.go(-1)'>Volver al formulario</a>
            </div>
        </body>
        </html>
    ";
}
?>