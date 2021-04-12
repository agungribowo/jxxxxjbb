<?php
if( !empty( $_SESSION['id'] ) ){
  include "../../koneksi.php";
    include "../../koneksi_sqlsrv.php";
  $idx = $_SESSION['id'];


  $sql = mysqli_query($koneksi, "SELECT user.*
    FROM user where id = $idx

    ");
    $myData = mysqli_fetch_array($sql);
    $hlm = $_REQUEST['hlm'];
    ?>

    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>PT BURSA BERJANGKA</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>PT BURSA BERJANGKA</b> </span>
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
                <img src="../../images/usr-jfx.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION['nama']; ?> </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../images/usr-jfx.png" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION['nama']; ?><br>
                    <?php echo $_SESSION['level']; ?>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
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
          <img src="../../images/usr-jfx.png" style="max-width: 45px" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?> </p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form"> -->
      <div class="">
        <center> <p style="color: #fff"><?php echo $_SESSION['level']; ?> </p> </center>
      </div>
      <!--  </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li  <?php if($hlm == "dashboard") echo "class='active'";?> >
          <a href="./admin?hlm=dashboard">
            <i class="fa fa-info"></i> <span>DASHBOARD</span>
          </a>
        </li>

        <?php
        if ($hlm == "home" or $hlm == "kontak" or $hlm == "tentang" or $hlm == "download"  or $hlm == "buletin" or $hlm == "teknologi") {
          $lala1 = 'active';
        }

        ?>
        <li class="treeview <?php echo $lala1  ?> ">
          <a href="#">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <span>WEB ADMIN</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php if($hlm == "home") echo "class='active'";?>><a href="./admin?hlm=home"><i class="fa fa-circle-o"></i>HOME</a></li>
            <li <?php if($hlm == "tentang") echo "class='active'";?>><a href="./admin?hlm=tentang"><i class="fa fa-circle-o"></i>TENTANG</a></li>
            <li <?php if($hlm == "download") echo "class='active'";?>><a href="./admin?hlm=download"><i class="fa fa-circle-o"></i>DOWNLOAD</a></li>
            <li  <?php if($hlm == "kontak") echo "class='active'";?>><a href="./admin?hlm=kontak"><i class="fa fa-circle-o"></i>KONTAK</a></li>
            <li <?php if($hlm == "buletin") echo "class='active'";?>><a href="./admin?hlm=buletin"><i class="fa fa-circle-o"></i>BULETIN</a></li>
              <li <?php if($hlm == "teknologi") echo "class='active'";?>><a href="./admin?hlm=teknologi"><i class="fa fa-circle-o"></i>TEKNOLOGI</a></li>
          </ul>
        </li>

        <?php
        if ($hlm == "pialang" or $hlm == "saham" or $hlm == "persyaratan") {
          $lala3 = 'active';
        }

        ?>
        <li class="treeview <?php echo $lala3  ?> ">
          <a href="#">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <span>MEMBER</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php if($hlm == "pialang") echo "class='active'";?>><a href="./admin?hlm=pialang"><i class="fa fa-circle-o"></i>DATA MEMBER</a></li>
            <li <?php if($hlm == "saham") echo "class='active'";?>><a href="./admin?hlm=saham"><i class="fa fa-circle-o"></i>PEMEGANG SAHAM</a></li>
            <li <?php if($hlm == "persyaratan") echo "class='active'";?>><a href="./admin?hlm=persyaratan"><i class="fa fa-circle-o"></i>PERSYARATAN</a></li>
        </ul>
        </li>


        <?php
        if ($hlm == "produk" or  $hlm == "kategori_produk") {
          $lala3 = 'active';
        }

        ?>
        <li class="treeview <?php echo $lala3  ?> ">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span>PRODUK</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php if($hlm == "kategori_produk") echo "class='active'";?>><a href="./admin?hlm=kategori_produk"><i class="fa fa-circle-o"></i>KATEGORI</a></li>
            <li <?php if($hlm == "produk") echo "class='active'";?>><a href="./admin?hlm=produk"><i class="fa fa-circle-o"></i>PRODUK</a></li>

          </ul>
        </li>

        <?php
        if ($hlm == "jadwal_webinar" or  $hlm == "materi_umum" or $hlm == "form_pendaftaran" or $hlm == "ftlc") {
          $lala6 = 'active';
        }
        ?>
        <li class="treeview <?php echo $lala6  ?> ">
          <a href="#">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>EDUKASI</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php if($hlm == "jadwal_webinar") echo "class='active'";?>><a href="./admin?hlm=jadwal_webinar"><i class="fa fa-circle-o"></i>JADWAL WEBINAR</a></li>
            <li <?php if($hlm == "materi_umum") echo "class='active'";?>><a href="./admin?hlm=materi_umum"><i class="fa fa-circle-o"></i>MATERI UMUM</a></li>
            <li <?php if($hlm == "form_pendaftaran") echo "class='active'";?>><a href="./admin?hlm=form_pendaftaran"><i class="fa fa-circle-o"></i>FORMULIR PENDAFTARAN</a></li>
            <li <?php if($hlm == "ftlc") echo "class='active'";?>><a href="./admin?hlm=ftlc"><i class="fa fa-circle-o"></i>FTLC</a></li>
          </ul>
        </li>

        <?php
        if ($hlm == "berita_bursa" or  $hlm == "regulasi" or $hlm == "peluncuran_produk" ) {
          $lala4 = 'active';
        }
        ?>
        <li class="treeview <?php echo $lala4  ?> ">
          <a href="#">
            <i class="fa fa-link" aria-hidden="true"></i>
            <span>REFERENSI</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php if($hlm == "berita_bursa") echo "class='active'";?>><a href="./admin?hlm=berita_bursa"><i class="fa fa-circle-o"></i>BERITA BURSA</a></li>
            <li <?php if($hlm == "regulasi") echo "class='active'";?>><a href="./admin?hlm=regulasi"><i class="fa fa-circle-o"></i>REGULASI</a></li>
            <li <?php if($hlm == "peluncuran_produk") echo "class='active'";?>><a href="./admin?hlm=peluncuran_produk"><i class="fa fa-circle-o"></i>PELUNCURAN PRODUK</a></li>
            <li <?php if($hlm == "karir") echo "class='active'";?>><a href="./admin?hlm=karir"><i class="fa fa-circle-o"></i>KARIR</a></li>
          </ul>
        </li>
        <li  <?php if($hlm == "user") echo "class='active'";?> >
          <a href="./admin?hlm=user">
            <i class="fa fa-user-plus" aria-hidden="true"></i> <span>MANAJEMEN USER</span>
          </a>
        </li>
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
