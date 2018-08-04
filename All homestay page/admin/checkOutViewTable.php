
<?php
include 'dbconnection.php'; 
include 'header_admin.php';

?>

<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>

<script type="text/javascript">
	//initialize Firebase
			var config = {
		    apiKey: "AIzaSyCppORwD4pq5jkp_E176yCvh2SeG9QTs40",
		    authDomain: "smart-homestay.firebaseapp.com",
		    databaseURL: "https://smart-homestay.firebaseio.com",
		    projectId: "smart-homestay",
		    storageBucket: "smart-homestay.appspot.com",
		    messagingSenderId: "747776544912"
		  };
		  firebase.initializeApp(config);
		  var ref = firebase.app().database().ref('House');
</script>

<script type="text/javascript">
	function checkOut() 
	{
	var userIC = document.getElementById("userIC").value;
	var firstName = document.getElementById("firstName").value;
	var lastName = document.getElementById("lastName").value;
	var room_type = document.getElementById("room_type").value;
	
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'userIC=' + userIC  + '&firstName=' + firstName + '&lastName=' + lastName + '&room_type=' + room_type;

	// window.alert(firstName+" "+lastName);
	
if(room_type!='Regular')
		{
			var roomRef1 = ref.child('Room1');

			roomRef1.update({
			 '/status1': false,
			})
			.catch(function (err) {
			 console.log('one of these updates failed', err);
			});

			checkOutDatabase();
		}

else
		{ 
			var roomRef2 = ref.child('Room2');

			roomRef2.update({
			 '/status2': false, 
			})
			.catch(function (err) {
			 console.log('one of these updates failed', err);
			});

			checkOutDatabase();
		}

function checkOutDatabase(){
// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "checkOut.php",
		data: dataString,
		cache: false,
		success: function(data) {

		var userName = firstName+" "+lastName;

		window.location.href='checkOutReceipt_All.php';

		alert("This user " + userName + " is check out from " + room_type);


		//alert("Your reservation has been place");

		return false;
		}
		});
	}
		

		return false;
	}
</script>

<style type="text/css">
table {
    margin:5px auto; width:50%
    border-collapse: collapse;
    background-color: #ffffff;
    opacity: 0.7;
}

table, td, th {
    border: 3px solid black;
    align-items: center;
}
th, td {
    padding: 15px;
    text-align: center;
    color: black;
}
th {
    
    color: black;
}
td:hover{background-color:#bfa145}	


	
</style>

<section id="content" class="column-right">
<p>
<fieldset>


<div class="search_form">

<h3>Enter info below to perform check out:</h3>

<br>
<form method="POST" action="checkOutViewTable.php">
<tr>
<td>
<b>Identity Card Number(NRIC):</b><input type="text" name="userIC" style="width:150px;height:20px" ><br>
<!--<br><h3>OR</h3>
<b>Guest Identity Card Number(NRIC):</b><input type="text" name="guestIC" style="width:150px;height:20px"  ><br>
</td>
-->
<td>
<br><input type="submit"  value="Search" style="height:30px;width:90px">
</td>
</tr>
</form>
<br>
</td>
</div>
</fieldset>
</p>
</section>	


<div class="update_form">
<?php


$userIC=$_POST['userIC'];



// $room1="Deluxe";
// $room2="Regular";
$status="Check In";

$sql1 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$status.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

$sql2 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$status.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');

// $sql3 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$status.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

// $sql4 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$status.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');





//b.userIC=u.userIC AND u.userIC="'.$icNo.'" OR



if($sql1->num_rows)
{
echo"<form >
				<table width=auto height='209' border='1'>
  				<tr>
  				<th  align='center'>IDENTITY CARD NUMBER(NRIC)</th>
    			<th  align='center'>FULLNAME</th>
    			<th  align='center'>ADDRESS</th>
    			<th  align='center'>PHONE NUMBER</th>
    			<th  align='center'>EMAIL</th>
    			<th  align='center'>RESERVE DATE</th>
    			<th  align='center'>ROOM TYPE</th>

    			<th width='150' align='center'>OPTION</th>
    			</tr>";

		while($row = mysqli_fetch_array($sql1))
		{
	
		$icno = $_POST['userIC'];
		$fname = $row['firstName'].' '.$row['lastName'];
		$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
		$phone = $row['phoneNum'];
		$email = $row['email'];
		$date = 'From '.$row['startDate'].' until '.$row['endDate'];
		$room_type=$row['room_type'];

		$firstName  = $row['firstName'];
		$lastName = $row['lastName'];
		
			echo"
    			<tr>
    			<td>$icno</td>
    			<td>$fname</td>
   				<td>$address</td>
   				<td>$phone</td>
				<td>$email</td>
				<td>$date</td>
				<td>$room_type</td>
   				
				<td align='center'>

				<input type='hidden' id='userIC' value=$icno>
				<input type='hidden' id='firstName' value=$firstName>
				<input type='hidden' id='lastName' value=$lastName>
				<input type='hidden' id='room_type' value=$room_type>		
	            	
		       	            
		            <br><br><input type='submit' class='btn btn-default' onclick='checkOut()' value='Check Out'>
				
							
				</td>
				</tr>";
			
		}
				"</table>
				
				</form>";
				
	}

	else if($sql2->num_rows)
		{
		echo"<form >
						<table width='auto' height='209' border='1'>
		  				<tr>
		  				<th  align='center'>IDENTITY CARD NUMBER(NRIC)</th>
		    			<th  align='center'>FULLNAME</th>
		    			<th  align='center'>ADDRESS</th>
		    			<th  align='center'>PHONE NUMBER</th>
		    			<th  align='center'>EMAIL</th>
		    			<th  align='center'>RESERVE DATE</th>
		    			<th  align='center'>ROOM TYPE</th>
		    			<th  align='center'>OPTION</th>
		    			</tr>";

		    		
				while($row = mysqli_fetch_array($sql2))
				{
			
				$icno = $_POST['userIC'];
				$fname = $row['firstName'].' '.$row['lastName'];
				$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
				$phone = $row['phoneNum'];
				$email = $row['email'];
				$date = 'From '.$row['startDate'].' until '.$row['endDate'];
				$room_type=$row['room_type'];

				$firstName  = $row['firstName'];
				$lastName = $row['lastName'];

				
					echo"
		    			<tr>
		    			<td>$icno</td>
		    			<td>$fname</td>
		   				<td>$address</td>
		   				<td>$phone</td>
		   				<td>$email</td>
		   				<td>$date</td>
						<td>$room_type</td>
		   			
		   				
		   				
						<td align='center'>

						<input type='hidden' id='userIC' value=$icno>
						<input type='hidden' id='firstName' value=$firstName>
						<input type='hidden' id='lastName' value=$lastName>
						<input type='hidden' id='room_type' value=$room_type>
				            
				            
				            <br><br><input type='submit' class='btn btn-default' onclick='checkOut()' value='Check Out'>
						
						</td>
						</tr>";
					
				}
						"</table>
						
						</form>";

						
			}

// 	else if($sql3->num_rows)
// 		{
// 		echo"<form  action='checkOut.php' method='POST'>
// 						<table width='auto' height='209' border='1'>
// 		  				<tr>
// 		  				<th  align='center'>IDENTITY CARD NUMBER(NRIC)</th>
// 		    			<th  align='center'>FULLNAME</th>
// 		    			<th  align='center'>ADDRESS</th>
// 		    			<th  align='center'>PHONE NUMBER</th>
// 		    			<th  align='center'>EMAIL</th>
// 		    			<th  align='center'>RESERVE DATE</th>
// 		    			<th  align='center'>ROOM TYPE</th>
// 		    			<th  align='center'>OPTION</th>
// 		    			</tr>";

		    		
// 				while($row = mysqli_fetch_array($sql3))
// 				{
			
// 				$icno = $_POST['userIC'];
// 				$fname = $row['firstName'].' '.$row['lastName'];
// 				$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
// 				$phone = $row['phoneNum'];
// 				$email = $row['email'];
// 				$date = 'From '.$row['startDate'].' until '.$row['endDate'];				
// 				$room_type=$row['room_type'];
				

				
// 					echo"
// 		    			<tr>
// 		    			<td>$icno</td>
// 		    			<td>$fname</td>
// 		   				<td>$address</td>
// 		   				<td>$phone</td>
// 		   				<td>$email</td>
// 		   				<td>$date</td>		   				
// 						<td>$room_type</td>
		   			
		   				
		   				
// 						<td align='center'>
// 						<input type='hidden' name='userName' value=$fname>
// 						<input type='hidden' name='userIC' value=$icno>
// 						<input type='hidden' name='room_type' value=$room_type>
				            
// 				            <br><br><input type='submit' class='btn btn-default' value='Check Out'>
						
// 						</td>
// 						</tr>";
					
// 				}
// 						"</table>
						
// 						</form>";

						
// 			}

// else if($sql4->num_rows)
// 		{
// 		echo"<form  action='checkOut.php' method='POST'>
// 						<table width='auto' height='209' border='1'>
// 		  				<tr>
// 		  				<th  align='center'>IDENTITY CARD NUMBER(NRIC)</th>
// 		    			<th  align='center'>FULLNAME</th>
// 		    			<th  align='center'>ADDRESS</th>
// 		    			<th  align='center'>PHONE NUMBER</th>
// 		    			<th  align='center'>EMAIL</th>
// 		    			<th  align='center'>RESERVE DATE</th>
// 		    			<th  align='center'>ROOM TYPE</th>
// 		    			<th  align='center'>OPTION</th>
// 		    			</tr>";

		    		
// 				while($row = mysqli_fetch_array($sql4))
// 				{
			
// 				$icno = $_POST['userIC'];
// 				$fname = $row['firstName'].' '.$row['lastName'];
// 				$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
// 				$phone = $row['phoneNum'];
// 				$email = $row['email'];
// 				$date = 'From '.$row['startDate'].' until '.$row['endDate'];				
// 				$room_type=$row['room_type'];



				
// 					echo"
// 		    			<tr>
// 		    			<td>$icno</td>
// 		    			<td>$fname</td>
// 		   				<td>$address</td>
// 		   				<td>$phone</td>
// 		   				<td>$email</td>
// 		   				<td>$date</td>		   				
// 						<td>$room_type</td>
		   			
		   				
		   				
// 						<td align='center'>
// 						<input type='hidden' name='userName' value=$fname>
// 						<input type='hidden' name='userIC' value=$icno>
// 						<input type='hidden' name='room_type' value=$room_type>
				            
// 				            <br><br><input type='submit' class='btn btn-default' value='Check Out'>
						
// 						</td>
// 						</tr>";
					
// 				}
// 						"</table>
						
// 						</form>";

						
// 			}




	else
	{
		echo "<script>
						alert('Record Not Found')
						
					</script>";
			//header("refresh:0 url=admin_search.php");
			

				$sql1->close();	
				$sql2->close();	
				// $sql3->close();	
				// $sql4->close();	
	} 
	
	
echo "<br><br>";
?>

</div>

</fieldset>
</p>
<article class="expanded">
		</article>

	</section>

	</section>


