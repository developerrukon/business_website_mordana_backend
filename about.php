<?php
require_once "controller-php/index_query.php";
require_once "controller-php/about_query.php";
require_once "controller-php/contact_query.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Moderna Bootstrap Template</title>
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
          <li><a class="" href="index.php">Home</a></li>
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="uploads/about/<?= $about['image'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3><?= $about['title'] ?></h3>
            <?= html_entity_decode($about['description']) ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">
          <?php
            foreach($facts as $fact){
          ?>
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?= $fact['fact_number'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?= $fact['title'] ?></p>
          </div>
          <?php
            }
          ?>
        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Our Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="skills-content">
        <?php
          foreach($skills as $skill){

        ?>
          <div class="progress">
            <div class="progress-bar <?= $skill['skill_color'] ?>" role="progressbar" aria-valuenow="<?= $skill['skill_percent']?>" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?= $skill['title'] ?> <i class="val"><?= $skill['skill_number'] ?></i></span>
            </div>
          </div>
          <?php
          }
        ?>
        </div>

      </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">
            <?php
              foreach($testimonials as $testimonial){
            ?>
            <div class="testimonial-item swiper-slide">
              <img src="uploads/testimonials/<?=$testimonial['image'] ?>" class="testimonial-img" alt="">
              <h3><?=$testimonial['name'] ?></h3>
              <h4><?=$testimonial['title'] ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?=$testimonial['description'] ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
            <?php
              }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->

  </main><!-- End #main -->


<?php
  include_once "inc/footer.php";
?>  