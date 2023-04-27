<?php
include('../connection.php');
$id = $_GET['id'];
$delete_query = "DELETE FROM `user_contact_details` WHERE `id`='$id' ";
$delete_query_run = mysqli_query($conn, $delete_query);
if ($delete_query_run) {
    header('location:admin_dashboard.php');
}

?>