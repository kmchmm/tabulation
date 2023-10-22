<?php
session_start();
include "connection.php";

if (isset($_POST['username']) && isset($_POST['username'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($username)) {
        header("Location: adminlogin.php?error=Username is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: adminlogin.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: dashboard.php");
                exit();
            } else {
                header("Location: adminlogin.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location: adminlogin.php?error=Incorrect Username or Password");
            exit();
        }
    }
} else {
    header("Location: adminlogin.php");
    exit();
}
