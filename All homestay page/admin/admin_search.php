
<?php
include 'dbconnection.php'; 
include 'header_admin.php';

?>

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

<h3>Enter info below:</h3>

<br>
<form method="POST" action="admin_search.php">
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



$status="Empty";

$sql1 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$status.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

$sql2 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$status.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');



//b.userIC=u.userIC AND u.userIC="'.$icNo.'" OR



if($sql1->num_rows)
{
echo"<form  action='checkIn.php' method='POST'>
				<table width=auto height='209' border='1'>
  				<tr>
  				<th  align='center'>IDENTITY CARD NUMBER(NRIC)</th>
    			<th  align='center'>FULLNAME</th>
    			<th  align='center'>ADDRESS</th>
    			<th  align='center'>PHONE NUMBER</th>
    			<th  align='center'>EMAIL</th>
    			<th  align='center'>RESERVE DATE</th>
    			<th  align='center'>NUMBER OF PERSON</th>
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
		$num_of_person=$row['num_of_person'];
		$room_type=$row['room_type'];
		
			echo"
    			<tr>
    			<td>$icno</td>
    			<td>$fname</td>
   				<td>$address</td>
   				<td>$phone</td>
				<td>$email</td>
				<td>$date</td>
				<td>$num_of_person</td>
				<td>$room_type</td>
   				
				<td align='center'>
				<input type='hidden' name='userIC' value=$icno>
				<input type='hidden' name='userName' value=$fname>
				<input type='hidden' name='room_type' value=$room_type>

		            <br><br><input type='submit' class='btn btn-default' value='Check In'>
				
							
				</td>
				</tr>";
			
		}
				"</table>
				
				</form>";
				
	}

	else if($sql2->num_rows)
		{
		echo"<form  action='checkIn.php' method='POST'>
						<table width='auto' height='209' border='1'>
		  				<tr>
		  				<th  align='center'>IDENTITY CARD NUMBER(NRIC)</th>
		    			<th  align='center'>FULLNAME</th>
		    			<th  align='center'>ADDRESS</th>
		    			<th  align='center'>PHONE NUMBER</th>
		    			<th  align='center'>EMAIL</th>
		    			<th  align='center'>RESERVE DATE</th>
		    			<th  align='center'>NUMBER OF PERSON</th>
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
				$num_of_person=$row['num_of_person'];
				$room_type=$row['room_type'];


				
					echo"
		    			<tr>
		    			<td>$icno</td>
		    			<td>$fname</td>
		   				<td>$address</td>
		   				<td>$phone</td>
		   				<td>$email</td>
		   				<td>$date</td>
		   				<td>$num_of_person</td>
		   				<td>$room_type</td>
					
		   			
		   				
		   				
						<td align='center'>

						<input type='hidden' name='userIC' value=$icno>
						<input type='hidden' name='userName' value=$fname>
						<input type='hidden' name='room_type' value=$room_type>
				            
				            
				            <br><br><input type='submit' class='btn btn-default' value='Check In'>
						
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


