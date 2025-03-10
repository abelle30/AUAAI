<!doctype html>
<html lang="en">

 <?php
 include('resources/includes/db_conn.php'); 


 ?>


 
<?php session_start();

if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] !== "alumni") {
$server_name="";
$db_username ="u348190438_dbalumni";
$db_password="AUAAIportal2022";
$db_name="u348190438_dbalumni";


// Update online status to 'online' before destroying the session
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($conn,"UPDATE userlog  SET logout = '$ldate' WHERE email = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
mysqli_close($conn);
unset($_SESSION['user_token']);
session_unset();
session_destroy();

header("location: https://auaaiconnect.online/login.php");
exit();
}
?>


<html lang="en">
    <head>
        <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        ?>
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
        <div class="">
            <?php
include('resources/includes/navbaruser.php');
?>
        </div>
               
              <style>
    /* Set a fixed height for the carousel items */
    #myCarousel .carousel-item {
        height: 600px; /* Adjust the height as needed */
    }

    /* Ensure images fill the entire carousel item without distortion */
    #myCarousel img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style> 
               
                    
        <div id="all">
            <!--HEADER-->
                <!-- Top bar-->
                    <!--START CONTENT-->

           <?php
$query = mysqli_query($conn, "SELECT 
    slider.id,
    slider.image,
    slider.image2,
    slider.image3
FROM slider
WHERE slider.id = '1'");

// Fetch the result from the query
$row = mysqli_fetch_assoc($query);

// Assign values to variables
$id = $row['id'];
$image = $row['image'];
$image2 = $row['image2'];
$image3 = $row['image3'];
?>

<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/admin/resources/images/<?php echo $image; ?>" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <!-- Your caption content for the first slide -->
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/admin/resources/images/<?php echo $image2; ?>" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- Your caption content for the second slide -->
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/admin/resources/images/<?php echo $image3; ?>" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <!-- Your caption content for the third slide -->
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

        </div>
             
             <br>
            

            <div class="container">
                <div class="row">
                    <div class="col-md-4 justify-content-center " style="background-color: #9DDFF9; border-radius:10px; align-items:flex-end; ">
                        <h3>Welcome, Alumnus!</h3>
                        
                    </div>
                </div>
            </div>

<br>
<br>

        <div class="container">
            <div class="row">
                <div class="col-md-5 justify-content-center px-2 py-1"  height:fit-content; width: 10px; border-radius:10px; align-items:flex-end; ">
                    <h2><i>Here are the Alumni Events!</i></h2>
                </div>
            </div>
        </div>


<br>
<br>

        <div class="container">
            <div class="row">
                        <div class="col-md-8">
                            <!-- Posts -->
                                <?php 
        
                                if (isset($_GET['pageno'])) {
                                  $pageno = $_GET['pageno'];
                              } else {
                                  $pageno = 1;
                              }
                              $no_of_records_per_page = 3;
                              $offset = ($pageno-1) * $no_of_records_per_page;
                      
                              $total_pages_sql = "SELECT COUNT(*) FROM events";
                              $result = mysqli_query($conn,$total_pages_sql);
                              $total_rows = mysqli_fetch_array($result)[0];
                              $total_pages = ceil($total_rows / $no_of_records_per_page);
                         
                                $query = mysqli_query($conn, "SELECT
                                events.id AS pid,
                                events.PostTitle AS posttitle,
                                events.PostImage,
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
                                    ORDER BY events.id DESC LIMIT $offset, $no_of_records_per_page");
                                    while ($row=mysqli_fetch_array($query)) {
                                    ?>
      
                            <div class="card mb-9" style="max-width: 700%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../admin/resources/images/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']); ?>" class="img-fluid rounded-start">
                                    </div>
                                    
                                    <div class="col-md-8">
                                        <div class="card-body">
                                              <h4 class="card-title" style="color: black"><?php echo htmlentities($row['posttitle']); ?></h4>
                                              <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid']) ?>"><?php echo htmlentities($row['category']); ?></a> </p>
                                         
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
    
    
                            <?php
                                $query = mysqli_query($conn, "SELECT
                                upcomingevents.id AS pid,
                                upcomingevents.upcomingevent,
                                upcomingevents.date
                                FROM upcomingevents");
                        
                                // Create an array to store the upcoming events
                                $upcomingEvents = [];
                                
                                $count = 0; // Initialize a counter variable
                                
                                while ($row = mysqli_fetch_assoc($query)) {
                                    if ($count < 5) { // Limit the display to 5 events
                                        $upcomingEvents[] = $row;
                                        $count++; // Increment the counter
                                    } else {
                                        break; // Exit the loop once 5 events have been collected
                                    }
                                }
                            ?>

                        <div class="col-md-4">
                            <!-- Upcoming Events -->
                            <div class="p-4" style="background-color: #9DDFF9; border-radius: 30px;">
                                <div class="text-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-square-fill" viewBox="0 0 20 20">
                                        <!-- SVG path here -->
                                    </svg>
                                    <h3 class="mt-2">Upcoming Events</h3>
                                </div>
                                
                                <div class="row text-center justify-content-center px-5 pt-3 mx-auto" style="background-color: rgb(255, 255, 255); border-radius: 10px; border: 1px solid black; margin: 3%;">
                            
                                            <?php
                                            // Loop through the $upcomingEvents array to display each event in separate boxes
                                            foreach ($upcomingEvents as $event) {
                                                ?>
                                                <div class="col-md-12 mb-3">
                                                    <div style="border: 1px solid #ccc; padding: 10px; border-radius: 10px;">
                                                        <p style="font-size: 24px;"><b><?php echo htmlentities($event['upcomingevent']); ?></b></p>
                                                        <p style="font-size: 20px;"><?php echo htmlentities($event['date']); ?></p>
                                                        <!-- Add any additional event information here -->
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                </div>
                            </div>
                        </div>
            </div>

                        <ul class="pagination justify-content-center mb-4">
                            <li class="page-item"><a href="?pageno=1" class="page-link">First</a></li>
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
                            </li>
                            <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
                        </ul>
        </div>





        <!-- /.row -->

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
