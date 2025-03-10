<?php


include('resources/includes/db_conn.php');





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
        
                <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
 

 include('resources/includes/header.php');

?>
<!-- Navbar End-->

            <div id="heading" style="background-color: rgb(200, 211, 230)">
                <div class="container">
                    <div class="row d-flex align-items-center flex-wrap">
                      
						<div class="col-md-5 d-lg-block d-md-block d-none">
                            
                        </div>
                        <div class="heading text-blue mt-3">
                            <h1 style="text-align:center; color:blue">WELCOME ALUMNI!</h1>
                            <br><br>
                            <p style="font-size:40px">Avail your Alumnus ID! Fill the form below.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="heading" style="background-color: #fff">
                <div class="container">
                    <div class="row d-flex align-items-center flex-wrap">

                        <div class="heading text-blue mt-3">
                            
                            <br>
                            <i><p style="font-size: 15px; color: #000; font-weight: bold; line-height: 1.5;">
                                Note: Please be advised that the information and details you provide should be accurate and truthful. Any inaccuracies or false information may affect the quality and integrity of our records and services. Your cooperation in providing correct and up-to-date information is greatly appreciated. Thank you.
                            </p></i>
                        </div>
                    </div>
                </div>
            </div>
    


<br>
<div class="container text-center">
    <div class="card" style="width: 70rem;">
        <div class="card-header h4" style="background-color: #5b9aff; text-align:left">Fill Alumni ID Application Form</div>
        <div class="card-body bg-white">
        <div class="IdApp" style="align-content: left;">
    
               

        <!-- Modal -->
<div class="modal fade" id="yearModal" tabindex="-1" aria-labelledby="yearModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="yearModalLabel">You cannot access this form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            You are not registered yet. Register to access Alumni ID Application Form.
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary rectangular-button" data-bs-dismiss="modal" style="color: white;">I understand</button>
            </div>
        </div>
    </div>
</div>         
            <div class="personal">
                <p style="color: Red;">(*) Fields are Required</p>
                <table>
                    
                    <tr>
                    <td style="color: black; text-align: left;">Name <span style="color: red;">*</span></td>
                        <td> <input type="text" class="form-control" placeholder="" name="name" id="name"  data-bs-toggle="modal" data-bs-target="#yearModal" value="" style="border-radius: 20px; width: 700px" readonly>
                           
                       
                    </tr>
                    
                    <tr>
                  
                        <td>‎ </td>
                        <td>‎ </td>
                    </tr>
                  
                    <tr>
                    <td style="color: black;">Student Number <span style="color: red;">*</span></td>
                        <td> <input type="text" class="form-control" placeholder="" name="StudentNumber" id="StudentNumber" data-bs-toggle="modal" data-bs-target="#yearModal" value="" style="border-radius: 20px; width: 700px" readonly>
                           
                        
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
                    <td>  <button id="YearGraduated" name="YearGraduated"  data-bs-toggle="modal" data-bs-target="#yearModal" class="form-control form-control-sm mb-9" style="border-radius: 20px; width: 200px" readonly></select>
                      
                        
                        
                </tr>
                <tr>
                    <td>‎ </td>
                    <td>‎ </td>
                </tr>
             
                 
                  
            </table>

          <table>
                <tr>
                <td style="color: black;">Course <span style="color: red;">*</span></td>
                    <td>  <button style="margin-left: 68px;" onchange="course()" id="Course" name="Course"  data-bs-toggle="modal" data-bs-target="#yearModal" class="form-control form-control-sm mb-9
                    " readonly>

                        <option value=""></option>
                        
                      </select>
        </td>
                </tr>
            
            </table>

            <table>
                <tr>
                    <td>‎ </td>
                    <td>‎ </td>
                </tr>
             
                <!--<tr>-->
                <!--<td style="color: black;">Birthday <span style="color: red;">*</span></td>-->
                <!--    <td>   <button type="date" class="form-control"  data-bs-toggle="modal" data-bs-target="#yearModal" placeholder="" value=""  id="Birthday" name="Birthday"  style="border-radius: 20px; width: 170px" readonly>-->
                       
             
                <!--</tr>-->
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
       value="option1" data-bs-toggle="modal" data-bs-target="#yearModal" />
<label class="form-check-label" for="Single">Single </label>
                            </div>
                            <br>
        
                          
        
                            <div class="form-check form-check-inline mb-0">
                      

                            <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
       value="option2" data-bs-toggle="modal" data-bs-target="#yearModal" />
<label class="form-check-label" for="Married">Married</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
       value="option3" data-bs-toggle="modal" data-bs-target="#yearModal" />
<label class="form-check-label" for="Divorce">Divorce</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
       value="option4" data-bs-toggle="modal" data-bs-target="#yearModal" />
<label class="form-check-label" for="Seperated">Seperated</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline mb-0">
                   

                                <input class="form-check-input" type="radio" name="Civilstatus" id="Civilstatus"
       value="option5" data-bs-toggle="modal" data-bs-target="#yearModal" />
<label class="form-check-label" for="Widowed">Widowed</label>
                            </div>
                            <br>

                        </div>
                    </div>
                </div>
             
                        <table>
                            <tr>
                                <td style="color: black; text-align: left;">Religion <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" name="Religion" data-bs-toggle="modal" data-bs-target="#yearModal" id="Religion" value="" style="border-radius: 20px; width: 800px" readonly>
                                   
                                
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Current Address <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" name="CurrentAddress"  data-bs-toggle="modal" data-bs-target="#yearModal" id="CurrentAddress" value="" style="border-radius: 20px; width: 800px" readonly>
                                    
                                
                            </tr>
                            <td>‎</td>
                            <td>‎</td>

                            <tr>
                            <td style="color: black; text-align: left;">Permanent Address <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" data-bs-toggle="modal" data-bs-target="#yearModal" name="PermanentAddress" id="PermanentAddress" value="" style="border-radius: 20px; width: 800px" readonly>
                                  
                                
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Contact Number <span style="color: red;">*</span></td>
                                <td> <input type="text" class="form-control" placeholder="" data-bs-toggle="modal" data-bs-target="#yearModal" name="ContactNumber" id="ContactNumber" value="" style="border-radius: 20px; width: 800px" readonly>
                                    
                             
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Personal Email Address <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder="" data-bs-toggle="modal" data-bs-target="#yearModal" name="PersonalEmailAddress" id="PersonalEmailAddress" value="" style="border-radius: 20px; width: 800px" readonly>
                                   
                       
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Company Name <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder=""  data-bs-toggle="modal" data-bs-target="#yearModal" name="CompanyName" id="CompanyName" value="" style="border-radius: 20px; width: 800px" readonly>
                                  
                              
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Company Address <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder="" data-bs-toggle="modal" data-bs-target="#yearModal"  name="CompanyAddress" id="CompanyAddress" value="" style="border-radius: 20px; width: 800px" readonly>
                                    
                        
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>

                            <tr>
                            <td style="color: black; text-align: left;">Position in the company <span style="color: red;">*</span></td>
                            
                                <td> <input type="text" class="form-control" placeholder="" data-bs-toggle="modal" data-bs-target="#yearModal" name="Position" id="Position" value="" style="border-radius: 20px; width: 800px" readonly>
                                   
                      
                            </tr>
                            <td>‎ </td>
                            <td>‎ </td>
            
                        </table>
            
                         
        

            


                <label for="idpic" style="text-align:justify; color: black;"><b>PLEASE ATTACHED YOUR 2x2 ID PICTURE <span style="color: red;">*</span></b></label>
                <p><i>(Please upload picture with white background) </i></p>
                <input type="file" name="idpic" style="text-align:justify; color: black;"/>
                <br>


                <br>
                <label for="typecard" style="text-align:justify; color: black;"><b>Type of Card <span style="color: red;">*</span></b></label><br>
              
                    
                    <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                        <input class="form-check-input" type="radio" id="lifetime" name="typeofcard" value="Lifetime">
                        <label class="form-check-label" for="lifetime" name="typeofcard">Lifetime</label><br>
                    </div>
                    <br>
                    <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                        <input class="form-check-input" type="radio" id="renewable" name="typeofcard" value="Renewable">
                        <label class="form-check-label" for="renewable"  name="typeofcard">Renewable (Valid for 10 years)</label><br>
                    </div>
                    <br>
                    <div class="form-check form-check-inline mb-0 me-5" style="align-content:center; color: black;">
                        <input class="form-check-input" type="radio" id="reprinting" name="typeofcard" value="Reprinting">
                        <label class="form-check-label" for="reprinting"  name="typeofcard">Reprinting (for Lost and Damaged Card)</label><br><br>
                    </div>
                    <br>


                  
                 
                
                  <br>

                <label for="proof" style="text-align:justify; color: black; "><b>PLEASE ATTACHED PROOF OF PAYMENT <span style="color: red;">*</span></b></label>
                <input type="file" style="text-align:justify; color: black;"  data-bs-toggle="modal" data-bs-target="#yearModal" id="proofofpayment" name="proofofpayment" value="" />
                <br>


                <br>

                <label for="esig" style="text-align:justify; color: black;"><b>E-SIGNATURE <span style="color: red;">*</span></b></label>
                <input type="file" data-bs-toggle="modal" data-bs-target="#yearModal"  id="esignature" name="esignature" style="text-align:justify; color: black;"  value="" />
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
                            
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" style="color: white; background-color: #007BFF; border: none; border-radius: 5px; padding: 10px 20px;" data-bs-toggle="modal" data-bs-target="#yearModal">Submit</button>


                

                    
                   
                
                </div>

               
        </form>
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
        
   