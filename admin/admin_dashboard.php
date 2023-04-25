<?php 
session_start();
$conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");

$admin_name = "WorldOfTech_Admin_778866_Official!!!";
$session_admin_name = $_SESSION['Admin_Name'];


if (!isset($session_admin_name) && $admin_name !== $session_admin_name) {
    header('location:../index.php');
    exit();
}


// $connection = mysqli_connect("localhost" , "root" , "" , "world_of_tech");

$select_query = "SELECT * FROM `user_contact_details`";
$select_query_run = mysqli_query($conn , $select_query);


?>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="../Icons/admin.png" type="image/x-icon">
    <title>ADMIN PANEL</title>
    <?php include('../font.html')?>
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
    <br>
    <table class="table table-primary table-bordered">
        <tr>
            <th>
                USER NAME
            </th>
            <th>
                USER EMAIL
            </th>
            <th>
                PHONE NO.
            </th>
            <th>
                SUBJECT
            </th>
            <th>
                MESSAGE
            </th>
            <th>
                DELETION
            </th>
        </tr>
        <?php while($row = mysqli_fetch_array($select_query_run)){ ?>
        <tr>
            <td><?php echo $row['user_name'] ?></td>
            <td><?php echo $row['user_email'] ?></td>
            <td><?php echo $row['phone_number'] ?></td>
            <td><?php echo $row['subject'] ?></td>
            <td><?php echo $row['message'] ?></td>
            <td>
                <a class="btn btn-danger" onclick="return confirm('are you sure you want delete')"
                    href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a>
            </td>
        </tr>
        <?php }?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>