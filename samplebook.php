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
	$theatre=$_POST['theatre'];
	$time=$_POST['time'];
	$seats=$_POST['seats'];
	$amount=$_POST['amount'];

	$sql_query = "INSERT INTO booking (theatre,time,seats,amount) VALUES ('$theatre','$time','$seats','$amount')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "Proceed to payment !";
		echo "<script> window.location.assign('payment.html'); </script>";
		
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
