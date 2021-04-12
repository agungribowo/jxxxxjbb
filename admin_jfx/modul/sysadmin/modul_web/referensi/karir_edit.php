<?php
  $id = $_REQUEST['id'];
 $sql = mysqli_query($koneksi, "SELECT jfx_karir.*
        FROM jfx_karir WHERE id='$id'
        ");
 $row = mysqli_fetch_array($sql);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Karir Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit</a></li>
        <li class="active">Karir</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Karir Edit </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <form role="form" class="form-horizontal"  action="./admin.php?hlm=kariredit" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" >Gambar</label>
                    <div class="col-sm-8">
                    <input type="file" class="form-control" name="fupload" accept="file/*">
                  </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label" >Judul</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  name="judul" value="<?php echo $row['judul']; ?>">
                       <input type="hidden" class="form-control"  name="id" value="<?php echo  $id; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label" >Persyaratan</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id="editor1" name="editor1" rows="10" cols="80" value="<?php echo $row['persyaratan']; ?>"><?php echo $row['persyaratan']; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label" >Deskripsi</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id="editor2" name="editor2" rows="10" cols="80" value="<?php echo $row['deskripsi']; ?>"><?php echo $row['deskripsi']; ?></textarea>
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

  <script>
    $(function () {
      CKEDITOR.replace('editor1')
      $('.textarea').wysihtml5()
    })
  </script>

  <script>
    $(function () {
      CKEDITOR.replace('editor2')
      $('.textarea').wysihtml5()
    })
  </script>
