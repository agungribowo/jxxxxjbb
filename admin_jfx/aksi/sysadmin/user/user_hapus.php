<?php
if( empty( $_SESSION['level'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id_user = $_REQUEST['id_user'];


 $sql3 = mysqli_query($koneksi, "SELECT user.*
        FROM user 
        where id = '$id_user'
        ");
    $myData = mysqli_fetch_array($sql3);
$nip = $myData['nip'];

// $foto = $myData['img_user'];
// unlink("../../file/".$foto);



 $sql4 = mysqli_query($koneksi, "DELETE FROM petugas_pbj WHERE nip='$nip'");


    $sql = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id_user'");
    if($sql == true){
     	 echo "<meta http-equiv='refresh' content='0;   URL=../sysadmin/admin.php?hlm=user'>";
        die();
    }
    }
}
?>
