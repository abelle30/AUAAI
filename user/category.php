<?php


include('resources/includes/db_conn.php');



?>

<!DOCTYPE html>
<html lang="en">

  <head>
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

    <title>Event | Home Page</title>
  <!-- Favicon-->
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
   
<!-- Favicon and apple touch icons-->
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
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Archives | Category  Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   <?php include('resources/includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">
	  
	          <!-- Sidebar Widgets Column -->
      <?php include('resources/includes/sidebar2.php'); ?>

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
		  
<style>
.card-header{
	color: white;
	background-color: #0096FF;	
}
.btn-secondary{
	background-color: #5F9EA0;
}
.card-title{
    font-family: Tahoma, sans-serif;
    font-weight: bold;
	font-size: 25px
}
</style>

<?php 
        if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
}

     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM upcomingevents";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


        $query = mysqli_query($conn, "SELECT upcomingevents.id as pid,upcomingevents.upcomingevent,upcomingevents.info,upcomingevents.place as category,upcomingevents.date as date,upcomingevents.category as category,upcomingevents.image,upcomingevents.description 
        FROM upcomingevents 
        LEFT JOIN categoryevents ON categoryevents.id = upcomingevents.CategoryId 
        WHERE upcomingevents.CategoryId = '" . $_SESSION['catid'] . "' 
        ORDER BY upcomingevents.id DESC LIMIT $offset, $no_of_records_per_page");








$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>
<h1><?php echo htmlentities($row['upcomingevent']);?></h1>
          <div class="card mb-4">
       <img class="card-img-top" src="admin/resources/images/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['upcomingevent']);?> "height="300px">
            <div class="card-body">
              <h2 class="card-title" style="color:black;"><?php echo htmlentities($row['upcomingevent']);?></h2>
              <?php echo htmlentities($row['description']);?>
              <br>
              <br>

           
              <a href="upcomingevents-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>

            
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['date']);?>
           
            </div>
          </div>
<?php } ?>

    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
<?php } ?>
       

      

          <!-- Pagination -->




        </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('resources/includes/footer.php'); ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
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
</head>
  </body>

</html>
