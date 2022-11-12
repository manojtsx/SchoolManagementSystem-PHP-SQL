<?php
    include "../../check_login/conn.php";
    $name = $_GET['name'];
    $username = $_GET['username'];
    $dob = $_GET['dob'];
    $fn = $_GET['fn'];
    $mn = $_GET['mn'];
    $email = $_GET['email'];
    $phoneno = $_GET['pn'];
    $grade = $_GET['grade'];
    $class = $_GET['class'];
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
        
        <input type="text" value="<?php echo $name?>" name="name" placeholder="Name" >
        <input type="text" value="<?php echo $username?>" name="username" readonly placeholder="Username">
        <input type="date" value="<?php echo $dob?>" name="dob" placeholder="Date of Birth">
        <input type="text" value="<?php echo $fn?>" name="fn" placeholder="Father's Name">
        <input type="text" value="<?php echo $mn?>" name="mn" placeholder="Mother's Name">
        <input type="email" value="<?php echo $email?>" name="email" placeholder="Email Address">
        <input type="number" value="<?php echo $phoneno?>" name="phoneno" placeholder="Phone Number">
        <input type="number" value="<?php echo $grade?>" name="grade" placeholder="Remarks">
        <input type="number" value="<?php echo $class?>" name="class" placeholder="Class">
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
<?php
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $username = $_GET['username'];
    $dob = $_GET['dob'];
    $fn = $_GET['fn'];
    $mn = $_GET['mn'];
    $email = $_GET['email'];
    $phoneno = $_GET['phoneno'];
    $grade = $_GET['grade'];
    $class = $_GET['class'];
    $sql = "UPDATE `student` SET `Name`='$name',`Date_of_birth`='$dob',`Father_Name`='$fn',`Mother_Name`='$mn',`Grade`='$grade',`Phone_No`='$phoneno',`Email`='$email',`Class`='$class' WHERE Username = '$username'";
    $sql1 = "UPDATE `users` SET `Name`='$name',`Date`='$dob',`Phone_No`='$phoneno',`Email`='$email' WHERE Username = '$username'";
    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
    if($result){
        if($result1){
            header("Location:updateStudent.php");
        }
    }
}
?>