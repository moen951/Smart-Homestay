<!DOCTYPE html>
<html>
<head>
	
<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
</head>
<body>





<?php
include 'dbconnection.php';

$userIC=$_POST['userIC'];
$room=$_POST['room'];

$update1= "UPDATE booking set status='".$room."' WHERE guestIC='".$userIC."'";

$update2= "UPDATE booking set status='".$room."' WHERE userIC='".$userIC."'";

$result1 = $conn->query($update1);
$result2 = $conn->query($update2);

if($result1)
{
	if($room!='Regular')
		{
			echo "<script src='room1_checkIn.js'></script>";
			echo"<script>alert('This user $userIC room is set to $room ')</script>";

			header("refresh:2 url=index_admin.php");
		}

	else
		{ 
			echo"<script>alert('This user $userIC room is set to $room ')</script>
			<script src='room2_checkIn.js'></script>";
			header("refresh:2 url=index_admin.php");
		}

}

else if($result2)
{
	if($room!='Regular')
		{
			echo "<script src='room1_checkIn.js'></script>";
			echo"<script>alert('This user $userIC room is set to $room ')</script>";
			header("refresh:2 url=index_admin.php");
		}
	else
		{ 
			echo "<script src='room2_checkIn.js'></script>";	
			echo"<script>alert('This user $userIC room is set to $room ')</script>";
			header("refresh:2 url=index_admin.php");
		}
}

else
{
	echo"Record Cannot Be Update At This Moment.";
}
?>

</body>
</html>
