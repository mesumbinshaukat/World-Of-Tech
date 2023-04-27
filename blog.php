<?php
ini_set('display_errors', '1');
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH | BLOGS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="world of tech, software house, world of tech software house, world of tech blog, blog post, tech blogs, software house blogs, best blogs, best blogging website, informative tech based blogs, world of tech blog for software house">
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
    <?php include('./font.html') ?>
    <style>
    .items {
        transition: .4s;
        border: none;
    }

    .items:hover {
        transform: scale(0.9);
    }

    #category_wise {
        width: 100%;
        /* height: 300px; */
        /* background-color: lightseagreen; */
        background-image: url('./images/blog-2355684_1280.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: 100%;
    }

    #blogs_header {
        width: 100%;
        /* background-color: lightseagreen; */
    }

    .cat_btn {
        border: none;
        background-color: transparent;

    }

    .cat_btn:hover {
        transform: scale(1.2);
    }

    .btn_menu {
        background-color: transparent;
        border: none;
    }

    #blogs_toggle {
        display: none;
    }

    .blog_categories {
        background-color: rgba(255, 255, 255, 0.541);
    }

    .bg_color {
        background-color: rgba(255, 255, 255, 0.541);
    }
    </style>
</head>

<body>

    <?php include('font.html') ?>

    <!-- navbar -->
    <section id="navbar" class="mb-5 pb-5">
        <?php include("navbar.html"); ?>
    </section>
    <!-- header -->

    <section id="main_blog_active">
        <button type="button" class="btn_menu float-end pb-2 pe-3 mt-3" onclick="btn_menu()"><img src="./icons/list.png"
                width="25px" alt="sarim ka pyara hamburger"></button>

        <section id="category_wise"
            class=" d-flex flex-column  justify-content-center align-items-center mt-5 pt-5 pb-5">
            <div class="bg_color p-2 text-center fw-bold mb-3">
                <p class="mb-3 pt-3 fs-2 text-dark">BLOG CATEGORIES</p>
            </div>


            <div class="blog_categories text-center ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <h1 class="fs-5 text-dark"><input type="button" class="cat_btn p-2 fw-bold"
                                onclick="myFunction('Tech')" value="Tech"></h1>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <h1 class="fs-5 text-dark"><input type="button" class="cat_btn p-2 fw-bold"
                                onclick="myFunction('Sports')" value="Sports"></h1>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <h1 class="fs-5 text-dark"><input type="button" class="cat_btn p-2 fw-bold"
                                onclick="allFunction()" value="All"></h1>

                    </div>
                </div>




            </div>
        </section>
        <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5127564542975092"
            crossorigin="anonymous"></script>
        <!-- side_add -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5127564542975092"
            data-ad-slot="9705757525" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <!-- main section active -->

        <section class="mt-4 pt-4 pb-3 mb-3" id="all_blogs_cards">
            <div class="container text-center">
                <div class="row justify-content-center text-center">
                    <?php
                    $select_all = "SELECT * FROM `admin_blogs`";
                    $select_all_run = mysqli_query($conn, $select_all);
                    while ($fetching_all = mysqli_fetch_array($select_all_run)) { ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center text-center">
                        <div class="items">
                            <a class="text-decoration-none text-dark"
                                href="blogdetails.php?id='<?php echo $fetching_all['id'] ?>'">
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo 'admin/' . $fetching_all['thumbnail'] ?>" class="card-img-top"
                                        width="250px" alt="blog_img">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $fetching_all['blogtitle'] ?></h5>
                                        <p class="card-text  text-center"><?php echo $fetching_all['subtitle'] ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="mt-4 pt-4 pb-3 mb-3" id="categories_wise_cards"></section>

    </section>

    <!-- main section on toggle -->
    <section id="blogs_toggle">
        <button type="button" class="btn_menu float-end pb-2 pe-3 mt-3" onclick="btn_menu1()"><img
                src="./icons/menu.png" width="25px" alt=""></button>

        <div id="blogs_header" class=" d-flex flex-column justify-content-center align-items-center mt-2 pt-5 pb-5 ">
            <p class="mb-3 pt-3 fs-2">Blogs</p>
        </div>

        <!-- main section on toggle button -->
        <div class="pt-1 pb-3 mb-3">

            <h2 class="text-left mx-5 mb-5 mt-5">Sports</h2>
            <div class="owl-carousel container-fluid text-center">
                <?php
                $select_categories_sports = "SELECT * FROM `admin_blogs` WHERE blog_category = 'Sports'";
                $select_categories_sports_run = mysqli_query($conn, $select_categories_sports);
                while ($fetch_sports = mysqli_fetch_array($select_categories_sports_run)) {
                    ?>

                <div class="items d-flex justify-content-center">
                    <div class="card " style="width: 18rem;">
                        <a href="blogdetails.php?id=<?php echo $fetch_sports['id'] ?>" class="text-decoration-none">
                            <img src="<?php echo 'admin/' . $fetch_sports['thumbnail'] ?>" width="200px"
                                class="card-img-top">
                            <div class="card-body text-dark">
                                <h5 class="card-title"><?php echo $fetch_sports['blogtitle'] ?></h5>
                                <p class="card-text"><?php echo $fetch_sports['subtitle'] ?></p>

                            </div>
                        </a>
                    </div>
                </div>
                <?php } ?>

            </div>


            <h2 class="text-left mx-5 mt-5 mb-5">Tech</h2>

            <div class="owl-carousel container-fluid text-center">
                <?php
                $select_categories_tech = "SELECT * FROM `admin_blogs` WHERE blog_category = 'Tech'";
                $select_categories_tech_run = mysqli_query($conn, $select_categories_tech);
                while ($fetch_tech = mysqli_fetch_array($select_categories_tech_run)) {
                    ?>
                <div class="items d-flex justify-content-center">
                    <div class="card " style="width: 18rem;">
                        <a href="blogdetails.php?id=<?php echo $fetch_tech['id'] ?>" class="text-decoration-none">
                            <img src="<?php echo 'admin/' . $fetch_tech['thumbnail'] ?>" width="200px"
                                class="card-img-top">
                            <div class="card-body text-dark">
                                <h5 class="card-title"><?php echo $fetch_tech['blogtitle'] ?></h5>
                                <p class="card-text"><?php echo $fetch_tech['subtitle'] ?></p>
                            </div>
                        </a>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>

    </section>



    <!-- footer -->
    <section id="footer">
        <?php include("footer.html"); ?>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function btn_menu1() {
        document.getElementById("main_blog_active").style.display = "block"
        document.getElementById("blogs_toggle").style.display = "none";
    }

    function btn_menu() {
        document.getElementById("main_blog_active").style.display = "none"
        document.getElementById("blogs_toggle").style.display = "block";

    }

    function myFunction(param) {
        document.getElementById("all_blogs_cards").style.display = "none";
        document.getElementById("categories_wise_cards").style.display = "block";
        var categories = param;
        $.ajax({
            url: 'blogs_cards.php',
            type: 'POST',
            data: {
                click: 1,
                blog_cat: categories
            },
            success: function(data) {
                $('#categories_wise_cards').html(data);
            }
        })
    }


    function allFunction() {
        document.getElementById("categories_wise_cards").style.display = "none";
        document.getElementById("all_blogs_cards").style.display = "block";
    }
    </script>
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

</body>




</html>