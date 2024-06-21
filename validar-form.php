<?php
    if(isset($_POST['submit'])){
        if(empty($correo))
        echo"<p class='error'>* Agrega un correo</p>";
    }
    
    if(isset($_POST['submit'])){
        if(empty($contraseña))
        echo"<p class='error'>* Agrega una contraseña</p>";
    }
    if(isset($_POST['submit'])){
        if(empty($confirmarcontraseña))
        echo"<p class='error'>* confirma la contraseña</p>";
    }
?>    