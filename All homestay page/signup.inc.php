<?php
//session_start();  
include 'dbconnection.php';
$userIC = $_GET['userIC'];
$username = $_GET['username'];
$email = $_GET['email'];
$psw = $_GET['psw'];
$psw2 =$_GET['psw2'];

$result =mysqli_query ($conn,'SELECT * FROM users WHERE userIC="'.$userIC.'" ');

$row=mysqli_fetch_array($result);

if($row['userIC'] == $userIC)
{
	header("refresh:0 url=index.php");
		echo "<script> alert('This user $userIC Identity Card Number(NRIC) has been signup. Please provide other user Identity Card Number(NRIC) ');</script>";

										
}else{

	if ($psw==$psw2) 
	{
		$psw_hash= md5($psw);
		$sql ="INSERT INTO users (userIC, username, pword, email,role) 
		VALUES ('$userIC', '$username', '$psw_hash', '$email', '2')";
		$result = $conn->query($sql);

		/*header("refresh:0 url=index.php");
							echo "<script>
									
	   								 alert('Signup Successfully, Please Login Again');
										
										</script>";

										*/
	}

	else
	{
		echo "<script>
										
		   	alert('Password Not Match');
											
			</script>";

	}

}

?>

