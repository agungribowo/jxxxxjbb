<?php
$serverName = "10.11.11.12";
$uid = "ristian";
$pwd = "ristian";
$databaseName = "JFX_WEBSITE";

$connectionInfo = array( "UID"=>$uid,
                         "PWD"=>$pwd,
                         "Database"=>$databaseName);

/* Connect using SQL Server Authentication. */
$conn = sqlsrv_connect( $serverName, $connectionInfo);


$tsqllv = " SELECT TOP 50 MarketSummaryLive.*, contract.*
  FROM MarketSummaryLive
INNER JOIN contract on MarketSummaryLive.ContractID = contract.ContractID

  ";
$stmtlv = sqlsrv_query( $conn, $tsqllv);
do {
  $i=0;
while ($rowlv = sqlsrv_fetch_array($stmtlv, SQLSRV_FETCH_ASSOC)) {


  $nama[$i] = $rowlv['ContractName'];
     // $adm[$i] = $rowlv['kemajuan_adm'];




} while ( sqlsrv_next_result($stmt) );



  ?>
