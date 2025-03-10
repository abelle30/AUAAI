<!doctype html>

<?php
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
   $success = null;

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
 
   if(isset($_POST['sign-up'])){
    $course=$_POST['course'];
    $fname=$_POST['fname']; 
    $lname=$_POST['lname'];
    $year=$_POST['year'];
    $mname=$_POST['mname'];
    $age=$_POST['age']; 
    $suffix=$_POST['suffix'];
    $gender=$_POST['gender'];
    $nationality=$_POST['nationality'];
    $civilstatus=$_POST['civilstatus'];
    $lot=$_POST['lot'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $retypepassword= $_POST['retypepassword'];
    $usertype=$_POST['usertype'];

  
 
      if(empty(trim($fname))){
         $fname_error = "First name is empty";
      }
      if (preg_match('/[0-9]/', $fname)) {
        $fname_error = "First name cannot contain numbers";
      }

      if (preg_match('/[0-9]/', $mname)){
        $mname_error = "Middle name cannot contain numbers";
    }

      if(empty(trim($lname))){
         $lname_error = "Last name is empty";
      }
      if(empty(trim($course))){
        $course_error = "Course is empty";
     }
     if(empty(trim($age))){
        $age_error = "Age is empty";

     }



     if (!preg_match('/^[^A-Za-z]+$/', $age)) {
        $age_error = "Age cannot contain letters";
    
     }
     
     if(empty(trim($gender))){
        $gender_error = "Gender is empty";
     }
     if(empty(trim($lot))){
        $lot_error = "Lot is empty";
     }
     if(empty(trim($password))){
        $password_error = "Password is empty";
     }
     if ($password !== $retypepassword) {
        $bothpassword_error = "Passwords are not the same";
       
    } 
     if(empty(trim($city))){
        $city_error = "City is empty";
     }
     if(empty(trim($email))){
        $email_error = "Email is empty";
     }

   
     if(empty(trim($mobileno))){
        $mobileno_error = "Mobile number is empty";
     }
     if (strlen($mobileno) > 10) {
        $mobileno_error = "Mobile number should have a maximum of 10 numbers";
    }
     if(empty(trim($nationality))){
        $nationality_error = "Nationality is empty";
     }
     if (preg_match('/[0-9]/', $nationality)) {
        $fname_error = "Nationality cannot contain numbers";
      }
     if(empty(trim($civilstatus))){
        $civilstatus_error = "Civil status is empty";
     }
     
     if(empty(trim($street))){
        $street_error = "Street is empty";
     }
     if(empty(trim($state))){
        $state_error = "State is empty";
     }
     if (preg_match('/[0-9]/', $fname)) {
    $fname_error = "First name cannot contain numbers";
}

// Check for numbers in last name
if (preg_match('/[0-9]/', $lname)) {
    $lname_error = "Last name cannot contain numbers";
}


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insert_user = "INSERT INTO users (course,fname, lname, mname, year, age, suffix, gender, nationality, civilstatus, lot, street, city, state, mobileno, email, password, usertype) VALUE ('$course','$fname', '$lname', '$mname','$year', '$age', '$suffix', '$gender', '$nationality', '$civilstatus', '$lot', '$street', '$city', '$state', '$mobileno', '$email', '$password', '$usertype')";  
    
if(mysqli_query($conn,$insert_user))  
    {  
        $success = "Thank you for your registration";
       
    }  
	

}
    
    
   
   ?>

<html lang="en">
    <head>

    <?php
 if ($fname_error != null) {
    ?><style>  .fname-error { display: block; }</style> <?php
}

if (preg_match('/[0-9]/', $fname)){
    ?><style>  .fname-error { display: block; }</style> <?php
}

if (preg_match('/[0-9]/', $mname)){
    ?><style>  .mname-error { display: block; }</style> <?php
}
if ($lname_error != null) {
   ?><style>  .fname-error { display: block; }</style> <?php
}

if ($gender_error != null) {
    ?><style>  .gender-error { display: block; }</style> <?php
 }
 

if (preg_match('/[0-9]/', $lname)){
   ?><style>  .lname-error { display: block; }</style> <?php
}

if ($nationality_error != null) {
    ?><style>  .nationality-error { display: block; }</style> <?php
 }
 
 if (preg_match('/[0-9]/', $nationality)){
    ?><style>  .nationality-error { display: block; }</style> <?php
 }

   if($age_error != null){
    ?> <style>.username-error{display:block}</style> <?php
 }
 if (!preg_match('/^[^A-Za-z]+$/', $age)) {
    ?> <style>.age-error{display:block}</style> <?php

 }

 if($mobileno_error != null){
    ?> <style>.mobileno-error{display:block}</style> <?php
 }
 if (!preg_match('/^[^A-Za-z]+$/', $mobileno)) {
    ?> <style>.mobileno-error{display:block}</style> <?php

 }
 if (strlen($mobileno) > 10) {
    // The input has more than eight characters
    ?> <style>.mobileno-error{display:block}</style> <?php
}
 
   if($success != null){
      ?> <style>.success{display:block}</style> <?php
   }

   if ($password !== $retypepassword) {
    // Password and retype password do not match
    ?> <style>.bothpassword-error{display:block}</style> <?php
} 


?>



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



        <body>
            
                        </div>
                    </div>
                    <form action= "register.php" method="post">
                    <div class="card" style="width: 50rem;">
                        <div class="card-header h4" style="background-color: #5b9aff;">Fill Alumni Information</div>
                        <div class="card-body bg-white">

                            <div class="form-group row ">
                                <label class="col-form-label col-md-3">Year Graduated</label>
                                <div class="col-md-5">
                                    <select id="year" name="year" class="form-control form-control-sm mb-4"></select>
                                </div>   
                                    
                            </div>
                            <div class="form-group row border-bottom">
                            
                              <label class="col-form-label col-md-3">Course/Program</label><br>
          
                              <div class="col-md-5">
                              
                                  <select onchange="course()" id="course" name="course" class="form-control form-control-sm mb-3
                                  ">
                                      <option></option>
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
                                  <p class="error course-error">
                                        <?php echo $course_error; ?>
      </p>                 
                              </div> 
                          
                                                 
                          </div>
                            
                            <h4 class="text-info">Personal Information</h4>
                            <div class="row mt-2">
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7" for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="">
                                    <p class="error fname-error">
                                        <?php echo $fname_error; ?>
      </p>
    </div>
                            
                                
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Middle Name</label>
                                    <input type="text" class="form-control" id="mname" name="mname" value="" placeholder="middlename">
                                    <p class="error mname-error">
                                        <?php echo $mname_error; ?>
      </p>
                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname"value="" placeholder="Last Name">
                                    <p class="error lname-error">
                                        <?php echo $lname_error; ?>
      </p>
                               
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label col-md-7">Age</label>
                                    <input type="text" class="form-control" id="age" name="age"value="" placeholder="age">
                                    <p class="error age-error">
                                        <?php echo $age_error; ?>
      </p>
                              
                                </div>
                                <div class="row mt-10">
                                    <label class="col-form-label col-md-7">Suffix</label>
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
                                    <label class="col-form-label col-md-7">Gender </label>
                
                                    <div class="form-check">
                                        <input type="radio"  name="gender" id="gender" value="male">
                                        <label name="gender">
                                          Male
                                        </label>
                                        
                                      </div>
                                      <div class="form-check">
                                        <input type="radio" name="gender" id="gender" value="male">
                                        <label  name="gender">
                                          Female
                                        </label>
                                      </div>
                                      <p class="error gender-error">
                                        <?php echo $gender_error; ?>
      </p>
                               
                                   

                                      
                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Nationality</label>
                                    <input type="text" class="form-control" value="" placeholder="Nationality" name="nationality" id="nationality">
                                    <p class="error nationality-error">
                                        <?php echo $nationality_error; ?>
      </p>
                                   
                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Civil Status</label><br>
                                        <div class="form-check form-check-inline mb-0 me-5" style="align-content:center">
                                            <input type="radio" name="civilstatus" id="civilstatus"
                                                value="Single" />
                                            <label class="form-check-label" for="Single">Single</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-5" style="align-content:center">
                                            <input type="radio" name="civilstatus" id="civilstatus"
                                                value="Married" />
                                            <label class="form-check-label" for="Married">Married</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-5" style="align-content:center">
                                            <input type="radio" name="civilstatus" id="civilstatus"
                                                value="Divorced" />
                                            <label class="form-check-label" for="Divorced">Divorced</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-5" style="align-content:center">
                                            <input type="radio" name="civilstatus" id="civilstatus"
                                                value="Widowed" />
                                            <label class="form-check-label" for="Widowed">Widowed</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-5" style="align-content:center">
                                            <input type="radio" name="civilstatus" id="civilstatus"
                                                value="Separated" />
                                            <label class="form-check-label" for="Separated">Separated</label>
                                        </div>
                                        <br>
                                        <p class="error civilstatus-error">
                                        <?php echo $civilstatus_error; ?>
      </p>
                                       
                                </div>
                            </div>
                            
                            

                            <br>
                            <h4 class="text-info">Contact Information</h4>
                            
                         
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Lot/Bldg/Subd/Unit/Floor No.</label>
                                    <input type="text" class="form-control" placeholder="Enter Lot/Bldg/Subd/Unit/Floor No." value="" name="lot" id="lot">
                                    <p class="error lot-error">
                                        <?php echo $lot_error; ?>
      </p>
                              
                                </div>
                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">Street</label>
                                    <input type="text" class="form-control" placeholder="Enter Street" value="" name="street" id="street">
                                    <p class="error street-error">
                                        <?php echo $street_error; ?>
      </p>
                                  
                                </div>
                                
                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">City</label>
                                    <input type="text" class="form-control" placeholder="Enter City" value="" name="city" id="city">
                                    <p class="error city-error">
                                        <?php echo $city_error; ?>
      </p>

                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">State/Province</label>
                                    <input type="text" class="form-control" placeholder="Enter State/Province" value="" name="state" id="state">
                                    <p class="error state-error">
                                        <?php echo $state_error; ?>
      </p>
                                 
                                </div>
                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="enter phone number" value="" name="mobileno" id="mobileno">
                                    <p class="error mobileno-error">
                                        <?php echo $mobileno_error; ?>
      </p>
                                </div>
                                
                               
                            </div>
                           
                    

                            <br>
                            <h4 class="text-info">User Credentials</h4>
                        
                              <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-7">
                                  <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                  <p class="error email-error">
                                        <?php echo $email_error; ?>
      </p>
                                
                              
                    </div>
                    </div>
                    
 
                                
                           
                            
                              <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-7">
                                  <input type="password" class="form-control"placeholder="Password" name="password" id="password">
                                  <p class="error password-error">
                                        <?php echo $password_error; ?>
      </p>
                                     
                                </div>
                                </div>
                              
                              <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Re-Type Password</label>
                                <div class="col-sm-7">
                                  <input type="password" class="form-control"  placeholder="Re-Type Password" name="retypepassword" id="retypepassword">
                                  
                                
                            
                                </div>
                  
      <p class="error bothpassword-error">
                                        <?php echo $bothpassword_error; ?>
      </p>
                              </div>

                              <input type="hidden" name="usertype"  id="usertype" value="alumni">
                              

                            

                            
                            <div class="mt-5 text-center">
                            <input type="submit" name="sign-up" value="Sign Up">
                            <p class="success">
         <?php echo $success; ?>
      </p>    
                            </div>
                            
                        </div>
                    </div>
</form>
                </div>
           
            <script>
 
