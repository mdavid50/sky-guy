<!DOCTYPE html>
<html>
<head>
    <title>SkyGuy Arial Imagery</title>
    <!-- required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link to css stylesheet -->
    <link rel="stylesheet" href="style/style.css" type="text/css"/>

    <!-- link to jQuery stylesheet -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font awesome -->
    <script src="https://use.fontawesome.com/02efcb04d1.js"></script>

    <!-- jQuery, Popper.js, Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- jQuery Form, Additional Methods, Validate -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

    <!-- Your JavaScript Form Validator -->
    <script src="scripts/jquery-validate.js"></script>

    <!-- Google reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- java script link -->
    <script src="scripts/main.js"></script>

</head>


<body>

<section class="welcome">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <h2 class="text-white">SkyGuy Arial Imagery<img class="h-5 text-white" src="images/drone-cam-little.png"></h2></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="https://mdav36.com/~mdav/sky-guy/index.php#">Home</a>
                </li>
                <li class="nav-item dropdown text-white">
                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown"
                       href="#!" role="button" aria-haspopup="true" aria-expanded="false">
                        Services</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#!">Real Estate</a>
                        <a class="dropdown-item" href="#!">Construction</a>
                        <a class="dropdown-item" href="#!">Inspections</a>
                        <a class="dropdown-item" href="#!">Thermal Imaging</a>
                        <a class="dropdown-item" href="#!">Event</a>
                    </div>
                </li>
                <li class="nav-item dropdown text-white">
                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown"
                       href="#!" role="button" aria-haspopup="true" aria-expanded="false">
                        Gallery</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#!">Images</a>
                        <a class="dropdown-item" href="#!">HD Video</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">About Us</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
                <li class="nav-item active">
                    <a href="#!" target="_blank" class="navlink"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/balloon-river-mist.jpg" data-src="holder.js/900x400?theme=social" alt="balloons over misty river" data-holder-rendered="true" style="width: 900px; height: 675px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-40vh" src="images/balloons-pretty-balloons.jpg" data-src="holder.js/900x400?theme=industrial" alt="pretty balloons in the morning" data-holder-rendered="true" style="width: 900px; height: 675px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/sunrise-balloon.jpg" data-src="holder.js/900x400?theme=industrial" alt="sunrise" data-holder-rendered="true" style="width: 900px; height: 675px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/bridge-balloons.jpg" data-src="holder.js/900x400?theme=industrial" alt="bridge with balloons in background" data-holder-rendered="true" style="width: 900px; height: 675px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/golf-course.jpg" data-src="holder.js/900x400?theme=industrial" alt="albuquerque golf course" data-holder-rendered="true" style="width: 900px; height: 675px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>

<section class="info bg-primary">
    <div class="what-we-do">
        <div class="text-center pt-3">
            <h2>REDEFINING YOUR VIEW OF THE WORLD</h2>
        </div>
        <div class="container-fluid">
            <div class="row d-block">
                    <h5 class="general-info p-2 text-center"><strong>We are dedicated to giving you a cost effective and safe solution to:</strong></h5>
                    <ul class="list-unstyled p-2 text-center">
                        <li>Real Estate Videos and Images</li>

                        <li>Event Videos and Images</li>

                        <li>Roof Inspections</li>

                        <li>Construction Progress Management</li>

                        <li>Building Lights Inspection</li>

                        <li>Thermal Imaging</li>

                        <li>Solar Inspection</li>

                        <li>Communication Tower Inspection</li>

                        <li>Bridge Inspection</li>
                    </ul>
            </div>
        </div>
            <div class="container-fluid">
                <div class="row">
                    <img src="images/cell-tower-3.5x3.5.jpeg" alt="communication tower" class="p-2 col" style="height: 28rem; width: 32rem" >
                    <img src="images/construction-3.5x3.5.jpeg" alt="construction project" class="col p-2" style="height: 28rem; width: 32rem">
                </div>
                <div class="row justify-content-center">
                    <img src="images/night-view-3.5x3.5.jpeg" alt="building with lights on" class="col p-2 justify-content-between" style="height: 28rem; width: 32rem;">
                    <img src="images/fall-trees-3.5x3.5.jpeg" alt="trees changing color" class="col p-2 justify-content-between" style="height: 28rem; width: 32rem">
                </div>
            </div>

    </div>
</section>

<section class="contact-form bg-dark">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 text-white ">
            <h2 class="text-white text-center">Contact</h2>
            <form id="contact-form" action="php/mailer.php" method="post" novalidate class="justify-content-center">
                <label class="d-block">Name</label>
                <input name="name" id="name" placeholder="Type Here" class="align-self-baseline">
                <label class="d-block">Email</label>
                <input name="email" type="email" id="email" placeholder="Type Here">
                <label class="d-block">Message</label>
                <textarea name="message" placeholder="Type Here" class="w-75 align-content-start"></textarea>
                <!-- reCAPTCHA -->
                <div class="g-recaptcha" data-sitekey="6LedpEYUAAAAAK0GBJeclMPUyj7k2v8dcvs3Il5l"></div>
                <input id="submit" name="submit" type="submit" value="Submit">
            </form>
            <!--empty area for form error/success output-->
            <div class="row">
                <div class="col">
                    <div id="output-area"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<footer>
    <div class="container-fluid bg-dark text-white">
        <div class="row pt-4">
            <div class="col">
                <h2 class="">SkyGuy Arial Imagery<img src="images/drone-cam-little.png"></h2>
            </div>
            <div class="col">
                <ul class="list-unstyled text-center">
                    <li>Founder and CEO- Jeremy MacClellan</li>
                    <li>FAA 107 Lic #- I don't know</li>
                    <li>Insurance info...</li>
                </ul>
            </div>
            <div class="col align-self-center">
                <p class="float-right">2017 SkyGuy Arial Imagery Inc, LLC</p>
            </div>
        </div>
    </div>
</footer>
</body>