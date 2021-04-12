<?php
      // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : '';
  $id_kategori = $_REQUEST['id_kategori'];
 $sql = mysqli_query($koneksi, "SELECT jfx_kategori.*
        FROM jfx_kategori WHERE id_kategori='$id_kategori'
        ");
 $row = mysqli_fetch_array($sql);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori Edit
      </h1>
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
              <li class="active"><a href="#activity" data-toggle="tab">Kategori </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <form role="form" class="form-horizontal"  action="./admin.php?hlm=aksi_edit_kategori" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Kategori</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="kategori" value="<?php echo $row['kategori']; ?>" placeholder="Name">
                       <input type="hidden" class="form-control" id="inputName" name="id_kategori" value="<?php echo  $id_kategori; ?>" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Slug</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="slug" value="<?php echo $row['slug_kategori']; ?>">
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
