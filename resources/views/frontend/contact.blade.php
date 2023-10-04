<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg p-0 jaimbar">
        <div class="container-fluid">
            <a class=" text-white text-decoration-none king" href="#">
                <i class="fa-solid fa-phone"></i>
                +05549567895
            </a>
            <a href class=" dipla text-decoration-none text-white king">
                <i class="fa-solid fa-envelope px-2"></i>
                email@mycourse.com
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link text-white text-white text-capitalize" aria-current="page"
                            href="#">purchase now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-capitalize" href="#">about</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link   text-white text-capitalize" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            news
                        </a>
                    </li>
                    <li class="nav-item-2"></li>
                </ul>
            </div>
        </div>
        <div class="d-none-media-responsive d-md-none d-lg-block  d-flex rep">
            <div class="d-flex l">
                <p onclick="dblock()" class="w-100 p-4 serch">
                    <i class="fa-solid fa-magnifying-glass pt-2 "></i>
                </p>
                <div class="sercha mx-1">
                    <p class="glasl w-100 p-4 mx-1  d-flex pt-5">
                        <i class="fa-solid fa-cart-shopping "></i>
                        <span class="sempla">0</span>
                    </p>
                </div>
            </div>
        </div>
    </nav>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ url('frontend/imges/llllll.svg') }}" alt>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown mt-2">
                            <a class="drop text-capitalize text-decoration-none text-black" href="{{ route('frontend.about') }}">page <i
                                    class="fa-solid fa-caret-down mx-2"></i></a>
                            <div class="dropdown-content">
                                <a href="#">About</a>
                                <hr>
                                <a class="text-capitalize" href="#">princing</a>
                                <hr>
                                <a class="text-capitalize" href="#">portfolio-single
                                    <hr>
                                </a>
                                <a class="text-capitalize" href="#">teacher</a>
                                <hr>
                                <a class="text-capitalize" href="#">teacher single</a>
                                <hr>
                                <div class="dropdown-1">
                                    <p class="dropbtn-1 text-capitalize mx-2">sub-manu leval

                                        <i class="fa-solid fa-caret-right mx-4"></i>
                                    </p>
                                    <div class="dropdown-content-1">
                                        <a class="text-capitalize" href="#">sub-manu-1</a>
                                        <hr>
                                        <a class="text-capitalize" href="#">sub-manu-2</a>
                                        <hr>
                                        <a class="text-capitalize" href="#">submanu-3</a>
                                        <hr>
                                    </div>
                                </div>
                                <hr>
                                <a class="text-capitalize" href="#">shoping</a>
                                <hr>
                                <a class="text-capitalize" href="#">checkout</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mt-2">
                        <div class="dropdown">
                            <a class="dropbtn text-decoration-none text-black" href="{{ route('frontend.block') }}">Blok <i
                                    class="fa-solid fa-caret-down mx-2"></i></a>
                            <div class="dropdown-content">
                                <a href="#">Blok-list</a>
                                <hr>
                                <a href="#">Blok-grid</a>
                                <hr>
                                <a href="#">Blok-classic</a>
                                <hr>
                                <a href="#">post single</a>
                                <hr>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-disabled="true" href="{{ route('frontend.course') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-disabled="true" href="{{ route('frontend.Evaint') }}">Evaint</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-disabled="true">Contact</a>
                    </li>
                </ul>
                <div class="king-pisar d-lg-block   bg-warning p-1 rounded-pill">
                    <button id class="btn text-capitalize text-white" style="width: max-content;"><i
                            class="fa-solid fa-users"></i> Get started</button>

                </div>
            </div>
        </div>
    </nav>
    <div style="padding-top: 1px !important;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27129123.346423108!2d82.73362069132843!3d33.898394780480864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31508e64e5c642c1%3A0x951daa7c349f366f!2sChina!5e0!3m2!1sen!2sin!4v1693284599410!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="mt-5">
        <h5 class="text-center fw-bold">Get in Touch</h5>
        <p class="text-center">Someone finds it difficult to understand your
            creative idea? There is a better visualisation. Share your views with us,
            <span class="d-block">were looking forward to hear from you.</span>
        </p>
    </div>
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-md-6 col-sm -6 col-lg-6">
                <form action>
                    <label for="name" class="form-label pppp">Name</label>
                    <input type="name" id="name" class="form-control" aria-describedby="passwordHelpBlock"
                        required>

            </div>
            <div class="col-md-6 col-sm -6 col-lg-6 pppp">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                    required>
            </div>
            <div class="col-md-12 col-sm -12 col-lg-12pppp2">
                <label for="mobileno" class="form-label">Mobile Number</label>
                <input type="mobileno" id="mobileno" class="form-control" aria-describedby="passwordHelpBlock" 12
                    required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example
                    textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <button class="btn btn-warning fw-bold w-50">submit message</button>
            </form>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex">
                        <div><i class="fa-solid fa-envelope mx-5 fw-bold text-primary pt-2 fs-3"></i></div>
                        <div class="fw-bold">Tel: +1 (420) 899 4400 <p> E-Mail: hello@codebean.co</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex">
                        <div><i class="fa-solid fa-location-dot  fs-3 mx-5 text-primary"></i></div>
                        <div class="fw-bold">
                            6100 Wilshire Blvd 2nd Floor <div> Angeles CA</div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="d-flex">
                        <div><i class="fa-regular fa-clock mx-5 text-primary fs-4 fw-bold"></i></div>
                        <div class="fw-bold">
                            Our office is open: <div> Mon to Fri from 8am to 6pm</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  footer-->
    <div style="background-color: #2e3e77; width: 100%;" class="mt-5">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 pt-5">
                    <div><img src="{{url('frontend/imges/llllll.svg')}}" alt=""></div>
                    <div>
                        <p class="pt-3" style="color: #ccc;">We named our theme Studiare because to us,
                            the best brands are simple ones. Brands thrive
                            on their ability to be understood.</p>
                    </div>
                    <p class="" style="color: #ccc;"><i class="fa-solid fa-location-dot"></i> 127 Elizabeth
                        Street, NY New York</p>
                    <p style="color: #ccc;">
                        <i class="fa-solid fa-mobile"></i> +55-11-3097-0508
                    </p>
                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 pt-5">
                    <div>
                        <p style="color: #ccc; font-size: 20px;">Quick Links</p>
                    </div>
                    <p style="color: #ccc; font-size: 17px;">Home</p>
                    <p style="color: #ccc; font-size: 17px;">Contact</p>
                    <p style="color: #ccc; font-size: 17px;">About</p>

                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 pt-5">

                    <div class="pt-5">
                        <p style="color: #ccc; font-size: 17px;">Home</p>
                        <p style="color: #ccc; font-size: 17px;">Contact</p>
                        <p style="color: #ccc; font-size: 17px;">About</p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 pt-5">

                    <div class="">
                        <div>
                            <p style="color: #ccc; font-size: 20px;">Newsletter</p>
                        </div>
                        <p style="color: #ccc; font-size: 17px;">Dont miss anything, sign up now and keep informed
                            about our company.</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter to Email passward"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="btn bg-warning text-black fw-bold">search</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>




    <!--  footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
