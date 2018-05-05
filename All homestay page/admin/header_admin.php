<?php
include 'dbconnection.php';

if(!isset($_SESSION))
 {
  session_start();
 } 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../../assets/jquery.js"></script>

<!-- wow script -->
<script src="../../assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="../../assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="../../assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="../../assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="../../assets/respond/respond.js"></script>

<!-- gallery -->
<script src="../../assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="../../assets/script.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Smart Homestay</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="../assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="../../assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="../../assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="images/Home.png" type="image/x-icon">
<link rel="icon" href="../../images/home.png" type="image/x-icon">

<link rel="stylesheet" href="../../assets/style.css">
<link rel="stylesheet" href="../../assets/login_style.css">


<link href="../../fullcalendar.min.css" rel="stylesheet" />

<style>
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


.search_form{
  text-align: center;
  margin: auto;
    width: 50%;
    background-color: #ffffff;
    opacity: 0.7;
    box-sizing: border-box;
    border: 2px ;
    border-color:#bfa145;
    border-radius: 4px;
  }
</style>

<style>

  /*
  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }
  */

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }


</style>

<!--
<script src="../../lib/moment.min.js"></script>
<script src="../../lib/jquery.min.js"></script>
<script src="../../lib/jquery-ui.min.js"></script>
<script src="../../fullcalendar.min.js"></script>



<script src='../../gcal.min.js'></script>


<script>
$(document).ready(function() 
{

    // page is now ready, initialize the calendar...

    $("#calendar").fullCalendar(
    {
        // put your options and callbacks here
        displayEventTime: false,

        googleCalendarApiKey: 'AIzaSyAR9u_JmIPARI03Ove5Rk6ssvLmJYi6ODI',

        header: {
        right: "prev,next today",
       
        
        },
      
      weekNumbers: true,
      navLinks: true, 
     
      weekmode:'liquid',
      
       events: 'load.php',
      selectable:true,
      selectHelper:true,

     // eventClick: function(event) {
     //    // opens events in a popup window
     //    window.open(event.url, 'gcalevent', 'width=700,height=600');
     //    return false;
     //  },

      loading: function(bool) {
        $('#loading').toggle(bool);
      },

    // select: function(start, end, allDay)
    // {
    //  var title = prompt("Enter Identity Card Number(NRIC) To Make A Reservation");
    //  if(title)
    //  {
    //   var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
    //   var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
    //   $.ajax({
    //    url:"insert.php",
    //    type:"POST",
    //    data:{title:title, start:start, end:end},
    //    success:function()
    //    {
    //     calendar.fullCalendar('refetchEvents');
    //     alert("Added Successfully");
    //    }
    //   })
    //  }
    // },
    // editable:true,
    // eventResize:function(event)
    // {
    //  var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    //  var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    //  var title = event.title;
    //  var id = event.id;
    //  $.ajax({
    //   url:"update.php",
    //   type:"POST",
    //   data:{title:title, start:start, end:end, id:id},
    //   success:function(){
       
    //    calendar.fullCalendar('refetchEvents');
    //    alert('Reservation Update');
    //   }
    //  })
    // },

   
    

   });

     $('#calendar').fullCalendar('addEventSource', 'en.malaysia#holiday@group.v.calendar.google.com');

    });


</script>

-->

</head>

<body id="home">


<!-- top 
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="../../images/Icon-Homestay.png"  alt="Smart Homestay & Booking System"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="index_admin.php">Home </a></li>
        <li><a href="index_admin.php">Check Out </a></li>
        
           <?php
                 if(isset($_SESSION['userIC']))
                 {
                 ?> 
                   <li><a href="logout_admin.inc.php">Logout</a></li>
                  
                 <?php
                 }

                  else{
                    ?> <li><button class= "button-login" onclick="document.getElementById('id01').style.display='block'">Login</button></li> 

                    <li><button class= "button-signup" onclick="document.getElementById('id02').style.display='block'" >Sign Up</button></li>

                    <?php
                   }
                ?>
        
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>



<?php
  if(isset($_SESSION['userIC'])){ 

    $result =mysqli_query ($conn,'SELECT username FROM users WHERE userIC="'.$_SESSION['userIC'].'" ');

    $row=mysqli_fetch_array($result);

    $userNameDisplay= $row['username'];
    
   
      echo "Welcome Back $userNameDisplay";
  
      } 
?>


<!--<div id='calendar'></div>

  -->
<?php


// <!-- The Modal -->
// <div id="id01" class="modal">
// <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

//   <!-- Modal Content -->
//   <form class="modal-content animate" action="login.inc.php" method="GET">
   

//     <div class="container">
//       <label for="username"><b>Username</b></label>
//       <input type="text" placeholder="Enter Username" name="username" required>

//       <label for="pword"><b>Password</b></label>
//       <input type="password" placeholder="Enter Password" name="pword" required>

//       <button class= "button" type="submit">Login</button>
      
//     </div>

//     <div class="container" style="background-color:#f1f1f1">
//       <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
//       <span class="pword">Forgot <a href="#">password?</a></span>
//     </div>
//   </form>
// </div>

// <script>
// // Get the modal
// var modal = document.getElementById('id01');

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
// </script>



// <div id="id02" class="modal">
//   <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

  
//   <form class="modal-content animate" action="signup.inc.php" method="GET">
//     <div class="container">
//       <h1>Sign Up</h1>
//       <p>Please fill in this form to create an account.</p>
//       <hr>

//       <label for="userIC"><b>Identity Card Number(NRIC)</b></label>
//       <input type="text" placeholder="Enter Identity Card Number(NRIC)" name="userIC" required>

//       <label for="username"><b>Username</b></label>
//       <input type="text" placeholder="Enter Username" name="username" required>

//       <label for="psw"><b>Password</b></label>
//       <input type="password" placeholder="Enter Password" name="psw" required>

//       <label for="psw2"><b>Re-Enter Password</b></label>
//       <input type="password" placeholder="Re-Enter Password" name="psw2" required>

      
//       <label for="email"><b>Email</b></label>
//       <input type="text" placeholder="Enter Email" name="email" required>
      
      
//       <!--
//       <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

//       -->

//       <div class="clearfix">
//         <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
//         <button type="submit" class="signupbtn">Sign Up</button>
//       </div>
//     </div>
//   </form>
// </div>

// <script>
// // Get the modal
// var modal = document.getElementById('id02');

// </script>


// <!-- header -->

?>










  
