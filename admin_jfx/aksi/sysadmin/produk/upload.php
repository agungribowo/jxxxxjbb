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
$kode_kontrak= $_POST['kode_kontrak'];



$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file

 $nama_file_unik  = $acak1.$nama_file ;

$folder = "../../file_upload/$nama_file_unik";
// tanggal sekarang
$tgl_upload = date("Ymd");



if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";



  $sql = mysqli_query($koneksi, "UPDATE jfx_produk SET
   file_upload='$nama_file_unik'

        WHERE kode_kontrak ='$kode_kontrak'");



if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=spek_produk&kode_kontrak=$kode_kontrak'>";
			die();

			}
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
