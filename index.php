<?php
 require_once "controller-php/index_query.php";
 require_once "controller-php/contact_query.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link href="assets/css/aos.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span><?= $settings['website_name']; ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <?php 
      foreach($banners as $key => $banner){?>
      <div class="carousel-item <?= $key == 0 ? 'active' : '' ?> ">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?=$banner['title'] ?></span></h2>
          <p class="animate__animated animate__fadeInUp"><?=$banner['description'] ?></p>
          <?php if($banner['btn_text']){?>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp"><?=$banner['btn_text'] ?></a>
          <?php }?>
        </div>
      </div>

      <?php } ?>
      <!-- Slide 1 -->

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <?php
            foreach($services as $service){
              
            ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box <?= $service['icon_color'] ?>">
              <div class="icon"><i class="<?= $service['icon'] ?>"></i></div>
              <h4 class="title"><a href=""><?= $service['title'] ?></a></h4>
              <p class="description"><?= $service['description'] ?></p>
            </div>
          </div>
          <?php
            }
          ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="uploads/why-us/<?= $why_us['image']?>" class="img-fluid" alt="">
            <a href="<?= $why_us['video_url'] ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="<?= $why_us['icon_one'] ?>"></i></div>
              <h4 class="title"><a href=""><?= $why_us['title_one'] ?></a></h4>
              <p class="description"><?= $why_us['description_one'] ?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="<?= $why_us['icon_two'] ?>"></i></div>
              <h4 class="title"><a href=""><?= $why_us['title_two'] ?></a></h4>
              <p class="description"><?= $why_us['description_two'] ?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
          
        <?php
            foreach($features as $feature){
            if($feature['id']%2 == 1){

        ?>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="uploads/features/<?= $feature['image'] ?>" class="img-fluid" alt="<?= $feature['title'] ?>">
          </div>
          <div class="col-md-7 pt-4">
            <h3><?= $feature['title'] ?></h3>
            <?= html_entity_decode($feature['description']) ?>
          </div>
        </div>
        <?php

          }else{
        ?>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="uploads/features/<?= $feature['image'] ?>" class="img-fluid" alt="<?= $feature['title'] ?>">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3><?= $feature['title'] ?></h3>
            <?= html_entity_decode($feature['description']) ?>
          </div>
        </div>
        <?php
            }
          }
        ?>


      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

<?php
  include_once "inc/footer.php";
?>  