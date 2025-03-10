<!DOCTYPE html>
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
?>
        <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        ?>
 
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!--fonts-->   
 
<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'> 

 
<!--title = the text that shows up on the browser tab-->
 
<title>User | Update Profile</title>
 
 
 
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


<?php 
 $pid = intval($_GET['id']);

 if (isset($_POST['submit'])) {
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $lname = $_POST['lname'];
     $suffix = $_POST['suffix'];
     $gender = $_POST['gender'];
     $email = $_POST['email'];
     $mobileno = $_POST['mobileno'];
     $year = $_POST['year'];
     $course = $_POST['course'];
     $nationality = $_POST['nationality'];
     $civilstatus = $_POST['civilstatus'];
     $state = $_POST['state'];
     $city = $_POST['city'];
     $street = $_POST['street'];
 
     // Execute a query to fetch user data (assuming you have a database connection named $conn)
     $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$pid'");
     
     if ($query && mysqli_num_rows($query) > 0) {
         $resultSet = mysqli_fetch_assoc($query);
         
         // Store user data in session variables
         $_SESSION["email"] = $email;
         $_SESSION['fname'] = $fname;
         $_SESSION['id'] = $resultSet['id'];
         $_SESSION['mname'] = $mname;
         $_SESSION['suffix'] = $suffix;
         $_SESSION['gender'] = $gender;
         $_SESSION['age'] = $resultSet['age'];
         $_SESSION['lname'] = $lname;
         $_SESSION['year'] = $year;
         $_SESSION['course'] = $course;
         $_SESSION['lot'] = $resultSet['lot'];
         $_SESSION['street'] = $street;
         $_SESSION['nationality'] = $nationality;
         $_SESSION['civilstatus'] = $civilstatus;
         $_SESSION['city'] = $city;
         $_SESSION['state'] = $state;
         $_SESSION['mobileno'] = $mobileno;
         $_SESSION["status"] = $resultSet["status"];
         
         $stmt = mysqli_prepare($conn, "UPDATE users SET
    fname=?, mname=?, lname=?, suffix=?,
    gender=?, email=?, mobileno=?,
    year=?, course=?, nationality=?, civilstatus=?,
    state=?, city=?, street=?
    WHERE id=?");

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssssssssssssssi", $fname, $mname, $lname, $suffix,
        $gender, $email, $mobileno, $year, $course, $nationality, $civilstatus,
        $state, $city, $street, $pid);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['msg'] = "Profile was successfully edited!";
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['msg'] = "Error updating profile: " . mysqli_error($conn); // Get specific error message
        mysqli_stmt_close($stmt);
    }
} else {
    $_SESSION['msg'] = "Error preparing statement: " . mysqli_error($conn); // Get specific error message
}

// Redirect or display a message here

}
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

            <div class="container rounded bg-white mt-5 mb-2">
                <div class="row">
                    <div class="col-md-2 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  
                        </div>
                    </div>

                    <form class="form-horizontal row-fluid" name="edituser" method="post" enctype="multipart/form-data">
                    <div class="card" style="width: 50rem;">
                        <div class="card-header h4" style="background-color: #5b9aff;">Edit Alumni Information</div>
                        <div class="card-body bg-white">

                            <div class="form-group row ">
                                <label class="col-form-label col-md-3">Year Graduated</label>
                                <div class="col-md-5">
                                    <select id="year" name="year" value="<?php echo htmlentities($_SESSION['year']);?>" class="form-control form-control-sm mb-4"></select>
                                </div>   
                                    
                            </div>
                            <div class="form-group row border-bottom">
                            
                              <label class="col-form-label col-md-3">Course/Program</label><br>
          
                              <div class="col-md-5">
                              
                                  <select onchange="course()" id="course" name="course" class="form-control form-control-sm mb-3
                                  ">
                                 
                                  <option value=" <?php echo htmlentities($_SESSION['course']);?>  "><?php echo htmlentities($_SESSION['course']);?></option>
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
                                 
      </p>                 
                              </div> 
                          
                                                 
                          </div>
                            
                            <h4 class="text-info">Personal Information</h4>
                            <div class="row mt-2">
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7" for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="<?php echo htmlentities($_SESSION['fname']);?>">
                                   
    </div>
                            
                                
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Middle Name</label>
                                    <input type="text" class="form-control" id="mname" name="mname" value="<?php echo htmlentities($_SESSION['mname']);?>" placeholder="middlename">
                                 
      </p>
                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname"value="<?php echo htmlentities($_SESSION['lname']);?>" placeholder="Last Name">
                               
      </p>
                               
                                </div>

                                <div class="col-md-4">
                                    <label class="col-form-label col-md-7">Age</label>
                                    <input type="text" class="form-control" id="age" name="age"value="<?php echo htmlentities($_SESSION['age']);?>">
                    
      </p>
                              
                                </div>
                                <div class="row mt-10">
                                    <label class="col-form-label col-md-7">Suffix</label>
                                    <div class="col-sm-10">
                                        <select id="suffix" id="suffix" name="suffix" value="" class="form-control form-control-sm">
                                      
                                        <option value="<?php echo htmlentities($_SESSION['suffix']);?>"><?php echo htmlentities($_SESSION['suffix']);?></option>                           
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
                                        <input type="radio" name="gender" id="gender" value="female">
                                        <label  name="gender">
                                          Female
                                        </label>
                                      </div>
                                   
      </p>
                               
                                   

                                      
                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Nationality</label>
                                    <input type="text" class="form-control" value="<?php echo htmlentities($_SESSION['nationality']);?>" placeholder="Nationality" name="nationality" id="nationality">
                                    
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
                                        
      </p>
                                       
                                </div>
                            </div>
                            
                            

                            <br>
                            <h4 class="text-info">Contact Information</h4>
                            
                         
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">Lot/Bldg/Subd/Unit/Floor No.</label>
                                    <input type="text" class="form-control" placeholder="Enter Lot/Bldg/Subd/Unit/Floor No." value="<?php echo htmlentities($_SESSION['lot']);?>" name="lot" id="lot">
                                   
      </p>
                              
                                </div>
                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">Street</label>
                                    <input type="text" class="form-control" placeholder="Enter Street" value="<?php echo htmlentities($_SESSION['street']);?>" name="street" id="street">
                                   
      </p>
                                  
                                </div>
                                
                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">City</label>
                                    <input type="text" class="form-control" placeholder="Enter City" value="<?php echo htmlentities($_SESSION['city']);?>" name="city" id="city">
                                  
      </p>

                                </div>
                                <div class="col-md-10">
                                    <label class="col-form-label col-md-7">State/Province</label>
                                    <input type="text" class="form-control" placeholder="Enter State/Province" value="<?php echo htmlentities($_SESSION['state']);?>" name="state" id="state">
                                    
      </p>
                                 
                                </div>
                                <div class="col-md-5">
                                    <label class="col-form-label col-md-7">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="enter phone number" value="<?php echo htmlentities($_SESSION['mobileno']);?>" name="mobileno" id="mobileno">
                                    
      </p>
                                </div>
                                
                               
                            </div>
                           
                    

                            <br>
                            <h4 class="text-info">User Credentials</h4>
                        
                              <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-7">
                                  <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo htmlentities($_SESSION['email']);?>">
                                 
                                
                              
                    </div>
                    </div>

                    <?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
									<br />
                    
 
                                </div>
                  
 
                              </div>

                            

                            
                              <div class="div">
                <center>
                <div class="form-group col-md-9">
                <label2>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </label2>  <button type="submit" name="submit" class="btn btn-success">Submit</button>
                   <label2>‎ ‎ ‎ </label2>
				 
					<button class="btn btn-danger" onclick="window.location.href = 'userprofile.php';">Cancel</button>

                </div>
            </div>
</center>
                            
                        </div>
                    </div>
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
    <!-- Swiper JS -->
            
            <script type="text/javascript">
        
            </script>
            
            <script src="resources/vendors/swiper/swiper-bundle.min.js"></script>
            <!--Home Slides-->
            <script>
            var swiper = new Swiper(".mySwiper", 
            {
                spaceBetween : 30, centeredSlides : true, autoplay :  {
                    delay : 2500, disableOnInteraction : false
                },
                pagination :  {
                    el : ".swiper-pagination", clickable : true
                },
                navigation :  {
                    nextEl : ".swiper-button-next", prevEl : ".swiper-button-prev"
                }
            });
            </script>
            
        </body>
    </html>

 
</body>