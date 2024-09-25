<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>
    @section('content')
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Ysabeau&display=swap" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.css">
            <title>RentalHub</title>
        </head>

        <body>


            <nav class="navbar navbar-expand-md fixed-top navbar-dark">
                <div class="container-fluid">
                    <a href="index.html"><span id="site-logo" class="text-light">RentalHub</span></a>
                    <button class="navbar-toggler text-light" data-target="#navbar01" data-toggle="collapse" type="button">
                        <i id="toggle-icon" class="bi-list"></i> </button>
                    <div class="collapse navbar-collapse" id="navbar01">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="#">Tours</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        </ul>
                        <ul class="ml-auto nav navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="jumbotron mb-0 text-light text-center"
                style="padding-top:111px;position:relative;margin-top:0px;">
                <h2 id="hero-heading">TRAVEL MADE EASY</h2>
                <p id="hero-desc" class="lead small">Renting made easy with RentalHub, your one-stop destination for all
                    your rental needs. Whether you're looking for a sleek</p>
                <p><a class="btn btn-sm btn-outline-light" style="padding: 4.5px 14.5px !important;border-radius: 4px;"
                        href="#" role="button">Learn More</a> </p>
            </section>
            <div class="container-fluid pl-4 pr-4 pt-5 pb-4 text-center text-light">
                <div class="container-fluid my-3 text-center text-light">
                    <h2 style="color:#ECECEC;">Heading</h2>
                    <hr>
                    <p> Whether you're looking for a sleek city apartment or a cozy countryside cottage, we've got</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <h1 style="color:#00939A"><i class="bi-water"></i></h1>
                            <h2 class="my-2">Heading</h2>
                            <p> With</p>
                        </div>
                        <div class="col-md-4 my-2">
                            <h1 style="color:#00939A"><i class="bi-globe"></i></h1>
                            <h2 class="my-2">Heading</h2>
                            <p> With</p>
                        </div>
                        <div class="col-md-4 my-2">
                            <h1 style="color:#00939A"><i class="bi-suitcase2"></i></h1>
                            <h2 class="my-2">Heading</h2>
                            <p> With</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pl-4 pr-4 py-4 text-left text-light">
                <div class="container-fluid my-3 text-center text-light">
                    <h2 style="color:#ECECEC;">Heading</h2>
                    <hr>
                    <p> Whether you're looking for a sleek city apartment or a cozy countryside cottage, we've got</p>
                </div>
                <div class="container-fluid">
                    <div class="glide">
                        <div data-glide-el="track" class="glide__track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="p-2">
                                        <div class="carousel-img">
                                            <img alt="" style="width: 99%;"
                                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                                        </div>
                                        <div class="py-2">
                                            <h5 style="color:#ECECEC;">Heading</h5>
                                            <p class="small text-light"></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="btn btn-outline-secondary glide__arrow glide__arrow--prev"
                                    data-glide-dir="<">‹</button>
                                <button class="btn btn-outline-secondary glide__arrow glide__arrow--next"
                                    data-glide-dir=">">›</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pl-4 pr-4 py-4 text-left text-light">
                <div class="container-fluid my-3 text-center text-light">
                    <h2 style="color:#ECECEC;">Heading</h2>
                    <hr>
                    <p> Whether you're looking for a sleek city apartment or a cozy countryside cottage, we've got</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                        <div class="col-md-3 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1049298/pexels-photo-1049298.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pl-4 pr-4 py-4 text-left text-light">
                <div class="container-fluid my-3 text-center text-light">
                    <h2 style="color:#ECECEC;">Heading</h2>
                    <hr>
                    <p> Whether you're looking for a sleek city apartment or a cozy countryside cottage, we've got</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1591375/pexels-photo-1591375.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                        <div class="col-md-6 my-2 gallery-col">
                            <img alt=""
                                src="https://images.pexels.com/photos/1591375/pexels-photo-1591375.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=350">
                            <h5 class="mt-1 text-light">Heading</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact" class="container-fluid pl-4 pr-4 py-5">
                <div class="container-fluid bg-transparent text-left text-light"
                    style="position:relative;margin-top:0px;">
                    <div class="container-fluid my-3 text-center text-light" style="padding-left:0;">
                        <h2 style="color:#FEFEFE;">Contact Us</h2>
                        <hr>
                    </div>
                    <form id="contact-form" action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                required="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Subject" required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-filled">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="py-5">
                <div class="container-fluid px-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group w-100">
                                <input type="email" class="form-control mb-2 rounded-0" style="min-width:120px;"
                                    placeholder="Email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-filled mb-2 rounded-0">Subscribe</button>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="d-inline-block pr-1"><a href="#" class="bi-facebook text-dark"></a></li>
                                <li class="d-inline-block pr-1"><a href="#" class="bi-twitter-x text-dark"></a>
                                </li>
                                <li class="d-inline-block pr-1"><a href="#" class="bi-instagram text-dark"></a>
                                </li>
                                <li class="d-inline-block pr-1"><a href="#" class="bi-linkedin text-dark"></a></li>
                                <li class="d-inline-block pr-1"><a href="#" class="bi-youtube text-dark"></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-dark">Site Map</h5>
                            <ul class="list-unstyled">
                                <li><a href="about.html" class="text-dark">About</a></li>
                                <li><a href="tours.html" class="text-dark">Tours</a></li>
                                <li><a href="destinations.html" class="text-dark">Destinations</a></li>
                                <li><a href="testimonials.html" class="text-dark">Testimonials</a></li>
                                <li><a href="contact.html" class="text-dark">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-dark">Site Map</h5>
                            <ul class="list-unstyled">
                                <li><a href="about.html" class="text-dark">About</a></li>
                                <li><a href="tours.html" class="text-dark">Tours</a></li>
                                <li><a href="destinations.html" class="text-dark">Destinations</a></li>
                                <li><a href="testimonials.html" class="text-dark">Testimonials</a></li>
                                <li><a href="contact.html" class="text-dark">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-dark">Site Map</h5>
                            <ul class="list-unstyled">
                                <li><a href="about.html" class="text-dark">About</a></li>
                                <li><a href="tours.html" class="text-dark">Tours</a></li>
                                <li><a href="destinations.html" class="text-dark">Destinations</a></li>
                                <li><a href="testimonials.html" class="text-dark">Testimonials</a></li>
                                <li><a href="contact.html" class="text-dark">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="text-dark mb-0">RentalHub © 2024. All Rights Reserved. <a
                                    href="https://www.pexels.com" style="text-decoration: underline;"
                                    class="text-dark">Photos provided by Pexels</a></p>
                        </div>
                    </div>
                </div>
            </footer>


        </body>

        </html>
    @endsection
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
