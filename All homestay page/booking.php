<?php include 'header.php';?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="bookingGuest.js"></script>
<script src="bookingUser.js"></script>
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

     <style type="text/css">
      
      .error {color: #FF0000;}
    </style>
<?php

if(isset($_SESSION['userIC']))
{


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
          <h3>Reservation</h3>
          <p><span class='error'>* required field</span></p>

              <form role='form' class='wowload fadeInRight' >


                <div class='form-group'>
                      <div class='row'>
                             
                      <div class='col-xs-6'>
                      <select class='form-control' name='title'>
                        <option>Title</option>
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Ms.</option>
                      </select>
                      </div></div>
                  </div>
                <div class='form-group'><span class='error'>*</span'
                      <input type='text' class='form-control'  placeholder='Identity Card Number(NRIC) ' id='userIC' value= '".$userIC."' required>
                  </div>
                  <div class='form-group'><span class='error'>*</span>
                      <input type='text' class='form-control'  placeholder='First Name' id='firstName' value='".$fname."' required>
                  </div>
                  <div class='form-group'><span class='error'>*</span>
                      <input type='text' class='form-control'  placeholder='Last Name' id='lastName' value='".$lname."' required>
                  </div>
                  <div class='form-group'><span class='error'>*</span>
                      <input type='text' class='form-control'  placeholder'Address' id='address' value= '".$address."' required>
                  </div>
                  <div class='form-group'><span class='error'>*</span>
                      <input type='text' class='form-control'  placeholder='Postcode' id='postcode' value='".$postcode."' required>
                  </div>
                  <div class='form-group'><span class='error'>*</span>
                      <input type='text' class='form-control'  placeholder='City' id='city'  value='".$city."' required>
                  </div>
                  <div class='form-group'>
                      <div class='row'>
                             
                      <div class='col-xs-6'><span class='error'>*</span>
                      <select id='region' class='form-control' >
                        <option id='please_select'>Select Region</option>
                       <option id='wm'>West Malaysia</option>
                       <option id='em'>East Malaysia</option>
                      </select>
                      <br>
                      <select id='state' class='form-control' id='state' value= '".$state."' required></select>
                      
                      </div>
                    </div>
                  </div>
                  <div class='form-group'><span class''error'>*</span>
                      <input type='email' class='form-control'  placeholder='Email' id='email' value= '".$email."' required>
                  </div>
                  <div class='form-group'><span class='error'>*</span>
                      <input type='Phone' class='form-control'  placeholder='Phone Number' id='phoneNum' value= '".$phoneNum."' required>
                  </div>         
                    </div>
                  </div>


                  <div class='form-group'>
                  <div class='row'>
                        
                  <div class='col-xs-6'><span class='error'>*</span>
                  <select class='form-control' id='num_of_person' required>
                    <option>No. of Adult</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  </div></div>
              </div>

              <div class='form-group'>
                  <div class='row'>
                        
                  <div class='col-xs-6'><span class='error'>*</span>
                  <select class='form-control' id='room' required>
                    <option>Room Type</option>
                    <option>Deluxe</option>
                    <option>Regular</option>
          
                  </select>
                  </div></div>
              </div>
              <div class='form-group'>
                  <div class='row'>
                    <div class='col-xs-6'>
                      <b>Start Date</b><span class='error'>*</span>
                    <input type='date' id='startDate' style='width: 160px; height: 30px' >
                    <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('startDate')[0].setAttribute('min', today);</script>
                  </div>
                 <b>    </b><b>     </b>
                  <div class='col-xs-6'>
                     <b>End Date</b><span class='error'>*</span>
                    <input type='date' id='endDate' style='width: 160px; height: 30px' >
                    <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('endDate')[0].setAttribute('min', today);</script>
                  </div>
                 
                </div>
              </div>
                  
                  <input  class='btn btn-default' id='submit' onclick='bookingUser()' type='button' value='Submit'>
              </form>    
          </div>
          </div>  
          </div>
          </div>
              ";

        }


      }
}
else
    {
      ?>

      <div id="information" class="spacer reserve-info ">
      <div class="container">
      <div class="row">

      <div class="col-sm-5 col-md-4">
      <h3>Reservation</h3>

      <p><span class="error">* required field</span></p>
          <form id="booking_form" name="booking_form" role="form" class="wowload fadeInRight" >


            
            <div class="form-group">
                  <div class="row">
                         
                  <div class="col-xs-6">
                  <select class="form-control" name="title">
                    <option>Title</option>
                    <option>Mr.</option>
                    <option>Mrs.</option>
                    <option>Ms.</option>
                  </select>
                  </div></div>
              </div>
            <div class="form-group"><span class="error">*</span>
                  <input type="text" class="form-control"  placeholder="Identity Card Number(NRIC) " name="guestIC" id="guestIC" required>

              </div>
              <div class="form-group"><span class="error">*</span>
                  <input type="text" class="form-control"  placeholder="First Name" name="firstName" id="firstName" required>
                  
              </div>
              <div class="form-group"><span class="error">*</span>
                  <input type="text" class="form-control"  placeholder="Last Name" name="lastName" id="lastName"required>
                  
              </div>
              <div class="form-group"><span class="error">*</span>
                  <input type="text" class="form-control"  placeholder="Address" name="address" id="address" required>
                  
              </div>
              <div class="form-group"> <span class="error">*</span>
                  <input type="text" class="form-control"  placeholder="Postcode" name="postcode" id="postcode" required>
                 
              </div>
              <div class="form-group"><span class="error">*</span>
                  <input type="text" class="form-control"  placeholder="City" name="city" id="city" required>
                  
              </div>
              <div class="form-group">
                  <div class="row">
                         
                  <div class="col-xs-6"><span class="error">*</span>
                  <select id="region" class="form-control" >
                    <option id="please_select">Select Region</option>
                   <option id="wm">West Malaysia</option>
                   <option id="em">East Malaysia</option>
                  </select>
                  <br>
                  <select id="state" class="form-control" name="state" id="state" required></select>
                  
                  </div>
                </div>
              </div>
              <div class="form-group"><span class="error">*</span>
                  <input type="email" class="form-control"  placeholder="Email" name="email" id="email" required>
                  
              </div>
              <div class="form-group"><span class="error">*</span>
                  <input type="Phone" class="form-control"  placeholder="Phone Number" name="phoneNum" id="phoneNum" required>
                  
              </div>        

              <div class="form-group">
                  <div class="row">
                        
                  <div class="col-xs-6"><span class="error">*</span>
                  <select class="form-control" name="num_of_person" id="num_of_person" required>
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
                        
                  <div class="col-xs-6"><span class="error">*</span>
                  <select class="form-control" name="room" id="room" required>
                    <option>Room Type</option>
                    <option>Deluxe</option>
                    <option>Regular</option>
          
                  </select>
                  </div></div>
              </div>
              <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                      <b>Start Date</b><span class="error">*</span>
                    <input type='date' name='startDate' id="startDate" style='width: 160px; height: 30px' >
                    <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('startDate')[0].setAttribute('min', today);</script>
                  </div>
                 <b>    </b><b>     </b>
                  <div class="col-xs-6">
                     <b>End Date</b><span class="error">*</span>
                    <input type='date' name='endDate' id="endDate" style='width: 160px; height: 30px' >
                    <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('endDate')[0].setAttribute('min', today);</script>
                  </div>
                 
                </div>
              </div>
              
              <!--
                <button class="btn btn-default" >Submit</button>
              -->
              <input  class="btn btn-default" id="submit" onclick="bookingGuest()" type="button" value="Reserve">
          </form>    
      </div>
      </div>  
      </div>
      </div>
      <!-- reservation-information -->

      <?php } ?>
<?php include 'footer.php';?>