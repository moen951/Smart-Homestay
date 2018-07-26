
<?php include 'header_admin.php';?>



<section id="content" class="column-right">
<p>
<fieldset>


<div class="search_form">

<h3>Enter info below to perform check in:</h3>

<br>
<form method="POST" action="admin_search.php">
<tr>
<td>
<b>Identity Card Number(NRIC):</b><input type="text" name="userIC" style="width:150px;height:20px" required><br>
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

<div id='calendar'></div>


<!-- <div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">

  <button class="btn btn-default"><a href="booking.php">Reserve Now.</a></button>

</div>
</div>
</div> -->





<?php //include 'footer_admin.php';?>
