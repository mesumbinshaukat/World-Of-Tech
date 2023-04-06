<?php 
session_start();

$admin_name = "WorldOfTech_Admin_778866_Official!!!";
$session_admin_name = $_SESSION['Admin_Name'];


if (!isset($session_admin_name) && $admin_name !== $session_admin_name) {
    header('location:../index.php');
    exit();
}


if (isset($_POST['logout'])) {
    session_unset();
    if (session_destroy()) {
        header('location:../index.php');
        exit();
    }
}

?>


<head>
    <link rel="stylesheet" href="../bootstrap-5.2.3/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../Icons/admin.png" type="image/x-icon">
    <title>ADMIN PANEL</title>
    <style>
    .nav_logo {
        width: 10%;
    }
    </style>
</head>

<body>

    <section>
        <?php include('navbar.html');?>
    </section>



    <script src="../bootstrap-5.2.3/js/bootstrap.min.js"></script>
</body>

</html>