<?php
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

$judul= $_POST['judul'];
$deskripsi= $_POST['deskripsi'];
$pemateri= $_POST['pemateri'];
$waktu= $_POST['waktu'];
$tanggal= $_POST['tanggal'];
$tgl_update= $_POST['tgl_update'];
$url= $_POST['url'];

$sql = mysqli_query($koneksi, "INSERT INTO jfx_peluncuran_produk (judul, deskripsi, pemateri, waktu, tanggal, tgl_update, url)
      VALUES('$judul', '$deskripsi', '$pemateri', '$waktu', '$tanggal', now(), '$url')"
    );

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=peluncuran_produk'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
