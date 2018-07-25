<?php include 'header_admin.php';?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
<script src="walkIn_form.js"></script>

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


     

      <div class="col-sm-5 col-md-4">
      <h3 align="center">Register Form</h3>
          <form role="form" class="wowload fadeInRight" >

            
            <div class="form-group" >
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
            <div class="form-group">
                  <input type="text" class="form-control"  placeholder="Identity Card Number(NRIC) " name="guestIC" id="guestIC" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  placeholder="First Name" name="firstName" id="firstName" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  placeholder="Last Name" name="lastName" id="lastName" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  placeholder="Address" name="address" id="address" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  placeholder="Postcode" name="postcode" id="postcode" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  placeholder="City" name="city" id="city" required>
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
                  <select id="state" class="form-control" name="state" id="state" required></select>
                  
                  </div>
                </div>
              </div>
             <!--  <div class="form-group">
                  <input type="email" class="form-control"  placeholder="Email" name="email" required>
              </div> -->
              <div class="form-group">
                  <input type="Phone" class="form-control"  placeholder="Phone" name="phoneNum" id="phoneNum" required>
              </div>        

              <div class="form-group">
                  <div class="row">
                        
                  <div class="col-xs-6">
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
                        
                  <div class="col-xs-6">
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
                      <b>Start Date</b>
                    <input type='date' name='startDate' id='startDate' style='width: 160px; height: 30px' >
                    <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('startDate')[0].setAttribute('min', today);</script>
                  </div>
                 <b>    </b><b>     </b>
                  <div class="col-xs-6">
                     <b>End Date</b>
                    <input type='date' name='endDate' id='endDate' style='width: 160px; height: 30px' >
                    <script>var today = new Date().toISOString().split('T')[0]; document.getElementsByName('endDate')[0].setAttribute('min', today);</script>
                  </div>
                 
                </div>
              </div>

              <input type="hidden" name="status" id="status" value="Check In">
              
             <!--  <button class="btn btn-default" >Check In</button> -->
              <input  class="btn btn-default" id="submit" onclick="walkIn_form()" type="button" value="Check In">

              <br><br><br><br><br>
          </form>    
      </div>
     
      <!-- reservation-information -->

      
<?php //include 'footer.php';?>