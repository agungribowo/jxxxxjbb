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

$tsql = "SELECT  Sum(MarketSummaryLive.SettlementPrice) as price, contract.ContractContent
, contract.ContractName, MarketSummaryLive.ContractMonth ,MarketSummaryLive.ContractYear
 ,MarketSummaryLive.SettlementPrice,MarketSummaryLive.ContractID
FROM [dbo].MarketSummaryLive
INNER JOIN contract on MarketSummaryLive.ContractID = contract.ContractID
where MarketSummaryLive.ContractID = '$id'

    GROUP BY contract.ContractContent, contract.ContractName
    ,  MarketSummaryLive.ContractMonth ,MarketSummaryLive.ContractYear
    ,MarketSummaryLive.SettlementPrice,MarketSummaryLive.ContractID
       ORDER BY ContractMonth ASC
  ";

/* Execute the query. */

$stmt = sqlsrv_query( $conn, $tsql);



/* Iterate through the result set printing a row of data upon each iteration.*/

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))

{
  $datax = $row['ContractMonth'];
  if ($datax == 'JAN') {
    $maka = '0';
  }
  if ($datax == 'FEB') {
    $maka = '1';
  }
  if ($datax == 'MAR') {
    $maka = '2';
  }
  if ($datax == 'APR') {
    $maka = '3';
  }
  if ($datax == 'MAY') {
    $maka = '4';
  }
  if ($datax == 'JUN') {
    $maka = '5';
  }
  if ($datax == 'JUL') {
    $maka = '6';
  }
  if ($datax == 'AUG') {
    $maka = '7';
  }
  if ($datax == 'SEP') {
    $maka = '8';
  }
  if ($datax == 'OKT') {
    $maka = '9';
  }
  if ($datax == 'NOV') {
    $maka = '10';
  }
  if ($datax == 'DES') {
    $maka = '11';
  }


echo "{ x : Date.UTC(".$row['ContractYear'].",".$maka."), y:".$row['price']." },\n";

      // $pricex = " ".$row[0]."\n";
      //   $katax = " ".$row[1]."\n";
}


?>
