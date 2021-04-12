<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id_kategori = $_REQUEST['id_kategori'];

    $sql = mysqli_query($koneksi, "DELETE FROM jfx_kategori WHERE id_kategori='$id_kategori'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;   URL=../sysadmin/admin.php?hlm=kategori_produk'>";
        die();
    }
    }
}
?>
