<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Book</title>

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Css Link -->
    <link rel="stylesheet" href="style.css">
</head>


<body>


    <!-- Navbar -->


    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 px-sm-2 py-sm-2 shadow">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel Book</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  me-3">
                        <a class="nav-link" href="#">Rooms</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <button type="button" class="btn btn-outline-dark me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#regModal">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center"><i
                                class="bi bi-person-square me-2 fs-4"></i>User Login</h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark">Login</button>
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="regModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center"><i
                                class="bi bi-person-plus-fill fs-4 me-2"></i>User Registration</h1>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class=container-fluid>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="tel" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">

                                </div>

                                <div class="text-center my-2">
                                    <button type="submit" class="btn btn-dark">Register</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>



    <!-- Carousel -->

    <div id="carouselExampleRide" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/caro1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro6.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- RoomAvailability -->


    <div class="container roomAvailable">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="fs-4 fw-bolder mb-4">Check Room Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-bold">Check-In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-bold">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-bold">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label fw-bold">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3">
                            <button type="submit" class="btn btn-outline-dark shadow-none custom-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 shadow" style="max-width: 21rem;">
                    <img src="images/room1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">৳300 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-dark">Book Now</a>
                            <a href="#" class="btn btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 shadow" style="max-width: 21rem;">
                    <img src="images/room2.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">৳300 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-dark">Book Now</a>
                            <a href="#" class="btn btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 shadow" style="max-width: 21rem;">
                    <img src="images/room3.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">৳300 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-dark">Book Now</a>
                            <a href="#" class="btn btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn px-2 py-2 btn-outline-dark rounded fw-bold">More Rooms</a>
            </div>
        </div>
    </div>



    <!-- Contact Us -->

    <h2 class="mt-5 pt-4 text-center fw-bold h-font">Contact Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-3 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.978371078396!2d90.38689967413639!3d23.74815068886498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bc7d14e415%3A0xbd4f5efcefb1df65!2zRnJlZSBTY2hvb2wgU3QsIOCmouCmvuCmleCmviAxMjA1!5e0!3m2!1sbn!2sbd!4v1692023456301!5m2!1sbn!2sbd"
                    height="320" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a class="d-inline-block mb-2 text-decoration-none text-dark" href="tel:+8801711213112"><i
                            class="bi bi-telephone-fill"></i>+8801711213112</a>
                    <br>
                    <a class="d-inline-block mb-2 text-decoration-none text-dark" href="tel:+8801711213112"><i
                            class="bi bi-telephone-fill"></i>+8801711213112</a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a class="d-inline-block mb-3 text-decoration-none me-1" href="#">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter me-1"></i>Twitter</span>
                    </a>

                    <a class="d-inline-block mb-3 text-decoration-none me-1" href="#">
                        <span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-facebook me-1"></i>Facebook</span>
                    </a>

                    <a class="d-inline-block mb-3 text-decoration-none me-1" href="#">
                        <span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-instagram me-1"></i>Instagram</span>
                    </a>

                </div>
            </div>
        </div>
    </div>





    <!--  Footer -->

    <div class="container-fluid bg-white mt-5 px-5 py-2">
        <div class="row">
            <div class="col-lg-6 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2">Hotel Book</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quis ipsam asperiores laudantium
                    fugiat, beatae, earum repellat atque temporibus dolorem laboriosam, maxime obcaecati esse neque
                    ratione quos eos necessitatibus eaque rem.</p>
            </div>
            <div class="col-lg-3 p-4">
                <h5 class="mb3">Links</h3>
                    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
                    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
            </div>
            <div class="col-lg-3 p-4">
                <h5 class="mb-3">Follow Us</h3>
                <a class="d-inline-block mb-2 text-dark text-decoration-none me-1" href="#">
                    <i class="bi bi-twitter me-1"></i>Twitter
                </a>
                <br>
                <a class="d-inline-block mb-2 text-dark text-decoration-none me-1" href="#">
                    <i class="bi bi-facebook me-1"></i>Facebook 
                </a>
                <br>
                <a class="d-inline-block  text-dark text-decoration-none me-1" href="#">
                    <i class="bi bi-instagram me-1"></i>Instagram
                </a>
            </div>
        </div>
    </div>






    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>