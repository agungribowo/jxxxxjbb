<?php
$serverName = "100.90.80.62";
$uid = "bbjweb";
$pwd = "bbjweb2020";
$databaseName = "website";

$connectionInfo = array( "UID"=>$uid,
                         "PWD"=>$pwd,
                         "Database"=>$databaseName);

/* Connect using SQL Server Authentication. */
$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>
