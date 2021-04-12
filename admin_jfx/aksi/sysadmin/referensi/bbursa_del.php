<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id = $_REQUEST['id'];

		$sql1 = mysqli_query($koneksi, "SELECT jfx_regulasi.*
 	 FROM jfx_regulasi where id = '$id'
 	 ");
$row = mysqli_fetch_array($sql1);
 unlink("../../file_regulasi/$row[file]");

    $sql = mysqli_query($koneksi, "DELETE FROM jfx_regulasi WHERE id='$id'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;   URL=../sysadmin/admin.php?hlm=berita_bursa'>";
        die();
    }
    }
}
?>
