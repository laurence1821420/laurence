<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOIS' LECHON</title>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet"
</head>
<body>
	<div class="box-area">
	<header>
		<div class='diamond'>
				LOIS' LECHON
		</div>
		<nav>
		<a href="#">MENU</a>
		<a href="#">GET QUOTE</a>
		<a href="#">CALL NOW</a>
		<a href="#">GET DIRECTION</a>
		</nav>
	</div>
	</header>
		<div class="banner-area">
		<div class="text"> <h2>LOIS' LECHON</h2>
		</div>
		

		<div class="box">
		<ul> Opening Hours</u>
				<ul>Mon:	7:00 am – 8:00 pm</ul>
				<ul>Tue:	7:00 am – 8:00 pm</ul>
				<ul>Wed:	7:00 am – 8:00 pm</ul>
				<ul>Thu:	7:00 am – 8:00 pm</ul>
				<ul>Fri:	7:00 am – 8:00 pm</ul>
				<ul>Sat:	7:00 am – 8:00 pm</ul>
				<ul>Sun:	7:00 am – 8:00 pm</ul>
		</div>
		
					<div class="box1">
								<ul>FOR PICK UP AND TAKE-OUT ONLY</ul> <br>
						<ul>Lechon per kilo</ul>
						<ul>PHP 650.00</ul>
						<ul>for pick-up and take out only</ul>
						<ul>Whole Lechon</ul>
						<ul>PHP 5,500.00</ul>
						<ul>for orders 5days reservation</ul>
	</div>
	<div class='diamond1'>
					  
					</div>
					<div class='lois'>
					  <h2>LOIS' LECHON</h2>
					</div>
	</div>
		<div class="content-area">
		<div class="wrapper">
			
			
				<h3><ul>We are a family-run business specialising in the most best-selling Lechon in Bacolod. </ul> 
					
			
			
				<p>Restaurant in Bacolod</p>
				<p>Open today until 20:00</p></h3> <br>
				<h2>Address</h2>
		</div>
		<div class="map-responsive">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12191.476334280296!2d122.94250296385484!3d10.666668915367826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aed034f6524469%3A0x26acff3704dca696!2sLECHONAN%20COUNTRY!5e1!3m2!1sen!2sph!4v1599287623980!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
		<div class="carousel">
						<div class="lechon">
  
						<img src="1.jpg" style="width:110%">
						</div>

						<div class="lechon">
						<img src="2.jpg" style="width:110%">
						</div>
	
						<div class="lechon">
						<img src= "3.jpg" style="width:110%">
						</div>
					</div>
					<br>

						<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(2)"></span> 
						<span class="dot" onclick="currentSlide(3)"></span> 
					</div>
				<div class="column">
			<label for="fname">Full name</label>
				<input type="text" id="fname" name="firstname" placeholder="Full Name...">
					<label for="lname">Email Address</label>
						<input type="text" id="ename" name="emailaddress" placeholder="E-mail Address...">
						<div class="column1">
					<label for="mes">Message</label>
				<input type="text1" id="" name="mes" placeholder="send us a message...">
			<input type="submit" value="Submit">
			
		</div>
		</div>	
		<div class="footer">
		<p>Copyright © 2019 All Rights Reserved </p>
	</div>
		</div>
		
	<script>
	
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("lechon");
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
  setTimeout(showSlides, 2000); 
}

</script>
		
	</body>
</html>	