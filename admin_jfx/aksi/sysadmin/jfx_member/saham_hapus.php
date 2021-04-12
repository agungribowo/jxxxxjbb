<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi_sqlsrv.php');

// untuk data add
    $id = $_REQUEST['id'];

 
                
$stmtx= sqlsrv_query($conn, "SELECT pemegang_saham.*
            FROM pemegang_saham WHERE id='$id'");
$rowsx = sqlsrv_fetch_array($stmtx);

unlink("../../file_saham/$rowsx[logo]");



     $stmt = sqlsrv_query($conn, "DELETE FROM pemegang_saham WHERE id='$id'");



    if( $stmt === false ) {


        echo "Error in executing query.</br>";


        die( print_r( sqlsrv_errors(), true));


    }



   echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=saham'>";



    sqlsrv_free_stmt( $stmt);


    sqlsrv_close( $conn);




// mysql


//     $sql1 = mysqli_query($koneksi, "SELECT home.*
//        FROM home
//
//  WHERE id='$id'");
//
//
// $data = mysqli_fetch_array($sql1);
//
// $foto = $data['gambar'];
// unlink("../../file_web/".$foto);
//
//
//     $sql = mysqli_query($koneksi, "DELETE FROM home WHERE id='$id'");
//     if($sql == true){
//              echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=home'>";
//         die();
//     } else {
// 			echo 'ERROR! Periksa penulisan querynya.';
// 		}
?>
