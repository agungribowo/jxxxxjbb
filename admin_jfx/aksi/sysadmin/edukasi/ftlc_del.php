<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id = $_REQUEST['id'];

    $sql = mysqli_query($koneksi, "DELETE FROM jfx_ftlc WHERE id='$id'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;   URL=../sysadmin/admin.php?hlm=ftlc'>";
        die();
    }
    }
}
?>
