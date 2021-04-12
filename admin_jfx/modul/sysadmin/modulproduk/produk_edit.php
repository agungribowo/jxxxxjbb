<?php


      // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : '';
  $id_produk = $_REQUEST['id_produk'];
 $sql = mysqli_query($koneksi, "SELECT jfx_produk.*, jfx_kategori.*
   FROM jfx_produk
   INNER JOIN jfx_kategori on jfx_produk.id_kategori=jfx_kategori.id_kategori WHERE jfx_produk.kode_kontrak='$id_produk'
        ");
 $row = mysqli_fetch_array($sql);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
        <a href="./?hlm=produk" class="btn btn-danger">Kembali</a>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Produk </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

    <form role="form" class="form-horizontal"  action="./admin.php?hlm=aksi_produk_edit" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Kode Produk</label>

                    <div class="col-sm-10">
                      <select  class="form-control select2" style="width: 100%;" name="kode_kontrak" required="required">

                        <option value="<?php echo  $id_produk; ?>" >--- <?php echo  $id_produk; ?> ---</option>
                          <?php

               $q = mysqli_query($koneksi, "SELECT jfx_contract.*
                FROM jfx_contract


                 ");
               while($data = mysqli_fetch_array($q)){
                 echo '<option    value="'.$data['ContractID'].'">'.$data['ContractID'].' ('.$data['ContractName'].')</option>';
               }

             ?>

             </select>
                     <input type="hidden" class="form-control" id="inputName" name="id_kat_asli" value="<?php echo  $id_produk; ?>" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Nama Produk</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="nama_produk" value="<?php echo $row['nama_produk']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Kategori</label>

                    <div class="col-sm-10">
                      <select  class="form-control select2" style="width: 100%;" name="kategori" required="required">

                        <option value="<?php echo $row['id_kategori']; ?>"  >--- <?php echo $row['kategori']; ?> ---</option>
                          <?php

               $q = mysqli_query($koneksi, "SELECT jfx_kategori.*
                FROM jfx_kategori


                 ");
               while($data = mysqli_fetch_array($q)){
                 echo '<option    value="'.$data['id_kategori'].'">'.$data['kategori'].'</option>';
               }

             ?>

             </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Definisi</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" name="definisi" placeholder="definisi"><?php echo $row['definisi']; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>

              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
