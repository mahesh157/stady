
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../imges/images.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- css link -->
    <link rel="stylesheet" href="{{url('frontend/css/index.css')}}">
    <link rel="shortcut icon" href="{{url('frontend/images/free-logo-png.htm')}}" type="image/x-icon">
    <!-- css link -->
    <!-- animate app -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- animate app -->
    <!-- all courace3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- all courace3 -->
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous">
    <!-- bootstrap link -->
    <!-- font size -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font size -->

  </head>
  <body>
    <!-- nav top -->

    <div style="position: fixed; width: 100%;z-index: 2;">
      <div class="poliam">
        <nav class="navbar navbar-expand-lg p-0  " style="z-index: 10 !important;">
          <div class="container-fluid">
            <a class=" text-white text-decoration-none king" href="#"><i
                class="fa-solid fa-phone"></i>+05549567895</a>
            <a href class=" dipla text-decoration-none text-white"><i
                class="fa-solid fa-envelope px-2"></i>email@mycourse.com</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
                  </a> </li>
                <li class="nav-item-2"></li>
              </ul>
            </div>
          </div>
          <div class="d-none-media-responsive d-md-none d-lg-block  d-flex">
            <div class="d-flex"> <p class="glasl w-100 p-4 "> <i
                  class="fa-solid fa-magnifying-glass"></i></p>
              <p class="glasl w-100 p-4 mx-1"> <i
                  class="fa-solid fa-cart-shopping"></i></p></div>
          </div>
        </nav>

      </div>

      <!-- nav top -->
      <!-- navbar toggle -->
      <div style="z-index: 2;">
        <nav class="navbar navbar-expand-lg  camp w-100 shadow">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="cemplkl" src="{{url('frontend/imges/llllll.svg')}}" alt="">
            <img class="d-lg-none barish" src="{{url('frontend/imges/monu.svg')}}" alt="">
            </a>
            <button class="navbar-toggler bg-white" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li><div class="divakar d-lg-none">
                    <input type="text" class="input-nav"><i
                      class="fa-sharp fa-solid fa-magnifying-glass p-1"></i>
                  </div></li>
                <li><div class="w-100 text-black  d-lg-none">
                    <i class="fa-solid fa-cart-shopping text-black"></i> cart
                  </div></li>
                <li class="nav-item mokal">
                  <a
                    class="nav-link active manu text-lg-none-white text-uppercase"
                    aria-current="page" href="{{ route('frontend.home') }}">Home</a>
                </li>
                <li class="nav-item mokal">
                  <div class="dropdown" style="margin-top: 8px;">
                    <a class="dropbtn   text-decoration-none  text-uppercase manu" href="{{ route('frontend.about') }}">page <i
                        class="fa-sharp fa-solid fa-chevron-down  drop-5"></i></a>
                    <div class="dropdown-content">
                      <a href="#" class="text-capitalaze fw-bold"
                        style="font-size: 14px;">about us</a>
                      <hr style="margin: 10px;">
                      <a href="#" class="text-capitalaze fw-bold "
                        style="font-size: 14px;">princing packages</a>
                      <hr style="margin: 10px;">
                      <a href="#" class="text-capitalaze fw-bold"
                        style="font-size: 14px;">portfolio</a>
                      <hr style="margin: 10px;">

                      <div class="dropdown-1 text-capitalaze fw-bold"
                        style="font-size: 14px;">
                        <a class="dropbtn-1">portfolio single <i
                            class="fa-sharp fa-solid fa-angle-right"
                            style="margin-left: 20px;"></i></a>
                        <div
                          class="dropdown-content-1 animate__animated animate__backInUp">
                          <a href class="fw-bold text-capitalaze"
                            style="font-size: 14px;">submenu lavel1</a>
                          <hr style="margin-left: 10px;">
                          <a href class="fw-bold text-capitalaze"
                            style="font-size: 14px;">submenu lavel2</a>
                          <hr style="margin-left: 10px;">
                          <a href class="fw-bold text-capitalaze"
                            style="font-size: 14px;">submenu lavel3</a>
                          <hr style="margin-left: 10px;">
                        </div>
                      </div>

                      <hr style="margin: 10px;">
                      <a href="#" class="text-capitalaze fw-bold"
                        style="font-size: 14px;">teacher single</a>
                      <hr style="margin: 10px;">
                      <a href="#" class="text-capitalaze fw-bold"
                        style="font-size: 14px;">submenu lavel1</a>

                    </div>
                  </div>
                </li>

                <li class="nav-item">

                  <div class="dropdown mokal mt-2">
                    <a class="manu text-uppercase  text-decoration-none " href="{{ route('frontend.block') }}">blog
                      <i class="fa-sharp fa-solid   fa-chevron-down drop-6"></i></a>
                    <div class="dropdown-content ">

                      <div class="dropdown-3 text-capitalaze fw-bold">
                        <a class="dropbtn-3">block-list <i
                            class="fa-sharp fa-solid fa-angle-right"
                            style="margin-left: 62px;"></i></a>
                        <div
                          class="dropdown-content-3 animate__animated animate__backInUp">
                          <a href="#">blok-list-side-left</a>
                          <a href="#">blok-grid-leg-side</a>
                          <a href="#">blok-top-side-mod</a>
                        </div>
                      </div>

                      <hr style="margin: 2px;">
                      <a href="#" class="text-capitalaze fw-bold">block-grid</a>
                      <hr style="margin: 2px;">
                      <a href="#" class="text-capitalaze fw-bold">block-classic</a>
                      <hr style="margin: 2px;">
                      <a href="#" class="text-capitalaze fw-bold">post single</a>
                    </div>
                  </a>
                </li>

                <li class="nav-item mokal">
                  <a class="nav-link text-uppercase manu "
                    aria-disabled="true" href="{{ route('frontend.course') }}">course</a>
                </li>
                <li class="nav-item mokal">
                  <a class="nav-link text-uppercase manu"
                    aria-disabled="true" href="{{route('frontend.Evaint') }}">events</a>
                </li>
                <li class="nav-item mokal">
                  <a class="nav-link text-uppercase manu"
                    aria-disabled="true " href="{{ route('frontend.contact') }}">contact</a>
                </li>
              </ul>
              <div
                class="  d-md-none king-pisar d-lg-block   bg-warning p-1 rounded-pill">
                <button class="btn text-capitalize text-white"
                  style="width: max-content;"><i
                    class="fa-solid fa-users"></i> Get started</button>

              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- bootstrap link -->

    <div class="collage">
      <!-- slider  -->
      <div id="carouselExampleAutoplaying" class="carousel slide"
        data-bs-ride="carousel">
        <div class="carousel-inner" style="z-index: -50;">
          <div class="carousel-item active opacity">
            <img src="{{url('frontend/imges/SLIDER-WARK.jpg')}}" class="d-block w-100 opacity"
              alt="..."> <div class="carousel-captin d-none d-md-block">
              <div
                class="abp-colam p-4  animate__animated  animate__backInRight mahul">
                <div class="d-flex "><p
                    style="border-left: 5px solid orange; margin-left: -25px;"></p>
                  <p class=" fs-2 text-capitalize px-5">self-paced learning
                    <span class="d-block">courses online</span></p></div>
                <div><p class="text-muted fw-bold">we are long past the online
                    courseswork and training that
                    involves video lectures ,unit plans and aquizes !
                  </p></div>

                <div class="d-flex">
                  <div class="mt-4 w-100">
                    <button class="btn btn-primary text-capitalize">learn more</button>
                  </div>
                  <div
                    style="text-align: end; margin-right: -24px; margin-bottom: -24px; width: 100%;">
                    <img style="height: 100px; width: 100px;"
                      src="{{url('frontend/imges/price-1.png')}}" alt="">
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('frontend/imges/CHILD.jpg')}}" class="d-block w-100 opacity"
              alt="..."><div class="carousel-captin d-none d-md-block">
              <div
                class="abp-colam p-4  animate__animated  animate__backInRight mahul">
                <div class="d-flex"><p
                    style="border-left: 5px solid orange; margin-left: -25px;"></p>
                  <p class=" fs-2 text-capitalize px-5">credit courses<span
                      class="d-block">toward degrees</span></p></div>
                <div><p class="text-muted fw-bold">we are long past the online
                    courseswork and training that
                    involves video lectures ,unit plans and aquizes !
                  </p></div>

                <div class="d-flex">
                  <div class="mt-4 w-100">
                    <button class="btn btn-primary text-capitalize">learn more</button>
                  </div>
                  <div
                    style="text-align: end; margin-right: -24px; margin-bottom: -24px; width: 100%;">
                    <img style="height: 100px; width: 100px;"
                      src="{{url('frontend/imges/price-1.png')}}" alt>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('frontend/imges/slider-image-2.jpg')}}" class="d-block w-100 opacity"
              alt="..."><div class="carousel-captin d-none d-md-block">
              <div
                class="abp-colam p-4  animate__animated  animate__backInRight mahul">
                <div class="d-flex"><p
                    style="border-left: 5px solid orange; margin-left: -25px;"></p>
                  <p class=" fs-2 text-capitalize px-5">self-paced learning
                    <span class="d-block">courses online</span></p></div>
                <div><p class="text-muted fw-bold">we are long past the online
                    courseswork and training that
                    involves video lectures ,unit plans and aquizes !
                  </p></div>

                <div class="d-flex">
                  <div class="mt-4 w-100">
                    <button class="btn btn-primary text-capitalize">learn more</button>
                  </div>
                  <div
                    style="text-align: end; margin-right: -24px; margin-bottom: -24px; width: 100%;">
                    <img style="height: 100px; width: 100px;"
                      src="{{('frontend/imges/price-1.png')}}" alt>
                  </div>
                </div>

              </div>

            </div>

          </div>
          <div class="carousel-item">
            <img src="{{url('frontend/imges/SANAM.jpg')}}" class="d-block w-100 opacity"
              alt="..."> <div class="carousel-captin d-none d-md-block">
              <div
                class="abp-colam p-4  animate__animated  animate__backInRight mahul">
                <div class="d-flex"><p
                    style="border-left: 5px solid orange; margin-left: -25px;"></p>
                  <p class=" fs-2 text-capitalize px-5">self-paced learning
                    <span class="d-block">courses online</span></p></div>
                <div><p class="text-muted fw-bold">we are long past the online
                    courseswork and training that
                    involves video lectures ,unit plans and aquizes !
                  </p></div>

                <div class="d-flex">
                  <div class="mt-4 w-100">
                    <button class="btn btn-primary text-capitalize">learn more</button>
                  </div>
                  <div
                    style="text-align: end; margin-right: -24px; margin-bottom: -24px; width: 100%;">
                    <img style="height: 100px; width: 100px;"
                      src="{{url('frontend/imges/price-1.png')}}" alt>
                  </div>
                </div>

              </div>

            </div></div>
        </div>
        <button class="carousel-control-prev" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon back fw-bold"
            aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon  back fw-bold"
            aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- slider  -->
      <!-- online learn -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-4 col-lg-4">
            <div class="d-flex mt-5"
              style="display: flex; justify-content: space-between !important;">
              <div>
                <p class="diginin p-3 fs-2 fw-bold text-primary"><i
                    class="fa-solid fa-umbrella"></i></p>
              </div>
              <div class="w-100">
                <p class=" mx-4" style="margin-right: 0px !important;">Online
                  Learn Courses Management</p>
                <p class="mx-4">Analyzing negative materials about your brand
                  and addressing them with sentiment analysis and press.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-sm-4 col-lg-4">
            <div class="d-flex mt-5"
              style="display: flex; justify-content: space-between !important;">
              <div>
                <p class="digini p-3 fs-2 fw-bold text-warning"><i
                    class="fa-solid fa-address-card"></i></p>
              </div>
              <div class="w-100">
                <p class=" mx-4" style="margin-right: 0px !important;">Learn
                  from the masters of the field online</p>
                <p class="mx-4">Analyzing negative materials about your brand
                  and addressing them with sentiment analysis and press.</p>
              </div>
            </div>

          </div>
          <div class="col-md-12 col-sm-4 col-lg-4">
            <div class="d-flex mt-5"
              style="display: flex; justify-content: space-between !important;">
              <div>
                <p class="digin p-3 fs-2 fw-bold "><i
                    class="fa-sharp fa-solid fa-handshake"></i></p>
              </div>
              <div class="w-100">
                <p class=" mx-4" style="margin-right: 0px !important;">An
                  Introduction-Skills For Learners</p>
                <p class="mx-4">Analyzing negative materials about your brand
                  and addressing them with sentiment analysis and press.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <hr class="m-5">
      <!-- online learn -->
      <!-- Categories -->
      <div class="container ">
        <p class="text-primary">Categories</p>
        <div class="d-flex justify-content-between">
          <p class="  margin">Trending Collection</p>
          <p
            class="btn btn-outline-primary text-capitalize  rounded-pill view">veiw
            all courses</p>
        </div>
      </div>
      <!-- Categories -->
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-md-lg mt-2">
            <div class="jaimal">
              <div class="jaipur m-auto">
                <h1 class="deval">web develoment</h1>
                <h1 class="wed text-white">3 Courses</h1>
              </div>
            </div>
          </div><div class="col-md-6 col-sm-6 col-md-lg">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-lg-6 mt-2 ">
                <div class="jaimal-1">
                  <div class="jaipur-1">
                    <p class="text-center fw-bold text-white dimakaw fs-4">web
                      desing</p>
                    <p class="text-center fw-bold text-white">2 courses</p>
                  </div>
                </div>

              </div>
              <div class="col-md-6 col-sm-6 col-lg-6 mt-2">
                <div class="jaimal-4">
                  <div class="jaipur-4">
                    <p class=" dEMAL fw-bold text-center fs-5 ">photography</p>
                    <p class="text-center text-white fw-bold text-capitalize">3
                      courses</p>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-lg-6 mt-2 ">
                <div class="jaimal-6">
                  <div class="jaipur-6"> <p
                      class=" dEMAL fw-bold text-center fs-5 text-capitalize">technology</p>
                    <p class="text-center text-white fw-bold text-capitalize">4
                      courses</p></div>
                </div>

              </div>
              <div class="col-md-6 col-sm-6 col-lg-6 mt-2 ">
                <div class="jaimal-7">
                  <div class="jaipur-7"><p
                      class=" dEMAL fw-bold text-center fs-5 text-capitalize">desing</p>
                    <p class="text-center text-white fw-bold text-capitalize">4
                      courses</p></div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Limited Time -->
      <div style="background-color: aliceblue; width: 100%;" class="mt-5 p-5">

        <div>
          <h4 class="text-center">Limited Time: Get My Book For Free!<h4>
              <p class="text-center text-muted" style="font-size: 14px;">Learn
                anytime, anywhere. Best Courses. Top Instituion.</p>
              <p class="text-center text-muted" style="font-size: 14px;">We offer
                professional SEO services that help websites increase their
                organic search score drastically in order to <span class="d-block">compete
                  for the highest rankings.</span></p>

              <div class="text-center">
                <button class="text-capitalize btn  btn-warning  text-white mt-3">get
                  my free book</button>
              </div>
            </div>

          </div>
          <!-- Limited Time -->
          <!-- Categories -->
          <div class="container mt-5">
            <p class="text-primary text-capitalize">education</p>
            <div class="d-flex justify-content-between">
              <p class="  margin text-capitalize">popular courses</p>
              <p
                class="btn btn-outline-primary text-capitalize  rounded-pill view">veiw
                all courses</p>
            </div>
          </div>
          <!-- Categories -->
          <!-- card 4 -->
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-3 col-lg-3 mt-5">
                <div><img class="jogi-1" src="{{url('frontend/imges/tulsaji.jpg')}}" alt></div>
                <div style="border: 1px solid #ccc; padding: 25px;">
                  <p class="text-capitalize meri">introduction web desing with
                    html</p>
                  <div class="d-flex">
                    <p class="btn btn-success " id="monu-2"
                      style="font-size: 10px; height: fit-content;">5.00</p>
                    <p class="text-muted"> 1Votes</p>
                    <p
                      style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;"></p>
                    <p class="mx-2 text-primary ">push sharma</p>

                  </div>

                </div>
                <div style=" border: 1px solid #ccc;">
                  <div class="d-flex  pt-3" style="padding: 10px; justify-content: space-between;">
                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                      64</p>
                    <p class="text-muted ">£244</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-3 col-lg-3 mt-5">
                <div><img class="jogi-1" src="{{url('frontend/imges/computer.jpg')}}" alt></div>
                <div style="border: 1px solid #ccc; padding: 25px;">
                  <p class="text-capitalize meri">special education needs teaching</p>
                  <div class="d-flex">
                    <p class="btn btn-success"
                      style="font-size: 10px; height: fit-content; ">5.50</p>
                    <p class="text-muted"> 2Votes</p>
                    <p
                      style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;"></p>
                    <p class="mx-2 text-primary ">shop sharma</p>

                  </div>

                </div>
                <div style=" border: 1px solid #ccc;">
                  <div class="d-flex pt-3" style="padding: 10px; justify-content: space-between;">
                    <p class=" text-muted"><i class="fa-solid fa-users"></i>
                      13
                      5</p>
                    <p class="text-muted  ">£444</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-3 col-lg-3 mt-5">
                <div><img class="jogi-1" src="{{url('frontend/imges/kkkk.jpg')}}" alt></div>
                <div style="border: 1px solid #ccc; padding: 25px;">
                  <p class="text-capitalize meri">invironments science
                    btec course
                  </p>
                  <div class="d-flex">
                    <p class="btn btn-success"
                      style="font-size: 10px; margin-right: 5px; height: fit-content;">55.0</p>
                    <p class="text-muted"> 3Votes</p>
                    <p
                      style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;"></p>
                    <p class="mx-2 text-primary ">dev sharma</p>

                  </div>

                </div>
                <div style=" border: 1px solid #ccc;">
                  <div class="d-flex p-2" style=" padding: 10px;justify-content: space-between;">
                    <p class=" text-muted pt-2"><i class="fa-solid fa-users"></i>
                      150</p>
                    <p class="text-muted  ">£6.24</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-3 col-lg-3 mt-5">
                <div><img class="jogi-1" src="{{url('frontend/imges/mmm.jpg')}}" alt></div>
                <div style="border: 1px solid #ccc; padding: 25px;">
                  <p class="text-capitalize meri ">distance learning mba </p>
                  <div class="d-flex">
                    <p class="btn btn-success text-capitalize"
                      style="font-size: 14px;margin-right: 0px; height: fit-content;">no1votes
                    </p>

                    <p
                      style="border-right:1px solid #ccc ; margin-top: 5px; margin-bottom: 22px ;margin-left: 5px;"></p>
                    <p class="mx-2 text-primary ">pill sharma</p>

                  </div>

                </div>
                <div style=" border: 1px solid #ccc;">
                  <div class="d-flex p-2" style="padding: 10px; justify-content: space-between;">
                    <p class="pt-2 text-muted"><i class="fa-solid fa-users"></i>
                      204</p>
                    <p class="text-muted ">£844</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- card-4 -->
          <!-- Upcoming Events -->
          <div style="width: 100%; background-color: aliceblue;">
            <div class="container mt-5">
              <div class="row">
                <div class="col-md-12 col-lg-7 col-sm-7">
                  <p class="pt-5 text-primary">Events</p>
                  <h3>Upcoming Events</h3>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 mt-2  bg-white"
                      style="border: 1px solid #ccc; border-radius: 10px;">

                      <div class="d-flex w-100  padding">
                        <div style="border: 5px solid orange;" class="tiranga">
                          <h5 class="text-center p-23 fw-bold">28 <span
                              style="display: block;">oct</span></h5>

                          <h1 id="monu"></h1>
                          <h1 id="sonu"></h1>

                        </div>

                        <div>
                          <div class="d-flex">
                            <p
                              class="text-muted fw-bold maging-5"> <i
                                class="fa-regular fa-clock  text-warning"
                                style="margin-right: 10px;"></i>6:00 am - 12:00 pm</p>
                            <p style="margin-left: 15px;"
                              class="text-muted fw-bold"><i
                                class="fa-solid fa-location-dot text-warning"
                                style="margin-right: 10px;"></i>New York , US of
                              America</p>
                          </div>
                          <div class="w-100"><p class="text-capitalize pilo"
                              style="margin-left: 20px; font-size: 20px;">summer
                              high school journalism camp <span class="d-block">registration
                                form</span></p></div>
                        </div>

                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12  mt-2 bg-white"
                      style="border: 1px solid #ccc; border-radius: 10px;">

                      <div class="d-flex w-100  padding">
                        <div style="border: 5px solid orange;" class="tiranga">
                          <h5 class="text-center p-23 fw-bold">25 <span
                              style="display: block;" class="text-capitalize">march</span></h5>

                          <h1 id="monu"></h1>
                          <h1 id="sonu"></h1>

                        </div>

                        <div>
                          <div class="d-flex">
                            <p class="text-muted fw-bold maging-5"> <i
                                class="fa-regular fa-clock  text-warning"
                                style="margin-right: 10px;"></i>2:00 am - 5:00 am</p>
                            <p style="margin-left: 15px;"
                              class="text-muted fw-bold"><i
                                class="fa-solid  fa-location-dot text-warning"
                                style="margin-right: 10px;"></i>New York , US of
                              America</p>
                          </div>
                          <div class="w-100"><p class="text-capitalize pilo"
                              style="margin-left: 20px; font-size: 20px;">summer
                              high school journalism camp <span class="d-block">registration
                                form</span></p></div>
                        </div>

                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 mt-2  bg-white"
                      style="border: 1px solid #ccc; border-radius: 10px;">

                      <div class="d-flex w-100  padding">
                        <div style="border: 5px solid orange;" class="tiranga">
                          <h5 class="text-center p-23 fw-bold">14 <span
                              style="display: block;" class="text-capitalize">apail</span></h5>

                          <h1 id="monu"></h1>
                          <h1 id="sonu"></h1>

                        </div>

                        <div>
                          <div class="d-flex">
                            <p
                              class="text-muted fw-bold maging-5"> <i
                                class="fa-regular fa-clock  text-warning"
                                style="margin-right: 10px;"></i>2:00 am - 8:00 am</p>
                            <p style="margin-left: 15px;"
                              class="text-muted fw-bold"><i
                                class="fa-solid fa-location-dot text-warning"
                                style="margin-right: 10px;"></i>New York , US of
                              America</p>
                          </div>
                          <div class="w-100"><p class="text-capitalize pilo"
                              style="margin-left: 20px; font-size: 20px;">summer
                              high school journalism camp <span class="d-block">registration
                                form</span></p></div>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-md-12 col-lg-5 col-sm-4 mt-2">
                  <p class="pt-5 text-primary">Watch Video</p>
                  <h3>Learn Anywhere</h3>
                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="vidio-tag">
                        <div class="center"><p class="peple"
                            style="border: 2px solid white;
  width: 50px; height: 50px;  padding: 0px; border-radius: 50%; text-align: center; "><i
                              class="fa-solid fa-play text-white"
                              style="margin-top: 15px;"></i></p></div>
                      </div><div id="Marketing"><h5>Marketing, Media and
                          Advertising</h5></div>
                      <div id="Marketing-semple"><p>About Studioare</p></div>
                      <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 mt-2"><div
                            class="vidio-tag-2">
                            <div class="center-3"><p class="peple"
                                style="border: 2px solid white;
      width: 50px; height: 50px;  padding: 0px; border-radius: 50%; text-align: center; "><i
                                  class="fa-solid fa-play text-white"
                                  style="margin-top: 15px;"></i></p></div>
                          </div>
                          <div id="Marketing-semple"><p>Limitless learning</p></div></div>

                        <div class="col-md-6 col-lg-6 col-sm-6 mt-2"><div
                            class="vidio-tag-3 mb-5">
                            <div class="center-2"><p class="peple"
                                style="border: 2px solid white;
        width: 50px; height: 50px;  padding: 0px; border-radius: 50%; text-align: center; "><i
                                  class="fa-solid fa-play text-white"
                                  style="margin-top: 15px;"></i></p></div>
                          </div>
                          <div id="Marketing-semple"><p>Learn by Doing</p></div></div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="container">

            </div>
          </div>
          <!-- Latest News -->
          <div class="container mt-5 ">
            <p class="text-primary">Blog</p>
            <div class="d-flex justify-content-between">
              <p class="  margin">Latest News</p>
              <p
                class="btn btn-outline-primary  text-capitalize  rounded-pill view">veiw
                all posts</p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-6 mt-2 col-sm-3 col-lg-3">
              <div>
                <div><img src="{{url('frontend/imges/loyare.jpg')}}" width="100%"
                    style="border-top-left-radius: 5px; border-top-right-radius:5px;"
                    alt></div>

                <div class="p-3" style="border: 1px solid #ccc;">
                  <div>
                    <a href=""
                      class="text-capitalize text-decoration-none text-muted business">acadmics</a>
                  </div>
                  <div>
                    <h6><p class="wonderful">couple of happy college students
                        gradoated</p></h6>
                  </div>
                  <div>
                    <p> <i class="fa-regular fa-clock  text-warning"
                        style="margin-right: 10px;"></i>June 13, 2018</p>
                  </div>

                </div>

              </div>

            </div>
            <div class="col-md-6 mt-2 col-sm-3 col-lg-3">
              <div>
                <div><img src="{{url('frontend/imges/computer-thipying.jpg')}}" width="100%"
                    style="border-top-left-radius: 5px; border-top-right-radius:5px;"
                    alt></div>

                <div class="p-3" style="border: 1px solid #ccc;">
                  <div>
                    <a href=""
                      class="text-capitalize text-decoration-none text-muted business">govtrnment</a>
                  </div>
                  <div>
                    <h6> <p class="wonderful text-capitalize">thips to developing
                        quility <span class="d-md-block">discussion</span></p></h6>
                  </div>
                  <div>
                    <p> <i class="fa-regular fa-clock  text-warning"
                        style="margin-right: 10px;"></i>June 13, 2018</p>
                  </div>

                </div>

              </div>

            </div>
            <div class="col-md-6 mt-2 col-sm-3 col-lg-3">
              <div>
                <div><img src="{{url('frontend/imges/student-power.jpg')}}"
                    style="border-top-left-radius: 5px; border-top-right-radius:5px;"
                    width="100%" alt></div>

                <div class="p-3" style="border: 1px solid #ccc;">
                  <div>
                    <a href=""
                      class="text-capitalize text-decoration-none text-muted business">desing</a>
                  </div>
                  <div>
                    <h6> <p class="wonderful text-capitalize">reflections for the
                        season of <span class="d-md-block">advance</span></p></h6>
                  </div>
                  <div>
                    <p> <i class="fa-regular fa-clock  text-warning"
                        style="margin-right: 10px;"></i>June 13, 2018</p>
                  </div>

                </div>

              </div>

            </div>
            <div class="col-md-6 mt-2 col-sm-3 col-lg-3">
              <div>
                <div><img src="{{url('frontend/imges/codding.jpg')}}"
                    style="border-top-left-radius: 5px; border-top-right-radius:5px;"
                    width="100%" alt></div>
                <div class="p-3" style="border: 1px solid #ccc;">
                  <div>
                    <a href
                      class="text-capitalize text-decoration-none text-muted business">business</a>
                  </div>
                  <div>
                    <h6> <p class="text-capitalize wonderful">it's wonderful to
                        see the friendships that devolop</p></h6>
                  </div>
                  <div>
                    <p> <i class="fa-regular fa-clock  text-warning"
                        style="margin-right: 10px;"></i>June 13, 2018</p>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
        <!--Latest News -->
    </div>


    </div> </div>

<div style="background-color: aliceblue; width: 100%;" class="p-5 mt-5">
<div class="container">
  <div class="owl-carousel owl-theme">
    <div class="item"><div class="catainer">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-lg-8">

          <h6 class="w-100 text-muted text-cenxcter pt-5">
            “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”
          </h6>

        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
<div class="row">
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
    <div style="border: 5px solid #ccc; border-radius: 10%;">
      <img  class="width" src="{{url('frontend/imges/vivie.jpg')}}" alt="">
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
    <h5 class="text-muted">
      Nicole Alatorre
      Designer
      </h5>
  </div>
</div>

        </div>
      </div>
    </div></div>
    <div class="item"><div class="catainer">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-lg-8">

          <h6 class="w-100 text-muted text-cenxcter pt-5">
            “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”
          </h6>

        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
<div class="row">
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
    <div style="border: 5px solid #ccc; border-radius: 10%;">
      <img  class="width" src="{{url('frontend/imges/densan.jpg')}}" alt="">
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
    <h5 class="text-muted">
      Nicole Alatorre
      Designer
      </h5>
  </div>
</div>

        </div>
      </div>
    </div></div>
    <div class="item"><div class="catainer">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-lg-8">

          <h6 class="w-100 text-muted text-cenxcter pt-5">
            “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”
          </h6>

        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
<div class="row">
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
    <div style="border: 5px solid #ccc; border-radius: 10%;">
      <img  class="width" src="{{url('frontend/imges/chupa ustam.jpg')}}" alt="">
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
    <h5 class="text-muted">
      Nicole Alatorre
      Designer
      </h5>
  </div>
</div>

        </div>
      </div>
    </div></div>
    <div class="item"><div class="catainer">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-lg-8">

          <h6 class="w-100 text-muted text-cenxcter pt-5">
            “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”
          </h6>

        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
<div class="row">
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5 pt-sm-2">
    <div style="border: 5px solid #ccc; border-radius: 10%;">
      <img  class="width" src="{{url('frontend/imges/]copy.jpg')}}" alt="">
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
    <h5 class="text-muted">
      Nicole Alatorre
      Designer
      </h5>
  </div>
</div>

        </div>
      </div>
    </div></div>

</div>

</div>
</div>
</div></div>
    <!-- all courace3 -->
    <!--  footer-->

<div style="background-color: #2e3e77;" class="mt-5">

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-lg-4 pt-5">
  <div ><img src="{{url('frontend/imges/llllll.svg')}}"  alt=""></div>
  <div><p class="pt-3"  style="color: #ccc;">We named our theme Studiare because to us,
    the best brands are simple ones. Brands thrive
    on their ability to be understood.</p></div>
    <p class="" style="color: #ccc;"><i class="fa-solid fa-location-dot"></i> 127 Elizabeth Street, NY New York</p>
    <p style="color: #ccc;">
      <i class="fa-solid fa-mobile"></i>   +55-11-3097-0508</p>
      </div>
      <div class="col-md-2 col-sm-2 col-lg-2 pt-5">
        <div ><p style="color: #ccc; font-size: 20px;">Quick Links</p></div>
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
                      <div><p style="color: #ccc; font-size: 20px;">Newsletter</p></div>
                     <p style="color: #ccc; font-size: 17px;">Dont miss anything, sign up now and keep informed about our company.</p>
                     <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Enter to Email passward" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span class="btn bg-warning text-black fw-bold" >search</span>
                    </div>
                    </div>

                           </div>
    </div>
  </div>
  <hr class="text-white mx-5">
  <div class="container pb-2 d-lg-flex justify-content-between">
      <p class="text-white pt-3">© 2019 Studiare. Created by CodeBean Team.</p>


  <div class="d-flex pt-3 delet-hover">
      <p class="font-1 mx-2 text-center text-white fw-bold">f</p>
      <p class="font-2 mx-2"><i class="fa-brands fa-linkedin mx-2"></i></p>
      <p class="font-3 mx-2 text-center"><i class="fa-brands fa-youtube px-1" style="padding-top: 8px; padding-left: 10px;" ></i></p>
      <p class="font-4 mx-2"><i class="fa-brands fa-wordpress" style="padding-left: 7px; padding-top: 7px;"></i></p>
  </div>
  </div>


</div>

<!--  footer-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })</script>
        <!-- all courace3 -->

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
      <!-- bootstrap link -->
    </body>
  </html>

