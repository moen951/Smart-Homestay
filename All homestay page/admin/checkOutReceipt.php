
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

<h3>Enter info below to search receipt:</h3>

<br>
<form method="GET" action="checkOutReceipt.php">
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

function dateDifference($date_1 , $date_2 , $differenceFormat = '%d' )
		{
		    $datetime1 = date_create($date_1);
		    $datetime2 = date_create($date_2);
		    
		    $interval = date_diff($datetime1, $datetime2);
		    
		    return $interval->format($differenceFormat);
		    
		}


$userIC=$_GET['userIC'];



// $room1="Deluxe";
// $room2="Regular";
$status="Check Out";

$sql1 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$status.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

$sql2 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$status.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');

// $sql3 = mysqli_query($conn,'SELECT  g.*, b.* FROM  guests g , booking b WHERE status = "'.$status.'" AND  b.guestIC=g.guestIC AND g.guestIC="'.$userIC.'"');

// $sql4 = mysqli_query($conn,'SELECT p.* , b.* FROM profile p , booking b WHERE status = "'.$status.'" AND  b.guestIC=p.userIC AND p.userIC="'.$userIC.'"');





//b.userIC=u.userIC AND u.userIC="'.$icNo.'" OR



if($sql1->num_rows)
{



		while($row = mysqli_fetch_array($sql1))
		{
	
		$icno = $_GET['userIC'];
		$fname = $row['firstName'].' '.$row['lastName'];
		$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
		$phone = $row['phoneNum'];
		$email = $row['email'];
		$date = 'From '.$row['startDate'].' until '.$row['endDate'];
		$room_type=$row['room_type'];
		$total_day=dateDifference($row['startDate'],$row['endDate']);

		if($room_type!="Regular"){

				$price_room = mysqli_query($conn,'SELECT * FROM room WHERE room_type = "'.$room_type.'" ');
				while($row_price = mysqli_fetch_array($price_room))
				{
					$price= $row_price['price'];
					$total_price=$total_day* floatval($price);

					echo"

				
				<div align='justify'>
    			<br><h3 align='center'>Receipt</h3><br>
								
				<ul align='center' >
  				<li>IDENTITY CARD NUMBER(NRIC): $icno</li><br>
  				<li>FULLNAME: $fname</li><br>
				<li>ADDRESS: $address</li><br>
				<li>PHONE NUMBER: $phone</li><br>
				<li>EMAIL: $email</li><br>
				<li>DATE: $date</li><br>
				<li>ROOM TYPE: $room_type</li><br>
				<li>TOTAL PRICE: RM $total_price</li><br>
				<a href='' class='btn btn-default>
				<img src='icon/print.png' height= 27px; width= 27px;><br>Print Receipt</a>
				</ul>
				</div>

				";
				}
			}

		else{
			$price_room = mysqli_query($conn,'SELECT * FROM room WHERE room_type = "'.$room_type.'" ');
				while($row_price = mysqli_fetch_array($price_room))
				{
					$price= $row_price['price'];
					$total_price=$total_day* floatval($price);

					echo"

				
				<div align='justify'>
    			<br><h3 align='center'>Receipt</h3><br>
								
				<ul align='center' >
  				<li>IDENTITY CARD NUMBER(NRIC): $icno</li><br>
  				<li>FULLNAME: $fname</li><br>
				<li>ADDRESS: $address</li><br>
				<li>PHONE NUMBER: $phone</li><br>
				<li>EMAIL: $email</li><br>
				<li>DATE: $date</li><br>
				<li>ROOM TYPE: $room_type</li><br>
				<li>TOTAL PRICE: RM $total_price</li><br>
				<a href='' class='btn btn-default>
				<img src='icon/print.png' height= 27px; width= 27px;><br>Print Receipt</a>
				</ul>
				</div>

				";
				}
			}	
			
		}
				
				
	}


else if($sql2->num_rows)
		{
		
				while($row = mysqli_fetch_array($sql2))
				{
			
				$icno = $_GET['userIC'];
				$fname = $row['firstName'].' '.$row['lastName'];
				$address = $row['address'].', '.$row['postcode'].', '.$row['city'].', '.$row['state'];
				$phone = $row['phoneNum'];
				$email = $row['email'];
				$date = 'From '.$row['startDate'].' until '.$row['endDate'];
				$room_type=$row['room_type'];
				$total_day=dateDifference($row['startDate'],$row['endDate']);

					if($room_type!="Regular"){

							$price_room = mysqli_query($conn,'SELECT * FROM room WHERE room_type = "'.$room_type.'" ');
							while($row_price = mysqli_fetch_array($price_room))
							{
								$price= $row_price['price'];
								$total_price=$total_day* floatval($price);

								echo"

							
							<div align='justify'>
			    			<br><h3 align='center'>Receipt</h3><br>
											
							<ul align='center' >
			  				<li>IDENTITY CARD NUMBER(NRIC): $icno</li><br>
			  				<li>FULLNAME: $fname</li><br>
							<li>ADDRESS: $address</li><br>
							<li>PHONE NUMBER: $phone</li><br>
							<li>EMAIL: $email</li><br>
							<li>DATE: $date</li><br>
							<li>ROOM TYPE: $room_type</li><br>
							<li>TOTAL PRICE: RM $total_price</li><br>
							<a href='' class='btn btn-default>
							<img src='icon/print.png' height= 27px; width= 27px;><br>Print Receipt</a>
							</ul>
							</div>

							";
							}

							


					}
					else{
						$price_room = mysqli_query($conn,'SELECT * FROM room WHERE room_type = "'.$room_type.'" ');
							while($row_price = mysqli_fetch_array($price_room))
							{
								$price= $row_price['price'];
								$total_price=$total_day* floatval($price);

								echo"

							
							<div align='justify'>
			    			<br><h3 align='center'>Receipt</h3><br>
											
							<ul align='center' >
			  				<li>IDENTITY CARD NUMBER(NRIC): $icno</li><br>
			  				<li>FULLNAME: $fname</li><br>
							<li>ADDRESS: $address</li><br>
							<li>PHONE NUMBER: $phone</li><br>
							<li>EMAIL: $email</li><br>
							<li>DATE: $date</li><br>
							<li>ROOM TYPE: $room_type</li><br>
							<li>TOTAL PRICE: RM $total_price</li><br>
							<a href='' class='btn btn-default>
							<img src='icon/print.png' height= 27px; width= 27px;><br>Print Receipt</a>
							</ul>
							</div>

							";
							}
					
						}
							
				}

		}
	else
	{
		echo "<script>
						alert('Record Not Found')
						
					</script>";
			//header("refresh:0 url=admin_search.php");
			

				$sql1->close();	
				
				
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


