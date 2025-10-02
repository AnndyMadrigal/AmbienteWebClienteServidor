<?php

function CrearCuentaModel($identificacion, $nombre, $correoElectronico, $contrasenna)
{
    $context = mysqli_connect("localhost:3307", "root", "", "mn_bd");

    $sentencia = "CALL CrearCuenta('$identificacion', '$nombre')";
    $resultado = $context -> query($sentencia);

    $context -> close();

    return $resultado;
}

?>