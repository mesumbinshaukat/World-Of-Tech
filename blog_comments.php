<?php
session_start();
// $conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");
include("connection.php");
// $conn = mysqli_connect('localhost', 'root', '', 'world_of_tech') or die("Can't Connect");
if (isset($_POST['submitbtn'])) {
    $blog_id = $_POST['hid_id'];
    $comment = $_POST['ID_comment'];
    $comment = str_replace("<", "&lt", $comment);
    $comment = str_replace(">", "&gt", $comment);
    $user_email = $_POST['user_email'];
    $user_email = str_replace("<", "&lt", $user_email);
    $user_email = str_replace(">", "&gt", $user_email); 
    //    $blog_id = $_SESSION['id'];
    $insert_query = "INSERT INTO `blogs_comment`(`comments`, `blog_id`,`user_email`) VALUES ('$comment','$blog_id','$user_email')";
    $query_run = mysqli_query($conn, $insert_query);
}
// $id = $_SESSION['id'];
if (isset($_POST['blog_id'])) {
    $blog_id = $_POST['blog_id'];
    $_SESSION['id'] = $blog_id;

}
$id = $_SESSION['id'];
$select_query = "SELECT * FROM `blogs_comment` WHERE `blog_id` = '$id' ";
$select_query_run = mysqli_query($conn, $select_query);


?>

<html lang="en">

<head>
<link type='text/css' rel='stylesheet' href='style.css' />

    <style>
    .heading {
        /* text-decoration: underline;  */
        color: #5A5A5A;
    }

    .p {
        border-bottom: 1px solid #8b8680;
        font-size: 18px;

    }
    </style>
</head>

<body>
   
  <div class='section-title'>
      <?php if (mysqli_num_rows($select_query_run) >= 1) { ?>
        <h3 class='title'>Comments</h3>
        <?php } ?>
  </div>
  <div class='post-comments'>
    
  <div class='media'>
  
      <?php while ($row = mysqli_fetch_array($select_query_run)) { ?>
  <div class='media-body mx-2'>
  <div class='media-heading'>
  <h4><?php $username = strstr($row['user_email'], '@', true);
        echo $username; ?>:</h4>
</div>
<p><?php echo $row['comments'] ?></p>
  
<?php } ?>
  </div>

  </div>
  
  </div>


   

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>

</html>