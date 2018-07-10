<!DOCTYPE html>
<html>
<head>
	
<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
</head>
<body>





<?php
include 'dbconnection.php';

$userIC=$_POST['userIC'];
$userName=$_POST['userName'];
$room_type=$_POST['room_type'];

$update1= "UPDATE booking set status='Check In' WHERE guestIC='".$userIC."'";

$update2= "UPDATE booking set status='Check In' WHERE userIC='".$userIC."'";

$result1 = $conn->query($update1);
$result2 = $conn->query($update2);

if($result1)
{
	if($room_type!='Regular')
		{
			echo "<script src='room1_checkIn.js'></script>";
			//echo"<script>alert('This user $userName room is set to $room_type ')</script>";

			//header("refresh:1 url=index_admin.php");
		}

	else
		{ 
			//echo"<script>alert('This user $userName room is set to $room_type ')</script>"
			echo"<script src='room2_checkIn.js'></script>";
			//header("refresh:1 url=index_admin.php");
		}

}

else if($result2)
{
	if($room_type!='Regular')
		{
			echo "<script src='room1_checkIn.js'></script>";
			//echo"<script>alert('This user $userName room is set to $room_type ')</script>";
			//header("refresh:1 url=index_admin.php");
		}
	else
		{ 
			echo "<script src='room2_checkIn.js'></script>";	
			//echo"<script>alert('This user $userName room is set to $room_type ')</script>";
			//header("refresh:1 url=index_admin.php");
		}
}

else
{
	echo"Record Cannot Be Update At This Moment.";
}
?>

</body>
</html>
