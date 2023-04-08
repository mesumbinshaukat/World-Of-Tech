<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="./LOGO/youtube-picture(500px-500px).png">
    <style>
    .image {
        width: 100px !important;
        margin-left: 90px;
    }
    </style>
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <section id="navbar" class="mb-5">

        <?php include("navbar.html");?><br><br><br><br>



    </section>


    <br>
    <section id="carousel">
        <?php #include('carousel.html');?>
        <?php include('carousel.html');?>
    </section>

    <section class="">
        <main class="">
            <div class="container-fluid ">

                <?php include('startingcards.html'); ?>
            </div>
        </main>
    </section>
    <section>

        <section>
            <?php# include('cards.php');?>

        </section>

    </section>
    <section>
        <footer class="footer mt-5">
            <?php include("footer.html");?>
        </footer>


    </section>

    <!-- <script src="./jquery/jquery-3.5.1.min.js"> -->
    </script>

</body>

</html>