<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="main">
        <div calss="navbar">
            <div class="icon">
                <h2 class="logo">sMs</h2>
                <div class="content">
                    <h1>Aadikavi <span>bhanubhakta</span> <br> campus </h1>
                    <form method="POST" action="check_login/check.php" class="form">
                        <h2>Login Here</h2>
                        <input type="text" name="myusername" placeholder="Enter Username Here">
                        <input type="password" name="mypassword" placeholder="Enter password Here">

                        <input type="submit" value="Log In" name="login">


                        <p class="link">Don't have an account<br>

                            <a href="register.php">Sign up Here</a>
                        </p>


                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>