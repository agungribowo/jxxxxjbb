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
$keterangan= $_POST['keterangan'];
$id= $_POST['id'];
$judul= $_POST['judul'];


$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
// $folder = "../../file/$nama_file";

 $nama_file_unik  = $acak1.$nama_file ;

// Tentukan folder untuk menyimpan file
// $folder_image_ttd = "../../file/$nama_file_unik_image_ttd";

$folder = "../../file_modul/$nama_file_unik";

move_uploaded_file($lokasi_file,"$folder");



$sql = mysqli_query($koneksi, "INSERT INTO mod_penyuluhan (id_petugas, modul, judul_mod, keterangan, tgl_upload) 
											VALUES('$id', '$nama_file_unik','$judul', '$keterangan' ,NOW())");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../pelaksana/admin?hlm=kegiatan'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	