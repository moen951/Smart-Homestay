<?php

//insert.php

include 'dbconnection.php';
$guestIC = $_GET['guestIC'];
$username = $_GET['username'];
$email = $_GET['email'];
$phoneNum = $_GET['phoneNum'];
$num_of_person= $_GET['num_of_person'];
$startDate= $_GET['startDate'];
$endDate= $_GET['endDate'];
$userIC=0;




	$sql ="INSERT INTO guests (guestIC, username, phoneNum, email) 
	VALUES ('$guestIC', '$username', '$phoneNum', '$email')";
	$result = $conn->query($sql);


	$sql2 ="INSERT INTO booking (guestIC, startDate, endDate, num_of_person) 
	VALUES ('$guestIC', '$startDate', '$endDate', '$num_of_person')";
	$result2 = $conn->query($sql2);

	/*header("refresh:0 url=index.php");
						echo "<script>
								
   								 alert('Signup Successfully, Please Login Again');
									
									</script>";
									*/



?>
