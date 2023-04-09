<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="website maker, world of tech, web development, web design, ui/ux, world of tech main page, worldoftech.company, web developers, best website maker">
    <meta name="description"
        content="With WORLD OF TECH, experience top-of-the-line TECH BASED SERVICES for your company. Our expert Software House team ensures seamless execution and timely delivery of innovative solutions.">
    <meta name="author"
        content="World Of Tech, Mesum Bin Shaukat, Zohair Adeel, Mohammad Sarim, Huzaifa Irfan, Abdul Rafay Khan, Mohammad Mashood Khan, Omar Siddique, Mohammad Owais Khan, Mustafa Mansoor">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="./LOGO/youtube-picture(500px-500px).png">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');

    body {
        font-family: 'Roboto Slab', serif !important;
    }

    .image {
        width: 100px !important;
        margin-left: 90px;
    }

    @media screen and (max-width:400px) {
        .margin {
            margin-top: -80px !important;
        }
    }

    .side-block {
        display: none;
        transition: .3s;
    }

    .side-arrow {
        display: block;
        background-color: gray;
        border: 2px solid darkgray;
        border-radius: 50%;
        padding: 5px;
        position: fixed;
        top: 85%;
        left: 95%;
        z-index: 1;
    }

    .bg_color {
        background-color: #D5D5D5;
    }
    </style>
</head>

<body class="bg_color">
    <div id="top"></div>
    <div id="arrow" class="side-arrow side-block">
        <a href="#top"><img src="./Icons/keyboard_double_arrow_up_FILL0_wght400_GRAD0_opsz48.png" alt=""></a>
    </div>

    <section>

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
                    <?php include('plans.html'); ?>

                    <section>
                        <?php# include('cards.php');?>

                    </section>
                    <section>
                        <footer class="footer mt-5">
                            <?php include("footer.html");?>
                        </footer>
                    </section>



                    <script src="./jquery/jquery-3.6.0.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $(window).scroll(function() {
                            // alert("working")

                            $('#arrow').toggleClass('side-arrow', $(this).scrollTop() > 200);
                        });
                    });
                    </script>
</body>

</html>