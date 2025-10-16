<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/View/LayoutInterno.php';
?>

<!DOCTYPE html>
<html lang="en">

  <?php
    ShowCSS();
  ?>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <?php ShowMenu(); ?>

        <div class="layout-page">
         
          <?php ShowNav(); ?>

          <div class="content-wrapper">

            <div class="container-xxl flex-grow-1 container-p-y">
             


            </div>

            <?php ShowFooter(); ?>

            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <?php
      ShowJS();
    ?>
    
  </body>
</html>