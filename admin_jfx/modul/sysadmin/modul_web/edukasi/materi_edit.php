<?php
      // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : '';
  $id = $_REQUEST['id'];
 $sql = mysqli_query($koneksi, "SELECT jfx_materi.*
        FROM jfx_materi WHERE id='$id'
        ");
 $row = mysqli_fetch_array($sql);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Materi Umum Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit</a></li>
        <li class="active">Materi Umum</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Materi Umum </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <form role="form" class="form-horizontal"  action="./admin.php?hlm=aksi_edit_materi" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Judul</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="judul" value="<?php echo $row['judul']; ?>">
                       <input type="hidden" class="form-control" name="id" value="<?php echo  $id; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Deskripsi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >File Materi</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="file_materi" value="<?php echo $row['file_materi']; ?>">
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
