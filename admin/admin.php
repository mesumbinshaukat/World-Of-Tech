<?php 
ini_set('display_errors','1');
session_start();
$conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");
// $conn = mysqli_connect('localhost', 'root', '', 'world_of_tech') or die("Can't Connect");

if (isset($_POST['check'])) {
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];

    // $password_hash = password_hash($admin_password, PASSWORD_DEFAULT);
    
    // $insert_query = "INSERT INTO `admin_details`(`admin_name`, `admin_password`) VALUES ('$admin_name', '$password_hash')";
    
    // $run_insert_query = mysqli_query($conn, $insert_query);

    $select_query = "SELECT * FROM `admin_details` WHERE id = '1'";

    
    $run_select_query = mysqli_query($conn, $select_query);

    if($run_select_query){
        $fetch_admin_details = mysqli_fetch_assoc($run_select_query);
        $fetched_name = $fetch_admin_details['admin_name'];
        $fetched_hashed_password = $fetch_admin_details['admin_password'];
        if ($fetched_name == $admin_name && password_verify($admin_password, $fetched_hashed_password)) {
            $_SESSION['Admin_Name'] = $fetched_name;
            header('location:admin_dashboard.php');
            exit();
        }else {
            echo "<script>alert(`Name or password does not match`)</script>";
            header('location:../index.php');
            exit();
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php include('../font.html')?>
</head>

<body>

    <section class="mt-5">
        <div class="container-sm w-25 bg-dark mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 justify-content-center text-center">
                    <form action="admin.php" method="post">
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="text" name="admin_name" class="form-label w-100">

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="password" name="admin_password" class="form-label w-100">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center justify-content-center">
                                <input type="submit" name="check" value="Log In"
                                    class="btn btn-outline-light w-50 text-center mt-4">

                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </section>



</body>

</html>