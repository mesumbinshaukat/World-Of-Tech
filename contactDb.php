<?php 
$conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");

if ($conn) {
    $submit_btn = $_POST['btn_submit'];

    if (isset($submit_btn)) {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $phone_number = $_POST['phone_number'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insert_query = "INSERT INTO `user_contact_details`(`user_name`, `user_email`, `phone_number`, `subject`, `message`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";
    }else {
        die("Could not connect to database" . mysqli_connect_error());
    }
}



?>