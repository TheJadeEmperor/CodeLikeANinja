<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="BL Web Solutions">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Code like a ninja</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css"> 
  
    <script src="https://kit.fontawesome.com/0c72afa510.js" crossorigin="anonymous"></script>


    <script>

var NoExitPage = false; 

function ExitPage() { 
    if(NoExitPage == false) { 
    NoExitPage=true; 
    location.href='<?=$landingURL?>'; 
    
    return"***********************************************\n\n"+ 
    " WAIT! Sign up to get your FREE Neobux Report! \n\n"+ 
    " Learn how to get 40+ Direct Referrals Overnight! \n\n"+ 
    " Click the [Cancel] button to Download Your FREE GIFT!\n\n"+ 
    "***********************************************"; 
    } 
} 


function validateEmail(email) { /* validation for email field */
    console.log('validateEmail ' + email);
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3,4})+$/.test(email)) {
        return true;
    } else {
        document.getElementById('error').innerHTML = 'You have entered an invalid email address!';
        
        return false;
    }
}
</script>
<style>

  body {
    margin: 0;
  }

  .container {
    display: flex;
  }

  .form-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.4);
      width: 45%;   
      margin-right: 10%;
  } 
      
  .image-container {
      display: flex;
      justify-content: left;
      align-items: center;
      width: 45%;
      text-align: left;
  }

  @media (max-width: 767px) { 
    .container {
      display: flex;
      flex-direction: column;
      margin-top: 15%;
    }

  .form-container {
      width: 100%;   
      margin: 0% 0% 20% 0%;
    } 
        
    .image-container {
      width: 100%;    
    }
  }

  .image-container p, .image-container li {
    color: #ffffff;
    font-size: 16px;
    line-height: 22px; 
    opacity: 0.7;
  }

  .image-container h1 {
    font-size: 2.5em;
  }

  form {
    padding: 30px;
  }

  h1 {
    color: #FFF;
    margin: 0;
    font-size: 2em;
  }

  label, input, button {
    margin: 10px 0;
  }

  label {
    color: #FFF;
  }

  input {
    width: 100%;
    height: 50px;
    padding: 10px;
    box-sizing: border-box;
  }

  button {
    width: 100%;
    background-color: #FF0000;
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 700;
    padding: 12px 20px;
    display: inline-block;
    outline: none;
    cursor:pointer;
  }
</style>

  </head>
<body>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/computer.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
            <div class="container">
              <div class="form-container">


  <form method="POST" id="TRWVLCPForm" name="TRWVLCPForm" action="https://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi">


<h1> <i class="fa-solid fa-file-pdf"></i> GET YOUR FREE <em>HTML</em> CHEAT SHEET</h1>
<label for="email">And code like a ninja today!</label>

<input type="email" id="da_email" name="da_email" value="Enter your best email" onclick="this.value=''" required>

<button type="submit" value="Submit" id="submit" name="subscribe" class="link button" onclick="return validateEmail(document.getElementById('email').value);">Submit</button>

<input type="hidden" id="da_name" name="da_name" value="Ninja Coder">
<input type="hidden" name="trwvid" value="neobux">
<input type="hidden" name="series" value="codingcourse">
<input type="hidden" name="subscrLandingURL" value="<?=$subscrLandingURL?>">
<input type="hidden" name="confirmLandingURL" value="<?=$confirmLandingURL?>">
<input type="hidden" name="langPref" value="en"><input type="hidden" name="lcpID" value=""><input type="hidden" name="lcpDE" value="0">
<input type="hidden" name="da_cust1" value="<?=$_GET['campaign']?>">

</form>
  </div>

  <div class="image-container">

    <div>
      <h1>Launch Your First Website</h1>

      <p>
        <ul><li><i class="fa-sharp fa-solid fa-user-ninja"></i> Launch your first website in as little as a week</li>
        <li><i class="fa-sharp fa-solid fa-user-ninja"></i> Learn HTML & CSS Basics and Javascript as well as scripting languages like PHP and database languages like MySQL</li>
      <li><i class="fa-sharp fa-solid fa-user-ninja"></i> Take our online cram course and learn to code like a ninja</li>
      <li><i class="fa-sharp fa-solid fa-user-ninja"></i> Live 1 on 1 personalized training </li>
      <li><i class="fa-sharp fa-solid fa-user-ninja"></i> Start your career in web development with our career advice and interview tips</li>
      <li><i class="fa-sharp fa-solid fa-user-ninja"></i> Your final project will be presentable to employers and interview-ready</li>
    
    </ul>
     </p>

    </div>
  </div>

</div>
             
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


</body>