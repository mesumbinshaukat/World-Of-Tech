<?php
include('../connection.php');
$getid = $_GET['id'];
$selecting_query = "SELECT * FROM `admin_blogs` WHERE `id` = '$getid'";
$query_run = mysqli_query($conn , $selecting_query);
$data = mysqli_fetch_array($query_run);

if (isset($_POST['submitbtn'])) {
    $blog_date = $_POST['blog_date'];
    $blog_categories = $_POST['blog_categories'];
    $thumnail_img = $_FILES['thumbnail']['name'];
    $thumbnail_img_tmp = $_FILES['thumbnail']['tmp_name'];
    $thumbnail_img_path = '../blog_images/' . $thumnail_img;
    move_uploaded_file($thumbnail_img_tmp, $thumbnail_img_path);
    $blogtitle = $_POST['title'];
    $blog_sub_title = $_POST['subtitle'];
    $intro_para = $_POST['intro_para'];
    $intro_para_img = $_FILES['intro_img']['name'];
    $intro_para_img_tmp = $_FILES['intro_img']['tmp_name'];

    $intro_para_img_path = '../blog_images/' . $intro_para_img;
    move_uploaded_file($intro_para_img_tmp, $intro_para_img_path);
    $main_para = $_POST['main_para'];
    $main_para_img = $_FILES['main_img']['name'];
    $main_para_img_tmp = $_FILES['main_img']['tmp_name'];

    $main_para_img_path = '../blog_images/' . $main_para_img;
    move_uploaded_file($main_para_img_tmp, $main_para_img_path);
    $conclusion_para = $_POST['conclusion_para'];
    $conclusion_para_img = $_FILES['conclusion_img']['name'];
    $conclusion_para_img_tmp = $_FILES['conclusion_img']['tmp_name'];
    $conclusion_para_img_path = '../blog_images/' . $conclusion_para_img;

    move_uploaded_file($conclusion_para_img_tmp, $conclusion_para_img_path);
    $metatags = $_POST['meta_tags'];
    $metatags_description = $_POST['meta_tags_description'];
    $update_query = "UPDATE `admin_blogs` SET `blog_category`='$blog_categories',`thumbnail`='$thumbnail_img_path',`blogtitle`='$blogtitle',`subtitle`='$blog_sub_title',`intro_para`='$intro_para',`intro_img`='$intro_para_img_path',`main_para`='$main_para',`main_img`='$main_para_img_path',`conclusion_para`='$conclusion_para',`conclusion_img`='$conclusion_para_img_path',`publish_date`='$blog_date',`meta_tags`='$metatags',`metatags_description`='$metatags_description' WHERE `id` = '$getid' ";
    $update_query_run = mysqli_query($conn, $update_query);
    if ($update_query_run) {
        header('location:showblog.php');
        

    } else {
        echo "<script>alert('not updated')</script>";
    }


}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <input type="date" name="blog_date" class="form-control" value="<?php echo $data['publish_date'];?>">
            </div>
            <div class="mb-3">
                <label>Blog Category</label>
                <select name="blog_categories" class="form-control">
                    <option value="Tech">Tech</option>
                    <option value="Sports">Sports</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Thumnail</label>
                <input type="file" name="thumbnail" class="form-control" value="<?php echo $data['thumbnail'];?>">
            </div>
            <div class="mb-3">
                <label>Blog Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $data['blogtitle'];?>"/>
            </div>
            <div class="mb-3">
                <label>Sub Title</label>
                <input type="text" name="subtitle" class="form-control" value="<?php echo $data['subtitle'];?>"/>
            </div>
            <div class="mb-3">
                <label>Intro Paragraph</label>
                <textarea type="text" name="intro_para" class="form-control"><?php echo $data['intro_para'];?></textarea>
            </div>
            <div class="mb-3">
                <label>Intro Image/Video</label>
                <input type="file" name="intro_img" class="form-control" value="<?php echo $data['intro_img'];?>">
            </div>
            <div class="mb-3">
                <label>Main Paragraph</label>
                <textarea type="text" name="main_para" class="form-control"><?php echo $data['main_para'];?></textarea>
            </div>
            <div class="mb-3">
                <label>Main Image/Video</label>
                <input type="file" name="main_img" class="form-control" value="<?php echo $data['main_img'];?>">
            </div>
            <div class="mb-3">
                <label>Conclusion</label>
                <textarea type="text" name="conclusion_para" class="form-control"><?php echo $data['conclusion_para'];?></textarea>
            </div>
            <div class="mb-3">
                <label>Conclusion Image/Video</label>
                <input type="file" name="conclusion_img" class="form-control" value="<?php echo $data['conclusion_img'];?>">
            </div>
            <div class="mb-3">
                <label>Meta Tags</label>
                <input type="text" name="meta_tags" class="form-control" value="<?php echo $data['meta_tags'];?>">
            </div>
            <div class="mb-3">
                <label>Meta Tags Description</label>
                <input type="text" name="meta_tags_description" class="form-control" value="<?php echo $data['metatags_description'];?>">
            </div>

            <input type="submit" class="btn btn-primary form-control" name="submitbtn" value="Submit">

        </form>
    </div>

</body>
</html>