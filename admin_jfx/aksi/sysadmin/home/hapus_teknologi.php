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
    $id = $_REQUEST['id'];



    $sql = mysqli_query($koneksi, "DELETE FROM jfx_teknologi WHERE id='$id'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=teknologi'>";
        die();
    } else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
