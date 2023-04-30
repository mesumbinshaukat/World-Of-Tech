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
        .body {
            background-color: #D5D5D5;
        }

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
    <section id="navbar" class="mb-5">
        <?php include("navbar.html"); ?>


    </section>

    <br><br><br>
    <!-- breadcrumb   -->
    <div class="container">
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
    <!-- contact form -->
    <div class="container mb-5">
        <h2 class="text-center text-dark fw-bold">Contact us</h2>
        <p class="text-center" style="color:gray; font-size:15px;"> <span class="fw-bold"> World Of Tech , </span> we
            develop and deploy</p>
        <section class="mt-5">
            <main class="mt-5">
                <div class="container-fluid mt-5">
                    <form action="contactDb.php" method="post" class="mt-5">
                        <div class="row justify-content-center">
                            <p class="fs-7 fw-bold">Your Name: </p>
                            <p style="color:gray; font-size:13px;">Please Enter your Real Name</p>
                            <div class="col-lg-12 ">
                                <input type="text" name="user_name" class="form-control mb-4" placeholder=" Your Name*"
                                    required>

                            </div>
                            <p class="fs-7 fw-bold">Your Email: </p>
                            <p style="color:gray; font-size:13px;">Please Enter your Email Carefully for more Accuracy
                            </p>
                            <div class="col-lg-12">
                                <input type="email" name="user_email" class="form-control mb-4"
                                    placeholder=" Your Email*" required>

                            </div>
                            <p class="fs-7 fw-bold">Your Phone No. : </p>
                            <p style="color:gray; font-size:13px;">Please Enter your Phone No. Carefully</p>

                            <div class="col-lg-12">
                                <input type="number" name="phone_number" class="form-control mb-4"
                                    placeholder="Enter your phone number" required>

                            </div>
                            <p class="fs-7 fw-bold">Message Subject: </p>
                            <div class="col-lg-12">
                                <input type="text" name="subject" class="form-control mb-4"
                                    placeholder="Message Subject" required>

                            </div>
                            <p class="fs-7 fw-bold">Your Message: </p>
                            <div class="col-lg-12">
                                <textarea rows="4" cols="20" name="message" class="form-control mb-4"
                                    placeholder=" Your Message" required></textarea>
                            </div>
                        </div>

                        <input type="submit" name="btn_submit" value="Submit Request" class="btn btn-dark">
                    </form>

                </div>
            </main>
        </section>
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