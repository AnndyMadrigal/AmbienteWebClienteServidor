@ -0,0 +1,73 @@
<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/View/LayoutInterno.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/Controller/ProductoController.php';

  $resultado = ConsultarProductos();
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
             
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Imagen</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    while($fila = mysqli_fetch_array($resultado))
                    {
                        echo "<tr>";
                        echo "<td>" . $fila["ConsecutivoProducto"] . "</td>";
                        echo "<td>" . $fila["Nombre"] . "</td>";
                        echo "<td>" . $fila["Precio"] . "</td>";
                        echo "<td>" . $fila["Estado"] . "</td>";
                        echo "<td>" . $fila["Imagen"] . "</td>";
                        echo "</tr>";
                    }
                  ?>

                </tbody>
              </table>

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