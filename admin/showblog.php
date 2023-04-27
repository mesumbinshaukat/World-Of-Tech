<?php
$conn = mysqli_connect('localhost', 'root', '', 'world_of_tech') or die("Can't Connect");
$select_query = "SELECT * FROM `admin_blogs` ";
$query_run = mysqli_query($conn, $select_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Thumnail</th>
        <th scope="col">Blog Title</th>
        <th>Update & Delete Blog</th>

      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_array($query_run)) { ?>
        <tr>
          <td><img class="w-25" src="<?php echo $row['thumbnail']; ?>"></td>
          <td><?php echo $row['blogtitle']; ?></td>
          <td><a href="updateblog.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Update
              Blog</a>&nbsp;<a href="deleteblog.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"
              onclick="return confirm('Are you sure you want to delete this blog?')">Delete Blog</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>