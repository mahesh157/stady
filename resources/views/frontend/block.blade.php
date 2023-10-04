@extends('frontend.layouts.main')
@section('main-container')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Block</title>
    <link rel="shortcut icon" href="./imges/monu.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('frontend/css/blok.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div style="padding-top: 140px;">
        <div class="container">

            <div>
                <h4 class>News</h4>

            </div>
            <div>
                <p class="text-muted fw-bold">Studiare <i class="fa-solid fa-caret-right"></i> News</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-8 col-lg-8 mt-3">
                    <img class="w-100" src="{{ url('frontend/imges/loyare.jpg') }}" alt>
                    <div style="border: 1px solid #ccc;" class="p-5">
                        <p class="Government text-muted">Government</p>
                        <p class="Tips text-capitalize fw-bold">Tips to Developing a Quality
                            Discussion</p>
                        <p class="text-muted fw-bold"><i class="fa-solid fa-clock text-warning"></i> <span
                                class="px-3">June
                                13, 2018</span></p>
                    </div>
                    <img class="w-100 mt-4" src="{{ url('frontend/imges/computer-thipying.jpg') }}" alt>
                    <div style="border: 1px solid #ccc;" class="p-5">
                        <p class="Government text-muted">Government</p>
                        <p class="Tips text-capitalize fw-bold">
                            Tips to Developing a Quality Discussion</p>
                        <p class="text-muted fw-bold"><i class="fa-solid fa-clock text-warning"></i> <span
                                class="px-3">June
                                13, 2018</span></p>
                    </div>
                    <img class="w-100 mt-4" src="{{ url('frontend/imges/codding.jpg') }}" alt>
                    <div style="border: 1px solid #ccc;" class="p-5">
                        <p class="Government text-muted">Government</p>
                        <p class="Tips text-capitalize fw-bold">
                            Tips to Developing a Quality Discussion</p>
                        <p class="text-muted fw-bold"><i class="fa-solid fa-clock text-warning"></i> <span
                                class="px-3">June
                                13, 2018</span></p>
                    </div>
                    <img class="w-100 mt-4" src="{{ url('frontend/imges/corses online.jpg') }}" alt>
                    <div style="border: 1px solid #ccc;" class="p-5">
                        <p class="Government text-muted">Government</p>
                        <p class="Tips text-capitalize fw-bold">
                            Tips to Developing a Quality Discussion</p>
                        <p class="text-muted fw-bold"><i class="fa-solid fa-clock text-warning"></i> <span
                                class="px-3">June
                                13, 2018</span></p>
                    </div>
                    <img class="w-100 mt-4" src="{{ url('frontend/imges/sempal.jpg') }}" alt>
                    <div style="border: 1px solid #ccc;" class="p-5">
                        <p class="Government text-muted">Government</p>
                        <p class="Tips text-capitalize fw-bold">
                            Tips to Developing a Quality Discussion</p>
                        <p class="text-muted fw-bold"><i class="fa-solid fa-clock text-warning"></i> <span
                                class="px-3">June
                                13, 2018</span></p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 col-lg-4 mt-3">
                    <div style="border: 1px solid #ccc;" class="p-4 bg-white">
                        <div>
                            <form action style="border: 2px solid #ccc; display: flex;">
                                <input type="search" class="w-100" id="name"
                                    style="outline: none; border: none; background-color: white;" required
                                    placeholder="ENTER KEY WORD...">
                                <button style="outline: none; border: none; background-color: white;"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>

                    </div>
                    <div style="border: 1px solid #ccc;" class="mt-5">

                        <img width="100%" class="p-3" src="{{ url('frontend/imges/corses online.jpg') }}"
                            alt="">
                    </div>
                    <div>
                        <div style="border: 1px solid #ccc;" class="mt-3">
                            <div class>
                                <p style="width: 3px; height: 50px; background-color: orange;" class="mt-4"></p>
                                <div>

                                </div>
                            </div>
                            <p style="margin-top: -80px; margin-left: 20px;" class="text-black fw-bold">Categories</p>
                            <hr style="margin-left: 20px; margin-right: 20px;">

                            <p style="margin-top: 13px; margin-left: 20px;" class="academics text-capitalize">
                                academics</p>
                            <hr style="margin-left: 20px; margin-right: 20px;">

                            <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">
                                advertisement</p>
                            <hr style="margin-left: 20px; margin-right: 20px;">
                            <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">business
                            </p>
                            <hr style="margin-left: 20px; margin-right: 20px;">
                            <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">compus
                                life</p>
                            <hr style="margin-left: 20px; margin-right: 20px;">
                            <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">desing
                            </p>
                            <hr style="margin-left: 20px; margin-right: 20px;">
                            <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">
                                government</p>
                            <hr style="margin-left: 20px; margin-right: 20px;">
                            <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">schools
                            </p>
                            <hr style="margin-left: 20px; margin-right: 20px;">
                        </div>
                        <div style="border: 1px solid #ccc; height: 40vh;" class="mt-3 w-100 lll">
                            <div class>
                                <p style="width: 3px; height: 40px; background-color: orange;" class="mt-4"></p>
                                <div>

                                </div>
                            </div>
                            <p style="margin-top: -55px; margin-left: 20px;"
                                class="text-black fw-bold text-capitalize">taps</p>
                            <hr style="margin-left: 20px; margin-right: 20px;">
                            <div class="d-flex mx-1 mb-2">
                                <div class="btn-group btn-group-sm mx-lg-4 m-auto ooooo" role="group"
                                    aria-label="Small button group ">
                                    <button type="button"
                                        class="btn btn-outline-primary mx-1 fw-bold text-capitalize">code</button>
                                    <button type="button"
                                        class="btn btn-outline-primary mx-1 fw-bold text-capitalize">Courses</button>
                                    <button type="button"
                                        class="btn btn-outline-primary mx-1 text-capitalize fw-bold">parents</button>
                                    <button type="button"
                                        class="btn btn-outline-primary mx-1 text-capitalize fw-bold">schools</button>
                                </div>

                            </div>
                            <div class="btn-group btn-group-sm mx-5 m-auto mmm" role="group"
                                aria-label="Small button group">
                                <button type="button"
                                    class="btn btn-outline-primary fw-bold text-capitalize mx-1">students</button>
                                <button type="button"
                                    class="btn btn-outline-primary fw-bold text-capitalize mx-1">teacher</button>
                                <button type="button"
                                    class="btn btn-outline-primary fw-bold text-capitalize mx-1">theme</button>
                            </div>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <button type="button"
                                    class="btn btn-outline-primary mt-3 mb-4 fw-bold text-capitalize mx-1 slul">werdpress</button>

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
@endsection
