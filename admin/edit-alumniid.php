<?php 
include('resources/includes/db_conn.php'); 
session_start();
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

   
if(isset($_GET['del']))
		  {
		          mysqli_query($conn,"delete from users where userid = '".$_GET['userid']."'");
                  $_SESSION['delmsg']="user deleted !!";
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

       $pid = intval($_GET['id']);
		if(isset($_POST['submit']))
{
	$PostTitle=$_POST['PostTitle'];
	$description=$_POST['description'];
	$catid=$_POST['category'];
    $subcatid=$_POST['SubCategoryId'];
	$PostImage=$_POST['PostImage'];
    $Location=$_POST['Location'];
 
	
   
	
	$query=mysqli_query($conn,"select * from alumniid where id='$pid'");
	$result=mysqli_fetch_row($query);
	

$sql=mysqli_query($conn,"UPDATE alumniid SET 
PostTitle = '$PostTitle',
description = '$description',
CategoryId = '$catid',
SubCategoryId = '$subcatid',
PostImage = '$PostImage',
Location = '$Location'
WHERE id = '$pid'");


}
 $_SESSION['msg'] = "Alumni ID updated!";
?>





<!doctype html>
<html lang="en">
<head>
    <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
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
<link href="summernote.css" rel="stylesheet" />
<script src="summernote.min.js"></script>

<script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="switchery.min.js"></script>

        <!--Summernote js-->
        <script src="summernote.min.js"></script>

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
<a href="javascript:void(0);" class="nav-link">
    <a href="admindashboard" class="navlogo-item "><center> <img src="resources/images/auaai-logo.png" class="nav-avatar" /></i></span>Adamson University Alumni Association Inc.</a></center> 

</a>
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
            <li><a href="add-alumni.php">Add alumni</a></li>
            <li><a href="alumnicolleges.php">Alumni list</a></li>
           
            <li><a href="verifylist.php">Verify list</a></li>
            </ul>
        </li>

        <li>
            <a href="managealumniid.php">Manage Alumni ID</a>
            <ul>
            <!--<li><a href="add-alumiinid.php">Add Alumni ID</a></li>-->
            <li><a href="managealumniid.php">Alumni ID list</a></li>
            <li><a href="idlist-alumniid.php">Complete Alumni ID</a></li>
            </ul>
        </li>

        <li>
            <a href="managealumnitracker.php">Manage Tracer</a>
            <ul>
            <!--<a href="add-alumnitracer.php">Add Tracker</a>-->
            <a href="managealumnitracer.php">Tracer List</a>
</ul>
        </li>


        <li>
        <a href="manageannouncements.php">Manage News and Announcements</a>
        <ul>
            <li><a href="add-news.php">Add News</a></li>
            <li><a href="add-announcements.php">Add Announcements</a></li>
            <li><a href="manage-news.php">News list</a></li>
            <li><a href="manageannouncements.php">Announcements list</a></li>

        </ul>
        </li>

        <li>
            <a href="manageprograms">Manage Programs and Events</a>
                <ul>

                <li><a href="add-event.php">Add Event</a></li>
                <li><a href="add-event-category.php">Add Event Category</a></li>
                <li><a href="add-eventsarchives.php">Add Event Archive</a></li>
                <li><a href="add-event-arch-category.php">Add Event Archive Category</a></li>
                <li><a href="add-mentorship.php">Add Mentorship</a></li>

                    <li><a href="manage-events.php">Events list</a></li>
                    <li><a href="manageeventsarchive.php">Events Archive list</a></li>
                    <li><a href="manage-mentorship.php">Mentorships list</a></li>

                </ul>
        </li>

        <li>
            <a href="manage-careers.php">Manage Career</a>
            <ul>
            <a href="add-career.php">Add a career</a>
            <a href="manage-careers.php">Career List</a>
           
</ul>
        </li>

        <li>
            <a href="manage-donations.php">Manage Donations</a>
            <ul>
            <a href="add-donation.php">Add a donation</a>
            <a href="manage-donation.php">Donation List</a>
</ul>
        </li>

        <li>
            <a href="userloginlog.php">User Login Log</a>
        </li>


    
    <li>
    <a href="userloginlog.php">Comments List</a>
            <ul>
            <a href="commentslist.php">Comments List</a>
        

            </ul>
         
        </li>


</div>
</div>
</div> 
        <div class="app-main__outer">
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
                
                <h1 class="h2"><b>Edit Alumni ID</b></h1>
            </div>
           
               
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="containe-fluid">
<div class="row mt-3 ml-3 mr-3">
<div class="col-lg-12">
<div class="card">
    <div class="card-body">
	
  
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="container">
			
					<div class="card-header">
						<h2 class="alumniList">  </h2>
					</div>

					
					<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
									<br />
                                    


                                    
                                    <?php
                  $query = mysqli_query($conn, "SELECT * from alumniid
                  WHERE alumniid.id = '$pid'");
   
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>

<form class="form-horizontal row-fluid" name="editpost" method="post" enctype="multipart/form-data">

									
			<div class="form-group col-md-3">
                    <label for="firstname"><b>Name</b></label>
                    <input type="name" class="form-control2" id="name" name="name"  value="<?php echo htmlentities($row['name']);?>" required>
                </div>


                <div class="form-group col-md-3">
                    <label for="lastname"><b>Student Number</b></label>
                    <input type="StudentNumber" class="form-control2" id="StudentNumber" name="StudentNumber" value="<?php echo htmlentities($row['StudentNumber']);?>" required>
                </div>
                <div class="form-group col-md-3">
                <td style="color: black;">Month Graduated</td>
                    <td> <select name="MonthGraduated" id="MonthGraduated" style="border-radius: 20px; width: 200px">
                    <option value="<?php echo htmlentities($row['MonthGraduated']);?>"><?php echo htmlentities($row['MonthGraduated']);?></option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                      </select>
        </td>
        </div>

        <div class="form-group col-md-3">
        <td><label class="YearGraduated" style="color: black;">Year Graduated</label></td>
                    <td>  <select id="YearGraduated" name="YearGraduated" class="form-control form-control-sm mb-9" style="border-radius: 20px; width: 200px"><?php echo htmlentities($row['YearGraduated']);?></select>
                    </div>


                    <div class="form-group col-md-3">
                    <label class="Course" style="color: black;">Course</label></td>
                    <td>  <select onchange="course()" id="Course" name="Course" class="form-control form-control-sm mb-3
                        ">

                        <option value="<?php echo htmlentities($row['Course']);?>"><?php echo htmlentities($row['Course']);?></option>
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

<div class="form-group col-md-3">
<td><label class="YearGraduated" style="color: black;">Birthday</label></td>
<input type="date" class="form-control" placeholder="" value="<?php echo htmlentities($row['Birthday']);?>"  id="Birthday" name="Birthday"  style="border-radius: 20px; width: 170px">

</div>

<div class="form-group col-md-3">
<td style="color: black;">Civil status</td>
    
        
            <div class="d-md-flex justify-content-start align-items-left mb-4 py-2">
             
               <div class="col-md-10" style="text-align: left">
                <div class="form-check form-check-inline mb-0 me-5" style="align-content:center">
                    
                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                    value="Single" />
                <label class="form-check-label" for="Single" name="Civilstatus">Single</label>
                </div>
                <br>

              

                <div class="form-check form-check-inline mb-0">
                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                    value="Married" />
                <label class="form-check-label" for="Married" name="Civilstatus">Married</label>
                </div>
                <br>
                <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                        value="Divorce" />
                    <label class="form-check-label" for="Divorce" name="Civilstatus">Divorce</label>
                </div>
                <br>
                <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                        value="Seperated" />
                    <label class="form-check-label" for="Seperated" name="Civilstatus">Seperated</label>
                </div>
                <br>
                <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
                        value="Widowed" />
                    <label class="form-check-label" for="Widowed" name="Civilstatus">Widowed</label>
                </div>
         
               

                <div class="form-group col-md-3">
                    <label for="firstname"><b>Religion</b></label>
                    <input type="Religion" class="form-control2" id="Religion" name="Religion"  value="<?php echo htmlentities($row['Religion']);?>" required>
                </div>

                
                <div class="form-group col-md-3">
                    <label for="firstname"><b>Current Address</b></label>
                    <input type="CurrentAddress" class="form-control2" id="CurrentAddress" name="CurrentAddress"  value="<?php echo htmlentities($row['CurrentAddress']);?>" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="firstname"><b>Permanent Address</b></label>
                    <input type="PermanentAddress" class="form-control2" id="PermanentAddress" name="PermanentAddress"  value="<?php echo htmlentities($row['PermanentAddress']);?>" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="firstname"><b>Contact Number</b></label>
                    <input type="ContactNumber" class="form-control2" id="ContactNumber" name="ContactNumber"  value="<?php echo htmlentities($row['ContactNumber']);?>" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="firstname"><b>Personal Email Address</b></label>
                    <input type="PersonalEmailAddress" class="form-control2" id="PersonalEmailAddress" name="PersonalEmailAddress"  value="<?php echo htmlentities($row['PersonalEmailAddress']);?>" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="firstname"><b>Company Name</b></label>
                    <input type="CompanyName" class="form-control2" id="CompanyName" name="CompanyName"  value="<?php echo htmlentities($row['CompanyName']);?>" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="firstname"><b>Company Address</b></label>
                    <input type="CompanyAddress" class="form-control2" id="CompanyAddress" name="CompanyAddress"  value="<?php echo htmlentities($row['CompanyAddress']);?>" required>
                </div>


                <div class="form-group col-md-3">
                    <label for="firstname"><b>Position in the company</b></label>
                    <input type="Position" class="form-control2" id="Position" name="Position"  value="<?php echo htmlentities($row['Position']);?>" required>
                </div>

              

                <label for="typecard" style="text-align:justify; color: black;"><b>Type of Card*</b></label>
              
              <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                  <input class="form-check-input" type="radio" id="typeofcard" name="typeofcard" value="Lifetime">
                  <label class="form-check-label" for="Lifetime" name="typeofcard">Lifetime</label><br>
              </div>
              <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                  <input class="form-check-input" type="radio" id="typeofcard" name="typeofcard" value="typeofcard">
                  <label class="form-check-label" for="Renewable"  name="typeofcard">Renewable (Valid for 10 years)</label><br>
              </div>
              <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                  <input class="form-check-input" type="radio" id="typeofcard" name="typeofcard" value="Reprinting">
                  <label class="form-check-label" for="Reprinting"  name="typeofcard">Reprinting (for Lost and Damaged Card)</label><br><br>
              </div>


              <div class="form-group col-md-3">
<td><label class="YearGraduated" style="color: black;">ID pic</label></td>
<input type="file" name="idpic" id="idpic" value="idpic" value="<?php echo htmlentities($row['idpic']);?>"/>  
</div>		

<div class="form-group col-md-3">
<td><label class="YearGraduated" style="color: black;">Proof of payment</label></td>
<input type="file" name="proofofpayment" id="proofofpayment" value="<?php echo htmlentities($row['proofofpayment']);?>" />  
</div>		

<div class="form-group col-md-3">
<td><label class="esignature" style="color: black;">E signature</label></td>

<input type="file" name="esignature" id="esignature" value="<?php echo htmlentities($row['esignature']);?>"/>  
</div>	

</div>	</div>	</div>	

          
                <center>
             <div class="container">
    <div class="row">
        <div class="col-md-6">
            <form id="myForm">
                <!-- Your form elements go here -->

                <!-- Horizontal row for buttons -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-danger btn-block" onclick="cancelForm()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function cancelForm() {
        window.location.href = 'https://auaaiconnect.online/admin/manage-news.php';
    }

    // Optional: Add an event listener for the form submission
    document.getElementById('myForm').addEventListener('submit', function (event) {
        // Prevent the default form submission
        event.preventDefault();
        // Handle your form submission logic here if needed
    });
</script>

<?php } ?>
</div><!--/.wrapper-->




						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


	
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

 

   
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>	

        


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



<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="switchery.min.js"></script>
    <link rel="stylesheet" href="switchery.min.css">
    
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


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

			<style>
				.form-control-sm{
					height: calc(1.8125rem + 2px);
    padding: 0.25rem 0.5rem;
	width:400px;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
				}



			</style>
            <style>