<?php
// $conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");

$conn = $conn = mysqli_connect('localhost', 'root', '', 'world_of_tech');
$id = $_GET['id'];
?>

<?php

$select_query = "SELECT * FROM `admin_blogs` WHERE id = $id";
$select_query_run = mysqli_query($conn, $select_query);
$fetch = mysqli_fetch_array($select_query_run);
$abc = $fetch['blogtitle'];

// include('./blogs/' . $abc . '.php');

$file_blog_path = "./blogs/" . $abc . ".php";

if ($file_blog_path) {
    header("location:$file_blog_path");
    exit();
}
?>