@extends('frontend.layouts.main')
@section('main-container')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('frontend/css/Evaint.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
        <div id="srch-bar" class=" w-100 px-5 w-100  p-1" style="display: none;">
            <div style="border-bottom: 5px solid #ccc; background: white; display: flex;">
                <input class="w-100 p-2 bg-white fw-bold"
                    style="z-index: 10 !important; border: none; outline: none; background: none !important;"
                    type="text" placeholder="ssss">
                <i class="fa-solid fa-magnifying-glass p-3" style="background: aliceblue;"></i>
            </div>
        </div>
    </div>
    <div style="padding-top: 150px;">
    </div>
    <div class="container">

        <div>
            <h4 class>Events</h4>
        </div>
        <div>
            <p class="text-muted fw-bold">Studiare <i class="fa-solid fa-caret-right"></i> Events </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-sm-8">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 mt-2 p-4  bg-white"
                            style="border: 1px solid #ccc; border-radius: 10px;">

                            <div class="d-flex w-100  padding">
                                <div style="border: 5px solid orange;" class="tiranga">
                                    <h5 class="text-center p-23 fw-bold">28 <span style="display: block;">oct</span>
                                    </h5>

                                    <h1 id="monu"></h1>
                                    <h1 id="sonu"></h1>

                                </div>

                                <div>
                                    <div class="d-flex">
                                        <p class="text-muted fw-bold maging-5"> <i
                                                class="fa-regular fa-clock  text-warning"
                                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                                        <p style="margin-left: 15px;" class="text-muted fw-bold maging-5"><i
                                                class="fa-solid fa-location-dot text-warning"
                                                style="margin-right: 10px;"></i>New York , US of
                                            America</p>
                                    </div>
                                    <div class="w-100">
                                        <p class="text-capitalize pilo fw-bold text-muted"
                                            style="margin-left: 20px; font-size: 20px;">summer
                                            high school journalism camp <span class="d-block">registration
                                                form</span></p>
                                    </div>
                                </div>
                                <div><img class="pegep" src="{{('frontend/imges/injoy.jpg')}}" alt=""></div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 mt-2 p-4  bg-white"
                            style="border: 1px solid #ccc; border-radius: 10px;">

                            <div class="d-flex w-100  padding">
                                <div style="border: 5px solid orange;" class="tiranga">
                                    <h5 class="text-center p-23 fw-bold">28 <span style="display: block;">oct</span>
                                    </h5>

                                    <h1 id="monu"></h1>
                                    <h1 id="sonu"></h1>

                                </div>

                                <div>
                                    <div class="d-flex">
                                        <p class="text-muted fw-bold maging-5"> <i
                                                class="fa-regular fa-clock  text-warning"
                                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                                        <p style="margin-left: 15px;" class="text-muted fw-bold maging-5"><i
                                                class="fa-solid fa-location-dot text-warning"
                                                style="margin-right: 10px;"></i>New York , US of
                                            America</p>
                                    </div>
                                    <div class="w-100">
                                        <p class="text-capitalize pilo fw-bold text-muted"
                                            style="margin-left: 20px; font-size: 20px;">summer
                                            high school journalism camp <span class="d-block">registration
                                                form</span></p>
                                    </div>
                                </div>
                                <div><img class="pegep" src="{{('frontend/imges/future.jpg')}}" alt=""></div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12 mt-2 p-4  bg-white"
                            style="border: 1px solid #ccc; border-radius: 10px;">

                            <div class="d-flex w-100  padding">
                                <div style="border: 5px solid orange;" class="tiranga">
                                    <h5 class="text-center p-23 fw-bold">28 <span style="display: block;">oct</span>
                                    </h5>

                                    <h1 id="monu"></h1>
                                    <h1 id="sonu"></h1>

                                </div>

                                <div>
                                    <div class="d-flex">
                                        <p class="text-muted fw-bold maging-5"> <i
                                                class="fa-regular fa-clock  text-warning"
                                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                                        <p style="margin-left: 15px;" class="text-muted fw-bold maging-5"><i
                                                class="fa-solid fa-location-dot text-warning"
                                                style="margin-right: 10px;"></i>New York , US of
                                            America</p>
                                    </div>
                                    <div class="w-100">
                                        <p class="text-capitalize pilo text-muted fw-bold"
                                            style="margin-left: 20px; font-size: 20px;">summer
                                            high school journalism camp <span class="d-block">registration
                                                form</span></p>
                                    </div>
                                </div>
                                <div><img class="pegep" src="{{url('frontend/imges/livevwery.jpg')}}" alt=""></div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12 mt-2 p-4  bg-white"
                            style="border: 1px solid #ccc; border-radius: 10px;">

                            <div class="d-flex w-100  padding">
                                <div style="border: 5px solid orange;" class="tiranga">
                                    <h5 class="text-center p-23 fw-bold">28 <span style="display: block;">oct</span>
                                    </h5>

                                    <h1 id="monu"></h1>
                                    <h1 id="sonu"></h1>

                                </div>

                                <div>
                                    <div class="d-flex no-gutters">
                                        <p class="text-muted fw-bold maging-5"> <i
                                                class="fa-regular fa-clock  text-warning"
                                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                                        <p style="margin-left: 15px;" class="text-muted fw-bold maging-5"><i
                                                class="fa-solid fa-location-dot text-warning"
                                                style="margin-right: 10px;"></i>New York , US of
                                            America</p>
                                    </div>
                                    <div class="w-100">
                                        <p class="text-capitalize pilo text-muted fw-bold"
                                            style="margin-left: 20px; font-size: 20px;">summer
                                            high school journalism camp <span class="d-block">registration
                                                form</span></p>
                                    </div>
                                </div>
                                <div class="pege"><img class="pege" src="{{('frontend/imges/sece.jpg')}}" alt=""></div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12 mt-2 p-4  bg-white"
                            style="border: 1px solid #ccc; border-radius: 10px;">

                            <div class="d-flex w-100  padding">
                                <div style="border: 5px solid orange;" class="tiranga">
                                    <h5 class="text-center p-23 fw-bold">28 <span style="display: block;">oct</span>
                                    </h5>

                                    <h1 id="monu"></h1>
                                    <h1 id="sonu"></h1>

                                </div>

                                <div>
                                    <div class="d-flex">
                                        <p class="text-muted fw-bold maging-5"> <i
                                                class="fa-regular fa-clock  text-warning"
                                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                                        <p style="margin-left: 15px;" class="text-muted fw-bold maging-5"><i
                                                class="fa-solid fa-location-dot text-warning "
                                                style="margin-right: 10px;"></i>New York , US of
                                            America</p>
                                    </div>
                                    <div class="w-100">
                                        <p class="text-capitalize pilo text-muted fw-bold"
                                            style="margin-left: 20px; font-size: 20px;">summer
                                            high school journalism camp <span class="d-block">registration
                                                form</span></p>
                                    </div>
                                </div>
                                <div class="pege"><img src="{{url('frontend/imges/pectocal.jpg')}}" width="100%" height="100px"
                                        alt=""></div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 mt-2 p-4  bg-white"
                            style="border: 1px solid #ccc; border-radius: 10px;">

                            <div class="d-flex w-100  padding">
                                <div style="border: 5px solid orange;" class="tiranga">
                                    <h5 class="text-center p-23 fw-bold">28 <span style="display: block;">oct</span>
                                    </h5>

                                    <h1 id="monu"></h1>
                                    <h1 id="sonu"></h1>

                                </div>

                                <div>
                                    <div class="d-flex">
                                        <p class="text-muted fw-bold maging-5"> <i
                                                class="fa-regular fa-clock  text-warning"
                                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                                        <p style="margin-left: 15px;" class="text-muted fw-bold maging-5"><i
                                                class="fa-solid fa-location-dot text-warning "
                                                style="margin-right: 10px;"></i>New York , US of
                                            America</p>
                                    </div>
                                    <div class="w-100">
                                        <p class="text-capitalize pilo text-muted fw-bold"
                                            style="margin-left: 20px; font-size: 20px;">summer
                                            high school journalism camp <span class="d-block">registration
                                                form</span></p>
                                    </div>
                                </div>
                                <div class="pege"><img class="pege" src="{{('frontend/imges/about3.jpg')}}" width="100%"
                                 height="100px" alt=""></div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 mt-2 p-4  bg-white"
                            style="border: 1px solid #ccc; border-radius: 10px;">

                            <div class="d-flex w-100  padding">
                                <div style="border: 5px solid orange;" class="tiranga">
                                    <h5 class="text-center p-23 fw-bold">28 <span style="display: block;">oct</span>
                                    </h5>

                                    <h1 id="monu"></h1>
                                    <h1 id="sonu"></h1>

                                </div>

                                <div>
                                    <div class="d-flex">
                                        <p class="text-muted fw-bold maging-5"> <i
                                                class="fa-regular fa-clock  text-warning"
                                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                                        <p style="margin-left: 15px;" class="text-muted fw-bold maging-5"><i
                                                class="fa-solid fa-location-dot text-warning"
                                                style="margin-right: 10px;"></i>New York , US of
                                            America</p>
                                    </div>
                                    <div class="w-100">
                                        <p class="text-capitalize pilo text-muted fw-bold"
                                            style="margin-left: 20px; font-size: 20px;">summer
                                            high school journalism camp <span class="d-block">registration
                                                form</span></p>
                                    </div>
                                </div>
                                <div><img class="pege" src="{{url('frontend/imges/room.jpg')}}" width="100%" height="100px"
                                        alt=""></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4">
                    <div style="border: 1px solid #ccc;" class="mt-2">

                        <img width="100%" class="p-3" src="{{url('frontend/imges/corses online.jpg')}}" alt>
                    </div>

                    <div style="border: 1px solid #ccc;" class="mt-3">
                        <div class>
                            <p style="width: 3px; height: 50px; background-color: orange;" class="mt-4"></p>
                            <div>

                            </div>
                        </div>
                        <p style="margin-top: -80px; margin-left: 20px;" class="text-black fw-bold">Archives</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">

                        <p style="margin-top: 13px; margin-left: 20px;" class="academics text-capitalize">september
                        </p>
                        <hr style="margin-left: 20px; margin-right: 20px;">

                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">october</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">november</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">compus life
                        </p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">desing</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">government
                        </p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">schools</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
@endsection
