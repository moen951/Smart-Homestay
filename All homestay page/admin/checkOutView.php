
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


