<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/Packages.php">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/Schedule.php">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/Articles.php">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/faq.php">Faq</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/AboutUs.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/Testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/RoadTesting.php">Road Testing</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-2">
           <!-- <h1 class="my-4">Shop Name</h1>
             <img class="d-block img-fluid" src="<?php echo $logo?>" alt="logo">-->
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>

        </div>
        <!-- carousel     //////////////////////////////////-->

        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><!--carausel 1-->
                        <img class="c-block img-fluid" src="<?php echo $Carousel_Photo1?>" alt="Driving brush up">
                    </div>
                    <div class="carousel-item"><!--carausel 2-->
                        <img class="c-block img-fluid" src="<?php echo $Carousel_Photo2?>"  alt="Driving brush up">
                    </div>
                    <div class="carousel-item"><!--carausel 3-->
                        <img class="c-block img-fluid" src="<?php echo $Carousel_Photo3?>"  alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- end of carausel -->

            <div class="under_Carousel">

                <img class="img-fluid" src="<?php echo $under_Carousel_photo?>" alt="Driving brush up" >

            </div>

            <div class="row card-body">
            <!--????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????card 1?-->
            <?php
            $dataArray = array();
            $dataArray[] = array(
                    "heading" => "class 5 gdl basic course",
                    "price" => "$595.00",
                    "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
            );
            $dataArray[] = array(
                "heading" => "Brush Up Course",
                "price" => "$125.00",
                "information" => "Brush-up hours are designed for students who wish to practice additional hours with a driver instructor outside of the traditional driver training course. It is however recommended that students first participate in the Class 5 Basic Course to learn how to drive initially. The brush-up course is not designed to replace a full drivers ed program, but to compliment it."
            );
            $dataArray[] = array(
                "heading" => "Newcomer Course",
                "price" => "$125.00",
                "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
            );
            $dataArray[] = array(
                "heading" => "Newcomer2 Course",
                "price" => "$125.00",
                "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
            );
            $dataArray[] = array(
                "heading" => "Newcomer3 Course",
                "price" => "$125.00",
                "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
            );
            $dataArray[] = array(
                "heading" => "Newcomer4 Course",
                "price" => "$125.00",
                "information" => "The class 5 GDL basic course is a perfect course for students of all levels. From beginners who have recently completed their class 7 learners license to those who are preparing to challenge the Class 5 GDL Road Test.
Whether you are a brand new driver or someone looking to brush up on your skills, Alberta Driver Education & Training has you covered."
            );

        foreach($dataArray as $row){
                echo'<div class="col-lg-4 mb-4">
                    <div class="card text-center h-100">
                       <!-- <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a> -->
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">'.$row["heading"].'</a>
                            </h4>
                            <h5 class ="text-danger">'.$row["price"].'</h5>
                            <p class="card-text">'.$row["information"].'</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                  </div>
                
                ';
        }

            ?>

        <!-- /.col-lg-9 -->

        </div>
    <!-- /.row -->

    </div>
<!-- /.container -->

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
