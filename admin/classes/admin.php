<?php 
//  include('../includes/navbar.php'); 

 class admin
 {


 	public $host="localhost";
 	public $username="root";
 	public $pass="";
 	public $db_name="e-learningproject";
 	public $conn;
 	public $user_details;
 	public $course_count=0;
 	public $video_count=0;
 	

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}
// ===================================================================================
 	public function show_users()     // function to display users list in table on admin main page
 	{
 		$query="select * from login_site";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->user_details[]=$row;
 		}
 		return $this->user_details;
 	}
 	
// =================================================================================================================

 	public function display_course_count()           //function to display number of courses available in database
 	{
 		$query="select * from programming_languages";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			// $this->user_details[]=
 			$this->course_count++;
 		}
 		// return $this->user_details;
 		print_r($this->course_count);

 	}

// =================================================================================================================


	public function display_video_count()
	{
		$query="select * from videos";
		// $query="select * from video_info";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->video_count++;
 		}
 		print_r($this->video_count);

	} 


}
 ?>