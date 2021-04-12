<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id = $_REQUEST['id'];

		$sql1 = mysqli_query($koneksi, "SELECT jfx_karir.*
 	 FROM jfx_karir where id = '$id'
 	 ");
$row = mysqli_fetch_array($sql1);
 unlink("../../file/file_karir/$row[gambar]");

    $sql = mysqli_query($koneksi, "DELETE FROM jfx_karir WHERE id='$id'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;   URL=../sysadmin/admin?hlm=karir'>";
        die();
    }
    }
}
?>
