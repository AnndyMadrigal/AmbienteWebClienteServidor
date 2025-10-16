<?php 


  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/Model/InicioModel.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/Controller/UtilesController.php';



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

        $_POST["Mensaje"] = "No se ha podido crear la cuenta solicitada";
    }

    if(isset($_POST["btnIniciarSesion"]))
    {
        $correoElectronico = $_POST["CorreoElectronico"];
        $contrasenna = $_POST["Contrasenna"];

        $resultado = ValidarCuentaModel($correoElectronico, $contrasenna);

        if($resultado != null && $resultado -> num_rows > 0)
        {
            header("Location: ../../View/Inicio/Principal.php");
            exit;
        }

        $_POST["Mensaje"] = "No se ha podido validar la cuenta ingresada";
    }

    if(isset($_POST["btnRecuperarAcceso"]))
    {
        $correoElectronico = $_POST["CorreoElectronico"];
 
        $resultado = ValidarCorreoModel($correoElectronico);

        if($resultado && $resultado -> num_rows > 0)
        {
            //Leer la información del resultado
            $datos = mysqli_fetch_array($resultado);

            //Generar contraseña aleatoria
            $ContrasennaGenerada = GenerarContrasenna();

            //Actualizar la contraseña actual
            $resultadoActualizar = ActualizarContrasennaModel($datos["ConsecutivoUsuario"], $ContrasennaGenerada);
            
            if($resultadoActualizar)
            {
                //Notificarle por correo la nueva contraseña
                $mensaje = "<html><body>
                Estimado(a) " . $datos["Nombre"] . "<br><br>
                Se ha generado la siguiente contraseña de acceso: <b>" . $ContrasennaGenerada . "</b><br>
                Procure realizar el cambio de su contraseña una vez que ingrese al sistema.<br><br>
                Muchas gracias.
                </body></html>";

                EnviarCorreo('Recuperar Acceso', $mensaje, $datos["CorreoElectronico"]);

                header("Location: ../../View/Inicio/IniciarSesion.php");
                exit;
            }
        }

        $_POST["Mensaje"] = "No se ha podido recuperar el acceso";
    }


?>