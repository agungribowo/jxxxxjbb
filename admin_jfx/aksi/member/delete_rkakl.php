<?php
if( empty( $_SESSION['id'] ) ){

 if($_SESSION['level']=="")
  header('Location: ./');
    die();
} else {

if(isset($_REQUEST['submit'])){

    $id_rkakl = $_REQUEST['id_rkakl'];

    $sql = mysqli_query($koneksi, "DELETE FROM rkakl WHERE id='$id_rkakl'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=rkakl'>";
        die();
    }
    }
}
?>
