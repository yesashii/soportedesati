<?php


$dsn    = "sqlsrv:Server=SQLSERVER,Database=handheld";
$user   = "sa";
$pass   = "desakey";

try{

    $pdo    = new PDO( "odbc:SQLSERVER", $user, $pass );

} catch ( PDOException $e ){

    die( $e->getMessage() );

}




