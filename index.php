<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="website maker, world of tech, web development, web design, ui/ux, world of tech main page, worldoftech.company, web developers, best website make, website builder">
    <meta name="description"
        content="With WORLD OF TECH, experience top-of-the-line TECH BASED SERVICES for your company. Our expert Software House team ensures seamless execution and timely delivery of innovative solutions.">
    <meta name="author"
        content="World Of Tech, Mesum Bin Shaukat, Zohair Adeel, Mohammad Sarim, Huzaifa Irfan, Abdul Rafay Khan, Mohammad Mashood Khan, Omar Siddique, Mohammad Owais Khan, Mustafa Mansoor">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="./LOGO/youtube-picture(500px-500px).png">
    <style>
    .image {
        width: 100px !important;
        margin-left: 90px;
    }

    @media screen and (max-width:400px) {
        .margin {
            margin-top: -80px !important;
        }
    }
    </style>
</head>

<body class="bg-light">

    <section id="navbar" class="">

        <?php include("navbar.html");?>

    </section>




    <section id="carousel">
        <?php include('carousel.html');?>
    </section>
    <br><br>
    <section>
        <div class="container-fluid ">
            <?php include('startingcards.html'); ?>
        </div>
        <section>
            <br><br>
            <section class="">
                <div class="container-fluid ">
                    <?php include('secondcard.html'); ?>
                </div>
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