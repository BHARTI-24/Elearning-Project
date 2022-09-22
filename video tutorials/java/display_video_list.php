<?php

include 'conn.inc.php';
// include "../../admin/includes/navbar.php";


session_start();
include 'conn.inc.php';
require 'comments.inc.php';


if (!isset($_SESSION['username'])) {
	header('location:../../login.php');
}
date_default_timezone_set('Asia/Kolkata');
// echo date_default_timezone_get();


?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="java_video.css">
	<link rel="stylesheet" type="text/css" href="../../css/programming.css">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		#mybody {
			background-color: #e9ecef;
			padding: 0;
			margin: 0;

		}
		body{
			padding: 0;
			margin: 0;
		}

		/* #video-list-section {
			position: absolute;
			top: 80px;
			right: 150px;
			padding: 20px;
			left: 900px;
			width: 400px;

		} */

		.fixed-top {
			position: relative;
		}
		.item #sidebar-wrapper,
		#sidebar-wrapper {
			float: right;
			width: 30%;
			max-width: 330px;
		}

		#sidebar-wrapper {
			padding-top: 20px;
		}
	</style>
</head>

<body id="mybody" class="bg-white">



	<!---Navigation Start	----->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
		<a class="navbar-brand text-white" href="../../index.php">E-Learning System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto ">
				<li class="nav-item active">
					<a class="nav-link text-white" href="../../video tutorials/java/display_video_courses.php">Home <span class="sr-only">(current)</span></a>
				</li>
				

			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>


	<!---Navigation Ends	----->
<!-- 
<!DOCTYPE html>
<html>

<head> -->
	<title></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		.mycard {
			transition: all 0.9s ease;
		}

		.mycard:hover {
			transform: scale(1.05);
		}
	</style>



</head>

<body>

	<br><br><br>
	<div class="container-fluid position-relative">
		<center style="height: 50px; background-color: #aeaeaee0; ">
			<p class="text-white h3" style="">watch free <?php echo $_GET['course_name']; ?> online videos</p>
		</center><br><br>

		<div class="row">


			<?php

			$course_name = $_GET['course_name'];
			$q = "select * from videos where course_name='$course_name'";
			//echo $course_name;
			$query = mysqli_query($con, $q);
			while ($row = mysqli_fetch_array($query)) {

			?>
				<div class="col-md-3">
					<div class="card shadow mycard" style="width: 18rem; height: 7rem;">
						<div class="inner">
							<!--  to zoom in and zoom out effect -->
							<img class="card-img-top " style="height: 11rem;" src=../../uploadimg/thumbnail/<?php echo $row['video_image']; ?> alt="Card image cap">
						</div>

						<div class="card-body shadow" style="background-color: #f1f1f1;">
							<!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
							<p class="card-text"><?php echo $row['video_name']; ?></p>
							<a href="java_videos.php?video_id=<?php echo $row['video_id'] ?>&course_name=<?php echo $row['course_name'] ?>" class="btn btn-primary border-0 ">watch videos</a>
						</div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>


			<?php } ?>
			<!--  while loop closed -->

		</div>


	</div>

	<!-- footer section starts -->

	<footer>
		<?php
		include "../../admin/includes/footer.php";
		?>
	</footer>
	<!-- footer section ends -->

</body>

</html>