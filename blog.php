<?php 
$conn = mysqli_connect("localhost","root","","world_of_tech");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="canonical" href="https://www.worldoftech.company/blog.php">
    <style>
    .items {
        transition: .4s;
        border: none;
    }

    .items:hover {
        transform: scale(0.9);
    }
    </style>
</head>

<body>
    <!-- navbar -->
    <section id="navbar">
        <?php include("navbar.html");?>
    </section>




    <!-- main section -->
    <section class="categories_cards mt-5 pt-5 pb-3 mb-3 ">



        <h2 class="text-left mx-3 mb-5 mt-5">Sports</h2>
        <div class="owl-carousel container-fluid text-center">
            <?php
                    $select_categories_sports = "SELECT * FROM `admin_blogs` WHERE blog_category = 'Sports'";
                    $select_categories_sports_run = mysqli_query($conn,$select_categories_sports);
                    while($fetch_sports = mysqli_fetch_array($select_categories_sports_run)){
                        ?>

            <div class="items">
                <div class="card " style="width: 18rem;">
                    <a href="blogdetails.php?id=<?php echo $fetch_sports['id']?>" class="text-decoration-none">
                        <img src="<?php echo 'admin/'.$fetch_sports['thumbnail']?>" width="200px" class="card-img-top"
                            alt="thumbnail">
                        <div class="card-body text-dark">
                            <h5 class="card-title"><?php echo $fetch_sports['blogtitle']?></h5>
                            <p class="card-text"><?php echo $fetch_sports['subtitle']?></p>

                        </div>
                    </a>
                </div>
            </div>
            <?php }?>

        </div>


        <h2 class="text-left mx-3 mt-5 mb-5">Tech</h2>

        <div class="owl-carousel container-fluid text-center">
            <?php
                    $select_categories_tech = "SELECT * FROM `admin_blogs` WHERE blog_category = 'Tech'";
                    $select_categories_tech_run = mysqli_query($conn,$select_categories_tech);
                    while($fetch_tech = mysqli_fetch_array($select_categories_tech_run)){
                        ?>
            <div class="items">
                <div class="card " style="width: 18rem;">
                    <a href="blogdetails.php?id=<?php echo $fetch_tech['id']?>" class="text-decoration-none">
                        <img src="<?php echo 'admin/'.$fetch_tech['thumbnail']?>" width="200px" class="card-img-top"
                            alt="thumbnail">
                        <div class="card-body text-dark">
                            <h5 class="card-title"><?php echo $fetch_tech['blogtitle']?></h5>
                            <p class="card-text"><?php echo $fetch_tech['subtitle']?></p>
                        </div>
                    </a>
                </div>
            </div>

            <?php }?>

        </div>
    </section>




    <!-- footer -->
    <section id="footer">
        <?php include("footer.html");?>
    </section>

</body>

<script src="jquery/jquery-3.6.0.min.js"></script>
<script src="owlcarousel/dist/owl.carousel.js"></script>
<script>
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});
</script>
<script>
$('.owl-carousel').owlCarousel({
    loop: false,

    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 5,
            nav: true,
            loop: false
        }
    }
})
</script>

</html>