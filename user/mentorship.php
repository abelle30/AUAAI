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

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUAAI | Mentorship</title>

    <link rel="stylesheet" href="resources/vendors/bootstrap-4.6.0/css/bootstrap.min.css"/>
<!--Font Awesome CSS-->
<link rel="stylesheet" href="resources/vendors/font-awesome/css/all.min.css"/>
<!-- Bootstrap Select-->
<link rel="stylesheet" href="resources/css/custom.css">

<link rel="stylesheet" href="resources/css/css.css">
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

.card-title {
    margin-bottom: 0.75rem;
    color: #000;
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
	  color: color-yiq(#6c757d);
	  background-color: #6c757d;
	  border-color: #666e76;
  }
  
  .btn-success:hover {
	  color: color-yiq(#6c757d);
	  background-color: #6c757d;
	  border-color: #666e76;
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
	  color: #022849;
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
  
    background-image: url(resources/images/headerback.PNG);
    /* justify-content: space-between; */
    padding: 0.5rem 1rem;
}

.home-slides {
    background: url(resources/images/adamsonback.png)center center no-repeat;
    background-size: cover;
    /* background-attachment: fixed; */
    height: calc(100vh -200px);
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


.card-header{
	color: white;
	background-color: #0096FF;	
}
.btn-secondary{
	background-color: #5F9EA0;
}
.card-title{
    font-family: Tahoma, sans-serif;
    font-weight: bold;
	font-size: 25px;
	padding-top: 20px;
}

h1 {
	font-family: "Gill Sans", sans-serif;
	font-weight: bold;
    color: #0096FF;
    font-size: 34px;
    margin-bottom: 10px;
	text-align: center;
	margin-top: 50px;
}

hr {
    border: none;
    border-top: 7px solid #0096FF;
    width: 80px;
    margin-bottom: 60px;
	margin-top: 20px;
}

img.card-img-top{
	display: flex;
	max-width: 350px; 
	max-height: 500px; 
    height: auto;
	margin-top: 25px;
	margin-left: 45px;
	margin-bottom: 25px;
}

.mb-1, .my-1 {
    margin-bottom: 4rem!important;
}

ul.pagination {
	justify-content-center: center;
}
.custom-card {
    
        background-image: url(resources/images/bgmentorshipcard.png);
        background-size: cover; /* Adjust as needed */
        background-repeat: no-repeat;
        background-position: center;
        /* You can also set a background color as a fallback */
        background-color: #e3e3e3;
    
 
    }
  

</style>

  <body>
   <?php include('resources/includes/navbaruser.php');?>
</div>
	<h1>MENTORSHIP</h1>
        <hr>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">
	  


        <!-- Blog Entries Column -->


          <!-- Blog Post -->
		  

<div class="row">
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM mentorship";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


        $query = mysqli_query($conn, "SELECT mentorship.id as pid, mentorship.PostTitle as posttitle, mentorship.PostImage, mentorship.description as description, mentorship.date as date FROM mentorship ORDER BY mentorship.id DESC LIMIT $offset, $no_of_records_per_page");

while ($row=mysqli_fetch_array($query)) {
?>
			
				
<div class=" mb-1 border-2 custom-card">
    <div class="row no-gutters custom-card">
        <div class="col-md-5 custom-card">
            <img class="card-img-top" src="/admin/resources/images/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
        </div>
        <div class="col-md-7"> <!-- Adjusted column size -->
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlentities($row['posttitle']);?></h5>
                <p class="card-text"><?php 
                    $pt = $row['description'];
                    echo (substr($pt, 0));
                ?></p>
            </div>
           
        </div>
    </div>
</div>
						
<?php } ?>
<br>
</div>
</div>
</div></div>        <!-- Pagination -->


    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('resources/includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
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