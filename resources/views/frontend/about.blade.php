@extends('frontend.layouts.main')
@section('main-container')
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="shortcut icon" href="./imges/monu-79.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('frontend/css/index-3.css') }}">
    <!-- link font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- font link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!--
                <div class="d-none-media-responsive d-md-none d-lg-block  d-flex rep">
                    <div class="d-flex l">
                        <p class="w-100 p-4 serch">
                            <i class="fa-solid fa-magnifying-glass pt-2 "></i>
                        </p>
                        <div class="sercha mx-1">
                            <p class=" w-100 p-4 mx-1  d-flex pt-5">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="sempla">0</span>
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    -->
        <div id="srch-bar" class=" w-100 px-5 w-100  p-1" style="display: none;">
            <div style="border-bottom: 5px solid #ccc; background: white; display: flex;">
                <input class="w-100 p-2 bg-white fw-bold"
                    style="z-index: 10 !important; border: none; outline: none; background: none !important;"
                    type="text" placeholder="ssss">
                <i class="fa-solid fa-magnifying-glass p-3" style="background: aliceblue;"></i>
            </div>
        </div>
    </div>
    <div style="padding-top: 120px;">
        <div class="container">
            <div>
                <h4 class="">About Us</h4>

            </div>
            <div>
                <p class="text-muted fw-bold">Studiare <i class="fa-solid fa-caret-right"></i> About Us</p>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6 col-lg-6 mt-3">
                    <img src="{{ url('frontend/imges/about1.jpg') }}" alt="" class="w-100 chenal">
                </div>
                <div class="col-md-12 col-sm-6 col-lg-6 p-4 mt-3" style="border: 1px solid #ccc;">
                    <div>
                        <div class="bg-white">
                            <p class="text-warning fs-4"><i class="fa-solid fa-file"></i></p>
                            <p class="text-black fw-bold">Who We Are</p>
                            <p class="text-muted">Maecenas ac efficitur turpis, et dictum elit. Aliquam vel suscipit
                                arcu.
                                <span class="d-block">Nunc condimentum erat arcu, vel eleifend metus tincidunt
                                    vel.</span> <span class="d-block">Maecenas lacinia turpis diam, quis feugiat libero
                                    interdum vel.</span>
                            </p>
                            <p class="read  ">Read More</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-lg-6 p-4 mt-3" style="border: 1px solid #ccc;">
                    <div>
                        <div class="bg-white">
                            <p class="text-warning fs-3" style="text-align: right;"><i
                                    class="fa-solid fa-building-columns"></i></p>
                            <p class="text-black fw-bold text-capitalize" style="text-align: right;">our education</p>
                            <p class="text-muted" style="text-align: right;">Maecenas ac efficitur turpis, et dictum
                                elit. Aliquam vel suscipit arcu.
                                <span class="d-block">Nunc condimentum erat arcu, vel eleifend metus tincidunt
                                    vel.</span> <span class="d-block">Maecenas lacinia turpis diam, quis feugiat libero
                                    interdum vel.</span>
                            </p>
                            <p class="read-1">Read More</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-sm-6 col-lg-6 mt-3"><img src="{{ url('frontend/imges/commprram.jpg') }}"
                        alt="" class="w-100 chenal"></div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-lg-6 p-4 mt-3" style="border: 1px solid #ccc;">
                    <div>
                        <div class="bg-white">
                            <p class="text-warning fs-2"><i class="fa-solid fa-umbrella"></i></p>
                            <p class="text-black fw-bold text-capitalize">our story</p>
                            <p class="text-muted">Maecenas ac efficitur turpis, et dictum elit. Aliquam vel suscipit
                                arcu.
                                <span class="d-block">Nunc condimentum erat arcu, vel eleifend metus tincidunt
                                    vel.</span> <span class="d-block">Maecenas lacinia turpis diam, quis feugiat libero
                                    interdum vel.</span>
                            </p>
                            <p class="read">Read More</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-sm-6 col-lg-6 mt-3"><img src="{{ url('frontend/imges/about3.jpg') }}"
                        alt="" class="w-100 chenal"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-primary mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-lg-3 p-4">
                    <div class="d-flex">
                        <h1 class="text-white">321 </h1>
                        <p class="text-white px-3">cases
                            <span class="d-block"> completed</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 p-4">
                    <div class="d-flex">
                        <h1 class="text-white">156 </h1>
                        <p class="text-white px-3">cases
                            <span class="d-block"> completed</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 p-4">
                    <div class="d-flex">
                        <h1 class="text-white">150 </h1>
                        <p class="text-white px-3">cases
                            <span class="d-block"> completed</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 p-4">
                    <div class="d-flex">
                        <h1 class="text-white">200 </h1>
                        <p class="text-white px-3">cases
                            <span class="d-block"> completed</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="w-100 mt-5 compse" style="border: 2px solid  #ccc;">
                    <div class="monday text-capitalize fw-bold fs-3">
                        <p class=" sallu">honeydew</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="w-100 mt-5 compse-5" style="border: 2px solid  #ccc;">
                    <div class="monday-2 text-capitalize fw-bold fs-3">
                        <P class="
              pill">everlane</P>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="w-100 mt-5 compse-6" style="border: 2px solid  #ccc;">
                    <div class="monday-2 text-capitalize fw-bold fs-3">
                        <p class="pooo"> madison</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="w-100 mt-5 complay" style="border: 2px solid  #ccc;">
                    <div class="monday-2 text-capitalize fw-bold fs-3">
                        <p class="sill"> andersen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script>
        function dblock() {
            var x = document.getElementById('srch-bar');
            // console.log(x)
            x.classList.toggle('dblock');
        }
    </script>
</body>

</html>
@endsection
