<?php
//memasukkan koneksi database
require_once("../../../koneksi.php");

//jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
if($_POST['id']){
  //membuat variabel id berisi post['id']
  $id = $_POST['id'];
  //query standart select where id
  $view = $koneksi->query("SELECT foto_keg.*
        FROM foto_keg

   WHERE id_foto='$id'");




  //jika ada datanya
  if($view->num_rows){
    //fetch data ke dalam veriabel $row_view
    $row_view = $view->fetch_assoc();



    //menampilkan data dengan table
    echo '
    <p>Berikut ini adalah detail dari data </b></p>
    <table class="table table-bordered">
      <tr>
        <th>NAMA FILE</th>
        <td>'.$row_view['keterangan'].'</td>';?>
          </tr>

      <?php echo '
    </table><center>
       <div class="box-body"  style="text-align: center; height:500px" >
     <embed width="100%" height="100%" src="../../file_foto/'.$row_view['foto'].'" type="application/pdf"></embed>
     </div></center>
    ';
  }
}
?>
