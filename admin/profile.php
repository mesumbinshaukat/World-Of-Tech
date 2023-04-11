<?php
session_start();

$admin_name = "WorldOfTech_Admin_778866_Official!!!";
$session_admin_name = $_SESSION['Admin_Name'];

if (!isset($session_admin_name) && $admin_name !== $session_admin_name) {
    header('location:../index.php');
    exit();
}

$conn = mysqli_connect('localhost', 'root', '', 'world_of_tech') or die("Can't Connect");
$select_query = "SELECT * FROM `admin_details` WHERE `id` = 1";
$select_query_run = mysqli_query($conn, $select_query);
$fetch_array = mysqli_fetch_array($select_query_run);

if(isset($_POST['updatebtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $update_query = "UPDATE `admin_details` SET `admin_name`='$username',`admin_password`='$password_hash' WHERE `id` = 1"; 
    $update_query_run = mysqli_query($conn , $update_query);
    if($update_query_run){
     echo "<script>alert('data updated')</script>";
     header('location:admin.php');
    }
    else{
     echo "<script>alert('data isn't updated')</script>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php include('../font.html')?>
</head>

<body>
    <section>
        <?php include('navbar.html');?>
    </section>

    <section>
        <form method="post">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" name="password">
            </div>
            <input type="submit" class="btn btn-outline-dark" value="Submit" name="updatebtn">
        </form>

    </section>
</body>

</html>