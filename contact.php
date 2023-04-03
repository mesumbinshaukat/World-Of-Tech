<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>
    <section id="navbar" class="mb-5">
        <?php include("navbar.html");?>


    </section>

    <br><br>
    <section class="mt-5">
        <main class="mt-5">
            <div class="container-fluid mt-5">
                <form action="contactDb.php" method="post" class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 x">
                            <input type="text" name="user_name" placeholder="Enter your name" required>

                        </div>
                        <div class="col-lg-12">
                            <input type="email" name="user_email" placeholder="Enter your email" required>

                        </div>
                        <div class="col-lg-12">
                            <input type="tel" name="phone_number" placeholder="Enter your phone number" required>

                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="subject" placeholder="Message Subject" required>

                        </div>
                        <div class="col-lg-12">
                            <textarea rows="2" cols="22"></textarea>
                        </div>
                    </div>

                    <input type="submit" name="btn_submit" value="Submit" class="btn btn-outline-dark">
                </form>

            </div>
        </main>
    </section>


    <section id="footer">
        <?php include("footer.php");?>
    </section>
</body>

</html>