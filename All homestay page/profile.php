<?php include 'header.php';?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript">
    // Launch this when file was fully loaded
    $(document).ready(function() {
        // Hide states dropdown
        $("#state,#showResult").hide();
        // Put all West Malaysia states in a variable
        var wmStates = "<option>Perlis</option><option>Kedah</option><option>Perak</option><option>Pulau Pinang</option><option>Selangor</option><option>Melaka</option><option>Negeri Sembilan</option><option>Johor</option><option>Pahang</option><option>Terengganu</option><option>Kelantan</option>";
        // Put all East Malaysia states in a variable
        var emStates = "<option>Sarawak</option><option>WP Labuan</option><option>Sabah</option>";
        // Listen to #region dropdown change
        $("#region").change(function() {
            // Get the selected value
            var selected = $(this).val();
            // Show states dropdown
            $("#state,#showResult").show();
            // If West Malaysia selected, show West Malaysia states
            if (selected == 'West Malaysia') {
                // Show dropdown set for West Malaysia
                $("#state").html(wmStates);
            }
            // If East Malaysia selected, show East Malaysia states
            else if (selected == 'East Malaysia') {
                // Show dropdown set for East Malaysia
                $("#state").html(emStates);
            }
            // If -- Region -- is selected
            else if (selected == '-- Select Region --') {
                // Hide #states, button & #result
                $("#state,#showResult,#result").hide();
                // Ask user to select a region
                alert('Please select your region');
            }
        });
        // Listen to button click
        $("#showResult").click(function() {
            // Get selected value and put in variables
            var regionSelected = $("#region").val();
            var stateSelected = $("#state").val();
            // Put the variables inside the #result div
            $("#result").html("Region: " + regionSelected + "<br/>State: " + stateSelected);
        });
        
    });
    </script>
<?php

$sql1 = mysqli_query($conn,'SELECT * FROM profile WHERE userIC = "'.$_SESSION['userIC'].'"');

if($sql1->num_rows)
{
  while($row = mysqli_fetch_array($sql1))
  {
  
    $userIC = $row['userIC'];
    $fname = $row['firstName'];
    $lname= $row['lastName'];
    $address = $row['address'];
    $postcode=$row['postcode'];
    $city=$row['city'];
    $state=$row['state'];
    $phoneNum = $row['phoneNum'];
    $email = $row['email'];

    

    echo"
        <div id='information' class='spacer reserve-info '>
    <div class'container'>
    <div class='row'>

    <div class='col-sm-5 col-md-4'>
    <h3>Profile</h3>

        <form role='form' class='wowload fadeInRight' action= 'profile_update.php' method='POST' >

          <div class='form-group'>
                <input type='text' class='form-control'  placeholder='Identity Card Number(NRIC) ' name='userIC' value= '".$userIC."' required>
            </div>
            <div class='form-group'>
                <input type='text' class='form-control'  placeholder='First Name' name='firstName' value='".$fname."' required>
            </div>
            <div class='form-group'>
                <input type='text' class='form-control'  placeholder='Last Name' name='lastName' value='".$lname."' required>
            </div>
            <div class='form-group'>
                <input type='text' class='form-control'  placeholder'Address' name='address' value= '".$address."' required>
            </div>
            <div class='form-group'>
                <input type='text' class='form-control'  placeholder='Postcode' name='postcode' value='".$postcode."' required>
            </div>
            <div class='form-group'>
                <input type='text' class='form-control'  placeholder='City' name='city'  value='".$city."' required>
            </div>
            <div class='form-group'>
                <div class='row'>
                       
                <div class='col-xs-6'>
                <select id='region' class='form-control' >
                  <option id='please_select'>Select Region</option>
                 <option id='wm'>West Malaysia</option>
                 <option id='em'>East Malaysia</option>
                </select>
                <br>
                <select id='state' class='form-control' name='state' value= '".$state."' required></select>
                
                </div>
              </div>
            </div>
            <div class='form-group'>
                <input type='email' class='form-control'  placeholder='Email' name='email' value= '".$email."' required>
            </div>
            <div class='form-group'>
                <input type='Phone' class='form-control'  placeholder='Phone' name='phoneNum' value= '".$phoneNum."' required>
            </div>         
              </div>
            </div>
            
            <button class='btn btn-default' >Save</button>
        </form>    
    </div>
    </div>  
    </div>
    </div>
        ";

  }


}

else{

?>

<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">

<div class="col-sm-5 col-md-4">
<h3>Profile</h3>
    <form role="form" class="wowload fadeInRight" action= "profile_insert.php" method="POST" >


     <!--  <div class="form-group">
            <div class="row">
                   
            <div class="col-xs-6">
            <select class="form-control" name="title">
              <option>Title</option>
              <option>Mr.</option>
              <option>Mrs.</option>
              <option>Ms.</option>
            </select>
            </div></div>
        </div> -->
      <div class="form-group">
            <input type="text" class="form-control"  placeholder="Identity Card Number(NRIC) " name="userIC" value=<?php echo'"'.$_SESSION['userIC'].'"'; ?> required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="First Name" name="firstName" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Last Name" name="lastName" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Address" name="address" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Postcode" name="postcode" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="City" name="city" required>
        </div>
        <div class="form-group">
            <div class="row">
                   
            <div class="col-xs-6">
            <select id="region" class="form-control" >
              <option id="please_select">Select Region</option>
             <option id="wm">West Malaysia</option>
             <option id="em">East Malaysia</option>
            </select>
            <br>
            <select id="state" class="form-control" name="state" required></select>
            
            </div>
          </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phoneNum" required>
        </div>         
          </div>
        </div>
        
        <button class="btn btn-default" >Save</button>
    </form>    
</div>
</div>  
</div>
</div>


<?php

}

?>





<?php include 'footer.php';?>