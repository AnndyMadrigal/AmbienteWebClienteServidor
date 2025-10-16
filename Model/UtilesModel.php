<?php

function OpenConnection()
{   
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return mysqli_connect("127.0.0.1:3307", "root", "", "mn_bd");
}

function CloseConnection($context)
{
    mysqli_close($context);
}

function SaveError()
{
    $context = OpenConnection();

    //Para no guardar todo el objeto Exception, capturamos solo el mensaje
    //porque si no habria que crear una tabla con muchos campos
    //y no es necesario
    //tambien se le aplica un msqli para evitar caracteres especiales

    $mensaje = $error -> mysql_real_escape_string(getMessage());

    $sentencia = "CALL RegistrarError('$mensaje')";
    $context = query($sentencia);

    CloseConnection($context);
}
?>