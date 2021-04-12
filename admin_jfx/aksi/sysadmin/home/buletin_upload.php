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
$judul= $_POST['judul'];
$editor1= $_POST['editor1'];
$status= $_POST['status'];

$acak1 = rand(0000,9999);
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['gambar']['tmp_name'];
$nama_file   = $_FILES['gambar']['name'];
// Tentukan folder untuk menyimpan file

 $nama_file_unik  = $acak1.$nama_file ;

$folder = "../../file_buletin/$nama_file_unik";
// tanggal sekarang
$tgl_upload = date("Ymd");

if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

$sql = mysqli_query($koneksi, "INSERT INTO buletin (gambar, judul, isi, status, tgl_update)
											VALUES('$nama_file_unik','$judul','$editor1', '$status', now() )");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=buletin'>";
			die();
			}
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
