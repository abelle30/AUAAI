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

    <title>Mentorship| Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>
  
<style>
div.card {
	 background: rgba(255, 255, 255, 0.5) url('bgmentorshipcard.png') no-repeat center center;
	 background-size: 1200px;	 
}
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
	font-size: 25px;
	padding-top: 20px;
}
div.card.body{
	padding-left: 30px;
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

img.card-img-top{
	display: flex;
	max-width: 350px; 
	max-height: 500px; 
    height: auto;
	margin-top: 25px;
	margin-left: 45px;
	margin-bottom: 25px;
}

.mb-1, .my-1 {
    margin-bottom: 4rem!important;
}

ul.pagination {
	justify-content-center: center;
}



</style>
  
	<h1>MENTORSHIP</h1>
        <hr>
		

    <!-- Navigation -->
    <?php include('resources/includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">
	  


        <!-- Blog Entries Column -->


          <!-- Blog Post -->
		  

<div class="row">
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM mentorship";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


        $query = mysqli_query($conn, "SELECT mentorship.id as pid, mentorship.PostTitle as posttitle, mentorship.PostImage, mentorship.description as description, mentorship.date as date FROM mentorship ORDER BY mentorship.id DESC LIMIT $offset, $no_of_records_per_page");

while ($row=mysqli_fetch_array($query)) {
?>
			
			
				
<div class="card mb-1 border-2">
    <div class="row no-gutters">
        <div class="col-md-5">
            <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
        </div>
        <div class="col-md-7"> <!-- Adjusted column size -->
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlentities($row['posttitle']);?></h5>
                <p class="card-text"><?php 
                   $pt = $row['description'];
                    echo (substr($pt, 0));
                ?></p>
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
