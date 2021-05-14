<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="project";
	
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];

	$sql_query = "INSERT INTO registerform (username,email,mobile,password) VALUES ('$username','$email','$mobile','$password')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "Registration successful !";
		echo "<script> window.location.assign('login.html'); </script>";
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
