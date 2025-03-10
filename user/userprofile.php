<!DOCTYPE html>
<?php

session_start();
$id = null;
include('resources/includes/db_conn.php');
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
 
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!--fonts-->   
 
<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'> 

 
<!--title = the text that shows up on the browser tab-->
 
<title>AUAAI | User Account</title>
 
 
 
<style>
    
/* tooltips */
 
/* Add your CSS styles here */

.container {
    margin-top: 20px;
    padding: 20px; /* Increase padding to make it bigger */
    width: 70%; /* Adjust the width as needed */
    margin-left: auto;
    margin-right: auto;
}

.overview {
    margin-top: 20px;
    padding: 20px;
    text-align: center;
    /* Add other styles as needed */
}


.overview .rectangle2 {
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
}

.overview .rectangle2-text {
    text-align: center;
}

.overview .rectangle2-text b {
    font-weight: bold;
}




/* Style for the parent container */
/* Container for the three columns */
.container1 {
    display: flex; /* Use flexbox to align items in a row */
    justify-content: space-between; /* Distribute items evenly along the row */
    align-items: center; /* Center items vertically */
    margin-top: 20px; /* Add margin for spacing */
}

/* Style for each individual container */
.rectangle3,
.rectangle4 
.rectangle5{
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f7f7f7;
}

.rectangle3 h1,
.rectangle4 h1 {
    font-size: 24px;
    color: #333;
}

.rectangle3-text,
.rectangle4-text {
    margin-top: 20px;
}

.image2 img {
    max-width: 100%;
    height: auto;
}

/* Style for the links */
.rectangle3-text a,
.rectangle4-text a {
    color: blue;
    text-decoration: none;
    font-weight: bold;
}


   
 
</style>

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
 
</head>
 
 
 
 
 
 
 
<body>
 
 
 

 
<?php
include('resources/includes/navbaruser.php');
?>

<div class="rectangle1-text">
       
</div>
</div>

<style>
    .table.no-border tr > td,
    .table.no-border tr > th {
        border: none;
    }
    .center-heading {
  text-align: center;
}

</style>

<div class="container" style="border: none;">
<h1 class="center-heading"> OVERVIEW</h1> 
    <div class="row">
        <div class="overview text-center"> <!-- Added text-center class -->
        
            <table class="table no-border">
                <tbody>
                    <tr>
                        <td class="text-left"><b>Name:</b></td>
                        <td class="text-left"><?php echo htmlentities($_SESSION['fname']); ?> <?php echo htmlentities($_SESSION['mname']); ?> <?php echo htmlentities($_SESSION['lname']); ?></td>
                    </tr>
                    <tr>
                    <td class="text-left"><b>Email:</b></td>
                        <td class="text-left"><?php echo htmlentities ($_SESSION['email']); ?></td>
                    </tr>
                    <tr>
                        <td class="text-left"><b>Year Graduated:</b></td>
                        <td class="text-left"><?php echo htmlentities($_SESSION['year']); ?></td>
                    </tr>
                    <tr>
                        <td class="text-left"><b>Course:</b></td>
                        <td class="text-left"><?php echo htmlentities($_SESSION['course']); ?></td>
                    </tr>
                    <tr>
                        <td class="text-left"><b>Home Address:</b></td>
                        <td class="text-left"><?php echo htmlentities($_SESSION['lot']); ?></td>
                    </tr>
                    <tr>
                        <td class="text-left"><b>Mobile Number:</b></td>
                        <td class="text-left"><?php echo htmlentities($_SESSION['mobileno']); ?></td>
                    </tr>
                    <tr>
                    <td class="text-left"><b>Alumni ID:</b> <?php 
                    $user_id_query = "SELECT id FROM alumniid WHERE PersonalEmailAddress = '" . $_SESSION['email'] . "'";
                        
                        // Execute the query and fetch the user's id
                        $user_id_result = mysqli_query($conn, $user_id_query);
                        
                        if ($user_id_result && mysqli_num_rows($user_id_result) > 0) {
                            $user_id_row = mysqli_fetch_assoc($user_id_result);
                            $id = $user_id_row['id'];
                        }
                        $query = mysqli_query($conn, "SELECT id, status FROM alumniid where id = '$id' ");
                        
                        if (!$query) {
                            die('Error in the query: ' . mysqli_error($conn));
                        }
                        
                        // Check if any rows were returned
                        if (mysqli_num_rows($query) > 0) {
                            $row = mysqli_fetch_assoc($query);
                                $id = $row['id'];
                                $status = $row['status'];
                        
                                // echo "User ID: $id, Status from database: $status<br>";
                        
                                if ($status == 0) {
                                    echo "<td class='text-left'>Completed</td>";
                                } elseif ($status == 1) {
                                    echo "<td class='text-left'>In process</td>";
                                } else {
                                    echo "<td class='text-left'>No record<br></td>";
                                }
                            
                        } else {
                            echo "<td class='text-left'>No records found</td>";
                        }

                    ?></td>
                   
                        
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- <div class="container1">
    <div class="rectangle3 col-md-4">
        <h1>Profile</h1>
        <center>
            <div class="image2"><img src="http://localhost/auaailatest/AUAAI/AUAAI/user/resources/images/user-edit.png" alt="Profile Image"></div>
            <div class="rectangle3-text">
                <div class="icon2"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div>
            </center>
            <center>Keep your personal information up-to-date<p> </center>
            <br>
            <center><a href="UPDATE PROFILE" style="color: blue;">UPDATE PROFILE ></a></center>
        </div>
    </div>

    <div class="rectangle4 col-md-4">
        <h1>Password</h1>
        <center>
            <div class="image2"><img src="http://localhost/auaailatest/AUAAI/AUAAI/user/resources/images/key2.png" alt="Password Image"></div>
            <div class="rectangle3-text">
                <div class="icon2"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div>
            </center>
            <center>Make your password stronger, or change it if someone else knows it.<p> </center>
            <br>
            <center><a href="CHANGE PASSWORD" style="color: blue;">CHANGE PASSWORD ></a></center>
        </div>
    </div>

    <div class="rectangle4 col-md-4">
        <h1>Password</h1>
        <center>
            <div class="image2"><img src="http://localhost/auaailatest/AUAAI/AUAAI/user/resources/images/key2.png" alt="Password Image"></div>
            <div class="rectangle3-text">
                <div class="icon2"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div>
            </center>
            <center>Make your password stronger, or change it if someone else knows it.<p> </center>
            <br>
            <center><a href="CHANGE PASSWORD" style="color: blue;">CHANGE PASSWORD ></a></center>
        </div>
    </div>
</div> -->



<div class="container ">
    <div class="row">
        <div class="col-md-4">
            <div class="rectangle3">
            <h1>Update Profile</h1>
                <div class="rectangle3-text">
                    <div class="icon2"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div>
                </center>
                <center>Keep your personal information up-to-date.<p> </center>
                <br>
                <center><a href="editprofile.php?id=<?php echo $_SESSION['id']; ?>" style="color: blue;">UPDATE PROFILE ></a></center>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="rectangle3">
            <h1>Update Password</h1>
                <div class="rectangle3-text">
                    <div class="icon2"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div>
                </center>
                <center>Make your password stronger, or change it if someone else knows it<p> </center>
                <br>
                <center><a href="changepassword.php?id=<?php echo $_SESSION['id']; ?>" style="color: blue;">CHANGE PASSWORD ></a></center>
                </div>
            </div>
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