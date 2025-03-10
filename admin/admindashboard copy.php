<!doctype html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
     <!-- Favicon-->
     <?php
 include('resources/includes/db_conn.php'); 


 ?>

 
<?php session_start();?>
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

    </style>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<div class="app-header header-shadow">
<div class="app-header__logo">
    <div class="logo-src"><center> <img src="resources/images/dashboardadamson.png" class="nav-avatar2" /></i></span> </a></center> </div>
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
        <a href="javascript:void(0);" class="nav-link">
            <center>
                <a class="navlogo-item "><img src="resources/images/auaai-logo.png" class="nav-avatar"/>
            Adamson University Alumni Association Inc.</a>
            </center> 

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
            </li>

            <li>
                <a href="managealumnitracker.php">Manage Tracker</a>
            </li>


            <li>
            <a href="manageannouncements.php">Manage News and Announcements</a>
            <ul>
                <li><a href="manage-news.php">News</a></li>
                <li><a href="manageannouncements.php">announcements.php</a></li>

            </ul>
            </li>

            <li>
                <a href="manageprograms">Manage Programs and Events</a>
                    <ul>
                        <li><a href="manage-events.php">Events</a></li>
                        <li><a href="manageeventsarchive.php">Events Archive</a></li>
                        <li><a href="manage-events.php">Mentorships </a></li>
                        <li><a href="manage-donations.php">Donations</a></li>
                    </ul>
            </li>

            <li>
                <a href="manage-careers.php">Manage Career</a>
            </li>

            <li>
                <a href="userloginlog.php">User Login Log</a>
            </li>

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
                                    <div class="card">
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
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Employed</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                </b></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Underemployed</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                </b></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Self-employed</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
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

                                <div class="col-md-3">
                                    <div class="card">
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

                                    <div class="col-md-3">
                                    <div class="card">
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

                                    <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body bg-primary2">
                                            <div class="card-body text-black">
                                                <p><b>Events</b></p>
                                                <span class="float-right summary_icon"><i class="fa fa-graduation-cap"></i></span>
                                                <h4><b>
                                                <?php echo $conn->query("SELECT * FROM events")->num_rows; ?>
                                                </b></h4>
                                            
                                            </div>
                                        </div>
                                    </div>
                           
                                </div>


                                

                                <div class="col-md-3">
                                    <div class="card">
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
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>Analytics
                            </div>
                            <ul class="nav">
                              
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                           

                                

                                  </div>
                                        </div>
                                    </div>   
                                </div>
                                <div id="bar-chart"></div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>

                

                <div class="row">
    <div class="col-md-20 col-lg-20 offset-md-3 offset-lg-3">
        <div class="mb-3 card">
            <div class="card-header-tab card-header-tab-animation card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>Analytics
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-eg-23">
                        <div class="card mb-9 widget-chart widget-chart2 text-left w-100">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                               
                                                <?php
// Assuming you have established a database connection using $conn

// Create an SQL query to retrieve donation data from your database

// Assuming you have established a database connection using $conn

// Create an SQL query to retrieve donation data from alumni users with cash or goods donation types
$sql = "SELECT d.id, d.fname, d.lname, d.donationtype, d.usertype
        FROM donations d
        WHERE d.usertype = 'alumni' AND d.donationtype IN ('cash', 'goods')";

$result = mysqli_query($conn, $sql);

$dataPoints = array();

while ($row = mysqli_fetch_array($result)) {
    $donationType = $row['donationtype'];
    $dataPoints[] = array("label" => $donationType, "y" => 1); // Placeholder value for the pie chart
}

?>

<script>
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            title: {
                text: "Donations by Alumni"
            },
            subtitles: [{
                text: "Donation Types"
            }],
            data: [{
                type: "pie",
                indexLabel: "{y}",
                indexLabelPlacement: "inside",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "#percent%",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });

        chart.render();
    }
</script>

<!-- HTML container for the chart -->
<div id="chartContainer" style="height: 329px; width: 277px;"></div>

<!-- Include the CanvasJS library -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</script>




</script>
                                            </div>

                                        </div>
                                    </div>   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

             



                <div class="app-footer__inner">
                    <div class="app-footer-left">
                        <ul class="nav">
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>



    <?php
// Assuming you have established a database connection using $conn

// Define an array to group and shorten the course names
$courseGroups = [
    "Engineering" => [
        "Bachelor of Science in Chemical Engineering",
        "Bachelor of Science in Chemical Process Technology",
        "Bachelor of Science in Civil Engineering",
        "Bachelor of Science in Computer Engineering",
        "Bachelor of Science in Electrical Engineering",
        "Bachelor of Science in Electronics Engineering",
        "Bachelor of Science in Industrial Engineering",
        "Bachelor of Science in Mechanical Engineering",
        "Bachelor of Science in Mining Engineering",
        "Bachelor of Science in Geology",
        "Dual Degree of B.S. Mechanical Engineering major in Mechatronics",
        "Bachelor of Science in Petroleum Engineering",
    ],
    "Science" => [
        "Bachelor of Science in Biology",
        "Bachelor of Science in Chemistry",
        "Bachelor of Science in Computer Science",
        "Bachelor of Science in Information System",
        "Bachelor of Science in Information Technology",
        "Bachelor of Science in Psychology",
    ],
    "Architecture" => [
        'Bachelor of Science in Architecture',
    ],
    "BusinessAdministration" => [
        "Bachelor of Science in Accountancy", 
        "Bachelor of Science in Business Administration Major in Financial Management", 
        "Bachelor of Science in Business Administration Major in Marketing Management",
        "Bachelor of Science in Business Administration Major in Operations Management", 
        "Bachelor of Science in Customs Administration",
        "Bachelor of Science in Hospitality Management",
    ],
    "Law" => [
        "Juris Doctor",
    ],
    "Nursing" => [
        "Bachelor of Science in Nursing",
    ],
    "Pharmacy" => [
        "Bachelor of Science in Pharmacy",
    ],
];

// Create an SQL query using prepared statements
$query = "SELECT course, COUNT(*) as count FROM users WHERE course IN (";

// Create placeholders for the prepared statement
$placeholders = [];
$values = [];

foreach ($courseGroups as $group => $courses) {
    $placeholders[] = implode(',', array_fill(0, count($courses), '?'));
    $values = array_merge($values, $courses);
}

$query .= implode(' OR ', $placeholders);
$query .= ") GROUP BY course";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    // Bind the values to the prepared statement
    $types = str_repeat('s', count($values)); // Using 's' for all placeholders
    mysqli_stmt_bind_param($stmt, $types, ...$values);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Fetch results
    $result = mysqli_stmt_get_result($stmt);

    $dataPoints = []; // Initialize the dataPoints array

    while ($row = mysqli_fetch_assoc($result)) {
        // Access the values from the database row
        $course = $row['course'];
        $count = $row['count'];

        foreach ($courseGroups as $group => $courses) {
            if (in_array($course, $courses)) {
                $courseGroup = $group;
                break;
            }
        }

        $dataPoints[] = array("label" => $courseGroups, "y" => $count);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
// Data from PHP
var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;

var barChartOptions = {
    series: [{
        data: dataPoints
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false
        },
    },
    colors: [
        "#246dec",
        "#cc3c43",
        "#367952",
        "#f5b74f",
        "#4f35a1"
    ],
    plotOptions: {
        bar: {
            distributed: true,
            borderRadius: 4,
            horizontal: false,
            columnWidth: '40%',
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: <?php echo json_encode(array_keys($courseGroups)); ?>,
    },
    yaxis: {
        title: {
            text: "Count"
        }
    }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();
</script>