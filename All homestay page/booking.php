<?php include 'header.php';?>


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