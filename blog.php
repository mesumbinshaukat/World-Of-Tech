<?php 
$conn = mysqli_connect("localhost","root","XcRny943ve76JB","world_of_tech");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH | BLOGS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="blogs, world of tech blogs, tech blogs, error blogs, development blogs, blog websites, worldoftech, software house blogs, business blogs">
    <meta name="description"
        content="Our blog spage has one of the most informative blog section by professional blog writer with updated knowledge, only at WORLD OF TECH.">
    <meta name="author" content="World Of Tech">
    <link rel="shortcut icon" href="./LOGO/Logo-white-text-full-screen(2048px-1152px).png">
    <link rel="apple-touch-icon" href="./LOGO/Logo-white-text-full-screen(2048px-1152px).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="https://www.worldoftech.company/blog.php">
    <?php include('./font.html')?>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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