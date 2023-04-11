<?php 
    $conn = $conn = mysqli_connect('localhost','root','','world_of_tech');
    $id = $_GET['id'];
    $select_query = "SELECT * FROM `admin_blogs` WHERE id = $id";
    $select_query_run = mysqli_query($conn,$select_query);
?>
<html lang="en">

<head>
    <?php while($blogs_details = mysqli_fetch_array($select_query_run)) {?>
    <title><?php echo $blogs_details['blogtitle']?></title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
    </style>
</head>

<body>
    <div class="container-fluid ">
        <!-- blog section starts -->
        <div class="blog_details section">
            <!-- title and category -->
            <div class="title_and_category">
                <p class="text-left mx-2 mt-2 "><?php echo $blogs_details['publish_date']?> / <a
                        class="text-secondary text-decoration-none"
                        href="blog.php"><?php echo $blogs_details['blog_category']?></a></p>
                <h2 class="text-left mx-2 mb-3"><?php echo $blogs_details['blogtitle']?></h2>
            </div>
            <!-- intro and thumbnail  -->
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card" id="card">
                        <img src="<?php echo 'admin/'.$blogs_details['thumbnail']?>" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" class="image w-50" alt="thumbnail">
                    </div>
                </div>

                <div class="intro col-lg-12 d-flex flex-column align-self-center">
                    <h2 class="text-left mx-2 mt-3 mb-1">Subtitle</h2>
                    <h5 class="text-left mx-2 mt-2 mb-3"><?php echo $blogs_details['subtitle']?></h5>
                    <h2 class="text-left mx-2 mt-3 mb-1">Introduction</h2>
                    <h6 class="text-left mx-2 mt-2 mb-3"><?php echo $blogs_details['intro_para']?></h6>
                    <div class="card" id="card">
                        <img src="<?php echo 'admin/'.$blogs_details['intro_img']?>" class="image w-25"
                            alt="intro image">
                    </div>
                </div>
            </div>
            <!-- main section -->
            <div class="main_section">
                <h2 class="text-left mx-2 mt-3 mb-1">Main</h2>
                <p class="text-left mx-2 mt-3 mb-3"><?php echo $blogs_details['main_para']?></p>
                <div class="card" id="card">
                    <img src="<?php echo 'admin/'.$blogs_details['main_img']?>" class="image w-25"
                        alt="main image of paragraph">
                </div>
            </div>
            <div class="conclusion_section mb-5">
                <h2 class="text-left mx-2 mt-3 mb-1">Conclusion</h2>
                <p class="text-left mx-2 mt-3 mb-3"><?php echo $blogs_details['conclusion_para']?></p>
                <div class="card" id="card">
                    <img src="<?php echo 'admin/'. $blogs_details['conclusion_img']?>" class="image w-25"
                        alt="end image">
                </div>
            </div>

        </div>
    </div>


    <!-- modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo 'admin/'.$blogs_details['thumbnail']?>" class="img_modal" alt="">
                </div>

            </div>
        </div>
    </div>
    <?php }?>

    <section id="footer">
        <?php include('footer.html')?>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>