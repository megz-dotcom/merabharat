<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="mera_bharat_feedback";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//how to check connection
if (!$conn)
{
	die("connection failed:".mysqli_connect_error());

}
if (isset($_POST['save'])) {
    $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

//	$first_name=$_POST['name'];
//	$last_name=$_POST['email'];
//	$gender=$_POST['gender'];
//	$email=$_POST['email'];
//	$mobile=$_POST['mobile'];

	//$sql_query="INSERT INTO test_mydata (first_name,last_name,gender,email,mobile) VALUES ('$first_name','$last_name','$gender','$email','$mobile')";
    $sql_query="INSERT INTO feedback (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";

	if(mysqli_query($conn,$sql_query))
	{
		echo "New Details Entry inserted successfully !";
	}
	else
	{
		echo "Error: ". $sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>