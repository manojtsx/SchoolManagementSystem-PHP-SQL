<?php 
include "../../check_login/conn.php";

//Count the number of students in database
$sql_student = "SELECT Username FROM users WHERE Position='student'";
$result_student = $conn->query($sql_student);
$count_student = mysqli_num_rows($result_student);

//count the number of teacher in database
$sql_facilitator = "SELECT Username FROM users WHERE Position='Facilitator'";
$result_facilitator = $conn->query($sql_facilitator);
$count_facilitator = mysqli_num_rows($result_facilitator);

//count the number of admin in database
$sql_admin = "SELECT Username FROM users WHERE Position='admin'";
$result_admin = $conn->query($sql_admin);
$count_admin = mysqli_num_rows($result_admin);
?>