
<?php include 'header.php';?>

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



  
	




<?php include 'footer.php';?>
