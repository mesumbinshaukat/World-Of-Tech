<?php
// ini_set('display_errors', '1');
session_start();

$admin_name = "WorldOfTech_Admin_778866_Official!!!";
$session_admin_name = $_SESSION['Admin_Name'];


if (!isset($session_admin_name) && $admin_name !== $session_admin_name) {
    header('location:../index.php');
    exit();
}

include('../connection.php');
if (isset($_POST['submitbtn'])) {
    $blog_date = $_POST['blog_date'];
    $blog_categories = $_POST['blog_categories'];
    $thumnail_img = $_FILES['thumbnail']['name'];
    $thumbnail_img_tmp = $_FILES['thumbnail']['tmp_name'];
    $thumbnail_img_path = '../blog_images/' . $thumnail_img;
    move_uploaded_file($thumbnail_img_tmp, $thumbnail_img_path);
    $blogtitle = $_POST['title'];
    $blog_sub_title = $_POST['subtitle'];
    $intro_para = mysqli_real_escape_string($conn, $_POST['intro_para']);
    // $intro_para = $_POST['intro_para'];
    // $intro_para = str_replace("'", "&s_q", $intro_para);
    // $intro_para = str_replace('"', "&d_q", $intro_para);
    // $intro_para = str_replace(':', "&c", $intro_para);
    // $intro_para = str_replace('/', "&f_slash", $intro_para);
    $intro_para_img = $_FILES['intro_img']['name'];
    $intro_para_img_tmp = $_FILES['intro_img']['tmp_name'];

    $intro_para_img_path = '../blog_images/' . $intro_para_img;
    move_uploaded_file($intro_para_img_tmp, $intro_para_img_path);
    $main_para = mysqli_real_escape_string($conn, $_POST['main_para']);
    $main_para_img = $_FILES['main_img']['name'];
    $main_para_img_tmp = $_FILES['main_img']['tmp_name'];

    $main_para_img_path = '../blog_images/' . $main_para_img;
    move_uploaded_file($main_para_img_tmp, $main_para_img_path);
    $conclusion_para = mysqli_real_escape_string($conn, $_POST['conclusion_para']);
    $conclusion_para_img = $_FILES['conclusion_img']['name'];
    $conclusion_para_img_tmp = $_FILES['conclusion_img']['tmp_name'];
    $conclusion_para_img_path = '../blog_images/' . $conclusion_para_img;

    move_uploaded_file($conclusion_para_img_tmp, $conclusion_para_img_path);
    $metatags = $_POST['meta_tags'];
    $metatags_description = $_POST['meta_tags_description'];
    $insert_query = "INSERT INTO
     `admin_blogs`(`blog_category`, `thumbnail`, `blogtitle`, `subtitle`, `intro_para`, `intro_img`, `main_para`, `main_img`, `conclusion_para`, `conclusion_img`, `publish_date`, `meta_tags`, `metatags_description`) VALUES ('$blog_categories ','$thumbnail_img_path','$blogtitle','$blog_sub_title','$intro_para','$intro_para_img_path','$main_para','$main_para_img_path','$conclusion_para','$conclusion_para_img_path','$blog_date','$metatags','$metatags_description')";
    $insert_query_run = mysqli_query($conn, $insert_query);
    if ($insert_query_run) {
        // echo"<script>alert('inserted')</script>";
        $select_query = "SELECT `id` FROM `admin_blogs` WHERE `blogtitle` = '$blogtitle'";
        $select_run_query = mysqli_query($conn, $select_query);
        $fetch_details = mysqli_fetch_array($select_run_query);
        $fetch_id = $fetch_details['id'];
        $_SESSION['id'] = $fetch_id;
        header("location:blog_generator.php");
        exit();
    } else {
        echo "<script>alert('not inserted')</script>";
    }


}

$select_categories = "SELECT * FROM `tbl_blogcat`";
$select_categories_run = mysqli_query($conn, $select_categories);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Add Blog</title>
    <?php include('../font.html') ?>
</head>

<body>
    <?php include("navbar.html"); ?>
    <h1 class="text-center">Blog</h1>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="date" name="blog_date" class="form-control">
            </div>
            <div class="mb-3">
                <label>Blog Category</label>
                <select name="blog_categories" class="form-control">
                    <?php while ($row = mysqli_fetch_array($select_categories_run)) { ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['blog_cat'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Thumnail</label>
            
                <input type="file" name="thumbnail" class="form-control"  >
            </div>
            <div class="mb-3">
                <label>Blog Title</label>
                <textarea type="text" name="title" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Sub Title</label>
                <textarea type="text" name="subtitle" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Intro Paragraph</label>
                <textarea type="text" name="intro_para" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Intro Image/Video</label>
                <input type="file" name="intro_img" class="form-control">
            </div>
            <div class="mb-3">
                <label>Main Paragraph</label>
                <textarea type="text" name="main_para" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Main Image/Video</label>
                <input type="file" name="main_img" class="form-control">
            </div>
            <div class="mb-3">
                <label>Conclusion</label>
                <textarea type="text" name="conclusion_para" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Conclusion Image/Video</label>
                <input type="file" name="conclusion_img" class="form-control">
            </div>
            <div class="mb-3">
                <label>Meta Tags</label>
                <input type="text" name="meta_tags" class="form-control">
            </div>
            <div class="mb-3">
                <label>Meta Tags Description</label>
                <input type="text" name="meta_tags_description" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary form-control" name="submitbtn" value="Submit">

        </form>
    </div>

</body>

</html>