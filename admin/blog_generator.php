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
                    <img src='../blog_images/" . $row['thumbnail'] . " ' 
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
        <div class='conclusion_section mb-3'>
            <h2 class='text-left mx-2 mt-3 mb-1'>Conclusion</h2>
            <p class='text-left mx-2 mt-3 mb-3'> " . $row['conclusion_para'] . " </p>
            <div class='card' id='card'>
                <img src='../blog_images/" . $row['conclusion_img'] . " ' class=' image w-25' alt='end image'>
            </div>
        </div>

    </div>
</div>

<section id ='comment_section' class='container-fluid'>
        <h2 class='fw-bold'> Comment </h2>
        <textarea id='ID_commentarea' class='form-control' placeholder='Enter Your Comment' rows='4'></textarea>
        <input type='button' class='btn btn-dark p-2 mb-4 mt-3 px-5' value='Submit' id='ID_button'>
        
        <div id='ID_div'></div>
</section>


<script src='https://code.jquery.com/jquery-3.6.4.min.js'
        integrity='sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=' crossorigin='anonymous'>
    </script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
<script>
$(document).ready(function(){
    dataLoad();
    function dataLoad(){
        $.ajax({
            url: '../commentsection.php',
            type: 'POST',
            success: function(data) {
                $('#ID_div').html(data);
            }
        })
        
    }


$('#ID_button').click(function(){
    var comment = $('#ID_commentarea').val();
   
    $.ajax({
        url:'../blog_comments.php',
        type:'POST',
        data:{
            submitbtn: 1,
            ID_comment: comment,
        },
        success:function(){
           dataLoad();
        }

    })
})     
})

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