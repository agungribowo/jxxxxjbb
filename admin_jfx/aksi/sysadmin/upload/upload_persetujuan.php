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

$id_user= $_POST['id_user'];





// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "../../file/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");



move_uploaded_file($lokasi_file,"$folder");
 



$sql = mysqli_query($koneksi, "INSERT INTO upload_persetujuan ( persetujuan, petugas, tgl_upload) 
											VALUES('$nama_file', '$id_user' , now() )");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=Upload-Persetujuan'>";
			die();

		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	