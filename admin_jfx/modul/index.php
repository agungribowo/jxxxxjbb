<?php
session_start();
if( empty( $_SESSION['id'] ) ){
  //session_destroy();
 if($_SESSION['level']=="")
  header('Location: ../');
  die();
} else {
 header('Location: ../');
  die();
}
?>

