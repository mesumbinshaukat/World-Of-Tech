<?php
include('../connection.php');
$getid = $_GET['id'];
$selecting_query = "SELECT * FROM `admin_blogs` WHERE `id` = '$getid'";
$query_run = mysqli_query($conn, $selecting_query);
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
    $intro_para = str_replace("'", "&s_q", $intro_para);
    $intro_para = str_replace('"', "&d_q", $intro_para);
    $intro_para = str_replace(':', "&c", $intro_para);
    $intro_para = str_replace('/', "&f_slash", $intro_para);
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
    $update_query = "UPDATE `admin_blogs` SET `blog_category`='$blog_categories',`thumbnail`='$thumbnail_img_path',`subtitle`='$blog_sub_title',`intro_para`='$intro_para',`intro_img`='$intro_para_img_path',`main_para`='$main_para',`main_img`='$main_para_img_path',`conclusion_para`='$conclusion_para',`conclusion_img`='$conclusion_para_img_path',`publish_date`='$blog_date',`meta_tags`='$metatags',`metatags_description`='$metatags_description' WHERE `id` = '$getid' ";
    $update_query_run = mysqli_query($conn, $update_query);
    if ($update_query_run) {
        $select = "SELECT * FROM `admin_blogs` WHERE `id` = '$getid'";
        $select_run = mysqli_query($conn, $select);
        $rowtwo = mysqli_fetch_array($select_run);
        echo $rowtwo['blogtitle'];
        $blog_page_structure = "

        <?php session_start();?>
<html>

<head>
    <title>" . $rowtwo['blogtitle'] . "</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content=' width=device-width, initial-scale=1'>
    <meta name='keywords' content='" . $rowtwo[' meta_tags'] . "'>
              <meta name='description' content='" . $rowtwo['metatags_description'] . "'>
              <meta name='author' content='world of tech'>
              <link rel='shortcut icon' href='/LOGO/Logo-white-text-full-screen(2048px-1152px).png'>
          <link rel='apple-touch-icon' href='/LOGO/Logo-white-text-full-screen(2048px-1152px).png'>
          <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
              integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
              <style>
              body{
                  background-color: rgb(228, 228, 228) !important;
                  font-family: 'Roboto Slab', serif !important;
      
              }
          .image {
              border: 2px solid transparent;
              border-radius: 20px;
          }
      
          .image:hover {
              border-radius: 0px;
              cursor: pointer;
          }
      
          .modal {
              height: 100%;
              width: 100%;
          }
      
          .img_modal {
              height: 100%;
              width: 100%;
          }
      
          #card {
              border: none;
          }
          .word{
              word-spacing:1px;
              letter-spacing:.5px;
          }
          </style>
          </head>
      
          <body>
      
      
      <div class='container pt-3 word'>
      <input type='hidden' id='blog_id' value='" . $rowtwo['id'] . "'>
      
          <!-- blog section starts -->
          <div class='blog_details section'>
              <!-- title and category -->
              <div class='title_and_category'>
                  <p class='text-center mx-2 mt-2 '>" . $row['publish_date'] . "<a
                          class='text-secondary text-decoration-none' href='blog.php'> " . $rowtwo['blog_cat'] . " </a></p>
                  <h2 class='mx-2 mb-4 fs-1 fw-bolder text-center text-uppercase'> " . $rowtwo['blogtitle'] . " </h2>
              </div>
              <!-- intro and thumbnail  -->
              <div class='container'>
      
                  <div class='col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center'>
                  <div class='card w-75' id='card'>
                          <img src='../blog_images/" . $rowtwo['thumbnail'] . " '
                              class='image' alt='thumbnail'>
                      </div>
                  </div>
      
                  <div class='intro col-lg-12 '>
                      <h5 class='text-center fs-3 fst-italic mx-2 mt-4 mb-4 '> " . $rowtwo['subtitle'] . " </h5>
                      <h6 class='text-center mx-2 mt-2 mb-4 fw-normal fs-5'> " . $rowtwo['intro_para'] . " </h6>
                          <img src='../blog_images/" . $rowtwo['intro_img'] . "' class='image w-50 mx-auto d-block' alt='intro image'>
                  </div>
              </div>
              <!-- main section -->
              <div class='main_section'>
                  <p class='mx-2 mt-3 mb-4 fs-5 text-center'> " . $rowtwo['main_para'] . " </p>
      
                      <img src='../blog_images/" . $rowtwo['main_img'] . "' class='image w-50 mx-auto d-block' alt='main image of paragraph'>
      
              </div>
              <div class='conclusion_section mb-3'>
                  <p class='mx-2 mt-3 mb-3 fs-5 text-center'> " . $rowtwo['conclusion_para'] . " </p>
      
                      <img src='../blog_images/" . $rowtwo['conclusion_img'] . " ' class='image w-50 mx-auto d-block' alt='end image'>
      
              </div>
      
          </div>
      </div>
      
      <section id ='comment_section' class='container mt-5'>
              <h2 class='fw-bold'> Comment </h2>
              <input type='email' class='form-control mb-3 mt-3' required placeholder='Enter Your Email' id='ID_email'>
              <textarea id='ID_commentarea' class='form-control' placeholder='Enter Your Comment' rowtwos='4'></textarea>
              <input type='checkbox' class='mx-1 mt-2 '  onclick='Checkbox()'>
              <label class='mx-1 mt-2'>I agree to notify me for the latest blogs</label>
              <br>
              <input type='button' disabled class='btn btn-dark mt-2 mb-3 px-5' value='Submit' id='ID_button'>
              <input type='hidden' value='" . $rowtwo['id'] . "' id='hidden_id'>
          <div id='ID_div'> </div>
          </section>
      
      
          <script src='https://code.jquery.com/jquery-3.6.4.min.js'
              integrity='sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=' crossorigin='anonymous'>
          </script>
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
          <script>
          function Checkbox(){
              document.getElementById('ID_button').toggleAttribute('disabled');
          }  
          $(document).ready(function() {
              var blog_ids = $('#blog_id').val();
              $.ajax({
                  url:'../blog_comments.php',
                  type:'POST',
                  data:{
                      blog_id: blog_ids,
                  }
      
              })
      
              dataLoad();
      
              function dataLoad() {
                  $.ajax({
                      url: '../blog_comments.php',
                      type: 'POST',
                      success: function(data) {
                          $('#ID_div').html(data);
                      }
                  })
      
              }
      
      
              $('#ID_button').click(function() {
                  var comment = $('#ID_commentarea').val();
                  var hidden_id = $('#hidden_id').val();
                  var email = $('#ID_email').val();
      
                  $.ajax({
                      url: '../blog_comments.php',
                      type: 'POST',
                      data: {
                          submitbtn: 1,
                          ID_comment: comment,
                          hid_id: hidden_id,
                          user_email:email
                      },
                      success: function() {
                          dataLoad();
                      }
      
                  })
              })
          })
          </script>
      </body>
      </html>" ; } $file_name="../blogs/" . $rowtwo["blogtitle"] . ".php" ; if ($file_name) {
        $file_handle=fopen($file_name, "w" ); $generate_file=fwrite($file_handle, $blog_page_structure); if
        (fclose($file_handle)) { header("location:admin_dashboard.php"); exit(); } } } ?>



    <?php
$select_categories = "SELECT * FROM `tbl_blogcat`";
$select_categories_run = mysqli_query($conn, $select_categories);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Update Blog</title>
    </head>

<body>
    <?php include("navbar.html"); ?>
    <div class="container">
        <form method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <input type="date" name="blog_date" class="form-control" value="<?php echo $data['publish_date']; ?>">
            </div>
            <div class="mb-3">
                <label>Blog Category</label>
                <select name="blog_categories" class="form-control">
                    <?php while ($categories = mysqli_fetch_array($select_categories_run)) { ?>
                    <option value="<?php echo $categories['id'] ?>"><?php echo $categories['blog_cat'] ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Thumnail</label>
                <input type="file" name="thumbnail" class="form-control" value="<?php echo $data['thumbnail']; ?>">
            </div>
            <div class="mb-3">
                <label>Blog Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $data['blogtitle']; ?>" />
            </div>
            <div class="mb-3">
                <label>Sub Title</label>
                <input type="text" name="subtitle" class="form-control" value="<?php echo $data['subtitle']; ?>" />
            </div>
            <div class="mb-3">
                <label>Intro Paragraph</label>
                <textarea type="text" name="intro_para"
                    class="form-control"><?php echo $data['intro_para']; ?></textarea>
            </div>
            <div class="mb-3">
                <label>Intro Image/Video</label>
                <input type="file" name="intro_img" class="form-control" value="<?php echo $data['intro_img']; ?>">
            </div>
            <div class="mb-3">
                <label>Main Paragraph</label>
                <textarea type="text" name="main_para" class="form-control"><?php echo $data['main_para']; ?></textarea>
            </div>
            <div class="mb-3">
                <label>Main Image/Video</label>
                <input type="file" name="main_img" class="form-control" value="<?php echo $data['main_img']; ?>">
            </div>
            <div class="mb-3">
                <label>Conclusion</label>
                <textarea type="text" name="conclusion_para"
                    class="form-control"><?php echo $data['conclusion_para']; ?></textarea>
            </div>
            <div class="mb-3">
                <label>Conclusion Image/Video</label>
                <input type="file" name="conclusion_img" class="form-control"
                    value="<?php echo $data['conclusion_img']; ?>">
            </div>
            <div class="mb-3">
                <label>Meta Tags</label>
                <input type="text" name="meta_tags" class="form-control" value="<?php echo $data['meta_tags']; ?>">
            </div>
            <div class="mb-3">
                <label>Meta Tags Description</label>
                <input type="text" name="meta_tags_description" class="form-control"
                    value="<?php echo $data['metatags_description']; ?>">
            </div>

            <input type="submit" class="btn btn-primary form-control" name="submitbtn" value="Submit">

        </form>
    </div>

</body>

</html>