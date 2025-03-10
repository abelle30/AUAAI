<!doctype html>
<html lang="en">
    
     
<?php session_start();?>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
     <!-- Favicon-->
     <?php
 include('resources/includes/db_conn.php'); 

if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] !== "admin") {
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

   
 ?>
 
 


<!--Vendors Resources-->
<!--Bootstrap CSS-->



    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<meta name="description" content="This is an example dashboard created using build-in elements and components.">
<meta name="msapplication-tap-highlight" content="no">
<script type="text/javascript" src="resources/js/main.js" ></script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="resources/css/main.css">
<link href="./main.css" rel="stylesheet"></head>

<style>
    
.charts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.charts-card {
  background-color: #ffffff;
  margin-bottom: 20px;
  padding: 25px;
  box-sizing: border-box;
  -webkit-column-break-inside: avoid;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.chart-title {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  font-weight: 600;
}
#card-link {
    cursor: pointer;
}

#card-link:hover {
    /* Add styling for the hover effect, for example, changing the background color */
    background-color: #cccccc;
}

    </style>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<div class="app-header header-shadow">
<div class="app-header__logo">
<div class="logo-src">
   
        <center>
            <div style="display: flex;">
            <img src="resources/images/auaai-logo.png" class="nav-avatar2" style="max-width: 50%; max-height: 100%;" />
            <span style="margin-left: 10px; color: white; white-space: nowrap; font-size: 17px; font-weight: bold;">AUAAI Admin</span>
        </div>
        </center>

</div>        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
        <span class="btn-icon-wrapper">
        <i class="fa fa-ellipsis-v fa-w-6"></i>
        </span>
        </button>
        </span>
    </div> 
<div class="app-header__content">
    <div class="app-header-left">
        <div>
            <div>
            </div>
            <button class="close"></button>
        </div>
        <ul class="header-menu nav">
        <li class="nav-item">
        
        </li>
    </div>
<div class="app-header-right">
    <div class="header-btn-lg pr-0">
        <div class="widget-content p-0">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="btn-group">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                        <img width="42" class="rounded-circle" src="resources/images/user1.png" alt="">
                        </a>
                    
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <button type="button" tabindex="0" class="dropdown-item" onclick="window.location.href='changepassword.php'">Change password</button>
                                    <a href="logout.php" class="dropdown-item">Logout</a>

                            </div>
                    </div>
                </div>
        <div class="widget-content-left  ml-3 header-user-info">
            <div class="widget-heading"></div>
                <div class="widget-subheading"></div>
        </div>
<div class="widget-content-right header-user-info ml-3">


</button>
</div>
</div>
</div>
</div> </div>
</div>
</div> <div class="ui-theme-settings">

<div class="theme-settings__inner">
<div class="scrollbar-container">
<div class="theme-settings__options-wrapper">
<h3 class="themeoptions-heading">Layout Options
</h3>
<div class="p-3">
<ul class="list-group">
<li class="list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-3">
<div class="switch has-switch switch-container-class" data-class="fixed-header">
<div class="switch-animate switch-on">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
</div>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Fixed Header
</div>
<div class="widget-subheading">
</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-3">
<div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
<div class="switch-animate switch-on">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
</div>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Fixed Sidebar
</div>
<div class="widget-subheading">Makes the sidebar left fixed, always visible!
</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-3">
<div class="switch has-switch switch-container-class" data-class="fixed-footer">
<div class="switch-animate switch-off">
<input type="checkbox" data-toggle="toggle" data-onstyle="success">
</div>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Fixed Footer
</div>
<div class="widget-subheading">Makes the app footer bottom fixed, always visible!
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
<h3 class="themeoptions-heading">
<div>
Header Options
</div>
<button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
Restore Default
</button>
</h3>
<div class="p-3">
 <ul class="list-group">
<li class="list-group-item">
<h5 class="pb-2">Choose Color Scheme
</h5>
<div class="theme-settings-swatches">
<div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
</div>
<div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
</div>
<div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
</div>
<div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
</div>
<div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
</div>
<div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
</div>
<div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
</div>
<div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
</div>
<div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
</div>
<div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
</div>
<div class="divider">
</div>
<div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
</div>
<div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
</div>
<div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
</div>
<div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
</div>
<div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
</div>
<div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
</div>
<div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
</div>
<div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
</div>
<div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
</div>
 <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
</div>
<div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
</div>
<div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
</div>
<div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
</div>
<div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
</div>
<div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
</div>
<div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
</div>
<div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
</div>
<div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
</div>
<div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
</div>
<div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
</div>
<div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
</div>
<div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
</div>
<div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
</div>
<div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
</div>
<div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
</div>
<div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
</div>
</div>
</li>
</ul>
</div>
<h3 class="themeoptions-heading">
<div>Sidebar Options</div>
<button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
Restore Default
</button>
</h3>
<div class="p-3">
<ul class="list-group">
<li class="list-group-item">
<h5 class="pb-2">Choose Color Scheme
</h5>
<div class="theme-settings-swatches">
<div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
</div>
<div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
</div>
<div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
</div>
<div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
</div>
<div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
</div>
<div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
</div>
<div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
</div>
<div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
</div>
<div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
</div>
<div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
</div>
<div class="divider">
</div>
<div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
</div>
<div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
</div>
<div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
</div>
<div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
</div>
<div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
</div>
<div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
</div>
<div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
</div>
<div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
</div>
<div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
</div>
<div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
</div>
<div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
</div>
<div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
</div>
<div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
</div>
<div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
</div>
<div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
</div>
<div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
</div>
<div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
</div>
<div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
</div>
<div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
</div>
<div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
</div>
<div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
</div>
<div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
</div>
<div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
</div>
<div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
</div>
<div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
</div>
<div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
</div>
</div>
</li>
</ul>
</div>
<h3 class="themeoptions-heading">
<div>Main Content Options</div>
<button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
</button>
</h3>
<div class="p-3">
<ul class="list-group">
<li class="list-group-item">
<h5 class="pb-2">Page Section Tabs
</h5>
<div class="theme-settings-swatches">
 <div role="group" class="mt-2 btn-group">
<button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
Line
</button>
<button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
Shadow
</button>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div> 
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                    </span>
                    </button>
                    </div>
                </div>
                    <div class="app-header__menu">
                        <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                        </button>
                        </span>
                    </div> <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Account</li>

  <a href="admindashboard.php" class="navlogo-item"><center> </i></span> Dashboard</a></center> 
</a>
</li>
    <li class="app-sidebar__heading"></li>
    <li>  
        <li class="app-sidebar__heading">Navigation</li>

    <ul>
        <li>
            <a href="#">Manage Alumni</a>
            <ul>
            <!--<li><a href="add-alumni.php">Add Alumni</a></li>-->
            <li><a href="alumnicolleges.php">Alumni List</a></li>
           
            <li><a href="verifylist.php">Verify List</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Alumni ID</a>
            <ul>
            <!--<li><a href="add-alumiinid.php">Add Alumni ID</a></li>-->
            <li><a href="managealumniid.php">Application List</a></li>
            <li><a href="idlist-alumniid.php">Completed List</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Alumni Tracer</a>
            <ul>
            <!--<a href="add-alumnitracer.php">Add Tracker</a>-->
            <a href="managealumnitracer.php">Tracer List</a>
            <a href="manage_courses.php">Manage Course</a>
</ul>
        </li>


        <li>
        <a href="#">News & Announcements</a>
        <ul>
            <li><a href="add-news.php">Add News</a></li>
            <li><a href="add-announcements.php">Add Announcements</a></li>
            <li><a href="manage-news.php">News List</a></li>
            <li><a href="manageannouncements.php">Announcements List</a></li>

        </ul>
        </li>

        <li>
            <a href="#">Programs and Events</a>
                <ul>

                <li><a href="add-event.php">Add Event</a></li>
                <li><a href="add-event-category.php">Add Event Category</a></li>
                <li><a href="add-eventsarchives.php">Add Event Archive</a></li>
                <li><a href="add-event-arch-category.php">Add Archive Category</a></li>
                <li><a href="add-mentorship.php">Add Mentorship</a></li>

                    <li><a href="manage-events.php">Events List</a></li>
                    <li><a href="manageeventsarchive.php">Events Archive List</a></li>
                    <li><a href="manage-mentorship.php">Mentorships List</a></li>

                </ul>
        </li>

        <li>
            <a href="#">Manage Career</a>
            <ul>
            <a href="add-career.php">Add Career</a>
            <a href="manage-careers.php">Career List</a>
           
</ul>
        </li>

        <li>
            <a href="#">Manage Donations</a>
            <ul>
            <!--<a href="add-donation.php">Add Donation</a>-->
            <a href="manage-donation.php">Donation List</a>
</ul>
        </li>

        <li>
            <a href="userloginlog.php">User Login Log</a>

        </li>


    
    <li>
    <a href="#">Manage Comments</a>
            <ul>
            <a href="commentslist.php">Comments List</a>
        

            </ul>
         
        </li>
        <li>
                <a href="#">Manage About</a>
                <ul>
                <a href="manage-officer.php">Officers</a>
                    <a href="add-officer.php">Add Officers</a>
                </ul>
            
            </li>
            
                <li>
                <a href="#">Manage Emails</a>
                <ul>
                <a href="manage-emails.php">Emails</a>
                   
                </ul>
            
            </li>
            
            <li>
            <a href="#">Manage Footer</a>
            <ul>
                <a href="manage-footer.php">Footer</a>
               
            </ul>
         
            </li>
            
            
 </ul>

</ul>


</div>
</div>
</div> 
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div>
                        <div>
                            <div>

                            </i>
                            </div>

        <div class="containe-fluid">
            <div class="row mt-3 ml-3 mr-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p><b>Welcome Back, Admin!</b></p>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                      <a href="alumnicolleges.php">
        <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Registered</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php
$query = $conn->query("SELECT * FROM users WHERE usertype = 'alumni'");
$numRows = $query->num_rows;
echo $numRows;
?>
                                                </b></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="col-md-3">
                                      <a href="managealumnitracer.php">
         <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Employed</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                                                                                                            <?php
$query = $conn->query("SELECT * FROM alumnitracerform_data WHERE emp_status = 'employed'");
$numRows = $query->num_rows;
echo $numRows;
?>
        
                                                </b></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="col-md-3">
                                    <a href="managealumnitracer.php">
         <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Unemployed</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                                                                    <?php
$query = $conn->query("SELECT * FROM alumnitracerform_data WHERE emp_status = 'unemployed'");
$numRows = $query->num_rows;
echo $numRows;
?>
                                                </b></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="col-md-3">
                                       <a href="managealumnitracer.php">
            <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Self-employed</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                                          <?php
$query = $conn->query("SELECT * FROM alumnitracerform_data WHERE emp_status = 'selfemployed'");
$numRows = $query->num_rows;
echo $numRows;
?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="col-md-3">
                                                        <a href="managealumniid.php">
           <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Alumni ID</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php echo $conn->query("SELECT * FROM alumniid")->num_rows; ?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>

                                <div class="col-md-3">
                                      <a href="manage-news.php">
       <div class="card" id="card-link" style="width: 265px;">
                           
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>News</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php echo $conn->query("SELECT * FROM newsandannouncements")->num_rows; ?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        </a>


                                    <div class="col-md-3">
                                    <a href="manage-careers.php">
             <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Careers</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php echo $conn->query("SELECT * FROM careers")->num_rows; ?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </a>


                                    <div class="col-md-3">
                                     <a href="manage-events.php">
          <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Events</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php echo $conn->query("SELECT * FROM upcomingevents")->num_rows; ?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                           
                                </div>
                                </a>
                                
                                <div class="col-md-3">
                                    <a href="manageeventsarchive.php">
             <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Events Archive</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php echo $conn->query("SELECT * FROM events")->num_rows; ?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </a>


                                

                                <div class="col-md-3">
                                   <a href="manage-donation.php">
              <div class="card" id="card-link" style="width: 265px;">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Donation</b></p>
                                                
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php echo $conn->query("SELECT * FROM donations")->num_rows; ?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                           
                                </div>
                                </a>
                                
                                




<?php
			include 'resources/includes/model.php';
?>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-primary2">
                    
                    <button  class="btn btn-primary" onclick="printCharts([
    { id: 'genderPerCourseChart', title: 'Gender Distribution per Course' },
    { id: 'graduationPerCourseChart', title: 'Graduation Rate per Course' },
    { id: 'alumniGenderChart', title: 'Alumni Gender Distribution' },
    { id: 'empRateVS', title: 'Employment Rate vs. Satisfaction' },
    { id: 'alumniRelatedChart', title: 'Alumni Relatedness to Course' },
    { id: 'alumniSatisfactionChart', title: 'Alumni Satisfaction' },
    { id: 'studentsPerCourseChart', title: 'Students per Course' },
    { id: 'engangementChart', title: 'Engagement Chart' },
    { id: 'donationChart', title: 'Donation Chart' }
])">Print All Charts</button>
                    <h2 class="text-center mt-4 mb-3">DEMOGRAPHICS</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="text-center mt-4 mb-3">Gender Distribution to Courses</h4>
                            <div class="container mt-4">
                                <canvas id="genderPerCourseChart"></canvas>
                            </div>
                        </div>
                        <script>
                            var data = {
                                labels: [
                                <?php
                                    $model = new Model();
                                    $rows = $model->displayColleges();
                                    
                                    if (!empty($rows)) {
                                    	foreach ($rows as $row) {
                                ?>
                                    	'<?php echo $row['course']; ?>',
                                <?php
                                    	}
                                    }
                                ?>],
                                datasets: [
                                    {
                                        label: 'Male',
                                        backgroundColor: '#488AF0',
                                        data: [
                                <?php
                                    $model = new Model();
                                    $rows = $model->displayCollegesStudentCount();
                                    
                                    if (!empty($rows)) {
                                    	foreach ($rows as $row) {
                                ?>
                                    	<?php echo $row['sc_male']; ?>,
                                <?php
                                    	}
                                    }
                                ?>]
                                    },
                                    {
                                        label: 'Female',
                                        backgroundColor: '#F76AC7',
                                        data: [
                                <?php
                                    $model = new Model();
                                    $rows = $model->displayCollegesStudentCount();
                                    
                                    if (!empty($rows)) {
                                    	foreach ($rows as $row) {
                                ?>
                                    	<?php echo $row['sc_female']; ?>,
                                <?php
                                    	}
                                    }
                                ?>]
                                    }
                                ]
                            };
                            var options = {
                                scales: {
                                    x: {
                                        display: false,
                                        stacked: true
                                    },
                                    y: {
                                        stacked: true
                                    }
                                }
                            };
                            var ctx = document.getElementById('genderPerCourseChart').getContext('2d');
                            var barChart = new Chart(ctx, {
                                type: 'line',
                                data: data,
                                options: options
                            });
                        </script>
                       
                        <!-- --------------------------- -->
                        <div class="col-lg-6">
                            <h4 class="text-center mt-4 mb-3">Alumni/Course</h4>
                            <div class="container mt-4">
                                <canvas id="graduationPerCourseChart"></canvas>
                            </div>
                        </div>
                        <script>
                            var data = {
                                labels: [
                                <?php
                                    $model = new Model();
                                    $rows = $model->displayColleges();
                                    
                                    if (!empty($rows)) {
                                    	foreach ($rows as $row) {
                                ?>
                                    	'<?php echo $row['course']; ?>',
                                <?php
                                    	}
                                    }
                                ?>],
                        
                                datasets: [
                                    {
                                        label: 'Alumni',
                                        backgroundColor: '#1A3AF0',
                                        data: [
                                <?php
                                    $model = new Model();
                                    $rows = $model->displayCollegesStudentCount();
                                    
                                    if (!empty($rows)) {
                                    	foreach ($rows as $row) {
                                ?>
                                    	<?php echo $row['sc_total']; ?>,
                                <?php
                                    	}
                                    }
                                ?>]
                                    }
                                ]
                            };
                            var options = {
                                        indexAxis: 'y', // Set the index axis to 'y' for horizontal bar chart

                                scales: {
                                    x: {
                                        
                                        stacked: true
                                    },
                                    y: {
                                        display: false,
                                        stacked: true
                                    }
                                }
                            };
                            var ctx = document.getElementById('graduationPerCourseChart').getContext('2d');
                            var barChart = new Chart(ctx, {
                                type: 'bar',
                                data: data,
                                options: options
                            });
                        </script>
                        
                        <!-- --------------------------- -->
                        <?php
                            $model = new Model();
                            $rows = $model->alumniGender();
                            
                            if (!empty($rows)) {
                            	foreach ($rows as $row) {
                            		$a_male = $row['a_male'];
                            		$a_female = $row['a_female'];
                            		$a_total = $row['a_total'];
                            	}
                            }
                        ?>
                        <div class="col-lg-4">  
                        </div>
                        <div class="col-lg-4">
                            <h4 class="text-center mt-4 mb-3">Alumni Gender</h4>
                            <div class="container mt-4">
                                <canvas id="alumniGenderChart"></canvas>
                            </div>
                        </div>
                        
                        <script>
                            var data = {
                                labels: ['Male', 'Female'],
                                datasets: [
                                    {
                                        backgroundColor: ['blue', 'pink'],
                                        data: [<?php echo $a_male; ?>, <?php echo $a_female; ?>]
                                    }
                                ]
                            };

                            var ctx = document.getElementById('alumniGenderChart').getContext('2d');
                            var pieChart = new Chart(ctx, {
                                type: 'pie',
                                data: data,
                                options: {
                                }
                            });
                        </script>
                        <!-- --------------------------- -->
                        <div class="col-lg-4">
                        </div>
                    </div> 
                </div>
            </div>          
        </div>





        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-primary2">
                    <h2 class="text-center mt-4 mb-3">EMPLOYMENT</h2>
                    <div class="row">
                        
                        <div class="col-lg-3">  
                        </div>
                        
                        <div class="col-lg-6">
                            <h4 class="text-center mt-4 mb-3">Employment Status and Number of verified alumni</h4>
                            <div class="container mt-4">
                                <canvas id="empRateVS"></canvas>
                            </div>
                        </div>
                        
                        <div class="col-lg-3">  
                        </div>
                            <?php
                            $model = new Model();
                            $rows = $model->displayEmpStatus();
                                        
                            if (!empty($rows)) {
                                foreach ($rows as $row) {
                                    $selfemployed = $row['selfemployed'];
                                    $unemployed = $row['unemployed'];
                                    $employed = $row['employed'];
                                }
                            }
                            ?>
                            <script>
                                var data = {
                                    labels: ['Employed','Unemployed','Self-Employed',],
                                    datasets: [
                                        {
                                            label: 'Alumni',
                                            backgroundColor: ['#65EB74', 'gray', '#51B8E8'],
                                            data: [<?php echo $employed; ?>, <?php echo $unemployed; ?>, <?php echo $selfemployed; ?>,]
                                        }
                                    ]
                                };
                                var options = {
                                    scales: {
                                        x: {
                                            stacked: true
                                        },
                                        y: {
                                            stacked: true
                                        }
                                    }
                                };
                                var ctx = document.getElementById('empRateVS').getContext('2d');
                                var barChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: data,
                                    options: options
                                });
                            </script>
    
                            <script>
                                var data = {
                                    labels: [
                                            'Employed','Unemployed','Self-Employed',],
                                    datasets: [
                                        {
                                            label: 'Male',
                                            backgroundColor: 'blue',
                                            data: [<?php echo $employed; ?>, <?php echo $unemployed; ?>, <?php echo $employed; ?>,]
                                        },
                                        {
                                            label: 'Female',
                                            backgroundColor: 'pink',
                                            data: [
                                    <?php
                                        $model = new Model();
                                        $rows = $model->displayCollegesStudentCount();
                                        
                                        if (!empty($rows)) {
                                            foreach ($rows as $row) {
                                    ?>
                                            <?php echo $row['sc_female']; ?>,
                                    <?php
                                            }
                                        }
                                    ?>]
                                        }
                                    ]
                                };
                                var options = {
                                    scales: {
                                        x: {
                                            stacked: true
                                        },
                                        y: {
                                            stacked: true
                                        }
                                    }
                                };
                                var ctx = document.getElementById('genderPerCourseChart').getContext('2d');
                                var barChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: data,
                                    options: options
                                });
                            </script>
                            
                        <!-- --------------------------- -->
                            <?php
                                $model = new Model();
                                $rows = $model->courseRelated();
                                
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        $jyes = $row['jyes'];
                                        $jno = $row['jno'];
                                        $j_total = $row['a_total'];
                                    }
                                }
                            ?>
                        
                        <div class="col-lg-4">  
                        </div>
                        
                        <div class="col-lg-4">
                            <h4 class="text-center mt-4 mb-3">Course - Job Relation</h4>
                            <div class="container mt-4">
                                <canvas id="alumniRelatedChart"></canvas>
                            </div>
                        </div>
                            <script>
                                var data = {
                                    labels: ['Yes', 'No'],
                                    datasets: [
                                        {
                                            backgroundColor: ['#A9EB45', '#EB5B3D'],
                                            data: [<?php echo $jyes; ?>, <?php echo $jno; ?>]
                                        }
                                    ]
                                };
    
                                var ctx = document.getElementById('alumniRelatedChart').getContext('2d');
                                var pieChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: data,
                                    options: {
                                    }
                                });
                            </script>
                            
                            <!----------------------->
                            <?php
                                $model = new Model();
                                $rows = $model->jobSatisfaction();
                                
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        $syes = $row['syes'];
                                        $sno = $row['sno'];
                                        $salit = $row['salit'];
                                        $js_total = $row['s_total'];
                                    }
                                }
                            ?>
                        
                        <div class="col-lg-4">  
                        </div>
                        <div class="col-lg-4">  
                        </div>
                        <div class="col-lg-4">
                            <h4 class="text-center mt-4 mb-3">Job Satisfaction</h4>
                            <div class="container mt-4">
                                <canvas id="alumniSatisfactionChart"></canvas>
                            </div>
                        </div>
                            <script>
                                var data = {
                                    labels: ['Very Much', 'Not Satisfied', 'A Little'],
                                    datasets: [
                                        {
                                            backgroundColor: ['#51E8AA', '#EBB63F','#CC6FEB'],
                                            data: [<?php echo $syes; ?>, <?php echo $sno; ?>, <?php echo $salit; ?>]
                                        }
                                    ]
                                };
    
                                var ctx = document.getElementById('alumniSatisfactionChart').getContext('2d');
                                var pieChart = new Chart(ctx, {
                                    type: 'doughnut',
                                    data: data,
                                    options: {
                                    }
                                });
                        </script>
                        
                        <!-- --------------------------- -->
                        <div class="col-lg-4">
                        </div>
                    </div> 
                </div>
            </div>          
        </div>





        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-primary2">
                    <h2 class="text-center mt-4 mb-3">EDUCATIONAL</h2>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <h4 class="text-center mt-4 mb-3">Alumni and their Courses</h4>
                            <div class="container mt-4">
                                <canvas id="studentsPerCourseChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                        <script>
                            var data = {
                                labels: [
                                <?php
                                    $model = new Model();
                                    $rows = $model->displayColleges();
                                    
                                    if (!empty($rows)) {
                                    	foreach ($rows as $row) {
                                ?>
                                    	'<?php echo $row['course']; ?>',
                                <?php
                                    	}
                                    }
                                ?>],
                        
                                datasets: [
                                    {
                                        label: 'Alumni',
                                        backgroundColor: '#FAEB47',
                                        data: [
                                <?php
                                    $model = new Model();
                                    $rows = $model->displayCollegesStudentCount();
                                    
                                    if (!empty($rows)) {
                                    	foreach ($rows as $row) {
                                ?>
                                    	<?php echo $row['sc_total']; ?>,
                                <?php
                                    	}
                                    }
                                ?>]
                                    }
                                ]
                            };
                            var options = {
                                scales: {
                                    x: {
                                        display: false,
                                        stacked: true
                                    },
                                    y: {
                                        stacked: true
                                    }
                                }
                            };
                            var ctx = document.getElementById('studentsPerCourseChart').getContext('2d');
                            var barChart = new Chart(ctx, {
                                type: 'bar',
                                data: data,
                                options: options
                            });
                        </script>
                        <!-- --------------------------- -->
                    </div>
                </div> 
            </div>
        </div>          


        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-primary2">
                    <h2 class="text-center mt-4 mb-3">ENGANGEMENT</h2>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <h4 class="text-center mt-4 mb-3">How often the user login</h4>
                            <div class="chart-container">
                                <canvas id="engangementChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                        <script>
                            var data = {
                                datasets: [
                                    {
                                        label: 'Sample Data',
                                        data: [
                                            { x: 1, y: 3 },
                                            { x: 2, y: 5 },
                                            { x: 3, y: 8 },
                                            { x: 4, y: 6 },
                                            { x: 5, y: 9 },
                                        ],
                                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                        pointRadius: 6,
                                        pointHoverRadius: 8,
                                    }
                                ]
                            };

                            var options = {
                                scales: {
                                    x: {
                                        type: 'linear',
                                        position: 'bottom'
                                    },
                                    y: {
                                        type: 'linear',
                                        position: 'left'
                                    }
                                }
                            };

                            var ctx = document.getElementById('engangementChart').getContext('2d');

                            var scatterChart = new Chart(ctx, {
                                type: 'scatter',
                                data: data,
                                options: options
                            });
                        </script>
                    </div> 
                </div>
            </div>          
        </div>


        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-primary2">
                    <h2 class="text-center mt-4 mb-3">DONATION</h2>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <?php
                            $model = new Model();
                            $rows = $model->donationFrequency();
                            
                            if (!empty($rows)) {
                            	foreach ($rows as $row) {
                            		$d_goods = $row['d_goods'];
                            		$d_cash = $row['d_cash'];
                            		$d_total = $row['d_total'];
                            	}
                            }
                        ?>
                        <div class="col-lg-4">
                            <h4 class="text-center mt-4 mb-3">Donation Frequency</h4>
                            <div class="container mt-4">
                                <canvas id="donationChart"></canvas>
                            </div>
                        </div>
                        <script>
                            var data = {
                                labels: ['Goods', 'Cash'],
                                datasets: [
                                    {
                                        backgroundColor: ['#E9EB73', '#EB9B73'],
                                        data: [<?php echo $d_goods; ?>, <?php echo $d_cash; ?>]
                                    }
                                ]
                            };

                            var ctx = document.getElementById('donationChart').getContext('2d');
                            var pieChart = new Chart(ctx, {
                                type: 'pie',
                                data: data,
                                options: {
                                }
                            });
                        </script>
                        <!-- --------------------------- -->
                        <div class="col-lg-4"></div>
                    </div> 
                </div>
            </div>          
        </div>
        






                            </div>  

                    
                </div>
            </div>                  
        </div>
    </div>
    
    
</div>

<div>

</div>
</div>
</div>
</div>
                                            </div>

                                        </div>
                                    </div>   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

             
<script>
    function printCharts(chartData) {
        var printWindow = window.open('', '_blank');
        printWindow.document.open();

        // Add styles for printing
        printWindow.document.write('<style>@media print {img {max-width: 100%; height: 260px;}}</style>');

        // Loop through each chart data
        chartData.forEach(function (chartInfo) {
            var chartId = chartInfo.id;
            var title = chartInfo.title;

            var canvas = document.getElementById(chartId);
            var dataURL = canvas.toDataURL(); // Get the data URL of the chart

            // Add a title for each chart
            printWindow.document.write('<h2 class="text-center mt-4 mb-3">' + title + '</h2>');

            // Add an image to the new window with the chart data URL
            printWindow.document.write('<img src="' + dataURL + '">');
            printWindow.document.write('<br>');
        });

        printWindow.document.close();

        // Wait for the content to load before triggering the print
        printWindow.onload = function () {
            printWindow.print();
            printWindow.onafterprint = function () {
                printWindow.close();
            };
        };
    }
</script>

               
  