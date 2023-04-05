<!DOCTYPE html>
<html lang="en">

<head>
    <title>WORLD OF TECH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <section id="navbar">

        <?php # include("navbar.html");?>
        <?php include("navbar.html");?><br><br><br><br>



    </section>


    <section class="mb-5">
        <main class="mb-5">
            <div class="container-fluid mt-5">
                <?php include('cards.html');?>
            </div>
        </main>
    </section>


    <footer class="footer mt-5">
        <?php include("footer.html");?>

    </footer>
</body>

</html>