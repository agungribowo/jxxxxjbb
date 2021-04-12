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
    $id_pok = $_REQUEST['kode_sas'];


    $sql = mysqli_query($koneksi, "DELETE FROM upload_pok WHERE id_pok='$id_pok'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=Upload-POK'>";
        die();
    } else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	