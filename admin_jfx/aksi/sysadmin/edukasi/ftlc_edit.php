<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');


require('../../koneksi.php');

// untuk data add
$id= $_POST['id'];
$provinsi= $_POST['provinsi'];
$kota= $_POST['kota'];
$kampus = $_POST['kampus'];
$kampus_link= $_POST['kampus_link'];
$pialang= $_POST['pialang'];
$pialang_link= $_POST['pialang_link'];

$sql = mysqli_query($koneksi, "UPDATE jfx_ftlc SET
 provinsi='$provinsi', kota='$kota', kampus='$kampus',
 kampus_link='$kampus_link', pialang='$pialang', pialang_link='$pialang_link' WHERE id ='$id'");


if($sql == true){
    // header('Location: ./admin.php?hlm=unit');
     echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=ftlc'>";
    die();
} else {
    echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
}
?>
