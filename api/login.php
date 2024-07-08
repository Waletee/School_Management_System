<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TOA Academy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="school_logo.jpg">
</head>

<body class="login-body">
    <div class="black-fill"> <br> <br>
        <div class="d-flex justify-content-center align-items-center">
            <form class="login" id="login" method="post" action="assets/login.php">
                <div class="text-center">
                    <img src="school_logo.jpg" width="100" alt="School Logo">
                </div>
                <h3>LOGIN</h3>
                <?php if (isset($_GET['error'])) ?>
                <div class="alert alert-danger" role="alert">
                <?=$_GET['error'] ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="uemail" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Login As</label>
                    <select class="form-control" name="role">
                        <option value="1">Student</option>
                        <option value="2">Parent</option>
                        <option value="3">Teacher</option>
                        <option value="4">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php" class="text-decoration-none">Home</a>
            </form>
        </div>
    </div>

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