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
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/templatemo-grad-school.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/lightbox.css">

</head>

<body>

  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>YUK</em>NGODING</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="h">Home</a></li>
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
              <li><a href="<?= base_url('user/detailakun/') . $this->session->userdata('username') ?>" class="external">Your Profile</a></li>
              <li><a href="<?= base_url('auth/logout') ?>" class="external">Logout</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Belajar Bahasa Pemorgraman Yang Kamu Sukai !</h6>
        <h2><em>Yuk</em>Ngoding</h2>
        <div class="main-button">
          <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Beginner</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <a href="<?= base_url('user/beginner')?>">More Info</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Intermediate</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <a href="<?= base_url('user/intermediate')?>">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Advance</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <a href="<?= base_url('user/advance')?>">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose YUK NGODING?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Education</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'>Quality Meeting</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Education</h4>
                    <p>This courses give you the best. Thank you.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Level</h4>
                    <p>This website is the 1st on the world </p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Meeting</h4>
                    <p>On this website give you meet at zoom</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Pilih Bahasa Pemrogramanmu!</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/php.png" alt="Course #1" style="width:234px; height:150px">
            <div class="down-content" style="width:234px; height:210px">
              <h4>PHP</h4>
              <p>Belajar bahasa pemrograman PHP</p>
              <div class="text-button-pay mt-2 mr-4">
                <a href="<?= base_url('user/php')?>">Belajar <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/css.png" alt="Course #2" style="width:234px; height:150px">
            <div class="down-content" style="width:234px; height:210px">
              <h4>CSS</h4>
              <p>Belajar bahasa pemrograman CSS</p>
              <div class="text-button-pay mt-2">
                <a href="#">Belajar <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/html.png" alt="Course #3" style="width:234px; height:150px">
            <div class="down-content" style="width:234px; height:210px">
              <h4>HTML</h4>
              <p>Belajar bahasa pemrograman HTML</p>
              <div class="text-button-pay mt-2">
                <a href="<?= base_url('user/html')?>">Belajar <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/python.png" alt="" style="width:234px; height:150px">
            <div class="down-content" style="width:234px; height:210px">
              <h4>Python</h4>
              <p>Belajar bahasa pemrograman Python</p>
              <div class="text-button-pay mt-2">
                <a href="<?= base_url('user/python')?>">Belajar <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/csharp.png" alt="" style="width:234px; height:150px">
            <div class="down-content" style="width:234px; height:210px">
              <h4>C#</h4>
              <p>Belajar bahasa pemrograman C#</p>
              <div class="text-button-pay mt-2">
                <a href="#">Belajar <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/git.png" alt="" style="width:234px; height:150px">
            <div class="down-content" style="width:234px; height:210px">
              <h4>Git</h4>
              <p>Belajar bahasa pemrograman Git</p>
              <div class="text-button-pay mt-2">
                <a href="#">Belajar <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video to learn more <em>about Grad School</em></h4>
            <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> for details.
              <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
            <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Power HTML Template</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img src="assets/images/main-thumb.png"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section> -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School</p>
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
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
      if ($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</html>