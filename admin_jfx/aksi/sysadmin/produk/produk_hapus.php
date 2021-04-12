<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id_produk = $_REQUEST['id_produk'];

    $sql = mysqli_query($koneksi, "DELETE FROM jfx_produk WHERE kode_kontrak='$id_produk'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;   URL=../sysadmin/admin.php?hlm=produk'>";
        die();
    }
    }
}
?>
