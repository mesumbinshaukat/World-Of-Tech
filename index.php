<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH | BEST SOFTWATE HOUSE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="website maker, world of tech, best software house, it company, software house, software houses in karachi, web developers, best software houses in karachi, world of tech software house, software company">
    <meta name="description"
        content="Our expert Software House team ensures seamless execution and timely delivery of innovative solutions.">
    <meta name="author"
        content="World Of Tech, Mesum Bin Shaukat, Zohair Adeel, Mohammad Sarim, Huzaifa Irfan, Abdul Rafay Khan, Mohammad Mashood Khan, Omar Siddique, Mohammad Owais Khan, Mustafa Mansoor">


    <link rel="shortcut icon" href="./LOGO/Logo-white-text-full-screen(2048px-1152px).png">
    <link rel="shortcut icon" href="./LOGO/Logo-white-text-full-screen(2048px-1152px).png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./LOGO/Logo-white-text-full-screen(2048px-1152px).png" type="image/x-icon">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="canonical" href="https://www.worldoftech.company">

    <?php include('./font.html') ?>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');

    body {
        font-family: 'Roboto Slab', serif !important;
    }

    .image {
        width: 100px !important;
        margin-left: 90px;
    }

    /* @media screen and (max-width:400px) {
        .margin {
            margin-top: -80px !important;
        }
    } */

    @media screen and (max-width:750px) {
        .side-arrow {
            display: none !important;
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

    .scrolled {
        background-color: rgba(73, 71, 71, 0.712);
        transition: background-color 200ms linear;
    }
    </style>
</head>

<body class="bg_color">


    <div id="top"></div>
    <div id="arrow" class="side-arrow side-block">
        <a href="#top"><img class="img_arrow" src="./Icons/keyboard_double_arrow_up_FILL0_wght400_GRAD0_opsz48.png"
                alt="arrow"></a>
    </div>


    <?php include('navbarhome.html') ?>



    <section>

        <?php include("carousel.html"); ?>

    </section>
    <div class="container-fluid ">
        <?php include('startingcards.html'); ?>
    </div>
    </section>
    <br><br>
    <section class="">
        <div class="container-fluid ">
            <?php include('secondcard.html'); ?>
        </div>
    </section>
    <section id='plans'>
        <?php include('plans.php'); ?>

    </section>
    <section>
        <footer class="footer mt-5">
            <?php include("footer.html"); ?>
        </footer>
    </section>




    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $(window).scroll(function() {
            // alert("working")

            $('#arrow').toggleClass('side-arrow', $(this).scrollTop() > 200);
        });
    });

    $(function() {
        $(document).scroll(function() {
            var $nav = $("#navbar");
            $nav.toggleClass('scrolled', $(this).scrollTop() > 300);
        });
    });
    </script>



</body>

</html>