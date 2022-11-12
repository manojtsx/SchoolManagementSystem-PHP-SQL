<?php
include 'conn.php';
$username  = $_POST['myusername'];
$password = $_POST['mypassword'];
$username = stripslashes($username);
$password = stripslashes($password);


$sql = "SELECT Position FROM users WHERE Username ='$username' AND Pass='$password'";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
$type = mysqli_fetch_array($result);

$control = $type['Position'];
echo $control;

//Connecting to desired location as detected(admin,student,facilitator)

if($count!=1 || !isset($control)){
    header("Location:../index.php?login=false");
}
else if($count==1 && $control=="Admin"){
    header("Location:../module/admin/admin.php");
}
else if($count==1 && $control=="Facilitator"){
    header("Location:../module/facilitator/facilitator.php");
}
else if($count==1 && $control=="Student"){
    header("Location:../module/student/student.php");
}
else{
    header("Location:../index.php?login=false");
}
$_SESSION['login_id'] = $username;
?> 