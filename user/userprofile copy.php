<!DOCTYPE html>
<?php

session_start();
include('resources/includes/db_conn.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location: /auaailatest/AUAAI/AUAAI/login.php');
}
?>
 
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!--fonts-->   
 
<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'> 

 
<!--title = the text that shows up on the browser tab-->
 
<title>Info</title>
 
 
 
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

 
<div class="rectangle1">
 
    <div class="image"><img src="http://localhost/auaailatest/AUAAI/AUAAI/user/resources/images/user1.png"/></div>
 
    <div class="icon"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div>
 
    <div class="rectangle1-text">
    <?php
$query=mysqli_query($conn,"select * from users where email='".$_SESSION['email']."'");
while($row=mysqli_fetch_array($query))
{
?>

 
  <center><b> ‎‎ ‎ ‎‎ ‎ ‎‎ ‎ <?php echo htmlentities($_SESSION['fname']);?>      <?php echo htmlentities($_SESSION['mname']);?>      <?php echo htmlentities($_SESSION['lname']);?></b> </center>
 
        
    </div>
 
  
</div>
 
 
 
<div class="rectangle2">
<h1> OVERVIEW</h1> <br><br>
    <div class="rectangle2-text">

 
  
<b>Name</b><br>
<b>Email</b> <br>
<b>Year Graduated</b><br>
<b>Registration Type</b><br>
<b>Course</b><br>
<b>Home Address</b><br>
<b>Mobile Number</b><br>
 

</div>

</div>
</div>

<div class="rectangle6">

    <div class="rectangle6-text">

 
  
    <?php echo htmlentities($_SESSION['fname']);?>      <?php echo htmlentities($_SESSION['mname']);?>      <?php echo htmlentities($_SESSION['lname']);?><br>
<?php echo $row['email'];?><br>
<?php echo htmlentities($_SESSION['year']);?><br>
???<br>
<?php echo htmlentities($_SESSION['course']);?><br>
<?php echo htmlentities($_SESSION['lot']);?> <?php echo htmlentities($_SESSION['street']);?> <?php echo htmlentities($_SESSION['city']);?> <?php echo htmlentities($_SESSION['state']);?><br>
<?php echo htmlentities($_SESSION['mobileno']);?><br>
 

</div>

</div>
</div>

<div class="rectangle7">

    <div class="rectangle7-text">
    <h1> EMPLOYMENT RECORD</h1>

<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Category</th>
                                                                <th>Sub Category</th>
                                                                <th>Description</th>
                                                          
                                                                <th>Posting Date</th>
                                                                  <th>Last updation Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
</div>
</div>


<?php } ?>
<div class="rectangle3">

‎‎ ‎  ‎ ‎  ‎  ‎   ‎‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎   <h1>profile</h1>‎  ‎  ‎  ‎  ‎  ‎  

    <center>  <div class="image2"><img src="http://localhost/auaailatest/AUAAI/AUAAI/user/resources/images/user-edit.png"/></div>
    <div class="rectangle3-text">
 <div class="icon2"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div></center>
 <center>Keep your personal information up-to-date<p> </center>
 <br>

 

<center><a href="UPDATE PROFILE" style="color: blue;">UPDATE PROFILE ></a></center>
 
</div>

<div class="rectangle4">

‎‎ ‎    ‎‎  ‎  ‎  ‎  ‎  ‎  ‎  <h1>password</h1>‎  ‎  ‎  ‎  ‎  ‎  

    <center>  <div class="image2"><img src="http://localhost/auaailatest/AUAAI/AUAAI/user/resources/images/key2.png"/></div>
    <div class="rectangle3-text">
 <div class="icon2"><h1><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1></div></center>
 <center>Make your password stronger, or change it if someone else knows it.<p> </center>

 <center><a href="UPDATE PROFILE" style="color: blue;">CHANGE PASSWORD ></a></center>
 
    
 
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

 
 
</body>