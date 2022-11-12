<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - View Facilitator</title>
</head>
<body>
    <ul class="navbar">
        <li><a href="student.php">Home</a></li>
        <li><a href="viewFacilitator.php">View Facilitator</a></li>
        <li><a href="viewStudent.php">View Student</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
    <form method="get">
        <label for="Search">Search for</label>
        <input type="text" name="search" id="">
        <input type="submit" name="submit">
    </form>
    <table border="1">
    <tr>

        <th>Name</th>
        <th>Username</th>
        <th>Date of Birth</th>
        <th>Guardian's Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Qualification</th>
    </tr>

    <?php
    include "../../check_login/conn.php";
    if(!isset($_GET['submit'])){
        $sql = "SELECT * FROM facilitator";
        $data = $conn->query($sql);
        $total = mysqli_num_rows($data);
        
        if($total>0){
            
            while(($row = mysqli_fetch_assoc($data))){
    
                echo "
                <tr>
                <td>".$row['Name']."</td>
                <td>".$row['Username']."</td>
                <td>".$row['Date_of_birth']."</td>
                <td>".$row['Guardian_name']."</td>
                <td>".$row['Email']."</td>
                <td>".$row['Phone_number']."</td>
                <td>".$row['Qualification']."</td>
                
                
                
                </tr>";
            }
        }  
    }
    else{
        $search = $_GET['search'];
        $sql = "SELECT * FROM facilitator WHERE Name='$search'";
        $data = $conn->query($sql);
        $total = mysqli_num_rows($data);
        
        if($total>0){
            
            while(($row = mysqli_fetch_assoc($data))){
    
                echo "
                <tr>
                <td>".$row['Name']."</td>
                <td>".$row['Username']."</td>
                <td>".$row['Date_of_birth']."</td>
                <td>".$row['Guardian_name']."</td>
                <td>".$row['Email']."</td>
                <td>".$row['Phone_number']."</td>
                <td>".$row['Qualification']."</td>
                
                </tr>";
            }
        }  
        else{
            echo "No records found.";
        }
    }  
        ?>
        </table>
</body>
</html>