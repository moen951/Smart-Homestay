<?php

if(!isset($_SESSION))
 {
  session_start();
 } 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Smart Homestay & Booking System</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="../assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="../assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="../assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="images/Home.png" type="image/x-icon">
<link rel="icon" href="../images/home.png" type="image/x-icon">

<link rel="stylesheet" href="../assets/style.css">
<link rel="stylesheet" href="../assets/login_style.css">


<link href="../fullcalendar.min.css" rel="stylesheet" />

<script src="../lib/moment.min.js"></script>
<script src="../lib/jquery.min.js"></script>
<script src="../lib/jquery-ui.min.js"></script>
<script src="../fullcalendar.min.js"></script>
<script src='../gcal.min.js'></script>

<script>
$(document).ready(function() 
{

    // page is now ready, initialize the calendar...

    $("#calendar").fullCalendar(
    {
        // put your options and callbacks here
        displayEventTime: false,

        googleCalendarApiKey: 'AIzaSyAR9u_JmIPARI03Ove5Rk6ssvLmJYi6ODI',

         events:'en.malaysia#holiday@group.v.calendar.google.com',
        header: {
        left: "prev,next today",
        center: "title",
       
        
        },
      defaultDate: "2018-02-10",
      weekNumbers: true,
      navLinks: true, 
      editable: false,
      weekmode:'liquid',
      eventLimit: true,

      eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },

      loading: function(bool) {
        $('#loading').toggle(bool);
      }



    });

});
</script>

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
      <a class="navbar-brand" href="index.php"><img src="../images/Icon-Homestay.png"  alt="Smart Homestay & Booking System"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="index.php">Home </a></li>
        <li><a href="rooms-tariff.php">Rooms & Tariff</a></li>        
        <li><a href="introduction.php">Introduction</a></li>
        
           <?php
                 if(isset($_SESSION['userIC']))
                 {
                 ?> 
                   <li><a href="logout.inc.php">Logout</a></li>
                  
                 <?php
                 }

                  else{
                    ?> <li><button class= "button-login" onclick="document.getElementById('id01').style.display='block'">Login</button></li> 

                    <li><button class= "button-signup" onclick="document.getElementById('id02').style.display='block'" >Sign Up</button></li>

                    <?php
                   }
                ?>
        
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->






<div id='calendar'></div>

  
