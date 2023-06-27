<?php
include('../connection.php');

$admin_name = "WorldOfTech_Admin_778866_Official!!!";
$session_admin_name = $_SESSION['Admin_Name'];


if (!isset($session_admin_name) && $admin_name !== $session_admin_name) {
    header('location:../index.php');
    exit();
}

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
    $update_query = "UPDATE `admin_blogs` SET `blog_cat`='$blog_categories',`thumbnail`='$thumbnail_img_path',`subtitle`='$blog_sub_title',`intro_para`='$intro_para',`intro_img`='$intro_para_img_path',`main_para`='$main_para',`main_img`='$main_para_img_path',`conclusion_para`='$conclusion_para',`conclusion_img`='$conclusion_para_img_path',`publish_date`='$blog_date',`meta_tags`='$metatags',`metatags_description`='$metatags_description' WHERE `id` = '$getid' ";
    $update_query_run = mysqli_query($conn, $update_query);
    if ($update_query_run) {
        $select = "SELECT * FROM `admin_blogs` WHERE `id` = '$getid'";
        $select_run = mysqli_query($conn, $select);
        $rowtwo = mysqli_fetch_array($select_run);
        echo $rowtwo['blogtitle'];
        $blog_page_structure = "<?php session_start();

        include('../connection.php');
        
        ?>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content=' width=device-width, initial-scale=1'>
    <meta name='keywords' content='" . $rowtwo[' meta_tags'] . "'>
              <meta name='description' content='" . $rowtwo['metatags_description'] . "'>
              <meta name='author' content='world of tech'>
        <title>" . $rowtwo['blogtitle'] . "</title>
        
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700' rel='stylesheet'>
        
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link type='text/css' rel='stylesheet' href='../style.css' />
        
        </head>
        <body>
        
        
        
        
        <div class='section'>
        
        <div class='container'>
          <input type='hidden' id='blog_id' value='" . $rowtwo['id'] . "'>
        <div class='row'>
        <div class='col-md-8'>
        
        
        
        
        <div class='section-row'>
        <h3> " . $rowtwo['blogtitle'] . "</h3>
        <h4> " . $rowtwo['subtitle'] . "</h4>
        <figure >
          <img src='../blog_images/" . $rowtwo['thumbnail'] . " ' alt='thumbnail'>
          </figure>
        <p>" . $rowtwo['intro_para'] . "</p>
        <figure >
          <img src='../blog_images/" . $rowtwo['intro_img'] . " ' alt='intro image'>
          </figure>
        <p> " . $rowtwo['main_para'] . " </p>
        
        <figure>
        <img src='../blog_images/" . $rowtwo['main_img'] . "' alt='main image of paragraph'>
        </figure>
        <h3>Conclusion</h3>
        <p>" . $rowtwo['conclusion_para'] . "</p>
        <figure>
        <img src='../blog_images/" . $rowtwo['conclusion_img'] . " ' alt='end image'>
        </figure>
        <input type='hidden' value='" . $rowtwo['id'] . "' id='hidden_id'>
        
        </div>
        
        
        
        
        <div class='section-row'>
        <div class='section-title'>
        <h3 class='title'>Leave a Comment</h3>
        </div>
        <form class='post-reply'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='form-group'>
                <input class='input' type='email'  id='ID_email' name='email' placeholder='Email'>
                </div>
                </div>
        <div class='col-md-12'>
        <div class='form-group'>
        <textarea class='input' required id='ID_commentarea' name='message' placeholder='Message'></textarea>
        </div>
        </div>
        
        <div class='col-md-12'>
        <input type='checkbox' required class='mx-1 mt-2' onclick='Checkbox()'>
        <label class='mx-1 mt-2'>I agree to notify me for the latest blogs</label>
        </div>
        
        <div class='col-md-12'>
        <input disabled type='button' class='primary-button' id='ID_button' value='Submit'>
      
        </div>
        </div>
        </form>
        </div>
        
        
        <div id='ID_div'> </div>
        
        
        </div>
        <div class='col-md-4'>
        
        
        
        
        <div class='aside-widget'>
        <div class='section-title'>
        <h2 class='title'>Social Media</h2>
        </div>
        <div class='social-widget'>
        <ul>
        <li class=''>
        <a href='#' class='social-facebook'>
        <i class='fa fa-facebook'></i>
        
        </a>
        </li>
        <li>
        <a href='#' class='social-twitter'>
        <i class='fa fa-instagram'></i>
        
        </a>
        </li>
        <li>
        <a href='#' class='social-google-plus'>
        <i class='fa fa-youtube-play'></i>
        
        </a>
        </li>
        </ul>
        </div>
        </div>
        
        <div class='aside-widget'>
            <div class='section-title'>
                <h2 class='title'>Popular Blogs</h2>
              </div>
              
             <?php include('../admin/popular_blogs.php')?>
        </div>
        
        
        
        
        
        
        
        
        </div>
        </div>
        
        </div>
        
        </div>
        
        
        
        
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script><script src='https://code.jquery.com/jquery-3.6.4.min.js' integrity='sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=' crossorigin='anonymous'></script> 
        <script src='https://code.jquery.com/jquery-3.6.4.min.js' integrity='sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=' crossorigin='anonymous'></script>
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
        
        <script async src='https://www.googletagmanager.com/gtag/js?id=UA-23581568-13'></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-23581568-13');
        </script>
        <script defer src='https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816' integrity='sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==' data-cf-beacon='{'rayId':'7c8d5501a82940d3','version':'2023.4.0','b':1,'token':'cd0b4b3a733644fc843ef0b185f98241','si':100}' crossorigin='anonymous'></script>
        
        </body>
        </html>
        ";
    }
    $file_name = "../blogs/" . $rowtwo["blogtitle"] . ".php";
    if ($file_name) {
        $file_handle = fopen($file_name, "w");
        $generate_file = fwrite($file_handle, $blog_page_structure);
        if
        (fclose($file_handle)) {
            header("location:admin_dashboard.php");
            exit();
        }
    }
} ?>



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