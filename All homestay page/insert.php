<?php

//insert.php

include 'dbconnection.php';
$guestIC = $_GET['guestIC'];
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$address =$_GET['address'];
$postcode =$_GET['postcode'];
$city =$_GET['city'];
$state=$_GET['state'];
$email = $_GET['email'];
$phoneNum = $_GET['phoneNum'];
$num_of_person= $_GET['num_of_person'];
$startDate= $_GET['startDate'];
$endDate= $_GET['endDate'];
//$userIC=$_GET['userIC'];

if(isset($_SESSION['userIC']))
	{
		

			$sql2 ="INSERT INTO booking (userIC, startDate, endDate, num_of_person) 
			VALUES ('$_SESSION['userIC']', '$startDate', '$endDate', '$num_of_person')";
			$result2 = $conn->query($sql2);

			$sql3 ="INSERT INTO events (start_event, end_event) 
			VALUES ('$startDate', '$endDate')";
			$result3 = $conn->query($sql3);


			

			header("refresh:0 url=index.php");
								echo "<script>alert('Your reservation has been place');</script>";
	}
else
{
		$sql ="INSERT INTO guests (guestIC, firstName, lastName, address, postcode, city,state, phoneNum, email) 
			VALUES ('$guestIC', '$firstName','$lastName','$address','$postcode','$city','$state', '$phoneNum', '$email')";
			$result = $conn->query($sql);




			$sql2 ="INSERT INTO booking (guestIC, startDate, endDate, num_of_person) 
			VALUES ('$guestIC', '$startDate', '$endDate', '$num_of_person')";
			$result2 = $conn->query($sql2);


			$sql3 ="INSERT INTO events (start_event, end_event) 
			VALUES ('$startDate', '$endDate')";
			$result3 = $conn->query($sql3);


			

			header("refresh:0 url=index.php");
								echo "<script>alert('Your reservation has been place');</script>";
											
}



	



?>
