<?php

session_start();
include('resources/includes/db_conn.php');



?>


<?php

// Generating CSRF Token - You should implement this part


if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
 }

 if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$postingDate=$_POST['postingDate'];
$status=$_POST['status'];
$usertype=$_POST['usertype'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($conn,"insert into comments(postid,name,email,postingDate,usertype,comment,status) values('$postid','$name','$email','$postingDate','$usertype','$comment','$status')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
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
    <title>News Page</title>

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
     

            <?php
$pid = intval($_GET['nid']);
$query = mysqli_query($conn, "SELECT newsandannouncements.newstitle,newsandannouncements.author, newsandannouncements.newsdescription, newsandannouncements.author,newsandannouncements.time, newsandannouncements.date, newsandannouncements.image, newsfilter.FilterName, newsfilter.id as cid, newsfilter.description 
FROM newsandannouncements 
LEFT JOIN newsfilter ON newsfilter.id = newsandannouncements.typeid 
WHERE newsandannouncements.id = '$pid'");
while ($row = mysqli_fetch_array($query)) {
?>
        
        <div class="col-md-8">
            <!-- Blog Post -->
            <div class="card mb-4">
      
      <div class="card-body">
      <h2 class="card-title"><?php echo htmlentities($row['newstitle']);?></h2>
              <p><b>Category : </b> <?php echo htmlentities($row['FilterName']);?></a> 
             | <b>Author:</b> <?php echo htmlentities($row['author']);?>
                | <b> Published Date: </b><?php echo htmlentities($row['date']);?>  
          <hr /> 

<img class="img-fluid rounded" src="/admin/resources/images/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['newstitle']);?>">

        
       
      </div>
      <div class="card-footer text-muted">
       <p class="card-text"><?php 
$pt=$row['description'];
        echo  (substr($pt,0));?></p>
      <?php } ?>
      </div>
      
    </div>


    


    <div class="row" style="margin-top: 30px">
<div class="col-md-12"> <!-- This div takes 12 columns -->
  <div class="card my-9">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
      <form name="Comment" method="post">
    <input type="hidden" name="csrftoken" value="<?php echo isset($_SESSION['token']) ? htmlentities($_SESSION['token']) : ''; ?>" />
        <div class="form-group">
          <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" required>
        </div>
        <div class="form-group">
          <input type="text" name="email" id="email" class="form-control" placeholder="Email"  value="" required>
        </div>
        <input type="hidden" name="usertype"  id="usertype" value="guest">
        <input type="hidden" name="status"  id="status" value="unverified">
        <input type="hidden" name="postingDate"  id="postingDate" value="">
        <div class="form-group">
          <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

<script>
    // Get the current date
    var currentDate = new Date();

    // Format the date as yyyy-mm-dd (assuming you want this format)
    var formattedDate = currentDate.toISOString().split('T')[0];

    // Set the formatted date as the value of the input field
    document.getElementById("postingDate").value = formattedDate;
</script>
            <!-- Comment Display Section -->
            <?php 
 $sts=1;
 $query=mysqli_query($conn,"select name,comment,postingDate from comments where postid='$pid' and status='verified'");
while ($row=mysqli_fetch_array($query)) {
?>
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                  <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span>
            </h5>
           
             <?php echo htmlentities($row['comment']);?>            </div>
          </div>
<?php } ?>


 

 <!-- Categories Box (Right Sidebar) -->
 <div class="col-md-4">
 <div class="col-15 justify-content-center text-center px-3 py-3" style="background-color: #9DDFF9; width:350px; border-radius: 30px; margin-top: -770px; position: relative; left: 800px;">
                <div class="row text-center justify-content-center px-5 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-square-fill" viewBox="0 0 20 20">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                    </svg>&nbsp;&nbsp;<h3>Categories</h3>
                </div>

                <div class="row text-center justify-content-center px-5 pt-3 mx-auto" style="background-color: rgb(255, 255, 255); border-radius: 10px; border: 1px solid black; margin: 3%; align-items: center;">
                    <ul>
                        <div class="panel-body">
                            <div class="form-group">
                                <a href="newsfilter.php?typid=<?php echo htmlentities($row['id'])?>">All</a>

                                <?php
                                $query = mysqli_query($conn, "select id,FilterName from newsfilter");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <li>
                                        <a href="newsfilter.php?typid=<?php echo htmlentities($row['id']) ?>"><?php echo htmlentities($row['FilterName']); ?></a>
                                    </li>
                                <?php } ?>
                            </div>
                            <!-- Display Article ONLY Months with Article -->
                            <ul class="nav nav-pills flex-column text-sm" id="customMonthList"></ul>
                        </div>
                    </ul>
                </div>
            </div>

            <!-- Year Box (Right Sidebar) -->
            
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
