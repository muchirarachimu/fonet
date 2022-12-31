<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="styleproducts.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!-- Carousel style sheet links-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- video style sheet links-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <!--NAVIGATION BAR-->
  
  <div class="topnav" id="myTopnav">
  <a href="index.html"><img src="images/fonetlounge.png"></a>
    <a href="index.html">HOME</a>
  <a href="thelounge.html">THE LOUNGE</a>
  <a href="accomodation.html">ACCOMODATION</a>
  <a href="food.html">FOOD & DRINKS</a>
  <a href="events.html">EVENTS</a>
  <a href="gallery.html">GALLERY</a>
  <a href="contact.php">CONTACT</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<!--BANNER-->
<!---slideshow HEADER-->
<!---slide images-->
<div class="slider">
  <div class="slide active">
    <img src="images/loungearea.jpg" alt="">
    <div class="info">
        <h2>The Lounge Area </h2>
      <p> Elegant Lounge with ambience music, serene secure environment, hospitable waiters, and a variety of food & drinks.
       </p>
    
    </div>
  </div>
  <div class="slide">
    <img src="images/spool.jpg" alt="">
    <div class="info">
<h2>Swimming Pool </h2>
<p> Enjoy our swimming pool with crystal clear water with all safety standard observed.
</p>
    </div>
  </div>
  <div class="slide">
    <img src="images/Nyamchom.jpg" alt="">
    <div class="info">
      <h2>Cuisine</h2>
      <p> Enjoy delicious Nyama choma from our perfect selection of goats, and a variety of drinks based on your preference.</p>
    </div>
  </div>
  <div class="slide">
    <img src="images/mike-rua live.jpg" alt="">
    <div class="info">
        <h2>Live Performances</h2>
  <p> A cool getaway full of Music Performances from our renowned local artists.
     </p>
    </div>
  </div>
 <!--- End of slide images-->
      
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
      <!---<div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
      </div> --->
    </div>

    <script type="text/javascript">
        const slider = document.querySelector(".slider");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;
    
        //image slider next button
        nextBtn.addEventListener("click", () => {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });
    
          slideNumber++;
    
          if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0;
          }
    
          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        });
    
        //image slider previous button
        prevBtn.addEventListener("click", () => {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });
    
          slideNumber--;
    
          if(slideNumber < 0){
            slideNumber = numberOfSlides - 1;
          }
    
          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        });
    
        //image slider autoplay
        var playSlider;
    
        var repeater = () => {
          playSlider = setInterval(function(){
            slides.forEach((slide) => {
              slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
              slideIcon.classList.remove("active");
            });
    
            slideNumber++;
    
            if(slideNumber > (numberOfSlides - 1)){
              slideNumber = 0;
            }
    
            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
          }, 6000);
        }
        repeater();
    
        //stop the image slider autoplay on mouseover
        slider.addEventListener("mouseover", () => {
          clearInterval(playSlider);
        });
    
        //start the image slider autoplay again on mouseout
        slider.addEventListener("mouseout", () => {
          repeater();
        });
        </script>
<!---SOCIAL MEDIA-->  
<div class="socialmedia">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
<!---CONTACT-->  
 <div class="contactinfo">
<h2 style="text-align:center; color: red; font-size: 40px;">Contact Information</h2>
  <div>
    <div class="margin">
    <center> <div class="symbol"><img src="images/location.jpeg" alt="#" style="width: 100px;"></div></center> 
     <center> <p>Githurai 45, Progressive, Off Thika Super Highway, along Mwihoko Road</p> </center> 
    </div>
    <br>
    <div class="margin">
    <center> <div class="symbol"><img src="images/call.png" alt="#" style="width: 100px;"></div></center> 
      <center> <p> +2547213452356
  <br>
        +2547139872394 <br>
        </p></center> 
    </div>
    
    <br>
    <div class="margin">
    <center><div class="symbol"><img src="images/emailicon.png" alt="#" style="width: 100px;" ></div></center> 
      <center> <p>fonetlounge@gmail.com</p></center> 
    </div>
      </div>
    
<!---Whatsapp chat-->
<div style="text-align:center;">
  <a href="https://wa.me/2540705608609?text=">
    <img src="images/whatsapp-removebg-preview.png" alt="#" style="width:8%">
  </a> 
</div>

<h2>Locate Us</h2>

<!--- GOOGLE MAP-->

</iframe>  -->   
<div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31911.318721461004!2d36.90023106551257!3d-1.2193505430781695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s3d%20lounge%20githurai!5e0!3m2!1sen!2ske!4v1669222538570!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
<br><br>
    </div>

<!--FOOTER-->
<footer class="footer-distributed">

  <div class="footer-left">
      <!---<img src="images/logogerom.png"> <br>--->
    <h3>Fonet <span>Lounge</span></h3>

    <p class="footer-links">
      <a href="index.html">Home</a>
      |
      <a href="ourservices.html">Events  </a>
    
      |
      <a href="contactus.html">Contact Us</a>

    </p>
    <div class="office-hours">
      <h4> Open 24/7  </h4>
    </div>
    <br>
    <p class="footer-company-name">© 2022 Fonet Lounge</p>
  </div>

  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
        <p><span> Githurai 45, Progressive, along Mwihoko Road
         </span>
        </p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p>+2547213452356</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p>+2547139872394</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#">fonetlounge@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>About Fonet Lounge</span>
      Fonet Lounge is located in Githurai 45 Progressive only 1 Km off Thika Super Highway along Mwihoko Road.
The Lounge is an ideal alternative to a city hotel, and a perfect weekend getaway after a busy and tiring week.
We have a high level of hospitality and our employees are customer-oriented to ensure customer satisfaction.    
  </div>
</footer>
<!----BACK TOP BUTTON-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Back Top</button>

<script>
  // Get the button
  let mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

</body>
</html>
