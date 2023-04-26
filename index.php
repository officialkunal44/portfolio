<?php include 'Include/config.php';
$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?= $data['name'] ?> |
    <?= $data['title'] ?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php">
          <?= $data['name']; ?>
        </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>
          <?= $data['title']; ?>
        </span> from
        <?= $data['city']; ?>
      </h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">

        <?php
        if ($data['whatsapp']) {
          ?>
          <a href="<?= $data["whatsapp"] ?>" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>
          <?php
        }
        ?>

        <?php
        if ($data['facebook']) {
          ?>
          <a href="<?= $data["facebook"] ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
          <?php
        }
        ?>

        <?php
        if ($data['instagram']) {
          ?>
          <a href="<?= $data["instagram"] ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
          <?php
        }
        ?>

        <?php
        if ($data['twitter']) {
          ?>
          <a href="<?= $data["twitter"] ?>" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
          <?php
        }
        ?>

        <?php
        if ($data['telegram']) {
          ?>
          <a href="<?= $data["telegram"] ?>" class="telegram" target="_blank"><i class="bi bi-telegram"></i></a>
          <?php
        }
        ?>
        <!-- <a href="<?= $data['whatsapp'] ?>" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>
        <a href="<?= $data['facebook'] ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="<?= $data['instagram'] ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="<?= $data['telegram'] ?>" class="telegram" target="_blank"><i class="bi bi-telegram"></i></a> -->
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">

        <?php
        $about_user = "SELECT * FROM `about_user` WHERE `about_user`.`id` = 1";
        $about_user_re = mysqli_query($conn, $about_user);
        $about_user_data = mysqli_fetch_assoc($about_user_re);
        ?>

        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>
            <?= $about_user_data['title'] ?>
          </h3>
          <p class="fst-italic">
            <?= $about_user_data['disc'] ?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <?php
                if ($about_user_data['birth_date']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>
                      <?php echo date('d M Y', strtotime($about_user_data['birth_date'])) ?>
                    </span></li>
                  <?php
                }
                ?>

                <?php
                if ($about_user_data['website']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>
                      <?= $about_user_data['website'] ?>
                    </span></li>
                  <?php
                }
                ?>
                <?php
                if ($about_user_data['phone']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91
                      <?= $about_user_data['phone'] ?>
                    </span></li>
                  <?php
                }
                ?>
                <?php
                if ($data['city']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>
                      <?= $data['city'] ?>,
                      <?= $about_user_data['state'] ?>
                    </span></li>
                  <?php
                }
                ?>

              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <?php
                if ($about_user_data['age']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>
                      <?= $about_user_data['age'] ?>
                    </span></li>
                  <?php
                }
                if ($about_user_data['degree']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>
                      <?= $about_user_data['degree'] ?>
                    </span></li>
                  <?php
                }
                if ($about_user_data['email']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>
                      <?= $about_user_data['email'] ?>
                    </span></li>
                  <?php
                }
                if ($about_user_data['freelance']) {
                  ?>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                      <?= $about_user_data['freelance'] ?>
                    </span></li>
                  <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->


    <?php
    $counter = "SELECT * FROM `counter`";
    $counter_re = mysqli_query($conn, $counter);
    ?>
    <!-- ======= Counts ======= -->
    <div class="counts container">
      <div class="row">
        <?php
        if ($counter_re->num_rows > 0) {
          while ($row = $counter_re->fetch_assoc()) {
            ?>
            <div class="col-lg-3 col-md-6 mt-5">
              <div class="count-box">
                <i class="<?= $row['icon'] ?>"></i>
                <span data-purecounter-start="<?= $row['pre'] ?>" data-purecounter-end="<?= $row['post'] ?>"
                  data-purecounter-duration="1" class="purecounter"></span>
                <p>
                  <?= $row['title'] ?>
                </p>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>
      <div class="row">
        <?php
        $skills = "SELECT * FROM `skills`";
        $skills_re = mysqli_query($conn, $skills);

        if ($skills_re->num_rows > 0) {
          while ($skills_row = $skills_re->fetch_assoc()) {
            ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box mt-4">
                <i class="<?= $skills_row['icon'] ?>" style="color: <?= $skills_row['color'] ?>"></i>
                <h3>
                  <?= $skills_row['title'] ?>
                </h3>
              </div>
            </div>
            <?php
          }
        }
        ?>


      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">


          <?php
          $testimonial = "SELECT * FROM `testimonial`";
          $testimonial_re = mysqli_query($conn, $testimonial);

          if ($testimonial_re->num_rows > 0) {
            while ($testimonial_row = $testimonial_re->fetch_assoc()) {
              ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $testimonial_row['quote'] ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="<?= $testimonial_row['image'] ?>" class="testimonial-img" alt="">
                  <h3>
                    <?= $testimonial_row['name'] ?>
                  </h3>
                  <h4>
                    <?= $testimonial_row['title'] ?>
                  </h4>
                </div>
              </div>
              <?php
            }
          }
          ?>

        </div><!-- End testimonial item -->
      </div>
    </div>


  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>
              <?= $data['name'] ?>
            </h4>
            <p><em>
                <?= $data['r_summary'] ?>
              </em>
            </p>
            <p>
            <ul>
              <li>
                <?= $data['address'] ?>
              </li>
              <li>
                <?= $about_user_data['phone'] ?>
              </li>
              <li>
                <?= $about_user_data['email'] ?>
              </li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <?php
          $edu = "SELECT * FROM `education`";
          $edu_re = mysqli_query($conn, $edu);

          if ($edu_re->num_rows > 0) {
            while ($edu_row = $edu_re->fetch_assoc()) {
              ?>
              <div class="resume-item">
                <h4>
                  <?= $edu_row['std'] ?>
                </h4>
                <h5>
                  <?= $edu_row['passing_y'] ?>
                </h5>
                <p><em>
                    <?= $edu_row['school_name'] ?>
                  </em></p>
                <p>
                  <?= $edu_row['desc'] ?>
                </p>
              </div>
              <?php
            }
          }
          ?>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">My Works</h3>
          <?php
          $my_works = "SELECT * FROM `my_works`";
          $my_works_re = mysqli_query($conn, $my_works);
          $i = 0;

          if ($my_works_re->num_rows > 0) {
            while ($my_works_row = $my_works_re->fetch_assoc()) {
              if ($i == 3) {
                break;
              } else {
                ?>

                <div class="resume-item">
                  <h4>
                    <?= $my_works_row['project_name'] ?>
                  </h4>
                  <h5>
                    <?= $my_works_row['project_date'] ?> - Present
                  </h5>
                  <p><em>Experion, Jalgaon, Maharastra India </em></p>
                  <p>
                  <ul>
                    <li> <b>Client</b>:
                      <?= $my_works_row['client_name'] ?>
                    </li>
                    <li><b>Description</b>:
                      <?= $my_works_row['project_desc'] ?>
                    </li>
                    <li><b>Catagory</b>:
                      <?= $my_works_row['catagory'] ?>
                    </li>
                  </ul>
                  </p>
                </div>
                <?php
                $i += 1;
              }
            }
          }
          ?>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <?php
      $services = "SELECT * FROM `services`";
      $services_re = mysqli_query($conn, $services);

      ?>

      <div class="row">
        <?php
        if ($services_re->num_rows > 0) {
          while ($services_row = $services_re->fetch_assoc()) {
            ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="<?= $services_row['icon'] ?>"></i></div>
                <h4><a href="">
                    <?= $services_row['title'] ?>
                  </a></h4>
                <p>
                  <?= $services_row['text'] ?>
                </p>
              </div>
            </div>
            <?php
          }
        } else {
          echo "No service found!";
        }
        ?>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
            $cat_list = "SELECT * FROM `category`";
            $cat_re = mysqli_query($conn, $cat_list);
            if ($cat_re->num_rows > 0) {
              while ($cat_row = $cat_re->fetch_assoc()) {
                ?>
                <li data-filter=".<?php echo $cat_row['name'] ?>"><?= $cat_row['name'] ?></li>
                <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
        $portfolio = "SELECT * FROM `portfolio`";
        $portfolio_re = mysqli_query($conn, $portfolio);

        if ($portfolio_re->num_rows > 0) {
          while ($portfolio_row = $portfolio_re->fetch_assoc()) {
            $category = $portfolio_row['category'];
            $category_sql = "SELECT * FROM `category` WHERE `category`.`id` = $category";
            $category_re = mysqli_query($conn, $category_sql);
            $category_data = mysqli_fetch_assoc($category_re);
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item <?= $category_data['name'] ?>">
              <div class="portfolio-wrap">
                <img src="<?= $portfolio_row['image'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>
                    <?= $portfolio_row['title'] ?>
                  </h4>
                  <p>
                    <?= $category_data['name'] ?>
                  </p>
                  <div class="portfolio-links">
                    <a href="<?= $portfolio_row['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"
                      title="<?php echo $portfolio_row['title'] ?>"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php?id=<?php echo $portfolio_row['id'] ?>"
                      data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                      class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <?php
          }
        } else {
          echo "No portfolio found.";
        }
        ?>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>
              <?= $data['address'] ?>
            </p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php
              if ($data['whatsapp']) {
                ?>
                <a href="<?= $data["whatsapp"] ?>" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>
                <?php
              }
              ?>

              <?php
              if ($data['facebook']) {
                ?>
                <a href="<?= $data["facebook"] ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <?php
              }
              ?>

              <?php
              if ($data['instagram']) {
                ?>
                <a href="<?= $data["instagram"] ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <?php
              }
              ?>

              <?php
              if ($data['twitter']) {
                ?>
                <a href="<?= $data["twitter"] ?>" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                <?php
              }
              ?>

              <?php
              if ($data['telegram']) {
                ?>
                <a href="<?= $data["telegram"] ?>" class="telegram" target="_blank"><i class="bi bi-telegram"></i></a>
                <?php
              }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>
              <?= $about_user_data['email'] ?>
            </p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+91
              <?= $about_user_data['phone'] ?>
            </p>
          </div>
        </div>
      </div>
      <?php
      if (isset($_POST['send_message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $proj_title = $_POST['project_title'];
        $proj_desc = $_POST['project_desc'];

        $contact = "INSERT INTO `contact` (`name`, `email`, `proj_title`, `proj_desc`) VALUES ('$name', '$email', '$proj_title', '$proj_desc');";

        mysqli_query($conn, $contact);
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Indicates a successful or positive action.
        </div>
        <?php
        mysqli_close($conn);
      }
      ?>
      <form action="#" method="post" class="mt-4">
        <p style="margin: 0; margin: -15px 0 15px 0; font-size: 36px; font-weight: 700; text-transform: uppercase; font-family: "
          Poppins", sans-serif; color: #fff;">For Giving me a project</p>
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required
              style="color: white; padding: 10px; background: rgba(255, 255, 255, 0.08); border: none;">
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required
              style="color: white; padding: 10px; background: rgba(255, 255, 255, 0.08); border: none;">
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="project_title" id="project_title"
            placeholder="Brief title for your project" required
            style="color: white; padding: 10px; background: rgba(255, 255, 255, 0.08); border: none;">
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="project_desc" rows="5" placeholder="About your project!" required
            style="color: white; padding: 10px; background: rgba(255, 255, 255, 0.08); border: none;"></textarea>
        </div>
        <div class="text-center mt-5">
          <button type="submit" name="send_message">Send Message</button>
        </div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    Designed by <span style="color: #18d26e">
      <?= $data['name'] ?>
    </span>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>