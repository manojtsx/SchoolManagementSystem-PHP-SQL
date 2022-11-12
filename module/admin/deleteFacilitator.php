<?php

include "../../check_login/conn.php";
$username = $_GET['username'];
$sql = "DELETE FROM facilitator WHERE Username = '$username'";
$sql1 = "DELETE FROM users WHERE Username='$username'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
if($result){
    if($result1){

        header("Location:updateFacilitator.php");
    }
}
?>