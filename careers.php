<?php


include('resources/includes/db_conn.php');

?>
<html>
  <head>
      
       <?php
    ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
    
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/custom.css">
    <link rel="stylesheet" href="resources/vendors/bootstrap-4.6.0/css/bootstrap.min.css"/>

<link rel="stylesheet" href="resources/css/css.css">
<link rel="stylesheet" href="resources/css/style.css">


  </head>
  <body>

  <?php
include('resources/includes/header.php');
?>

    <div class="s013">
        <div class="s013-mask">

      
      <form>
        <fieldset>
          <legend>ADAMSON UNIVERSITY CAREERS</legend>
        </fieldset>
        <br><br><br><br>
        <div class="inner-form">
            <div class="input-wrap first">
              <div class="input-field first">
                <label>I'M LOOKING FOR</label>
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="">Any oportunity Type</option>
                    <option value="Graduate Job">Graduate Job</option>
                    <option value="Internship, Clerkship or Placement">Internship, Clerkship or Placement</option>
                    <option value="Part-Time Student Job">Part-Time Student Job</option>
                    <option value="Virtual Experience">Virtual Experience</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="input-wrap second">
              <div class="input-field second">
                <label>I'M STUDYING</label>
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="">Any Study Field</option>
                    <option value="Business & Management">Business & Management</option>
                    <option value="Creative Arts">Creative Arts</option>
                    <option value="Engineering & Mathematics">Engineering & Mathematics</option>
                    <option value="Food, Hospitality & Personal Services">Food, Hospitality & Personal Services</option>
                    <option value="General Skills & Pathways">General Skills & Pathways</option>
                    <option value="Humanities, Arts & Social Sciences">Humanities, Arts & Social Sciences</option>
                    <option value="IT & Computer Science">IT & Computer Science</option>
                    <option value="Law, Legal Studies & Justice">Law, Legal Studies & Justice</option>
                    <option value="Medical & Health Sciences">Medical & Health Sciences</option>
                    <option value="Property & Built Environment">Property & Built Environment</option>
                    <option value="Sciences">Sciences</option>
                    <option value="Teaching & Education">Teaching & Education</option>
                    <option value="Trades & Services">Trades & Services</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <button class="btn-search" type="button">SEARCH</button>
          <div class="featured">            
                <legend>FEATURED ALUMNI</legend>
              <hr />
              <style>
               
.s013 form .featured hr {
  margin: 24px auto;
  width: 100px;
  border-top: 4px solid #3981c9;
}

  body {
  font-family: "Oxygen", sans-serif;
  color: #050505;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

.main {
  max-width: 1200px;
  margin: 0 auto;
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

.card_image {
  position: relative;
  max-height: 250px;
}

.card_image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


.note {
  position: absolute;
  top: 8px;
  left: 8px;
  padding: 4px 8px;
  border-radius: 0.25rem;
  background-color: #3981c9;
  font-size: 14px;
  font-weight: 700;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  position: relative;
  padding: 16px 12px 32px 24px;
  margin: 16px 8px 8px 0;
  max-height: 290px;
  overflow-y: scroll;
  text-align: center;
}

.card_content::-webkit-scrollbar {
  width: 8px;
}

.card_content::-webkit-scrollbar-track {
  box-shadow: 0;
  border-radius: 0;
}

.card_content::-webkit-scrollbar-thumb {
  background: #3981c9;
  border-radius: 15px;
}

.card_title {
  position: relative;
  margin: 0 0 24px;
  padding-bottom: 10px;
  text-align: center;
  font-size: 20px;
  font-weight: 700;
}

.card_title::after {
  position: absolute;
  display: block;
  width: 50px;
  height: 2px;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  background-color: #3981c9;
  content: "";
}

hr {
  margin: 24px auto;
  width: 50px;
  border-top: 2px solid #3981c9;
}

.card_text p {
  margin: 0 0 24px;
  font-size: 14px;
  line-height: 1.5;
}

.card_text p:last-child {
  margin: 0;
}
  </style>
              <div class="main">
                <ul class="cards">
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image">
                        <img src="resources/images/alumni1.png" alt="alumni1" />
                      </div>
                      <div class="card_content">
                        <h2 class="card_title">Engr. Pablito C. Veloria</h2>
                        <div class="card_text">
                          <p>Graduate of Bachelor of Science in Civil Engineering, Batch 1984 <br>Adamson University
                          </p>
                          <hr />
                          <p><strong>Licensed Civil Engineer</strong> <br><strong>Licensed Real Estate Appraiser</strong>
                             <br><strong>Licensed Real Estate Broker</strong>  <br><br><strong>Vice President, Consumer Credit Division</strong> 
                             <br><strong>Chinabank Savings Inc.</strong> <br><strong>(2017-Present)</strong>
                        </div>
                      </div>
                    </div>
                  </li>
              
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image">
                        <img src="resources/images/alumni1.png" alt="alumni1" />
                      </div>
                      <div class="card_content">
                        <h2 class="card_title">Engr. Pablito C. Veloria</h2>
                        <div class="card_text">
                          <p>Graduate of Bachelor of Science in Civil Engineering, Batch 1984 <br>Adamson University
                          </p>
                          <hr />
                          <p><strong>Licensed Civil Engineer</strong> <br><strong>Licensed Real Estate Appraiser</strong>
                             <br><strong>Licensed Real Estate Broker</strong>  <br><br><strong>Vice President, Consumer Credit Division</strong> 
                             <br><strong>Chinabank Savings Inc.</strong> <br><strong>(2017-Present)</strong>
                        </div>
                      </div>
                    </div>
                  </li>
              
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image">
                        <img src="resources/images/alumni2.png" alt="alumni2" />
                      </div>
                      <div class="card_content">
                        <h2 class="card_title">Col. Irvin D. Tanap</h2>
                        <div class="card_text">
                            <p>Graduate of Bachelor of Arts major in Political Science, Batch 1991 <br>Adamson University
                            </p>
                            <hr />
                            <p><strong>Asst. OESPA, Group Safety Officer</strong> <br><strong>Chairman Accident Incident Investigation Board</strong>
                               <br><strong>Chairman Promotion Board</strong> <br><strong>Chairman Flying Duty Status Board</strong> 
                               <br><strong>(2016-2017)</strong> 
                               <br><br><strong>Chairman Project Management Team  Resource Management Information System</strong>
                               <br><strong>(2008-2012)</strong>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
        </form>
    </div>
    
  </body>
</html>
