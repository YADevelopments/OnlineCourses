<?php

include 'components/connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ahmed Ramlawy</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<!--------header---->
	<header>
		<a href="#" class="logo"><img src="images/logo.png"></a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navlist">
			<li><a href="#home">Home</a></li>
			<li><a href="login.php">Courses Application</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#service">Service</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<a href="CV/communication skills.pdf" class="top-btn">Download CV</a>
	</header>

	<!--------home---->
	<section class="home" id="home">
		<div class="home-text">
			<h3>Hello, I'm</h3>
			<h1>Ahmed Ramlawy</h1>
			<h5>A Training supervisor <span>From Cairo</span></h5>
			<p>I'm creative Trainer based in Cairo, and I'm very passionate <br> and dedicated to my work.</p>
			<div class="social">
				<a href="#"><i class='bx bxl-facebook'></i></a>
				<a href="#"><i class='bx bxl-twitter' ></i></a>
				<a href="#"><i class='bx bxl-linkedin' ></i></a>
			</div>
			<a href="#about" class="btn">About Me</a>
		</div>

		<div class="home-img">
			<img src="images/Mainn.png">
		</div>
	</section>

	<!--------sub service---->
	<section class="sub-service">
		<div class="items">
			<div class="sub-box">
				<div class="sub-img">
					<img src="images/target.svg">
				</div>
				<h3></h3>
				<p></p>
			</div>

			<div class="sub-box">
				<div class="sub-img">
					<img src="images/brush.svg">
				</div>
				<h3></h3>
				<p></p>
			</div>

			<div class="sub-box">
				<div class="sub-img">
					<img src="images/energy.svg">
				</div>
				<h3></h3>
				<p></p>
			</div>

		</div>
	</section>

	<!--------About---->
	<section class="about" id="about">
		<div class="about-img">
			<img src="images/about.jpg">
		</div>

		<div class="about-text">
			<h3>I'm a Online Trainer</h3>
			<h2>I Can Make a training sessions which improve our skills </h2>
			<p>Hello there! I'm very passionate and dedicated to my work. With 9 years experience as a professional trainer, I have acquired the skills and knowledge necessary to lead any to there success. I enjoy every session of the training , from discussion and collaboration.</p>
			<a href="#" class="btn">For online courses</a>
		</div>
	</section>

	<!--------portfolio---->
	<section class="portfolio" id="portfolio">
		<div class="heading">
			<h3>Portfolio</h3>
			<h2>My Amazing Work</h2>
			<p>Most common methods for best sessions which make you an involved member <br> becouse the sessions based on practical parts more than theoritcal </p>
		</div>

		<div class="portfolio-content">
			<div class="col">
				<img src="">
				<div class="layer">
					<h3></h3>
					<h5></h5>
				</div>
			</div>

			<div class="col">
				<img src="">
				<div class="layer">
					<h3></h3>
					<h5></h5>
				</div>
			</div>

			<div class="col">
				<img src="">
				<div class="layer">
					<h3></h3>
					<h5></h5>
				</div>
			</div>

			<div class="col">
				<img src="">
				<div class="layer">
					<h3></h3>
					<h5></h5>
				</div>
			</div>

			<div class="col">
				<img src="">
				<div class="layer">
					<h3></h3>
					<h5></h5>
				</div>
			</div>

			<div class="col">
				<img src="">
				<div class="layer">
					<h3></h3>
					<h5></h5>
				</div>
			</div>

		</div>
	</section>

	<!--------service---->
	<section class="service" id="service">
		<div class="heading">
			<h3>Service</h3>
			<h2>What I Do For Clients</h2>
			<p>Most common methods for improve their skills with the applicability for work well on their industry is <br> responsive and adaptive improve</p>
		</div>

		<div class="service-content">
			<div class="row">
				<div class="s s-one">
					<img src="">
				</div>
				<h3></h3>
				<h5> <span></span></h5>
				<p></p>
			</div>

			<div class="row">
				<div class="s s-tow">
					<img src="">
				</div>
				<h3></h3>
				<h5><span></span></h5>
				<p></p>
			</div>

			<div class="row">
				<div class="s s-three">
					<img src="">
				</div>
				<h3></h3>
				<h5> <span></span></h5>
				<p></p>
			</div>

			<div class="row">
				<div class="s s-four">
					<img src="">
				</div>
				<h3></h3>
				<h5><span></span></h5>
				<p></p>
			</div>

		</div>
	</section>

	<!--------work---->
	<section class="cta">
		<div class="heading">
			<h2>Completed 2200+ session <br> Successfully</h2>
		</div>

		<div class="cta-box">
			<div class="wrap one">
				<h3>1200+</h3>
				<p>online sessions</p>
			</div>

			<div class="wrap two">
				<h3>350+</h3>
				<p>External sessions</p>
			</div>

			<div class="wrap three">
				<h3>1k</h3>
				<p>Internal sessions</p>
			</div>

		</div>
	</section>

	<!--------contact---->
	<section class="contact" id="contact">
		<div class="container">
			<div class="center">
				<h3>Let's talk about everything</h3>
				<p>Don't like forms? Send me an email.</p>
			</div>

			<div class="action">
				<form>
					<input type="email" name="email" placeholder="Enter Your email" required>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</section>

	<!--------ends---->
	<div class="ends">
		<p>Made with love by Youssef Ashouer © 2022</p>
	</div>

	<script src="https://unpkg.com/scrollreveal"></script>

	<!--------Link to js---->
	<script type="text/javascript" src="js/scriptt.js"></script>
	
</body>
</html>