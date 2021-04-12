<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');


require('../../koneksi.php');

// untuk data add
$id= $_POST['id'];
$judul= $_POST['judul'];
$deskripsi= $_POST['deskripsi'];
$pemateri = $_POST['pemateri'];
$waktu= $_POST['waktu'];
$tanggal= $_POST['tanggal'];
$tgl_update= $_POST['tgl_update'];
$url= $_POST['url'];

$sql = mysqli_query($koneksi, "UPDATE jfx_peluncuran_produk SET
 judul='$judul', deskripsi='$deskripsi', pemateri='$pemateri',
 waktu='$waktu', tanggal='$tanggal', tgl_update=NOW(),
 url='$url' WHERE id ='$id'");


if($sql == true){
    // header('Location: ./admin.php?hlm=unit');
     echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=peluncuran_produk'>";
    die();
} else {
    echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
}
?>
