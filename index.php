<?php 

require_once "pdo.php";
session_start();
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
       <div class="sli">
	   <button class="lilly" onclick="prev()">prev</button>
	   <img id="slider" src="images/1.jpg" size="cover">
	   <button class="lilly" onclick="next()">next</button>
	   </div>
        <div class="sm">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin-in"></a>
          <a href="#" class="fab fa-youtube"></a>
        </div>
      </div>
    </div>
  </section>

  <!-- about -->
  <section id="about">
    <div class="inner-width">
      <h1 class="section-title">About</h1>
      <div class="about-content">
        <img src="images/lo.png" alt="" class="about-pic">
        <div class="about-text">
          <h2>Hi! I'm LOOSE END</h2>
          <h3>
            <span>Developer</span>
            <span>Designer</span>
            <span>Youtuber</span>
          </h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed fuga eaque, culpa cupiditate animi laborum natus! Similique odio sit facilis dolorum dicta velit provident sequi iusto, est pariatur quisquam corrupti animi necessitatibus aliquid deserunt reprehenderit voluptatibus? Exercitationem deserunt fugit dicta nesciunt velit quae tempora eius praesentium odio est, voluptatem vero incidunt omnis ad iure, soluta maiores nostrum inventore alias culpa. Nihil suscipit possimus est harum accusamus impedit libero deleniti repellat.
          </p>
        </div>
      </div>

      <div class="skills">
        <div class="skill">
          <div class="skill-info">
            <span>HTML</span>
            <span>90%</span>
          </div>
          <div class="skill-bar html"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>CSS</span>
            <span>80%</span>
          </div>
          <div class="skill-bar css"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>Javascript</span>
            <span>70%</span>
          </div>
          <div class="skill-bar js"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>PHP</span>
            <span>60%</span>
          </div>
          <div class="skill-bar php"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>MySQL</span>
            <span>90%</span>
          </div>
          <div class="skill-bar mysql"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>C#</span>
            <span>80%</span>
          </div>
          <div class="skill-bar cs"></div>
        </div>
      </div>
	     
		 <div class="buttons">
		<a href="viewmoreabout.php">View more</a>
		</div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="dark">
    <div class="inner-width">
      <h1 class="section-title">Services</h1>
      <div class="services">
        <div class="service">
          <i class="icon fas fa-paint-brush"></i>
          <h4>Design</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-pager"></i>
          <h4>Build Websites</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-database"></i>
          <h4>Manage Databases</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fab fa-android"></i>
          <h4>Android Apps</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-credit-card"></i>
          <h4>Ui Design</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-keyboard"></i>
          <h4>Edit Texts</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
	    <div class="buttons">
		<a href="viewmoreservice.php">View more</a>
		</div>
    </div>
  </section>

  <!-- Education -->
  <section id="education">
    <div class="inner-width">
      <h1 class="section-title">Education & Experiences</h1>
      <div class="time-line">
        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
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

  <!-- Contact -->
  <section id="contact">
    <div class="inner-width">
      <h1 class="section-title">Get in touch</h1>
      <div class="contact-info">
        <div class="item">
          <i class="fas fa-mobile-alt"></i>
          +111 111111111
        </div>

        <div class="item">
          <i class="fas fa-envelope"></i>
          email@address.com
        </div>

        <div class="item">
          <i class="fas fa-map-marker-alt"></i>
          New York, United States
        </div>
      </div>

      <form action="#" class="contact-form">
        <input type="text" class="nameZone" placeholder="Your Full Name">
        <input type="email" class="emailZone" placeholder="Your Email">
        <input type="text" class="subjectZone" placeholder="Subject">
        <textarea class="messageZone" placeholder="Message"></textarea>
        <input type="submit" value="Send Message" class="btn">
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="inner-width">
      <div class="copyright">
        &copy; 2020 | Created & Designed By <a href="#">LOOSE END</a>
      </div>
      <div class="sm">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin-in"></a>
        <a href="#" class="fab fa-youtube"></a>
      </div>
    </div>
  </footer>

  <!-- Go Top BTN -->
  <button class="goTop fas fa-arrow-up"></button>
<script>
var images=[
	"images/1.png","images/2.png","images/3.png"];
	var num=0;
	function next(){
		var slider=document.getElementById("slider");
		num++;
		if(num>=images.length){
			num=0;
		}
		slider.src=images[num];
	}
	function prev(){
		var slider=document.getElementById("slider");
		num--;
		if(num<0){
			num=images.length-1;
		}
		slider.src=images[num];
	}
</script>
</body>
</html>