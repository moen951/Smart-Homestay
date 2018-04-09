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




	$sql ="INSERT INTO guests (guestIC, firstName, lastName, address, postcode, city,state, phoneNum, email) 
	VALUES ('$guestIC', '$firstName','$lastName','$address','$postcode','$city','$state', '$phoneNum', '$email')";
	$result = $conn->query($sql);




	$sql2 ="INSERT INTO booking (guestIC, startDate, endDate, num_of_person) 
	VALUES ('$guestIC', '$startDate', '$endDate', '$num_of_person')";
	$result2 = $conn->query($sql2);


	echo $guestIC; 
	echo $firstName ;
	echo $lastName; 
	echo $address;
	echo $postcode ;
	echo $city ;
	echo $state;
	echo $email;
	echo $phoneNum;
	echo $num_of_person;
	echo $startDate;
	echo $endDate;

	/*header("refresh:0 url=index.php");
						echo "<script>
								
   								 alert('Signup Successfully, Please Login Again');
									
									</script>";
									*/



?>
