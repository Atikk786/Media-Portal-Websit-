<?php
if(isset($_POST['Login'])){
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		echo "Invalid Details! Please Try Again with correct User Name and Password";
	}else{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$local='localhost';
	$name='root';
	$pass='';
	$db='star_india';
	$conn=mysqli_connect($local,$name,$pass,$db);
	$query="select * from Reg where user_name='$username' and User_password='$password'";
	$sql=mysqli_query($conn,$query);
	$rows=mysqli_num_rows($sql);
	if($rows==1){
		//echo "Login successful";
		header("location:IndiaNews.html");
	}
	else{
		echo "Invalid Details! Please Try Again with correct User Name and Password";
	}
}
}	
?>