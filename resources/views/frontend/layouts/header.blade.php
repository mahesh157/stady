<div style="position: fixed; width: 100%; z-index: 5;">
    <div>
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

    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ url('frontend/imges/llllll.svg') }}" alt>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown mt-2">
                            <a class="drop text-capitalize text-decoration-none  text-black"
                                href="{{ route('frontend.about') }}">page <i class="fa-solid fa-caret-down mx-2"></i></a>
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
                            <p class="dropbtn">Block <i class="fa-solid fa-caret-down mx-2"></i></p>
                            <div class="dropdown-content">
                                <a href="#">Block-list</a>
                                <hr>
                                <a href="#">Block-grid</a>
                                <hr>
                                <a href="#">Block-classic</a>
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
                        <a class="nav-link text-black" aria-disabled="true" href="{{route('frontend.Evaint') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-disabled="true" href="{{ route('frontend.contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="king-pisar d-lg-block   bg-warning p-1 rounded-pill">
                    <button id class="btn text-capitalize text-white" style="width: max-content;"><i
                            class="fa-solid fa-users"></i> Get started</button>

                </div>
            </div>
        </div>
    </nav>
