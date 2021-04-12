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
$username_user= $_POST['username_user'];
$password_user = MD5($_REQUEST['password_user']);
$nama_user= $_POST['nama_user'];
$level_user= $_POST['level_user'];
$status_user= $_POST['status_user'];
$expired= $_POST['expired'];


$sql = mysqli_query($koneksi, "INSERT INTO user (username, password, nama,  level, status_user, expired_date, register_date, img_user) VALUES('$username_user', '$password_user', '$nama_user',  '$level_user', '$status_user' , '$expired' , NOW(), 'avatar.png')");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=user'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	