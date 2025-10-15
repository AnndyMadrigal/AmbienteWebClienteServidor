<?php


  include_once $_SERVER['DOCUMENT_ROOT'] . '/AmbienteWebClienteServidor/Model/ConexionModel.php';


  function CrearCuentaModel($identificacion, $nombre, $correoElectronico, $contrasenna)
    {
      try {
          $context = OpenConnection();

          //llamar al procedimiento almacenado
          $sentencia = "CALL CrearCuenta('$identificacion', '$nombre', '$correoElectronico', '$contrasenna')";

          $resultado = $context -> query($sentencia);

          CloseConnection($context);

          return $resultado;
      } catch (Exception $e) {
          SaveError($error); // Llamada a la función para guardar el error
                            //Se pone antes del return porque despues del return no se ejecuta nada

          return false;//siempre que se haga un INSERT, UPDATE o DELETE se devuelve un BOOLEAN
      }

    }

  function ValidarCuentaModel( $correoElectronico, $contrasenna)
    {
      try {
          $context = OpenConnection();


          //llamar al procedimiento almacenado que va hacer SELECT, el SELECT SIEMPRE va a devolver un OBJETO
          $sentencia = "CALL ValidarCuenta('$correoElectronico', '$contrasenna')";

          $resultado = $context -> query($sentencia);

          CloseConnection($context);

          return $resultado;
          } 
          catch (Exception $e) 
          {
            SaveError($error); // Llamada a la función para guardar el error
                              //Se pone antes del return porque despues del return no se ejecuta nada
                              
            return null; //se pone NULL porque es un OBJETO
      }

    }
?>