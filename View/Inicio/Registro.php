<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/Controller/InicioController.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Proyecto Web MN</title>
    <meta name="description" content="" />

    <link rel="stylesheet" href="../css/boxicons.css" />
    <link rel="stylesheet" href="../css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../css/demo.css" />
    <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../css/page-auth.css" />
    <link rel="stylesheet" href="../css/estilos.css" />
    <script src="../js/helpers.js"></script>
    <script src="../js/config.js"></script>
  </head>

  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <div class="card">
            <div class="card-body">
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <img src="../img/logo.png" />
                  <span class="app-brand-text demo text-body fw-bolder">Crear Cuenta</span>
                </a>
              </div>
              
              <?php
                if(isset($_POST["Mensaje"]))
                {
                    echo '<div class="alert alert-primary centrado">' . $_POST["Mensaje"] . '</div>';
                }
              ?>

              <form id="formRegistro" class="mb-3" action="" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Identificación</label>
                  <input type="text" class="form-control" id="Identificacion" name="Identificacion"
                  onkeyup="ConsultarNombre();" />
                </div>

                 <div class="mb-3">
                  <label for="username" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="Nombre" name="Nombre" readOnly="true" />
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Correo Electrónico</label>
                  <input type="email" class="form-control" id="CorreoElectronico" name="CorreoElectronico" />
                </div>
                
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Contraseña</label>
                  <input type="password" class="form-control" id="Contrasenna" name="Contrasenna" />
                  </div>
                </div>

                <button class="btn btn-primary d-grid w-100" type="submit" id="btnCrearCuenta" name="btnCrearCuenta">Procesar</button>
              </form>

              <p class="text-center">
                <span>Ya tienes una cuenta?</span>
                <a href="IniciarSesion.php">
                  <span>Iniciar Sesión</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/perfect-scrollbar.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/funciones.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
