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

$Registry_name ="Alberta Driver Education";

if((String)$_GET['course']==55)
{
    $heading ="class 5 gdl basic course";
    $price ="$595.00";
    $information="All drivers in Alberta are expected to participate in a licensing process that is completed gradually to provide the skills and knowledge to follow the rules of the road.
<br><br>
The graduated licensing program or GDL is a 2-part process that could take up to 2 years to complete. Typically, a learner at the age of 14 or 15 starts the GDL process by going to an authorized Alberta registry agent location to take a class 7 knowledge test.
<br><br>
Once passed, the student must hold a class 7 Learner's license for a minimum of 12 months without any infractions that could affect their eligibility at the time of a class 5 basic road test. This is the first of the two road tests required to obtain a full license.
<br><br>
Once you obtain your class 7 learners license, you can enroll into driver training at any time. Although driving schools in Calgary all adhere to Alberta Transportation guidelines, the quality of driver's ed is very important. Learning how to drive with good habits is ideal for your safety and the safety of those on the road around you.";
}elseif ((int)$_GET['course']==56)
{
    $heading ="Brush Up Course";
    $price ="$125.00";
    $information="Those who wish to challenge a road test but have not had recent experience or wish to take a higher class road test will find brush up hours catering to their needs.
<br><br>
A full class 5 basic drivers ed course may not be what you're looking for. You already may know how to drive, but just need a couple extra brush-up hours to hone some specific skills, or need some pointers on how to pass your road test. Adding brush-up hours to your existing driver training is ideal.
<br><br>
Brush up hours are for a variety of individuals such as people who have received class 7 learner’s license but want more instruction. Drivers who have recently moved to Alberta and are unfamiliar with the rules of the road here will also find brush up hours convenient and helpful when they are preparing for the road test.
<br><br>
If you feel that you need more confidence through practice or even just want to work on specific techniques before your road test then the brush up course is perfect for you";
}elseif ((int)$_GET['course']==57)
{
    $heading ="Newcomer Course";
    $price ="$125.00";
    $information="Drivers who have had driving experience outside of Canada but are uncertain about driving or road laws in Alberta will benefit from taking Alberta Driver Education and Training Brush Up courses.
<br><br>
Canada has its own specific set of rules for driving and some of these rules vary province to province. There is also the added challenge of Canadian weather which can create some of the most dangerous road conditions on the planet and is well worth preparing for.
<br><br>
Our Brush Up course is available to provide the knowledge to drive safely in Alberta and help prepare students for a class 5 road test. Alberta Driver Education & Training can provide lessons with instructors who speak in English, Cantonese, or Mandarin.
<br><br>
In Alberta, drivers from out of country may drive with an international license. However, if you intend to drive for longer than 90 days or intend to stay in Alberta, you must exchange your license for an Alberta driver's license.";
}else{
    $description = "not working";
}


?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="text ml-5" > <h2><?php echo $Registry_name?></h2></div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="Testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="RoadTesting.php">Road Testing
                        <span class="sr-only">(current)</span>
                    </a>
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
                    <a class="text-danger">Package Info</a>
                </h4>
                <?php
                echo'<div class="card w-90 ml-lg-5 bg-dark">
                    <div class="card h-100">
                       <!-- <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a> -->
                        <div class="card-body text-md-left">
                            <h4 class="card-title row-col-sm-4">
                                <a>'.$heading.'</a>
                            </h4>
                            <p class="card-text">'.$information.'</p>
                        </div>
                        
                        <div class="card-footer">
                            <h5 class="col-md-12 text-danger">
                                Course Price:'.$price.'
                                <button type="button" class="btn btn-primary float-right">Enroll Now</button>
                            </h5>
                        </div>
                    </div>
                  </div>';
                ?>
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
