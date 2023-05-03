<?php
session_start();
include('../connection.php');
$admin_name = "WorldOfTech_Admin_778866_Official!!!";
$session_admin_name = $_SESSION['Admin_Name'];

if (!isset($session_admin_name) && $admin_name !== $session_admin_name) {
    header('location:../index.php');
    exit();
}

if (isset($_POST['update_btn'])) {
    $code = $_SESSION['code'];
    $verify_code = $_POST['verify_code'];
    $user_email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    if ($verify_code == $code) {
        echo "<script>alert('Code Matched Successfuly')</script>";

        if (empty($username)) {
            $update_details = "UPDATE `admin_details` SET `admin_password`='$password' WHERE 1";
            $run_update_query = mysqli_query($conn, $update_details);

            if ($run_update_query) {
                echo "<script>alert('Password Updated')</script>";
                header('location:profile.php');
                exit();
            } else {
                echo "<script>alert('Could Not Update The Password')</script>";
            }

            session_unset();
            session_destroy();
        } elseif (empty($password)) {
            $update_details = "UPDATE `admin_details` SET `admin_name`='$username' WHERE 1";
            $run_update_query = mysqli_query($conn, $update_details);

            if ($run_update_query) {
                echo "<script>alert('Name Updated')</script>";
                header('location:profile.php');
                exit();
            } else {
                echo "<script>alert('Could Not Update The Name')</script>";
            }

            session_unset();
            session_destroy();
        } elseif (!empty($password) && !empty($username)) {
            $update_details = "UPDATE `admin_details` SET `admin_name`='$username', `admin_password`='$password' WHERE 1";
            $run_update_query = mysqli_query($conn, $update_details);

            if ($run_update_query) {
                echo "<script>alert('Credentials Updated')</script>";
                header('location:profile.php');
                exit();
            } else {
                echo "<script>alert('Could Not Update The Credentials')</script>";
            }

            session_unset();
            session_destroy();
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }


    } else {
        echo "<script>alert('Invalid Code')</script>";

    }


}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Verify Code
    </title>
</head>

<body>
    <form action="code_verification.php" method="post">
        <input type="number" placeholder="Code" name="verify_code">
        <input type="submit" value="Update" name="update_btn">


    </form>
</body>

</html>