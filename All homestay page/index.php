
<?php include 'header.php';?>

<div id='calendar'></div>

<?php
  if(isset($_SESSION['userIC'])){ 
    
   
      echo $_SESSION['userIC'];
  
      } 
?>


<!-- The Modal -->
<div id="id01" class="modal">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

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
    <form role="form" class="wowload fadeInRight" action= "insert.php" method="GET" >
      <div class="form-group">
            <input type="text" class="form-control"  placeholder="Identity Card Number(NRIC)" name="guestIC">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name" name="username">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phoneNum">
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
            <select class="form-control" name="num_of_person">
              <option>No. of Adult</option>
              <option>1</option>
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
                <b>Start Date</b>
              <input type='date' name='startDate' style='width: 145px; height: 30px'>
              <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('startDate')[0].setAttribute('min', today);</script>
            </div>
           <b>    </b><b>     </b>
            <div class="col-xs-4">
               <b>End Date</b>
              <input type='date' name='endDate' style='width: 145px; height: 30px'>
              <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('endDate')[0].setAttribute('min', today);</script>
            </div>
           
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4"></textarea>
        </div>
        <button class="btn btn-default" >Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->





<?php include 'footer.php';?>
