<?php

$conn = mysqli_connect("localhost","root","","homestay");

if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}