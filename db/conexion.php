<?php

$serverName     = "SQLSERVER"; //serverName\instanceName
$dbName         = "handheld";
$userName       = "sa";
$PWD            = "desakey";

$connectionInfo = [
    "Database"  =>  $dbName,
    "UID"       =>  $userName,
    "PWD"       =>  $PWD,
];
$conn           = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Conexión establecida.<br />";
}else{
    echo "Conexión no se pudo establecer.<br />";

    echo '<pre>' . var_export(sqlsrv_errors(), true) . '</pre>';
   // var_dump(sqlsrv_errors());
    die();
}