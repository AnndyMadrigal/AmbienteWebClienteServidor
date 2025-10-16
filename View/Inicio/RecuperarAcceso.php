<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/Controller/InicioController.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/View/LayoutExterno.php';
?>

<!DOCTYPE html>
<html lang="en">

  <?php
  ShowCSS()
  ?>

  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <div class="card">
            <div class="card-body">
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <img src="../img/logo.png" />
                  <span class="app-brand-text demo text-body fw-bolder">Recuperar Acceso</span>
                </a>
              </div>
              
              <?php
                if(isset($_POST["Mensaje"]))
                {
                    echo '<div class="alert alert-primary centrado">' . $_POST["Mensaje"] . '</div>';
                }
              ?>

              <form id="formRecuperarAcceso" class="mb-3" action="" method="POST">
                <div class="mb-3">
                 <label for="email" class="form-label">Correo Electrónico</label>
                   <input type="text" class="form-control" id="CorreoElectronico" name="CorreoElectronico" />
                </div>
                <button class="btn btn-primary d-grid w-100" id="btnRecuperarAcceso" name="btnRecuperarAcceso" type="submit" >Procesar</button>
              </form>
              <div class="text-center">
                <a href="IniciarSesion.php" class="d-flex align-items-center justify-content-center">
                  Regresar
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?PHP 
    ShowJS();
    ?>
    <script src="../js/RecuperarAcceso.js"></script>
  </body>
</html>
