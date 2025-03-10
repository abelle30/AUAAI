<?php 
session_start();
include('resources/includes/db_conn.php');

    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Archives | Home Page</title>
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

  </head>

  <body>
<style>
.card-header{
	color: black;
	background-color: #0096FF;	
}
.btn-secondary{
	background-color: #5F9EA0;
}
.card-title{
    font-family: Tahoma, sans-serif;
    font-weight: bold;
	font-size: 20px
}

h1 {
	font-family: "Gill Sans", sans-serif;
	font-weight: bold;
    color: #0096FF;
    font-size: 34px;
    margin-bottom: 10px;
	text-align: center;
	margin-top: 50px;
}

hr {
    border: none;
    border-top: 7px solid #0096FF;
    width: 80px;
    margin-bottom: 60px;
	margin-top: 20px;
}

</style>
  
	

    <!-- Navigation -->
    <?php
include('resources/includes/header.php');
?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">
	  
	          <!-- Sidebar Widgets Column -->
      <?php include('resources/includes/sidebar.php');?>

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
		  
          <h1>EVENT ARCHIVES</h1>
        <hr>
		
<div class="row">
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM events";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($conn,"select events.id as pid,events.PostTitle as posttitle,events.PostImage,category.CategoryName as category,category.id as cid,subcategory.Subcategory as subcategory,events.PostDetails as postdetails,events.PostingDate as postingdate,events.PostUrl as url from events left join category on category.id=events.CategoryId left join  subcategory on  subcategory.SubCategoryId=events.SubCategoryId where events.Is_Active=1 order by events.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
			
				<div class="col-md-4">
                     <div class="card mb-4 border-2">
                         <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>"height= "220px">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <h5 class="card-title"><?php echo htmlentities($row['posttitle']);?></h5>
                 <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </p>
                           <div class="card-footer text-muted">
              Date <?php echo htmlentities($row['subcategory']);?>
                           
                              <br>
							  <br>
                           <a href="events-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
							</div>
							</div>
                        </div>
						</div>
<?php } ?>
</div>
       

      

          <!-- Pagination -->


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

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('resources/includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
