<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOA Academy</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="school_logo.jpg">
</head>

<body class="home">
  <div class="black-fill"> <br> <br>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-light" id="homeNav">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="school_logo.jpg" width="40" alt="School Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <ul class="navbar-nav me-4 mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">Admin</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Student</a></li>
                </ul>
              </li>
            </ul>
            <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
          </div>
        </div>
      </nav>

      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative">
          <h1>Welcome to TOA Academy</h1>
          <h2>Learning Today, Leading Tomorrow.</h2>
          <br>
          <a href="#" class="btn-get-started">Read More</a>
        </div>
      </section><!-- End Hero -->

      <!-- ======= About Section ======= -->
      <section id="about" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative">
          <div class="section-title">
            <h2>Our Mission</h2>
            <p>Our Mission</p>
          </div>
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center">
              <img src="images/school_logo.png" class="img-fluid" alt="School Logo">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top:60px;">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              <a href="#" class="learn-more-btn">Read More</a><!-- Log on to codeastro.com for more projects! -->
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">

          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1069</span>
              <p>Students</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">9</span>
              <p>Teachers</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">12</span>
              <p>Events</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">5</span>
              <p>Departments</p><!-- Log on to codeastro.com for more projects! -->
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->

      <!-- ======= Footer ======= -->
      <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>TOA Academy</h3>
                <p>
                  Port-Harcourt,<br>
                  Rivers State, Nigeria.<br><br>
                  <strong>Phone:</strong> 101-000-1110,<br>
                  <strong>Email:</strong> email@email.edu.ng<br>
                </p>
              </div>

              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Service 1</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Service 2</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Service 3</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Service 4</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Service 5</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <p>We're no 1 in providing high level excellent eductaion for your kids</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe Now!!">
                </form>
              </div>

            </div>
          </div>
        </div>

        <div class="container d-md-flex py-4 justify-content-between align-items-center">
          <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
              &copy; <strong><span>TOA Academy</span></strong> - <?php echo date('Y'); ?> - Developed By TOA Academy
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-20 pt-md-0">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
          <div class="back-to-top">
            <a href="#" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
          </div>
        </div>
      </footer><!-- End Footer -->

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>