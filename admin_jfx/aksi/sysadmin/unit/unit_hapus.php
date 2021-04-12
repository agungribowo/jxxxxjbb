<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id_unit = $_REQUEST['id_unit'];

    $sql = mysqli_query($koneksi, "DELETE FROM unit WHERE id_unit='$id_unit'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=unit'>";
        die();
    }
    }
}
?>
