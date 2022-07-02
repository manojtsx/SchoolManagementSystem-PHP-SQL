<?php
include "conn.php";


$name = $_POST["fullName"];
$dob = $_POST["DateofBirth"];
$phone = $_POST["PhoneNumber"];
$username =  $_POST["Username"];
$password = $_POST["Password"];
$email = $_POST["Email"];
$position = $_POST["position"];
$confirm = $_POST['ConfirmPassword'];
if ($name == "" || $dob == "" || $phone == "" || $username == "" || $password == "" || $email == "" || $position == "" || $confirm == "") {
    $error_msg = "Fill all the data first.";
} else {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Email is not valid.";
    } else {
        if ($password != $confirm) {
            $error_msg = "Both password are not same.";
        } else {

            if (isset($_POST["submit"])) {
                $sql = "INSERT INTO `users`(`Name`, `Username`, `Pass`, `Position`, `Date`, `Phone_No`, `Email`) VALUES ('$name','$username','$password','$position','$dob','$phone','$email')";

                $result = $conn->query($sql);

                if ($result) {
                    header("Location:../index.php");
                }
            }
        }
    }
}


?>
<script>
    alert("<?php echo "$error_msg"; ?>");
</script>