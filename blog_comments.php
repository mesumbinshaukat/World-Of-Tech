<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'world_of_tech') or die("Can't Connect");
if(isset($_POST['submitbtn'])){
    $blog_id = $_POST['hid_id'];
    $comment = $_POST['ID_comment'];
    $_SESSION['blog_id'] = $blog_id;
    $insert_query = "INSERT INTO `blogs_comment`(`comments`, `blog_id`) VALUES ('$comment','$blog_id')";
    $query_run = mysqli_query($conn , $insert_query);

}
$id = $_SESSION['blog_id'];
$select_query = "SELECT * FROM `blogs_comment` WHERE `blog_id` = '$id'";
$select_query_run = mysqli_query($conn,$select_query);
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <p><?php echo $id?></p>
    <?php if(mysqli_num_rows($select_query_run) >= 1)  {?>
    <h2>Comments</h2>
    <?php }?>
    <?php while($row = mysqli_fetch_array($select_query_run)){?>
  <p><?php echo $row['comments']?></p>   
  <?php }?>
     <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>
</html>


