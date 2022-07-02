<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update Student</title>
</head>

<body>
    <ul class="navbar">
        <li><a href="admin.php">Home</a></li>
        <li><a href="updateFacilitator.php">Update Facilitator</a></li>
        <li><a href="updateStudent.php">UpdateStudent</a></li>
    </ul>
   <table border="1">
    <tr>

        <th>Name</th>
        <th>Username</th>
        <th>Pass</th>
        <th>Position</th>
        <th>Date</th>
        <th>Phone_No</th>
        <th>Email</th>
    </tr>

    <?php
    include "../../check_login/conn.php";
    $sql = "SELECT * FROM users";
    $data = $conn->query($sql);
    $total = mysqli_num_rows($data);
    
    if($total>0){
        $result = mysqli_fetch_assoc($data);
        while(($result == mysqli_fetch_assoc($data))){

            echo "
            <tr>
            <td>".$result['name']."</td>
            
            <tr>";
        }
    }  
        ?>
        </table>

</body>

</html>