<?php
$conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");
if(isset($_POST['submitbtn'])){
    $thumnail_img = $_FILES['thumbnail']['name'];
    $thumbnail_img_tmp = $_FILES['thumbnail']['tmp_name'];
    $thumbnail_img_path = './images/' .  $thumnail_img;
    move_uploaded_file($thumbnail_img_tmp,$thumbnail_img_path);
    $blogtitle = $_POST['title'];
    $blog_sub_title = $_POST['subtitle'];
    $intro_para = $_POST['intro_para'];
    $intro_para_img = $_FILES['intro_img']['name'];
    $intro_para_img_tmp = $_FILES['intro_img']['tmp_name'];
    $intro_para_img_path = './images/' .  $intro_para_img;
    move_uploaded_file($intro_para_img_tmp,$intro_para_img_path);
    $main_para = $_POST['main_para'];
    $main_para_img = $_FILES['main_img']['name'];
    $main_para_img_tmp = $_FILES['main_img']['tmp_name'];
    $main_para_img_path = './images/' .  $main_para_img;
    move_uploaded_file($main_para_img_tmp,$main_para_img_path);
    $conclusion_para = $_POST['conclusion_para'];
    $conclusion_para_img = $_FILES['conclusion_img']['name'];
    $conclusion_para_img_tmp = $_FILES['conclusion_img']['tmp_name'];
    $conclusion_para_img_path = './images/' .  $conclusion_para_img;
    move_uploaded_file($conclusion_para_img_tmp,$conclusion_para_img_path);
    $insert_query = "INSERT INTO `admin_blogs`(`thumbnail`, `blogtitle`, `subtitle`, `intro_para`, `intro_img`, `main_para`, `main_img`, `conclusion_para`, `conclusion_img`) VALUES ('$thumbnail_img_path','$blogtitle','$blog_sub_title','$intro_para','$intro_para_img_path','$main_para','$main_para_img_path','$conclusion_para','$conclusion_para_img_path')";
    $insert_query_run = mysqli_query($conn,$insert_query);
    if($insert_query_run){
      header('location:admin_dashboard.php');
    }
    else{
      echo "<script>alert('not working')</script>";
    }


}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.3/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <?php include("navbar.html");?>
    <h1 class="text-center">Blog</h1>
    <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label>Thumnail</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        <div class="mb-3">
            <label>Blog Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>Sub Title</label>
            <input type="text" name="subtitle" class="form-control">
        </div>
        <div class="mb-3">
            <label>Intro Paragraph</label>
            <input type="text" name="intro_para" class="form-control">
        </div>
        <div class="mb-3">
            <label>Intro Image/Video</label>
            <input type="file" name="intro_img" class="form-control">
        </div>
        <div class="mb-3">
            <label>Main Paragraph</label>
            <input type="text" name="main_para" class="form-control">
        </div>
        <div class="mb-3">
            <label>Main Image/Video</label>
            <input type="file" name="main_img" class="form-control">
        </div>
        <div class="mb-3">
            <label>Conclusion</label>
            <input type="text" name="conclusion_para" class="form-control">
        </div>
        <div class="mb-3">
            <label>Conclusion Image/Video</label>
            <input type="file" name="conclusion_img" class="form-control">
        </div>

        <input type="submit" name="submitbtn" value="Submit">

    </form>
</body>

</html>