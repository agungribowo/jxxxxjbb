<?php
      // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : '';
  $id = $_REQUEST['id'];
 $sql = mysqli_query($koneksi, "SELECT jfx_ftlc.*
        FROM jfx_ftlc WHERE id='$id'
        ");
 $row = mysqli_fetch_array($sql);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FTLC Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit</a></li>
        <li class="active">FTLC</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">FTLC </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <form role="form" class="form-horizontal"  action="./admin?hlm=aksi_edit_ftlc" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Provinsi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="provinsi" value="<?php echo $row['provinsi']; ?>">
                       <input type="hidden" class="form-control" id="inputName" name="id" value="<?php echo  $id; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Kota</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="kota" value="<?php echo $row['kota']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Kampus</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="kampus" value="<?php echo $row['kampus']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Kampus Link</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="kampus_link" value="<?php echo $row['kampus_link']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Pialang</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="pialang" value="<?php echo $row['pialang']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Pialang Link</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="pialang_link" value="<?php echo $row['pialang_link']; ?>">
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
