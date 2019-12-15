<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UKM SENI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  

  <link href="<?= base_url('assets/assets/https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700'); ?> " rel="stylesheet">

  <!-- Google Fonts -->
  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('assets/assets/lib/bootstrap/css/bootstrap.min.css'); ?> " rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('assets/assets/lib/icomoon/icomoon.css'); ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('assets/assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">


  <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="<?= base_url('assets/assets/'); ?>#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothscroll">UKM SENI</a></li>
            <li> <a href="#about"  class="smoothscroll"> Tentang</a></li>
            <li> <a href="<?= base_url('crud'); ?>" class="smoothscroll"> Data Pendaftar</a></li>
            <li> <a href="<?= base_url('auth/logout'); ?>"> Logout</a></li>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== -->
  <div id="home"></div>
  <div id="headerwrap" name="home">
    <header class="clearfix">
      <h1><span class="icon icon-shield"></span></h1>
      <p>UKM SENI</p>
      <p>UNIT KEGIATAN MAHASISWA SENI</p>
      
    </header>
  </div>
  <!-- /headerwrap -->


  <!-- ==== ABOUT ==== -->
  <div class="container" id="about" name="about">
    <div class="row white">
      <br>
      <h1 class="centered">UKM</h1>
      <hr>

      <div class="col-lg">
        <?php
          foreach($pendaftaran as $pd):
        ?>
            <form action="" method="post">
              <label for="nama">Nama</label></br>
              <input type="text" name="nama" value="<?php echo $pd->nama ?>"></br>
              <label for="email">Email</label></br>
              <input type="text" name="email" value="<?php echo $pd->email ?>"></br>
               <label for="kontak">Kontak</label></br>
                <input type="text" name="kontak" value="<?php echo $pd->kontak ?>"></br>
                <label for="tmpt_lahir">Tempat Lahir</label></br>
                <input type="text" name="tmpt_lahir" value="<?php echo $pd->tmpt_lahir ?>"></br>
                <label for="tgl_lahir">Tanggal Lahir</label></br>
                <input type="text" name="tgl_lahir" value="<?php echo $pd->tgl_lahir ?>"></br>
                <label for="alamat">Alamat</label></br>
                <input type="text" name="alamat" value="<?php echo $pd->alamat ?>"></br>
                <label for="prodi">Prodi</label></br>
                <input type="text" name="prodi" value="<?php echo $pd->prodi ?>"></br>
                <label for="fakultas">Fakultas</label></br>
                <input type="text" name="fakultas" value="<?php echo $pd->fakultas ?>"></br>
                 <label for="divisi">Divisi</label></br>
                <input type="text" name="divisi" value="<?php echo $pd->divisi ?>"></br></br>
                <input type="submit" name="update" value="update">
              </form>
            <?php endforeach; ?>
                
        </div>
      <!-- col-lg-6 -->
    </div>

    <!-- row -->
  </div>
  <!-- container -->


<!-- JavaScript Libraries -->
<script src="<?= base_url('assets/assets/lib/jquery/jquery.min.js'); ?>"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/php-mail-form/validate.js"></script>
<script src="lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
