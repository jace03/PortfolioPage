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
$dataArray = array();
$dataArray[] = array(
    "heading" => "class 5 gdl basic course",
    "price" => "$595.00",
    "courseID" => 55,
    "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
);
$dataArray[] = array(
    "heading" => "Brush Up Course",
    "price" => "$125.00",
    "courseID" => 56,
    "information" => "Brush-up hours are designed for students who wish to practice additional hours with a driver instructor outside of the traditional driver training course. It is however recommended that students first participate in the Class 5 Basic Course to learn how to drive initially. The brush-up course is not designed to replace a full drivers ed program, but to compliment it."
);
$dataArray[] = array(
    "heading" => "Newcomer Course",
    "price" => "$125.00",
    "courseID" => 57,
    "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
);
$dataArray[] = array(
    "heading" => "Newcomer2 Course",
    "price" => "$125.00",
    "courseID" => 58,
    "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
);
$dataArray[] = array(
    "heading" => "Newcomer3 Course",
    "price" => "$125.00",
    "courseID" => 59,
    "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
);
$dataArray[] = array(
    "heading" => "Newcomer4 Course",
    "price" => "$125.00",
    "courseID" => 60,
    "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
);
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
                <li class="nav-item active">
                    <a class="nav-link" href="Packages.php">Packages
                        <span class="sr-only">(current)</span>
                    </a>
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
                <li class="nav-item">
                    <a class="nav-link" href="Testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RoadTesting.php">Road Testing</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- heading-->
<div class="container">
    <div class="card w-90 ml-lg-5">
        <div class="card h-100">
            <!-- <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a> -->
            <div class="card-body text-md-left">
                <h4 class="card-title">
                    <a class="text-danger">Driver Education Packages</a>
                </h4>
                <p class="card-text">Alberta Driver Education & Training offers several drivers ed courses to suit your needs. New to Canada? Try our newcomers course to learn what you'll need to know to learn how to drive in Calgary. Failed a road test recently? Take our brush-up course to get the specific practice that you need with in-car driver training.
                </p>



    <div class="row">
        <!--
        <div class="col-lg-2">
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
        </div>
            -->
            <div class="row card-body w-80">
                <?php
                foreach($dataArray as $row){
           echo'<div class="card w-90 ml-lg-5 bg-dark">
                    <div class="card h-100">
                       <!-- <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a> -->
                        <div class="card-body text-md-left">
                            <h4 class="card-title row-col-sm-4">
                                <a>'.$row["heading"].'</a>
                            </h4>
                            <h5 class="text-danger row-cols-sm-4">'.$row["price"].'</h5>
                            <p class="card-text">'.$row["information"].'</p>
                        </div>
                        <div class="card-footer">
                            <a href="packageinfo.php?course='.$row["courseID"].'" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                  </div>
                 <br>
                ';
                }
                ?>
                <!-- /.col-lg-9 -->
            </div>
            <!-- /.row -->
        </div>
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
