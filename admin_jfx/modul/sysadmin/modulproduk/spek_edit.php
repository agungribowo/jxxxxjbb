<?php


      // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : '';
  $id_spek = $_REQUEST['id_spek'];
    $kode_kontrak = $_REQUEST['kode_kontrak'];
 $sql = mysqli_query($koneksi, "SELECT jfx_spesifikasi_modul.*
        FROM jfx_spesifikasi_modul WHERE id_spek = '$id_spek'
        ");
 $row = mysqli_fetch_array($sql);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Spesifikasi Produk edit
      </h1>
      <a href="./admin?hlm=spek_produk&kode_kontrak=<?php echo $kode_kontrak ?>" class="btn btn-danger">Kembali</a>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>

    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Spesifikasi Produk </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

    <form role="form" class="form-horizontal"  action="./admin.php?hlm=aksi_spek_edit" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Kategori</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="kode_kontrak" value="<?php echo  $kode_kontrak; ?>" readonly>
                      <input type="hidden" class="form-control" id="inputName" name="id_spek" value="<?php echo  $id_spek; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">No urut</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control"  name="urut" value="<?php echo $row['urut_modul']; ?>" min="1">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Nama Modul</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="modul" value="<?php echo $row['modul']; ?>">
                    </div>
                  </div>


                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Deskripsi</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
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
