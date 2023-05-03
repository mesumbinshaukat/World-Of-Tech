<?php
session_start();
include('../connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$admin_name = "WorldOfTech_Admin_778866_Official!!!";
$session_admin_name = $_SESSION['Admin_Name'];

if (!isset($session_admin_name) && $admin_name !== $session_admin_name) {
    header('location:../index.php');
    exit();
}
$select_query = "SELECT * FROM `admin_details` WHERE `id` = 1";
$select_query_run = mysqli_query($conn, $select_query);
$fetch_array = mysqli_fetch_array($select_query_run);

if (isset($_POST['updatebtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $user_email = $_POST['user_email'];
    $code_gen = rand(10000, 99999);

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
        $mail->addAddress($user_email, $user_name); //Add a recipient


        $body = "<p>Hello <b>" . $username . "!</b> Your verification code: " . $code_gen . "</p><br><p><b>Call: +923362100225</b></p><br><br><p>Best Regards,<br> <b>WORLD OF TECH TEAM 🥰</b></p>";

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Testing';
        $mail->Body = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        $_SESSION['code'] = $code_gen;
        $_SESSION['email'] = $user_email;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password_hash;
        echo 'Message has been sent';
        echo "<script>alert('Form submitted successfuly')</script>";
        header('location:code_verification.php');
        exit();






    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
    <?php include('../font.html') ?>
</head>

<body>
    <section>
        <?php include('navbar.html'); ?>
    </section>

    <section>
        <form method="post">
            <div class="mb-3">
                <label>Email For Verification</label>
                <input type="email" class="form-control" name="user_email" required>
            </div>
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