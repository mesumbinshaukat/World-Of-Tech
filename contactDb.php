<?php
// ini_set('display_errors', '1');
$conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");
// $conn = mysqli_connect('localhost', 'root', '', 'world_of_tech') or die("Can't Connect");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if ($conn) {
    $submit_btn = $_POST['btn_submit'];

    if (isset($submit_btn)) {
        $user_name = $_POST['user_name'];
        $user_name = str_replace("<", "&lt", $user_name);
        $user_name = str_replace(">", "&gt", $user_name);
        $user_email = $_POST['user_email'];
        $user_email = str_replace("<", "&lt", $user_email);
        $user_email = str_replace(">", "&gt", $user_email);
        $phone_number = $_POST['phone_number'];
        $phone_number = str_replace("<", "&lt", $phone_number, );
        $phone_number = str_replace(">", "&gt", $phone_number);
        $subject = $_POST['subject'];
        $subject = str_replace("<", "&lt", $subject);
        $subject = str_replace(">", "&gt", $subject);
        $message = $_POST['message'];
        $message = str_replace("<", "&lt", $message);
        $message = str_replace(">", "&gt", $message);

        $insert_query = "INSERT INTO `user_contact_details`(`user_name`, `user_email`, `phone_number`, `subject`, `message`) VALUES ('$user_name','$user_email','$phone_number','$subject','$message')";
        // $insert_query = "INSERT INTO `user_contact_details`(`user_name`) VALUE ('$user_name')";

        $run_insert_query = mysqli_query($conn, $insert_query);

        if ($run_insert_query) {

            $select_query = "SELECT * FROM `user_contact_details` WHERE `user_email` = '$user_email'";

            $run_select_query = mysqli_query($conn, $select_query);


            if ($run_select_query) {
                $fetch_details = mysqli_fetch_assoc($run_select_query);

                if ($user_fetched_email = $fetch_details['user_email']) {

                    $fetch_user_name = $fetch_details['user_name'];


                    try {
                        //Server settings
                        // $mail->SMTPDebug = 2; //Enable verbose debug output
                        $mail->isSMTP(); //Send using SMTP
                        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
                        $mail->SMTPAuth = true; //Enable SMTP authentication
                        $mail->Username = 'wot.official.786@gmail.com'; //SMTP username
                        $mail->Password = 'axkqmmsjsipksxyq'; //SMTP password
                        $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
                        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('wot.official.786@gmail.com', 'WORLD OF TECH');
                        $mail->addAddress($user_fetched_email, $fetch_user_name); //Add a recipient


                        $body = "<h3>Hello <b>" . $fetch_details['user_name'] . "</b></h3><br/> \t <p>Thank you for contacting us 🤗. This is an automated email response. We'll get back to you shortly 😁😁😉. </p><br/> <h4><b>Whatsapp: +923220275616</b></h4><br><h4><b>Call: +923362100225</b></h4><br><br><h4>Best Regards,<br> <b>WORLD OF TECH TEAM 🥰</b></h4>";

                        //Content
                        $mail->isHTML(true); //Set email format to HTML
                        $mail->Subject = 'Testing';
                        $mail->Body = $body;
                        $mail->AltBody = strip_tags($body);

                        $mail->send();
                        echo 'Message has been sent';
                        echo "<script>alert('Form submitted successfuly')</script>";
                        header('location:index.php');
                        exit();
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }




                }



            }

        }
    } else {
        $err = die("Could not connect to database: " . mysqli_connect_error());
        echo "<script>alert('$err')</script>";
        header('location:contact.php');
        exit();
    }
}



?>