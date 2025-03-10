<!DOCTYPE html>
<html>
    <title>AUAAI | Careers </title>
<head>
<?php
  ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
session_start();
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
 
     <!-- Required meta tags -->
     <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!-- Favicon-->
<!-- Favicon and apple touch icons-->
       <!-- Required meta tags -->
       <meta charset="utf-8"/>
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
       <!-- Favicon-->
<!-- Favicon and apple touch icons-->
     <!-- Required meta tags -->
     <meta charset="utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
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
<link rel="stylesheet" href="results.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>

<style>
 
 .banner {
  width: 100%;
  min-height: 30vh;
  background:url(cresbg.jpg);
  background-size: cover;
  color: #fff;
  text-align: left;
  padding: 70px 90px 30px;
}

.text-careers {
  font-size: 30px;
  font-weight:800;
  color:#000;
  text-align:center;
}
hr {
  margin: 20px auto;
  width: 50px;
  border-top: 3px solid #3981c9;
}

.featured .topic-res{
  font-size: 25px;
  font-weight: bold;
  color: #0f3182;
  font-family: 'Poppins', sans-serif;
  text-align: center;
}  

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.body{
  margin-bottom: 100px;
  min-height: 100vh;
  width: 100%;
  flex-direction: column;
	gap: 2.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
.container{
  align-items: center;
  height: 350px;
  width: 850px;
  background: #effaff;
  border-radius: 6px;
  padding: 0px 60px 30px 40px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}
.container{
  display: flex;
  justify-content: space-between;
}
.container .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #253f6d;
}
.left-side .details{
  margin: 15px;
  text-align: center;
  margin-bottom: 0px;
}
.left-side .details i{
  font-size: 18px;
  color: #008bc6;
  margin-bottom: 0px;
}
.left-side .details .topic{
  font-size: 15px;
  font-weight: 500;
}
.left-side .details .text-one,
.left-side .details .text-two{
  font-size: 11px;
  color: #99999f;
}
.container .right-side{
  width: 75%;
  margin-left: 65px;
}
.right-side .topic-text{
  align-items: baseline;
  font-size: 26px;
  font-weight: 600;
  color: #008bc6;
  margin-block-end: 0em;
  margin-block-start: 2em;
}
.right-side .topic-job{
  align-items: baseline;
  font-size: 20px;
  font-weight: 600;
  color: #404141;
  margin-block-end: 0.3em;
}
.right-side .topic-cp{
  align-items: baseline;
  font-size: 13px;
  font-weight: 400;
  color: #000000;
  margin-block-end: 1em;

}
.right-side .topic-msg{
  align-items: baseline;
  font-size: 13px;
  font-weight: 450;
  color: #000000;
  margin-block-end: 1.5em;

}
.right-side .topic-qual{
  align-items: baseline;
  font-size: 14px;
  font-weight: 550;
  color: #000000;
  margin-block-end: 0.3em;

}
.right-side .topic-job-qual{
  align-items: baseline;
  font-size: 13px;
  font-weight: 450;
  color: #000000;
  margin-inline-start: 20px;
}
p {
  font-size: 13px;
  display: block;
  margin-block-start: 0em;
  margin-block-end: 0em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
}




.s013{
    min-height: 40vh;
     margin-bottom: -10px;
}

.button-container{
    text-align: center;
}
.s013 h2 {
    font-size: 36px; /* Adjust the font size as needed */
    font-weight: bold;
    color: #fff; /* White font color */
    margin-top: -70px; /* Adjust to move the title higher */
    text-align: center;
}

.s013 p {
    color: #fff; /* White font color for the paragraph */
    text-align: center;
    margin-bottom: 20px;
}

.s013 .btn.btn-dark {
    background-color: #6495ED; /* Change the button background color to blue */
    color: #fff; 
    padding: 10px 20px; 
    font-size: 14px;
}




</style>


<?php
include('resources/includes/navbaruser.php'); // Include the header file
?>


</div>

<div class="s013">
    <div class="s013-mask">
        <form>

            <h2>ADAMSON CAREERS</h2> <!-- New title element -->
            <p>You can easily submit a career posting by clicking on the 'Submit a Form' button. We welcome your career opportunities and look forward to helping you connect with potential candidates at Adamson University.</p>
            <div class="button-container">
                <a href="careerposting.php" class="btn btn-dark btn-lg">Submit a Form</a>
            </div>
        </form>
    </div>
</div>
      </div>
        
        <br><br><br><br>
<!-- <div class="banner">
    <div class="text-careers">ADAMSON UNIVERSITY CAREERS</div>
   </div> -->

   <div class="featured">
    <div class="topic-res">RESULTS</div>
    </div>
  <hr />

  <?php 
$sts = 0; // Status condition
$query = mysqli_query($conn, "SELECT companyname, companyemailaddress, companyaddress, contactno, contactperson, opportunitytype, companyfieldindustry, message FROM careers WHERE status = '$sts'");
while ($row = mysqli_fetch_array($query)) {
?>
<div class="media mb-4">
    <!-- <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt=""> -->
    <div class="media-body">
       
        
    </div>
</div>

   

  <div class="container">

      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one"><?php echo htmlentities($row['companyaddress']); ?></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one"><?php echo htmlentities($row['contactno']); ?></div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one"><?php echo htmlentities($row['companyemailaddress']); ?></div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text"><h5 class="mt-0"><?php echo htmlentities($row['companyname']); ?> </h5></div>
        <div class="topic-job"><?php echo htmlentities($row['opportunitytype']); ?></div>
        <div class="topic-cp">Contact Person: <?php echo htmlentities($row['contactperson']); ?></div>
        <div class="topic-msg"> <?php echo htmlentities($row['message']); ?></div>
        <div class="topic-qual">Hiring Applicants qualified in:</div>
          <div class="topic-job-qual">
            <ul>
              <li><?php echo htmlentities($row['companyfieldindustry']); ?></li>
            
            </ul>
          </div>
      </div>
 
</div>
<hr />  
<!-- <div class="container">
  <div class="content">
    <div class="left-side">
      <div class="address details">
        <i class="fas fa-map-marker-alt"></i>
        <div class="topic">Address</div>
        <div class="text-one">3/F BPI Buendia Center 372 Senator Gil Puyat Avenue, Makati City</div>
      </div>
      <div class="phone details">
        <i class="fas fa-phone-alt"></i>
        <div class="topic">Phone</div>
        <div class="text-one">+63981655241</div>
        <div class="text-two">+6396875649</div>
      </div>
      <div class="email details">
        <i class="fas fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one">bpiph@gmail.com</div>
        <div class="text-two">bpi.inc@gmail.com</div>
      </div>
    </div>
    <div class="right-side">
      <div class="topic-text">Bank of the Philippine Islands</div>
      <div class="topic-job">Internship, Clerkship or Placement</div>
      <div class="topic-cp">Contact Person: Melanie H. Cruz</div>
      <div class="topic-msg">BPI seeks to hire the best people for each job. Contact us for application info!</div>
      <div class="topic-qual">Hiring Applicants qualified in:</div>
        <div class="topic-job-qual">
          <ul>
          <li>Business & Management</li>
          <li>Engineering & Mathematics</li>
          <li>Humanities, Arts & Social Sciences</li>
          </ul>
        </div>
    </div>
</div> 
</div> -->

<!-- <div class="container">
  <div class="content">
    <div class="left-side">
      <div class="address details">
        <i class="fas fa-map-marker-alt"></i>
        <div class="topic">Address</div>
        <div class="text-one">Eastwood City Cyberpark, 188 E. Rodriguez Junior Avenue, Quezon City, Manila, 1110 Philippines</div>
      </div>
      <div class="phone details">
        <i class="fas fa-phone-alt"></i>
        <div class="topic">Phone</div>
        <div class="text-one">+0098 9893 5647</div>
        <div class="text-two">+0096 3434 5678</div>
      </div>
      <div class="email details">
        <i class="fas fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one">bpiph@gmail.com</div>
        <div class="text-two">bpi.inc@gmail.com</div>
      </div>
    </div>
    <div class="right-side">
      <div class="topic-text">Medical Center Trading Corporation</div>
      <div class="topic-job">Part-Time Student Job</div>
      <div class="topic-cp">Contact Person: Kristine Mae F. Fajardo</div>
      <div class="topic-msg">Get paid for promoting laboratory and medical equipments.</div>
      <div class="topic-qual">Hiring Applicants qualified in:</div>
        <div class="topic-job-qual">
          <ul>
          <li>Business & Management</li>
          <li>Food, Hospitality & Personal Services</li>
          <li>Medical & Health Sciences</li>
          <li>Sciences</li>
          </ul>
        </div>
    </div>
</div> 
</div> -->

</body>
</html>
<?php 
}
?>


<!-- ... Other parts of your HTML ... --
