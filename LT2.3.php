<html>
	<head>
		<title>LEARNING TASK 2.3</title>
		<link rel="stylesheet" type="text/css" href="css/LT2.3.css" />
	</head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<body>
		<div class="wrapper">
			<div class="pizza"></div>
			<div class="salami"></div>
			<div class="salami1"></div>
			<div class="salami2"></div>
			<div class="salami3"></div>
			<div class="salami4"></div>
			<div class="salami5"></div>
			<div class="salami6"></div>
			<div class="salami7"></div>
			<div class="salami8"></div>
			<div class="salami9"></div>
			<div class="pepperoni"></div>
			<div class="title" id="top-title">YANNIE'S</div>
			<div class="title" id="bottom-title">PIZZA</div>
			<br>
			<ul>
				<li><a class="in-active" href="index.php">Home</a></li>
				<li><a href="index.php">About Us</a></li>
				<li><a href="index.php">Portfolio</a></li>
				<li><a href="index.php">Clients</a></li>
				<li><a href="index.php">Gallery</a></li>
				<li><a href="index.php">Contact Us</a></li>
			</ul>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		<div class="slideshow-container">

			<div class="mySlides fade">
				<img src="sample_img.jpg" style="width:110%">
			</div>

			<div class="mySlides fade">
				<img src="sample_img2.jpg" style="width:110%">
			</div>

			<div class="mySlides fade">
				<img src="sample_img3.jpg" style="width:110%">
			</div>
			
			<div class="mySlides fade">
				<img src="sample_img6.jpg" style="width:110%">
			</div>

		</div>
		<br>
		<div style="text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
		
			<br>
			<br>
			<div class="sidebar"><br><center></br></center>
			<br>
			<center><br>
			<center><br>
			<center><br></center>
			</div>
			<div class="right"><br><center></center></div>
			<div class="clear"></div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="text">ORDER AND CALL US NOW!</div>
			<div class="feature"></div>
			<br>
			<br>
			<br>
			<div class="footer"><center> Login | Disclaimer | Privacy Policy | Sitemap<center></div>

		</div>
	</body>
</html>
