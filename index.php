<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zach Cooper | Portfolio</title>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="CSS\main.css">
</head>

<body>
    <!-- Header & Nav -->
    <?php include('include/header.php'); ?>
    
    <!-- Showcase -->
    <?php include('include/showcase.php'); ?>

    <main id="about">
        <section class="main_1">
            <h2>Who I am</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptas libero quas, tempora
                sint assumenda sed repudiandae perspiciatis soluta labore.
            </p>
        </section><!-- End of main_1 section -->
        <section class="main_1">
            <h2>Main Heading Two</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptas libero quas, tempora
                sint assumenda sed repudiandae perspiciatis soluta labore.
            </p>
        </section><!-- End of main_1 section -->
        <section class="main_1">
            <h2>Main Heading Three</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptas libero quas, tempora
                sint assumenda sed repudiandae perspiciatis soluta labore.
            </p>
        </section><!-- End of main_1 section -->
    </main>

    <!-- Project Carousel -->
    <?php include('Include\proj_carousel.php'); ?>

    <!-- Experience Section -->
    <section class="bg-color" id="exp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center main_1" wow-delay="0.2s">
                        <h2>Experience</h2>
                        <p class="line"></p> 
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
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h4>Unmatched Proffessor</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, non!
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
    <script src="JS/main.js"></script>

</body>

</html>