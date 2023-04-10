<?php
$conn = mysqli_connect('localhost', 'root','', 'world_of_tech') or die("Can't Connect");
if(isset($_POST['submitbtn'])){
    $blog_date = $_POST['blog_date'];
    $blog_categories = $_POST['blog_categories'];
    $thumnail_img = $_FILES['thumbnail']['name'];
    $thumbnail_img_tmp = $_FILES['thumbnail']['tmp_name'];
    $thumbnail_img_path = 'images/' .  $thumnail_img;
    move_uploaded_file($thumbnail_img_tmp,$thumbnail_img_path);
    $blogtitle = $_POST['title'];
    $blog_sub_title = $_POST['subtitle'];
    $intro_para = $_POST['intro_para'];
    $intro_para_img = $_FILES['intro_img']['name'];
    $intro_para_img_tmp = $_FILES['intro_img']['tmp_name'];
 
    $intro_para_img_path = 'images/' .  $intro_para_img;
    move_uploaded_file($intro_para_img_tmp,$intro_para_img_path);
    $main_para = $_POST['main_para'];
    $main_para_img = $_FILES['main_img']['name'];
    $main_para_img_tmp = $_FILES['main_img']['tmp_name'];

    $main_para_img_path = 'images/' .  $main_para_img;
    move_uploaded_file($main_para_img_tmp,$main_para_img_path);
    $conclusion_para = $_POST['conclusion_para'];
    $conclusion_para_img = $_FILES['conclusion_img']['name'];
    $conclusion_para_img_tmp = $_FILES['conclusion_img']['tmp_name'];
    $conclusion_para_img_path = 'images/' .  $conclusion_para_img;

    move_uploaded_file($conclusion_para_img_tmp,$conclusion_para_img_path);
    $insert_query = "INSERT INTO `admin_blogs`( `blog_category`, `thumbnail`, `blogtitle`, `subtitle`, `intro_para`, `intro_img`, `main_para`, `main_img`, `conclusion_para`, `conclusion_img`,`publish_date`) VALUES ('$blog_categories','$thumbnail_img_path','$blogtitle','$blog_sub_title','$intro_para','$intro_para_img_path','$main_para','$main_para_img_path','$conclusion_para','$conclusion_para_img_path','$blog_date')";
    $insert_query_run = mysqli_query($conn,$insert_query);
    if($insert_query_run){
        echo"<script>alert('inserted')</script>";
    }
    else{
        echo"<script>alert('not inserted')</script>";
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
    <div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="date" name="blog_date" class="form-control">
        </div>
        <div class="mb-3">
            <label >Blog Category</label>
            <select name="blog_categories" class="form-control" >
                <option value="Tech">Tech</option>
                <option value="Sports">Sports</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Thumnail</label>
            <input type="file" name="thumbnail" required class="form-control">
        </div>
        <div class="mb-3">
            <label>Blog Title</label>
            <textarea type="text" name="title" required class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Sub Title</label>
            <textarea type="text" name="subtitle" required class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Intro Paragraph</label>
            <textarea type="text" name="intro_para" required class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Intro Image/Video</label>
            <input type="file" name="intro_img" required class="form-control">
        </div>
        <div class="mb-3">
            <label>Main Paragraph</label>
            <textarea type="text" name="main_para" required class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Main Image/Video</label>
            <input type="file" name="main_img" required class="form-control">
        </div>
        <div class="mb-3">
            <label>Conclusion</label>
            <textarea type="text" name="conclusion_para" required class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Conclusion Image/Video</label>
            <input type="file" name="conclusion_img" required class="form-control">
        </div>

        <input type="submit" class="btn btn-primary form-control" name="submitbtn" value="Submit">

    </form>
    </div>
</body>

</html>
