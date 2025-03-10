<?php include('emp_record_db/model.php');

$model = new Model();
if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] !== "alumni") {
$server_name="";
$db_username ="u348190438_dbalumni";
$db_password="AUAAIportal2022";
$db_name="u348190438_dbalumni";


}

?>

<!doctype html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!-- Favicon-->

        <!-- insert into para makuha sa users table to the form -->
        <?php
        $error=0;
session_start();
include('resources/includes/db_conn.php');

$year = null;
$course = null;
$name = null;
$age = null;
$age_error = null;
$gender = null;
$nationality = null;
$nationality_error = null;
$civilstatus = null;
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
$emp_status = null;
$emp_status_error = null;
$e_name_of_business = null;
$e_name_of_business_error = null;
$current_job_position = null;
$current_job_position_error = null;
$company_affiliation = null;
$company_affiliation_error = null;
$company_address = null;
$company_address_error = null;
$monthly_salary = null;
$monthly_salary_error = null;
$e_date_employed = null;
$e_date_employed_error = null;
$e_emp_status = null;
$e_emp_status_error = null;
$name_of_business = null;
$name_of_business_error = null;
$nature_of_business = null;
$nature_of_business_error = null;
$role_in_business = null;
$role_in_business_error = null;
$business_address = null;
$business_address_error = null;
$business_phone_number = null;
$business_phone_number_error = null;
$business_approx_salary = null;
$business_approx_salary_error = null;
$s_date_employed = null;
$s_date_employed_error = null;
$s_emp_status = null;
$s_emp_status_error = null;
$job_industry_type = null;
$job_industry_type_error = null;
$emp_source = null;
$job_relate = null;
$emp_immediate = null;
$job_satisfaction = null;
$intend_to_stay = null;

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $id = null;

    // Replace 'your_query_to_retrieve_id' with the actual query to get the id from the users table
    $user_id_query = "SELECT id FROM users WHERE email = '" . $_SESSION['email'] . "'";

    // Execute the query and fetch the user's id
    $user_id_result = mysqli_query($conn, $user_id_query);

    if ($user_id_result && mysqli_num_rows($user_id_result) > 0) {
        $user_id_row = mysqli_fetch_assoc($user_id_result);
        $id = $user_id_row['id'];
    }

    $year = $_POST['year'];
    $course = $_POST['course'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $civilstatus = $_POST['civilstatus'];
    $lot = $_POST['lot'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $mobileno = $_POST['mobileno'];

    if (empty($age)) {
        $age_error = "Please enter your Age";
        $error = 1;
    } else if (!preg_match("/^[0-9]*$/", $age) || $age < 18 || $age > 99) {
        $age_error = "Please enter a valid age";
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

    if (empty($mobileno)) {
        $mobileno_error = "Please enter your Mobile Number";
        $error = 1;
    } else if (!preg_match("/^[0-9]*$/", $mobileno) || strlen($mobileno) !== 11) {
        $mobileno_error = "Please enter a valid 11-digit Mobile Number containing only numbers.";
        $error = 1;
    }

   
    if(empty($lot))
    {
      $lot_error = "Please enter your Lot/Bldg/Subd/Unit/Floor No.";
      $error=1;
    }

    if(empty($street))
    {
      $street_error = "Please enter Street";
      $error=1;
    }

    if(empty($city))
    {
      $city_error = "Please enter City";
      $error=1;
    }

    if(empty($state))
    {
      $state_error = "Please enter State";
      $error=1;
    }

    if($error==0)
    {


    // Construct the SQL query to insert or update
    $insert_user1 = "INSERT INTO alumnitracerform_data (id, year, course, name, age, gender, nationality, civilstatus, 
    lot, street, city, state, mobileno)
    VALUES ('$id', '$year', '$course', '$name', '$age', '$gender', '$nationality', '$civilstatus', 
    '$lot', '$street', '$city', '$state', '$mobileno')
    ON DUPLICATE KEY UPDATE
    year = VALUES(year), course = VALUES(course), name = VALUES(name), age = VALUES(age), gender = VALUES(gender),
    nationality = VALUES(nationality), civilstatus = VALUES(civilstatus), lot = VALUES(lot), street = VALUES(street),
    city = VALUES(city), state = VALUES(state), mobileno = VALUES(mobileno)";

    // Execute the query
    if (mysqli_query($conn, $insert_user1)) {
        echo "<script>alert('Your record for Alumni Tracer has been added and updated. Check your tracer form to see the updated infos. We appreciate your cooperation!');</script>";
    } else {
        echo "<script>alert('Something went wrong please try again.');</script>";
        
    }
}

    else
{
    echo "<script>alert('There are invalid inputs, Check again.');</script>";
  $msg = '<span style="color: red;">Please fill all fields</span>';
}
}

?>


<!-- insert into para makuha yung sagot ni user sa tracer form papunta sa table ng tracer -->
<?php
$error=0;
if (isset($_POST['submit'])) {
    $id = null; // Initialize user_id as null
    $user_id_query = "SELECT id FROM alumnitracerform_data WHERE id ='".$_SESSION['id']."'"; 
    $user_id_result = mysqli_query($conn, $user_id_query);
    if ($user_id_result && mysqli_num_rows($user_id_result) > 0) {
        $user_id_row = mysqli_fetch_assoc($user_id_result);
        $id = $user_id_row['id'];
        
    }

    $year = $_POST['year'];
    $course = $_POST['course'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $civilstatus = $_POST['civilstatus'];
    $lot = $_POST['lot'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $mobileno = $_POST['mobileno'];
    $emp_status = $_POST['emp_status'];
    $e_name_of_business = $_POST['e_name_of_business'];
    $current_job_position = $_POST['current_job_position'];
    $company_affiliation = $_POST['company_affiliation'];
    $company_address = $_POST['company_address'];
    $monthly_salary = $_POST['monthly_salary'];
    $e_date_employed = $_POST['e_date_employed'];
    $e_emp_status = $_POST['e_emp_status'];
    $name_of_business = $_POST['name_of_business'];
    $nature_of_business = $_POST['nature_of_business'];
    $role_in_business = $_POST['role_in_business'];
    $business_address = $_POST['business_address'];
    $business_phone_number = $_POST['business_phone_number'];
    $business_approx_salary = $_POST['business_approx_salary'];
    $s_date_employed = $_POST['s_date_employed'];
    $s_emp_status = $_POST['s_emp_status'];
    $job_industry_type = $_POST['job_industry_type'];
    $emp_source = $_POST['emp_source'];
    $job_relate = $_POST['job_relate'];
    $emp_immediate = $_POST['emp_immediate'];
    $job_satisfaction = $_POST['job_satisfaction'];
    $intend_to_stay = $_POST['intend_to_stay'];
    $user_id = $_SESSION['id'];

    if($emp_status == '') {
        $emp_status_error = "Please select Employment Status";
        $error = 1;
    }
    
    if(empty($emp_source))
        {
          $emp_source_error = "Source of First Employment is required.";
          $error=1;
        }
        
        if(empty($emp_immediate))
        {
          $emp_immediate_error = "Employed Immediately is required.";
          $error=1;
        }
        
        if(empty($job_relate))
        {
          $job_relate_error = "Job Related to Course is required.";
          $error=1;
        }
        
        if(empty($job_satisfaction))
        {
          $job_satisfaction_error = "Job Satisfaction is required.";
          $error=1;
        }
        
        if(empty($intend_to_stay))
        {
          $intend_to_stay = "Intention to Stay is required.";
          $error=1;
        }

    if ($emp_status == 'employed') {
        if(empty($e_name_of_business))
        {
          $e_name_of_business_error = "Please enter your name of Company";
          $error=1;
        }

        if(empty($current_job_position))
        {
          $current_job_position_error = "Please enter your current Job Position";
          $error=1;
        }

        if(empty($company_affiliation))
        {
          $company_affiliation_error = "Please enter your Company Affiliation";
          $error=1;
        }

        if(empty($company_address))
        {
          $company_address_error = "Please enter your Company Address";
          $error=1;
        }

        if(empty($job_industry_type))
    {
      $job_industry_type_error = "Please enter current Job Industry Type";
      $error=1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/", $job_industry_type))
    {
      $job_industry_type_error = "Only letters are allowed";
      $error=1;
    }


        if(empty($monthly_salary))
        {
          $monthly_salary_error = "Please enter your Approximate Monthly Salary";
          $error=1;
        }

        if(empty($e_date_employed))
        {
          $e_date_employed_error = "Please enter date of employment";
          $error=1;
        }

        if($e_emp_status == '') {
            $e_emp_status_error = "Please select Employment Status";
            $error = 1;
        }
        
        if($error==0) {
        $model->insertEmploymentRecord($user_id, $e_name_of_business, $e_date_employed, $current_job_position, $e_emp_status, $monthly_salary, 1);
        }
    }

    elseif ($emp_status == 'selfemployed') {
        if(empty($name_of_business))
{
$name_of_business_error = "Please enter your name of Business";
$error=1;
}

if(empty($nature_of_business)) {
  $nature_of_business_error = "Please enter Nature of Business";
  $error = 1;
}
elseif(!preg_match("/^[a-zA-Z ]*$/", $nature_of_business))
{
$nature_of_business_error = "Only letters are allowed";
$error=1;
}

if(empty($role_in_business))
{
$role_in_business_error = "Please enter your role in Business";
$error=1;
}

if(empty($business_address))
{
$business_address_error = "Please enter your business Address";
$error=1;
}

if(empty($business_phone_number)) {
  $business_phone_number_error = "Please enter Business Phone Number";
  $error = 1;
} 
elseif(!preg_match("/^[0-9]*$/", $business_phone_number) || strlen($business_phone_number) !== 11) 
{
  $business_phone_number_error = "Please enter a valid 11-digit Mobile Number containing only numbers.";
  $error = 1;
}

if(empty($business_approx_salary)) {
  $business_approx_salary_error = "Please enter Business Approximate salary";
  $error = 1;
} 
elseif (!preg_match("/^[0-9]*$/", $business_approx_salary))
{
  $business_approx_salary_error = "Please enter a valid salary containing only numbers.";
  $error = 1;
}

if(empty($s_date_employed))
  {
    $s_date_employed_error = "Please enter date of employment";
    $error=1;
  }

  if($s_emp_status == '') {
      $s_emp_status_error = "Please select Employment Status";
      $error = 1;
  }
  
  if($error==0) {
          $model->insertEmploymentRecord($user_id, $name_of_business, $s_date_employed, $role_in_business, $s_emp_status, $business_approx_salary, 1);
      }
}

    if($error==0)
    {

    // Prepare and execute the SQL query
    $insert_user = "INSERT INTO alumnitracerform_data (id, year, course, name, age, gender, nationality, civilstatus, 
    lot, street, city, state, mobileno, emp_status, e_name_of_business, current_job_position, company_affiliation, 
    company_address, monthly_salary, e_date_employed, e_emp_status, name_of_business, nature_of_business, role_in_business,
    business_address, business_phone_number, business_approx_salary, s_date_employed, s_emp_status, job_industry_type, emp_source, job_relate, emp_immediate, 
    job_satisfaction, intend_to_stay)
    VALUES ('$id', '$year', '$course', '$name', '$age', '$gender', '$nationality', '$civilstatus', 
    '$lot', '$street', '$city', '$state', '$mobileno', '$emp_status', '$e_name_of_business', '$current_job_position', '$company_affiliation', 
    '$company_address', '$monthly_salary', '$e_date_employed', '$e_emp_status', '$name_of_business', '$nature_of_business', '$role_in_business', '$business_address',
    '$business_phone_number', '$business_approx_salary', '$s_date_employed', '$s_emp_status', '$job_industry_type', '$emp_source', '$job_relate', '$emp_immediate', 
    '$job_satisfaction', '$intend_to_stay')
    ON DUPLICATE KEY UPDATE
    year = VALUES(year), course = VALUES(course), name = VALUES(name), age = VALUES(age), gender = VALUES(gender),
    nationality = VALUES(nationality), civilstatus = VALUES(civilstatus), lot = VALUES(lot), street = VALUES(street),
    city = VALUES(city), state = VALUES(state), mobileno = VALUES(mobileno), emp_status = VALUES(emp_status),
    e_name_of_business = VALUES(e_name_of_business), current_job_position = VALUES(current_job_position),
    company_affiliation = VALUES(company_affiliation), company_address = VALUES(company_address),
    monthly_salary = VALUES(monthly_salary), e_date_employed = VALUES(e_date_employed),
    e_emp_status = VALUES(e_emp_status), name_of_business = VALUES(name_of_business),
    nature_of_business = VALUES(nature_of_business), role_in_business = VALUES(role_in_business),
    business_address = VALUES(business_address), business_phone_number = VALUES(business_phone_number),
    business_approx_salary = VALUES(business_approx_salary), s_date_employed = VALUES(s_date_employed),
    s_emp_status = VALUES(s_emp_status), job_industry_type = VALUES(job_industry_type),
    emp_source = VALUES(emp_source), job_relate = VALUES(job_relate), emp_immediate = VALUES(emp_immediate),
    job_satisfaction = VALUES(job_satisfaction), intend_to_stay = VALUES(intend_to_stay)";


if (mysqli_query($conn,$insert_user))  
{ 
   
   echo "<script>alert('Your record for Alumni Tracer has been added and updated. Check your tracer form to see the updated infos. We appreciate your cooperation!');</script>";
   
}  

else{

   echo "<script>alert('Something went wrong please try again.');</script>";

}


}

else
{
echo "<script>alert('There are invalid inputs, Check again2.');</script>";
$msg = '<span style="color: red;">Please fill all fields</span>';
}
}

?>


<!-- update -->


<?php
if(strlen($_SESSION['login'])==0)
    {   
header('location: https://auaaiconnect.online/login.php');
}

?>


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
        <title>Alumni Tracer Form</title>
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

        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5NJ9EYD133"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-5NJ9EYD133');
        </script>

        <style>

/*All white background */
body {
    background-color: #fbfbfb;
    margin: 0px;
    padding: 0px;
    font-family: 'Open Sans', sans-serif;
    color: #555555;
    margin: auto;
}
table {
     border-collapse: collapse;
     margin: 0px !important;
     padding:0px !important;
}
ul {
    list-style-type: none;
    
}
a {
    text-decoration: none;
    font-weight: 600;
}
hr {
    height:1px;
    color:#cccccc;
    border: 0px;
    background-color: #cccccc;
}


#topmenu {
    margin:auto;
    color:#FFF;
    /*ADDITIONAL FOR FIXED TOP MENU TEST*/
    min-width: 1024px;
    width:100%;
    
    /*ADDITIONAL FOR FIXED TOP MENU TEST*/
}
#topmenu a {
    text-decoration:none;
}

#topbanner {
    height: 300px;
    background-color:#999;
    }


#span4 {
    background-color: #0080c9;
    height:55px;

}

#span5 {
    width: 1024px;
    margin:auto;
}
#span6 {
    width: 1024px;
    margin:auto;
}

#adulogo {
    height: 55px;
    width: 290px;
    padding-top: 3px;
}
#menu-minor, #menu-major {
    font-size: 15px;
    }
#menu-minor ul, #menu-major ul {
    list-style-type:none;
}
#menu-minor li {
    display:inline-block;
    margin-right: 15px;
}

.menu-minor2 td {
padding-right: 20px;
padding-top: 8px;
}
.menu-minor2 a {
font-size: 12px;
color:#fff !important;

}

#menu-major li {
    display:inline-block;
    margin-right: 35px;
}

#menu-major a{
     color:#FFF;
     font-weight: 400;
     text-decoration:none;
 }
#menu-minor a  {
    color:#FFF;
    font-weight: 300;
    text-decoration:none;
}
#menu-minor a:hover, #menu-major a:hover {
    color:#FFF;
    /*text-decoration:underline;*/
}
#header-banner {
    height: auto;
    background-color:#014590;
    display:block;
    /*padding-top: 20px;
    padding-bottom: 40px;*/
    
    
}   
    
    
    .header {
        height:50px;
        background:#F0F0F0;
        width:960px;
        margin:0px auto;
    
}
    .header-cont {
        width:100%;
        position:fixed;
        top:0px;
}

/*START BUTTON STYLES*/
.button, .button span {
    display: inline-block;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.button {
    white-space: nowrap;
    line-height:1em;
    position:relative;
    outline: none;
    overflow: visible; 
    cursor: pointer;
    border: 1px solid #999;
    border: rgba(0, 0, 0, .2) 1px solid;
    user-select: none;
    margin-bottom:10px;
    background-color:#0080c8;
    
}
.button span {
    position: relative;
    border-top: rgba(255, 255, 255, .2) 1px solid;
    padding:0.6em 1.3em;
    line-height:1em;
    text-decoration:none;
    text-align:center;
    white-space: nowrap;
}
.button span a {
    color:#FFF;
    font-weight: 300;
    font-size: 14px;
}
.button:active, .button.active {
    top:1px;
}

/*END BUTTON STYLES*/
.wrapper-cols {
        padding-right: 15px;
    }
        .wrapper-cols img {
            float:left;
            clear:right;
            display:block;
            margin-right: 15px;
            margin-bottom: 15px;
            margin-top: 15px;
        }
        .wrapper-cols p{
              text-align:left;
             display:block;
        }
        .wrapper-cols ul {
            padding: 0px;
        }
        .wrapper-cols #news-archive li {
            border-bottom:#dbdbdb thin solid;
            border-top:#dbdbdb thin solid;
            border-right:#dbdbdb thin solid;
            
            background-color:#FFF;
            width: 94%;
            padding: 20px;
            margin-bottom: 10px;
        }
        .wrapper-cols #news-archive h3 {
            margin: 0px;
            padding: 0px;
        }
        .wrapper-cols h2 {
            line-height: 24px;
        }
        .wrapper-cols #article-title {
            font-family: 'Vollkorn', serif;
            font-size: 32px;
            margin-top: 15px;
            margin-bottom: 10px;
            line-height: 34px;
        }




a {
    color: currentColor;
    text-decoration: none;
  }
  
  p {
    font-size: 14px;
    line-height: 19px;
  }
  
  .flex-caption {
    position: relative;
    background: #fff;
    color: #333;
    max-width: 310px;
    display: table;
    padding: 30px;
    border-radius: 4px;
  }
  
  .flex-caption p {
    color: #777;
  }
  
  li.css a {
        border-radius: 0;
  }
  
  .flex-viewport {
    max-height: 450px;
    max-width: 800px;
  }
  
  section.slider {
    width: 800px;
    margin: 5% auto;
  }
  
  .flexslider .slides img {
    height: auto;
    max-width: 490px;
    border-radius: 4px 0px 0px 4px;
    float: left;
  }
  
  .flexslider {
    border: 0px solid #ffffff;
    box-shadow: 0 1px 30px rgba(0,0,0,.4);
    transition: 400ms ease;
  }
  
  span.date {
    font-size: 11px;
  }
  
  .flex-control-nav {
    bottom: 5px;
  }
  
  .flex-control-paging li a {
    width: 8px;
    height: 8px;
    background: rgba(255, 255, 255, 0.5);
  }
  
  .flex-control-paging li a:hover {
    background: #4183D7;
  }
  
  .flex-control-paging li a.flex-active {
    background: #4183D7;
  }
  
  .flex-control-nav {
    text-align: left;
    margin-left: 20px;
  }
  
  .flexslider .slides > li {
    position: relative;
  }
  
  .card-outmore {
    padding: 10px 30px 10px 30px;
    border-radius: 0px 0px 4px 0px;
    border-top: 1px solid #e0e0e0;
    background: #efefef;
    color: #222;
    display: inline-table;
    width: 100%;
    max-width: 310px;
    transition: 400ms ease;
    position: absolute;
    bottom: 0;
    right: 0;
    box-sizing: border-box;
  }
  .card-outmore h5 {
    float: left;
    margin: 0px;
  }
  .card-outmore i {
    float: right;
  }
  #outmore-icon {
    border:1px solid ;
    padding: 1px 6px;
    border-radius: 50em;
  }
  
  .flex-direction-nav a:before {
    font-family: "FontAwesome";
    font-size: 38px;
    display: inline-block;
    content: '\f104';
    color: #fff;
  }
  
  .flex-direction-nav a.flex-next:before {
    content: '\f105';
    color: #333;
  }
  
  a:hover .card-outmore {
    background: #2C3E50;
    color: #fff;
  }
  
  a:hover .flexslider {
    box-shadow: 0 10px 50px rgba(0,0,0,.6);
  }

  /*FOOTER STYLES*/
    #footer-wrapper {
        background-color: #0080c9;
        width: 100%;
        position: static;
        bottom: 0px;
        
        min-width: 1024px;
        margin:auto;
        margin-top: 30px;
    }
     /*FOOTER LINKS*/
        #footer-links {
            background-color: #0080c9;
            width: 1024px;
            margin: auto;
            font-size: 14px;
            color:#FFF;
            min-height: 250px;
            }
            #footer-links ul {
                margin: 0px;
                padding: 0px;
            }
            
            #footer-span {
                height: 60px;
                margin-left: auto;
                margin-right: auto;
            }
                #footer-span #ftradu {
                    width:1px;
                    height: 10px;
                    
                }
                #footer-span #ftrlnks li {
                    list-style-type: disc;
                    margin-left: 5px;
                }
            
                #footer-span #ftrfndus a {
                    color:#FFF;
                }
                #footer-span #ftrsocial li {
                    display:inline-block;
                }
            
                 /*COPYRIGHT FOOTER*/
        #copyright {
            height: 50px;
            background-color: #014590;
            color:#FFF;
            font-size: 12px;
        }
             /*COPYRIGHT LINK*/
            #copyright a {
                color:#FFF;
                font-size: 12px;
            }
    
            #copyright #copyright-span {
                width: 1024px;
                margin: auto;
                padding-top: 15px;
            }
            #copyright #copyright-span li {
                display:inline-block;
                
            }
            
            
        
/*END FOOTER STYLES*/
.bg-black {
    background-color: #2d2926 !important;
}

.bg-white {
    background: white !important;
}

.bg-dkblue {
    background: #323a45 !important;
}


.bg-light-gray {
    background: #ecf0f1 !important;
}

.bg-dkgold {
    background: #fbb034 !important;
}

.bg-yellow {
    background: #10A5D2 !important;
}



.btn-outline-light:hover {
    color: #2d2926;
}

.bg-midblue {
    background: #004b79 !important;
}

.text-yellow {
    color: #194572 !important;
}

.text-dkblue {
    color: #323a45 !important;
}



.text-blue {
    color: #fff!important;
}

.text-midblue, .text-primary {
    color: #004b79 !important;
}
/*Carousel/Slide Home CSS*/
.swiper-container {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    /* Center slide text vertically */

    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    object-fit: cover;
}
/*Overlay Mask for background slide*/
.dark-mask {
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}
#footer{
    padding: 20px 0px;
    background: #f3f3f3;
    text-align: center
}

.dark-mask.mask-primary {
    background: rgba(0, 0, 0, 0.2);
}

.shadow {
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
}

.text-cinzel {
    font-family: 'Cinzel', serif;
}

.carousel-cell {
    width: 28%;
    margin-right: 10px;
    counter-increment: carousel-cell;
}

.carousel-cell.is-selected {
}
/* cell number */
.carousel-cell:before {
    display: block;
}
/*careers*/
.career-box {
    min-height: calc(100vh -195px);
}

@media all and (max-width:992px) {
    
    .offcanvas-header {
        display: block;
    }
    .mobile-offcanvas {
        visibility: hidden;
        transform: translateX(-100%);
        border-radius: 0;
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        z-index: 1200;
        width: 80%;
        overflow-y: scroll;
        overflow-x: hidden;
        transition: visibility .2s ease-in-out, transform .2s ease-in-out;
    }
    .mobile-offcanvas.show {
        visibility: visible;
        transform: translateX(0);
    }
}

#card_mobile a {
    font-size: 12px;
}

.bg-black {
    background-color: #2d2926 !important;
}

.bg-white {
    background: white !important;
}

.bg-dkblue {
    background: #323a45 !important;
}



.bg-light-gray {
    background: #ecf0f1 !important;
}

.bg-dkgold {
    background: #fbb034 !important;
}

.bg-yellow {
    background: #10A5D2 !important;
}

.home-slides {
    background: url('../../resources/images/adamsonback.png')center center no-repeat;
    background-size: cover;
    /*background-attachment: fixed;*/

    height: calc(100vh -200px);
}

.btn-outline-light:hover {
    color: #2d2926;
}

.bg-midblue {
    background: #004b79 !important;
}

.text-yellow {
    color: #194572 !important;
}

.text-dkblue {
    color: #323a45 !important;
}

.text-dkgold {
    color: #fbb034 !important;
}


.text-midblue, .text-primary {
    color: #004b79 !important;
}
/*Carousel/Slide Home CSS*/
.swiper-container {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    /* Center slide text vertically */

    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    object-fit: cover;
}
/*Overlay Mask for background slide*/
.dark-mask {
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}

.dark-mask.mask-primary {
    background: rgba(0, 0, 0, 0.2);
}

.shadow {
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
}

.text-cinzel {
    font-family: 'Cinzel', serif;
}

.carousel-cell {
    width: 28%;
    margin-right: 10px;
    counter-increment: carousel-cell;
}

.carousel-cell.is-selected {
}
/* cell number */
.carousel-cell:before {
    display: block;
}
/*careers*/
.career-box {
    min-height: calc(100vh -195px);
}

.bg-image {
    background-image: url('../../resources/images/bg/careerbg.jpg');
    background-size: cover;
    background-position: center center;
}

.cover {
    object-fit: cover;
    width: 150px
}

.text-normal {
    font-weight: normal !important;
}
/*events*/
.square {
    width: 100%;
    height: 0;
    padding-top: 100%;
    background-color: #ccc;
    position: relative;
}

.content {
    position: absolute;
    top: 0;
    left: 0;
}

.gallery img {
    height: 200px;
    object-fit: cover;
    object-position: bottom;
}

.perks img {
    height: 150px;
    padding-top: 10px;
    object-fit: contain;
    object-position: center;
}
/*Pagination*/
.hide-item {
    display: none;
}
/*Off-Canvas*/
body.offcanvas-active {
    overflow: hidden;
}

.offcanvas-header {
    display: none;
}

.screen-overlay {
    width: 0%;
    height: 100%;
    z-index: 30;
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    background-color: rgba(34, 34, 34, 0.6);
    transition: opacity .2s linear, visibility .1s, width 1s ease-in;
}

.screen-overlay.show {
    transition: opacity .5s ease, width 0s;
    opacity: 1;
    width: 100%;
    visibility: visible;
}

/*viewport mobile */
@media all and (max-width:992px) {
    
    .offcanvas-header {
        display: block;
    }
    .mobile-offcanvas {
        visibility: hidden;
        transform: translateX(-100%);
        border-radius: 0;
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        z-index: 1200;
        width: 80%;
        overflow-y: scroll;
        overflow-x: hidden;
        transition: visibility .2s ease-in-out, transform .2s ease-in-out;
    }
    .mobile-offcanvas.show {
        visibility: visible;
        transform: translateX(0);
    }
}

#card_mobile a {
    font-size: 12px;
}

/*Shop*/

.img-wrap{
    text-align: center;
    overflow: hidden;
    display: block;
}

.sale-bar{
    position: absolute;
    top: 0;
    left: 20px;
    z-index: 10;
    text-align: left;
    margin: 15px 10px;
    
}

.slash-price{
    text-decoration: line-through;
}

.list-check{
  list-style: none;
  margin-left: 0;
  padding-left: 0;
}

.list-check li::before {
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 13px;
  color: #33b750;
  margin-right: 10px;
  content: "\f00c";
}

.checkbox-btn{
    position: relative;
}

.checkbox-btn input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.bg-image {
    background-image: url('../../resources/images/adamsoncareerbackground.PNG');
    background-size: cover;
    background-position: center center;
}
.about-bg {
    background: url('resources/images/adamsonabout.PNG')top center no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
    color:#000;
}

.mb-1, .my-1 {
    margin-bottom: 0!important;
    color:#fff;
}

.pmessage{
    color:#fff;

}
/*paragraph text*/
p{
    color:#000; 
}
.cardlogin {
    background-color: rgba(0,0,0,0.5) !important;
       border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.75rem;
}
.card-header h3{
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-size: 0.935rem;
    margin: 0 !important;
    color:#fff;
}
.card-body2 p {
    font-size: 0.9rem;
    color: #fff;
}
.card-title {
    margin-bottom: 0.75rem;
    color: #fff;
}
/* Preload images */
body:after {
    content: url(../images/lightbox/close.png) url(../images/lightbox/loading.gif) url(../images/lightbox/prev.png) url(../images/lightbox/next.png);
    display: none;
  }
  
  .lightboxOverlay {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9999;
    background-color: black;
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
    opacity: 0.8;
    display: none;
  }
  
  .lightbox {
    position: absolute;
    left: 0;
    width: 100%;
    z-index: 10000;
    text-align: center;
    line-height: 0;
    font-weight: normal;
  }
  
  .lightbox .lb-image {
    display: block;
    height: auto;
    max-width: inherit;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
  }
  
  .lightbox a img {
    border: none;
  }
  
  .lb-outerContainer {
    position: relative;
    background-color: white;
    *zoom: 1;
    width: 250px;
    height: 250px;
    margin: 0 auto;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
  }
  
  .lb-outerContainer:after {
    content: "";
    display: table;
    clear: both;
  }
  
  .lb-container {
    padding: 4px;
  }
  
  .lb-loader {
    position: absolute;
    top: 43%;
    left: 0;
    height: 25%;
    width: 100%;
    text-align: center;
    line-height: 0;
  }
  
  .lb-cancel {
    display: block;
    width: 32px;
    height: 32px;
    margin: 0 auto;
    background: url(../images/lightbox/loading.gif) no-repeat;
  }
  
  .lb-nav {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 10;
  }
  
  .lb-container > .nav {
    left: 0;
  }
  
  .lb-nav a {
    outline: none;
    background-image: url('data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
  }
  
  .lb-prev, .lb-next {
    height: 100%;
    cursor: pointer;
    display: block;
  }
  
  .lb-nav a.lb-prev {
    width: 34%;
    left: 0;
    float: left;
    background: url(../images/lightbox/prev.png) left 48% no-repeat;
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transition: opacity 0.6s;
    -moz-transition: opacity 0.6s;
    -o-transition: opacity 0.6s;
    transition: opacity 0.6s;
  }
  
  .lb-nav a.lb-prev:hover {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  
  .lb-nav a.lb-next {
    width: 64%;
    right: 0;
    float: right;
    background: url(../images/lightbox/next.png) right 48% no-repeat;
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transition: opacity 0.6s;
    -moz-transition: opacity 0.6s;
    -o-transition: opacity 0.6s;
    transition: opacity 0.6s;
  }
  
  .lb-nav a.lb-next:hover {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  
  .lb-dataContainer {
    margin: 0 auto;
    padding-top: 5px;
    *zoom: 1;
    width: 100%;
    -moz-border-radius-bottomleft: 4px;
    -webkit-border-bottom-left-radius: 4px;
    border-bottom-left-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 4px;
  }
  
  .lb-dataContainer:after {
    content: "";
    display: table;
    clear: both;
  }
  
  .lb-data {
    padding: 0 4px;
    color: #ccc;
  }
  
  .lb-data .lb-details {
    width: 85%;
    float: left;
    text-align: left;
    line-height: 1.1em;
  }
  
  .lb-data .lb-caption {
    font-size: 13px;
    font-weight: bold;
    line-height: 1em;
  }
  
  .lb-data .lb-number {
    display: block;
    clear: left;
    padding-bottom: 1em;
    font-size: 12px;
    color: #999999;
  }
  
  .lb-data .lb-close {
    display: block;
    float: right;
    width: 30px;
    height: 30px;
    background: url(../images/lightbox/close.png) top right no-repeat;
    text-align: right;
    outline: none;
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);
    opacity: 0.7;
    -webkit-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    -o-transition: opacity 0.2s;
    transition: opacity 0.2s;
  }
  
  .lb-data .lb-close:hover {
    cursor: pointer;
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  


  @import url("https://fonts.googleapis.com/css?family=Cinzel:700|Lato:400,400i,900|Raleway:400,400i,700,800&display=swap");
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');
  
  
  
   /* link  */ 
  a {
      -webkit-transition: all 0.3s !important;
      transition: all 0.3s !important;
      display: inline-block;
  }

  .bs-select .dropdown-menu .dropdown-menu {
      min-height: 20px;
      display: block;
  }
  
  .bs-select .dropdown-menu .dropdown-menu a {
      padding: 6px 10px;
      color: #666;
      font-weight: 700;
      text-decoration: none !important;
      display: block;
      font-size: .8rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-family: 'Poppins', sans-serif;
      outline: none;
  }
  
  .heading-light {
      font-weight: 300 !important;
  }
  
  .text-bold {
      font-weight: 700;
  }
  
  .text-small {
      font-size: 0.8rem;
      background-color: #fff;
  }
  
  .text-uppercase {
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  .no-letter-spacing {
      letter-spacing: 0 !important;
  }
  
  .bar {
      padding: 60px 0;
  }
  
  .bar.padding-big {
      padding: 50px 0;
  }
  
  
  
  
  .text-xs {
      font-size: 0.9rem;
  }
  
  .text-xs * {
      font-size: 0.9rem;
  }
  
   /* bg gray */ 
  .bg-gray {
      background: #e9ecef !important;
  }
  /* bg gray dark */ 
  .bg-gray-dark {
      background: #555 !important;
  }
  /* bg primary */ 
  .bg-primary {
      background: #022849 !important;
  }
  /* color white */ 
  .color-white {
      color: #fff !important;
  }
  
  
  /* bg white */ 
  .bg-white {
      background: #fff !important;
  }
  
  .bg-fixed {
      background-attachment: fixed !important;
  }
  
  .light-gray {
      background: #eee;
  }
  
  /* adu logo1 */ 
  .background-pentagon, #heading-breadcrumbs {
      background: url('resources/images/adulogo.png')center center repeat;
      background-size: cover;
      border-top: 1px solid #999;
      border-bottom: 1px solid #999;
  }
  /* adu logo2 */ 
  .background-pentagon2 ,#heading-breadcrumbs2 {
      background: url('resources/images/adulogo.png')center center repeat;
      background-size: cover;
      border-top: 1px solid #999;
      border-bottom: 1px solid #999;
  }
  
  .heading, .panel-heading {
      margin-bottom: 1rem;
  }
  
  .heading h1, .panel-heading h1, .heading h2, .panel-heading h2, .heading h3, .panel-heading h3, .heading h4, .panel-heading h4, .heading h5, .panel-heading h5, .heading h6, .panel-heading h6 {
      line-height: 1.1;
      display: inline-block;
      margin-bottom: 0;
      padding-bottom: 10px;
      text-transform: uppercase;
     
  }
  
  .heading h1:after, .panel-heading h1:after, .heading h2:after, .panel-heading h2:after, .heading h3:after, .panel-heading h3:after, .heading h4:after, .panel-heading h4:after, .heading h5:after, .panel-heading h5:after, .heading h6:after, .panel-heading h6:after {
      content: " ";
      display: block;
      width: 100px;
      height: 2px;
      margin-top: .6rem;
      /*background: #022849;*/
      background: #20B2F6;
  }
  
  .heading.text-center h1:after, .text-center.panel-heading h1:after, .heading.text-center h2:after, .text-center.panel-heading h2:after, .heading.text-center h3:after, .text-center.panel-heading h3:after, .heading.text-center h4:after, .text-center.panel-heading h4:after, .heading.text-center h5:after, .text-center.panel-heading h5:after, .heading.text-center h6:after, .text-center.panel-heading h6:after {
      margin-left: auto;
      margin-right: auto;
  }
  
  
  .dropdown-item.active, .dropdown-item:active {
      background: #022849;
  }
  
  .card {
      border-radius: 0;
      margin-bottom: 10px;
  }
  
  .card-header {
      border-radius: 0;
      padding: 20px;
  }
  
  .card-header h1, .card-header h2, .card-header h3, .card-header h4, .card-header h5, .card-header h6 {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-size: 0.935rem;
      margin: 0 !important;
  }
  
  .card-header a {
      color: #333;
  }
  
  .card-body p {
      font-size: 0.9rem;
      color: #333;
  }
  
  #heading-breadcrumbs {
      padding: 2rem 0;
      border-top: none !important;
      border-bottom: none !important;
  }
  #heading-breadcrumbs2 {
      padding: 2rem 0;
      border-top: none !important;
      border-bottom: none !important;
  }
  
  #heading-breadcrumbs .breadcrumb {
      margin-bottom: 0;
      background: none;
      font-size: 0.9rem;
  }
  #heading-breadcrumbs2 .breadcrumb2 {
      margin-bottom: 0;
      background: none;
      font-size: 0.9rem;
  }
  
  #heading-breadcrumbs h1 {
    
      letter-spacing: 0.1em;
      margin-bottom: 0;
  }
  #heading-breadcrumbs2 h1 {
    
      letter-spacing: 0.1em;
      margin-bottom: 0;
  }
  
  #heading-breadcrumbs li {
    
      letter-spacing: 0.1em;
  }
  #heading-breadcrumbs2 li {
    
      letter-spacing: 0.1em;
  }
  
  .row.no-space {
      margin-left: 0;
      margin-right: 0;
  }
  
  .row.no-space div[class*="col-"] {
      padding: 0;
  }
  
  .row.no-space .box-image {
      margin: 0;
  }
  
  .owl-carousel .owl-dots {
      margin-top: 20px;
      text-align: center;
  }
  
  .owl-carousel .owl-dots .owl-dot {
      display: inline-block;
      margin: 0 5px;
  }
  
  .owl-carousel .owl-dots .owl-dot.active span {
      background: #fff;
  }
  
  .owl-carousel .owl-dots .owl-dot span {
      display: block;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #aaa;
  }
  
  
  .nav-tabs {
      border-bottom: none;
  }
  
  .nav-tabs a.nav-link {
      border-radius: 0 !important;
      font-size: 0.9rem;
  }
  
  .tab-content {
      padding: 20px;
      border: 1px solid #ddd;
      font-size: 0.9rem;
  }
  /*top bar background*/
  .top-bar {
      background-image: url("../../resources/images/headerback.PNG");
      color: #fff;
      font-size: 0.9rem;
      /*padding: 10px 0;*/
  
      background-size: cover;
  }
  
  
  .top-bar p {
      margin-bottom: 0;
      font-size: 0.75rem;
  }
  
  .top-bar ul {
      margin-bottom: 0;
  }
  
  .top-bar a.login-btn, .top-bar a.signup-btn {
      color: #eee;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      text-decoration: none !important;
      font-size: 0.75rem;
      font-weight: 700;
      margin-right: 10px;
  }
  
  .top-bar a.login-btn i, .top-bar a.signup-btn i {
      margin-right: 10px;
  }
  
  .top-bar ul.social-custom {
      margin-left: 20px;
  }
  
  .top-bar ul.social-custom li {
      padding: 0;
      margin: 0;
  }
  
  .top-bar ul.social-custom a {
      text-decoration: none !important;
      font-size: 0.7rem;
      width: 26px;
      height: 26px;
      line-height: 26px;
      color: #999;
      text-align: center;
      border-radius: 50%;
      margin: 0;
  }
  
  .top-bar ul.social-custom a:hover {
      background: #022849;
      color: #fff;
  }
  
  .top-bar .contact-info {
      margin-right: 20px;
  }
  
  .top-bar .contact-info a {
      font-size: 0.8rem;
  }
  
  /*header nav*/
  header.nav-holder.sticky {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #fff;
      z-index: 999;
      -webkit-box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
      box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
  }
       /*navbar*/
  #navbar {
      background: #048ABF;
      padding-top: 0;
      padding-bottom: 0;
  }
   /*navbar toggle*/
  #navbar .navbar-toggler {
      font-size: 0.9rem;
      padding: 10px 15px;
      border-color: #ddd;
  }
  
  #navbar ul ul a {
      padding-left: 0 !important;
  }
   /*navbar dropdown*/
  #navbar .dropdown-menu {
      border-radius: 0;
      -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 0;
      padding-top: 0;
      padding-bottom: 0;
  }
   /*navbar dropdown padding*/
  #navbar .dropdown-menu .dropdown-item {
      padding: 0;
  }
  
  #navbar .dropdown-menu h5 {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      padding-bottom: 5px;
      border-bottom: 1px dotted #ccc;
      margin-top: .7rem;
      margin-bottom: .5rem;
  }
   /*navbar dropdown link*/
  #navbar .dropdown-menu a.nav-link {
      font-size: 0.75rem;
      letter-spacing: 0.1em;
      text-transform: uppercase !important;
      border-bottom: 1px solid #eee;
      padding: 15px 20px !important;
  }
   /*navbar dropdown link hover*/
  #navbar .dropdown-menu a.nav-link:hover {
      -webkit-transform: translateX(5px);
      transform: translateX(5px);
      color: #fff;
  }
  
  #navbar .dropdown-submenu {
      position: relative;
  }
   /*navbar dropdown submenu*/
  #navbar .dropdown-submenu > .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -2px;
      font-size: 1em;
  }
  
  #navbar .menu-large {
      position: static !important;
  }
  
  #navbar .menu-large .megamenu {
      padding: 20px;
      width: 100%;
      max-width: 1140px;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      margin-top: -1px;
  }
  
  #navbar .menu-large a.nav-link {
      padding: 7px !important;
      padding-left: 0 !important;
  }
  
  #navbar .navbar-nav > li.active > a {
      background: #022849 !important;
      color: #fff !important;
      text-decoration: none !important;
      border-color: #555 !important;
  }
  
  #navbar .navbar-nav > li > a {
      margin: 0;
      padding: 1.4rem 1rem 1.6rem;
      color: #fff;
      font-weight: 600;
    
      letter-spacing: 0.1em;
      font-size: 0.9rem;
      text-decoration: none;
      border-top: .3rem solid transparent;
  }
  
  #navbar .navbar-nav > li > a:hover {
      background: #011F3A;
      border-color: #011F3A;
  }
  
  #navbar .navbar-nav > li > a:focus {
      background: #011F3A !important;
      color: #fff !important;
      text-decoration: none !important;
      border-color: #011F3A!important;
  }
  
  /*phone viewport*/
  @media (max-width:991px) {
      #navbar {
          padding-top: 1rem;
          padding-bottom: 1rem;
      }
      #navbar .menu-large .megamenu {
          width: 100%;
          left: 0 !important;
          -webkit-transform: none !important;
          transform: none !important;
      }
      #navbar .navbar-collapse {
          max-height: 600px;
          overflow-y: auto;
          margin-top: 1rem;
      }
      #navbar .navbar-nav > li > a {
          padding: 0 10px;
          height: 45px;
          line-height: 45px;
          border-top: 0;
          font-size: 0.85rem;
          width: 100%;
      }
      #navbar .navbar-nav > li > a:hover {
          background: rgba(0, 0, 62, 1)
  
      }
      #navbar .dropdown-menu {
          border: none;
          -webkit-box-shadow: none;
          box-shadow: none;
      }
  }
  
  .btn {
      /*text-transform: uppercase;*/
      letter-spacing: 0.1em;
  }
  
  .btn-template-main {
      background: #022849;
      border: 1px solid #022849 !important;
      color: #fff !important;
      border-radius: 0 !important;
      text-decoration: none;
  }
  
  .btn-template-main:hover, .btn-template-main:focus {
      background: #022849;
      color: #fff !important;
      border-color: #022849!important;
  }
  
  .btn-template-white {
      background: #022849;
      color: #fff !important;
      border: 1px solid #022849 !important;
      border-radius: 0 !important;
      text-decoration: none;
  }
  
  .btn-template-white:hover, .btn-template-white:focus {
      background: #022849 !important;
      color: #fff !important;
  }
  
  .btn-template-outlined {
      background: none;
      border: 1px solid #022849 !important;
      color: #022849;
      border-radius: 0 !important;
      text-decoration: none;
  }
  
  .btn-template-outlined:hover, .btn-template-outlined:focus {
      background: #022849;
      color: #fff !important;
  }
  
  .btn-template-outlined-white {
      background: none;
      border: 1px solid #fff !important;
      color: #fff;
      border-radius: 0 !important;
      text-decoration: none;
  }
  
  .btn-template-outlined-white:hover, .btn-template-outlined-white:focus {
      background: #fff;
      color: #022849!important;
  }
  
  .btn-template-outlined-black {
      background: none;
      border: 1px solid #333 !important;
      color: #333;
      border-radius: 0 !important;
      text-decoration: none;
  }
  
  .btn-template-outlined-black:hover, .btn-template-outlined-black:focus {
      background: #333 !important;
      color: #fff !important;
  }
  
  .features-buttons button {
      margin-bottom: 20px;
  }
  

  .home-carousel {
      color: #fff;
  }
  
  .home-carousel .owl-carousel {
      padding-top: 60px;
      padding-bottom: 20px;
  }
  
  .home-carousel h1, .home-carousel h2 {
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  .home-carousel li, .home-carousel p {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 10px;
  }
  
  .home-carousel p img {
      max-width: 200px;
  }
  
  .project .owl-dot.active span {
      background: #022849 !important;
  }
  
  .project .owl-nav {
      position: absolute;
      top: 0;
      right: 0;
      left: auto;
      bottom: auto;
      width: 100%;
      padding: 20px;
      text-align: right;
  }
  
  .project .owl-nav .owl-prev, .project .owl-nav .owl-next {
      width: 30px;
      height: 30px;
      line-height: 30px;
      background: #022849;
      color: #fff;
      text-align: center;
      border-radius: 50%;
      display: inline-block;
      margin: 0 5px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
  }
  
  .project .owl-nav .owl-prev:hover, .project .owl-nav .owl-next:hover {
      background: #022849;
      color: #fff;
  }
  @media (max-width:767px) {
      .home-carousel {
          text-align: center !important;
      }
      .home-carousel p, .home-carousel h1, .home-carousel ul {
          text-align: center !important;
      }
      .home-carousel img {
          margin: 10px auto;
      }
  }
  
  
  .pager {
      padding: 20px 0;
      margin-top: 20px;
      border-top: 1px solid #e6e6e6;
  }
  
  .disabled a, .disabled a:hover {
      border-color: #999 !important;
      color: #999 !important;
      background: none !important;
      cursor: not-allowed;
  }
  
  
  .box-simple {
      margin-bottom: 40px;
      text-align: center;
  }
  
  .box-simple:hover .icon-outlined {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
  }
  
  .box-simple .icon-outlined {
      color: #fff;
      border: 1px solid #022849;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
  }
  
  .box-simple h3 {
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  .box-simple p {
      color: #999;
      margin: 20px 0;
      font-size: 0.9rem;
  }
  
  .box-simple.box-white {
      border: dotted 1px #999;
      padding: 15px 20px;
      margin-bottom: 0;
  }
  
  .box-simple.box-white .icon {
      font-size: 2rem;
      margin-bottom: 1rem;
  }
  
  .box-simple.box-white p {
      color: #999;
      margin-bottom: 5px;
  }
  
  .box-simple.box-dark {
      border: dotted 1px #999;
      padding: 15px 20px;
      margin-bottom: 0;
      color: #fff;
      background: #555;
  }
  
  .box-simple.box-dark .icon {
      font-size: 2rem;
      margin-bottom: 1rem;
  }
  
  .box-simple.box-dark p {
      margin-bottom: 5px;
      color: #fff;
  }
  
  .same-height div[class*="col-"] {
      margin-bottom: 30px;
  }
  
  .same-height .box-white, .same-height.box-dark {
      height: 100%;
  }
  
  .box-image {
      position: relative;
      margin: 20px 0;
  }
  
  .box-image:hover .overlay {
      opacity: 1;
  }
  
  .box-image:hover h3, .box-image:hover p, .box-image:hover .buttons {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
  }
  
  .box-image:hover p {
      -webkit-transition-delay: 0.1s;
      transition-delay: 0.1s;
  }
  
  .box-image:hover .buttons {
      -webkit-transition-delay: 0.2s;
      transition-delay: 0.2s;
  }
  
  .box-image .name {
      margin-bottom: 20px;
  }
  
  .box-image a {
      text-decoration: none !important;
  }
  
  .box-image h3 {
      font-size: 1.125rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      opacity: 0;
      -webkit-transform: translateY(-50px);
      transform: translateY(-50px);
  }
  
  .box-image .overlay {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background: rgba(79, 191, 168, 0.6);
      padding: 20px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      opacity: 0;
  }
  
  .box-image .buttons {
      opacity: 0;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      -webkit-transform: translateY(20px);
      transform: translateY(20px);
  }
  
  .box-image .buttons a {
      margin: 0 3px;
  }
  
  .box-image p {
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      opacity: 0;
      -webkit-transform: translateY(20px);
      transform: translateY(20px);
  }
  
  .box-image-text .content {
      text-align: center;
  }
  
  .box-image-text p {
      color: #777;
      font-size: 0.9rem;
  }
  
  .see-more {
      margin-top: 40px;
  }
  
  .see-more p {
      font-size: 1.8rem;
      font-weight: 100;
  }
  
  .box {
      margin: 80px 0;
      border-top: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 20px;
  }
  
  .box a.btn {
      margin-top: 25px;
  }
  
  .box .box-header {
      background: #f7f7f7;
      margin: 20px 0 20px;
      padding: 20px;
      border-top: 1px solid #eee;
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  .box .box-footer {
      background: #f7f7f7;
      margin-top: 30px;
      padding: 20px;
      border-top: 1px solid #eee;
  }
  
  .box.shipping-method, .box.payment-method {
      margin: 0;
      margin-bottom: 20px;
  }
  
  .box.shipping-method h4, .box.payment-method h4 {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 5px;
  }
  
  .box.shipping-method p, .box.payment-method p {
      font-size: 0.9rem;
      color: #555;
  }
  
  .box-image-text {
      margin: 15px 0;
  }
  
  .box-image-text .image {
      position: relative;
      margin-bottom: 15px;
  }
  
  .box-image-text .overlay {
      width: 100%;
      height: 100%;
      background: rgba(79, 191, 168, 0.6);
      position: absolute;
      top: 0;
      opacity: 0;
      -webkit-transition: all 0.5s;
      transition: all 0.5s;
  }
  
  .box-image-text .overlay a {
      -webkit-transform: translateY(30px);
      transform: translateY(30px);
      opacity: 0;
  }
  
  .box-image-text .overlay i {
      margin-right: 5px;
  }
  
  .box-image-text .text {
      text-align: center;
  }
  
  .box-image-text .text .intro {
      text-align: left;
      margin-bottom: 20px;
      /*color: #888;*/
      font-size: 0.9rem;
  }
  
  .box-image-text h4 {
      margin: 10px 0;
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  .box-image-text .author-category {
      font-size: 0.75rem;
      color: #999;
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  .box-image-text .author-category a {
      font-weight: 500;
  }
  
  .box-image-text:hover .overlay {
      opacity: 1;
  }
  
  .box-image-text:hover .overlay a {
      -webkit-transform: none;
      transform: none;
      opacity: 1;
  }
  
  .box-footer a {
      margin: 0 !important;
  }
  
  .box-footer .right-col i {
      margin-left: 5px;
  }
  
  .box-footer .left-col i {
      margin-right: 5px;
  }
  @media (max-width:767px) {
      .box-footer {
          -webkit-box-pack: center !important;
          -ms-flex-pack: center !important;
          justify-content: center !important;
      }
      .box-footer a {
          margin-bottom: 10px !important;
      }
  }
  
  @media (max-width:767px) {
      .nav-pills {
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -ms-flex-direction: column;
          flex-direction: column;
      }
  }
  
  .sidebar-menu .badge {
      font-weight: 700;
      margin: 0;
  }
  
  .sidebar-menu.with-icons a.nav-link {
      position: relative;
  }
  
  .sidebar-menu.with-icons a.nav-link::before {
      content: '\f105';
      display: inline-block;
      position: absolute;
      top: 50%;
      right: 15px;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      font-family: 'FontAwesome';
  }
  
  .panel-heading {
      margin-bottom: 10px;
  }
  
  .panel-heading h3 {
      margin-top: 5px;
  }
  
  .panel-heading .btn {
      color: #fff;
      text-decoration: none !important;
  }
  
  .panel-heading .btn i {
      margin-right: 7px;
  }
  
  .panel-body p {
      font-size: .9rem;
      color: #555;
  }
  
  .panel-body label {
      font-size: 0.8rem;
      font-weight: 400 !important;
      color: #777;
      opacity: 0.9;
      display: inline-block;
      cursor: pointer;
  }
  
  .panel-body label input {
      margin-right: 5px;
  }
  
  .panel-body label:hover {
      opacity: 1;
  }
  
  .panel-body span.colour {
      display: inline-block;
      width: 14px;
      height: 14px;
      margin-top: 10px;
      margin-left: 5px;
      border: 1px solid #555;
  }
  
  .panel-body span.colour.white {
      background: #fff;
  }
  
  .panel-body span.colour.blue {
      background: #007bff;
  }
  
  .panel-body span.colour.green {
      background: #28a745;
  }
  
  .panel-body span.colour.red {
      background: #dc3545;
  }
  
  .panel-body span.colour.yellow {
      background: #022849;
  }
  
  .nav-pills .nav-link {
      border-radius: 0;
  }
  
  .nav-pills .nav-link:hover {
      background: #eee;
  }
  
  .nav-pills .nav-link.active {
      background: #022849;
  }
  
  .panel {
      margin-bottom: 20px;
  }
  
  .category-menu a.nav-link {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-weight: 700;
  }
  
  ul ul a.nav-link {
      padding-left: 30px !important;
      font-size: 0.85rem;
      text-transform: none !important;
      font-weight: 400 !important;
      color: #777;
  }
  
  .tag-cloud a {
      font-size: 0.8rem;
      border: 1px solid #eee;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-weight: 600;
      padding: 5px 10px;
      margin: 3px 0;
      text-decoration: none !important;
  }
  
  .tag-cloud a:hover {
      border-color: #022849;
  }
  
  .tag-cloud i {
      margin-right: 5px;
  }
  
  #map {
      border-top: 1px solid #022849;
      border-bottom: 1px solid #022849;
      height: 300px;
  }
  
  
  .map-custom-tooltip {
      padding: .5rem;
      border: 1px solid #fff;
      border-radius: 3px;
      background-color: #fff;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
  }
  
  .map-custom-tooltip.active {
      color: #fff;
      border-color: #022849;
      background-color: #022849;
  }
  
  .map-custom-tooltip.active:before {
      border-top-color: #022849;
  }
  
  .get-it {
      background: #022849;
      color: #fff;
      padding: 50px 0;
  }
  
  .get-it h3 {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin: 0;
  }
  
  footer.main-footer {
      padding: 60px 0;
      padding-bottom: 0;
      background: #222222;
      color: #fff;
  }
  
  footer.main-footer a {
      color: inherit;
      color: #eee;
  }
  
  footer.main-footer h4 {
      color: #eee;
      margin: 10px 0;
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  footer.main-footer p {
      font-size: 0.9rem;
      color: #aaa;
  }
  
  footer.main-footer hr {
      border: none;
      border-top: 1px solid #ddd;
      background: none;
  }
  
  footer.main-footer .footer-blog-list li {
      margin-bottom: 20px;
  }
  
  footer.main-footer .image {
      width: 40px;
      height: 40px;
      margin-right: 10px;
      -ms-flex-negative: 0;
      flex-shrink: 0;
  }
  
  footer.main-footer .text {
      text-transform: uppercase;
      letter-spacing: 0.1em;
  }
  
  footer.main-footer .text a {
      font-size: 0.8rem;
  }
  
  footer.main-footer .photo-stream li {
      margin: 0;
  }
  
  footer.main-footer .photo-stream a {
      width: 80px;
      height: 80px;
      padding: 5px;
      display: block;
  }
  
  footer.main-footer .copyrights {
      padding: 50px 0;
      background: #333;
      color: #ccc;
      margin-top: 50px;
  }
  
  footer.main-footer .copyrights a {
      color: #fff;
  }
  
  footer.main-footer .copyrights p {
      color: inherit;
      font-size: 0.8rem;
      margin-bottom: 0;
  }
  @media (max-width:991px) {
      footer.main-footer .photo-stream a {
          width: 120px;
          height: 120px;
      }
  }
  
  @media (max-width:767px) {
      footer.main-footer .photo-stream li {
          width: 32%;
          margin-bottom: 10px;
      }
      footer.main-footer .photo-stream a {
          width: 100%;
          height: auto;
      }
  }
  
  
  /*
   * 1. NAVBAR
   */
  .navbar {
      padding: 0.5rem 1rem;
  }
  
  .navbar-brand {
      display: inline-block;
      padding-top: 0.3125rem;
      padding-bottom: 0.3125rem;
      margin-right: 1rem;
      font-size: 1.25rem;
  }
  
  .navbar-toggler {
      padding: 0.25rem 0.75rem;
      font-size: 1.25rem;
      line-height: 1;
      border: 1px solid transparent;
      border-radius: 0;
  }
  
  .navbar-light .navbar-brand {
      color: rgba(0, 0, 0, 0.9);
  }
  
  .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
      color: rgba(0, 0, 0, 0.9);
  }
  
  .navbar-light .navbar-nav .nav-link {
      color: rgba(0, 0, 0, 0.5);
  }
  
  .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
      color: rgba(0, 0, 0, 0.7);
  }
  
  .navbar-light .navbar-nav .nav-link.disabled {
      color: rgba(0, 0, 0, 0.3);
  }
  
  .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
      color: rgba(0, 0, 0, 0.9);
  }
  
  .navbar-light .navbar-toggler {
      color: rgba(0, 0, 0, 0.5);
      border-color: rgba(0, 0, 0, 0.1);
  }
  
  .navbar-light .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
  
  .navbar-light .navbar-text {
      color: rgba(0, 0, 0, 0.5);
  }
  
  .navbar-dark .navbar-brand {
      color: #fff;
  }
  
  .navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
      color: #fff;
  }
  
  .navbar-dark .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.5);
  }
  
  .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
      color: rgba(255, 255, 255, 0.75);
  }
  
  .navbar-dark .navbar-nav .nav-link.disabled {
      color: rgba(255, 255, 255, 0.25);
  }
  
  .navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
      color: #fff;
  }
  
  .navbar-dark .navbar-toggler {
      color: rgba(255, 255, 255, 0.5);
      border-color: rgba(255, 255, 255, 0.1);
  }
  
  .navbar-dark .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
  
  .navbar-dark .navbar-text {
      color: rgba(255, 255, 255, 0.5);
  }
  /*
   * 2. BUTTONS
   */
  .btn {
      font-weight: 700;
      border: 1px solid transparent;
      padding: 0.5rem 0.75rem;
      font-size: 0.8rem;
      line-height: 1.5;
      border-radius: 0;
      -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  }
  
  .btn:focus, .btn.focus {
      outline: 0;
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
  }
  
  .btn.disabled, .btn:disabled {
      opacity: .65;
  }
  
  .btn:not([disabled]):not(.disabled):active, .btn:not([disabled]):not(.disabled).active {
      background-image: none;
  }
  /*primary buttons*/
  .btn-primary {
      color: #048ABF;
      background-color: #048ABF;
      border-color: #022849;
  }
  
  .btn-primary:hover {
      color: color-yiq(#fff);
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-primary:focus, .btn-primary.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
  }
  
  .btn-primary.disabled, .btn-primary:disabled {
      color: color-yiq(#fff);
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
      color: color-yiq(#fff);
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
  }
  
  .btn-secondary {
      color: color-yiq(#868e96);
      background-color: #868e96;
      border-color: #868e96;
  }
  
  .btn-secondary:hover {
      color: color-yiq(#727b84);
      background-color: #6c757d;
      border-color: #6c757d;
  }
  
  .btn-secondary:focus, .btn-secondary.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
  }
  
  .btn-secondary.disabled, .btn-secondary:disabled {
      color: color-yiq(#868e96);
      background-color: #868e96;
      border-color: #868e96;
  }
  
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
      color: color-yiq(#6c757d);
      background-color: #6c757d;
      border-color: #666e76;
  }
  
  .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
  }
  
  .btn-success {
      color: (#fff);
      background-color: #28a745;
      border-color: #0e9e11;
  }
  
  .btn-success:hover {
      color: (#fff);
      background-color: #043b05;
      border-color: #043b05;
  }
  
  .btn-success:focus, .btn-success.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
  }
  
  .btn-success.disabled, .btn-success:disabled {
      color: color-yiq(#6c757d);
      background-color: #6c757d;
      border-color: #666e76;
  }
  
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active, .show > .btn-success.dropdown-toggle {
      color: color-yiq(#6c757d);
      background-color: #6c757d;
      border-color: #666e76;
  }
  
  .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus, .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
  }
  
  .btn-info {
      color: color-yiq(#17a2b8);
      background-color: #17a2b8;
      border-color: #17a2b8;
  }
  
  .btn-info:hover {
      color: color-yiq(#138496);
      background-color: #117a8b;
      border-color: #117a8b;
  }
  
  .btn-info:focus, .btn-info.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
  }
  
  .btn-info.disabled, .btn-info:disabled {
      color: color-yiq(#17a2b8);
      background-color: #17a2b8;
      border-color: #17a2b8;
  }
  
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .show > .btn-info.dropdown-toggle {
      color: color-yiq(#117a8b);
      background-color: #117a8b;
      border-color: #10707f;
  }
  
  .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus, .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
  }
  
  .btn-warning {
      color: color-yiq(#fff);
      background-color: #048ABF;
      border-color: #048ABF;
  }

  .btn-warning:hover {
      color: color-yiq(#fff);
      background-color: #022849;
      border-color: #022849;
  }

    
  .btn-blue{
    color: color-yiq(#fff);
    background-color: #048ABF;
    border-color: #048ABF;
}

.btn-blue:hover {
    color: color-yiq(#fff);
    background-color: #022849;
    border-color: #022849;
}


  
  .btn-warning:focus, .btn-warning.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
  }
  
  .btn-warning.disabled, .btn-warning:disabled {
      color: color-yiq(#fff);
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active, .show > .btn-warning.dropdown-toggle {
      color: color-yiq(#fff);
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 62, 1);
  }
  
  .btn-danger {
      color: color-yiq(#dc3545);
      background-color: #dc3545;
      border-color: #dc3545;
  }
  
  .btn-danger:hover {
      color: color-yiq(#c82333);
      background-color: #bd2130;
      border-color: #bd2130;
  }
  
  .btn-danger:focus, .btn-danger.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
  }
  
  .btn-danger.disabled, .btn-danger:disabled {
      color: color-yiq(#dc3545);
      background-color: #dc3545;
      border-color: #dc3545;
  }
  
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active, .show > .btn-danger.dropdown-toggle {
      color: color-yiq(#bd2130);
      background-color: #bd2130;
      border-color: #b21f2d;
  }
  
  .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
  }
  
  .btn-light {
      color: color-yiq(#f8f9fa);
      background-color: #f8f9fa;
      border-color: #f8f9fa;
  }
  
  .btn-light:hover {
      color: color-yiq(#e2e6ea);
      background-color: #dae0e5;
      border-color: #dae0e5;
  }
  
  .btn-light:focus, .btn-light.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
  }
  
  .btn-light.disabled, .btn-light:disabled {
      color: color-yiq(#f8f9fa);
      background-color: #f8f9fa;
      border-color: #f8f9fa;
  }
  
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active, .show > .btn-light.dropdown-toggle {
      color: color-yiq(#dae0e5);
      background-color: #dae0e5;
      border-color: #d3d9df;
  }
  
  .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus, .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
  }
  /*REGISTER HERE ALUMNI ID*/
  .btn-dark {
      color: color-yiq(#343a40);
      background-color: #343a40;
      border-color: #343a40;
  }
  
  .btn-dark:hover {
      color: color-yiq(#23272b);
      background-color: #1d2124;
      border-color: #1d2124;
  }
  
  .btn-dark:focus, .btn-dark.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
  }
  
  .btn-dark.disabled, .btn-dark:disabled {
      color: color-yiq(#343a40);
      background-color: #343a40;
      border-color: #343a40;
  }
  
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active, .show > .btn-dark.dropdown-toggle {
      color: color-yiq(#1d2124);
      background-color: #1d2124;
      border-color: #171a1d;
  }
  
  .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
  }
  
  .btn-default {
      color: color-yiq(#ced4da);
      background-color: #ced4da;
      border-color: #ced4da;
  }
  
  .btn-default:hover {
      color: color-yiq(#b8c1ca);
      background-color: #b1bbc4;
      border-color: #b1bbc4;
  }
  
  .btn-default:focus, .btn-default.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
  }
  
  .btn-default.disabled, .btn-default:disabled {
      color: color-yiq(#ced4da);
      background-color: #ced4da;
      border-color: #ced4da;
  }
  
  .btn-default:not(:disabled):not(.disabled):active, .btn-default:not(:disabled):not(.disabled).active, .show > .btn-default.dropdown-toggle {
      color: color-yiq(#b1bbc4);
      background-color: #b1bbc4;
      border-color: #aab4bf;
  }
  
  .btn-default:not(:disabled):not(.disabled):active:focus, .btn-default:not(:disabled):not(.disabled).active:focus, .show > .btn-default.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
  }
  
  .btn-outline-primary {
      color: #fff;
      background-color: transparent;
      background-image: none;
      border-color: #022849;
  }
  
  .btn-outline-primary:hover {
      color: #fff;
      background-color: #022849;
      border-color: 022849;
  }
  
  .btn-outline-primary:focus, .btn-outline-primary.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(79, 191, 168, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(79, 191, 168, 0.5);
  }
  
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
      color: #022849;
      background-color: transparent;
  }
  
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
      color: color-yiq(#022849);
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(79, 191, 168, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(79, 191, 168, 0.5);
  }
  
  .btn-outline-secondary {
      color: #868e96;
      background-color: transparent;
      background-image: none;
      border-color: #868e96;
  }
  
  .btn-outline-secondary:hover {
      color: #fff;
      background-color: #868e96;
      border-color: #868e96;
  }
  
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
  }
  
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
      color: #868e96;
      background-color: transparent;
  }
  
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show > .btn-outline-secondary.dropdown-toggle {
      color: color-yiq(#868e96);
      background-color: #868e96;
      border-color: #868e96;
  }
  
  .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(134, 142, 150, 0.5);
  }
  
  .btn-outline-success {
      color: #28a745;
      background-color: transparent;
      background-image: none;
      border-color: #28a745;
  }
  
  .btn-outline-success:hover {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
  }
  
  .btn-outline-success:focus, .btn-outline-success.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
  }
  
  .btn-outline-success.disabled, .btn-outline-success:disabled {
      color: #28a745;
      background-color: transparent;
  }
  
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .show > .btn-outline-success.dropdown-toggle {
      color: color-yiq(#28a745);
      background-color: #28a745;
      border-color: #28a745;
  }
  
  .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
  }
  
  .btn-outline-info {
      color: #17a2b8;
      background-color: transparent;
      background-image: none;
      border-color: #17a2b8;
  }
  
  .btn-outline-info:hover {
      color: #fff;
      background-color: #17a2b8;
      border-color: #17a2b8;
  }
  
  .btn-outline-info:focus, .btn-outline-info.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
  }
  
  .btn-outline-info.disabled, .btn-outline-info:disabled {
      color: #17a2b8;
      background-color: transparent;
  }
  
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active, .show > .btn-outline-info.dropdown-toggle {
      color: color-yiq(#17a2b8);
      background-color: #17a2b8;
      border-color: #17a2b8;
  }
  
  .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
  }
  
  .btn-outline-warning {
      color: #022849;
      background-color: transparent;
      background-image: none;
      border-color: #022849;
  }
  
  .btn-outline-warning:hover {
      color: #fff;
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-outline-warning:focus, .btn-outline-warning.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
  }
  
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
      color: #022849;
      background-color: transparent;
  }
  
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active, .show > .btn-outline-warning.dropdown-toggle {
      color: color-yiq(#022849);
      background-color: #022849;
      border-color: #022849;
  }
  
  .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
  }
  
  .btn-outline-danger {
      color: #dc3545;
      background-color: transparent;
      background-image: none;
      border-color: #dc3545;
  }
  
  .btn-outline-danger:hover {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
  }
  
  .btn-outline-danger:focus, .btn-outline-danger.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
  }
  
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
      color: #dc3545;
      background-color: transparent;
  }
  
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active, .show > .btn-outline-danger.dropdown-toggle {
      color: color-yiq(#dc3545);
      background-color: #dc3545;
      border-color: #dc3545;
  }
  
  .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
  }
  
  .btn-outline-light {
      color: #f8f9fa;
      background-color: transparent;
      background-image: none;
      border-color: #f8f9fa;
  }
  
  .btn-outline-light:hover {
      color: #fff;
      background-color: #f8f9fa;
      border-color: #f8f9fa;
  }
  
  .btn-outline-light:focus, .btn-outline-light.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
  }
  
  .btn-outline-light.disabled, .btn-outline-light:disabled {
      color: #f8f9fa;
      background-color: transparent;
  }
  
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active, .show > .btn-outline-light.dropdown-toggle {
      color: color-yiq(#f8f9fa);
      background-color: #f8f9fa;
      border-color: #f8f9fa;
  }
  
  .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
  }
  
  .btn-outline-dark {
      color: #343a40;
      background-color: transparent;
      background-image: none;
      border-color: #343a40;
  }
  
  .btn-outline-dark:hover {
      color: #fff;
      background-color: #343a40;
      border-color: #343a40;
  }
  
  .btn-outline-dark:focus, .btn-outline-dark.focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
  }
  
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
      color: #343a40;
      background-color: transparent;
  }
  
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active, .show > .btn-outline-dark.dropdown-toggle {
      color: color-yiq(#343a40);
      background-color: #343a40;
      border-color: #343a40;
  }
  
  .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
  }
  
  .btn-lg {
      padding: 0.5rem 1rem;
      font-size: 1.25rem;
      line-height: 1.5;
      border-radius: 0;
  }
  
  .btn-sm {
      padding: 0.25rem 0.5rem;
      font-size: 0.7rem;
      line-height: 1.5;
      border-radius: 0;
  }
  /*
   * 3. TYPE  
   */
  body {
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
  }
  
  a {
      color: #fff;
      text-decoration: none;
  }
  
  a:focus, a:hover {
      color: #111111;
      text-decoration: underline;
  }
  
  h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
      margin-bottom: 1rem;
      font-family: inherit;
      font-weight: 700;
      line-height: 1.1;
      color: inherit;
  }
  
  h1, .h1 {
      font-size: 2.2rem;
  }
  
  h2, .h2 {
      font-size: 1.8rem;
  }
  
  h3, .h3 {
      font-size: 1.5rem;
  }
  
  h4, .h4 {
      font-size: 1.1rem;
  }
  
  h5, .h5 {
      font-size: 1rem;
  }
  
  h6, .h6 {
      font-size: 0.8rem;
  }
  
  .lead {
      font-size: 1.25rem;
      font-weight: 300;
  }
  
  .display-1 {
      font-size: 6rem;
      font-weight: 300;
      line-height: 1.1;
  }
  
  .display-2 {
      font-size: 5.5rem;
      font-weight: 300;
      line-height: 1.1;
  }
  
  .display-3 {
      font-size: 4.5rem;
      font-weight: 300;
      line-height: 1.1;
  }
  
  .display-4 {
      font-size: 3.5rem;
      font-weight: 300;
      line-height: 1.1;
  }
  
  hr {
      border-top: 1px solid rgba(0, 0, 0, 0.1);
  }
  
  small, .small {
      font-size: 80%;
      font-weight: 400;
      background-color: #fff;
  }
  
  mark, .mark {
      padding: 0.2em;
      background-color: #fcf8e3;
  }
  
  .blockquote {
      padding: 0.5rem 1rem;
      margin-bottom: 2rem;
      font-size: 1rem;
      border-left: 5px solid #022849;
  }
  
  .blockquote-footer {
      color: #868e96;
  }
  
  .blockquote-footer::before {
      content: "\2014 \00A0";
  }
  
  .text-primary {
      color: #022849 !important;
  }
  
  a.text-primary:focus, a.text-primary:hover {
      color: #022849 !important;
  }
  /*
   * 4. PAGINATION
   */
  .page-item:first-child .page-link {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
  }
  
  .page-item:last-child .page-link {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
  }
  
  .page-item.active .page-link {
      color: #fff;
      background-color: #022849;
      border-color: #022849;
  }
  
  .page-item.disabled .page-link {
      color: #868e96;
      background-color: #fff;
      border-color: #dee2e6;
  }
  
  .page-link {
      padding: 0.5rem 0.75rem;
      line-height: 1.25;
      color: #022849;
      background-color: #fff;
      border: 1px solid #dee2e6;
  }
  
  .page-link:focus, .page-link:hover {
      color: #111111;
      text-decoration: none;
      background-color: #e9ecef;
      border-color: #dee2e6;
      outline: 0;
  }
  
  .pagination-lg .page-link {
      padding: 0.75rem 1.5rem;
      font-size: 1.25rem;
      line-height: 1.5;
  }
  
  .pagination-lg .page-item:first-child .page-link {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
  }
  
  .pagination-lg .page-item:last-child .page-link {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
  }
  
  .pagination-sm .page-link {
      padding: 0.25rem 0.5rem;
      font-size: 0.7rem;
      line-height: 1.5;
  }
  
  .pagination-sm .page-item:first-child .page-link {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
  }
  
  .pagination-sm .page-item:last-child .page-link {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
  }
  /*
  * 5. DROPDOWNS
  */
  .dropdown-menu {
      z-index: 1000;
      min-width: 10rem;
      padding: 0.5rem 0;
      margin: 0.125rem 0 0;
      font-size: 1rem;
      color: #212529;
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 0;
  }
  
  .dropdown-item {
      padding: 0.25rem 1.5rem;
      color: #212529;
  }
  
  .dropdown-item:focus, .dropdown-item:hover {
      color: #16181b;
      background-color: #f8f9fa;
  }
  
  .dropdown-item.active, .dropdown-item:active {
      color: #fff;
      background-color: #022849;
  }
  
  .dropdown-item.disabled, .dropdown-item:disabled {
      color: #868e96;
  }
  
  .dropdown-header {
      padding: 0.5rem 1.5rem;
      font-size: 0.7rem;
      color: #868e96;
  }
  /*
  * 6. UTILITIES
  */
  .bg-primary {
      background-color: #022849 !important;
  }
  
  a.bg-primary:focus, a.bg-primary:hover {
      background-color: #3aa18c !important;
  }
  
  .bg-secondary {
      background-color: #fff!important;
      border-style: solid;
  }
  
  a.bg-secondary:focus, a.bg-secondary:hover {
      background-color: #6c757d !important;
  }
  
  .bg-success {
      background-color: #28a745 !important;
  }
  
  a.bg-success:focus, a.bg-success:hover {
      background-color: #1e7e34 !important;
  }
  
  .bg-info {
      background-color: #17a2b8 !important;
  }
  
  a.bg-info:focus, a.bg-info:hover {
      background-color: #117a8b !important;
  }
  
  .bg-warning {
      background-color: #022849 !important;
  }
  
  a.bg-warning:focus, a.bg-warning:hover {
      background-color: #d39e00 !important;
  }
  
  .bg-danger {
      background-color: #dc3545 !important;
  }
  
  a.bg-danger:focus, a.bg-danger:hover {
      background-color: #bd2130 !important;
  }
  
  .bg-light {
      background-color:#fff!important;
  }
  
  
  a.bg-light:focus, a.bg-light:hover {
      background-color: #dae0e5 !important;
  }
  /*Form long header background*/
  .bg-dark {
      background-color: #048ABF!important;
     }
  
  a.bg-dark:focus, a.bg-dark:hover {
      background-color: #1d2124 !important;
  }
  
  .border-primary {
      border-color: #022849 !important;
  }
  
  .border-secondary {
      border-color: #868e96 !important;
  }
  
  .border-success {
      border-color: #28a745 !important;
  }
  
  .border-info {
      border-color: #17a2b8 !important;
  }
  
  .border-warning {
      border-color: #022849 !important;
  }
  
  .border-danger {
      border-color: #dc3545 !important;
  }
  
  .border-light {
      border-color: #f8f9fa !important;
  }
  
  .border-dark {
      border-color: #343a40 !important;
  }
  
  .text-primary {
      color: #022849 !important;
  }
  
  a.text-primary:focus, a.text-primary:hover {
      color: #3aa18c !important;
  }
  
  .text-secondary {
      color: #868e96 !important;
  }
  
  a.text-secondary:focus, a.text-secondary:hover {
      color: #6c757d !important;
  }
  
  .text-success {
      color: #28a745 !important;
  }
  
  a.text-success:focus, a.text-success:hover {
      color: #1e7e34 !important;
  }
  
  .text-info {
      color: #17a2b8 !important;
  }
  
  .text-info1 {
      color: #000 !important;
  }
  
  
  a.text-info:focus, a.text-info:hover {
      color: #117a8b !important;
  }
  
  .text-warning {
      color: #ffff !important;
  }
  .text-darkblue{
    color: #048ABF!important;
  }
  
  a.text-warning:focus, a.text-warning:hover {
      color: #d39e00 !important;
  }
  
  .text-danger {
      color: #dc3545 !important;
  }
  
  a.text-danger:focus, a.text-danger:hover {
      color: #bd2130 !important;
  }
  
  .text-light {
      color: #f8f9fa !important;
  }
  
  a.text-light:focus, a.text-light:hover {
      color: #dae0e5 !important;
  }
  
  .text-dark {
      color: #343a40 !important;
  }
  
  a.text-dark:focus, a.text-dark:hover {
      color: #1d2124 !important;
  }
  
  .badge-primary {
      color: #111;
      background-color: #022849;
  }
  
  .badge-primary[href]:focus, .badge-primary[href]:hover {
      color: #111;
      text-decoration: none;
      background-color: #000000;
  }
  
  .badge-secondary {
      color: #fff;
      background-color: #868e96;
  }
  
  .badge-secondary[href]:focus, .badge-secondary[href]:hover {
      color: #fff;
      text-decoration: none;
      background-color: #6c757d;
  }
  
  .badge-success {
      color: #fff;
      background-color: #28a745;
  }
  
  .badge-success[href]:focus, .badge-success[href]:hover {
      color: #fff;
      text-decoration: none;
      background-color: #1e7e34;
  }
  
  .badge-info {
      color: #fff;
      background-color: #17a2b8;
  }
  
  .badge-info[href]:focus, .badge-info[href]:hover {
      color: #fff;
      text-decoration: none;
      background-color: #000000;
  }
  
  .badge-warning {
      color: #111;
      background-color: #022849;
  }
  
  .badge-warning[href]:focus, .badge-warning[href]:hover {
      color: #111;
      text-decoration: none;
      background-color: #d39e00;
  }
  
  
  .badge-dark[href]:focus, .badge-dark[href]:hover {
      color: #fff;
      text-decoration: none;
      background-color: #1d2124;
  }
  
  code {
      font-size: 87.5%;
      color: #e83e8c;
      border-radius: 0;
  }
  
  a > code {
      padding: 0;
      color: inherit;
      background-color: inherit;
  }
  /* NAV */
  .nav-link {
      padding: 0.5rem 1rem;
  }
  
  .nav-link.disabled {
      color: #868e96;
  }
  
  .nav-tabs .nav-item {
      margin-bottom: -1px;
  }
  
  .nav-tabs .nav-link {
      border: 1px solid transparent;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
  }
  
  .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
      border-color: #e9ecef #e9ecef #dee2e6;
  }
  
  .nav-tabs .nav-link.disabled {
      color: #868e96;
  }
  
  .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
      color: #495057;
      background-color: #fff;
  }
  
  .nav-tabs .dropdown-menu {
      margin-top: -1px;
  }
  
  .nav-pills .nav-link {
      border-radius: 0;
  }
  
  .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
      color: #fff;
      background-color: #022849;
  }
  /*
  * 9. CARD
  */
  .card {
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0;
  }
  
  /*forgot password card*/
  .card2 {
      background-color: #fff;
  
   
   
      border-radius: 0;
      margin-left:630px;
  }
  
  /*forms*/
  
  
  .form-control2 {
      display: block;
      width: 500px;
      height: 40px;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }
  .form-group label {
      font-size: 20px;
      display: inline-block;
      overflow: hidden;
      white-space: nowrap;
  }
  
  
  .card > .list-group:first-child .list-group-item:first-child {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
  }
  
  .card > .list-group:last-child .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  
  .card-body {
      padding: 1.25rem;
  
  }

  .card-title {
      margin-bottom: 0.75rem;
  }
  
  .card-subtitle {
      margin-top: -0.375rem;
  }
  
  .card-link + .card-link {
      margin-left: 1.25rem;
  }
  
  .card-header {
      padding: 0.75rem 1.25rem;
      background-color: rgba(0, 0, 0, 0.03);
      border-bottom: 1px solid rgba(0, 0, 0, 0.125);
  }
  
  .card-header:first-child {
      border-radius: calc(0 -1px) calc(0 -1px) 0 0;
  }
  
  .card-header-transparent {
      background-color: rgba(0, 0, 0, 0.3);
      border-bottom: none;
  }
  
  .card-footer {
      padding: 0.75rem 1.25rem;
      background-color: #f8f9fa;
      border-top: 1px solid rgba(0, 0, 0, 0.125);
  }
  
  .card-footer:last-child {
      border-radius: 0 0 calc(0 -1px) calc(0 -1px);
  }
  
  .card-header-tabs {
      margin-right: -0.625rem;
      margin-bottom: -0.75rem;
      margin-left: -0.625rem;
      border-bottom: 0;
  }
  
  .card-header-pills {
      margin-right: -0.625rem;
      margin-left: -0.625rem;
  }
  
  .card-img-overlay {
      padding: 1.25rem;
  }
  
  .card-img-overlay-opacity {
      background: rgba(0, 0, 0, 0.2);
  }
  
  .card-img {
      border-radius: calc(0 -1px);
  }
  
  .card-img-top {
      border-top-left-radius: calc(0 -1px);
      border-top-right-radius: calc(0 -1px);
  }
  
  .card-img-bottom {
      border-bottom-right-radius: calc(0 -1px);
      border-bottom-left-radius: calc(0 -1px);
  }
  
  .card-deck .card {
      margin-bottom: 15px;
  }
  @media (min-width:576px) {
      .card-deck {
          margin-right: -15px;
          margin-left: -15px;
      }
      .card-deck .card {
          margin-right: 15px;
          margin-left: 15px;
      }
  }
  
  .tag {
      font-size: 0.65rem;
      text-transform: uppercase;
      border: 1px solid #e7e7e7;
      background: #fff;
      transition: all 0.3s;
      letter-spacing: 0.1em;
      font-weight: 700;
      padding: .375rem 0.75rem;
      display: block;
  }
   /*register/login buttons*/
  .btn-primary {
      color: #fff;
      background-color: #048ABF;
      border-color:  #048ABF;
      border-radius: 20px;
  }
  /*forgot/change password button*/
  .btn-primary2 {
      width:150px;
      height:52px;
      color: #fff;
      background-color: #048ABF;
      border-color:  #048ABF;
      border-radius: 20px;
      margin-left:-300px;
  }
  a {
      color: #7058E1;
      text-decoration: none;
  }
  label2 {
      color: #fff;
      text-decoration: none;
  }
/* css for careers page */

body {
    margin: 0;
  }
  
  html {
    height: 100%;
  }

  legend {
    margin-bottom: 40;
    padding: 20;
    display: block;
    -webkit-padding-start: 0;
    -webkit-padding-end: 0;
  }
  
  * {
    box-sizing: border-box;
  }
  
 /*career header */ 
  .s013 {
    min-height: 30vh;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
        justify-content: center;
    -ms-flex-align: center;
        align-items: center;
   
    background-image: url('../../resources/images/adamsoncareerbg.png');
    background-size: cover;
    background-color: #014590;
    background-position: center center;
    padding: 15px;
    font-family: 'Poppins', sans-serif;
  }
/*career header mask */
  .s013-mask {
    min-height: 30vh;
    width:1900px;
 
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
        justify-content: center;
    -ms-flex-align: center;
        align-items: center;

    background-color: rgba(0,0,0,0.6);
    background-position: center center;
    padding: 15px;
    font-family: 'Poppins', sans-serif;
  }
 
  .s013 form {
    max-height: 0;
    width: 100%;
    max-width: 914px;
    margin: 0;
  }
  
  .s013 form fieldset {
    margin-bottom: 0px;
    text-align: left;
  }
  
  .s013 form fieldset legend {
    font-size: 36px;
    font-weight: bold;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    text-align: left;
  }
  
  .s013 form .inner-form {
    display: flex;
    margin-top: 50px;
  }
     /* input form wrap */ 
  .s013 form .inner-form .input-wrap {
    background: #c0dfff;
    height: 80px;
    position: relative;
    padding: 20px 25px;
  }
    /* input form font */ 
  .s013 form .inner-form .input-wrap .input-field label {
    font-size: 11px;
    font-weight: 500;
    display: block;
    color: #555;
  }
   /* 1st input form  */ 
  .s013 form .inner-form .input-wrap.first {
        flex-grow: 20;
    border-radius: 3px 0 0 3px;
  }
    /* 2nd input form  */ 
  .s013 form .inner-form .input-wrap.second {
    min-width: 450px;

    border-radius: 0 3px 3px 0;
    border-left: 1px solid #98caff;
  }
   /* input select  */ 
  .s013 form .input-select {
    height: 34px;
    padding: 10px 0 6px 0;
  }
  
   /* search button */ 
  .s013 form .btn-search {
    min-width: 300px;
    height: 60px;
    padding: 0 15px;
    background: #3981c9;
    white-space: nowrap;
    border-radius: 3px;
    font-size: 16px;
    color: #fff;
    transition: all .2s ease-out, color .2s ease-out;
    border: 0;
    cursor: pointer;
    font-weight: 400;
    font-family: 'Poppins', sans-serif;
    margin-left: 300px;
    margin-top: 30px;
    
  }
     /* search button hover */ 
  .s013 form .btn-search:hover {
    background: #002468;
  }
  
  .s013 .featured  legend {
    font-size: 30px;
    font-weight: bold;
    color: #0f3182;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    padding-top: 150px;
    padding-bottom: 0px;
  }  
  
#tiptip_holder {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9999999;
}

#tiptip_holder.tip_top {
    padding-bottom: 5px;
}

#tiptip_holder.tip_bottom {
    padding-top: 5px;
}

#tiptip_holder.tip_right {
    padding-left: 5px;
}

#tiptip_holder.tip_left {
    padding-right: 5px;
}

#tiptip_content {
    font-size: 11px;
    color: #fff;
    text-shadow: 0 0 2px #000;
    padding: 4px 8px;
    border: 1px solid rgba(255,255,255,0.25);
    background-color: rgb(25,25,25);
    background-color: rgba(25,25,25,0.92);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(transparent), to(#000));
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    box-shadow: 0 0 3px #555;
    -webkit-box-shadow: 0 0 3px #555;
    -moz-box-shadow: 0 0 3px #555;
}

#tiptip_arrow, #tiptip_arrow_inner {
    position: absolute;
    border-color: transparent;
    border-style: solid;
    border-width: 6px;
    height: 0;
    width: 0;
}

#tiptip_holder.tip_top #tiptip_arrow {
    border-top-color: #fff;
    border-top-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_bottom #tiptip_arrow {
    border-bottom-color: #fff;
    border-bottom-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_right #tiptip_arrow {
    border-right-color: #fff;
    border-right-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_left #tiptip_arrow {
    border-left-color: #fff;
    border-left-color: rgba(255,255,255,0.35);
}

#tiptip_holder.tip_top #tiptip_arrow_inner {
    margin-top: -7px;
    margin-left: -6px;
    border-top-color: rgb(25,25,25);
    border-top-color: rgba(25,25,25,0.92);
}

#tiptip_holder.tip_bottom #tiptip_arrow_inner {
    margin-top: -5px;
    margin-left: -6px;
    border-bottom-color: rgb(25,25,25);
    border-bottom-color: rgba(25,25,25,0.92);
}

#tiptip_holder.tip_right #tiptip_arrow_inner {
    margin-top: -6px;
    margin-left: -5px;
    border-right-color: rgb(25,25,25);
    border-right-color: rgba(25,25,25,0.92);
}

#tiptip_holder.tip_left #tiptip_arrow_inner {
    margin-top: -6px;
    margin-left: -7px;
    border-left-color: rgb(25,25,25);
    border-left-color: rgba(25,25,25,0.92);
}

/* Webkit Hacks  */
@media screen and (-webkit-min-device-pixel-ratio:0) {  
    #tiptip_content {
        padding: 4px 8px 5px 8px;
        background-color: rgba(45,45,45,0.88);
    }
    #tiptip_holder.tip_bottom #tiptip_arrow_inner { 
        border-bottom-color: rgba(45,45,45,0.88);
    }
    #tiptip_holder.tip_top #tiptip_arrow_inner { 
        border-top-color: rgba(20,20,20,0.92);
    }
}
.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    background-size: cover;
    background-color:#000;
  
    background-image: url(../../resources/images/headerback.PNG);
    /* justify-content: space-between; */
    padding: 0.5rem 1rem;
}
.module {
    background: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #ccc;
    border-bottom-color: #bbb;
    -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 0 1px rgba(0,0,0,0.2);
    box-shadow: 0 0 1px rgba(0,0,0,0.2);
    margin-right:-900px;
    padding: 10px 15px;
    border-radius: 0;
 
}

.module-head {
    color: #767676;
    background-color: #f6f6f6;
    border-color: #e9e9e9;
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    
}
.module-body {
    padding: 15px
}

body {
    margin:  0;
}
.bg-imagecareer {
    width: 100%;
    margin:  0 auto;
    background-image: url('../../resources/images/bg/careerbg.jpg');
    background-size: cover;
    background-position: center center;
    display: flex;
    display: -webkit-flex;
    justify-content: center;
    -o-justify-content: center;
    -ms-justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    align-items: center;
    -o-align-items: center;
    -ms-align-items: center;
    -moz-align-items: center;
    -webkit-align-items: center;
}
.form-v4-content  {
    background: #fff;
    width: 1300px;
    border-radius: 10px;
    -o-border-radius: 10px;
    -ms-border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    -o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    margin: 175px 0;
    position: relative;
    display: flex;
    display: -webkit-flex;
    font-family: 'Open Sans', sans-serif;
}
.form-v4-content h2 {
    font-weight: 900;
    font-size: 30px;
    padding: 6px 0 0;
    margin-bottom: 34px;
}
hr {
    margin: 0px auto;
    width: 50px;
    border: 2px solid #ffffff;
  }
.form-v4-content h2 span{
    font-weight: 700;
    font-size: 20px;
}
.form-v4-content .form-left h2 {
    font-weight: 900;
    font-size: 30px;
    padding: 300px 0 0;
    margin-bottom: 25px;
    text-align: center;
}
.form-v4-content .form-left {
    background: #3786bd;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding: 20px 40px;
    position: relative;
    width: 100%;
    color: #fff;
}
.form-v4-content .form-left p {
    font-size: 15px;
    font-weight: 300;
    line-height: 1.5;
    text-align: center;
    margin-block-start: 3em;
}

.form-v4-content .form-left span {
    font-weight: 700;
}

/*gotocareerbutton*/
.form-v4-content .form-left .account {
    background: #fff;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 180px;
    border: none;
    align-content: center;
    margin: 40px 0 50px 200px;
    cursor: pointer;
    color: #333;
    font-weight: 700;
    font-size: 15px;
    font-family: 'Open Sans', sans-serif;
    appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
}
.form-v4-content .form-left .account:hover {
    background: #e5e5e5;
}
.form-v4-content .form-left .form-left-last input {
    padding: 15px;
}
.form-v4-content .form-detail {
    padding: 20px 40px;
    position: relative;
    width: 100%;
}
.form-v4-content .form-detail h2 {
    color: #3786bd;
}

.form-v4-content .form-detail .form-row {
    width: 100%;
    position: relative;
}

.form-v4-content .form-detail label {
    font-weight: 600;
    font-size: 15px;
    color: #666;
    display: block;
    margin-bottom: 8px;
}
.form-v4-content .form-detail .form-row-msg label {
    height: 40px;
    
}
/*dropdown*/
.form-v4-content .form-row select {
    height: 38px;
    width: 300px;
    padding: 7px 0 6px 0;
}

textarea {
    resize: none;
    height: 130px;
    width: 500px;
    border: 1px solid #9a9a9a;
    padding-top: 0px;
  }
.form-v4-content .form-detail .form-row label#valid {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    width: 14px;
    height: 14px;
    border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #53c83c;
}
.form-v4-content .form-detail .form-row label#valid::after {
    content: "";
    position: absolute;
    left: 5px;
    top: 1px;
    width: 3px;
    height: 8px;
    border: 1px solid #fff;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    transform: rotate(45deg);
}

.form-v4-content .form-detail .input-text {
    margin-bottom: 27px;
}
/*input box*/
.form-v4-content .form-detail input {
    width: 100%;
    padding: 11.5px 15px;
    border: 1px solid #9a9a9a;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    color: #333;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
}
.form-v4-content .form-detail .form-row input:focus {
    border: 1px solid #53c83c;
}
/*submit button*/
.form-v4-content .form-detail .submit {
    background: #3786bd;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 130px;
    border: none;
    margin: 6px 0 50px 0px;
    cursor: pointer;
    color: #fff;
    font-weight: 700;
    font-size: 15px;
}
.form-v4-content .form-detail .submit:hover {
    background: #74b9ea;
}
.form-v4-content .form-detail .form-row-last input {
    padding: 12.5px;
    margin: 40px 0 50px 220px;
}

/* Responsive */
@media screen and (max-width: 991px) {
    .form-v4-content {
        margin: 180px 20px;
        flex-direction:  column;
        -o-flex-direction:  column;
        -ms-flex-direction:  column;
        -moz-flex-direction:  column;
        -webkit-flex-direction:  column;
    }
    .form-v4-content .form-left {
        width: auto;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 0;
    }
    .form-v4-content .form-detail {
        padding: 30px 20px 30px 20px;
        width: auto;
    }
}
@media screen and (max-width: 575px) {
    .form-v4-content .form-detail .form-group {
        flex-direction: column;
        -o-flex-direction:  column;
        -ms-flex-direction:  column;
        -moz-flex-direction:  column;
        -webkit-flex-direction:  column;
        margin: 0;
    }
    .form-v4-content .form-detail .form-group .form-row.form-row-1 {
        width: 100%;
        padding:  0;
    }
    
}
.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}
.top-bar {
    background-image: url(resources/images/headerback.PNG);
    color: #fff;
    font-size: 0.9rem;
    /* padding: 10px 0; */
    background-size: cover;
}

.error
{
  color: red;
  font-weight: 700;

} 


            </style>
    </head>
    <body>
        <div id="all">
            <!--HEADER-->
             <!-- Top bar-->
<?php
include('resources/includes/navbaruser.php');
?>
<!-- Navbar End-->
       
            <br>
                <div class="container">
                    <div class="row d-flex align-items-center flex-wrap">
                        <div class="col-md-7">
                            <!--<h1 class="h2">Alumni Tracer Form</h1>-->
                        </div>
                       
                    
                    </div>
                </div>
                <div class="heading text-center text-blue mt-3">
                    <h1 style="color:blue"><i>WELCOME ALUMNI!</i> Update your Alumni Tracker Information with us!</h1>
                </div>
          

        <br>
         <div id="heading-breadcrumbs" style="background-color: rgb(200, 211, 230)">
            <div class="container text-center">
            <i><p style="font-size: 15px; color: #000; font-weight: bold; line-height: 1.5; text-align:justify"> Dear Adamson Alumni, <br><br>
                   Adamson University is establishing a system of tracing its graduates and getting feedback regarding the type of work, 
                educational experiences, employability and promotion status. This is useful in planning future educational needs. Results of 
                this tracer study will only be presented in summary form and individual responses will be kept strictly confidential.
        
                   May we therefore request your precious time to please answer the questionnaire sincerely.  There is no right or wrong 
                answer.  We would appreciate if you could complete the following questionnaire and return to us, at your earliest convenience. <br><br>
        
                Thank you for your cooperation and God bless!
            </p></i>
        
                <?php
                    $query=mysqli_query($conn,"select * from users where email='".$_SESSION['email']."'");
                    if($row=mysqli_fetch_array($query))
                    
                    ?>
                    <?php
                    $query = mysqli_query($conn, "SELECT fname, mname, lname, year, gender FROM users WHERE email = '" . $_SESSION['email'] . "'");
                    if ($row1 = mysqli_fetch_array($query)) {
                        // Your code to process the retrieved data
                    }
                    ?>
                    
                        <?php
                    $query=mysqli_query($conn,"select * from alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    if($add=mysqli_fetch_array($query))
                    
                    ?>
            
            
                <!--eto yung sa pagpasok ng form-->
                
                <?php
                $ageValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $ageValue = isset($_POST['age']) ? htmlentities($_POST['age']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT age FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $ageValue = $add1['age'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT age FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $ageValue = $row['age'];
                        }
                    }
                }
                ?>
          <?php
$genderValue = ""; // Initialize to an empty string

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Use the value from the submitted form data if available
    $genderValue = isset($_POST['gender']) ? htmlentities($_POST['gender']) : "";
} else {
    // If the form is not submitted, try to fetch the value from alumnitracerform_data
    $query = mysqli_query($conn, "SELECT gender FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
    
    if ($query && mysqli_num_rows($query) > 0) {
        $add1 = mysqli_fetch_array($query);
        $genderValue = $add1['gender'];
    } else {
        // If there's no data in alumnitracerform_data, get the value from users
        $query = mysqli_query($conn, "SELECT gender FROM users WHERE email = '" . $_SESSION['email'] . "'");
        if ($row = mysqli_fetch_array($query)) {
            $genderValue = $row['gender'];
        }
    }
}
?>
        
                <?php
                $nationalityValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $nationalityValue = isset($_POST['nationality']) ? htmlentities($_POST['nationality']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT nationality FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $nationalityValue = $add1['nationality'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT nationality FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $nationalityValue = $row['nationality'];
                        }
                    }
                }
                ?>
                
                <?php
                $civilstatusValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $civilstatusValue = isset($_POST['civilstatus']) ? htmlentities($_POST['civilstatus']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT civilstatus FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $civilstatusValue = $add1['civilstatus'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT civilstatus FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $civilstatusValue = $row['civilstatus'];
                        }
                    }
                }
                ?>
                
                <?php
                $lotValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $lotValue = isset($_POST['lot']) ? htmlentities($_POST['lot']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT lot FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $lotValue = $add1['lot'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT lot FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $lotValue = $row['lot'];
                        }
                    }
                }
                ?>
                
                <?php
                $streetValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $streetValue = isset($_POST['street']) ? htmlentities($_POST['street']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT street FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $streetValue = $add1['street'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT street FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $streetValue = $row['street'];
                        }
                    }
                }
                ?>
                
                <?php
                $cityValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $cityValue = isset($_POST['city']) ? htmlentities($_POST['city']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT city FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $cityValue = $add1['city'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT city FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $cityValue = $row['city'];
                        }
                    }
                }
                ?>
                
                <?php
                $stateValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $stateValue = isset($_POST['state']) ? htmlentities($_POST['state']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT state FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $stateValue = $add1['state'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT state FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $stateValue = $row['state'];
                        }
                    }
                }
                ?>
                
                <?php
                $mobilenoValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $mobilenoValue = isset($_POST['mobileno']) ? htmlentities($_POST['mobileno']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT mobileno FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $mobilenoValue = $add1['mobileno'];
                    } else {
                        // If there's no data in alumnitracerform_data, get the value from users
                        $query = mysqli_query($conn, "SELECT mobileno FROM users WHERE email = '" . $_SESSION['email'] . "'");
                        if ($row = mysqli_fetch_array($query)) {
                            $mobilenoValue = $row['mobileno'];
                        }
                    }
                }
                ?>
                
                <?php
                $emp_statusValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $emp_statusValue = isset($_POST['emp_status']) ? htmlentities($_POST['emp_status']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT emp_status FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $emp_statusValue = $add1['emp_status'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $emp_statusValue = "";
                    }
                }
                ?>
                
                <?php
                $e_name_of_businessValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $e_name_of_businessValue = isset($_POST['e_name_of_business']) ? htmlentities($_POST['e_name_of_business']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT e_name_of_business FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $e_name_of_businessValue = $add1['e_name_of_business'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $e_name_of_businessValue = "";
                    }
                }
                ?>

                <?php
                $e_date_employedValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $e_date_employedValue = isset($_POST['e_date_employed']) ? htmlentities($_POST['e_date_employed']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT e_date_employed FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $e_date_employedValue = $add1['e_date_employed'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $e_date_employedValue = "";
                    }
                }
                ?>

                <?php
                $e_emp_statusValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $e_emp_statusValue = isset($_POST['e_emp_status']) ? htmlentities($_POST['e_emp_status']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT e_emp_status FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $e_emp_statusValue = $add1['e_emp_status'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $e_emp_statusValue = "";
                    }
                }
                ?>

                <?php
                $current_job_positionValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $current_job_positionValue = isset($_POST['current_job_position']) ? htmlentities($_POST['current_job_position']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT current_job_position FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $current_job_positionValue = $add1['current_job_position'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $current_job_positionValue = "";
                    }
                }
                ?>
                
                <?php
                $company_affiliationValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $company_affiliationValue = isset($_POST['company_affiliation']) ? htmlentities($_POST['company_affiliation']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT company_affiliation FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $company_affiliationValue = $add1['company_affiliation'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $company_affiliationValue = "";
                    }
                }
                ?>
                
                <?php
                $company_addressValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $company_addressValue = isset($_POST['company_address']) ? htmlentities($_POST['company_address']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT company_address FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $company_addressValue = $add1['company_address'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $company_addressValue = "";
                    }
                }
                ?>
                
                <?php
                $monthly_salaryValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $monthly_salaryValue = isset($_POST['monthly_salary']) ? htmlentities($_POST['monthly_salary']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT monthly_salary FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $monthly_salaryValue = $add1['monthly_salary'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $monthly_salaryValue = "";
                    }
                }
                ?>
            
                
                <?php
                $job_industry_typeValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $job_industry_typeValue = isset($_POST['job_industry_type']) ? htmlentities($_POST['job_industry_type']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT job_industry_type FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $job_industry_typeValue = $add1['job_industry_type'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $job_industry_typeValue = "";
                    }
                }
                ?>
                
                <?php
                $emp_sourceValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $emp_sourceValue = isset($_POST['emp_source']) ? htmlentities($_POST['emp_source']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT emp_source FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $emp_sourceValue = $add1['emp_source'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $emp_sourceValue = "";
                    }
                }
                ?>
                
                <?php
                $job_relateValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $job_relateValue = isset($_POST['job_relate']) ? htmlentities($_POST['job_relate']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT job_relate FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $job_relateValue = $add1['job_relate'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $job_relateValue = "";
                    }
                }
                ?>
                
                <?php
                $emp_immediateValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $emp_immediateValue = isset($_POST['emp_immediate']) ? htmlentities($_POST['emp_immediate']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT emp_immediate FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $emp_immediateValue = $add1['emp_immediate'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $emp_immediateValue = "";
                    }
                }
                ?>
                
                <?php
                $job_satisfactionValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $job_satisfactionValue = isset($_POST['job_satisfaction']) ? htmlentities($_POST['job_satisfaction']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT job_satisfaction FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $job_satisfactionValue = $add1['job_satisfaction'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $job_satisfactionValue = "";
                    }
                }
                ?>
                
                <?php
                $intend_to_stayValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $intend_to_stayValue = isset($_POST['intend_to_stay']) ? htmlentities($_POST['intend_to_stay']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT intend_to_stay FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $intend_to_stayValue = $add1['intend_to_stay'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $intend_to_stayValue = "";
                    }
                }
                ?>

                <?php
                $name_of_businessValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $name_of_businessValue = isset($_POST['name_of_business']) ? htmlentities($_POST['name_of_business']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT name_of_business FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $name_of_businessValue = $add1['name_of_business'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $name_of_businessValue = "";
                    }
                }
                ?>

                <?php
                $nature_of_businessValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $nature_of_businessValue = isset($_POST['nature_of_business']) ? htmlentities($_POST['nature_of_business']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT nature_of_business FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $nature_of_businessValue = $add1['nature_of_business'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $nature_of_businessValue = "";
                    }
                }
                ?>

                <?php
                $role_in_businessValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $role_in_businessValue = isset($_POST['role_in_business']) ? htmlentities($_POST['role_in_business']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT role_in_business FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $role_in_businessValue = $add1['role_in_business'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $role_in_businessValue = "";
                    }
                }
                ?>

                <?php
                $business_addressValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $business_addressValue = isset($_POST['business_address']) ? htmlentities($_POST['business_address']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT business_address FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $business_addressValue = $add1['business_address'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $business_addressValue = "";
                    }
                }
                ?>

                <?php
                $business_phone_numberValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $business_phone_numberValue = isset($_POST['business_phone_number']) ? htmlentities($_POST['business_phone_number']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT business_phone_number FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $business_phone_numberValue = $add1['business_phone_number'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $business_phone_numberValue = "";
                    }
                }
                ?>

                <?php
                $business_approx_salaryValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $business_approx_salaryValue = isset($_POST['business_approx_salary']) ? htmlentities($_POST['business_approx_salary']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT business_approx_salary FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $business_approx_salaryValue = $add1['business_approx_salary'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $business_approx_salaryValue = "";
                    }
                }
                ?>

                <?php
                $s_date_employedValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $s_date_employedValue = isset($_POST['s_date_employed']) ? htmlentities($_POST['s_date_employed']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT s_date_employed FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $s_date_employedValue = $add1['s_date_employed'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $s_date_employedValue = "";
                    }
                }
                ?>

                <?php
                $s_emp_statusValue = ""; // Initialize to an empty string
                
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    // Use the value from the submitted form data if available
                    $s_emp_statusValue = isset($_POST['s_emp_status']) ? htmlentities($_POST['s_emp_status']) : "";
                } else {
                    // If the form is not submitted, try to fetch the value from alumnitracerform_data
                    $query = mysqli_query($conn, "SELECT s_emp_status FROM alumnitracerform_data WHERE id = '" . $_SESSION['id'] . "'");
                    
                    if ($query && mysqli_num_rows($query) > 0) {
                        $add1 = mysqli_fetch_array($query);
                        $s_emp_statusValue = $add1['s_emp_status'];
                    } else {
                        // If there's no data in alumnitracerform_data, set a default value or empty string
                        $s_emp_status = "";
                    }
                }
                ?>

                <?php
                $sql = "SELECT course_name FROM courses";
$result = $conn->query($sql);

$courses = array();
while ($row = $result->fetch_assoc()) {
    $courses[] = $row["course_name"];
}
?>

    <form action= "alumnitracerformupdate.php" method="post">
        <div class="card" style="width: 70rem;">
            <div class="card-header h4" style="background-color: #5b9aff; text-align:left">Fill Alumni Information</div>
                <div class="card-body bg-white">
                    <div class="form-group row ">
                        <label class="col-form-label col-md-3">Year Graduated</label>
                        <div class="col-md-5">
                            <input type="year" class="form-control2" id="year" name="year" value="<?php echo htmlentities($row1['year']);?>" readonly>  
                        </div>                    
                    </div>
                    
                    <div class="form-group row border-bottom">
                        <label class="col-form-label col-md-3">Course/Program</label><br>
                        <div class="col-md-5">
                            <select onchange="course()" id="course" name="course" class="form-control form-control-sm mb-3">
                              <option><?php echo htmlentities($_SESSION['course']);?>  </option>
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
                              <?php
            // Display fetched courses in the dropdown
            foreach ($courses as $course) {
                echo "<option value=\"$course\">$course</option>";
            }
            ?>
                            </select>                     
                        </div>                    
                    </div>
                    
                    <h4 class="text-info" style="text-align: left;">Personal Information</h4>
                    
                    <div class="personal">
                        
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label" style="text-align: left;">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name" value="<?php echo htmlentities($row1['fname']);?> <?php echo htmlentities($row1['mname']);?> <?php echo htmlentities($row1['lname']);?>"  style="border-radius: 20px; width: 500px">
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label" style="text-align: left;">Age</label>
                            <input type="text" class="form-control" placeholder="Age" name="age" id="age" value="<?php echo $ageValue; ?>" style="border-radius: 20px; width: 500px">
                        </div>
                        <span class="text-danger"><?php if(!empty($age_error)){ echo $age_error; } ?></span>

                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label" style="text-align: left;">Gender</label>
                            <select onchange="gender()" class="form-control form-control-sm mb-3" name="gender" id="gender" style="border-radius: 20px; width: 500px">
                                            <option><?php echo $genderValue;?>  </option>
                                            <option value="Female" <?php if ($genderValue === 'female') echo 'selected'; ?>>Female</option>
                                            <option value="Male" <?php if ($genderValue === 'male') echo 'selected'; ?>>Male</option>
                                            
                            </select>
                        </div>
                         <div class="row mb-2">
                            <label class="col-sm-2 col-form-label" style="text-align: left;">Nationality</label>
                            <input type="text" class="form-control" placeholder="Nationality" name="nationality" id="nationality" value="<?php echo $nationalityValue; ?>" style="border-radius: 20px; width: 200px">
                            <span class="text-danger"><?php if (!empty($nationality_error)) echo $nationality_error; ?></span>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label" style="text-align: left;">Civil Status</label>
                            <select onchange="civilstatus()" class="form-control form-control-sm mb-3" name="civilstatus" id="civilstatus" style="border-radius: 20px; width: 200px">
                             <option><?php echo $civilstatusValue;?>  </option>
                                        <option value="Single" <?php if ($civilstatusValue === 'single') echo 'selected'; ?>>Single</option>
                                        <option value="Divorced" <?php if ($civilstatusValue  === 'divorced') echo 'selected'; ?>>Divorced</option>
                                        <option value="Married" <?php if ($civilstatusValue  === 'married') echo 'selected'; ?>>Married</option>
                                        <option value="Widowed" <?php if ($civilstatusValue  === 'widowed') echo 'selected'; ?>>Widowed</option>
                                    </select>   
                        </div>
                        
                    </div>    
                    
            
                    <h4 class="text-info" style="text-align: left;">Contact Information</h4>
                    <div class="">
                            
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Lot/Blds/Subd/Unit/Floor No.</label>
                                <input type="text" class="form-control" placeholder="Lot/Blds/Subd/Unit/Floor No." name ="lot" id ="lot" value="<?php echo $lotValue; ?>" style="border-radius: 20px; width: 300px">
                            
                                <label class="col-sm-1 col-form-label" style="text-align: left;">Street</label>
                                <input type="text" class="form-control" placeholder="Street" name ="street" id ="street" value="<?php echo $streetValue; ?>" style="border-radius: 20px; width: 300px">
                            </div>
                            <span class="text-danger"><?php if(!empty($lot_error)){ echo $lot_error; } ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text-danger"><?php if(!empty($street_error)){ echo $street_error; } ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <div class="row mb-2">
                                <label class="col-sm-1 col-form-label" style="text-align: left;">City</label>
                                <input type="text" class="form-control" placeholder="City" name ="city" id ="city" value="<?php echo $cityValue; ?>" style="border-radius: 20px; width: 300px">
                           
                                <label class="col-sm-2 col-form-label" style="text-align: left;">State/Province</label>
                                <input type="text" class="form-control" placeholder="State/Province" name ="state" id ="state" value="<?php echo $stateValue; ?>" style="border-radius: 20px; width: 300px">
                            </div>
                            <span class="text-danger"><?php if(!empty($city_error)){ echo $city_error; } ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text-danger"><?php if(!empty($state_error)){ echo $state_error; } ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Mobile Number</label>
                                 <input type="text" class="form-control" placeholder="Mobile Number" name ="mobileno" id ="mobileno" value="<?php echo $mobilenoValue; ?>" style="border-radius: 20px; width: 300px">
                            </div>
                            <span class="text-danger"><?php if(!empty($mobileno_error)){ echo $mobileno_error; } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>

                    <br>


                    <!-- Script for employed, self-employed toggle fields -->
                    <script>
                        function toggleFields() {
                            var empStatus = document.getElementById('emp_status').value;
                            var employedFields = document.getElementById('employedFields');
                            var selfEmployedFields = document.getElementById('selfEmployedFields');

                            if (empStatus === 'employed') {
                                employedFields.style.display = 'block';
                                selfEmployedFields.style.display = 'none';
                            } else if (empStatus === 'selfemployed') {
                                employedFields.style.display = 'none';
                                selfEmployedFields.style.display = 'block';
                            } else {
                                employedFields.style.display = 'none';
                                selfEmployedFields.style.display = 'none';
                            }
                        }

                        // Call toggleFields on page load to initially display Employed fields
                        toggleFields();
                    </script>
                
                    <h4 class="text-info" style="text-align: left;">Employment Information</h4>
                    <div class="">
                        <div class="row mb-2">
                            <label class="col-sm-3 col-form-label" style="text-align: left;">Employment Status</label>
                            <select onchange="toggleFields()" class="form-control form-control-sm mb-3" name="emp_status" id="emp_status" style="border-radius: 20px; width: 300px">
                                <option disabled selected>--- Select Employment Status ---</option>
                                <option value="employed" <?php if ($emp_statusValue === 'employed') echo 'selected'; ?>>Employed</option>
                                <option value="unemployed" <?php if ($emp_statusValue === 'unemployed') echo 'selected'; ?>>Unemployed</option>
                                <option value="selfemployed" <?php if ($emp_statusValue === 'selfemployed') echo 'selected'; ?>>Self-Employed</option>
                            </select>
                            <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($emp_status_error)){ echo $emp_status_error; } ?></span>
                        </div>
                        

                        <!-- Fields for Employed -->
                        <div class="" id="employedFields" <?php echo ($emp_statusValue === 'employed') ? '' : 'style="display: none;"'; ?>>
                            <!-- Add fields specific to employed individuals here -->
                            <div class="row mb-2">
                            <label class="col-sm-3 col-form-label" style="text-align: left;">Name of the Company <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" placeholder="" name="e_name_of_business" id="e_name_of_business" value="<?php echo $e_name_of_businessValue; ?>" style="border-radius: 20px; width: 300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($e_name_of_business_error)){ echo $e_name_of_business_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Current Job Position <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" placeholder="" name="current_job_position" id="current_job_position" value="<?php echo $current_job_positionValue; ?>" style="border-radius: 20px; width: 300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($current_job_position_error)){ echo $current_job_position_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Company Affiliation <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" placeholder="" name="company_affiliation" id="company_affiliation" value="<?php echo $company_affiliationValue; ?>" style="border-radius: 20px; width:300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($company_affiliation_error)){ echo $company_affiliation_error; } ?></span>
                           </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Company Address <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" placeholder="" name="company_address" id="company_address" value="<?php echo $company_addressValue; ?>" style="border-radius: 20px; width: 300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($company_address_error)){ echo $company_address_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Current Job Industry Type <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" placeholder="" name="job_industry_type" id="job_industry_type" value="<?php echo $job_industry_typeValue; ?>" style="border-radius: 20px; width: 300px">
                                 <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($job_industry_type_error)){ echo $job_industry_type_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Approximate Monthly Salary <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" placeholder="" name="monthly_salary" id="monthly_salary" value="<?php echo $monthly_salaryValue; ?>"  style="border-radius: 20px; width: 300px">
                                 <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($monthly_salary_error)){ echo $monthly_salary_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Date Employed <span style="color: red;">*</span></label>
                                <input type="date" class="form-control" placeholder="" name="e_date_employed" id="e_date_employed" value="<?php echo $e_date_employedValue; ?>" style="border-radius: 20px; width: 300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($e_date_employed_error)){ echo $e_date_employed_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Employment Status <span style="color: red;">*</span></label>
                                <select class="form-control" name="e_emp_status" id="e_emp_status" style="border-radius: 20px; width: 300px">
                                <option value="0" disabled selected>--- Select ---</option>
                                    <option value="Permanent" <?php echo ($e_emp_statusValue == 'Permanent') ? "selected" : ""; ?>>Permanent</option>
                                    <option value="Temporary" <?php echo ($e_emp_statusValue == 'Temporary') ? "selected" : ""; ?>>Temporary</option>
                                    <option value="Probation" <?php echo ($e_emp_statusValue == 'Probation') ? "selected" : ""; ?>>Probation</option>
                                    <option value="Contractual" <?php echo ($e_emp_statusValue == 'Contractual') ? "selected" : ""; ?>>Contractual</option>
                                </select>
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($e_emp_status_error)){ echo $e_emp_status_error; } ?></span>
                            </div>
                        </div>

                        <!-- Fields for Self-Employed -->
                        <div class="" id="selfEmployedFields" <?php echo ($emp_statusValue === 'selfemployed') ? '' : 'style="display: none;"'; ?>>
                            <!-- Add fields specific to self-employed individuals here -->
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Name of the Business <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" placeholder="" name="name_of_business" id="name_of_business" value="<?php echo $name_of_businessValue; ?>" style="border-radius: 20px; width: 300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($name_of_business_error)){ echo $name_of_business_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Nature of the Business <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" placeholder="" name="nature_of_business" id="nature_of_business" value="<?php echo $nature_of_businessValue; ?>" style="border-radius: 20px; width:300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($nature_of_business_error)){ echo $nature_of_business_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Role in the Business <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" placeholder="" name="role_in_business" id="role_in_business" value="<?php echo $role_in_businessValue; ?>" style="border-radius: 20px; width: 300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($role_in_business_error)){ echo $role_in_business_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Business Address <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" placeholder="" name="business_address" id="business_address" value="<?php echo $business_addressValue; ?>" style="border-radius: 20px; width: 300px">
                                 <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($business_address_error)){ echo $business_address_error; } ?></span>
                                 
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Business Phone Number <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" placeholder="" name="business_phone_number" id="business_phone_number" value="<?php echo $business_phone_numberValue; ?>" style="border-radius: 20px; width: 300px">
                                 <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($business_phone_number_error)){ echo $business_phone_number_error; } ?></span>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Approximate Monthly Salary <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" placeholder="" name="business_approx_salary" id="business_approx_salary" value="<?php echo $business_approx_salaryValue; ?>"  style="border-radius: 20px; width: 300px">
                                 <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($business_approx_salary_error)){ echo $business_approx_salary_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Date Employed <span style="color: red;">*</span></label>
                                <input type="date" class="form-control" placeholder="" name="s_date_employed" id="s_date_employed" value="<?php echo $s_date_employedValue; ?>" style="border-radius: 20px; width: 300px">
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($s_date_employed_error)){ echo $s_date_employed_error; } ?></span>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-3 col-form-label" style="text-align: left;">Employment Status <span style="color: red;">*</span></label>
                                <select class="form-control" name="s_emp_status" id="s_emp_status" style="border-radius: 20px; width: 300px">
                                <option value="0" disabled selected>--- Select ---</option>
                                    <option value="Permanent" <?php echo ($s_emp_statusValue == 'Permanent') ? "selected" : ""; ?>>Permanent</option>
                                    <option value="Temporary" <?php echo ($s_emp_statusValue == 'Temporary') ? "selected" : ""; ?>>Temporary</option>
                                    <option value="Probation" <?php echo ($s_emp_statusValue == 'Probation') ? "selected" : ""; ?>>Probation</option>
                                    <option value="Contractual" <?php echo ($s_emp_statusValue == 'Contractual') ? "selected" : ""; ?>>Contractual</option>
                                </select>
                                <span class="text-danger" style="padding-left: 10px;"><?php if(!empty($s_emp_status_error)){ echo $s_emp_status_error; } ?></span>
                            </div>
                    </div>
                    
            
                    <br>
                    
                    <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
                        <td for="source">In your first employment, which of the following has been your source? <span style="color: red;">*</span></td>
                            <div class="employquestion">
                                   <div class="col-md-10" style="text-align: left">
                                        <td>
                                        <select onchange="emp_source()" class="form-control form-control-sm mb-3" name="emp_source" id="emp_source" style="border-radius: 20px; width: 400px">
                                            <option disabled selected>--- Select ---</option>
                                            <option value="academic" <?php if ($emp_sourceValue === 'academic') echo 'selected'; ?>>Academic Department/Faculty Referral</option>
                                            <option value="classified" <?php if ($emp_sourceValue === 'classified') echo 'selected'; ?>>Classified Ads (Printed/Electronic)</option>
                                            <option value="family" <?php if ($emp_sourceValue === 'family') echo 'selected'; ?>>Family and Friends Referral</option>
                                            <option value="guidance" <?php if ($emp_sourceValue === 'guidance') echo 'selected'; ?>>Guidance Placement Referral</option>
                                            <option value="ojt" <?php if ($emp_sourceValue === 'ojt') echo 'selected'; ?>>OJT Site</option>
                                            <option value="walkin" <?php if ($emp_sourceValue === 'walkin') echo 'selected'; ?>>Walk-in Application</option>
                                        </select>
                                        </td>
                                    </div>
                            </div>
                    </div>
                    
                    <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
                        <td for="emp_immediate">Have you been employed immediately 6 months or less after graduation? <span style="color: red;">*</span></td>
                                <div class="employquestion">
                                           <div class="col-md-10" style="text-align: left">
                                                <td>
                                                <select onchange="emp_immediate()" class="form-control form-control-sm mb-3" name="emp_immediate" id="emp_immediate" style="border-radius: 20px; width: 200px">
                                                    <option disabled selected>--- Select ---</option>
                                                    <option value="yes" <?php if ($emp_immediateValue === 'yes') echo 'selected'; ?>>Yes</option>
                                                    <option value="no" <?php if ($emp_immediateValue === 'no') echo 'selected'; ?>>No</option>
                                                </select>
                                                </td>   
                                            </div>
                                </div>
                    </div>
                    
                    <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
                        <td for="job_relate">Is your job related to your course? <span style="color: red;">*</span></td>
                            <div class="employquestion">
                                       <div class="col-md-10" style="text-align: left">
                                            <td>
                                            <select onchange="job_relate()" class="form-control form-control-sm mb-3" name="job_relate" id="job_relate" style="border-radius: 20px; width: 200px">
                                                <option disabled selected>--- Select ---</option>
                                                <option value="yes" <?php if ($job_relateValue === 'yes') echo 'selected'; ?>>Yes</option>
                                                <option value="no" <?php if ($job_relateValue === 'no') echo 'selected'; ?>>No</option>
                                            </select>
                                            </td>   
                                        </div>
                            </div>
                    </div>
                    
                    <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
                        <td>How satisfied are you with your current job? <span style="color: red;">*</span></td>
                            <div class="employquestion">
                                        <div class="col-md-10" style="text-align: left">
                                            <td>
                                            <select onchange="job_satisfaction()" class="form-control form-control-sm mb-3" name="job_satisfaction" id="job_satisfaction" style="border-radius: 20px; width: 200px">
                                                <option disabled selected>--- Select ---</option>
                                                <option value="verymuch" <?php if ($job_satisfactionValue === 'verymuch') echo 'selected'; ?>>Very Much</option>
                                                <option value="alittle" <?php if ($job_satisfactionValue === 'alittle') echo 'selected'; ?>>A little</option>
                                                <option value="notsatisfied" <?php if ($job_satisfactionValue === 'notsatisfied') echo 'selected'; ?>>Not Satisfied</option>
                                            </select>
                                            </td>      
                                        </div>
                            </div>
                                
                    </div>    
                        
                    <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
                        <td for="intend_to_stay">Do you intend to stay in the same job/profession? <span style="color: red;">*</span></td>
                            <div class="employquestion">
                                    <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
                                       <div class="col-md-10" style="text-align: left">
                                            <td>
                                            <select onchange="intend_to_stay()" class="form-control form-control-sm mb-3" name="intend_to_stay" id="intend_to_stay" style="border-radius: 20px; width: 200px">
                                                <option disabled selected>--- Select ---</option>
                                                <option value="yes" <?php if ($intend_to_stayValue === 'yes') echo 'selected'; ?>>Yes</option>
                                                <option value="no" <?php if ($intend_to_stayValue === 'no') echo 'selected'; ?>>No</option>
                                            </select>
                                            </td>   
                                        </div>
                                    </div>
                            </div>
                    </div>
                            <div class="mt-1 text-center">
                                <input type="submit" class="btn btn-primary" style="border-radius: 10px;width: 150px; height: 40px; font-size: 16px;" name="submit" value="Submit">
                                <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
                            </div>
                            
                    
                            <br><br>
                        </form>
<h1 style="color: #0096FF; text-align: center;">CAREER INSIGHTS</h1><br>
<p class="text-black" style="text-align: justify"> 
Your journey is important to us, even beyond graduation. By providing your Master's, Doctorate, and licensure exam records, 
you help us gain valuable insights into your career path. This data enables us to celebrate your achievements, inspire 
future generations, and strengthen our alumni network.

Your information is kept confidential and is crucial for our continuous improvement. Please take a moment to share your 
postgraduate achievements to contribute to the legacy of success at our institution. Thank you for being part of our alumni story!"<br><br>

<b>**Note: This section will allow you to add and save multiple records.</b>
            </p><br>
<h2>MASTERS DEGREE</h2>
<form method="POST" id="degree_recs1">
<table id="degree_record1" style="margin-left: 85px !important;">
                            <thead>
                                <tr>
                                    <th>Program</th>
                                    <th>School</th>
                                    <th>Date Passed</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                                $model = new Model();
                                $rows1 = $model->displayDegreeRecord($_SESSION['id'], 1);
                                if (!empty($rows1)) {
                                    foreach ($rows1 as $row1) {
                                        $degree_id1 = $row1['id'];
                                        $course = $row1['course'];
                                        $school = $row1['school'];
                                        $date = $row1['date'];
?>
                                <tr>
                                    <td>
                                       <input type="hidden" name="degree_id1_<?php echo $degree_id1; ?>" value="<?php echo $degree_id1; ?>">
                                       <input type="text" name="course1[]" readonly value="<?php echo $course; ?>" style="width: 300px; height: 40px;" >
                                    </td>
                                    <td><input type="text" name="school1[]" readonly value="<?php echo $school; ?>" style="width: 300px; height: 40px;"></td>

                                    <td><input type="date" name="date1[]" readonly value="<?php echo $date; ?>" style="width: 200px; height: 40px;"></td>

                                    <td>
                                        <form method="POST">
                                        <input type="hidden" name="degree_id1" value="<?php echo $degree_id1; ?>">

                                        <button type="submit" class="btn btn-danger" data-bs-toggle="button" name="delete_degreerec1" style="border-radius: 10px;">Delete</button>
                                        </form>
                                    </td>
                                </tr>
<?php
                                    }
                                }
                                else {
                                    echo "";
                                }

    if (isset($_POST['delete_degreerec1'])) {
        $model = new Model();
        $degree_id1 = $_POST['degree_id1'];
        $model->deleteDegreeRecord(2, $degree_id1);
        echo "<script>alert('Masters degree record has been removed');window.open('alumnitracerform.php','_self');</script>";
    }
?>



                                <tr>
                                    <td><input type="text" name="course1[]" style="width: 300px; height: 40px;"></td>
                                    <td><input type="text" name="school1[]" style="width: 300px; height: 40px;"></td>
                                    <td><input type="date" name="date1[]" style="width: 200px; height: 40px;"></td>
                                    <td><button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow1(this)" style="border-radius: 10px;">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <button type="button" class="btn btn-primary" onclick="addRow1()" style="border-radius: 10px;">Add Masters Degree Record</button>
                        <br>
                    
                        <script>
                            function addRow1() {
                                var table = document.getElementById("degree_record1");
                                var row = table.insertRow(-1);
                                var cell1 = row.insertCell(0);
                                var cell2 = row.insertCell(1);
                                var cell3 = row.insertCell(2);
                                var cell4 = row.insertCell(3);
                                cell1.innerHTML = '<input type="text" name="course1[]" style="width: 300px; height: 40px;">';
                                cell2.innerHTML = '<input type="text" name="school1[]" style="width: 300px; height: 40px;">';
                                cell3.innerHTML = '<input type="date" name="date1[]" style="width: 200px; height: 40px;">';
                                cell4.innerHTML = '<button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow1(this)" style="float:left;border-radius: 10px;">Delete</button>';
                            }
                            function deleteRow1(button) {
                                var row = button.parentNode.parentNode;
                                row.parentNode.removeChild(row);
                            }
                        </script>


<br><br><br>
<h2>DOCTORATE DEGREE</h2>
<table id="degree_record2" style="margin-left: 85px !important;">
                            <thead>
                                <tr>
                                    <th>Program</th>
                                    <th>School</th>
                                    <th>Date Passed</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                                $model = new Model();
                                $rows2 = $model->displayDegreeRecord($_SESSION['id'], 2);
                                if (!empty($rows2)) {
                                    foreach ($rows2 as $row2) {
                                        $degree_id2 = $row2['id'];
                                        $course = $row2['course'];
                                        $school = $row2['school'];
                                        $date = $row2['date'];
?>
                                <tr>
                                    <td>
                                       <input type="hidden" name="degree_id2_<?php echo $degree_id2; ?>" value="<?php echo $degree_id2; ?>">
                                       <input type="text" name="course2[]" readonly value="<?php echo $course; ?>" style="width: 300px; height: 40px;">
                                    </td>
                                    <td><input type="text" name="school2[]" readonly value="<?php echo $school; ?>" style="width: 300px; height: 40px;"></td>

                                    <td><input type="date" name="date2[]" readonly value="<?php echo $date; ?>" style="width: 200px; height: 40px;"></td>

                                    <td>
                                        <form method="POST">
                                        <input type="hidden" name="degree_id2" value="<?php echo $degree_id2; ?>">

                                        <button type="submit" class="btn btn-danger" data-bs-toggle="button" name="delete_degreerec2" style="border-radius: 10px;">Delete</button>
</form>
                                    </td>
                                </tr>
<?php
                                    }
                                }
                                else {
                                    echo "";
                                }

    if (isset($_POST['delete_degreerec2'])) {
        $model = new Model();
        $degree_id2 = $_POST['degree_id2'];
        $model->deleteDegreeRecord(2, $degree_id2);
        echo "<script>alert('Doctorate degree record has been removed');window.open('alumnitracerform.php','_self');</script>";
    }
?>



                                <tr>
                                    <td><input type="text" name="course2[]" style="width: 300px; height: 40px;"></td>
                                    <td><input type="text" name="school2[]" style="width: 300px; height: 40px;"></td>
                                    <td><input type="date" name="date2[]" style="width: 200px; height: 40px;"></td>
                                    <td><button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow2(this)" style="border-radius: 10px;">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <button type="button" class="btn btn-primary" onclick="addRow2()" style="border-radius: 10px;">Add Doctorate Degree Record</button>
                        <br>
                    
                        <script>
                            function addRow2() {
                                var table = document.getElementById("degree_record2");
                                var row = table.insertRow(-1);
                                var cell1 = row.insertCell(0);
                                var cell2 = row.insertCell(1);
                                var cell3 = row.insertCell(2);
                                var cell4 = row.insertCell(3);
                                cell1.innerHTML = '<input type="text" name="course2[]" style="width: 300px; height: 40px;">';
                                cell2.innerHTML = '<input type="text" name="school2[]" style="width: 300px; height: 40px;">';
                                cell3.innerHTML = '<input type="date" name="date2[]" style="width: 200px; height: 40px;">';
                                cell4.innerHTML = '<button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow2(this)" style="float:left;border-radius: 10px;">Delete</button>';
                            }
                            function deleteRow2(button) {
                                var row = button.parentNode.parentNode;
                                row.parentNode.removeChild(row);
                            }
                        </script>


<style>
        /* Hide the table by default */
        #licensure_records {
            display: none;
        }
</style>
<br><br><br>
<h2>LICENSURE EXAM</h2>
<p>Have you taken any licensure exams related to your profession or field of study?</p>


    <?php
    $model = new Model();
    $rowsl = $model->displayLicensureRecord($_SESSION['id']);
    if (!empty($rowsl)) {
        foreach ($rowsl as $rowl) {

            $answer = $rowl['answer'];

            if($answer == 'yes') {
?>

            <input type="radio" id="no" name="licensure" value="no" onclick="toggleTable(false)">
            <label for="no">No</label><br>

            <input type="radio" id="yes" name="licensure" value="yes" onclick="toggleTable(true)" checked>
            <label for="yes">Yes</label><br>

<?php
            }
            else {
?>
            
            <input type="radio" id="no" name="licensure" value="no" onclick="toggleTable(false)" checked>
            <label for="no">No</label><br>
            <input type="radio" id="yes" name="licensure" value="yes" onclick="toggleTable(true)">
            <label for="yes">Yes</label><br>

<?php
            }

?>

<?php
        }
    }
    else {
?>
<input type="radio" id="no" name="licensure" value="no" onclick="toggleTable(false)" checked>
<label for="no">No</label><br>
<input type="radio" id="yes" name="licensure" value="yes" onclick="toggleTable(true)">
<label for="yes">Yes</label><br>
<?php
    }
?>


<table id="licensure_records" style="margin-left: 245px !important;">
                            <thead>
                                <tr>
                                    <th>Type of Licensure Exam</th>
                                    <th>Year Passed</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                                $model = new Model();
                                $rows3 = $model->displayDegreeRecord($_SESSION['id'], 3);
                                if (!empty($rows3)) {
                                    foreach ($rows3 as $row3) {
                                        $degree_id3 = $row3['id'];
                                        $course = $row3['course'];
                                        $school = $row3['school'];
                                        $date = $row3['date'];
?>
                                <tr>
                                    <td>
                                       <input type="hidden" name="degree_id3_<?php echo $degree_id3; ?>" value="<?php echo $degree_id3; ?>">
                                       <input type="text" name="course3[]" readonly value="<?php echo $course; ?>" style="width: 300px; height: 40px;">
                                    </td>
                                    <td><input type="text" name="school3[]" readonly value="<?php echo $school; ?>" style="width: 200px; height: 40px;"></td>

                                    <td>
                                        <form method="POST">
                                        <input type="hidden" name="degree_id3" value="<?php echo $degree_id3; ?>">

                                        <button type="submit" class="btn btn-danger" data-bs-toggle="button" name="delete_degreerec3" style="border-radius: 10px;">Delete</button>
</form>
                                    </td>
                                </tr>
<?php
                                    }
                                }
                                else {
                                    echo "";
                                }

    if (isset($_POST['delete_degreerec3'])) {
        $model = new Model();
        $degree_id3 = $_POST['degree_id3'];
        $model->deleteDegreeRecord(2, $degree_id3);
        echo "<script>alert('Licensure Exam record has been removed');window.open('alumnitracerform.php','_self');</script>";
    }
?>

                                <tr>
                                    <td><input type="text" name="course3[]" style="width: 300px; height: 40px;"></td>
                                    <td><input type="text" name="school3[]" style="width: 200px; height: 40px;"></td>
                                    <td><button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow3(this)" style="border-radius: 10px;">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <button type="button" class="btn btn-primary" onclick="addRow3()" style="border-radius: 10px;">Add Licensure Exam Record</button>
                        <br>
                    
                        <script>
                            function addRow3() {
                                var table = document.getElementById("licensure_records");
                                var row = table.insertRow(-1);
                                var cell1 = row.insertCell(0);
                                var cell2 = row.insertCell(1);
                                var cell3 = row.insertCell(2);
                                cell1.innerHTML = '<input type="text" name="course3[]" style="width: 300px; height: 40px;">';
                                cell2.innerHTML = '<input type="text" name="school3[]" style="width: 200px; height: 40px;">';
                                cell3.innerHTML = '<button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow3(this)" style="float:left;border-radius: 10px;">Delete</button>';
                            }
                            function deleteRow3(button) {
                                var row = button.parentNode.parentNode;
                                row.parentNode.removeChild(row);
                            }
                        </script>
<script>
    <?php
    $model = new Model();
    $rowsl = $model->displayLicensureRecord($_SESSION['id']);
    if (!empty($rowsl)) {
        foreach ($rowsl as $rowl) {

            $answer = $rowl['answer'];

            if($answer == 'yes') {
?>
        //Called when the page loads to set the initial state of the table
        document.addEventListener("DOMContentLoaded", function () {
            toggleTable(document.querySelector('input[name="licensure"]:checked').value === "yes");
        });

<?php
            }
            else {

            }
        }
    }
?>

<?php

?>


        function toggleTable(show) {
            var table = document.getElementById("licensure_records");
            if (show) {
                table.style.display = "table";
            } else {
                table.style.display = "none";
            }
        }
    </script>


<!-- EMPLOYEMENT RECORD -->
<br><br><br>
<h2>EMPLOYMENT RECORD</h2>
<p><b><i>Begin your first job after graduation</i></b></p>

<table id="employment_records">
                            <thead>
                                <tr>
                                    <th>Name of Company/Business</th>
                                    <th>Date Employed</th>
                                    <th>Employment Position</th>
                                    <th>Employment Status</th>
                                    <th>Approximate Monthly Salary</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                                $model = new Model();
                                $rows = $model->displayEmploymentRecord($_SESSION['id']);
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        $emprecord_id = $row['id'];
                                        $company = $row['company'];
                                        $date_employed = $row['date_employed'];
                                        $position = $row['position'];
                                        $emp_status = $row['emp_status'];
                                        $salary = $row['salary'];
?>
                                <tr>
                                    <td>
                                       <input type="hidden" name="emprecord_id_<?php echo $emprecord_id; ?>" value="<?php echo $emprecord_id; ?>">
                                       <input type="text" name="name_company" readonly value="<?php echo $company; ?>" style="width: 250px; height: 40px;">
                                    </td>
                                    <td><input type="date" name="date_employedx" readonly value="<?php echo $date_employed; ?>" style="width: 150px; height: 40px;"></td>

                                    <td><input type="text" name="emp_positionx" readonly value="<?php echo $position; ?>" style="width: 220px; height: 40px;"></td>

                                    <td><input type="text" name="employment_statusx" readonly value="<?php echo $emp_status; ?>" style="width: 220px; height: 40px;"></td>

                                    <td><input type="text" name="approx_monthly_salary" readonly value="<?php echo $salary; ?>" style="width: 150px; height: 40px;"></td>

                                    <td>
                                        <form method="POST">
                                        <input type="hidden" name="emprecord_id" value="<?php echo $emprecord_id; ?>">

                                        <input type="hidden" name="ecompany" value="<?php echo $company; ?>">

                                        <input type="hidden" name="edate_employed" value="<?php echo $date_employed; ?>">

                                        <input type="hidden" name="eposition" value="<?php echo $position; ?>">

                                        <input type="hidden" name="eemp_status" value="<?php echo $emp_status; ?>">

                                        <button type="submit" class="btn btn-danger" data-bs-toggle="button" name="delete_emprec" style="border-radius: 10px;">Delete</button>
</form>
                                    </td>
                                </tr>
<?php
                                    }
                                }
                                else {
                                    echo "";
                                }

    if (isset($_POST['delete_emprec'])) {
        $model = new Model();
        $emprecord_id = $_POST['emprecord_id'];

        // $ecompany = $_POST['ecompany'];
        // $edate_employed = $_POST['edate_employed'];
        // $eposition = $_POST['eposition'];
        // $eemp_status = $_POST['eemp_status'];

        $model->deleteEmploymentRecord(2, $emprecord_id);
        echo "<script>alert('Employment record has been removed');window.open('alumnitracerformupdate.php','_self');</script>";
    }
?>



                                <tr>
                                    <td><input type="text" name="name_company[]" style="width: 250px; height: 40px;"></td>
                                    <td><input type="date" name="date_employed[]" style="width: 150px; height: 40px;"></td>
                                    <td><input type="text" name="emp_position[]" style="width: 220px; height: 40px;"></td>
                                    <td>
                                        <!-- Permanent / Temporary / Probation / Contractual -->
                                        <select name="employment_status[]" style="width: 220px; height: 40px;">
                                            <option value="0">- Select -</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Probation">Probation</option>
                                            <option value="Contractual">Contractual</option>
                                        </select>
                                    <td>
                                        <select name="approx_monthly_salary[]" style="width: 150px; height: 40px;">
                                            <option value="0">- Select -</option>
                                            <option value="Below 15,000">Below 15,000</option>
                                            <option value="15,001-20,000">15,001-20,000</option>
                                            <option value="20,001-25,000">20,001-25,000</option>
                                            <option value="25,001 Above">25,001 Above</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow(this)" style="border-radius: 10px;">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <button type="button" class="btn btn-primary" onclick="addRow()" style="border-radius: 10px;">Add Employment Record</button>
                        <br><br>
                        <button type="submit" class="btn btn-success" name="addemprecord" style="border-radius: 10px;">Update Career Insights</button>
                    
                        <script>
                            function addRow() {
                                var table = document.getElementById("employment_records");
                                var row = table.insertRow(-1);
                                var cell1 = row.insertCell(0);
                                var cell2 = row.insertCell(1);
                                var cell3 = row.insertCell(2);
                                var cell4 = row.insertCell(3);
                                var cell5 = row.insertCell(4);
                                var cell6 = row.insertCell(5);
                                cell1.innerHTML = '<input type="text" name="name_company[]" style="width: 250px; height: 40px;">';
                                cell2.innerHTML = '<input type="date" name="date_employed[]" style="width: 150px; height: 40px;">';
                                cell3.innerHTML = '<input type="text" name="emp_position[]" style="width: 220px; height: 40px;">';
                                cell4.innerHTML = '<select name="employment_status[]" style="width: 220px; height: 40px;">' +
        '<option value="0">- Select -</option>' +
        '<option value="Permanent">Permanent</option>' +
        '<option value="Temporary">Temporary</option>' +
        '<option value="Probation">Probation</option>' +
        '<option value="Contractual">Contractual</option>' +
        '</select>';
                                cell5.innerHTML = '<select name="approx_monthly_salary[]" style="width: 150px; height: 40px;">' +
        '<option value="0">- Select -</option>' +
        '<option value="Below 15,000">Below 15,000</option>' +
        '<option value="15,001-20,000">15,001-20,000</option>' +
        '<option value="20,001-25,000">20,001-25,000</option>' +
        '<option value="25,001 Above">25,001 Above</option>' +
        '</select>';
                                cell6.innerHTML = '<button type="button" class="btn btn-danger" data-bs-toggle="button" onclick="deleteRow(this)" style="border-radius: 10px;">Delete</button>';
                            }
                            function deleteRow(button) {
                                var row = button.parentNode.parentNode;
                                row.parentNode.removeChild(row);
                            }
                        </script>

<?php
// Check if the form is submitted
if (isset($_POST['addemprecord'])) {
    try {
        // Assuming $model is already initialized
        $model = new Model();

        // Get user_id from the session
        $user_id = $_SESSION['id'];

        // Retrieve arrays from POST
        $companies = $_POST['name_company'];
        $dates_employed = $_POST['date_employed'];
        $positions = $_POST['emp_position'];
        $employment_statuses = $_POST['employment_status'];
        $salaries = $_POST['approx_monthly_salary'];

        // Loop through the arrays and insert records
        foreach ($companies as $key => $company) {
            // Ensure other corresponding arrays have values for the current key
            if (
                isset($dates_employed[$key], $positions[$key], $employment_statuses[$key], $salaries[$key])
                && !empty($company)
            ) {
                // Get values for the current key
                $date_employed = $dates_employed[$key];
                $position = $positions[$key];
                $emp_status = $employment_statuses[$key];
                $salary = $salaries[$key];
                $status = "1";

                // Insert record into the database
                $model->insertEmploymentRecord($user_id, $company, $date_employed, $position, $emp_status, $salary, $status);
            }
        }

        $course1 = $_POST['course1'];
        $school1 = $_POST['school1'];
        $date1 = $_POST['date1'];
        
        $model->deleteUserDegrees($user_id, 1);
        $model->deleteUserDegrees($user_id, 2);
        $model->deleteUserDegrees($user_id, 3);

        // Loop through the arrays and insert records
        foreach ($course1 as $key => $company) {
            // Ensure other corresponding arrays have values for the current key
            if (
                isset($course1[$key], $school1[$key], $date1[$key])
                && !empty($company)
            ) {
                // Get values for the current key
                $course1_value = $course1[$key];
                $school1_value = $school1[$key];
                $date1_value = $date1[$key];
                $status = "1";

                // Insert record into the database
                $model->insertDegreeRecord($user_id, $course1_value, $school1_value, $date1_value, 1, $status);
            }
        }

                $course2 = $_POST['course2'];
        $school2 = $_POST['school2'];
        $date2 = $_POST['date2'];

        // Loop through the arrays and insert records
        foreach ($course2 as $key => $company) {
            // Ensure other corresponding arrays have values for the current key
            if (
                isset($course2[$key], $school2[$key], $date2[$key])
                && !empty($company)
            ) {
                // Get values for the current key
                $course2_value = $course2[$key];
                $school2_value = $school2[$key];
                $date2_value = $date2[$key];
                $status = "1";

                // Insert record into the database
                $model->insertDegreeRecord($user_id, $course2_value, $school2_value, $date2_value, 2, $status);
            }
        }        

$licensure = $_POST['licensure'];
         $model->insertLicensureRecord($_SESSION['id'], $licensure);

         $course3 = $_POST['course3'];
        $school3 = $_POST['school3'];

        // Loop through the arrays and insert records
        foreach ($course3 as $key => $company) {
            // Ensure other corresponding arrays have values for the current key
            if (
                isset($course3[$key], $school3[$key])
                && !empty($company)
            ) {
                // Get values for the current key
                $course3_value = $course3[$key];
                $school3_value = $school3[$key];
                $status = "1";

                // Insert record into the database
                $model->insertDegreeRecord($user_id, $course3_value, $school3_value, "N/A", 3, $status);
            }
        }

        // Redirect to a page after insertion
        echo "<script>alert('Career Insights record has been updated');window.open('alumnitracerformupdate.php','_self');</script>";
    } catch (Exception $e) {
        // Handle the exception, log it, or display an error message
        echo "Error: " . $e->getMessage();
    }
}
?>
                    
                </div>
            </div>
       
    </form>
</div>


<script type="text/javascript" src="resources/vendors/jquery/jquery.min.js" ></script>
<script type="text/javascript">
    $(function() {
        $('#emp_status').change(function() {
                switch ($(this).val()) {
                    case 'employed':
                        $('#e_name_of_business').prop('required', true);
                        $('#current_job_position').prop('required', true);
                        $('#company_affiliation').prop('required', true);
                        $('#company_address').prop('required', true);
                        $('#job_industry_type').prop('required', true);
                        $('#monthly_salary').prop('required', true);
                        $('#e_date_employed').prop('required', true);
                        $('#e_emp_status').prop('required', true);

                        $('#name_of_business').prop('required', false);
                        $('#nature_of_business').prop('required', false);
                        $('#role_in_business').prop('required', false);
                        $('#business_address').prop('required', false);
                        $('#business_phone_number').prop('required', false);
                        $('#business_approx_salary').prop('required', false);
                        $('#s_date_employed').prop('required', false);
                        $('#s_emp_status').prop('required', false);
                        break;
                    case 'unemployed':
                        $('#e_name_of_business').prop('required', false);
                        $('#current_job_position').prop('required', false);
                        $('#company_affiliation').prop('required', false);
                        $('#company_address').prop('required', false);
                        $('#job_industry_type').prop('required', false);
                        $('#monthly_salary').prop('required', false);
                        $('#e_date_employed').prop('required', false);
                        $('#e_emp_status').prop('required', false);

                        $('#name_of_business').prop('required', false);
                        $('#nature_of_business').prop('required', false);
                        $('#role_in_business').prop('required', false);
                        $('#business_address').prop('required', false);
                        $('#business_phone_number').prop('required', false);
                        $('#business_approx_salary').prop('required', false);
                        $('#s_date_employed').prop('required', false);
                        $('#s_emp_status').prop('required', false);
                        break;
                    case 'selfemployed':
                        $('#e_name_of_business').prop('required', false);
                        $('#current_job_position').prop('required', false);
                        $('#company_affiliation').prop('required', false);
                        $('#company_address').prop('required', false);
                        $('#job_industry_type').prop('required', false);
                        $('#monthly_salary').prop('required', false);
                        $('#e_date_employed').prop('required', false);
                        $('#e_emp_status').prop('required', false);

                        $('#name_of_business').prop('required', true);
                        $('#nature_of_business').prop('required', true);
                        $('#role_in_business').prop('required', true);
                        $('#business_address').prop('required', true);
                        $('#business_phone_number').prop('required', true);
                        $('#business_approx_salary').prop('required', true);
                        $('#s_date_employed').prop('required', true);
                        $('#s_emp_status').prop('required', true);
                        break;

                }
            });
    });
</script>
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
            var yearPicker = document.getElementById("year");
            for (var year = maxYear; year >= minYear; year--) {
                var option = document.createElement("option");
                option.text = year;
                yearPicker.add(option);
            }
        </script>


