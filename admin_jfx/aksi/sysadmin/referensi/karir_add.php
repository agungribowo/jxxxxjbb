<?php
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

// untuk data add
$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
 $nama_file_unik  = $acak1.$nama_file ;

 // Tentukan folder untuk menyimpan file
 $folder_dokumen = "../../file/file_karir/$nama_file_unik";
 move_uploaded_file($lokasi_file,"$folder_dokumen");

$judul= $_POST['judul'];
$editor1= $_POST['editor1'];
$editor2= $_POST['editor2'];


$sql = mysqli_query($koneksi, "INSERT INTO jfx_karir (gambar, judul, tanggal, persyaratan, deskripsi)
      VALUES('$nama_file_unik', '$judul', now(), '$editor1', '$editor2')");

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=karir'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
