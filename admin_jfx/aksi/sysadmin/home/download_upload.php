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
  




$sql = mysqli_query($koneksi, "INSERT INTO download (file_upload,  judul, tgl_upload) 
											VALUES('$nama_file_unik','$judul',now() )");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=download'>";
			die();

			}
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	