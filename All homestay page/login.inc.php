<?php 
session_start();
include 'dbconnection.php';


$username = $_GET['username'];
$pword = $_GET['pword'];

$result =mysqli_query ($conn,'SELECT * FROM users WHERE username="'.$username.'" AND pword="'.$pword.'" ');

$row=mysqli_fetch_array($result);

if ($row['username'] == $username){
  
    if ($row['role'] == 1)
  {
    $_SESSION['userIC'] = $row['userIC'];
    header("Location:admin_page.php");
    }
    else
  {
    $_SESSION['userIC'] = $row['userIC'];
    header("Location:index.php");
  } 

}
else{

echo'<script> window.alert("login error!!");</script>';
header("refresh:0 url=index.php");
  
  } 
   ?>