<?php

include("conexion.php");
if (isset($_POST['register'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO usuarios(nombre_usua, correo_electronico, contraseña, telefono, direccion, fecha)    
                VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
            ?>
            <h3 class="succes">Te has regristrado correctamente</h3>
            <?php
            } else {
                ?>
                <h3 class="error"> Hay un error </h3>
                <?php
            }
    } else {
        ?>
            <h3 class="error"> Llena todos los campos </h3>
        <?php
    }
}

?>