
<?php
include 'dbconnection.php'; 
include 'header_admin.php';

?>


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



$room1="Deluxe";
$room2="Regular";

$sql1 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$room1.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

$sql2 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$room1.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');

$sql3 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$room2.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

$sql4 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$room2.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');





//b.userIC=u.userIC AND u.userIC="'.$icNo.'" OR



if($sql1->num_rows)
{
echo"<form  action='checkOut.php' method='POST'>
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
		$roomType=$row['status'];
		
			echo"
    			<tr>
    			<td>$icno</td>
    			<td>$fname</td>
   				<td>$address</td>
   				<td>$phone</td>
				<td>$email</td>
				<td>$date</td>
				<td>$roomType</td>
   				
				<td align='center'>
				<input type='hidden' name='userIC' value=$icno>
				<input type='hidden' name='room' value=$roomType>		
	            	
		       	            
		            <br><br><input type='submit' class='btn btn-default' value='Check Out'>
				
							
				</td>
				</tr>";
			
		}
				"</table>
				
				</form>";
				
	}

	else if($sql2->num_rows)
		{
		echo"<form  action='checkOut.php' method='POST'>
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
				$roomType=$row['status'];



				
					echo"
		    			<tr>
		    			<td>$icno</td>
		    			<td>$fname</td>
		   				<td>$address</td>
		   				<td>$phone</td>
		   				<td>$email</td>
		   				<td>$date</td>
						<td>$roomType</td>
		   			
		   				
		   				
						<td align='center'>

						<input type='hidden' name='userIC' value=$icno>
						<input type='hidden' name='room' value=$roomType>
				            
				            
				            <br><br><input type='submit' class='btn btn-default' value='Check Out'>
						
						</td>
						</tr>";
					
				}
						"</table>
						
						</form>";

						
			}

	else if($sql3->num_rows)
		{
		echo"<form  action='checkOut.php' method='POST'>
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

		    		
				while($row = mysqli_fetch_array($sql3))
				{
			
				$icno = $_POST['userIC'];
				$fname = $row['firstName'].' '.$row['lastName'];
				$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
				$phone = $row['phoneNum'];
				$email = $row['email'];
				$date = 'From '.$row['startDate'].' until '.$row['endDate'];				
				$roomType=$row['status'];
				

				
					echo"
		    			<tr>
		    			<td>$icno</td>
		    			<td>$fname</td>
		   				<td>$address</td>
		   				<td>$phone</td>
		   				<td>$email</td>
		   				<td>$date</td>		   				
						<td>$roomType</td>
		   			
		   				
		   				
						<td align='center'>

						<input type='hidden' name='userIC' value=$icno>
						<input type='hidden' name='room' value=$roomType>
				            
				            <br><br><input type='submit' class='btn btn-default' value='Check Out'>
						
						</td>
						</tr>";
					
				}
						"</table>
						
						</form>";

						
			}

else if($sql4->num_rows)
		{
		echo"<form  action='checkOut.php' method='POST'>
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

		    		
				while($row = mysqli_fetch_array($sql4))
				{
			
				$icno = $_POST['userIC'];
				$fname = $row['firstName'].' '.$row['lastName'];
				$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
				$phone = $row['phoneNum'];
				$email = $row['email'];
				$date = 'From '.$row['startDate'].' until '.$row['endDate'];				
				$roomType=$row['status'];



				
					echo"
		    			<tr>
		    			<td>$icno</td>
		    			<td>$fname</td>
		   				<td>$address</td>
		   				<td>$phone</td>
		   				<td>$email</td>
		   				<td>$date</td>		   				
						<td>$roomType</td>
		   			
		   				
		   				
						<td align='center'>

						<input type='hidden' name='userIC' value=$icno>
						<input type='hidden' name='room' value=$roomType>
				            
				            <br><br><input type='submit' class='btn btn-default' value='Check Out'>
						
						</td>
						</tr>";
					
				}
						"</table>
						
						</form>";

						
			}




	else
	{
		echo "<script>
						alert('Record Not Found')
						
					</script>";
			//header("refresh:0 url=admin_search.php");
			

				$sql1->close();	
				$sql2->close();	
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

