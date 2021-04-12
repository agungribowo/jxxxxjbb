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
$judul= $_POST['judul'];


 $id = $_POST['id'];

 $tsql = " SELECT home.*
            FROM home where id = '$id' ";
            $stmtx = sqlsrv_query( $conn, $tsql);
           $row = sqlsrv_fetch_array($stmtx);
 unlink("../../file_web/$row[gambar]");

$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['gambar']['tmp_name'];
$nama_file   = $_FILES['gambar']['name'];
// Tentukan folder untuk menyimpan file

 $nama_file_unik  = $acak1.$nama_file ;

$folder = "../../file_web/$nama_file_unik";
// tanggal sekarang
$tgl_upload = date("Ymd");



if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";





                      $stmt = sqlsrv_query( $conn,  "UPDATE home
                        set gambar ='$nama_file_unik',
                            judul = '$judul'
                             where id = '$id'");


                                            if( $stmt === false ) {
                                                echo "Error in executing query.</br>";
                                                die( print_r( sqlsrv_errors(), true));

                                            }

                                            // header('location:index.php');
                                            echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=home'>";

                                            sqlsrv_free_stmt( $stmt);
                                          sqlsrv_close( $conn);
                                        }


?>
