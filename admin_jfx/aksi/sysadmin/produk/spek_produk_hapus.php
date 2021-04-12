<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id_spek = $_REQUEST['id_spek'];
    $kode_kontrak = $_REQUEST['kode_kontrak'];






    $sql = mysqli_query($koneksi, "DELETE FROM jfx_spesifikasi_modul WHERE id_spek='$id_spek'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;   URL=../sysadmin/admin.php?hlm=spek_produk&kode_kontrak=$kode_kontrak'>";
        die();
    }
    }
}
?>
