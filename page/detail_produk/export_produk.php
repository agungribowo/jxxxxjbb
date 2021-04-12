<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>

<!DOCTYPE html>
<html>
<head>
  <title>JFX</title>
</head>
<body>
  <style type="text/css">
  body{
    font-family: sans-serif;
  }
  table{
    margin: 20px auto;
    border-collapse: collapse;
  }
  table th,
  table td{
    border: 1px solid #3c3c3c;
    padding: 3px 8px;

  }
  a{
    background: blue;
    color: #fff;
    padding: 8px 10px;
    text-decoration: none;
    border-radius: 2px;
  }
  </style>

  <?php
  // header("Content-type: application/vnd-ms-excel");
  // header("Content-Disposition: attachment; filename=Data Produk.xls");
$produk = $_REQUEST['produk'];

  ?>

  <center>
   <h1>DATA PRODUK  <?php echo $produk;?><br/></h1>
  </center>
  <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
    <tr>
                                    <th>No</th>
                                    <th >CONTRACT</th>
                                    <th >MONTH</th>
                                    <th >OPEN</th>
                                    <th >HIGH</th>
                                    <th >LOW</th>
                                    <th >LAST</th>
                                    <th >CHANGE</th>
                                    <th >SETTLE</th>
                                    <th >VOLUME</th>
                                    <th >PREVIOUS SETTLEMENT</th>
                                    <th >BUSSINESS DATE</th>
                                  </tr>


    </tr>
    <?php
    // koneksi database
    include '../../admin_jfx/koneksi_sqlsrv.php';

    // menampilkan data pegawai
    $tsql = "SELECT TOP 10 marketsummary.*, contract.*
                                  FROM marketsummary
                                  INNER JOIN contract ON marketsummary.ProdContractID=contract.ContractID
                                  WHERE marketsummary.ProdContractID = '$produk' ORDER BY ContractYear DESC
  ";
    $stmt = sqlsrv_query( $conn, $tsql);
    do {
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $no++;

    ?>

    <?php
    echo'
    <tr>
                                      <td>'.$no.'</td>
                                      <td>'.$row['ContractID'].'</td>
                                      <td>'.$row['ContractMonth'].'  ' .$year. '  </td>
                                      <td>'.round($row['OpeningPrice'], 5).'</td>
                                      <td>'.round($row['Highest'], 5).'</td>
                                      <td>'.round($row['Lowest'], 5).'</td>
                                      <td>'.round($row['LastVol'], 5).'</td>
                                      <td>'.round($row['ChgPrice'],5).'</td>
                                      <td>'.round($row['DailySettPrice'], 5).'</td>
                                      <td>'.round($row['TotalVolume'], 5).'</td>
                                      <td>'.round($row['DailyOpenInterest'], 5).'</td>
                                      <td>'.round($row['DailyOpenInterest'], 5).'</td>


    ';
  }


} while ( sqlsrv_next_result($stmt) );
    ?>
  </table>
</body>
</html>
