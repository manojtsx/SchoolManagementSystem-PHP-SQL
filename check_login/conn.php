<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db_name = "schoolmgt";
$conn = mysqli_connect("$host","$user","$password","$db_name")
or die("Cannot Connect");
mysqli_select_db($conn,"$db_name") 
or die("Cannot Select Database");


?>