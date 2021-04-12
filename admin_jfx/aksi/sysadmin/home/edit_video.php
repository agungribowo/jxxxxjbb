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
$video= $_POST['video'];
$id= $_POST['id'];




$sql = mysqli_query($koneksi, "UPDATE `home_video` set 
	judul = '$judul', 
	video_url = '$video'
	 WHERE id='$id'");


if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=home'>";
			die();

		
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	