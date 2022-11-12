<?php
    include "../../check_login/conn.php";
    $name = $_GET['name'];
    $username = $_GET['username'];
    $dob = $_GET['dob'];
    $gn = $_GET['gn'];
    $email = $_GET['email'];
    $phoneno = $_GET['pn'];
    $qf = $_GET['qf'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Edit Student</title>
    <link rel="stylesheet" href="../../css/register.css">
</head>
<body>
<ul class="navbar">
        <li><a href="admin.php">Home</a></li>
        <li><a href="updateFacilitator.php">Update Facilitator</a></li>
        <li><a href="updateStudent.php">UpdateStudent</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
    <form method="get" class="register-form">
        
        <input type="text" value="<?php echo $name?>" name="name" placeholder="Name">
        <input type="text" value="<?php echo $username?>" name="username" readonly>
        <input type="date" value="<?php echo $dob?>" name="dob" placeholder="Date of Birth">
        <input type="text" value="<?php echo $gn?>" name="gn" placeholder="Guardian Name">
        <input type="email" value="<?php echo $email?>" name="email" placeholder="Email Address">
        <input type="number" value="<?php echo $phoneno?>" name="phoneno" placeholder="Phone Number">
        <input type="text" value="<?php echo $qf?>" name="qf" placeholder="Qualification">
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
<?php
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $username = $_GET['username'];
    $dob = $_GET['dob'];
    $fn = $_GET['gn'];
    $email = $_GET['email'];
    $phoneno = $_GET['phoneno'];
    $qf = $_GET['qf'];
    $sql = "UPDATE `facilitator` SET `Name`='$name',`Date_of_birth`='$dob',`Guardian_Name`='$gn',`Phone_Number`='$phoneno',`Email`='$email',`Qualification`='$qf' WHERE Username = '$username'";
    $sql1 = "UPDATE `users` SET `Name`='$name',`Date`='$dob',`Phone_No`='$phoneno',`Email`='$email' WHERE Username = '$username'";
    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
    if($result){
        if($result1){
            header("Location:updateFacilitator.php");
        }
    }
}
?>