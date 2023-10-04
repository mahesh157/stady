@extends('frontend.layouts.main')
@section('main-container')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course</title>
    <link rel="stylesheet" href="{{ url('frontend/css/course.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        <div class="container">

            <div>
                <h4 class>Courses</h4>

            </div>
            <div>
                <p class="text-muted fw-bold">Home <i class="fa-solid fa-caret-right"></i> Courses</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-8 col-lg-8 mt-5">

                    <div class="w-100 p-2" style="border: 1px solid #ccc;">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="active mx-2"><a href="#"><i
                                            class="fa-brands fa-windows   text-pill "></i></a></div>
                                <div class=" active mx-2"><a href="#"><i
                                            class="text-w hite fa-solid fa-bars text-pill "></i></a></div>
                                <p class="text-muted fw-bold mt-3 shoping">Showing all 9 results </p>
                            </div>

                            <div class="mt-2">
                                <form action style="border: 2px solid #ccc; display: flex;">
                                    <input type="search" class="w-100 p-2" id="name"
                                        style="outline: none; border: none; background-color: white;" required
                                        placeholder="ENTER KEY WORD...">
                                    <button style="outline: none; border: none; background-color: white;"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/computer.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 25px;">
                                <p class="text-capitalize meri">special education needs teaching</p>
                                <div class="d-flex">
                                    <p class="btn btn-success" style="font-size: 10px; height: fit-content; ">50</p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">shop sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex pt-2" style="padding: 8px; justify-content: space-between;">
                                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                                        13
                                        5</p>
                                    <p class="text-muted ">£444</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/kkkk.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 25px;">
                                <p class="text-capitalize meri">invironments science
                                    btec course
                                </p>
                                <div class="d-flex">
                                    <p class="btn btn-success"
                                        style="font-size: 10px; margin-right: 5px; height: fit-content;">5.0</p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">dev sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex"
                                    style=" padding: 5px;justify-content: space-between; padding-top: 10px;">
                                    <p class=" text-muted pt-"><i class="fa-solid fa-users"></i>
                                        150</p>
                                    <p class="text-muted ">£6.24</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/mmm.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 22px;">
                                <p class="text-capitalize meri">distance learning mba Management</p>
                                <div class="d-flex">
                                    <p class="btn btn-success text-capitalize"
                                        style="font-size: 14px;margin-right: 0px; height: fit-content;">0.6
                                    </p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">pill sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex pt-3 " style="padding: 0px; justify-content: space-between;">
                                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                                        204</p>
                                    <p class="text-muted ">£844</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/commprram.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 25px;">
                                <p class="text-capitalize meri">special education needs teaching</p>
                                <div class="d-flex">
                                    <p class="btn btn-success" style="font-size: 10px; height: fit-content; ">50</p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">pahal sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex pt-2" style="padding: 8px; justify-content: space-between;">
                                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                                        13
                                        5</p>
                                    <p class="text-muted ">£444</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/lecher.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 25px;">
                                <p class="text-capitalize meri">invironments science
                                    btec course
                                </p>
                                <div class="d-flex">
                                    <p class="btn btn-success"
                                        style="font-size: 10px; margin-right: 5px; height: fit-content;">5.0</p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">lala sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex"
                                    style=" padding: 5px;justify-content: space-between; padding-top: 10px;">
                                    <p class=" text-muted pt-"><i class="fa-solid fa-users"></i>
                                        150</p>
                                    <p class="text-muted  ">£6.24</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/corses online.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 22px;">
                                <p class="text-capitalize meri">distance learning mba Management</p>
                                <div class="d-flex">
                                    <p class="btn btn-success text-capitalize"
                                        style="font-size: 14px;margin-right: 0px; height: fit-content;">0.6
                                    </p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">sandiv sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex pt-3 " style="padding: 0px; justify-content: space-between;">
                                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                                        204</p>
                                    <p class="text-muted ">£844</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/about3.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 25px;">
                                <p class="text-capitalize meri">special education needs teaching</p>
                                <div class="d-flex">
                                    <p class="btn btn-success" style="font-size: 10px; height: fit-content; ">50</p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">shomiya sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex pt-2" style="padding: 8px; justify-content: space-between;">
                                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                                        13
                                        5</p>
                                    <p class="text-muted  ">£444</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/computer-thipying.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 25px;">
                                <p class="text-capitalize meri">invironments science
                                    btec course
                                </p>
                                <div class="d-flex">
                                    <p class="btn btn-success"
                                        style="font-size: 10px; margin-right: 5px; height: fit-content;">5.0</p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">raju sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex"
                                    style=" padding: 5px;justify-content: space-between; padding-top: 10px;">
                                    <p class=" text-muted pt-"><i class="fa-solid fa-users"></i>
                                        150</p>
                                    <p class="text-muted  ">£6.24</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4     col-sm-4    col-lg-4   mt-5 dulha">
                            <div><img class="jogi-1" src="{{url('frontend/imges/mmm.jpg')}}" alt></div>
                            <div style="border: 1px solid #ccc; padding: 22px;">
                                <p class="text-capitalize meri">distance learning mba Management</p>
                                <div class="d-flex">
                                    <p class="btn btn-success text-capitalize"
                                        style="font-size: 14px;margin-right: 0px; height: fit-content;">0.6
                                    </p>

                                    <p
                                        style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;">
                                    </p>
                                    <p class="mx-2 text-primary ">kalpana sharma</p>

                                </div>

                            </div>
                            <div style=" border: 1px solid #ccc;">
                                <div class="d-flex pt-3 " style="padding: 0px; justify-content: space-between;">
                                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                                        204</p>
                                    <p class="text-muted ">£844</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-md-12 col-sm-4 col-lg-4 mt-5">
                    <div style="border: 1px solid #ccc;" class="mt-">
                        <div class>
                            <p style="width: 3px; height: 50px; background-color: orange;" class="mt-4"></p>
                            <div>

                            </div>
                        </div>
                        <p style="margin-top: -80px; margin-left: 20px;" class="text-black fw-bold text-capitalize">
                            product</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">

                        <p style="margin-top: 13px; margin-left: 20px;" class="academics text-capitalize">desing</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">

                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">photography
                        </p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">technology
                        </p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">web desing
                        </p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <p style="margin-top: 20px; margin-left: 20px;" class="academics text-capitalize">web
                            development</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">

                    </div>
                    <div style="border: 1px solid #ccc;" class="mt-4">
                        <div class>
                            <p style="width: 3px; height: 50px; background-color: orange;" class="mt-4"></p>
                            <div>

                            </div>
                        </div>
                        <p style="margin-top: -80px; margin-left: 20px;" class="text-black fw-bold text-capitalize">
                            product</p>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <div class="d-flex">
                            <div><img src="{{url('frontend/imges/chupa ustam.jpg')}}" class="camal" alt=""></div>
                            <div>
                                <p style="margin-top: 13px; margin-left: 20px;" class="academics text-capitalize">
                                    Introduction Web Design with HTML</p>
                                <p class="mlml">$17.88</p>
                            </div>
                        </div>
                        <hr style="margin-left: 20px; margin-right: 20px;">

                        <div class="d-flex">
                            <div><img src="{{url('frontend/imges/computer-thipying.jpg')}}" class="camal" alt=""></div>
                            <div>
                                <p style="margin-top: 13px; margin-left: 20px;" class="academics text-capitalize">
                                    Special Education Needs Teaching</p>
                                <p class="mlml">$59.99</p>
                            </div>
                        </div>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <div class="d-flex">
                            <div><img src="{{url('frontend/imges/codding.jpg')}}" class="camal" alt=""></div>
                            <div>
                                <p style="margin-top: 13px; margin-left: 20px;" class="academics text-capitalize">
                                    Environmental Science BTEC Course
                                </p>
                                <p class="mlml">$74.99</p>
                            </div>
                        </div>
                        <hr style="margin-left: 20px; margin-right: 20px;">
                        <div class="d-flex">
                            <div><img src="{{url('frontend/imges/corses online.jpg')}}" class="camal" alt=""></div>
                            <div>
                                <p style="margin-top: 13px; margin-left: 20px;" class="academics text-capitalize">
                                    Distance Learning MBA Management
                                </p>
                                <p class="mlml">$244</p>
                            </div>
                        </div>
                        <hr style="margin-left: 20px; margin-right: 20px;">


                    </div>
                    <div style="border: 1px solid #ccc;" class="mt-5">

                        <img width="100%" class="p-3" src="{{url('frontend/imges/corses online.jpg')}}" alt>
                    </div>
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
