<!DOCTYPE html>
        <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        ?>
<?php
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
$pid = intval($_SESSION['id']); // Retrieve user ID from session
$msg = ''; // Initialize the message variable

if (isset($_POST['submit'])) {
    if (isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        // You're trying to access $stored_password, but it's not defined.
        // You should fetch the user's current password from the database instead.
        $query = mysqli_query($conn, "SELECT password FROM users WHERE id='$pid'");
        $row = mysqli_fetch_assoc($query);
        $stored_password = $row['password'];

        if ($current_password === $stored_password) {
            if ($new_password === $confirm_password) {
                $sql = mysqli_query($conn, "UPDATE users SET password='$new_password' WHERE id='$pid'");
                $msg = "Password Updated!";
                // Handle the password update success
            } else {
                $msg = "New password and confirm password do not match.";
                // Handle the case where new password and confirm password do not match
            }
        } else {
            $msg = "Current password is incorrect.";
            // Handle the case where current password is incorrect
        }
    } else {
        $msg = "Please fill in all fields.";
        // Handle the case where some fields are not set in the form submission
    }
}
?>
 
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!--fonts-->   
 
<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'> 

 
<!--title = the text that shows up on the browser tab-->
 

 
 
 
<style type="text/css">
 
 
 

/* tooltips */
 
s-m-t-tooltip {
 
    max-width:300px;
 
    padding:5px;
 
    padding-top:3px;
 
    padding-bottom:3px;
 
    margin:5px 0px 0px 10px;
 
    background-color:#fff;
 
    font-family: 'karla', sans-serif;
 
    font-size:8px;
 
    font-weight:normal;
 
    letter-spacing:1px;
 
    line-height:8px;
 
    text-transform:uppercase;
 
    color:#a1a1a1;
 
    z-index:2147483647;
 
}
 
 
 
/* scrollbar */
 

body {
    overflow: scroll;
}
 


b{
    font-family:georgia,garamond,serif;


}

 
 
 
/* general */
 
 
 
body {  
 
    background:#F7F7F7;
 
    color:000;
 
 
 
    line-height:15px;
 
    font-size:10px;
 
    margin:0;
 
    text-align:left;
 
}
 
 
 
.title {
 
    position:absolute;
 
    font-size:22px;
 
    font-weight:bold;
 
    color:#000;
    left:40px;
 
    top:30px;
 
    padding-right:10px;
 
}
 
 
 
.navi {
 
    position:fixed;
 
    left:40px;
 
    top:63px;
 
    color:#A1A1A1;
 
    word-spacing:8px;
 
    font-size:12px;
 
    letter-spacing:1.5px;
 
    text-transform:uppercase;
 
}
 
 
 
 
 
a:hover {
 
    color:#000;
 
}
 
 
 
a {
 
    text-decoration:none;
 
    -webkit-transition:0.6s all;
 
    -moz-transition:0.6s all;
 
    -o-transition:0.6s all;
 
    transition:0.6s all;
 
    color:#000;
 
}
 
 
 
h1 {
    color:#000;
 
    font-size:13px;
 
    font-weight:bold;
 
    text-transform:uppercase;
 
    letter-spacing:1.5px;
 
    display:inline;
 
}
 
 
 
i {
 
    font-size:13px;
 
    letter-spacing:1px;
 
}
 
 
 
 
 
/* rectangle 1 */
 
 
 
.rectangle1 {
 
    position:fixed;
 
    width:650px;
 
    background:#ffffff;
 
    height:400px;
 
    left:500px;
 
    top:50%;
 
    transform: translate(-50%, -50%);
 
   
 
 
}

 
 
 
.rectangle1-text {
 
  
 
    display: inline-block;
  

    position:absolute;
 
 
    font-family:'karla',sans-serif;
    

    letter-spacing:0.5px;
 
    
 
    transform: translate(-0%, -50%);
 
   
    color:#000;
    font-size:20px;
 
    margin-top:30px;
    margin-left:-40px;
 
  
 
    

 
}
 
 
 
.image {
 
    width:450px;
 
    position:relative;
 
    height:auto;
 
    left:0px;
 
    top:0px;
 
}
 
 
 
.image img{
 
    width:180px;
 
    height:180px;
 
    border-radius:150px;
 
}
 
 
 
 
 
/* icons */
 
 
 
.icon {
 
    padding-left:25px;
 
    display:inline;
 
    margin-top:70px;
 
    position:absolute;
 
}
 


 
.image2 {
 
 width:450px;

 position:relative;

 height:auto;

 left:-74px;

 top:0px;

}



.image2 img{

 width:100px;

 height:100px;

 border-radius:150px;

}





/* icons */



.icon2 {

 padding-left:25px;

 display:inline;

 margin-top:70px;

 position:absolute;

}

 
 
i {
 
   width:10px;
 
   text-align:center;
 
}
 
 
 
/* rectangle 2 */
 
 
 
.rectangle2 {
 
    position:fixed;
 
    width:650px;
 
    background:#ffffff;
 
    height:200px;
 
    left:800px;
    text-align:left;
    top:260px;
 
    transform: translate(-50%, -50%);
 
    font-size:30px;
    color:#000;
    letter-spacing:0.5px;
 
    
 
}
 
 
 
.rectangle2-text{
 
    position:absolute;
    font-family:'karla',sans-serif;
    padding:30px;
 
    margin-top:20px;
 
    height:auto;
 
    max-height:380px;
 
    font-size:20px;
    color:#000;
 
    letter-spacing:0.5px;
    text-align:left;
    top:160px;
 
    transform: translate(-0%, -50%);
 
}


.rectangle6-text{
 
 position:absolute;
 font-family:'karla',sans-serif;
 padding:30px;

 margin-top:20px;
 text-align:left;
 height:auto;

 max-height:380px;

 font-size:20px;
 color:#000;

 letter-spacing:0.5px;
 
 top:160px;

 transform: translate(-0%, -50%);

}

.rectangle6 {
 
 position:fixed;

 width:650px;

 text-align:left;

 height:200px;

 left:1100px;

 top:260px;

 transform: translate(-50%, -50%);

 font-size:30px;
 color:#000;
 letter-spacing:0.5px;

 

}


.rectangle7-text{
 
 position:absolute;
 font-family:'karla',sans-serif;
 padding:30px;

 margin-top:20px;
 text-align:left;
 height:auto;

 max-height:380px;

 font-size:20px;
 color:#000;

 letter-spacing:0.5px;
 
 top:500px;

 transform: translate(-0%, -50%);

}

.rectangle7 {
 
 position:fixed;

 width:650px;

 text-align:left;

 height:200px;

 left:800px;

 top:100px;

 transform: translate(-50%, -50%);

 font-size:30px;
 color:#000;
 letter-spacing:0.5px;

 

}
 


        /* Define the scrollable page's CSS */
      
 
.rectangle2-text.b{
 

 font-family:georgia,garamond;
 font-size:20px;
 color:#000;
 text-align:center;

}

 
 


.rectangle3 {
 
 position:fixed;

 width:290px;

 background:#ffffff;

 height:280px;

 margin-left:500px;

 margin-top:380px;

 box-shadow:6px 6px 6px 6px #000;

 letter-spacing:0.5px;

}



.rectangle3-text {

 width:80px;

 position:absolute;

 height:auto;

 font-size:12px;

 margin-top:70px;

 letter-spacing:0.5px;

 display:inline;



}
 
 
 
 
 

.rectangle4 {
 
 position:fixed;

 width:290px;

 background:#ffffff;

 height:280px;

 margin-left:900px;

 margin-top:380px;

 box-shadow:6px 6px 6px 6px #000;

 letter-spacing:0.5px;

}



.rectangle4-text {

 width:80px;

 position:absolute;

 height:auto;

 font-size:12px;

 margin-top:70px;

 letter-spacing:0.5px;

 display:inline;



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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5NJ9EYD133"></script>
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>


        <title>User | Change Password</title>
         
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5NJ9EYD133"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-5NJ9EYD133');
        </script>
    </head>


    <style>
          .card2 {
	  background-color: #fff;
  
   
   
	  border-radius: 0;
	  margin-left:500px;
  }
  
        </style>
    <body>
        <div id="all">
         <!-- Top bar-->

    
        </div>
        <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
              
                    <div class="col-md-3 border-right">
</div>
                    </div>
                    <div class="card2" style="width: 50rem;">
                     
                        <div class="card-body bg-white">
                            <h1 class="text-info1"><h1>Change Password</h1>
                            <div class="text-info1">Strong password required. Enter 8 characters long. Do not include common words or names. 
                                Combine uppercase letters, lowercase letters, numbers, and symbols.</div>
                          
                           <br> 

                           <?php
$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$pid'");
$cnt = 1;

while ($row = mysqli_fetch_array($query)) {
?>

    <?php if (!empty($msg)) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo htmlentities($msg); ?>
        </div>
    <?php } ?>

    <form method="post">
        <div class="form-group col-md-3">
            <label for="email"><b>Email</b></label>
            <p><?php echo htmlentities($row['email']); ?></p>
        </div>
        <div class="form-group col-md-3">
            <label for="current_password"><b>Current Password</b></label>
            <input type="password" class="form-control" id="current_password" name="current_password" required>
        </div>
        <div class="form-group col-md-3">
            <label for="new_password"><b>New Password</b></label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
        </div>
        <div class="form-group col-md-3">
            <label for="confirm_password"><b>Confirm New Password</b></label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <center>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <button class="btn btn-danger" onclick="window.location.href = 'userprofile.php';">Cancel</button>
        </center>
    </form>

<?php } ?>


</body>
</html>
 

 
 
 
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

<script>
	function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
