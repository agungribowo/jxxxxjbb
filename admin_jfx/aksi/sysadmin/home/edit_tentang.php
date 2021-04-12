<?php
// session_start();
if($_SESSION['level']=="")
header('Location: ./');

// require('../../koneksi.php');
require('../../koneksi_sqlsrv.php');

// untuk data add
$judul= $_POST['judul'];
$editor1= $_POST['editor1'];
$id= $_POST['id'];

// $sql = mysqli_query($koneksi, "UPDATE jfx_tentang_kami SET judul = '$judul', isi = '$editor1' WHERE id='$id'");

$stmt = sqlsrv_query( $conn,  "UPDATE tentang_kami
  set judul ='$judul',
  isi = '$editor1'
  where id = '$id'");
  
  if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( sqlsrv_errors(), true));

  }

  // header('location:index.php');
  echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=tentang'>";

  sqlsrv_free_stmt( $stmt);
  sqlsrv_close( $conn);


  ?>
