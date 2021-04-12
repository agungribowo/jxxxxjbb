<?php
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

$provinsi= $_POST['provinsi'];
$kota= $_POST['kota'];
$kampus= $_POST['kampus'];
$pialang= $_POST['pialang'];
$kampus_link= $_POST['kampus_link'];
$pialang_link= $_POST['pialang_link'];

$sql = mysqli_query($koneksi, "INSERT INTO jfx_ftlc (provinsi, kota, kampus, pialang, kampus_link, pialang_link)
      VALUES('$provinsi', '$kota', '$kampus', '$pialang', '$kampus_link', '$pialang_link')"
    );

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=ftlc'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
