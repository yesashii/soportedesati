<?php


class Conexion

{

    public static function make()
    {
        $user   = "sa";
        $pass   = "desakey";

        try{

            return new PDO( "odbc:SQLSERVER", $user, $pass );

        } catch ( PDOException $e ){

            die( $e->getMessage() );

        }
    }

}