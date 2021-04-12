<?php
  if ($_GET['hal']=='home')
  { include "home.php";}
  else

  //home
  if  ($_GET['hal']=='profil-jfx')
  { include "page/tentang/profil.php"; }
  else

    if  ($_GET['hal']=='manajemen')
  { include "page/tentang/manajemen.php"; }
  else

  if  ($_GET['hal']=='daftar-pelaku')
  { include "page/pelaku_pasar/daftar_pelaku.php"; }
  else
  //
  // if  ($_GET['hal']=='daftar-pialang')
  // { include "page/pelaku_pasar/daftar_pialang.php"; }
  // else
  //
  // if  ($_GET['hal']=='daftar-pedagang')
  // { include "page/pelaku_pasar/daftar_pedagang.php"; }
  // else
  //
  // if  ($_GET['hal']=='daftar-pedagang')
  // { include "page/pelaku_pasar/daftar_pedagang.php"; }
  // else

  if  ($_GET['hal']=='daftar-fisik-timah')
  { include "page/pelaku_pasar/daftar_fisik_timah.php"; }
  else

  if  ($_GET['hal']=='fisik_timah')
  { include "page/pelaku_pasar/fisik_timah.php"; }
  else

  if  ($_GET['hal']=='emas_digital')
  { include "page/pelaku_pasar/emas_digital.php"; }
  else

  if  ($_GET['hal']=='tin_req')
  { include "page/pelaku_pasar/persyaratan.php"; }
  else

  if  ($_GET['hal']=='fisik_sk')
  { include "page/pelaku_pasar/fisik_sk.php"; }
  else

  if  ($_GET['hal']=='fisik_ed')
  { include "page/pelaku_pasar/fisik_ed.php"; }
  else

    //home tabel detail
    if  ($_GET['hal']=='hm-overview')
    { include "page/detail_produk/overview_hm.php"; }
    else

      //home tabel detail
    if  ($_GET['hal']=='spa-overview')
    { include "page/detail_produk/spa_overview.php"; }
    else


    if  ($_GET['hal']=='overview_timah')
    { include "page/detail_produk/overview_timah.php"; }
    else

    if  ($_GET['hal']=='hm-settlement')
    { include "page/detail_produk/settlement_hm.php";}
    else

    if  ($_GET['hal']=='hm-volume')
    { include "page/detail_produk/volume_hm.php";}
    else

    if  ($_GET['hal']=='kinerja-transaksi')
    { include "page/member/kinerja.php";}
    else

      if  ($_GET['hal']=='buletin')
      { include "page/blog/artikel.php";}
      else

      if  ($_GET['hal']=='artikel-detail')
      { include "page/blog/detail_artikel.php";}
      else

      //2
      if  ($_GET['hal']=='buletin')
      { include "page/blog/artikel.php";}
      else


        if  ($_GET['hal']=='realtime')
        { include "page/realtime.php";
        }
        else


        if  ($_GET['hal']=='login-area')
        { include "page/login/login.php";}
        else

        if  ($_GET['hal']=='technology')
        { include "page/teknologi/technology.php";}
        else

                if  ($_GET['hal']=='teknologi_detail')
                { include "page/teknologi/teknologi_detail.php";}
                else

                if  ($_GET['hal']=='forum')
                { include "page/forum/forum.php";}
                else

                if  ($_GET['hal']=='listforum')
                { include "page/forum/listforum.php";}
                else

                //3
                if  ($_GET['hal']=='ftlc')
                { include "page/edukasi/ftlc.php";}
                else

                //3
                if  ($_GET['hal']=='edukasi')
                { include "page/edukasi/edukasi.php";}
                else

                //3
                if  ($_GET['hal']=='materi-umum')
                { include "page/edukasi/materi_umum.php";}
                else

                //3
                if  ($_GET['hal']=='real-time')
                { include "page/data/real_time.php";}
                else

                if  ($_GET['hal']=='data-historis')
                { include "page/data/data_historis.php";}
                else

                if  ($_GET['hal']=='list-settlement')
                { include "page/list_produk/list_settlement.php";}
                else

                if  ($_GET['hal']=='list-settlement-spa')
                { include "page/list_produk/list_settlement_spa.php";}
                else


                if  ($_GET['hal']=='list-produk')
                { include "page/list_produk/list_produk.php";}
                else

                if  ($_GET['hal']=='list-timah')
                { include "page/list_produk/list_timah.php";}
                else

      //pasar
      if  ($_GET['hal']=='berita-bursa')
      { include "page/pasar/berita_bursa.php";}
      else

      if  ($_GET['hal']=='regulasi')
      { include "page/pasar/regulasi.php";}
      else

      if  ($_GET['hal']=='peluncuran-produk')
      { include "page/pasar/peluncuran_produk.php";}
      else

      //edukasi
      if  ($_GET['hal']=='event')
      { include "page/event/event.php";}
      else

      if  ($_GET['hal']=='edukasi_add')
      { include "page/edukasi/edukasi_add.php";}
      else

      if  ($_GET['hal']=='karir')
      { include "page/pasar/karir.php";}
      else

      ?>
