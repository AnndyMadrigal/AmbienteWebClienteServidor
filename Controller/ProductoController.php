<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoMN/Model/ProductoModel.php';

    function ConsultarProductos()
    {
        $resultado = ConsultarProductosModel();

        if($resultado && $resultado -> num_rows > 0)
        {
            //Leer la información del resultado
            return $resultado;
        }
    }

?>