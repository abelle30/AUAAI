<?php 
session_start();
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


if(isset($_GET['del']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM events WHERE id = '$id'");
    $_SESSION['delmsg'] = "Event with ID $id deleted!";
}
		  if(!empty($_GET['status'])){
			switch($_GET['status']){
				case 'succ':
					$statusType = 'alert-success';
					$statusMsg = 'Users data has been imported successfully.';
					break;
				case 'err':
					$statusType = 'alert-danger';
					$statusMsg = 'Some problem occurred, please try again.';
					break;
				case 'invalid_file':
					$statusType = 'alert-danger';
					$statusMsg = 'Please upload a valid CSV file.';
					break;
				default:
					$statusType = '';
					$statusMsg = '';
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


<link type="text/css" href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<link type="text/css" href="resources/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="resources/css/theme.css" rel="stylesheet">
	<link type="text/css" href="resources/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

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
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<meta name="description" content="This is an example dashboard created using build-in elements and components.">
<meta name="msapplication-tap-highlight" content="no">
<script type="text/javascript" src="resources/js/main.js" ></script>
<link rel="stylesheet" href="resources/css/main.css">
<link href="./main.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<div class="app-header header-shadow">
<div class="app-header__logo">
<div class="logo-src"><a href="admindashboard" <center> <img src="resources/images/dashboardadamson.png" class="nav-avatar2" /></i></span> </a></center> </div>
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
</div> <div class="app-header__content">
<div class="app-header-left">
<div >
<div >


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
<div class="widget-heading">

</div>
<div class="widget-subheading">

</div>
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
<div class="widget-subheading">Makes the header top fixed, always visible!
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
</div> <div class="app-main">
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

<a href="admindashboard.php" class="navlogo-item "><center> <img src="resources/images/adulogoadmin.png" class="nav-avatar" /></i></span> Dashboard</a></center> 
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
            <a href="#"> Alumni ID</a>
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
        <a href="#"> News & Announcements</a>
        <ul>
            <li><a href="add-news.php">Add News</a></li>
            <li><a href="add-announcements.php">Add Announcements</a></li>
            <li><a href="manage-news.php">News List</a></li>
            <li><a href="manageannouncements.php">Announcements List</a></li>

        </ul>
        </li>

        <li>
            <a href="#"> Programs and Events</a>
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
<li>


</li>
</ul>
</div>
</div>
</div> <div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div >
<div>
<div>

</i>
</div>

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                
                <h1 class="h2"><b>Alumni Tracer Records</b></h1>
            </div>
           
               
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
.flex-container {
    display: flex;
}

.flex-item {
    flex: 40%;
}

.flex-item2 {
    flex: 20%;
    text-align: center;
}

.flex-item:last-child {
    flex: 40%;
}

</style>
<div class="containe-fluid">
<div class="row mt-3 ml-3 mr-3">
<div class="col-lg-12">
<div class="card">
    <div class="card-body">
  
			<!-- FORM Panel -->

			<!-- Table Panel -->
            <div class="container">
    <div class="card-header">
        <h2 class="alumniList">Manage Alumni Tracer</h2>
    </div>
    <br>
    <h6><b>Year Graduated Range</b></h6><br>
    <form method="POST">
	<div class="row">
		
		<div class="col-lg-5">
		    <div class="flex-container">
		        <div class="flex-item">
		            <select id="year1" name="year1" class="form-control form-control-sm mb-9">
		                <option value="all">All Year</option>
		                <!-- Add more options as needed -->
		            </select>
		            <input type="checkbox" id="myCheckbox" name="myCheckbox">
		            <label for="myCheckbox">Filter by specific year</label>
		        </div>
		        <div class="flex-item2">
		            to
		        </div>
		        <div class="flex-item">
		            <select id="year2" name="year2" class="form-control form-control-sm mb-9">
		                <option value="all">All Year</option>
		                <!-- Add more options as needed -->
		            </select>
		        </div>
		    </div>
		</div>
		<div class="col-lg-2">
			<select id="course" name="course"  value="course" class="form-control">
                <option value="all">All Courses</option>
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
		</div>
		<div class="col-lg-3">
			<select id="emp_status" name="emp_status"  value="emp_status" class="form-control">
                <option value="all">All Employment Status</option>
                <option value="employed">Employed</option>
                <option value="selfemployed">Self-Employed</option>
                <option value="unemployed">Unemployed</option>
            </select> 
		</div>
		<div class="col-lg-2">
			<button type="submit" name="search" class="btn btn-success">FILTER DATA</button>
		</div>
		 <div class="row mt-3 ml-3 mr-3">
    <div class="col-lg-12">
        <div class="text-center">
            <button onclick="printTable()" class="btn btn-primary">Print Table</button>
        </div>
    </div>
</div>
	</div>
	</form>
	<br>
	        <?php

	        $filter_message = "";

        	include('resources/includes/model.php');

        	$model = new Model();
        	$rows1 = $model->dispalyAlumniData("employed");

        	if (isset($_POST['search'])) {
				if ($_POST['year1'] == "all" && $_POST['year2'] == "all" && $_POST['course'] == "all") {
					if ($_POST['emp_status'] == "all"){
						$emp1 = "employed";
						$semp1 = "selfemployed";
						$uemp1 = "unemployed";
						$filter_message = "ALL YEAR GRADUATED AND COURSE";
						$rows1 = $model->dispalyAlumniData();
					}
					else if ($_POST['emp_status'] == "employed"){
						$filter_message = "ALL YEAR GRADUATED AND COURSE<br>(EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataType("employed");
					}
					else if ($_POST['emp_status'] == "selfemployed"){
						$filter_message = "ALL YEAR GRADUATED AND COURSE<br>(SELF-EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataType("selfemployed");
					}
					else if ($_POST['emp_status'] == "unemployed"){
						$filter_message = "ALL YEAR GRADUATED AND COURSE<br>(UNEMPLOYED)";
						$rows1 = $model->dispalyAlumniDataType("unemployed");
					}
					else {
						$emp1 = "employed";
						$semp1 = "selfemployed";
						$uemp1 = "unemployed";
						$filter_message = "ALL YEAR GRADUATED AND COURSE";
						$rows1 = $model->dispalyAlumniData();
					}					
				}
				else if ($_POST['year1'] == "all" && $_POST['year2'] != "all") {
					$rows1 = $model->dispalyAlumniData();
        			echo "<script>alert('Invalid Year Graduated Range!');</script>";
				}

				else if ($_POST['year1'] != "all" && $_POST['year2'] == "all") {
					$rows1 = $model->dispalyAlumniData();
        			echo "<script>alert('Invalid Year Graduated Range!');</script>";
				}
				else if ($_POST['year1'] != "all" && $_POST['year2'] != "all" && $_POST['course'] != "all") {
					if ($_POST['emp_status'] == "all"){
						$filter_message = "".$_POST['course']." ".$_POST['year1']." to ".$_POST['year2']."";
						$rows1 = $model->dispalyAlumniDataAllFilter($_POST['course'], $_POST['year1'], $_POST['year2']);
					}
					else if ($_POST['emp_status'] == "employed"){
						$filter_message = "".$_POST['course']." ".$_POST['year1']." to ".$_POST['year2']."<BR>(EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllFilterType($_POST['course'], $_POST['year1'], $_POST['year2'], "employed");
					}
					else if ($_POST['emp_status'] == "selfemployed"){
						$filter_message = "".$_POST['course']." ".$_POST['year1']." to ".$_POST['year2']."<BR>(SELF-EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllFilterType($_POST['course'], $_POST['year1'], $_POST['year2'], "selfemployed");
					}
					else if ($_POST['emp_status'] == "unemployed"){
						$filter_message = "".$_POST['course']." ".$_POST['year1']." to ".$_POST['year2']."<BR>(UNEMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllFilterType($_POST['course'], $_POST['year1'], $_POST['year2'], "unemployed");
					}
					else {
						$filter_message = "".$_POST['course']." ".$_POST['year1']." to ".$_POST['year2']."";
						$rows1 = $model->dispalyAlumniDataAllFilter($_POST['course'], $_POST['year1'], $_POST['year2']);
					}
				}
				else if ($_POST['year1'] != "all" && $_POST['year2'] != "all" && $_POST['course'] == "all") {

					if ($_POST['emp_status'] == "all"){
						$filter_message = "ALL COURSE ".$_POST['year1']." to ".$_POST['year2']."";
						$rows1 = $model->dispalyAlumniDataAllCourseFilter($_POST['year1'], $_POST['year2']);
					}
					else if ($_POST['emp_status'] == "employed"){
						$filter_message = "ALL COURSE ".$_POST['year1']." to ".$_POST['year2']."<BR>(EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllCourseFilterType($_POST['year1'], $_POST['year2'], "employed");
					}
					else if ($_POST['emp_status'] == "selfemployed"){
						$filter_message = "ALL COURSE ".$_POST['year1']." to ".$_POST['year2']."<BR>(SELF-EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllCourseFilterType($_POST['year1'], $_POST['year2'], "selfemployed");
					}
					else if ($_POST['emp_status'] == "unemployed"){
						$filter_message = "ALL COURSE ".$_POST['year1']." to ".$_POST['year2']."<BR>(UNEMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllCourseFilterType($_POST['year1'], $_POST['year2'], "unemployed");
					}
					else {
						$filter_message = "ALL COURSE ".$_POST['year1']." to ".$_POST['year2']."";
						$rows1 = $model->dispalyAlumniDataAllCourseFilter($_POST['year1'], $_POST['year2']);
					}
				}
				else if ($_POST['year1'] == "all" && $_POST['year2'] == "all" && $_POST['course'] != "all") {
					if ($_POST['emp_status'] == "all"){
						$filter_message = "".$_POST['course']."";
						$rows1 = $model->dispalyAlumniDataAllYearFilter($_POST['course']);
					}
					else if ($_POST['emp_status'] == "employed"){
						$filter_message = "".$_POST['course']."<BR>(EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllYearFilterType($_POST['course'], "employed");
					}
					else if ($_POST['emp_status'] == "selfemployed"){
						$filter_message = "".$_POST['course']."<BR>(SELF-EMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllYearFilterType($_POST['course'], "selfemployed");
					}
					else if ($_POST['emp_status'] == "unemployed"){
						$filter_message = "".$_POST['course']."<BR>(UNEMPLOYED)";
						$rows1 = $model->dispalyAlumniDataAllYearFilterType($_POST['course'], "unemployed");
					}
					else {
						$emp4 = "employed";
						$semp4 = "selfemployed";
						$uemp4 = "unemployed";
						$filter_message = "".$_POST['course']."";
						$rows1 = $model->dispalyAlumniDataAllYearFilter($_POST['course']);
					}	
				}
			}
		?>

	<center><h4><b><?php echo $filter_message; ?></b></h4></center>
    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Mobile Number</th>
                <th class="text-center">Year Graduated</th>
                <th class="text-center">Course</th>
                <th class="text-center">Employment Status</th>
                <th class="text-center">Approximate Salary</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        	if (!empty($rows1)) {
				foreach ($rows1 as $row) {
        ?>
        <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['mobileno']; ?></td>
            <td><?php echo $row['year']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo empty($row['emp_status']) ? "-----" : $row['emp_status']; ?></td>
            <?php
            if ($row['emp_status'] == 'employed') {
            ?>
            <td><?php echo empty($row['monthly_salary']) ? "-----" : $row['monthly_salary']; ?></td>
            <?php
            }
            else if ($row['emp_status'] == 'selfemployed') {
            ?>
            <td><?php echo empty($row['business_approx_salary']) ? "-----" : $row['business_approx_salary']; ?></td>
            <?php
            }
            else {
            ?>
            <td>-----</td>
            <?php
            }
            ?>
            <td>
                <a title="View Details" href="view-user-records.php?id=<?php echo $row['user_id']; ?>">View</a>
            </td>
        </tr>
        <?php
        }
    }
        ?>
    </table>

    <hr>


</div>

 <!--for printing the page -->
   
    <input type="hidden" id="filterMessage" name="filterMessage" value="<?php echo $filter_message; ?>">
   <script>
    document.getElementById("printButton").addEventListener("click", function() {
        printTable();
    });

    function printTable() {
        var printWindow = window.open('', '_blank');
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Print</title>');

        // Copy the linked stylesheets from the current page to the print window
        var stylesheets = document.querySelectorAll('link[rel="stylesheet"]');
        stylesheets.forEach(function(stylesheet) {
            printWindow.document.write(stylesheet.outerHTML);
        });

        // Copy the embedded styles from the current page to the print window
        var styleTags = document.querySelectorAll('style');
        styleTags.forEach(function(styleTag) {
            printWindow.document.write(styleTag.outerHTML);
        });

        printWindow.document.write('</head><body>');
        
        // Retrieve the filter message from the hidden input
        var filterMessage = document.getElementById("filterMessage").value;
        printWindow.document.write('<h4>' + filterMessage + '</h4>');
        
        printWindow.document.write('<h2>' + document.querySelector('.alumniList').textContent + '</h2>');

        // Copy the HTML content of the table from the current page to the print window
        var tableHTML = document.querySelector('.datatable-1').outerHTML;
        printWindow.document.write(tableHTML);

        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>

<script>
		    const checkbox = document.getElementById("myCheckbox");
		    const year1Select = document.getElementById("year1");
		    const year2Select = document.getElementById("year2");

		    checkbox.addEventListener("change", function () {
		        if (checkbox.checked) {
		            year2Select.value = year1Select.value;
		        }
		    });

		    year2Select.addEventListener("change", function () {
		        checkbox.checked = false;
		    });
		</script>
	<script>
                // get current year
                var currentYear = new Date().getFullYear();
            
                // set options for year picker
                var minYear = currentYear - 100; // set minimum year to 50 years ago
                var maxYear = currentYear; // set maximum year to 10 years in the future
                var yearPicker = document.getElementById("year1");
                for (var year = maxYear; year >= minYear; year--) {
                    var option = document.createElement("option");
                    option.text = year;
                    yearPicker.add(option);
                }
            </script>


            <script>
                // get current year
                var currentYear = new Date().getFullYear();
            
                // set options for year picker
                var minYear = currentYear - 100; // set minimum year to 50 years ago
                var maxYear = currentYear; // set maximum year to 10 years in the future
                var yearPicker = document.getElementById("year2");
                for (var year = maxYear; year >= minYear; year--) {
                    var option = document.createElement("option");
                    option.text = year;
                    yearPicker.add(option);
                }
            </script>
	
</body>
<link type="text/css" href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="resources/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="resources/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="resources/scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="resources/scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
<?php  ?>
<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>
 

    <!-- Import & Export link -->

   
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>	

        <?php if(isset($_GET['del']))
{?>
									
									
<?php } ?>



</div>
                    

                    <!DOCTYPE HTML>
<html>
<head>  

</head>
<body>

</body>
</html>





                    
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


</a>
</li>
</ul>
</div>
</div>
</div>
</div> </div>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
<script>
    function deleteUser(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('alumni-edit-action-'+id).submit();
        }
    }
</script>




