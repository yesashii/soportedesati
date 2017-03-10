<?php

require "../database/Conexion.php";
require "../modelos/Producto.php";


$pdo        = Conexion::make();
$producto   = new Producto( $pdo );
$grupos     = $producto->traeTodosGrupos();


// buscador
if ( isset( $_POST['nombre'] ) and isset( $_POST['grupomarca'] ) )
{
    $nombre         = $_POST['nombre'];
    $grupomarca     = $_POST['grupomarca'];

    $marcas = $producto->buscarMarcas( $nombre, $grupomarca );

}

// actualizador
if ( isset( $_GET['idmarca'] ) and isset( $_GET['idgrupomarca'] ) )
{
    $idmarca        = $_GET['idmarca'];
    $idgrupomarca   = $_GET['idgrupomarca'];
    $nombre         = $_GET['nombre'];


    $estado = $producto->actualizaGrupoMarca( $idmarca,$idgrupomarca );

    // mensaje alert
    if( $estado )
    {
        $grupomarcas    = $producto->grupoMarca($idgrupomarca);
        $nombre_grupo   = '';

        foreach ( $grupomarcas as $grupo )
        {
            $nombre_grupo = $grupo->nombre;
        }

        echo "<script language='javascript'>alert('".$nombre." ha sido actualizado al grupo: ".$nombre_grupo.".');</script>";
    }


}




require "actualiza_grupo_marca.view.php";