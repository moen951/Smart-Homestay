<?php

//insert.php

include 'dbconnection.php';
$guestIC = $_POST['guestIC'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $firstName.' '.$lastName;
$address =$_POST['address'];
$postcode =$_POST['postcode'];
$city =$_POST['city'];
$state=$_POST['state'];
// $email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$num_of_person= $_POST['num_of_person'];
$startDate= $_POST['startDate'];
$endDate= $_POST['endDate'];
$room_type=$_POST['room'];
$status=$_POST['status'];



		$sql ="INSERT INTO guests (guestIC, firstName, lastName, address, postcode, city,state, phoneNum) 
			VALUES ('$guestIC', '$firstName','$lastName','$address','$postcode','$city','$state', '$phoneNum')";
			$result = $conn->query($sql);


			if($result)
			{
					$sql2 ="INSERT INTO booking (guestIC, startDate, endDate, num_of_person, room_type, status) 
					VALUES ('$guestIC', '$startDate', '$endDate', '$num_of_person','$room_type','$status')";
					$result2 = $conn->query($sql2);


					$sql3 ="INSERT INTO events (start_event, end_event) 
					VALUES ('$startDate', '$endDate')";
					$result3 = $conn->query($sql3);

					if($room_type!='Regular')
						{
							echo "<script src='room1_checkIn.js'></script>";
							echo"<script>alert('This user $userName room is set to $room_type ')</script>";

							header("refresh:2 url=index_admin.php");
						}

					else
						{ 
							echo"<script>alert('This user $userName room is set to $room_type ')</script>
							<script src='room2_checkIn.js'></script>";
							header("refresh:2 url=index_admin.php");
						}


			// header("refresh:0 url=index.php");
			// 					echo "<script>alert('Your reservation has been place');</script>";
			}

			else
			{
				header("refresh:0 url=index_admin.php");
				echo "<script>alert('There are problem on updating the database ');</script>";
			}

			
											



	



?>
