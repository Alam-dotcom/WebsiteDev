<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "user-registration";

$conn = mysqli_connect ($server, $user, $password, $db);
if($conn->connect_error){


die("connection failed".$conn->connect_error );}

else
{
    echo "Sucessfully";
}

if(isset($_POST['submit']))
$name="";
$email="";
$phno="";
$service="";
$budget="";
$guestlist="";
$date="";
$text="";
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$service = implode(',',$_POST['service']);
$budget = $_POST['budget'];
$guestlist = $_POST['guestlist'];
$date = $_POST['date'];
$text = $_POST['text'];

	$sql = "INSERT INTO booking_form(name, address, email, phno,service, budget,guestlist, date, text)
     VALUES('$name', '$address','$email','$phno','$service','$budget','$guestlist','$date','$text')";
	if($conn->query($sql)===TRUE){
		echo"<script>alert('Admin inserted Successfully')</script>";
	}
	else{

		echo "Error".$con->error;
	}
?>