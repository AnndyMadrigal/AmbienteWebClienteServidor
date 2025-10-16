<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoMN/Model/UtilesModel.php';

    function ConsultarProductosModel()
    {
        try
        {
            $context = OpenConnection();

            $sentencia = "CALL ConsultarProductos()";
            $resultado = $context -> query($sentencia);
            
            //CloseConnection($context);

            return $resultado;
        }
        catch(Exception $error)
        {
            SaveError($error);
            return null;
        }
    }

?>