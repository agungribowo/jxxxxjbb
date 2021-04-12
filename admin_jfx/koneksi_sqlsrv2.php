<?php
$serverName = "100.90.80.62";
$uid = "bbjweb";
$pwd = "bbjweb2020";
$databaseName = "jfx_website";

$connectionInfo = array( "UID"=>$uid,
                         "PWD"=>$pwd,
                         "Database"=>$databaseName);

/* Connect using SQL Server Authentication. */
$conn2 = sqlsrv_connect( $serverName, $connectionInfo);

?>
