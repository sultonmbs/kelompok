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
        <table  width="100%" style="margin:20px auto;" border="2">
            <thead>
              <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Email</th>
                <th style="text-align: center;">Kontak</th>
                <th style="text-align: center;">Tempat Lahir</th>
                <th style="text-align: center;">Tanggal Lahir</th>
                <th style="text-align: center;">Alamat</th>
                <th style="text-align: center;">Prodi</th>
                <th style="text-align: center;">Fakultas</th>
                <th style="text-align: center;">Divisi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach($pendaftaran as $pd):
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $pd->nama ?></td>
                <td><?php echo $pd->email ?></td>
                <td><?php echo $pd->kontak ?></td>
                <td><?php echo $pd->tmpt_lahir ?></td>
                <td><?php echo $pd->tgl_lahir ?></td>
                <td><?php echo $pd->alamat ?></td>
                <td><?php echo $pd->prodi ?></td>
                <td><?php echo $pd->fakultas ?></td>
                <td><?php echo $pd->divisi ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
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
