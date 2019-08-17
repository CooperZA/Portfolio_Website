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
    <!-- element id and href -->
    <?php include('include/header.php'); ?>

    <!-- <div class="container"> -->
    <div id="showcase">
        <div class="showcase-text" id="home">
            <div class="showcase-text-items">
                <h2>Welcome To My Website</h2>
                <p>
                    I am a creative problem solver, passionate about web development and data analytics, working towards a degree in Management Information Systems with a background in the outdoors industry.
                </p>
                <a href="../Assets/Zach_Cooper_Resume.docx" download="ZachCooper_Resume.docx" class="btn btn-blue-grey"><i class="fas fa-download"></i> Resume</a>
                <a href="../Assets/CV.docx" download="ZachCooper_CV.docx" class="btn btn-blue-grey"><i class="fas fa-download"></i> CV</a>
            </div><!-- End of showcase-text-items -->
        </div><!-- End of showcase-text -->
    </div><!-- End of showcase -->

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

    <!-- Projects Carousel -->
    <main id="projects">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active proj">
                        <img class="proj-img img-responsive" src="../images/Cancer_Classifier.png" alt="Cancer Classifier Output">
                        <div class="carousel-caption">
                            <div class="displayProj">
                                <h3>Machine Learning for Tumors</h3>
                                <p>Developed a simple machine learning algoritm that was able to predict the severity of a tumor.</p>
                                <a href="https://github.com/CooperZA/CS141/blob/master/Assignment_5/cancer_classifier.py" class="btn btn-info">View Code</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="chicago.jpg" alt="Chicago">
                        <div class="carousel-caption">
                            <div class="displayProj">
                                <h3>PHP Crud</h3>
                                <p>Created a crud web application using PHP.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="ny.jpg" alt="New York">
                        <div class="carousel-caption">
                            <div class="displayProj">
                                <h3>Project 3</h3>
                                <p>About project 3</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </main>

    <!-- Experience Section -->
    <section class="bg-color" id="exp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center main_1" wow-delay="0.2s">
                        <h2>Experience</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box main_1">
                    <i class="fas fa-book"></i>
                    <h4>Knowledge is power</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, iure!
                    </p>
                </div>
                <div class="box main_1">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Senior High School</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, et.
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
    <script src="../JS/JQuery/jquery-3.4.1.js"></script>
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- custom JS -->
    <script src="../JS/main.js"></script>

</body>

</html>