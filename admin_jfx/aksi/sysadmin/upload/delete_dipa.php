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
    $id_dipa = $_REQUEST['kode_sas'];


    $sql = mysqli_query($koneksi, "DELETE FROM upload_dipa WHERE id_dipa='$id_dipa'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=Upload-DIPA'>";
        die();
    } else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	