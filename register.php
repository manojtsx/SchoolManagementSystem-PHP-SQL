<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School - Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/register.css">
</head>

<body class="login-body">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">sMs</h2>
                <div class="content">
                    <h1>School <span>Management</span><br>System</h1>
                </div>
            </div>
        </div>
    </div>
    <form action="#" class="register-form" method="POST">


        <h2>Register here</h2>
        <input type="text" name="fullName" placeholder="Full Name">
        <input type="date" name="DateofBirth">
        <select name="position">
            <option value="Student">Student</option>
            <option value="Facilitator">Facilitator</option>
        </select>
        <input type="number" name="PhoneNumber" placeholder="Phone Number">
        <input type="text" name="Username" placeholder="Username">
        <input type="email" name="Email" placeholder="Email">
        <input type="password" name="Password" placeholder="Password">
        <input type="password" name="ConfirmPassword" placeholder="Confirm Password">


        <input type="submit" value="Register" name="submit">
        </div>
        </div>
        <?php
        error_reporting(0);
        include "check_login/conn.php";


        $name = $_POST["fullName"];
        $dob = $_POST["DateofBirth"];
        $phone = $_POST["PhoneNumber"];
        $username =  $_POST["Username"];
        $password = $_POST["Password"];
        $email = $_POST["Email"];
        $position = $_POST["position"];
        $confirm = $_POST['ConfirmPassword'];
        if (isset($_POST["submit"])) {
            if ($name == "" || $dob == "" || $phone == "" || $username == "" || $password == "" || $email == "" || $position == "" || $confirm == "") {
                $error_msg = "Data is Empty.";
            } else {

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_msg = "Email is not valid.";
                } else {
                    if ($password != $confirm) {
                        $error_msg = "Both password are not same.";
                    } else {

                        $sql = "INSERT INTO `users`(`Name`, `Username`, `Pass`, `Position`, `Date`, `Phone_No`, `Email`) VALUES ('$name','$username','$password','$position','$dob',$phone,'$email')";
                        $result = $conn->query($sql);
                        if ($position == 'Student') {

                            $sql1 = "INSERT INTO `student`(`Name`, `Username`, `Date_of_birth`, `Phone_No`, `Email`) VALUES ('$name','$username','$dob','$phone','$email')";
                            $result1 = $conn->query($sql1);
                        }
                        if ($position == 'Facilitator') {
                            $sql1 = "INSERT INTO `facilitator`(`Name`, `Username`, `Date_of_birth`, `Phone_Number`, `Email`) VALUES ('$name','$username','$dob','$phone','$email')";
                            $result1 = $conn->query($sql1);
                        }

                        if ($result) {
                            if ($result1) {

                                header("Location:index.php");
                            }
                        } else {
                            $error_msg = "Cannot insert data.";
                        }
                    }
                }
            }
        }
        ?>
        <p style="color:yellow;font-size:18px;"><?php echo "$error_msg" ?></p>
    </form>
</body>

</html>