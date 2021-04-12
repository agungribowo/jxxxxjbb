<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');

// $username = $_SESSION['username'];
// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $id_admin = $_SESSION['id'];

require('../../koneksi.php');

// untuk data add
$tipe= $_POST['tipe'];
$nama_pt= $_POST['nama_pt'];
$no_spab= $_POST['no_spab'];
$telp= $_POST['telp'];
$fax= $_POST['fax'];
$email= $_POST['email'];
$url= $_POST['url'];
$alamat= $_POST['alamat'];
$id= $_POST['id'];


$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file

 $nama_file_unik  = $acak1.$nama_file ;

$folder = "../../file_saham/$nama_file_unik";

move_uploaded_file($lokasi_file,"$folder");





$sql = sqlsrv_query($conn, "UPDATE pemegang_saham SET
 nama_pt='$kategori',
 logo='$slug',
 tipe='$tipe',
 no_spab='$no_spab',
 alamat='$alamat',
 email='$email',
 telp='$telp',
 fax='$fax'
      WHERE id ='$id'");



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
