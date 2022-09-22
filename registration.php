<?php 

session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'e-learningproject');


	
	if (isset($_POST['submit_user'])) {
		// Button Clicked
		//echo "Button Clicked";

		//1. Get the Data from form
		$username = $_POST['username'];
		$password = $_POST['password']; 
		$email = $_POST['email'];


		//2. SQL Query to Save the data into database
		$sql = "insert into login_site(username,password,email) values('$username','$password','$email')";

		//3. Executing Query and Saving Data into Database - if query exectued then it returns true otherwise false
		$res = mysqli_query($con, $sql) ;

		if ($res == true) {
			
			// $_SESSION['add'] = "<div class='success'>Signed up Successfully. U can Login now.</div>";
			// echo "Signed up Successfully. U can Login now.";
			header('location:http://localhost/e-learningproject/login.php');
		} else {
			
			// $_SESSION['add'] = "<div class='error'>Failed to Add User.</div>";
			//Redirect Page to Add Admin
			header('location:http://localhost/e-learningproject/signup.php');
		}
	}

	?>