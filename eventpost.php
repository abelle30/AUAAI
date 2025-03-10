<?php

include('resources/includes/db_conn.php');




?>

<!DOCTYPE html>
<html lang="en">

<head>
     <?php
    ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
    
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Event Archives | Home Page</title>

    <!-- Your CSS and JavaScript includes -->
<!--Bootstrap CSS-->
<link rel="stylesheet" href="resources/vendors/bootstrap-4.6.0/css/bootstrap.min.css"/>
<!--Font Awesome CSS-->
<link rel="stylesheet" href="resources/vendors/font-awesome/css/all.min.css"/>
<!-- Bootstrap Select-->
<link rel="stylesheet" href="resources/css/custom.css">


<link rel="stylesheet" href="resources/css/css.css">
<!-- Bootstrap Select-->
<link rel="stylesheet" href="resources/vendors/bootstrap-select/css/bootstrap-select.min.css">
<!-- owl carousel-->
<link rel="stylesheet" href="resources/vendors/owl.carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="resources/vendors/owl.carousel/assets/owl.theme.default.css">
<!-- theme stylesheet-->
<link rel="stylesheet" href="resources/css/style.blue.css" id="theme-stylesheet">
<!-- bootstrap tag editor stylesheet-->
<link rel="stylesheet" href="resources/vendors/bootstrap-tag-input/tagsinput.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--Vendors Resources-->
<!--Bootstrap CSS-->
<link rel="stylesheet" href="resources/vendors/bootstrap-4.6.0/css/bootstrap.min.css"/>
<!--Font Awesome CSS-->
<link rel="stylesheet" href="resources/vendors/font-awesome/css/all.min.css"/>
<!-- Bootstrap Select-->
<link rel="stylesheet" href="resources/css/custom.css">
<!-- Bootstrap Select-->
<link rel="stylesheet" href="resources/vendors/bootstrap-select/css/bootstrap-select.min.css">
<!-- owl carousel-->
<link rel="stylesheet" href="resources/vendors/owl.carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="resources/vendors/owl.carousel/assets/owl.theme.default.css">
<!-- theme stylesheet-->
<link rel="stylesheet" href="resources/css/style.blue.css" id="theme-stylesheet">
<!-- bootstrap tag editor stylesheet-->
<link rel="stylesheet" href="resources/vendors/bootstrap-tag-input/tagsinput.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
    /*!
 * Start Bootstrap - Modern Business (https://startbootstrap.com/template-overviews/modern-business)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-logomodern-business-nav/blob/master/LICENSE)
 */

body {
  padding-top: 54px;
}

@media (min-width: 992px) {
  body {
    padding-top: 56px;
  }
}

.carousel-item {
  height: 65vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.portfolio-item {
  margin-bottom: 30px;
}

.card-title{
    color:#000;
}

    </style>

</head>

<body>
    <!-- Include the navigation bar -->
    <?php include('resources/includes/header.php'); ?>

    <div class="container">
        <div class="row" style="margin-top: 4%">
            <!-- Include the sidebar -->
            <?php include('resources/includes/sidebar.php'); ?>

            <?php
$pid=intval($_GET['nid']);
$query = mysqli_query($conn, "SELECT upcomingevents.id as pid, upcomingevents.upcomingevent as upcomingevent, upcomingevents.info, upcomingevents.place as place, upcomingevents.date as date, upcomingevents.category as category, upcomingevents.image as image, upcomingevents.description as description FROM upcomingevents where upcomingevents.id = '$pid'");
while ($row=mysqli_fetch_array($query)) {
?>
        
        <div class="col-md-8">
            <!-- Blog Post -->
            <div class="card mb-4">
      
      <div class="card-body">
      <h2 class="card-title"><?php echo htmlentities($row['upcomingevent']);?></h2>
              <p><b>Category : </b> <a href="category.php?category=<?php echo htmlentities($row['category'])?>"><?php echo htmlentities($row['category']);?></a> 
              | <p><b>Location : </b><?php echo htmlentities($row['place']);?></a> | 
   <b> Posted on </b><?php echo htmlentities($row['date']);?></p>
          <hr />

<img class="img-fluid rounded" src="resources/images/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['upcomingevent']);?>">

        <p class="card-text"><?php 
$pt=$row['description'];
        echo  (substr($pt,0));?></p>
       
      </div>
      <div class="card-footer text-muted">
       
      <?php } ?>
      </div>
    </div>

 
</div>
            </div>
        </div>
          
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include('resources/includes/footer.php'); ?>

    <script type="text/javascript" src="resources/vendors/jquery/jquery.min.js" ></script>
  <script type="text/javascript" src="resources/vendors/jquery-validation/jquery.validate.min.js" ></script>
  <script type="text/javascript" src="resources/vendors/popper.js/umd/popper.min.js" ></script>
  <script type="text/javascript" src="resources/vendors/bootstrap-4.6.0/js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="resources/js/general.js" ></script>
  <script type="text/javascript" src="resources/js/front.js" ></script>
  
  <!--Specifics js for website-->
  <script type="text/javascript" src="resources/vendors/jquery.cookie/jquery.cookie.js"></script>
  <script type="text/javascript" src="resources/vendors/jquery.counterup/jquery.counterup.min.js"></script>
  <script type="text/javascript" src="resources/vendors/waypoints/lib/jquery.waypoints.min.js" ></script>
  <script type="text/javascript" src="resources/vendors/owl.carousel/owl.carousel.min.js" ></script>
  <script type="text/javascript" src="resources/vendors/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js" ></script>
  <script type="text/javascript" src="resources/js/jquery.parallax-1.1.3.js" ></script>
  <script type="text/javascript" src="resources/vendors/bootstrap-select/js/bootstrap-select.min.js" ></script>
  <script type="text/javascript" src="resources/vendors/jquery.scrollto/jquery.scrollTo.min.js" ></script>
  
  <script type="text/javascript" src="resources/vendors/bootstrap-tag-input/tagsinput.js" ></script>
  <!--<script src="resources/js/front_template.js" type="text/javascript"></script>-->

</body>

</html>
