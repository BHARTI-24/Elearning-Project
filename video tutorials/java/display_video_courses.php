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
<!-- </head> -->

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
					<a class="nav-link text-white" href="../../index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				

			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>


	<!---Navigation Ends	----->


	<style type="text/css">
		
.card-body
{
	 border-style: solid !important;
	  border-width:1px !important;
	  border-color: #ccc;
}

.container
{
	margin-top: 1%;
}

.inner img
{
	transition: all 1.5s ease;  /* to rotate image smoothly*/
	
}
.inner:hover img
{
	transform:rotate(5deg);      /* to rotate the image 5 deg*/
	
}

.div1                           /* for title image*/
{
   position: relative;
    height: 500px;
    width: 1263px;
    background:url(online_video_title.png);
}


	</style>
<!-- </head>
<body> -->

	<div class="container-fluid  div1">
		
	</div>
	<!-- title image ends -->


	<!-- video course card starts -->
	<br><br><br>
	<div class="container-fluid">

		<div class="row">
			

<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {

		 	?> 
		 	<div class="col-md-4">
				<div class="card shadow" style="width: 22rem; height: 10rem;">
		 	<div class="inner">                                                  <!--  to zoom in and zoom out effect -->
						<img class="card-img-top " style="height: 15rem;"   src=<?php echo $row['image']; ?> alt="Card image cap">
				</div>
  
				  <div class="card-body text-center shadow">
				   <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
				   <!--  <p class="card-text"><?php echo $row['description']; ?></p> -->
				    <a href="display_video_list.php?course_name=<?php echo $row['course_name']; ?>" class="btn btn-primary">watch videos</a>
				  </div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>

			
			<?php } ?>     <!--  while loop closed -->
			
		</div>
		

	</div>

	<!-- video course card ends -->
<!-- 
<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {
			?> <button > <a ><?php  echo $row['course_name']; ?></a></button><?php 
		}
 ?> -->


<!-- footer section starts -->

<footer style="margin-top: 90px;">
	 <?php 
 include "../../admin/includes/footer.php";
  ?>
</footer>

<!-- footer section ends -->

</body>
</html>
