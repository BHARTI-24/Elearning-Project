<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}



?>


<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>e-learning</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----------email notification-------->

	<style type="text/css">
		html {
			scroll-behavior: smooth;
		}
	</style>

</head>

<body onload="myfunction()">
	<!---preloader starts	----->

	<div id="loading"></div>

	<!---preloader Ends	----->


	<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">E-Learning System</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#work">Works</a></li>
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success"><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
				<!------Navigation menus ends---->
			</div>
		</div>
	</nav>
	<!---Navigation Ends	----->

	<!---Slider Section starts	------->
	<section class="slider text-center" id="slider">
		<div class="slider-overlay">
			<div class="slider-content">
				<div class="icons">

					<i class="fa fa-apple"></i>
					<i class="fa fa-android"></i>
					<i class="fa fa-windows"></i>
				</div>
				<br>
				<div class="text">
					<!-- jquery typed effect -->

				</div>
				<div class="cta-div">
					<a href="#contactus" class="btn1">CONTACT US</a>
					<a href="#myservice_section" class="btn2">LEARN TODAY</a>
				</div>
				<br><br>
				<div class="social-networks">
					<a href="" class="fa fa-facebook"></a>
					<a href="" class="fa fa-twitter"></a>
					<a href="" class="fa fa-instagram"></a>
					<a href="" class="fa fa-reddit"></a>
					<a href="" class="fa fa-linkedin"></a>
					<a href="" class="fa fa-cog"></a>
				</div>
			</div>
		</div>
	</section>

	<!---Slider Section ends------->

	

	<!---Our Services Section Start------->

	<br><br>
	<div class="container-fluid servicebody" id="myservice_section">
		<div class="service-are" id="service">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-title text-center">
						<h2><b>SERVICES</b></h2>
						<p><br>These are the services provided by us
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-leaf"></i>
						</div>
						<h3><a href="programmingdemo.php">PROGRAMMING</a></h3>
						<p>
							Here you will find all the lecture tutorials related to programming languages
							like JAVA,PYTHON,ANDROID etc
						</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-laptop"></i>
						</div>
						<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
						<p>
							Here you will find all the videos tutorials related to programming languages
							like JAVA,PYTHON,ANDROID etc
						</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-laptop"></i>
						</div>
						<h3><a href="online_quize/quizhome.php">EXERCISE</a></h3> <!--  exercise/exercise.php -->
						<p>
							Here you will find problem programs for practice and their implementation also which will improve your coding skill
						</p>
					</div>
				</div>
				
	<!---Our Services Section Ends------->

<div>
	<br><br><br>
	<section class="work" id="work"><br><br><br><br>
		<h2 id="work-heading" class="text-center" style="font-weight: bold;">OUR WORK</h2>
		<p class="text-center">join us to improve your work</p>
		<div class="container-fluid">
			<!---first row start-->
			<div class="row no-gutters">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work1.png" title="image">
							<img src="img/work1.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work2.png" title="image">
							<img src="img/work2.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work3.png" title="image">
							<img src="img/work3.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work4.png" title="image">
							<img src="img/work4.png" class="img-responsive">
						</a>

					</div>

				</div>



				<!---first row ends-->


				<!-------second row starts  --->

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work5.png" title="image">
							<img src="img/work5.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work6.png" title="image">
							<img src="img/work6.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work7.png" title="image">
							<img src="img/work7.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="img/work8.png" title="image">
							<img src="img/work8.png" class="img-responsive">
						</a>

					</div>

				</div>



				<!---second row ends-->

			</div>



	</section>
	</div>

	<!---Our Services Section Ends------->


	<!---Our Team Section Start------->
	<br><br><br>
	<div class="container text-center" id="our-members">
		<h2><b>MEMBERS</b></h2>
		<p>
			
		</p>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="team-memebers" class="owl-carousel owl-theme">
					<div class="team-member text-center">
						<img src="./img/profile.jpg" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Bharti Sharma</h4>
							<h4 class="team-member-designation">member 1</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="team-member text-center">
						<img src="./img/profile.jpg" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Jayanth</h4>
							<h4 class="team-member-designation">member 2</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="team-member text-center">
						<img src="./img/profile.jpg" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Misbah Riyaj</h4>
							<h4 class="team-member-designation">member 3</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>



	<!---Our Team Section Ends------->

	<!------ Include the above in your HEAD tag ---------->

	<div class="row text-center" id="contactus">
		<h2><b>CONTACT US</b></h2><br><br>
		<center>
			<div class="card" style="width: 30rem;">
				<div class="card-body border-info">

					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">message</label>
							<input type="password" class="form-control" placeholder="enter your message">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</center>
	</div>

	<!---Contact us Section Ends------->

	<!---This is script section------->

	<script type="text/javascript">
		var preloader = document.getElementById('loading');

		function myfunction() {
			preloader.style.display = 'none';
		}


		function addButton() {
			var body = document.getElementsByTagName('body')[0];
			var myfaq1 = document.getElementById('myfaq');
			var btn = document.createElement('button');
			btn.innerHTML = 'click';
			myfaq1.appendChild(btn);
			body.appendChild(myfaq);
		}
	</script>

	<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
	<script src="js/typed.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>


</body>

</html>