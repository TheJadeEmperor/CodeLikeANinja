<?php
$alt = 'Code Ninja';
$dir = '../';
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

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css"> 
  
    <script src="https://kit.fontawesome.com/0c72afa510.js" crossorigin="anonymous"></script>


    <script>
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

<!-- Reddit Pixel -->
<script>
!function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);rdt('init','t2_flvh41jcw', {"optOut":false,"useDecimalCurrencyValues":true,"email":"<EMAIL-HERE>","externalId":"<EXTERNAL-ID-HERE>"});rdt('track', 'PageVisit');
</script>
<!-- DO NOT MODIFY UNLESS TO REPLACE A USER IDENTIFIER -->
<!-- End Reddit Pixel -->


<style>

  body {
    margin: 0;
  }

  .menu-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FFFFFF;
            color: #000000;
            padding: 10px;
        }
    
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 30px;
            margin-right: 5px;
        }
    
      .logo-text {
        font-weight: bold;
      }
    
      .menu-text {
          text-align: right;
      }
    
    .menu-text a {
        color:#000000;
        text-decoration: none;
        padding: 0 20px;
    }
    
      a:visited {
        color: #2d2b2b;
      }
    
      a:hover {
        color: #b6c3f2; 
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

  .submitButton {
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
    cursor: pointer;
  }

  .ctaButton {
    background-color: #FF0000;
    color: #FFF;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 700;
    padding: 12px 20px;
    border-radius: 15px;
    border: none; 
    cursor: pointer;
  }
 
  a:hover {
    color: #b6c3f2;
  }

</style>
</head>
<body onbeforeunload="return ExitPage();">
 
<nav class="menu-bar" title="<?=$alt?>">
    <div class="logo">
        <img src="../images/ninja.jpg" alt="<?=$alt?>"><span class="logo-text">Code Like A Ninja</span>
    </div>
    <div class="menu-text">
        <a href="<?=$dir?>splash">Newsletter</a>
        <a href="<?=$dir?>">Full Stack</a>
        <a href="<?=$dir?>members">Login</a>
    </div>
</nav>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      
      <video autoplay muted loop id="bg-video" title="<?=$alt?>">
          <source src="assets/computer.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
            <div class="container">
              <div class="form-container">


  <form method="POST" id="TRWVLCPForm" name="TRWVLCPForm" action="https://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi">


<h1> <i class="fa-solid fa-file-pdf"></i> Download YOUR FREE <em>HTML</em> CHEAT SHEET Immediately</h1>
<label for="email">Download link will be sent directly to your email</label><br>
<label for="email">Enroll in our free coding newsletter and sign up for our bootcamp</label>

<input type="email" id="da_email" name="da_email" value="Enter your best email" onclick="this.value=''" required>

<button type="submit" value="Submit" id="submit" name="subscribe" class="submitButton" onclick="return validateEmail(document.getElementById('email').value);">Submit</button>

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
    <div  title="<?=$alt?>">
      <h1>Launch Your First Website ASAP</h1>

<?php
$bullets = array(
  'Launch your first website in as little as a week',
  'Live 1 on 1 personalized training',
  'Mastery of frontend languages like HTML & CSS',
  'Master of backend scripts like PHP and database languages like MySQL',
  'After our bootcamp, you will no longer be baffled by Javascript or jQuery',
  'Become a full stack developer after finishing our bootcamp',
  'Create beautiful websites like the pros you once admired',
  'How to use chatgpt to write bug-free code',
  'Jump start your career in web development with our career advice and interview tips',
);

foreach($bullets as $points) {
  echo '<p><ul>';
  echo '<li><i class="fa-sharp fa-solid fa-user-ninja"></i> '.$points.'</li>';
  echo '</ul></p>';
}

?>

    </div>
  </div>

</div>
             
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


</body>