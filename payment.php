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
	$card=$_POST['card'];
	$bank=$_POST['bank'];
	$expire=$_POST['expire'];
	$mobile=$_POST['mobile'];
	$cvv=$_POST['cvv'];
	$password=$_POST['password'];


	$sql_query = "INSERT INTO payment (card,bank,expire,mobile,cvv,password) VALUES ('$card','$bank','$expire','$mobile','$cvv','$password')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "Proceed to payment !";
		echo "<script> window.location.assign('index.html'); </script>";
		
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
