<?php 


  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/Model/InicioModel.php';



    if(isset($_POST["btnCrearCuenta"]))
    {
        $identificacion = $_POST["Identificacion"];
        $nombre = $_POST["Nombre"];
        $correoElectronico = $_POST["CorreoElectronico"];
        $contrasenna = $_POST["Contrasenna"];

        $resultado = CrearCuentaModel($identificacion,$nombre,$correoElectronico,$contrasenna);

        if($resultado)
        {
            header("Location: ../../View/Inicio/IniciarSesion.php");
            exit;
        }
        else
        {
            $_POST["Mensaje"] = "No se ha podido crear la cuenta solicitada";
        }
    }

        if(isset($_POST["btnIniciarSesion"]))
    {
        $correoElectronico = $_POST["CorreoElectronico"];
        $contrasenna = $_POST["Contrasenna"];

        $resultado = ValidarCuentaModel($correoElectronico,$contrasenna);

        if($resultado != null && $resultado -> num_rows > 0)
        {
            header("Location: ../../View/Inicio/Principal.php");
            exit;
        }
        else
        {
            $_POST["Mensaje"] = "No se ha podido validar la cuenta ingresada";
        }

    }
    
    if(isset($_POST["btnRecuperarAcceso"]))
    {
        $correoElectronico = $_POST["CorreoElectronico"];

        $resultado = ValidarCorreoModel($correoElectronico);

        if($resultado != null && $resultado -> num_rows > 0)
        {
            header("Location: ../../View/Inicio/Principal.php");
            exit;
        }
        else
        {
            $_POST["Mensaje"] = "No se ha podido recuperar el acceso";
        }
    }
?>