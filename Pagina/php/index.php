<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- //conexion a CSS -->
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <form method="post"> 
        
        <h2>Registrate</h2>
        <p>Empieza tu registro</p>

       <!--  Para Nombre -->
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" >
            <img class="Input-icon" scr="images/name.svg" alta=""> <!-- //Icono para imagen de Nombre en formulario, poner si quieres-->
        </div>
        
        <!-- Para email -->
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo Electronico" >
            <img class="Input-icon" scr="images/email.svg" alta=""> <!-- //Icono para imagen de Email en formulario, poner si quieres-->
        </div>

            <!-- Para Direccion -->
        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Direccion" >
            <img class="Input-icon" scr="images/email.svg" alta=""> <!-- //Icono para imagen de Direccion en formulario, poner si quieres-->
        </div>

            <!-- Para telefono -->
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" >
            <img class="Input-icon" scr="images/phone.svg" alta=""> <!-- //Icono para imagen de Telefono en formulario, poner si quieres-->
        </div>

           <!--  Para Contraseña -->
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" >
            <img class="Input-icon" scr="images/phone.svg" alta=""> <!-- //Icono para imagen de Contraseña en formulario, poner si quieres-->
        </div>

        <input class="btn" type="submit" name="register" value="Terminar">

    </form>
        
    <!-- ESTO ES PARA LLAMAR A PHP -->
    <?php
    include("registrar.php");
    ?>

</body>
</html>