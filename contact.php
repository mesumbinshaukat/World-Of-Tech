<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style>
        .breadcrumb a {
    color: #6c757d;
    text-decoration: none;   }
  .breadcrumb a:hover{
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
</head>

<body>
    <!-- navbar -->
    <section id="navbar" class="mb-5">
        <?php include("navbar.html");?>


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
<li class="post post-page current-item breadcrumb-item active"><a href="contact.php"><b>Contact Page</b></a></li>

					  	</ol>
                        
					</nav>
                    
				</div>
			</div>
		</div>
        
	</div>	
    <br>
    <!-- contact form -->
    <div class="container mb-5">
        <h2 class="text-center text-dark fw-bold" >Contact us</h2>
        <p class="text-center" style="color:gray; font-size:15px;"> <span class="fw-bold"> World Of Tech , </span> we develop and deploy</p>
    <section class="mt-5">
        <main class="mt-5">
            <div class="container-fluid mt-5">
                <form action="contactDb.php" method="post" class="mt-5">
                    <div class="row justify-content-center">
                        <p class="fs-7 fw-bold" >Your Name: </p>
                        <p style="color:gray; font-size:13px;">Please Enter your Real Name</p>
                        <div class="col-lg-12 " >
                            <input type="text" name="user_name" class="form-control mb-4"  placeholder=" Your Name*"  required>

                        </div>
                        <p class="fs-7 fw-bold" >Your Email: </p>
                        <p style="color:gray; font-size:13px;">Please Enter your Email Carefully for more Accuracy</p>
                        <div class="col-lg-12">
                            <input type="email" name="user_email" class="form-control mb-4" placeholder=" Your Email*"  required>

                        </div>
                        <p class="fs-7 fw-bold" >Your Phone No. : </p>
                        <p style="color:gray; font-size:13px;">Please Enter your Phone No. Carefully</p>

                        <div class="col-lg-12">
                            <input type="number" name="phone_number" class="form-control mb-4" placeholder="Enter your phone number" required>

                        </div>
                        <p class="fs-7 fw-bold" >Message Subject: </p>
                        <div class="col-lg-12">
                            <input type="text" name="subject" class="form-control mb-4" placeholder="Message Subject" required>

                        </div>
                        <p class="fs-7 fw-bold" >Your Message: </p>
                        <div class="col-lg-12">
                            <textarea rows="4" cols="20" name="message" class="form-control mb-4" placeholder=" Your Message"
                                required></textarea>
                        </div>
                    </div>

                    <input type="submit" name="btn_submit" value="Submit Request" class="btn-animated">
                </form>

            </div>
        </main>
    </section>
    </div>

    <!-- footer -->
    <section id="footer">
        <?php include("footer.html");?>
    </section>
</body>

</html>