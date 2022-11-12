<?php
    include "../../check_login/conn.php";
    session_destroy();
    mysqli_close($conn);
    header("Location:../../")
?>