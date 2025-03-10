<?php
$error=0;
$validation_error = 0;
session_start();
 include('resources/includes/db_conn.php'); 
if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] !== "alumni") {
// Define the database credentials
$server_name="";
$db_username ="u348190438_dbalumni";
$db_password="AUAAIportal2022";
$db_name="u348190438_dbalumni";
// Update online status to 'online' before destroying the session
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
date_default_timezone_set('Asia/Manila');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($conn,"UPDATE userlog  SET logout = '$ldate' WHERE email = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
mysqli_close($conn);
unset($_SESSION['user_token']);
session_unset();
session_destroy();

header("location: https://auaaiconnect.online/login.php");
exit();
}

$StudentNumber_error = null; 
$Birthday_error = null;
$Civilstatus_error = null; 
$Civilstatus = null; 
$Religion_error = null; 
$CurrentAddress_error = null; 
$PermanentAddress_error = null; 
$CompanyName_error = null; 
$CompanyAddress_error = null; 
$Position_error = null; 
$typeofcard_error = null; 
$typeofcard = null;
   
if(isset($_POST['submit']) && isset($_FILES['idpic']) && isset($_FILES['proofofpayment']) && isset($_FILES['esignature']))
{
	$alumniname=$_POST['alumniname']; 
$StudentNumber=$_POST['StudentNumber'];
$YearGraduated=$_POST['YearGraduated'];
$Birthday=$_POST['Birthday'];
$Course=$_POST['Course']; 
$Civilstatus = isset($_POST['Civilstatus']) ? $_POST['Civilstatus'] : '';
$Religion=$_POST['Religion'];
$CurrentAddress=$_POST['CurrentAddress'];
$PermanentAddress=$_POST['PermanentAddress'];
$Position=$_POST['Position'];
$PersonalEmailAddress=$_POST['PersonalEmailAddress'];
$CompanyName=$_POST['CompanyName'];
$CompanyAddress=$_POST['CompanyAddress'];
$ContactNumber= $_POST['ContactNumber'];
$status= $_POST['status'];
$typeofcard = isset($_POST['typeofcard']) ? $_POST['typeofcard'] : '';

	

$img_name = $_FILES['idpic']['name'];
$img_size = $_FILES['idpic']['size'];
$tmp_name = $_FILES['idpic']['tmp_name'];
$error = $_FILES['idpic']['error'];



///


$img_name2 = $_FILES['proofofpayment']['name'];
$img_size2 = $_FILES['proofofpayment']['size'];
$tmp_name2 = $_FILES['proofofpayment']['tmp_name'];
$error = $_FILES['proofofpayment']['error'];



///////

$img_name3 = $_FILES['esignature']['name'];
$img_size3 = $_FILES['esignature']['size'];
$tmp_name3 = $_FILES['esignature']['tmp_name'];
$error = $_FILES['esignature']['error'];




        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = '../admin/resources/images/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

        }

            $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
        $img_ex_lc2 = strtolower($img_ex2);

        $allowed_exs2 = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc2, $allowed_exs2)) {
            $new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
            $img_upload_path2 = '../admin/resources/images/'.$new_img_name2;
            move_uploaded_file($tmp_name2, $img_upload_path2);

        }

            
            $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
        $img_ex_lc3 = strtolower($img_ex3);

        $allowed_exs3 = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc3, $allowed_exs3)) {
            $new_img_name3 = uniqid("IMG-", true).'.'.$img_ex_lc3;
            $img_upload_path3 = '../admin/resources/images/'.$new_img_name3;
            move_uploaded_file($tmp_name3, $img_upload_path3);
        }

//restrictions in other fields
            if(empty($StudentNumber))
            {
                $StudentNumber_error = "Please enter your Student Number";
                $validation_error = 1;
            }
            else if(!preg_match("/^[0-9]*$/", $StudentNumber))
            {
                $StudentNumber_error = "Only numbers are allowed";
                $validation_error = 1;
            }
            
            if (empty($Civilstatus)) {
                $Civilstatus_error = "Please select your Civil status";
                $validation_error = 1;
            }
            
            if (empty($Birthday)) {
                $Birthday_error = "Please enter your birthday";
                $validation_error = 1;
            }
            
            if(empty($Religion))
            {
              $Religion_error = "Please enter your Religion";
              $validation_error = 1;
            }
            
            if(empty($CurrentAddress))
            {
              $CurrentAddress_error = "Please enter your Current Address";
              $validation_error = 1;
            }
            
            if(empty($PermanentAddress))
            {
              $PermanentAddress_error = "Please enter your Permanent Address";
              $validation_error = 1;
            }
            
            if(empty($CompanyName))
            {
              $CompanyName_error = "Please enter your Company Name";
              $validation_error = 1;
            }
            
            if(empty($CompanyAddress))
            {
              $CompanyAddress_error = "Please enter your Company Address";
              $validation_error = 1;
            }
            
            if(empty($Position))
            {
              $Position_error = "Please enter your Position in the company";
              $validation_error = 1;
            }

            if($error === 0 && $validation_error === 0)
{

    $sql=mysqli_query($conn, "INSERT alumniid SET 
    alumniname='$alumniname',
    StudentNumber='$StudentNumber',
    Birthday='$Birthday',
    YearGraduated='$YearGraduated',
    Course='$Course',
    Civilstatus='$Civilstatus',
    Religion='$Religion',
    CurrentAddress='$CurrentAddress',
    PermanentAddress='$PermanentAddress',
    ContactNumber='$ContactNumber',
    PersonalEmailAddress='$PersonalEmailAddress',
    CompanyName='$CompanyName',
    CompanyAddress='$CompanyAddress',
    Position='$Position',
    idpic='$new_img_name',
    typeofcard='$typeofcard',
    proofofpayment='$new_img_name2',
    esignature='$new_img_name3',
    status='$status'
   
"); 

if ($sql) {
    echo "<script>alert('Your application for Alumni ID is currently in the processing stage. You may review your profile to check its status. We would also send you an email when your ID is ready for pick up. We appreciate your cooperation and look forward to providing you with your Alumni ID promptly!');</script>";
}
} else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";
}

if ($error !== 0 || $validation_error !== 0) {
$msg = '<span style="color: red;">Please fill all fields</span>';
}
}



        ?>
        




<!doctype html>
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


        <!-- Slider CSS -->
        <link rel="stylesheet" href="resources/vendors/swiper/swiper-bundle.min.css"/>
        <title>Alumni ID Application</title>
        <style type="text/css">
            .announcement-text{
                 display: -webkit-box;
                  -webkit-line-clamp: 2;
                  -webkit-box-orient: vertical;  
                  overflow: hidden;
            }
            .civil .personal{
                margin: 0%  
            }
            .b{
                color: black;
            }

         

 .validation_error
{
  color: red;
  font-weight: 700;

} 

.error
{
  color: red;
  font-weight: 700;

} 


        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5NJ9EYD133"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-5NJ9EYD133');
        </script>
        
    </head>
    <body>
    
            <!--HEADER-->
             <!-- Top bar-->
             <?php
 

 include('resources/includes/navbaruser.php');

?>
    </div>
        </div>


<!-- Navbar End-->


    <div class="container">
        <h1>Alumni ID Application</h1><br>    
    </div>


<br>
<div class="container text-center">
    <div class="card" style="width: 70rem;">
        <div class="card-header h4" style="background-color: #5b9aff; text-align:left">Fill Alumni ID Application Form</div>
        <div class="card-body bg-white">
        <div class="IdApp" style="align-content: left;">
  
               <form class="form-horizontal row-fluid" name="addalumniid" method="post" enctype="multipart/form-data">

        
            <div class="personal">
                <p style="color: Red;">(*) Fields are Required</p>
                <table>
                    <tr>
                    <td style="color: black; text-align: left;">Name <span style="color: red;">*</span></td>
                        <td> <input type="text" class="form-control" placeholder="" name="alumniname" id="alumniname" value=" <?php echo htmlentities($_SESSION['fname']);?> <?php echo htmlentities($_SESSION['mname']);?> <?php echo htmlentities($_SESSION['lname']);?>" style="border-radius: 20px; width: 700px">
                           
                       
                    </tr>
                    
                    <tr>
                  
                        <td>‎ </td>
                        <td>‎ </td>
                    </tr>
                  
                    <tr>
                    <td style="color: black;">Student Number <span style="color: red;">*</span></td>
                        <td> <input type="text" class="form-control" placeholder="" name="StudentNumber" id="StudentNumber" value="" style="border-radius: 20px; width: 700px">
                        <span class="text-danger"><?php if (!empty($StudentNumber_error)) echo $StudentNumber_error; ?></span>
                           
                        
                    </tr>

                    <td>‎ </td>
                    <td>‎ </td>
                 
                     
                      
                </table>
            </div>

            <table>
                <td>‎ </td>
                <td>‎ </td>
             
                <tr>
                <td><label class="year" style="color: black;">Year Graduated <span style="color: red;">*</span></label></td>
                    <td>  <select id="YearGraduated" name="YearGraduated" class="form-control form-control-sm mb-9" style="border-radius: 20px; width: 200px"></select>
                      
                        
                        
                </tr>
                <tr>
                    <td>‎ </td>
                    <td>‎ </td>
                </tr>
             
                 
                  
            </table>

          <table>
                <tr>
                <td style="color: black;">Course <span style="color: red;">*</span></td>
                    <td>  <select style="margin-left: 68px;" onchange="course()" id="Course" name="Course" class="form-control form-control-sm mb-3
                        ">

                        <option value="<?php echo htmlentities($_SESSION['course']);?>"><?php echo htmlentities($_SESSION['course']);?></option>
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
        </td>
                </tr>
            
            </table>

            <table>
                <tr>
                    <td>‎ </td>
                    <td>‎ </td>
                </tr>
             
                <tr>
                <td style="color: black;">Birthday*</td>
                <td>   <input type="date" class="form-control" placeholder="" value=""  id="Birthday" name="Birthday"  style="border-radius: 20px; width: 200px; margin-left: 65px;">
                <span class="text-danger"><?php if (!empty($Birthday_error)) echo $Birthday_error; ?></span>
             
                
                <tr>
                    <td>‎ </td>
                    <td>‎ </td>
                </tr>
             
            
            </table>
            <table>
            <td style="color: black;">Civil Status <span style="color: red;">*</span></td>

            </table>


        
                
                <div class="employquestion">
                    
                    <div class="row mt-3" style="margin-left: 4%" >
                        <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
                         
                           <div class="col-md-10" style="text-align: left">
                            <div class="form-check form-check-inline mb-0 me-5" style="align-content:center">
                                
                            <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                                value="Single" <?php if ($Civilstatus === 'Single') echo ' checked'; ?>>
                            <label class="form-check-label" for="Single" name="Civilstatus">Single</label>
                            </div>
                            <br>
        
                          
        
                            <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                                value="Married" <?php if ($Civilstatus === 'Married') echo ' checked'; ?>> 
                            <label class="form-check-label" for="Married" name="Civilstatus">Married</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                                    value="Divorce" <?php if ($Civilstatus === 'Divorce') echo ' checked'; ?>>
                                <label class="form-check-label" for="Divorce" name="Civilstatus">Divorce</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                                    value="Seperated" <?php if ($Civilstatus === 'Seperated') echo ' checked'; ?>> 
                                <label class="form-check-label" for="Seperated" name="Civilstatus">Seperated</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                                    value="Widowed" <?php if ($Civilstatus === 'Widowed') echo ' checked'; ?>>
                                <label class="form-check-label" for="Widowed" name="Civilstatus">Widowed</label>
                            </div>
                            <br>
                            <span class="text-danger"><?php if (!empty($Civilstatus_error)) echo $Civilstatus_error; ?></span>
                         
                           
                            
                          
                            
                         

                          
                        </div>
                    </div>
                </div>
             
                        <table>
                            <tr>
                                <td style="color: black; text-align: left;">Religion <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" name="Religion" id="Religion" value="" style="border-radius: 20px; width: 800px">
                                <span class="text-danger"><?php if (!empty($Religion_error)) echo $Religion_error; ?></span>
                                
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Current Address <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" name="CurrentAddress" id="CurrentAddress" value="" style="border-radius: 20px; width: 800px">
                                <span class="text-danger"><?php if (!empty($CurrentAddress_error)) echo $CurrentAddress_error; ?></span> 
                                
                            </tr>
                            <td>‎</td>
                            <td>‎</td>

                            <tr>
                            <td style="color: black; text-align: left;">Permanent Address <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" name="PermanentAddress" id="PermanentAddress" value="" style="border-radius: 20px; width: 800px">
                                <span class="text-danger"><?php if (!empty($PermanentAddress_error)) echo $PermanentAddress_error; ?></span>
                                
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Contact Number <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" name="ContactNumber" id="ContactNumber" value="<?php echo htmlentities($_SESSION['mobileno']);?>" style="border-radius: 20px; width: 800px">
                                    
                             
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black;">Personal Email Address <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder="" name="PersonalEmailAddress" id="PersonalEmailAddress" value="<?php echo htmlentities($_SESSION['email']);?>" style="border-radius: 20px; width: 800px">
                                   
                       
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Company Name <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder="" name="CompanyName" id="CompanyName" value="" style="border-radius: 20px; width: 800px">
                                <span class="text-danger"><?php if (!empty($CompanyName_error)) echo $CompanyName_error; ?></span> 

                              
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Company Address <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder="" name="CompanyAddress" id="CompanyAddress" value="" style="border-radius: 20px; width: 800px">
                                <span class="text-danger"><?php if (!empty($CompanyAddress_error)) echo $CompanyAddress_error; ?></span> 

                        
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Position in the Company <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder="" name="Position" id="Position" value="" style="border-radius: 20px; width: 800px">
                                <span class="text-danger"><?php if (!empty($Position_error)) echo $Position_error; ?></span> 
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>
            
                        </table>
            
                         
        

            


                <label for="idpic" style="text-align:justify; color: black;"><b>PLEASE ATTACHED YOUR 2x2 ID PICTURE <span style="color: red;">*</span></b></label>
                <p><i>(Please upload picture with white background)</i></p>
    
                         <input type="file" name="idpic" id="idpic" />  
               
                <br>


                <br>
                <label for="typecard" style="text-align:justify; color: black;"><b>Type of Card <span style="color: red;">*</span></b></label>
              <br>
                    <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                        <input class="form-check-input" type="radio" id="typeofcard" name="typeofcard" value="Lifetime"
                        <?php if ($typeofcard === 'Lifetime') echo ' checked'; ?>>
                    
                        <label class="form-check-label" for="Lifetime" name="typeofcard">Lifetime</label><br>
                    </div>
                    <br>
                    <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                        <input class="form-check-input" type="radio" id="typeofcard" name="typeofcard" value="Renewable"
                        <?php if ($typeofcard === 'Renewable') echo ' checked'; ?>>
                        <label class="form-check-label" for="Renewable"  name="typeofcard">Renewable (Valid for 10 years)</label><br>
                    </div>
                    <br>
                    <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                        <input class="form-check-input" type="radio" id="typeofcard" name="typeofcard" value="Reprinting"
                        <?php if ($typeofcard === 'Reprinting') echo ' checked'; ?>>
                        <label class="form-check-label" for="Reprinting"  name="typeofcard">Reprinting (for Lost and Damaged Card)</label><br><br>
                        <span class="text-danger"><?php if (!empty($typeofcard_error)) echo $typeofcard_error; ?></span>
                    </div>
                    <br>


                  
                 
                
                  <br>

                <label for="proof" style="text-align:justify; color: black; "><b>PLEASE ATTACHED PROOF OF PAYMENT <span style="color: red;">*</span></b></label>
                    <input type="file" name="proofofpayment" id="proofofpayment" />  
            
                <br>


                <br>

                <label for="esig" style="text-align:justify; color: black;"><b>E-SIGNATURE <span style="color: red;">*</span></b></label>
                
                   <input type="file" name="esignature" id="esignature" />  
           
                <br>

                <br>
                <h3>Alumni ID Sample</h3>
                <div class="center col-lg-5 d-flex justify-content-between">
                            <img src="resources/images/AlumniIDpreview.png" style="align:center" height="250px" class="mr-5 mb-3 d-none d-md-block"/>
                        </div>    
                <div class="mt-5 text-center">
                <style>
                    .center {
                        display: block;
                        margin: 0 auto;
                    }
                </style>
                <input type="hidden" name="is_answer_alumniid"  id="is_answer_alumniid" value="1">
                           <input type="hidden" name="status"  id="status" value="1">
                            
                           <p class="validation_error"><?php if(!empty($msg)){ echo $msg; } ?></p>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" style="text-align:justify; color: black;" type="submit" name="submit" >Submit</button>

                    
                  </form>
                
                    <?php if(isset($_POST['submit']))
{?>


									
<?php } ?>

                
                </div>

               
      
            </center>
 
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
        
        <script>
            // get current year
            var currentYear = new Date().getFullYear();
        
            // set options for year picker
            var minYear = currentYear - 100; // set minimum year to 50 years ago
            var maxYear = currentYear; // set maximum year to 10 years in the future
            var yearPicker = document.getElementById("YearGraduated");
            for (var year = maxYear; year >= minYear; year--) {
                var option = document.createElement("option");
                option.text = year;
                yearPicker.add(option);
            }
        </script>