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
$status="Check Out";
$room_type=$_POST['room_type'];

$update1= "UPDATE booking set status='".$status."' WHERE guestIC='".$userIC."'";

$update2= "UPDATE booking set status='".$status."' WHERE userIC='".$userIC."'";

$result1 = $conn->query($update1);
$result2 = $conn->query($update2);

if($result1)
{
	if($room_type!='Regular')
		{
			echo"<script src='room1_checkOut.js'></script>";
			echo"<script>alert('This user $userName  is check out from $room_type ')</script>";

			header("refresh:2 url=checkOutReceipt.php?userIC=$userIC");
		}

	else
		{ 

			echo "<script src='room2_checkOut.js'></script>";
			echo"<script>alert('This user $userName is check out from $room_type ')</script>";

		
			header("refresh:2 url=checkOutReceipt.php?userIC=$userIC");
		}

}

else if($result2)
{
	if($room!='Regular')
		{
			echo"<script src='room1_checkOut.js'></script>";
			echo"<script>alert('This user $userName is check out from $room ')</script>
			";
		
			header("refresh:2 url=index_admin.php");
		}
	else
		{ 
			echo"<script src='room2_checkOut.js'></script>";
			echo"<script>alert('This user $userName is check out from $room ')</script>
			";
		
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
