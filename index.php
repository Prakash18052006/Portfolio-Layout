<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Your Company Name</title>
</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="userinfo.php">Project-1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>s
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active slider-image">
                <img src="./images/s1.jpg" class="d-block slider-image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Camera Man</h5>
                    <p>There is important role of camera man in any movie, Just like this in every project important person is behind the eyes</p>
                </div>
            </div>
            <div class="carousel-item slider-image">
                <img src="./images/s2 .jpg" class="d-block slider-image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Be Happy</h5>
                    <p>Happy movement is one of the best era for ourself</p>
                </div>
            </div>
            <div class="carousel-item slider-image">
                <img src="./images/s3.png" class="d-block slider-image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Alone Person</h5>
                    <p>A single person make a large economy just like a marvel</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About us -->
    <section class="my-5">
        <div>
            <h2 class="text-center">About us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="./images/s5.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>I am Prakash Choudhary</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo expedita fugiat provident ea eos veritatis veniam, ullam, libero rerum odio similique fugit, doloremque totam. Qui molestias neque ipsa error consequatur obcaecati recusandae pariatur, voluptatibus in. ----- </p>
                    <a href="about.php" class="btn btn-success"> Check More </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                    <img src="./images/s9.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">first Service:)</h5>
                    <p class="card-text">...</p>
                    </div>
                    <div class="card-body">
                    <a href="service.php" class="card-link">More details</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Java script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
