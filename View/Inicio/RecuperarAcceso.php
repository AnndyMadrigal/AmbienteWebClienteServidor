<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Proyecto Web MN</title>
    <meta name="description" content="" />
    
    <link rel="stylesheet" href="../css/boxicons.css" />
    <link rel="stylesheet" href="../css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../css/demo.css" />
    <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../css/page-auth.css" />
    <script src="../js/helpers.js"></script>
    <script src="../js/config.js"></script>
  </head>

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

              <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                <div class="mb-3">
                 <label for="email" class="form-label">Correo Electrónico</label>
                   <input type="text" class="form-control" id="CorreoElectronico" name="CorreoElectronico" />
                </div>
                <button class="btn btn-primary d-grid w-100">Procesar</button>
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

    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/perfect-scrollbar.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
