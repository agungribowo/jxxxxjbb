<?php
if( !empty( $_SESSION['id'] ) ){
  include "../../koneksi.php";

  $idx = $_SESSION['id'];

  $sql = mysqli_query($koneksi, "SELECT user.*
    FROM user
    where user.id = $idx
    ");
    $myData = mysqli_fetch_array($sql);
    $hlm = $_REQUEST['hlm'];
    ?>
    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BURSA BERJANGKA</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>JFX</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../images/user/<?php echo $myData['img_user']; ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION['nama']; ?> </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../images/user/<?php echo $myData['img_user']; ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION['nama']; ?>
                    <?php echo $_SESSION['level']; ?>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <!--  <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                  </div>
                  <div class="pull-right">
                    <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../images/user/<?php echo $myData['img_user']; ?>" style="width: 200px" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?> </p>
          ( <?php echo $_SESSION['level']; ?> ) <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <br>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li  <?php if( $hlm == "profile" ) echo "class='active'";?>>
          <a href="./admin?hlm=profile">
            <i class="fa fa-user"></i> <span>PROFILE MEMBER</span>
          </a>
        </li>
        <li  <?php if( $hlm == "edit_profile" ) echo "class='active'";?>>
          <a href="./admin?hlm=edit_profile">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>UPDATE PROFILE </span>
          </a>
        </li>
        <li  <?php if( $hlm == "laporan" ) echo "class='active'";?>>
          <a href="./admin?hlm=laporan">
            <i class="fa fa-file-image-o" aria-hidden="true"></i><span>LAPORAN</span>
          </a>
        </li>
        <!-- <li  <?php if( $hlm == "kegiatan" ) echo "class='active'";?>>
        <a href="./admin?hlm=kegiatan">
        <i class="fa fa-star-o" aria-hidden="true"></i> <span>UPLOAD FILE</span>
      </a>
    </li> -->

  </ul>
</ul>
</section>
<!-- /.sidebar -->
</aside>
<?php
} else {
  header("Location: ./");
  die();
}
?>
