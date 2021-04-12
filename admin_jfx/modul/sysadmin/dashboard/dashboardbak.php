
<script src="../../assets/js/highmaps.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Dashboard
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->


      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
                 <?php

$sqlbk = "SELECT count(nama) AS user from user WHERE status_user like 'Disable'";
$querybk = mysqli_query($koneksi, $sqlbk);
$resultbk = mysqli_fetch_array($querybk);


?>
              <h3><?php echo number_format("{$resultbk['user']}"); ?></h3>

             <p>BELUM TERVERIFIKASI</p>
            </div>
            <div class="icon">
         <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <a href="./?hlm=veri" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php

$sqlbk3 = "SELECT count(nama) AS bimtek from user WHERE status_user like 'Active' and level = 'pelaksana'";
$querybk3 = mysqli_query($koneksi, $sqlbk3);
$resultbk3 = mysqli_fetch_array($querybk3);


?>
              <h3><?php echo number_format("{$resultbk3['bimtek']}"); ?></h3>

              <p>TOTAL PESERTA BIMTEK</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./admin?hlm=tot_bimtek" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>30</h3>

              <p>TOTAL PELATIHAN TOT</p>
            </div>
            <div class="icon">
            <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <?php

$sqlbk = "SELECT count(nama) AS user from user WHERE status_user like 'Active'";
$querybk = mysqli_query($koneksi, $sqlbk);
$resultbk1 = mysqli_fetch_array($querybk);


?>
              <h3><?php echo number_format("{$resultbk1['user']}"); ?></h3>

              <p>ANGGOTA AKTIF</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
 


        </section>

