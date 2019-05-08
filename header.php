<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UTAMA SERVICE</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/asset/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('/asset/css/style3.css')?>">
    <script type="text/javascript" src="<?php echo base_url('/asset/bootstrap/js/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/asset/bootstrap/js/bootstrap.js')?>"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo site_url('admin') ?>"><b>UTAMA SERVICE</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('admin/konsumen/index') ?>">Konsumen</a></li>
        <li><a href="<?php echo site_url('admin/pembayaran/index') ?>">Pembayaran</a></li>
        <li><a href="<?php echo site_url('admin/sparepart/index') ?>">Sparepart</a></li>
        <li><a href="<?php echo site_url('admin/pegawai/index') ?>">Admin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('admin/admin') ?>"><b>Hello, <?php  echo  $this->session->userdata('username');  ?></b></a></li>
        <li><a href="<?php echo site_url('authentication/auth/logout') ?>"><b>Logout</b></a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
</body>
</html>

