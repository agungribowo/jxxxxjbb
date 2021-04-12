<?php


      // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : ''; 
  $kode_user = $_REQUEST['id_user'];
 $sql = mysqli_query($koneksi, "SELECT user.*
        FROM user WHERE id='$kode_user'
        ");
 $row = mysqli_fetch_array($sql);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
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
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../images/user/<?php echo $row['img_user']; ?>" alt="User profile picture">

              <h3 class="profile-username text-center">   <?php echo $row['nama']; ?> </h3>

              <p class="text-muted text-center">   <?php echo $row['level']; ?> </p>
<!-- 
              <input type="file" class="form-control" id="inputEmail" placeholder="Email">
              <br>
    <button type="submit" class="btn btn-danger">Submit</button> -->
             <!--  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Diri</a></li>
              <li><a href="#settings" data-toggle="tab">Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
          
    <form role="form" class="form-horizontal"  action="./admin.php?hlm=user_edit1" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >Nama</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="nama_user" value="<?php echo $row['nama']; ?>" placeholder="Name">
                       <input type="hidden" class="form-control" id="inputName" name="id_user" value="<?php echo  $kode_user; ?>" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" name="username_user" placeholder="Email" value="<?php echo $row['username']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Level</label>

                    <div class="col-sm-10">
                     <select class="form-control" name="level_user">
                      <option value="<?php echo $row['level']; ?>" > <?php echo $row['level']; ?></option>
                <option value="sysadmin">sysadmin</option>
             <!--    <option value="pelaksana">pelaksana </option> -->
                   </select>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Status</label>

                    <div class="col-sm-10">
                   <select class="form-control" name="status_user">
                       <option value="<?php echo $row['status_user']; ?>" > <?php echo $row['status_user']; ?></option>
                     <option value="Active">Active</option>
                     <option value="Non Active">Non Active</option>
                   </select>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Expired date</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="expired" id="inputEmail" placeholder="Email" value="<?php echo $row['expired_date']; ?>">
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
             

              <div class="tab-pane" id="settings">
                <form role="form" class="form-horizontal"  action="./admin.php?hlm=user_edit2" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password baru</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password_user" id="inputName" placeholder="Name">
                      <input type="hidden" class="form-control" id="inputName" name="id_user" value="<?php echo  $kode_user; ?>" placeholder="Name">
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
