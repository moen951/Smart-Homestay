
<?php include 'header.php';?>

<div id='calendar'></div>

<?php
  if(isset($_SESSION['userIC'])){ 
    
   
      echo $_SESSION['userIC'];
  
      } 
?>


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="login.inc.php" method="GET">
   

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="pword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pword" required>

      <button class= "button" type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="pword">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="signup.inc.php" method="GET">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="userIC"><b>Identity Card Number(NRIC)</b></label>
      <input type="text" placeholder="Enter Identity Card Number(NRIC)" name="userIC" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw2"><b>Re-Enter Password</b></label>
      <input type="password" placeholder="Re-Enter Password" name="psw2" required>

      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      
      
      <!--
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      -->

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');



</script>


<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">

<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control">
              <option>No. of Rooms</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control">
              <option>No. of Adult</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="expiry-year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4"></textarea>
        </div>
        <button class="btn btn-default">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->





<?php include 'footer.php';?>
