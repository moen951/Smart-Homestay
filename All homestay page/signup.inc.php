<?php
//session_start();  
include 'dbconnection.php';
$userIC = $_GET['userIC'];
$username = $_GET['username'];
$email = $_GET['email'];
$psw = $_GET['psw'];
$psw2 =$_GET['psw2'];


if ($psw==$psw2) 
{
	$sql ="INSERT INTO users (userIC, username, pword, email,role) 
	VALUES ('$userIC', '$username', '$psw', '$email', '2')";
	$result = $conn->query($sql);

	header("refresh:0 url=index.php");
						echo "<script>
								
   								 alert('Signup Successfully, Please Login Again');
									
									</script>";
}

else
{
echo "<script>
								
   	alert('Password Not Match');
									
	</script>";

}