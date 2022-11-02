<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include 'include/base.php';
        include 'include/db.php';

        $number = $_GET['id'];

        $query = "select * from portfolios where number = $number";
        $result = mysqli_query($db, $query);
        $portfolio = mysqli_fetch_assoc($result);
        ?>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Portfolio Details - <?php echo $portfolio["category"]; ?></title>
        <meta content="Jacob Li's personal portfolio" name="description">
        <meta content="Jacob Li, Portfolio, Personal" name="keywords">
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <style>
            .portfolio-details-slider img{
                box-shadow: 0 4px 30px 0 rgb(0 0 0 / 10%);
            }
        </style>
    </head>
    <body>
        <!-- ======= Mobile nav toggle button ======= -->
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
        <!-- ======= Header ======= -->
        <header id="header">
            <div class="d-flex flex-column">
                <div class="profile">
                    <img src="assets/img/profile-img.jpeg" alt="" class="img-fluid rounded-circle">
                    <h1 class="text-light"><a href="/">Jacob Li</a></h1>
                    <div class="social-links mt-3 text-center">
                        <a href="skype:live:.cid.128d0a4d51427ab1?chat" class="skype"><i class="bx bxl-skype"></i></a>
                        <a target="telegram" href="https://telegram.me/webdev2019" class="telegram"><i class="bx bxl-telegram"></i></a>
                        <a target="github" href="https://github.com/devspec1" class="github"><i class="bx bxl-github"></i></a>
                        <a target="stackoverflow" href="https://stackoverflow.com/users/15471066/jacob-li" class="stackoverflow"><i class="bx bxl-stack-overflow"></i></a>
                        <a href="https://www.linkedin.com/in/jacob-li-5b8596221/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Portfoio Details</h2>
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li>Portfoio Details</li>
                        </ol>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumbs -->
            <!-- ======= Portfolio Details Section ======= -->
            <section id="portfolio-details" class="portfolio-details">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-8">
                            <div class="portfolio-details-slider">
                                <img src="assets/img/portfolio/portfolio-<?php echo $_GET['id']; ?>.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="portfolio-info">
                                <h3>Project information</h3>
                                <ul>
                                    <li><strong>Category</strong>: <?php echo $portfolio['category']; ?></li>
                                    <li><strong>Client</strong>: <?php echo $portfolio['client']; ?></li>
                                    <li><strong>Project Duration</strong>: <?php echo $portfolio['date']; ?> Month(s)</li>
                                    <li><strong>Project URL</strong>: <a target="new" href="<?php echo $portfolio['url']; ?>"><?php echo $portfolio['url']; ?></a></li>
                                </ul>
                            </div>
                            <div class="portfolio-description">
                                <h2><?php echo $portfolio['title']; ?></h2>
                                <p><?php echo nl2br($portfolio['description']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Portfolio Details Section -->
        </main>
        <!-- End #main -->
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>2021</span></strong>
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                    Designed by <a href="mailto:devspec1@gmail.com">Jacob Li</a>
                </div>
            </div>
        </footer>
        <!-- End  Footer -->
        <!-- Vendor JS Files -->
        <script>
            document.querySelector('.mobile-nav-toggle').addEventListener('click', function(e) {
                document.querySelector('body').classList.toggle('mobile-nav-active')
                this.classList.toggle('bi-list')
                this.classList.toggle('bi-x')
            });
        </script>
    </body>
</html>