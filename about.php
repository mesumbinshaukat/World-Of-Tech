<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style>
    .breadcrumb a {
        color: #6c757d;
    }

    .breadcrumb {
        padding: 30px 5px 26px;
        background-color: transparent;
        margin-bottom: 0;
        border-radius: 0;
        border-bottom: 1px solid #ddd
    }

    .about_pic {
        /* height: 30rem; */
        border-radius: 20px;
        box-shadow: -1px 2px 15px 5px black;
    }

    .icon {
        /* height: 50%; */
        width: 30%;
    }

    .t_img {
        /* height: 60%; */
        width: 50%;
        border-radius:150px;
    }

    .t_imgd {
        /* height: 50%; */
        width: 30%;
        border-radius:150px;

    }

    .about-a {
        box-shadow: -1px 1px 7px 5px black;

    }
  
    
    </style>

</head>

<body>
    <section id="navbar">

        <?php include("navbar.html");?>

    </section>
    <br><br><br>
    <div class="mt-5 container">
        <div class="row">


            <div class="inner-page-wrapper">




                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-nav">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">

                                        <li class="home breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="post post-page current-item breadcrumb-item active"><a
                                                href="about.php"><b>About</b></a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <h3 class="text-center">
                            <b>About Us..</b>
                        </h3>
                        <p class="text-center mt-3">
                            World of tech is a company that provides specialization primarily in software products, in
                            either business
                            or consumer software based on the needs of their client base and structure for a software
                            release.
                        </p>
                        <img src="./images/pexels-fauxels-3183197.jpg" alt="code" class="about_pic mt-4">
                    </div>
                </div>



                <div class="container-sm  mt-5">
                    <div class="row">
                        <h3 class="text-center">
                            <b>What Makes Us Diffrent..</b>
                        </h3>
                        <p class="text-center mt-3">
                            We've established this company because it deals with all sorts of technologies like Web/App
                            development, Digital marketing,
                            SEO, etc. We can help everyone to implement these technologies in their Factories, Offices,
                            Shops, etc. So, in this way, everyone
                            will get a chance to compete with their competitors.You can also hire us to keep your
                            website up to date.
                        </p>
                        <div class="container-sm  mt-5">
                            <div class="row">
                                <div class="col p-4 m-2 about-a text-center">
                                    <img src="./icons/web-design (2).png" alt="" class="icon">
                                    <p class="mt-3">Web development</p>
                                </div>
                                <div class="col p-4 m-2 about-a text-center">
                                    <img src="./Icons/app-development.png" alt="" class="icon">
                                    <p class="mt-3">App development</p>
                                </div>
                                <div class="col p-4 m-2  about-a text-center">
                                    <img src="./Icons/designer.png" alt="" class="icon">
                                    <p class="mt-3">UI/UX Designing</p>
                                </div>
                            </div>
                        </div>
                        <div class="container-sm  mt-3">
                            <div class="row">
                                <div class="col p-4 m-2 about-a text-center">
                                    <img src="./icons/social-media-2.png" alt="" class="icon">
                                    <p class="mt-3">Digital Marketing</p>
                                </div>
                                <div class="col p-4 m-2 about-a text-center">
                                    <img src="./Icons/database-storage.png" alt="" class="icon">
                                    <p class="mt-3">Database Designing</p>
                                </div>
                                <div class="col p-4 m-2 about-a text-center">
                                    <img src="./Icons/seo.png" alt="" class="icon">
                                    <p class="mt-3">SEO</p>
                                </div>
                            </div>
                        </div>










                    </div>
                </div>


                <div class="container mt-5">
                    <div class="row">
                        <h3 class="text-center"><b>Meet Our Executive Team</b> </h3>
                        <p class="text-center mt-3">
                            This team operates as an interdependent, collaborative decision-making body – strategically
                            executing the company's mission and visionWorld of tech is a company that provides
                            specialization primarily in software products, in either business
                            or consumer software based on the needs of their client base and structure for a software
                            release.
                        </p>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col text-center">
                                    <img src="./images/pic1.jpeg" alt="" class="t_img">
                                    <h6 class="mt-2 name"> Mesum Bin Shaukat</h6>
                                </div>
                                <div class="col text-center">
                                    <img src="./images/Zohair.jpg" alt="" class="t_img">
                                    <h6 class="mt-2 name"> Zohair Adeel </h6>
                                </div>
                                <div class="col text-center">
                                    <img src="./images/sarim.jpeg" alt="" class="t_img">
                                    <h6 class="mt-2 name"> Sarim Khan </h6>
                                </div> <hr>
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col text-center">
                                    <img src="./images/rafay.jpg" alt="" class="t_img">
                                    <h6 class="mt-2 name"> Abdul Rafay Khan </h6>
                                </div>
                                <div class="col text-center">
                                    <img src="./Icons/hacker.png" alt="" class="t_img">
                                    <h6 class="mt-2 name">Huzaifa Irfan </h6>
                                </div>
                                <div class="col text-center">
                                    <img src="./Icons/hacker.png" alt="" class="t_img">
                                    <h6 class="mt-2 name">  Muhammad Mashood Khan</h6>
                                </div>
                            </div>
                        </div> <hr>


                    </div>
                </div>
                <div class="container mt-3 mb-5">
                    <div class="row">
                        <div class="col text-center mb-5">
                            <img src="./Icons/hacker.png" alt="" class="t_imgd">
                            <h6 class="mt-2"><u>Umer Siddique</u> </h6>
                        </div>
                        <div class="col text-center mb-5">
                            <img src="./Icons/hacker.png" alt="" class="t_imgd">
                            <h6 class="mt-2"> <u>Mohammad Owais Khan</u> </h6>
                        </div>
                    </div>
                </div> <hr>


            </div>
        </div>

    </div>
    </div>


    <footer class="footer">
        <?php include("footer.html");?>

    </footer>


</body>

</html>