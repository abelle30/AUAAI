<!doctype html>

<?php
ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

$error=0;

 include('resources/includes/db_conn.php'); 
   $fname = null;	
   $mname = null;	
   $mname_error = null;  	
   $fname_error = null; 
   $lname = null;		
   $lname_error = null;  
   $course = null;		
   $course_error = null;  
   $age = null;		
   $age_error = null;  
   $gender = null;		
   $gender_error = null;  
   $nationality = null;		
   $nationality_error = null;  
   $civilstatus = null;		
   $civilstatus_error = null;  
   $lot = null;		
   $lot_error = null;  
   $street = null;		
   $street_error = null;  
   $city = null;		
   $city_error = null;  
   $state = null;		
   $state_error = null;  
   $mobileno = null;		
   $mobileno_error = null;  
   $email = null;		
   $retypepassword= null;	
   $email_error = null;  
   $password = null;		
   $password_error = null;  
   $bothpassword_error = null;  
   $result = null;

   if (isset($password) && !empty($password)) {
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }
    
   

 
   if(isset($_POST['sign-up'])){
    $course=$_POST['course'];
    $fname=$_POST['fname']; 
    $lname=$_POST['lname'];
    $year=$_POST['year'];
    $mname=$_POST['mname'];
    $age=$_POST['age']; 
    $suffix=$_POST['suffix'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $nationality=$_POST['nationality'];
    $civilstatus = isset($_POST['civilstatus']) ? $_POST['civilstatus'] : '';
    $lot=$_POST['lot'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $retypepassword= $_POST['retypepassword'];
    $usertype=$_POST['usertype'];
    $status=$_POST['status'];

   
    if($course == '') {
        $course_error = "Please select your course/program";
        $error = 1;
    }
    
    if (empty($civilstatus)) {
        $civilstatus_error = "Please select your civil status";
        $error = 1;
    }
   
    if (empty($gender)) {
        $gender_error = "Please select your gender";
        $error = 1;
    }

    if(empty($fname))
  {
    $fname_error = "Please enter the Name";
    $error=1;
  }
  else if(!preg_match("/^[a-zA-Z ]*$/", $fname))
  {
    $fname_error = "Only letters are allowed";
    $error=1;
  }


  if(empty($lname))
  {
    $lname_error = "Please enter your Last Name";
    $error=1;
  }
  else if(!preg_match("/^[a-zA-Z ]*$/", $lname))
  {
    $lname_error = "Only letters are allowed";
    $error=1;
  }

  if(empty($age))
  {
      $age_error = "Please enter your Age";
      $error = 1;
  }
  else if(!preg_match("/^[0-9]*$/", $age))
  {
      $age_error = "Only numbers are allowed";
      $error = 1;
  }
  else if ($age < 18 || $age > 99) 
  {
    $age_error = "Please enter your valid age";
    $error = 1;
    }


  if(empty($nationality))
  {
    $nationality_error = "Please enter your Nationality";
    $error=1;
  }
  else if(!preg_match("/^[a-zA-Z ]*$/", $nationality))
  {
    $nationality_error = "Only letters are allowed";
    $error=1;
  }


  if(empty($lot))
  {
    $lot_error = "Please enter your Lot/Bldg/Subd/Unit/Floor No.";
    $error=1;
  }

  if(empty($street))
  {
    $street_error = "Please enter your Street";
    $error=1;
  }

  if(empty($city))
  {
    $city_error = "Please enter your City";
    $error=1;
  }

  if(empty($state))
  {
    $state_error = "Please enter your State";
    $error=1;
  }

  if(empty($mobileno))
  {
      $mobileno_error = "Please enter your Mobile Number";
      $error = 1;
  }
  else if(!preg_match("/^[0-9]*$/", $mobileno))
  {
      $mobileno_error = "Only numbers are allowed";
      $error = 1;
  }
   else if (!preg_match("/^[0-9]*$/", $mobileno)) {
    $mobileno_error = "Only numbers are allowed";
    $error = 1;
} else if (strlen($mobileno) !== 11) {
    $mobileno_error = "Mobile Number must be exactly 9 digits";
    $error = 1;
}
 
  if(empty($email))
  {
    $email_error = "Please enter the Email Id";
    $error=1;
  }
 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "Invalid Email Format";
    $error = 1;
}

if (empty($password)) {
    $password_error = "Please enter a password";
    $error = 1;
}

  
  if($error==0)
  {
 
 

$insert_user = "INSERT INTO users (course,fname, lname, mname, year, age, suffix, gender, nationality, civilstatus, lot, street, city, state, mobileno, email, password, usertype, status) VALUE ('$course','$fname', '$lname', '$mname','$year', '$age', '$suffix', '$gender', '$nationality', '$civilstatus', '$lot', '$street', '$city', '$state', '$mobileno', '$email', '$password', '$usertype','$status')";  
 if (mysqli_query($conn,$insert_user))  
    { 
       
       	echo "<script>alert('Thank you for your registration! The admin will verify your account, and it may take up to 24 hours. Please try logging in after 24 hours. Thank you for your patience.');</script>";
        echo "<meta http-equiv='refresh' content='1;url=https://auaaiconnect.online/login.php'>"; 
        
    }  

    else{

        $_SESSION['msg']="Something Went Wrong. Please try Again.";

    }
	

}
else
{
  $msg = "Please fill up all the fields";
}

}

    
    
   
   ?>   

<html lang="en">
    <head>





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

<link rel="stylesheet" href="resources/css/style.blue.css" id="theme-stylesheet">
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

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

<style>

 .error
{
  color: red;
  font-weight: 700;

} 
</style>



        <title>AUAAI | Register</title>
         
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

             <script>
        function validateForm() {
            // Validation for First Name
            var firstName = document.getElementById("fname").value;
            if (firstName.trim() === "") {
                alert("Please enter your First Name");
                return false;
            }

            // Validation for Email
            var email = document.getElementById("email").value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid Email address");
                return false;
            }

            // Validation for Password
            var password = document.getElementById("password").value;
            if (password.length < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            }

            // Validation for Re-Type Password
            var retypePassword = document.getElementById("retypepassword").value;
            if (password !== retypePassword) {
                alert("Passwords23 do not match");
                return false;
            }

            // Additional validations can be added for other fields

            // If all validations pass, the form will submit
            return true;
        }
    </script>

            <!-- Top bar-->
            <?php
include('resources/includes/header.php');
?>
        <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

            <div class="container rounded bg-white mt-5 mb-2">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-9 py-5">
                           
                          
                            <span> </span>
                        </div>
                    </div>


                    
                    <form id="validate_form" action= "register.php" method="post">
                    <div class="card" style="width: 50rem;">
                        <div class="card-header h4" style="background-color: #5b9aff;">OTP Verification</div>
                            <div class="card-body bg-white">
                                
                            <h4 class="text-info">We've sent a verification code to your email </h4>
                            <div class="row mt-2">
                                <div class="col-md-10">
                                
                              
                                    <input type="text" class="form-control" placeholder="Enter verification code" value="" name="otp" id="otp">
                                    <br>
                                       <input type="submit" href= https://auaaiconnect.online/login.php name="sign-up" value="Verify">
                                </div>

                             

                        

                            
                            <div class="mt-5 text-center">
                         
                                <style>
                                    .custom-button-link {
                                        text-decoration: none;
                                        display: inline-block;
                                    }
                                    
                                    input[type="submit"] {
                                        background-color: #007BFF; /* Button background color */
                                        color: #fff; /* Button text color */
                                        padding: 10px 20px; /* Button padding */
                                        border: none;
                                        border-radius: 5px;
                                        font-size: 16px; /* Button font size */
                                        cursor: pointer;
                                        transition: background-color 0.3s; /* Smooth hover effect */
                                    }
                                    
                                    input[type="submit"]:hover {
                                        background-color: #0056b3; /* Button background color on hover */
                                    }
    
                                </style>
                            
                      </div>
                            
                        </div>
                    </div>
                    <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
</form>
                </div>
           
            <script>
                // get current year
                var currentYear = new Date().getFullYear();
            
                // set options for year picker
                var minYear = currentYear - 100; // set minimum year to 50 years ago
                var maxYear = currentYear; // set maximum year to 10 years in the future
                var yearPicker = document.getElementById("year");
                for (var year = maxYear; year >= minYear; year--) {
                    var option = document.createElement("option");
                    option.text = year;
                    yearPicker.add(option);
                }
            </script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordToggle = document.getElementById("password-toggle");
        const retypePasswordToggle = document.getElementById("retypepassword-toggle");
        const passwordInput = document.getElementById("password");
        const retypePasswordInput = document.getElementById("retypepassword");

        passwordToggle.addEventListener("click", function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                document.getElementById("password-icon").classList.remove("fa-eye");
                document.getElementById("password-icon").classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                document.getElementById("password-icon").classList.remove("fa-eye-slash");
                document.getElementById("password-icon").classList.add("fa-eye");
            }
        });

        retypePasswordToggle.addEventListener("click", function() {
            if (retypePasswordInput.type === "password") {
                retypePasswordInput.type = "text";
                document.getElementById("retypepassword-icon").classList.remove("fa-eye");
                document.getElementById("retypepassword-icon").classList.add("fa-eye-slash");
            } else {
                retypePasswordInput.type = "password";
                document.getElementById("retypepassword-icon").classList.remove("fa-eye-slash");
                document.getElementById("retypepassword-icon").classList.add("fa-eye");
            }
        });
    });
</script>







          
</body>

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

