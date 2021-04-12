<?php
// session_start();
if($_SESSION['level']=="")
header('Location: ./');


// $username = $_SESSION['username'];
// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $id_admin = $_SESSION['id'];

// require('../../koneksi.php');
require('../../koneksi_sqlsrv.php');


// untuk data add
$tipe= $_POST['tipe'];
$nama_pt= $_POST['nama_pt'];
$no_spab= $_POST['no_spab'];
$telp= $_POST['telp'];
$fax= $_POST['fax'];
$email= $_POST['email'];
$url= $_POST['url'];
$alamat= $_POST['alamat'];



$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file

$nama_file_unik  = $acak1.$nama_file ;

$folder = "../../file_saham/$nama_file_unik";
// tanggal sekarang
$tgl_upload = date("Ymd");

if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

  $stmt = sqlsrv_query( $conn,  "INSERT INTO pemegang_saham (nama_pt,  logo, url, tipe, no_spab, alamat, email, telp, fax, data_input)
  VALUES('$nama_pt','$nama_file_unik','$url','$tipe','$no_spab','$alamat','$email','$telp','$fax',getdate() )");


  if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( sqlsrv_errors(), true));

  }

  // header('location:index.php');
  echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=saham'>";

  sqlsrv_free_stmt( $stmt);
  sqlsrv_close( $conn);
}


?>
