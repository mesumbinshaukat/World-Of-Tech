<?php 
    $conn = $conn = mysqli_connect('localhost','root','','world_of_tech');
    $id = $_GET['id'];
    $select_query = "SELECT * FROM `admin_blogs` WHERE id = $id";
    $select_query_run = mysqli_query($conn,$select_query);
    $fetch = mysqli_fetch_array($select_query_run);
    $abc = $fetch['blogtitle'] ;
    include('admin/blogs/'.$abc.'.php');
?>