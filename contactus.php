<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH | CONTACT US</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="world of tech, software house, world of tech software house, world of tech contact us, contact us, software house contact, contact details, world of tech contact us, best software house contact details, world of tech contact">
    <meta name="description"
        content="Enhance your business productivity with our innovative software solutions. Contact us today to take your business to the next level.">
    <meta name="author" content="World Of Tech">
    <link rel="shortcut icon" href="./LOGO/Logo-white-text-full-screen(2048px-1152px).png" type="image/x-icon"
        type="image/x-icon">
    <link rel=" apple-touch-icon" href="./LOGO/Logo-white-text-full-screen(2048px-1152px).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="canonical" href="https://www.worldoftech.company/contact.php">
    <?php include('./font.html') ?>
    <style>
    .breadcrumb a {
        color: #6c757d;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        color: black;
        text-decoration: underline;
    }

    .breadcrumb {
        padding: 30px 5px 26px;
        background-color: transparent;
        margin-bottom: 0;
        border-radius: 0;
        border-bottom: 1px solid #ddd
    }
    .intro_img{
        height:400px;
        width:100%;

        background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 32%, rgba(255,255,255,0) 100%),url('images/pexels-jéshoots-4831.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: 100%;
        display:flex;
        justify-content: center;
        align-items: center;
        

    }
    .map{
        height: 400px;;
        width:100%;
        /* filter: grayscale(100%) invert(100%); */

    }
    .form{
        width:85%;
    }
    .body{
            background-color: #D5D5D5;
        }



    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PVWJK65JN9">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-PVWJK65JN9');
    </script>
</head>

<body class="body">
    <!-- navbar -->
    <section id="navbar" >
        <?php include("navbar.html"); ?>


    </section>
    <div class="intro_img">
        <h2 class="text-center text-light fw-bold fs-1">Contact us</h2>
    </div>

    
    <!-- breadcrumb   -->
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-nav">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="home breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="post post-page current-item breadcrumb-item active"><a
                                    href="contact.php"><b>Contact Page</b></a></li>

                        </ol>

                    </nav>

                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="mapcont container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924237.7078551403!2d66.4960521244516!3d25.1929839008584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1682810720376!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
    </div>
    <!-- contact form -->
<div class="row">
    <div class="col-lg-6">
       <div class="container mt-5 me-2">
        <h2 class="fw-bold">
            Contact Details
        </h2>
        <h6>We'll be happy to assist you with any kind of question </h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat soluta dolorum fuga provident possimus iste delectus, unde exercitationem nihil quisquam ipsum molestiae illo sit, consequatur libero, itaque cum facere aliquid!</p>
       </div>
    </div>
    <div class="col-lg-6">
        <div class="container">

        <form action="contactDb.php" method="post" class="mt-5 form">
            <h2 class="fw-bold">Get in Touch </h2>
            <h6>Don't hesitate to contact us</h6><br>
         <input type="text" name="user_name" placeholder="Your Name" required class="form-control"><br>
         <input type="email" name="user_email" placeholder="Your Email" required class="form-control"><br>
         <textarea name="message" placeholder="Your Message" cols="30" rows="4" required class="form-control"></textarea><br>
         <input type="submit" name="btn_submit" value="Submit Request" class="btn btn-dak btn-outline-dark"><br><br>
        </form>
        </div>

    </div>
</div>

    <!-- footer -->
    <section id="footer">
        <?php include("footer.html"); ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</body>

</html>