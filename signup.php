<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$Email=$_POST['Email'];
	$Country=$_POST['country'];
	$host='localhost';
	$name='root';
	$pass='';
	$db='star_india';
	$conn=mysqli_connect($host,$name,$pass,$db);
	if($conn){
		$query="insert into Reg values('$username','$password','$Email','$Country')";
		$sql=mysqli_query($conn,$query);
		header("location:login1.html");
		//echo "Inserted";
		
	}else{
		echo "Invalid Details Please Try Again";
	}
?>