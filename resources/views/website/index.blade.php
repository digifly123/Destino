@extends('website.layouts.master')
@section('css')
@endsection
@section('content')
    <div class="container-fluid header">
        <div class="containery">
            <!-- navbar  -->
            <header>
                @include('website.layouts.includes.topbar')
                <!-- hero section  -->
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-4 pt-4">
                    <h1 class="fw-bold mb-3 text-capitalize">
                        Destino enjoy a full service online travel
                    </h1>
                    <p class="text-secondary mb-3">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi
                        enim,possimus inventore vel? asperiores soluta nobis.
                    </p>
                    <div class="search-form shadow position-relative radius-15  ">
                        <input type="text" placeholder="search your location"
                            class="border-0 pe-3 pt-4 pb-4 w-100 radius-15 ">
                        <i class="fa-solid fa-magnifying-glass position-absolute fs-8 text-xs secandry-light"
                            style="left: 15px; bottom:27px "></i>
                        <button class="btn position-absolute Explore-btn p-3 fs-8 "> <a href="#" class="text-light ">
                                Explore now</a></button>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class="containery">
        <section>
            <div class="col-12 col-md-6 col-lg-4  mt-5 ">
                <h1 class="fw-bold mb-3  text-capitalize">
                    discover our <br /> services.
                </h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi
                    enim,possimus inventore vel? asperiores soluta nobis.
                </p>
            </div>
        </section>
        <section>
            <div class="swiper mySwiper swiper-card">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="" class="basic">
                            <div class="card d-flex justify-content-center align-items-center text-center shadow">
                                <img src="images/plane.png" alt="" class=" pb-3">
                                <h3 class="fw-bolder fs-6 ">foriegn tourism</h3>
                                <p class="fs-7  m-0 p-0">Built Wicket longer admire do barton vanity itself do in it. </p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="basic">
                            <div class="card d-flex justify-content-center align-items-center text-center shadow">
                                <img src="images/ticket.png" alt="" class=" pb-3">
                                <h3 class="fw-bold fs-6  text-capitalize">Domestic tourism</h3>
                                <p class="fs-7  m-0 p-0">Engrossed listening. Park gate sell they west hard for the.</p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="basic">
                            <div class="card d-flex justify-content-center align-items-center text-center shadow">
                                <img src="images/kaaba.png" alt="" class=" pb-3">
                                <h3 class="fw-bold fs-6  text-capitalize">Hajj and Umrah</h3>
                                <p class="fs-7  m-0 p-0">Barton vanity itself do in it. Preferd to men it engrossed
                                    listening. </p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="basic">
                            <div class="card d-flex justify-content-center align-items-center text-center shadow">
                                <img src="images/pass.png" alt="" class=" pb-1 mb-2">
                                <h3 class="fw-bold fs-6  text-capitalize">visa</h3>
                                <p class="fs-7 m-0 p-0">We deliver outsourced
                                    aviation services for
                                    military customers </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <div class="row mb-5 mt-5 ">
            <div class="swiper mySwiper ballon radius-20">
                <div class="swiper-wrapper radius-20 ">
                    <div class="swiper-slide ">
                        <img src="images/ballon.png" alt="" class="w-100 radius-20 ">
                        <div class="col-12 col-lg-6 col-xl-4 p-5 mt-3 position-absolute top-0 ">
                            <h1 class="fw-bold mb-3  text-capitalize">enjoy a ballon online travel. </h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic optio accusantium debitis, sed
                                nihil
                                eaque cupiditate consetem dignissimos nihil.</p>
                            <button class="btn">Book Now</button>
                            <button class="btn btn-more">Learn More</button>
                        </div>

                    </div>
                    <div class="swiper-slide ">
                        <img src="images/ballon.png" alt="" class="w-100 radius-20 ">
                        <div class="col-12 col-lg-6 col-xl-4 p-5 mt-3 position-absolute top-0 ">
                            <h1 class="fw-bold mb-3  text-capitalize">enjoy a ballon online travel. </h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic optio accusantium debitis, sed
                                nihil
                                eaque cupiditate consetem dignissimos nihil.</p>
                            <button class="btn">Book Now</button>
                            <button class="btn btn-more">Learn More</button>
                        </div>

                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class=" mt-5 ">
            <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active gray fs-6 " id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Foreign tourism</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link gray fs-6" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Domestic tourism</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link gray fs-6" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Hajj and Umrah</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link gray fs-6" id="pills-product-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-product" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">coming to Egypt</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="row mb-6">
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">

                    <div class="row">
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">

                    <div class="row mb-5">
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab"
                    tabindex="0">

                    <div class="row mb-5">
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-20  mb-4">
                            <div class="card-product radius-20 shadow position-relative p-3">
                                <div class="position-absolute icon-product mt-2 ms-2">
                                    <i class="fa-solid fa-plane-up"></i>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <img src="images/Mask Group 4.png" alt="">
                                <div class="d-flex justify-content-between align-items-baseline pt-3">
                                    <h2 class="fs-5 fw-600 "><a href="#" class="text-dark"> New york</a></h2>
                                    <p class="fs-8 secandry-light"><i class="fa-solid fa-location-arrow color-i"></i>
                                        Approx 2 night
                                        trip</p>
                                </div>
                                <p class="secandry-light fs-8">Singapore, officially the Republic of Singapore, is a
                                    sovereign island
                                    city-state .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="fw-600 color-title m-0">$420 <span
                                                class="secandry-light fs-6 fw-500">$450</span></h3>
                                        <p class="secandry-light fs-9 m-0">available for 5 persons</p>
                                    </div>
                                    <button class="btn  text-capitalize fs-8 radius-10 ">Book now</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="row mb-5 mt-4 position-relative  offers">
            <div class="col-12 col-xl-4">
                <div class="col-12 col-xl-8 ">
                    <h4 class="fw-600 yellow mb-3">Easy and Fast pink tourism</h4>
                    <h1 class="fw-bold mb-3  text-capitalize">
                        Book a trip with your friends
                        in 3 easy steps
                    </h1>
                </div>

                <div class="d-flex justify-content-center align-items-start mt-4">
                    <i class="fa-solid fa-location-arrow fs-5 bg-yellow yellow p-3 radius-10"></i>
                    <div class="justify-content-center ms-4 flex-column d-flex">
                        <h6 class="fw-bolder">Choose Destination</h6>
                        <p class="light fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit., consectetur
                            adipiscing elit.
                            Urna, tortor tempus. </p>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-start mt-4">
                    <i class="fa-regular fa-credit-card fs-5 bg-yellow yellow p-3 radius-10"></i>
                    <div class="justify-content-center ms-4 flex-column d-flex">
                        <h6 class="fw-bolder">Make Payment</h6>
                        <p class="light fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit., consectetur
                            adipiscing elit.
                            Urna, tortor tempus. </p>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-start mt-4">
                    <i class="fa-solid fa-plane-departure fs-5 bg-yellow yellow p-3 radius-10"></i>
                    <div class="justify-content-center ms-4 flex-column d-flex">
                        <h6 class="fw-bolder">Reach Airport on Selected Date</h6>
                        <p class="light fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit., consectetur
                            adipiscing elit.
                            Urna, tortor tempus. </p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-8 offset-xl-2 col-xl-4">
                <div class="card shadow position-relative">
                    <img src="{{ asset('images/girl.png') }}" class="p-2 radius-20" alt="">
                    <p class="text-dark fs-5 p-2 mt-2 mb-0 fw-600">Trip To Greece</p>
                    <p class="ps-2 text-secondary">14-29 June | by Robbin joseph </p>
                    <div class="icons col-md-5 col-12 d-flex justify-content-around">
                        <i class="fa-solid fa-leaf gray bg-gray p-3 rounded-circle"></i>
                        <i class="fa-solid fa-map gray bg-gray p-3 rounded-circle"></i>
                        <i class="fa-solid fa-location-arrow gray bg-gray p-3 rounded-circle"></i>
                    </div>
                    <div class="d-flex pt-3 justify-content-between align-items-center">
                        <div class="align-items-center d-flex">
                            <img src=" {{ asset('images/building 1.svg') }} " alt="" style="width: 16px;">
                            <p class="p-2 m-0"> 24 people going</p>
                        </div>
                        <i class="fa-solid fa-heart fs-5 color-i"></i>
                    </div>
                </div>
            </div>
            <div class="card shadow position-absolute little" style="right:4%; bottom: 17%; width: 20rem;">
                <div class="d-flex">
                    <img src="images/mosque.png" alt="" style="height:50px">
                    <div class="align-items-center ms-2">
                        <p class="m-0 purble-light">Ongoing</p>
                        <p class="fw-600 ">Trip to rome</p>
                    </div>
                </div>
                <p class="m-0"> <span class="purble">40%</span> complete </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </section>
        <section class="row mb-5 new-service">
            <h1 class="fw-bold mb-3 mt-5 text-capitalize text-center">discover our new services.</h1>
            <p class="text-center mb-3">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi
                enim,possimus inventore vel? asperiores soluta nobis.
            </p>
            <div class="col-12 col-lg-6 position-relative mb-4 d-service">
                <img src="images/man.png" alt="" class=" w-100 radius-20">
                <div class="col-12  p-5 position-absolute radius-20 top-0 back-blur bottom-0  ">
                    <h1 class="fw-bold m-0 text-capitalize text-light">disables travel. </h1>
                    <p>Lorem ipsum dolor, sit amet concing cupiditateihil.</p>
                    <button class="btn">Book Now</button>
                    <button class="btn btn-more">Learn More</button>
                </div>
            </div>
            <div class="col-12 col-lg-6 position-relative mb-4 d-service">
                <img src="images/nouba.png" alt="" class=" w-100 radius-20">
                <div class="col-12  p-5 position-absolute radius-20 top-0 back-blur bottom-0">
                    <h1 class="fw-bold m-0 text-capitalize text-light">Nuba travel.</h1>
                    <p>Lorem ipsum dolor, sit amet concing cupiditateihil.</p>
                    <button class="btn">Book Now</button>
                    <button class="btn btn-more">Learn More</button>
                </div>
            </div>
        </section>

        <!-- --------reviews------------ -->
        <section class=" row mt-5 radius-20" style="background-color: #F7F9FF; ">
            <div class="col-12 col-xl-4 p-5">
                <div class="img d-flex justify-content-between">
                    <img src="images/pexels-3586798.png" class="rounded-circle" alt="" style="height: 5rem;">
                    <img src="images/pexels-3586798.png" class="rounded-circle" alt="" style="height: 3rem;">

                </div>
                <h1 class="fw-600  fs-0 m-0 text-capitalize align-items-center mt-5">What people say about Us.</h1>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus. </p>
            </div>
            <div class="col-12 offset-xl-3 p-5 col-xl-5 d-flex align-items-center  ">
                <div class="swiper mySwiper swiper-review d-flex justify-content-center align-items-center p-3">
                    <div class="swiper-wrapper">

                        <div class="card-review card radius-20 shadow  swiper-slide p-4 mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="images/pexels-3586798.png" class="rounded-circle" alt=""
                                        style="height: 3.5rem;">
                                    <div class="ms-3">
                                        <h6 class="m-0 fs-7">Mike taylor</h6>
                                        <p class="fs-8 m-0">Lahore, Pakistan</p>
                                    </div>
                                </div>

                            </div>
                            <p class="fs-8 mt-2 mb-0">On the Windows talking painted pasture yet its express parties use.
                                Sure last
                                upon he same as knew next. Of believed or diverted no.
                                “On the Windows talking painted p Sure last upon he same as knew next.”</p>
                        </div>
                        <div class="card-review card radius-20 shadow  swiper-slide p-4 mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="images/pexels-3586798.png" class="rounded-circle" alt=""
                                        style="height: 3.5rem;">
                                    <div class="ms-3">
                                        <h6 class="m-0 fs-7">Mike taylor</h6>
                                        <p class="fs-8 m-0">Lahore, Pakistan</p>
                                    </div>
                                </div>

                            </div>
                            <p class="fs-8 mt-2 mb-0">On the Windows talking painted pasture yet its express parties use.
                                Sure last
                                upon he same as knew next. Of believed or diverted no.
                                “On the Windows talking painted p Sure last upon he same as knew next.”</p>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>


        <!-- --------reviews------------ -->

        <!-- --------sponser------------ -->
        <div class=" row mt-5">
            <h1 class="fw-600 m-0 text-capitalize align-items-center mt-5  text-center"> <span class="blue">+200</span>
                Company
                Trusted US</h1>
            <p class="text-center mb-4">Lorem, ipsum dolor rum dolorum prora consequatur ullam ratione vel recusandae
                dignissimos
                mollitia, maxime repellat voluptas?</p>
            <div class="swiper mySwiper sponser  mb-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/axon.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/gf.png" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="images/ggg.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/ggg.png" alt="">
                    </div>
                </div>
                <div class="swiper-pagination bottom-0"></div>
            </div>
        </div>
        <!-- --------sponser------------ -->
    </div>
@endsection
@section('js')
    <script>
        var swiper = new Swiper(".swiper-card", {
            loop: true,
            freeMode: true,
            spaceBetween: 0,
            //
            slidesPerView: 7,
            touchEventsTarget: 'container',
            loop: true,
            loopFillGroupWithBlank: true,
            loop: true,
            freeMode: true,
            speed: 5000,
            freeModeMomentum: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                750: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1424: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },
            },

        });
        var bswiper = new Swiper(".ballon", {
            loop: true,
            freeMode: true,
            spaceBetween: 20,
            slidesPerView: 7,
            touchEventsTarget: 'container',
            loop: true,
            loopFillGroupWithBlank: true,
            loop: true,
            freeMode: true,
            speed: 5000,
            freeModeMomentum: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                750: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1424: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
            },
        })
        var swiper = new Swiper(".sponser", {
            loop: true,
            freeMode: true,
            spaceBetween: 0,
            slidesPerView: 7,
            touchEventsTarget: 'container',
            loop: true,
            loopFillGroupWithBlank: true,
            loop: true,
            freeMode: true,
            speed: 4000,
            freeModeMomentum: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                500: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                750: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1424: {
                    slidesPerView: 7,
                    spaceBetween: 30,
                },
            },

        });
        var bswiper = new Swiper(".swiper-review", {
            loop: true,
            freeMode: true,
            spaceBetween: 20,
            slidesPerView: 7,
            touchEventsTarget: 'container',
            loop: true,
            loopFillGroupWithBlank: true,
            loop: true,
            freeMode: true,
            speed: 5000,
            freeModeMomentum: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                750: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1424: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
            },
        })
    </script>
@endsection
