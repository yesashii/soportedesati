<?php
require "../database/Conexion.php";
require "../modelos/Clientes.php";

if( isset( $_POST['rut'] ) )
{

    $rut    = $_POST['rut'];

    $pdo                = Conexion::make();

    $clienteHandheld    = new Clientes( $pdo );

    $handheldClientes   = $clienteHandheld->buscarCtaCteHandheld( $rut );

    $bdflexlineClientes = $clienteHandheld->buscarCtaCteBdflexline( $rut );

    $direcciones        = $clienteHandheld->buscarDireccion( $rut );

    /*
    print_r($handheldClientes);
    die();
    */

}

require 'consulta_cliente.view.php';