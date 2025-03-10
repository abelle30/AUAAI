<!doctype html>


<script>
        function validateEmail() {
            var emailInput = document.getElementById("email");
            var email = emailInput.value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            
            if (!emailPattern.test(email)) {
                alert("Invalid email address");
                emailInput.focus();
                return false;
            }
            return true;
        }

        // Attach the validation function to the form's onsubmit event
        document.getElementById("validate_form").onsubmit = function() {
            return validateEmail();
        };
    </script> 
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
   $hashedPassword = md5($password);
    }
    
   




 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sign-up'])) {
    $error = 0; // Initialize the error flag

    // Database connection code (assuming you have a valid $conn variable)

    $course = isset($_POST['course']) ? $_POST['course'] : '';
    $civilstatus = isset($_POST['civilstatus']) ? $_POST['civilstatus'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
        $year = isset($_POST['year']) ? $_POST['year'] : '';
         $suffix = isset($_POST['suffix ']) ? $_POST['suffix '] : '';
    
    $lot = isset($_POST['lot']) ? $_POST['lot'] : '';
    $street = isset($_POST['street']) ? $_POST['street'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    
    $mobileno = isset($_POST['mobileno']) ? $_POST['mobileno'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $retypepassword = isset($_POST['retypepassword']) ? $_POST['retypepassword'] : '';
    $usertype = isset($_POST['usertype']) ? $_POST['usertype'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';

    // Validate course selection
    if (empty($course)) {
        $course_error = "Please select your course/program";
        $error = 1;
    }

    // Validate civil status selection
    if (empty($civilstatus)) {
        $civilstatus_error = "Please select your civil status";
        $error = 1;
    }

    // Validate gender selection
    if (empty($gender)) {
        $gender_error = "Please select your gender";
        $error = 1;
    }

    // Validate first name
    if (empty($fname)) {
        $fname_error = "Please enter the first name";
        $error = 1;
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
        $fname_error = "Only letters are allowed";
        $error = 1;
    }

    // Validate last name
    if (empty($lname)) {
        $lname_error = "Please enter the last name";
        $error = 1;
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
        $lname_error = "Only letters are allowed";
        $error = 1;
    }

    // Validate age
    if (empty($age)) {
        $age_error = "Please enter your Age";
        $error = 1;
    } elseif (!is_numeric($age) || $age < 18 || $age > 99) {
        $age_error = "Please enter a valid age between 18 and 99";
        $error = 1;
    }

    // Validate nationality
    if (empty($nationality)) {
        $nationality_error = "Please enter your Nationality";
        $error = 1;
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nationality)) {
        $nationality_error = "Only letters are allowed";
        $error = 1;
    }

    // Validate address fields
    $lot_error = empty($lot) ? "Please enter your Lot/Bldg/Subd/Unit/Floor No." : '';
    $street_error = empty($street) ? "Please enter your Street" : '';
    $city_error = empty($city) ? "Please enter your City" : '';
    $state_error = empty($state) ? "Please enter your State" : '';

    if (!empty($lot_error) || !empty($street_error) || !empty($city_error) || !empty($state_error)) {
        $error = 1; // Set the error flag to 1 if any of the address fields have an error message
    }

if (empty($mobileno)) {
    $mobileno_error = "Please enter your Mobile Number";
    $error = 1;
} 
    // Validate email
    if (empty($email)) {
        $email_error = "Please enter the Email Id";
        $error = 1;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid Email Format";
        $error = 1;
    } else {
        // Check if the email already exists in the database (you need to implement this query)
        $query = "SELECT email FROM users WHERE email='$email'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $email_error = "This Email is already in use";
            $error = 1;
        }
    }

    // Validate password
    if (empty($password)) {
        $password_error = "Please enter a password";
        $error = 1;
    } elseif (strlen($password) < 6) {
        $password_error = "Password must be at least 6 characters long";
        $error = 1;
    }

    // Confirm password
    if ($password !== $retypepassword) {
        $retypepassword_error = "Passwords do not match";
        $error = 1;
    }

    if ($error == 0) {
        // Hash the password
  $hashedPassword = md5($password);

        // Insert the user into the database (you need to implement this query)
        $insert_user = "INSERT INTO users (course, fname, lname, mname, year, age, suffix, gender, nationality, civilstatus, lot, street, city, state, mobileno, email, password, usertype, status) VALUES ('$course', '$fname', '$lname', '$mname', '$year', '$age', '$suffix', '$gender', '$nationality', '$civilstatus', '$lot', '$street', '$city', '$state', '$mobileno', '$email', '$hashedPassword', '$usertype', '$status')";

        if (mysqli_query($conn, $insert_user)) {
            // Registration successful, send a verification email (you need to implement this)
            $subject = "Account Verification";
            $message = 'Your account is currently pending verification. An admin will review it soon.';
            $headers = "From: noreply@auaaiconnect.com";
            $headers .= "\r\n" . 'Reply-To: admin@auaaiconnect.online' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($email, $subject, $message, $headers)) {
                // Registration successful, redirect to the login page
                echo "<script>alert('Thank you for your registration! The admin will verify your account, and it may take up to 24 hours. Please try logging in after 24 hours. Thank you for your patience.');</script>";
                echo "<meta http-equiv='refresh' content='1;url=https://auaaiconnect.online/login.php'>";
                exit();
            } else {
                $_SESSION['error'] = "Failed to send verification email. Please try again later.";
            }
        } else {
            echo "Registration failed. Please try again.";
        }

        // Close your database connection if necessary
        mysqli_close($conn);
    } else {
        $_SESSION['msg'] = "Something Went Wrong. Please try Again.";
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


                    
                    <form id="validate_form" action= "register3.php" method="post">
                    <div class="card" style="width: 50rem;">
                        <div class="card-header h4" style="background-color: #5b9aff;">Fill Alumni Information</div>
                            <div class="card-body bg-white">
                                <div class="form-group row ">
                                    <label class="col-form-label col-md-3">Year Graduated</label>
                                    <div class="col-md-5">
                                        <select id="year" name="year" class="form-control form-control-sm mb-4" value="<?php if(isset($year)){ echo $year; }?>"></select>
                                        <span class="text-danger"><?php if(!empty($year_error)){ echo $year_error; } ?></span>
                                         
                                    </div>   
                                </div>

                                <div class="form-group row border-bottom">
                                    <label class="col-form-label col-md-3">Course/Program</label><br>
                                    <div class="col-md-5">
                                    <select onchange="course()" id="course" name="course" class="form-control form-control-sm mb-3">
                                        <option disabled selected>--- Select your Course ---</option>
  
                                                <option value="Bachelor of Science in Architecture">Bachelor of Science in Architecture</option>
                                                <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
                                                <option value="Bachelor of Science in Business Administration Major in Financial Management">Bachelor of Science in Business Administration Major in Financial Management</option>
                                                <option value="Bachelor of Science in Business Administration Major in Marketing Management">Bachelor of Science in Business Administration Major in Marketing Management</option>
                                                <option value="Bachelor of Science in Business Administration Major in Operations Management">Bachelor of Science in Business Administration Major in Operations Management</option>
                                                <option value="Bachelor of Science in Customs Administration">Bachelor of Science in Customs Administration</option>
                                                <option value="Bachelor of Science in Hospitality Management">Bachelor of Science in Hospitality Management</option>
                                                <option value="Bachelor of Science in Chemical Engineering">Bachelor of Science in Chemical Engineering</option>
                                                <option value="Bachelor of Science in Chemical Process Technology">Bachelor of Science in Chemical Process Technology</option>
                                                <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
                                                <option value="Bachelor of Science in Computer Engineering">Bachelor of Science in Computer Engineering</option>
                                                <option value="Bachelor of Science in Electrical Engineering">Bachelor of Science in Electrical Engineering</option>
                                                <option value="Bachelor of Science in Electronics Engineering">Bachelor of Science in Electronics Engineering</option>
                                                <option value="Bachelor of Science in Industial Engineering">Bachelor of Science in Industial Engineering</option>
                                                <option value="Bachelor of Science in Mechanical Engineering">Bachelor of Science in Mechanical Engineering</option>
                                                <option value="Bachelor of Science in Mining Engineering">Bachelor of Science in Mining Engineering</option>
                                                <option value="Bachelor of Science in Geology">Bachelor of Science in Geology</option>
                                                <option value="Bachelor of Science in Petroleum Engineering">Bachelor of Science in Petroleum Engineering</option>
                                                <option value="Dual Degree of B.S. Mechanical Engineering major in Mechatronics">Dual Degree of B.S. Mechanical Engineering major in Mechatronics </option>
                                                <option value="Juris Doctor">Juris Doctor </option>
                                                <option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
                                                <option value="Bachelor of Secondary Education major in English">Bachelor of Secondary Education major in English</option>
                                                <option value="Bachelor of Special Needs Education with Specialization in Elementary School Teaching">Bachelor of Special Needs Education with Specialization in Elementary School Teaching</option>
                                                <option value="Bachelor of Science in Physical Education">Bachelor of Science in Physical Education</option>
                                                <option value="Bachelor of Physical Education Major in Sports and Wellness Management">Bachelor of Physical Education Major in Sports and Wellness Management</option>
                                                <option value="Bachelor of Arts in Political Science">Bachelor of Arts in Political Science</option>
                                                <option value="Bachelor of Arts in Philosophy">Bachelor of Arts in Philosophy</option>
                                                <option value="Bachelor of Arts in Communication">Bachelor of Arts in Communication</option>
                                                <option value="Bachelor of Science in Nursing">Bachelor of Science in Nursing</option>
                                                <option value="Bachelor of Science in Pharmacy">Bachelor of Science in Pharmacy</option>
                                                <option value="Bachelor of Science in Biology">Bachelor of Science in Biology</option>
                                                <option value="Bachelor of Science in Chemistry">Bachelor of Science in Chemistry</option>
                                                <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                                <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
                                                <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                                <option value="Bachelor of Science in Psychology">Bachelor of Science in Psychology</option>
                                                <option value="Associate in Computer Technology">Associate in Computer Technology</option>  
                                            </select>
                                            <span class="text-danger"><?php if(!empty($course_error)){ echo $course_error; } ?></span>
                                                    
                                    </div> 
                                </div>
                            
                            <h4 class="text-info">Personal Information</h4>
                            <div class="row mt-2">
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7" for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php if(isset($fname)){ echo $fname; }?>">
                                    <span class="text-danger"><?php if(!empty($fname_error)){ echo $fname_error; } ?></span>
                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Middle Name (Optional)</label>
                                    <input type="text" class="form-control" id="mname" name="mname" value="" placeholder="Middle Name">
                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname"value="<?php if(isset($lname)){ echo $lname; }?>" placeholder="Last Name">
                                    <span class="text-danger"><?php if(!empty($lname_error)){ echo $lname_error; } ?></span>
                                </div>
                                <div class="col-md-4">
                                    <label class="col-form-label col-md-7">Age</label>
                                    <input type="text" class="form-control" id="age" name="age"value="<?php if(isset($age)){ echo $age; }?>" placeholder="Age">
                                    <span class="text-danger"><?php if(!empty($age_error)){ echo $age_error; } ?></span>
                                </div>

                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Suffix (Optional)</label>
                                    <div class="col-sm-10">
                                        <select id="suffix" id="suffix" name="suffix" value="" class="form-control form-control-sm">
                                            <option value=""></option>
                                            <option value="SR">SR</option>                            
                                            <option value="V">V</option>                           
                                            <option value="VI">VI</option>                            
                                            <option value="VII">VII</option>                           
                                            <option value="VIII">VIII</option>                            
                                            <option value="X">X</option>                          
                                            <option value="XI">XI</option>                           
                                            <option value="XII">XII</option>                           
                                            <option value="XIII">XIII</option>                           
                                            <option value="XIV">XIV</option>                           
                                            <option value="XV">XV</option>                            
                                            <option value="I">I</option>                            
                                            <option value="II">II</option>                           
                                            <option value="III">III</option>                           
                                            <option value="IV">IV</option>                            
                                            <option value="IX">IX</option>
                                            <option value="JR">JR</option>                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-form-label col-md-7">Gender</label>
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="male" value="male"<?php if ($gender === 'male') echo ' checked'; ?>>
                                        <label for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="female" value="female"<?php if ($gender === 'female') echo ' checked'; ?>>
                                        <label for="female">Female</label>
                                    </div>
                                    <span class="text-danger"><?php if (!empty($gender_error)) echo $gender_error; ?></span>
                                </div>
                                                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Nationality</label>
                                    <input type="text" class="form-control" value="<?php if(isset($nationality)){ echo $nationality; }?>" placeholder="Nationality" name="nationality" id="nationality">
                                    <span class="text-danger"><?php if(!empty($nationality_error)){ echo $nationality_error; } ?></span>
                                </div>

                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Civil Status</label>
                                    <div class="form-check">
                                        <input type="radio" name="civilstatus" id="single" value="Single"<?php if ($civilstatus === 'Single') echo ' checked'; ?>>
                                        <label for="single">Single</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="civilstatus" id="married" value="Married"<?php if ($civilstatus === 'Married') echo ' checked'; ?>>
                                        <label for="married">Married</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="civilstatus" id="divorced" value="Divorced"<?php if ($civilstatus === 'Divorced') echo ' checked'; ?>>
                                        <label for="divorced">Divorced</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="civilstatus" id="widowed" value="Widowed"<?php if ($civilstatus === 'Widowed') echo ' checked'; ?>>
                                        <label for="widowed">Widowed</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="civilstatus" id="separated" value="Separated"<?php if ($civilstatus === 'Separated') echo ' checked'; ?>>
                                        <label for="separated">Separated</label><br>
                                        <span class="text-danger"><?php if (!empty($civilstatus_error)) echo $civilstatus_error; ?></span>
                                    </div>
                                </div>
                                 <br> 
                                 
                            </div>
                            <br>
                            <h4 class="text-info">Contact Information</h4>
                            <div class="row mt-2">
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Lot/Bldg/Subd/Unit/Floor No.</label>
                                    <input type="text" class="form-control" placeholder="Enter Lot/Bldg/Subd/Unit/Floor No." value="<?php if(isset($lot)){ echo $lot; }?>" name="lot" id="lot">
                                    <span class="text-danger"><?php if(!empty($lot_error)){ echo $lot_error; } ?></span>
                                </div>

                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">Street</label>
                                    <input type="text" class="form-control" placeholder="Enter Street" value="<?php if(isset($street)){ echo $street; }?>" name="street" id="street">
                                    <span class="text-danger"><?php if(!empty($street_error)){ echo $street_error; } ?></span>
                                </div>
                                
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">City</label>
                                    <input type="text" class="form-control" placeholder="Enter City" value="<?php if(isset($city)){ echo $city; }?>" name="city" id="city">
                                    <span class="text-danger"><?php if(!empty($city_error)){ echo $city_error; } ?></span>
                                </div>

                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">State/Province</label>
                                    <input type="text" class="form-control" placeholder="Enter State/Province" value="<?php if(isset($state)){ echo $state; }?>" name="state" id="state">
                                    <span class="text-danger"><?php if(!empty($state_error)){ echo $state_error; } ?></span>
                                </div>

                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number" value="<?php if(isset($mobileno)){ echo $mobileno; }?>" name="mobileno" id="mobileno">
                                    <span class="text-danger"><?php if(!empty($mobileno_error)){ echo $mobileno_error; } ?></span>
                                </div>
                            </div>
                           
                    

                            <br>
                            <h4 class="text-info">User Credentials</h4>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" value= "<?php if(isset($email)){ echo $email; }?>">
                                    <span class="text-danger"><?php if(!empty($email_error)){ echo $email_error; } ?></span>           
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" >
                                            <button class="btn btn-outline-secondary" type="button" id="password-toggle">
                                                <i class="far fa-eye" id="password-icon"></i>
                                            </button>
                                        </div>
                                        <span class="text-danger"><?php if(!empty($password_error)){ echo $password_error; } ?></span>           
                                    </div>
                            </div>
                              
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Re-Type Password</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="password" class="form-control"  placeholder="Re-Type Password" name="retypepassword" id="retypepassword">
                                            <button class="btn btn-outline-secondary" type="button" id="retypepassword-toggle">
                                                <i class="far fa-eye" id="password-icon"></i>
                                            </button>
                                        </div>
                                        <span class="text-danger"><?php if(!empty($retypepassword_error)){ echo $retypepassword_error; } ?></span>           
                                    </div>
                            </div>

                              <input type="hidden" name="usertype"  id="usertype" value="alumni">
                              
                              <input type="hidden" name="status"  id="status" value="unverified">
                            

                            
                            <div class="mt-5 text-center">
                            <input type="submit" href= https://auaaiconnect.online/login.php name="sign-up" value="Sign Up">
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

