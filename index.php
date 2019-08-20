<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zach Cooper | Portfolio</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="CSS\style.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="Images/Favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Images/Favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Images/Favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Images/Favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Images/Favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Images/Favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Images/Favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Images/Favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Images/Favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="Images/Favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Images/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Images/Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/Favicon/favicon-16x16.png">
    <link rel="manifest" href="Images/Favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <!-- Header & Nav -->
    <?php include('include/header.php'); ?>

    <!-- Showcase -->
    <?php include('include/showcase.php'); ?>

    <main id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center main_1">
                        <h2>About</h2>
                    </div>
                </div>
            </div>
            <section class="box main_1">
                <h4>Who I am</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptas libero quas, tempora
                    sint assumenda sed repudiandae perspiciatis soluta labore.
                </p>
            </section><!-- End of main_1 section -->
            <section class=" box main_1">
                <h4>Main Heading Two</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptas libero quas, tempora
                    sint assumenda sed repudiandae perspiciatis soluta labore.
                </p>
            </section><!-- End of main_1 section -->
            <section class="box main_1">
                <h4>Main Heading Three</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptas libero quas, tempora
                    sint assumenda sed repudiandae perspiciatis soluta labore.
                </p>
            </section><!-- End of main_1 section -->
        </div>
    </main>

    <!-- Project Carousel -->
    <?php include('Include\proj_carousel.php'); ?>

    <!-- Experience Section -->
    <div id="exp"></div>
    <section class="bg-color pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center main_1">
                        <h2>Experience</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box main_1">
                    <i class="fas fa-book"></i>
                    <h4>Knowledge is power</h4>
                    <p>
                        With indepth experience in feilds like <strong>Finance</strong>, <strong>Information Technology</strong>, <strong>Web and Application Development</strong> and <strong>Data Analysis/Visualization</strong>. I have a diverse skill set that allows me to work dynamically in teams and produce high performance results.
                    </p>
                </div>
                <div class="box main_1">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>MIS Degree and Ecommerce Development Cert.</h4>
                    <p>
                        Whith a degree in Management Information Systems and a sepecialization in Ecommerce Development I can provide imense value in any project I work on.
                    </p>
                </div>
                <div class="box main_1">
                    <i class="fas fa-code"></i>
                    <h4>Lanuages</h4>
                    <p>
                        CSS3, C, HTML5, ES6, MySQL, Python, PHP
                    </p>
                </div>
            </div>
        </div>

    </section>

    <!-- </div> -->
    <!-- end container -->

    <!-- Contact Formr -->
    <?php include('include/contactform.php'); ?>

    <!-- Footer -->
    <?php include('include/footer.php'); ?>

    <!-- jQuery -->
    <script src="JS/JQuery/jquery-3.4.1.js"></script>
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- mdbootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
    <!-- custom JS -->
    <script src="JS/script.js"></script>

</body>

</html>