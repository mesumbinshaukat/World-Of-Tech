<?php
    include('../connection.php');
 $select_blogs = 'SELECT * FROM `admin_blogs` INNER JOIN `tbl_blogcat` ON  admin_blogs.blog_category = tbl_blogcat.id';

      // $select_blogs = 'SELECT * FROM `admin_blogs`';
      $select_blogs_run = mysqli_query($conn,$select_blogs);
     while($blogs = mysqli_fetch_array($select_blogs_run)) {?>
<div class='post post-widget'>
<a class='post-img' href='../blog.php'><img src='<?php echo $blogs['thumbnail']?>' alt='thumbnail img'></a>
<div class='post-body'>
<div class='post-category'>
<a href='../blog.php'><?php echo $blogs['blog_cat']?></a>
</div>
<h3 class='post-title'><a href='../blog.php'><?php echo $blogs['blogtitle']?></a></h3>
</div>
</div>

<?php }?>