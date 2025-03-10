<!doctype html>


<?php 
include('resources/includes/db_conn.php');
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!-- Favicon-->
<!-- Favicon and apple touch icons-->
      <!-- Required meta tags -->
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <!-- Favicon-->


<!--Vendors Resources-->
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


        <title>Home</title>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5NJ9EYD133"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-5NJ9EYD133');
        </script>
    </head>
    <body>
        <div id="all">
            <!--HEADER-->
             <!-- Top bar-->

            <!-- Top bar-->
       
            <?php
include('resources/includes/navbaruser.php');
?>


 <!--START CONTENT-->





    <section>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="resources/images/adamsonlogoheader.png" class="d-block w-100" alt="...">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
              <rect width="100%" height="100%" fill="#777" /></svg>
  
            <div class="container">
              <div class="carousel-caption text-left">
           
             
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="resources/images/adamsonlogoheader.png" class="d-block w-100" alt="...">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
              <rect width="100%" height="100%" fill="#777" /></svg>
  
            <div class="container">
              <div class="carousel-caption">
              
               
             
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="resources/images/adamsonlogoheader.png" class="d-block w-100" alt="...">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
              <rect width="100%" height="100%" fill="#777" /></svg>

  
            <div class="container">
              <div class="carousel-caption text-right">
            
              
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev " href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  
  
    
    </section> 

    

    <div class="row">
    <div class="col-md-6 justify-content-center px-2 py-1" style="background-color: #9DDFF9; height:fit-content; width: 250px; border-radius:10px; align-items:flex-end; margin-bottom: 20px;">
        <h2>Welcome Back, Alumni!</h2>
    </div>
</div>



  <div class="row">
  <div class="col-md-6 justify-content-center">
    <!-- Posts -->
    <?php $query = mysqli_query($conn, "SELECT
    events.id AS pid,
    events.PostTitle AS posttitle,
    events.PostImage,
    events.Author, 
    events.description, 
    category.CategoryName AS category,
    category.id AS cid,
    subcategory.Subcategory AS subcategory,
    events.PostDetails AS postdetails,
    events.PostingDate AS postingdate,
    events.PostUrl AS url
FROM events
LEFT JOIN category ON category.id = events.CategoryId
LEFT JOIN subcategory ON subcategory.SubCategoryId = events.SubCategoryId
WHERE events.Is_Active = 1
ORDER BY events.id DESC");
while ($row=mysqli_fetch_array($query)) {
?>
      <div class="card mb-" style="max-width: 700%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="resources/images/<?php echo htmlentities($row['PostImage']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>" class="img-fluid rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title" style="color: black"><?php echo htmlentities($row['posttitle']); ?></h4>
              <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid']) ?>"><?php echo htmlentities($row['category']); ?></a> </p>
              <h5 class="card-title" style="color: black">BY <?php echo htmlentities($row['Author']); ?></h5>
              <p> Posted on <?php echo htmlentities($row['postingdate']); ?></p>
              <p class="card-text" style="text-align: justify"><?php echo htmlentities($row['description']); ?></p>
              <a href="events-details.php?nid=<?php echo htmlentities($row['pid']) ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  <div class="col-6">
    <!-- Announcements -->
    <div class="col-3 justify-content-center text-center px-3 py-3" style="background-color: #9DDFF9; height: fit-content; width: 250px; border-radius: 30px; align-items: flex-end;">
      <!-- Announcement 1 -->
      <div class="row text-center justify-content-center px-5 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-square-fill" viewBox="0 0 20 20">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
        </svg>&nbsp;&nbsp;
        <h3>ANNOUNCEMENTS</h3>
      </div>
      <!-- Announcement 2 -->
      <div class="row text-center justify-content-center px-5 pt-3 mx-auto" style="background-color: rgb(255, 255, 255); border-radius: 10px; border: 1px; border-style: solid; border-color: black; margin: 3%; align-items: center;">
        <p style="font-size: 24px;"><b>Alumni Mass</b></p>
        <p style="font-size: 20px;">Tuesday, March 22, 2016</p>
      </div>
      <div class="row text-center justify-content-center px-5 pt-3 mx-auto" style="background-color: rgb(255, 255, 255); border-radius: 10px; border: 1px; border-style: solid; border-color: black; margin: 3%; align-items: center;">
        <p style="font-size: 24px;"><b>Alumni Mass</b></p>
        <p style="font-size: 20px;">Tuesday, March 22, 2016</p>
      </div>
      <!-- Add more announcements as needed -->
    </div>
  </div>
</div>



  

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

      <style>

.h5, h5 {
    font-size: 1.25rem;

    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: blue;
    color: inherit;
}
        </style>
  </html>
  
  <?php
include('resources/includes/footer.php');
?>
