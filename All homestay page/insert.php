<?php

//insert.php

include 'dbconnection.php';
$guestIC = $_POST['guestIC'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address =$_POST['address'];
$postcode =$_POST['postcode'];
$city =$_POST['city'];
$state=$_POST['state'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$num_of_person= $_POST['num_of_person'];
$startDate= $_POST['startDate'];
$endDate= $_POST['endDate'];
$room_type=$_POST['room'];
$userIC=$_POST['userIC'];

if($userIC)
	{
		

			$sql2 ="INSERT INTO booking (userIC, startDate, endDate, num_of_person, room_type) 
			VALUES ('$userIC', '$startDate', '$endDate', '$num_of_person','$room_type' )";
			$result2 = $conn->query($sql2);

			

			if($result2)
			{

				$sql3 ="INSERT INTO events (start_event, end_event) 
										VALUES ('$startDate', '$endDate')";
										$result3 = $conn->query($sql3);
				header("refresh:0 url=index.php");
				echo "<script>alert('Your reservation has been place');</script>";

								
			}
			else
			{
				//header("refresh:0 url=index.php");
				echo "<script>alert('There are problem on updating the database ');</script>";
			}

	}
else
{
		$sql ="INSERT INTO guests (guestIC, firstName, lastName, address, postcode, city,state, phoneNum, email) 
			VALUES ('$guestIC', '$firstName','$lastName','$address','$postcode','$city','$state', '$phoneNum', '$email')";
			$result = $conn->query($sql);


			if($result)
			{
					$sql2 ="INSERT INTO booking (guestIC, startDate, endDate, num_of_person, room_type) 
					VALUES ('$guestIC', '$startDate', '$endDate', '$num_of_person','$room_type')";
					$result2 = $conn->query($sql2);


					$sql3 ="INSERT INTO events (start_event, end_event) 
					VALUES ('$startDate', '$endDate')";
					$result3 = $conn->query($sql3);


			

			header("refresh:0 url=index.php");
								echo "<script>alert('Your reservation has been place');</script>";
			}

			else
			{
				header("refresh:0 url=index.php");
				echo "<script>alert('There are problem on updating the database ');</script>";
			}

			
											
}



	



?>
