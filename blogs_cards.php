<?php
$conn = mysqli_connect('localhost', 'root', 'XcRny943ve76JB', 'world_of_tech') or die("Can't Connect");

// $conn = mysqli_connect("localhost", "root", "", "world_of_tech");
if (isset($_POST['click'])) {
    $categories = $_POST['blog_cat'];
    $select_blogs = "SELECT * FROM `admin_blogs` WHERE blog_category = '$categories'";
    $select_blogs_run = mysqli_query($conn, $select_blogs);


}

?>
<html lang="en">

<head>
    <style>
        .items {
            transition: .4s;
            border: none;
        }

        .items:hover {
            transform: scale(0.9);
        }
    </style>
    <link rel="stylesheet" href="./bootstrap-5.2.3/css/bootstrap.min.css">
    <title>Blog Cards</title>
</head>

<body>
    <div class="container">
        <div class="row text-center ">
            <?php while ($blogs_cards = mysqli_fetch_array($select_blogs_run)) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex mb-4 justify-content-center text-center">
                    <div class="items">
                        <a class="text-decoration-none text-dark"
                            href="blogdetails.php?id='<?php echo $blogs_cards['id'] ?>'">
                            <div class="card text-center" style="width: 18rem;">
                                <img src="<?php echo 'admin/' . $blogs_cards['thumbnail'] ?>" class="card-img-top"
                                    alt="blog_img">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $blogs_cards['blogtitle'] ?></h5>
                                    <p class="card-text"><?php echo $blogs_cards['subtitle'] ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</body>

</html>