<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School - Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register-style.css">
</head>

<body class="login-body">
    <form action="register_code/insert_data.php" class="register-form" method="POST">


        <input type="text" name="fullName" placeholder="Full Name">
        <input type="date" name="DateofBirth">
        <select name="position">
            <option value="Student">Student</option>
            <option value="Facilitator">Facilitator</option>
        </select>
        <input type="number" name="PhoneNumber" placeholder="Phone Number">
        <input type="text" name="Username" placeholder="Username">
        <input type="text" name="Email" placeholder="Email">
        <input type="password" name="Password" placeholder="Password">
        <input type="password" name="ConfirmPassword" placeholder="Confirm Password">

        <input type="submit" value="Register" name="submit">
        </div>
        </div>
    </form>
</body>

</html>