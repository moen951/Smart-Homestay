<?php

//insert.php

include 'dbconnection.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address =$_POST['address'];
$postcode =$_POST['postcode'];
$city =$_POST['city'];
$state=$_POST['state'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$userIC=$_POST['userIC'];

if($userIC)
	{

		$sql= "UPDATE profile set firstName='".$firstName."' ,lastName='".$lastName."',address='".$address."',postcode='".$postcode."',city='".$city."',state='".$state."',email='".$email."' ,phoneNum='".$phoneNum."',email='".$email."' WHERE userIC='".$userIC."'";

			$result = $conn->query($sql);

			if($result)
			{
				header("refresh:0 url=index.php");
								echo "<script>alert('Your information has been update');</script>";
			}

			else
			{
				header("refresh:0 url=index.php");
								echo "<script>alert('There are problem on updating the database ');</script>";
			}
			
	}



	



?>
