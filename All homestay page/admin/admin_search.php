
<?php
include 'dbconnection.php'; 
include 'header_admin.php';

?>


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
<?php include 'footer_admin.php';?>

<div class="update_form">
<?php


$userIC=$_POST['userIC'];



$status="Empty";

$sql1 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$status.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

$sql2 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$status.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');



//b.userIC=u.userIC AND u.userIC="'.$icNo.'" OR



if($sql1->num_rows)
{
echo"<form  action='deletestudent.php' method='GET'>
				<table width='1000' height='209' border='1'>
  				<tr>
  				<th width='100' align='center'>IDENTITY CARD NUMBER(NRIC)</th>
    			<th width='100' align='center'>FIRST NAME</th>
    			<th width='100' align='center'>LAST NAME</th>
    			<th width='200' align='center'>ADDRESS</th>
    			<th width='100' align='center'>PHONE NUMBER</th>
    			<th width='100' align='center'>OPTION</th>
    			</tr>";

		while($row = mysqli_fetch_array($sql1))
		{
	
		$icno = $_POST['userIC'];
		$fname = $row['firstName'];
		$lname = $row['lastName'];
		$address = $row['address'];
		$phone = $row['phoneNum'];
		
			echo"
    			<tr>
    			<td>$icno</td>
    			<td>$fname</td>
    			<td>$lname</td>
   				<td>$address</td>
   				<td>$phone</td>
			
   			
   				
   				
				<td align='center'><a href='admin_userdetail.php?detail=$icno'>
				<img src='icon/detail.png' height= 27px; width= 27px;><br>Details</a>				
				</td>
				</tr>";
			
		}
				"</table>
				
				</form>";
				
	}

	else if($sql2->num_rows)
		{
		echo"<form  action='deletestudent.php' method='GET'>
						<table width='1000' height='209' border='1'>
		  				<tr>
		  				<th width='100' align='center'>IDENTITY CARD NUMBER(NRIC)</th>
		    			<th width='100' align='center'>FIRST NAME</th>
		    			<th width='100' align='center'>LAST NAME</th>
		    			<th width='200' align='center'>ADDRESS</th>
		    			<th width='100' align='center'>PHONE NUMBER</th>
		    			<th width='100' align='center'>OPTION</th>
		    			</tr>";

		    		
				while($row = mysqli_fetch_array($sql1))
				{
			
				$icno = $_POST['userIC'];
				$fname = $row['firstName'];
				$lname = $row['lastName'];
				$address = $row['address'];
				$phone = $row['phoneNum'];
				
					echo"
		    			<tr>
		    			<td>$icno</td>
		    			<td>$fname</td>
		    			<td>$lname</td>
		   				<td>$address</td>
		   				<td>$phone</td>
					
		   			
		   				
		   				
						<td align='center'><a href='admin_userdetail.php?detail=$icno'>
						<img src='icon/detail.png' height= 27px; width= 27px;><br>Details</a>				
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


