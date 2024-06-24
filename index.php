<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullstack Web app</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aman Yadav</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- craousal part -->

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/img1.jpg" alt="Japan" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/img2.jpg" alt="Japan" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/img3.jpg" alt="Japan" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/img4.jpg" alt="Japan" style="width:100%;">
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


    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">About us</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/imagebro.jpg" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Aman Yadav</h2>
                    <p class="py-3"></p>>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, sapiente hic dignissimos
                        possimus beatae illo maxime nulla iure consectetur incidunt alias facilis soluta dicta dolore
                        voluptatem voluptatum tenetur dolorem magni?</p>
                    <a href="about.php" class="btn btn-success">Know me</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
            </div>
            <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 cold-md04 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/imagebro.jpg" alt="card image">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Peter Parker</h4>
                    <p class="card-text">Peter Parker is a full-time super hero better known as the web-slinging and wall-crawling Spider-Man. As an orphaned child, Peter was raised by his Uncle Ben and Aunt May. At a science expo, Peter was bitten by an errant radioactive spider which granted him an array of arachnid powers. He initially became Spider-Man to use his powers as an entertainer, growing so conceited he didn't bother stopping a passerby burglar. </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>

            <div class="col-lg-4 cold-md04 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/imagebro.jpg" alt="card image">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Peter Parker</h4>
                    <p class="card-text">Peter Parker is a full-time super hero better known as the web-slinging and wall-crawling Spider-Man. As an orphaned child, Peter was raised by his Uncle Ben and Aunt May. At a science expo, Peter was bitten by an errant radioactive spider which granted him an array of arachnid powers. He initially became Spider-Man to use his powers as an entertainer, growing so conceited he didn't bother stopping a passerby burglar. </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>

            <div class="col-lg-4 cold-md04 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/imagebro.jpg" alt="card image">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Peter Parker</h4>
                    <p class="card-text">Peter Parker is a full-time super hero better known as the web-slinging and wall-crawling Spider-Man. As an orphaned child, Peter was raised by his Uncle Ben and Aunt May. At a science expo, Peter was bitten by an errant radioactive spider which granted him an array of arachnid powers. He initially became Spider-Man to use his powers as an entertainer, growing so conceited he didn't bother stopping a passerby burglar. </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
   

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4">
                </div>
            </div>
        </div>

    </section>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>
<div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email ID</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label>Comments</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
    </section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@all copyrigh reserved to Aman Yadav 2024</p>
</footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>