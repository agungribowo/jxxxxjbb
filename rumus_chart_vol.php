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






$tsqlx = " SELECT  Sum(MarketSummaryLive.TotalVol) as vol, contract.ContractContent
, contract.ContractName
FROM [dbo].MarketSummaryLive
INNER JOIN contract on MarketSummaryLive.ContractID = contract.ContractID

    GROUP BY contract.ContractContent, contract.ContractName  ORDER BY vol desc
";
$stmtx = sqlsrv_query( $conn, $tsqlx);
do {
  while ($rowx = sqlsrv_fetch_array($stmtx, SQLSRV_FETCH_ASSOC)) {


    $i++;
    $contractx[$i] = $rowx['ContractName'];
       $volx[$i] = $rowx['vol'];

     }

  } while ( sqlsrv_next_result($stmtx) );


  ?>
