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
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Timah.xls");
$produk = $_REQUEST['produk'];

  ?>

  <center>
   <h1>DATA PRODUK TIMAH <?php echo $produk;?><br/></h1>
  </center>
  <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Produk</th>
      <th rowspan="2">Tanggal</th>
      <th colspan="3">Session 1</th>
        <th colspan="3">Session 2</th>
        <th colspan="3">Session 3</th>
        <th colspan="2">Total</th>
    </tr>
    <tr>

      <th >Terendah</th>
      <th >Tertinggi</th>
      <th >Volume</th>
      <th >Terendah</th>
      <th >Tertinggi</th>
      <th >Volume</th>
      <th >Terendah</th>
      <th >Tertinggi</th>
      <th >Volume</th>
      <th >Harga rata-rata</th>
      <th >Volume</th>
    </tr>


    </tr>
    <?php
    // koneksi database
    include '../../admin_jfx/koneksi_sqlsrv.php';

    // menampilkan data pegawai
    $tsql = " SELECT TinHistory.*
    FROM TinHistory
      WHERE TinHistory.product = '$produk'
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
    <td>'.$row['product'].'</td>
    <td>'.$row['business_date'].'   </td>
    <td>'.round($row['session1_lowest'], 5).'</td>
    <td>'.round($row['session1_highest'], 5).'</td>
    <td>'.round($row['session1_volume'], 5).'</td>
    <td>'.round($row['session2_lowest'], 5).'</td>
    <td>'.round($row['session2_highest'], 5).'</td>
    <td>'.round($row['session2_volume'], 5).'</td>
    <td>'.round($row['session3_lowest'], 5).'</td>
    <td>'.round($row['session3_highest'], 5).'</td>
    <td>'.round($row['session3_volume'], 5).'</td>
    <td>'.round($row['average_price'], 5).'</td>
    <td>'.round($row['volume'], 5).'</td>

    ';
  }


} while ( sqlsrv_next_result($stmt) );
    ?>
  </table>
</body>
</html>
