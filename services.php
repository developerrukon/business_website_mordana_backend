<?php
 require_once "controller-php/index_query.php";
 require_once "controller-php/services_query.php";
 require_once "controller-php/contact_query.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services - Moderna Bootstrap Template</title>
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

  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span><?= $settings['website_name']; ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a  href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Services</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

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

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <?php
            foreach($services_details as $service_d){
          ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="uploads/service_details/<?= $service_d['image'] ?>" alt="<?= $service_d['title'] ?>">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#"><?= $service_d['title'] ?></a></h5>
                <p class="card-text"><?= $service_d['description'] ?></p>
                <div class="read-more"><a href="<?= $service_d['btn_url'] ?>"><i class="bi bi-arrow-right"></i> <?= $service_d['btn_text'] ?></a></div>
              </div>
            </div>
          </div>
          <?php
           }
          ?>
        </div>

      </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        
        <div class="row no-gutters">
          <?php
            foreach($pricings as $key => $pricing){
              
          ?>
          <div class="col-lg-4 box <?= $key == 1 ? 'featured' : '' ?> ">
            <h3><?= $pricing['title'] ?></h3>
            <h4><?= $pricing['pricing_number'] ?><span><?= $pricing['pricing_heading'] ?></span></h4>
            <?= html_entity_decode($pricing['description']) ?>
            <a href="#" class="get-started-btn"><?= $pricing['btn_text'] ?></a>
          </div>
          <?php
          }
          ?>
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->


  <?php
  include_once "inc/footer.php";
?>  