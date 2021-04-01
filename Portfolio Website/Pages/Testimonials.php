<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <script src ="vendor\bootstrap\js\util.js"></script>
</head>
<body>
<?php
$Carousel_Photo1 = "photos/class-5-basic-driver-training.jpg";
$Carousel_Photo2 ="photos/calgary-driving-brush-up-lessons.jpg";
$Carousel_Photo3 ="photos/calgary-driving-brush-up-lessons.jpg";
$under_Carousel_photo ="photos/alberta-transportation-approved-driving-school.jpg";
$logo ="photos/logo-black.png";
$Registry_name ="Alberta Driver Education";
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="text ml-5" > <h2><?php echo $Registry_name?></h2></div>
    <div class="container">
        <!--<img class="my-sm-n1 img-fluid" src="<?php echo $logo?>" alt="logo">     -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Packages.php"> Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Schedule.php">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Articles.php">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">Faq</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Testimonials.php">Testimonials
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RoadTesting.php">Road Testing</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="card w-90 ml-lg-5">
        <div class="card h-100">
            <div class="card-body text-md-left">
                <h4 class="card-title">
                    <a class="text-danger">Alberta Driver Education & Training - Driving School Review</a>
                </h4>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="py-12 bg-dark  slide my-12 w-100">
    <div class="row justify-content-lg-center">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright © 2021 Alberta Driver Education & Training Inc.</p>
        </div>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
