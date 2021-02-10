<?php 

require_once "pdo.php";
session_start();
   if(!isset($_SESSION['name']) && !isset($_SESSION['sign-in'])){
	   echo("please login first");
	   header("Location:logup.php");
	   return;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awesome webiste</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="css/data.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="js/scripts.js"></script>
</head>
<body>
<!-- nav bar--->
<nav class="navbar">
 <div class="inner-width">
  <a href="/" class="logo"></a>
   <button class="menu-toggler">
     <span></span>
     <span></span>
     <span></span>
  </button>
 <div class="navbar-menu">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#education">Education</a>
        <a href="#works">Works</a>
        <a href="#contact">Contact</a>
	<?php 
   if((isset($_SESSION['email'])&& isset($_SESSION['pass'])) OR (isset($_SESSION['emaila'])&& isset($_SESSION['passa']))) {
   echo('<a href="logout.php">'."Log Out".'</a>');
   }
	else{echo('<a href="logup.php">'."Join".'</a>');}
	?>
      </div>
</div>
</nav>
 <!-- Home -->
  <section id="home">
    <div class="inner-width">
      <div class="content">
        <h1>Hi I'm </h1>
        <div class="sm">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin-in"></a>
          <a href="#" class="fab fa-youtube"></a>
        </div>
        <div class="buttons">
          <a href="#contact">Contact me</a>
          <a href="#">Download CV</a>
        </div>
      </div>
    </div>
  </section>
    <!-- Works -->
  <section id="works" class="dark">
    <div class="inner-width">
      <h1 class="section-title">Works</h1>
      <div class="works">
        <a href="images/works/1.png" class="work">
          <img src="images/works/1.png" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/2.png" class="work">
          <img src="images/works/2.png" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/3.png" class="work">
          <img src="images/works/3.png" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/4.png" class="work">
          <img src="images/works/4.png" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/5.png" class="work">
          <img src="images/works/5.png" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/6.png" class="work">
          <img src="images/works/6.png" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>
      </div>
	     <div class="buttons">
		 <a href="viewmorework.php">View more</a>
		 </div>
    </div>
  </section>
  </body>
  </html>