<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    * {
        color: rgb(128, 125, 125);
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .text {
        color: rgb(105, 102, 102);
    }

    .img {}

    .img1 {
        /*height: 130px;*/
    }

    .card {
        border: none;
    }

    .btn {
        padding: 10px;
        font-size: 16px;
        color: rgb(68, 67, 67);
        transition: .3s;
        font-weight: 400;
    }

    .btn:hover {
        color: rgb(68, 67, 67);
        transform: scale(1.1);
    }

    .btn-light {
        background: rgb(192, 191, 191);
    }

    .sectext {
        font-size: large;
    }

    .sectitle {
        font-size: 1.8rem;
        word-spacing: 1px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 800;
        color: rgb(70, 68, 68);
    }

    .secimg {
        width: 400px;
    }

    .line {
        border: 1px solid rgb(107, 105, 105);
        width: 100%;
        border-radius: 10px;
    }

    .thirdtxt {
        text-align: center;
        font-size: 3rem;
        font-weight: 600;
    }

    .thirdsmalltxt {
        text-align: center;
        margin-top: -4px;
        font-size: 1.3rem;
    }

    .thirdimg {
        margin-left: 40px;
        width: 150px;
        align-content: center;
    }

    .col {
        background-color: rgb(207, 203, 203);
        border: 2px solid rgb(194, 188, 188);

    }
    </style>
</head>

<body>
    <br>
    <br>

    <section>
        <div class="container text-center">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-lg-4 col-md-4" data-aos="fade-right">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder fs-3 text">shared title</h5>
                            <img src="./Icons/animation.png" class="card-img-top img img1 mt-1 mb-3 w-50" alt="...">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.</p>
                            <a href="#" class="btn btn-light">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-down">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder fs-3 text">Card title</h5>
                            <img src="./Icons/web-design.png" class="card-img-top img mt-2 mb-4 w-50" alt="...">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.</p>
                            <a href="#" class="btn btn-light">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-left">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder fs-3 text">Card title</h5>
                            <img src="./Icons/c-document.png" class="card-img-top img mb-4 mt-2 w-50" alt="...">
                            <p class="card-text">Some quick example text to build on the card the bulk of the card's
                                content.</p>
                            <a href="#" class="btn btn-light">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <p class="line"></p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5" data-aos="zoom-out-right">
                    <div class="card" style="width: 35rem;">
                        <div class="card-body ms-4">
                            <h5 class="card-title sectitle">GET YOUR WEBSITES DONE IN HOURS BY WORLD-OF-TECH</h5><br>
                            <p class="card-text sectext">Some quick example text to build <br>
                                Some quick example text to build the bulk of the card's
                                <br><br>
                                Lorem ipsum dolor sit amet consectetur adipisicin Mollitia, dolores?
                                content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, voluptas!
                            </p>
                            <a href="#" class="btn btn-light mt-2">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="width: 30rem;" data-aos="zoom-out-left">
                        <img src="./Icons/mobile.png" class="card-img-top secimg" alt="...">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <section data-aos="fade-up" style="background-color: rgb(240, 234, 234);">
        <br>
        <br>
        <br>

        <div class="container mb-4">
            <p class="thirdtxt">What Makes Us Different</p>
            <p class="thirdsmalltxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam! <br>Lorem,
                ipsum
                dolor sit amet consectetur adipisicing elit. Pariatur, nam.lollasgdtsa shsysh shsys</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card col " style="width: 15rem;">
                        <img src="./Icons/app-development.png" class="card-img-top thirdimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center mt-2 fs-4">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>





    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    AOS.init({
        duration: 1000,
    });
    </script>
</body>

</html>