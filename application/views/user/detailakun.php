<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>YUK NGODING</title>

  <!-- Bootstrap core CSS -->
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/templatemo-grad-school.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/lightbox.css">
</svg>
  <style>
    body {
      background-color: #E6E6E6;
    }
  </style>

</head>

<body>

  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="<?= base_url('user') ?>"><em>YUK</em>NGODING</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="<?= base_url('user') ?>">Home</a></li>
        <li><a href="#section4">Courses</a></li>
        <li class="has-submenu"><a href="">
            <?php if ($this->session->userdata('id_role') != '2') {
              echo 'Login';
            } else {
              echo $this->session->userdata('username');
            } ?>
          </a>
          <ul class="sub-menu">
            <?php if ($this->session->userdata('id_role') != '2') : ?>
              <li><a href="<?= base_url('auth') ?>" class="external">Login/Register</a></li>
            <?php else : ?>
              <li><a href="<?= base_url('auth/login') ?>" class="external">Your Profile</a></li>
              <li><a href="<?= base_url('auth/logout') ?>" class="external">Logout</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <section class="section" style="margin: 100px;">
    <div class="container">
      <?php foreach ($dataUser as $row) : ?>
        <div class="bg-white" style="padding:100px;">
          <div class="row">
            <div class="span2">
              <?php if ($row['avatar'] != NULL) : ?>
                <img src="<?= $row['avatar'] ?>" alt="" class="img-rounded">
                <button type="button" class="btn btn-block mt-2 text-dark">Tambah Foto</button>
              <?php else : ?>
                <img src="<?= base_url('assets/images/profile.png') ?>" alt="" class="img-rounded">
                <button type="button" class="btn btn-block mt-2 text-dark">Tambah Foto</button>
              <?php endif; ?>
            </div>
            <div class="span4"><strong>
              <blockquote>
                <p>Fullname : <?= $row['fullname'] ?></p>
                <small><cite title="Source Title">Username : <?= $row['username'] ?></cite></small>
              </blockquote>
              <p>Password : <?= $row['password'] ?> <br></p>
              </strong></div>
          </div>
          <button type="button" class="btn btn-success mt-5 float-right" style="margin-right:-75px;">Simpan</button>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <footer class="fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by YUKNGODING</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?php echo base_url() ?>assets/js/isotope.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/owl-carousel.js"></script>
  <script src="<?php echo base_url() ?>assets/js/lightbox.js"></script>
  <script src="<?php echo base_url() ?>assets/js/tabs.js"></script>
  <script src="<?php echo base_url() ?>assets/js/video.js"></script>
  <script src="<?php echo base_url() ?>assets/js/slick-slider.js"></script>
  <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>

</html>