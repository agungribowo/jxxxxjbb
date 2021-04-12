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
$username = $_POST['username'];
$password = md5($_POST['password']);



$sql = mysqli_query($koneksi, "UPDATE `user` set 
	username = '$username',
	password = '$password'
	 WHERE id='$id'");

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../pelaksana/admin.php?hlm=logout'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	

