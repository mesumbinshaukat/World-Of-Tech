<?php session_start();

include('../connection.php');

?>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content=' width=device-width, initial-scale=1'>
    <meta name='keywords' content='blog, world of tech, mesum, Huzaifa, sarim, Rafay, zohair'>
    <meta name='description' content='This is the best meta description'>
    <meta name='author' content='world of tech'>
    <title>Testing Again</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700' rel='stylesheet'>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
        integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link type='text/css' rel='stylesheet' href='../style.css' />

</head>

<body>




    <div class='section'>

        <div class='container'>
            <input type='hidden' id='blog_id' value='17'>
            <div class='row'>
                <div class='col-md-8'>




                    <div class='section-row'>
                        <h3> Testing Again</h3>
                        <h4> ndksfnsifndsifj</h4>
                        <figure>
                            <img src='../blog_images/../blog_images/FB PAGE INSIGHT AD.PNG ' alt='thumbnail'>
                        </figure>
                        <p>fidkjsmnfiosdjmfsiodfjkpsof</p>
                        <figure>
                            <img src='../blog_images/../blog_images/Card Details.PNG ' alt='intro image'>
                        </figure>
                        <p> asffgjkjjhkhk </p>

                        <figure>
                            <img src='../blog_images/../blog_images/Capture2.PNG' alt='main image of paragraph'
                                class="w-50">
                        </figure>
                        <h3>Conclusion</h3>
                        <p>msaidnmiaodmoaisdm</p>
                        <figure>
                            <img src='../blog_images/../blog_images/FB PRICING CONTRIBUTION.PNG ' alt='end image'>
                        </figure>
                        <input type='hidden' value='17' id='hidden_id'>

                    </div>




                    <div class='section-row'>
                        <div class='section-title'>
                            <h3 class='title'>Leave a Comment</h3>
                        </div>
                        <form class='post-reply'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class='form-group'>
                                        <input class='input' type='email' id='ID_email' name='email'
                                            placeholder='Email'>
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                    <div class='form-group'>
                                        <textarea class='input' required id='ID_commentarea' name='message'
                                            placeholder='Message'></textarea>
                                    </div>
                                </div>

                                <div class='col-md-12'>
                                    <input type='checkbox' required class='mx-1 mt-2' onclick='Checkbox()'>
                                    <label class='mx-1 mt-2'>I agree to notify me for the latest blogs</label>
                                </div>

                                <div class='col-md-12'>
                                    <input disabled type='button' class='primary-button' id='ID_button' value='Submit'>

                                </div>
                            </div>
                        </form>
                    </div>


                    <div id='ID_div'> </div>


                </div>
                <div class='col-md-4'>




                    <div class='aside-widget'>
                        <div class='section-title'>
                            <h2 class='title'>Social Media</h2>
                        </div>
                        <div class='social-widget'>
                            <ul>
                                <li class=''>
                                    <a href='#' class='social-facebook'>
                                        <i class='fa fa-facebook'></i>

                                    </a>
                                </li>
                                <li>
                                    <a href='#' class='social-twitter'>
                                        <i class='fa fa-instagram'></i>

                                    </a>
                                </li>
                                <li>
                                    <a href='#' class='social-google-plus'>
                                        <i class='fa fa-youtube-play'></i>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class='aside-widget'>
                        <div class='section-title'>
                            <h2 class='title'>Popular Blogs</h2>
                        </div>

                        <?php include('../admin/popular_blogs.php') ?>
                    </div>








                </div>
            </div>

        </div>

    </div>




    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
        integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'>
        </script>
    <script src='https://code.jquery.com/jquery-3.6.4.min.js'
        integrity='sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=' crossorigin='anonymous'></script>
    <script src='https://code.jquery.com/jquery-3.6.4.min.js'
        integrity='sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=' crossorigin='anonymous'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
    <script>
        function Checkbox() {
            document.getElementById('ID_button').toggleAttribute('disabled');
        }
        $(document).ready(function () {
            var blog_ids = $('#blog_id').val();
            $.ajax({
                url: '../blog_comments.php',
                type: 'POST',
                data: {
                    blog_id: blog_ids,
                }

            })

            dataLoad();

            function dataLoad() {
                $.ajax({
                    url: '../blog_comments.php',
                    type: 'POST',
                    success: function (data) {
                        $('#ID_div').html(data);
                    }
                })

            }


            $('#ID_button').click(function () {
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
                        user_email: email
                    },
                    success: function () {
                        dataLoad();
                    }

                })
            })
        })
    </script>

    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-23581568-13'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src='https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816'
        integrity='sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=='
        data-cf-beacon='{'
        rayId':'7c8d5501a82940d3','version':'2023.4.0','b':1,'token':'cd0b4b3a733644fc843ef0b185f98241','si':100}'
        crossorigin='anonymous'></script>

</body>

</html>