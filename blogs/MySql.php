

  <?php session_start();?>
<html>

<head>
    <title>MySql</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content=' width=device-width, initial-scale=1'>
    <meta name='keywords' content='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti delectus aperiam in, earum eum. Perferendis, nemo? Ducimus reprehenderit doloremque alias earum maiores quos fugit mollitia! Mollitia amet doloremque minus.'>
        <meta name='description' content='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti delectus aperiam in, earum eum. Perferendis, nemo? Ducimus reprehenderit doloremque alias earum maiores quos fugit mollitia! Mollitia amet doloremque minus.'>
        <meta name='author' content='world of tech'>
        <link rel='shortcut icon' href='/LOGO/Logo-white-text-full-screen(2048px-1152px).png'>
    <link rel='apple-touch-icon' href='/LOGO/Logo-white-text-full-screen(2048px-1152px).png'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
        <style>
        body{
            background-color: rgb(228, 228, 228) !important;
            font-family: 'Roboto Slab', serif !important;

        }
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
    .word{
        word-spacing:1px;
        letter-spacing:.5px;
    }
    </style>
    </head>

    <body>


<div class='container pt-3 word'>
<input type='hidden' id='blog_id' value='8'>

    <!-- blog section starts -->
    <div class='blog_details section'>
        <!-- title and category -->
        <div class='title_and_category'>
            <p class='text-center mx-2 mt-2 '> 2023-04-19 / <a
                    class='text-secondary text-decoration-none' href='blog.php'> Tech </a></p>
            <h2 class='mx-2 mb-4 fs-1 fw-bolder text-center text-uppercase'> MySql </h2>
        </div>
        <!-- intro and thumbnail  -->
        <div class='row'>

            <div class='col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center'>
            <div class='card w-75' id='card'>
                    <img src='../blog_images/../blog_images/How-to-Install-MySQL-8.0-on-Ubuntu-18.04-1024x576.jpg '
                        class='image' alt='thumbnail'>
                </div>
            </div>

            <div class='intro col-lg-12 '>
                <h5 class='text-center fs-3 fst-italic mx-2 mt-4 mb-4 '> Database </h5>
                <h6 class='text-center mx-2 mt-2 mb-4 fw-normal fs-5'> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti delectus aperiam in, earum eum. Perferendis, nemo? Ducimus reprehenderit doloremque alias earum maiores quos fugit mollitia! Mollitia amet doloremque minus. </h6>
                    <img src='../blog_images/../blog_images/90-900504_s.png' class='image w-25 mx-auto d-block' alt='intro image'>
            </div>
        </div>
        <!-- main section -->
        <div class='main_section'>
            <p class='mx-2 mt-3 mb-4 fs-5 text-center'> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti delectus aperiam in, earum eum. Perferendis, nemo? Ducimus reprehenderit doloremque alias earum maiores quos fugit mollitia! Mollitia amet doloremque minus. </p>

                <img src='../blog_images/../blog_images/1_H0IBb9kvGI3eIuL1sGmWug.jpeg' class='image w-25 mx-auto d-block' alt='main image of paragraph'>

        </div>
        <div class='conclusion_section mb-3'>
            <p class='mx-2 mt-3 mb-3 fs-5 text-center'> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti delectus aperiam in, earum eum. Perferendis, nemo? Ducimus reprehenderit doloremque alias earum maiores quos fugit mollitia! Mollitia amet doloremque minus. </p>

                <img src='../blog_images/../blog_images/{29AE59C6-90AF-4241-B1C2-740CA7981175}.png.jpg ' class='image w-25 mx-auto d-block' alt='end image'>

        </div>

    </div>
</div>

<section id ='comment_section' class='container mt-5'>
        <h2 class='fw-bold'> Comment </h2>
        <input type='email' class='form-control mb-3 mt-3' required placeholder='Enter Your Email' id='ID_email'>
        <textarea id='ID_commentarea' class='form-control' placeholder='Enter Your Comment' rows='4'></textarea>
        <input type='checkbox' class='mx-1 mt-2 '  onclick='Checkbox()'>
        <label class='mx-1 mt-2'>I agree to notify me for the latest blogs</label>
        <br>
        <input type='button' disabled class='btn btn-dark mt-2 mb-3 px-5' value='Submit' id='ID_button'>
        <input type='hidden' value='8' id='hidden_id'>
    <div id='ID_div'> </div>
    </section>


    <script src='https://code.jquery.com/jquery-3.6.4.min.js'
        integrity='sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=' crossorigin='anonymous'>
    </script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
    <script>
    function Checkbox(){
        document.getElementById('ID_button').toggleAttribute('disabled');
    }  
    $(document).ready(function() {
        var blog_ids = $('#blog_id').val();
        $.ajax({
            url:'../blog_comments.php',
            type:'POST',
            data:{
                blog_id: blog_ids,
            }

        })

        dataLoad();

        function dataLoad() {
            $.ajax({
                url: '../blog_comments.php',
                type: 'POST',
                success: function(data) {
                    $('#ID_div').html(data);
                }
            })

        }


        $('#ID_button').click(function() {
            var comment = $('#ID_commentarea').val();
            var hidden_id = $('#hidden_id').val();
            var email = $('#ID_email').val();

            $.ajax({
                url: '../blog_comments.php',
                type: 'POST',
                data: {
                    submitbtn: 1,
                    ID_comment: comment,
                    hid_id: hidden_id,
                    user_email:email
                },
                success: function() {
                    dataLoad();
                }

            })
        })
    })
    </script>
</body>
</html>