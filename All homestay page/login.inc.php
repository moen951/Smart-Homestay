<?php 
session_start();
include 'dbconnection.php';


$username = $_GET['username'];
$pword = $_GET['pword'];

$pword_hash= md5($pword);

$result =mysqli_query ($conn,'SELECT * FROM users WHERE username="'.$username.'" AND pword="'.$pword_hash.'" ');

$row=mysqli_fetch_array($result);



if($row['pword'] == $pword_hash)
{
    if ($row['username'] == $username){
      
        if ($row['role'] == 1)
      {
        $_SESSION['userIC'] = $row['userIC'];
        header("Location:admin/index_admin.php");
        }
        else
      {
        $_SESSION['userIC'] = $row['userIC'];
        header("Location:index.php");
      } 

    }

}else {
  echo'<script> window.alert("Your username or password are incorrect!");</script>';
  header("refresh:0 url=index.php");
}



   ?>