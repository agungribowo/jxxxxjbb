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
$id = $_POST['id'];

 $sql1 = mysqli_query($koneksi, "SELECT user.*
       FROM user

 WHERE id='$id'");


$data = mysqli_fetch_array($sql1);

$foto = $data['img_user'];
unlink("../../images/user/".$foto);

$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
// $folder = "../../file/$nama_file";

 $nama_file_unik  = $acak1.$nama_file ;

// Tentukan folder untuk menyimpan file
// $folder_image_ttd = "../../file/$nama_file_unik_image_ttd";

$folder = "../../images/user/$nama_file_unik";

move_uploaded_file($lokasi_file,"$folder");

$sql = mysqli_query($koneksi, "UPDATE `user` set
	img_user = '$nama_file_unik'
	 WHERE id='$id'");

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../member/admin?hlm=edit_profile'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
