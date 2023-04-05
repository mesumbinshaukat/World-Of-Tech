<?php 
ini_set('display_errors','1');
// $conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");
$conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");

if ($conn) {
    $submit_btn = $_POST['btn_submit'];

    if (isset($submit_btn)) {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $phone_number = $_POST['phone_number'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insert_query = "INSERT INTO `user_contact_details`(`user_name`, `user_email`, `phone_number`, `subject`, `message`) VALUES ('$user_name','$user_email','$phone_number','$subject','$message')";
        // $insert_query = "INSERT INTO `user_contact_details`(`user_name`) VALUE ('$user_name')";

        $run_insert_query = mysqli_query($conn, $insert_query);

        if ($run_insert_query) {
            echo "<script>alert('Form submitted successfuly')</script>";
            header('location:index.php');
            exit();
        }
    }else {
        $err = die("Could not connect to database: " . mysqli_connect_error());
        echo "<script>alert('$err')</script>";
        header('location:contact.php');
        exit();
    }
}



?>