<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'world_of_tech') or die("Can't Connect");
$blog_id = $_SESSION['id'];
$fetch_query = "SELECT * FROM `admin_blogs` WHERE id = '$blog_id'";
$fetch_query_run = mysqli_query($conn, $fetch_query);



while ($row = mysqli_fetch_array($fetch_query_run)) {

    $blog_page_structure = "


    <html>

    <head>
        <title>" . $row['blogtitle'] . "</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content=' width=device-width, initial-scale=1'>
        <meta name='keywords' content='" . $row['meta_tags'] . "'>
        <meta name='description' content='" . $row['metatags_description'] . "'>
        <meta name='author' content='world of tech'>
        <link rel='shortcut icon' href='/LOGO/Logo-white-text-full-screen(2048px-1152px).png'>
    <link rel='apple-touch-icon' href='/LOGO/Logo-white-text-full-screen(2048px-1152px).png'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
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
    

<div class='container-fluid pt-3'>
    <!-- blog section starts -->
    <div class='blog_details section'>
        <!-- title and category -->
        <div class='title_and_category'>
            <p class='text-left mx-2 mt-2 '> " . $row['publish_date'] . " / <a
                    class='text-secondary text-decoration-none' href='blog.php'> " . $row['blog_category'] . " </a></p>
            <h2 class='text-left mx-2 mb-3'> " . $row['blogtitle'] . " </h2>
        </div>
        <!-- intro and thumbnail  -->
        <div class='row'>

            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div class='card' id='card'>
                    <img src='../blog_images/" . $row['thumbnail'] . " ' data-bs-toggle=' modal' data-bs-target='#staticBackdrop'
                        class='image w-25' alt='thumbnail'>
                </div>
            </div>

            <div class='intro col-lg-12 d-flex flex-column align-self-center'>
                <h2 class='text-left mx-2 mt-3 mb-1'>Subtitle</h2>
                <h5 class='text-left mx-2 mt-2 mb-3'> " . $row['subtitle'] . " </h5>
                <h2 class='text-left mx-2 mt-3 mb-1'>Introduction</h2>
                <h6 class='text-left mx-2 mt-2 mb-3'> " . $row['intro_para'] . " </h6>
                <div class='card' id='card'>
                    <img src='../blog_images/" . $row['intro_img'] . "' class='image w-25' alt='intro image'>
                </div>
            </div>
        </div>
        <!-- main section -->
        <div class='main_section'>
            <h2 class='text-left mx-2 mt-3 mb-1'>Main</h2>
            <p class='text-left mx-2 mt-3 mb-3'> " . $row['main_para'] . " </p>
            <div class='card' id='card'>
                <img src='../blog_images/" . $row['main_img'] . "' class='image w-25' alt='main image of paragraph'>
            </div>
        </div>
        <div class='conclusion_section mb-5'>
            <h2 class='text-left mx-2 mt-3 mb-1'>Conclusion</h2>
            <p class='text-left mx-2 mt-3 mb-3'> " . $row['conclusion_para'] . " </p>
            <div class='card' id='card'>
                <img src='../blog_images/" . $row['conclusion_img'] . " ' class=' image w-25' alt='end image'>
            </div>
        </div>

    </div>
</div>


<!-- modal -->
<div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
    aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'> <img src='../" . $row['thumbnail'] . " ' class=' img_modal' alt=''>
            </div>

        </div>
    </div>
</div>



<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'
    integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous'>
</script>
</body>

</html>";
    $file_name = "../blogs/" . $row["blogtitle"] . ".php";
    if ($file_name) {
    $file_handle = fopen($file_name, "w");
    $generate_file = fwrite($file_handle, $blog_page_structure);
    if (fclose($file_handle)){
        header("location:admin_dashboard.php");
        exit();
        
    }
    }
} ?>