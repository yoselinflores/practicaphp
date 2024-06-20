<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Conversor Decimal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div align='center'>
    <h1 style="color:#C8020B;" >Conversion Decimal</h1>
    <form method="post">
        <label for="opcion">Tipo de conversión:</label>
        <select name="opcion" id="opcion">
            <option value="binario">Decimal a Binario</option>
            <option value="octal">Decimal a Octal</option>
            <option value="hexadecimal">Decimal a Hexadecimal</option>
        </select>
        <br><br>
        <label for="numero">Ingresa el número decimal:</label>
        <input type="text" name="numero" id="numero">
        <br><br>
        <button type="submit" value="convertir" class="btn btn-outline-danger">convertir</button>
    </form>
    


    
    <?php
    
    function decimal_a_binario($decimal) {
        return decbin($decimal);
    }
    
    
    function decimal_a_octal($decimal) {
        return decoct($decimal);
    }
    
   
    function decimal_a_hexadecimal($decimal) {
        return dechex($decimal);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opcion = $_POST['opcion'];
        $numero_decimal = $_POST['numero'];
        
        switch ($opcion) {
            case 'binario':
                $resultado = decimal_a_binario($numero_decimal);
                echo "<p>El número binario equivalente es: $resultado</p>";
                break;
            case 'octal':
                $resultado = decimal_a_octal($numero_decimal);
                echo "<p>El número octal equivalente es: $resultado</p>";
                break;
            case 'hexadecimal':
                $resultado = decimal_a_hexadecimal($numero_decimal);
                echo "<p>El número hexadecimal equivalente es: $resultado</p>";
                break;
            default:
                echo "<p>Opción inválida</p>";
                break;
        }
    }
    ?>
    </div>
</body>
</html>