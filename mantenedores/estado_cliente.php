<?php

require "../database/Conexion.php";
require "../modelos/Clientes.php";


$pdo                = Conexion::make();

$clienteHandheld    = new Clientes( $pdo );

$handheldClientes   = $clienteHandheld->ctactehandheldall();

/*
print_r($handheldClientes);

die();
*/


require 'estado_cliente.view.php';