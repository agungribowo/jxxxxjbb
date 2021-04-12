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
// $password_user = MD5($_REQUEST['password_user']);
$nama_user= $_POST['nama_user'];
$level_user= $_POST['level_user'];
$status_user= $_POST['status_user'];
$expired= $_POST['expired'];
$subdit= $_POST['subdit_user'];
$id_user= $_POST['id_user'];


$sql = mysqli_query($koneksi, "UPDATE user SET 
 nama='$nama_user',
 username='$username_user',
 level='$level_user',
 nama='$nama_user',
 subdit='$subdit',
 status_user='$status_user',
 expired_date='$expired'
      WHERE id ='$id_user'");





if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=user'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	