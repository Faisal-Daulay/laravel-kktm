@extends('end-user.home')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/KKTM.jpg" alt="slide">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown">Kolej Kemahiran Tinggi Mara Ledang
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Kolej Kemahiran Tinggi MARA Ledang
                                    Serom 4 & 5, Jalan Serom
                                    Bukit Gambir, Sungai Mati
                                    84410 Ledang, Johor.
                                </p>
                                {{-- <a href="/login" class="btn btn-light py-md-3 px-md-5 animated slideInRight">LOGIN</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4" id="service">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img class="img-fluid mb-5" src="img/facilities/mqs.jpg" alt="">
                            <h5 class="mb-3">PENGIKTIRAFAN</h5>
                            <p>MARA ECOSYSTEM QUALITY STANDARD (MQS)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img class="img-fluid mb-5" src="img/facilities/etac.jpg" alt="">
                            <h5 class="mb-3">PENGIKTIRAFAN</h5>
                            <p>ENGINEERING TECHNOLOGY ACCREDITATION COUNCIL (ETAC)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img class="img-fluid mb-5" src="img/facilities/ims.jpg" alt="">
                            <h5 class="mb-3">PENGIKTIRAFAN</h5>
                            <p>INTEGRATED MANAGEMENT SYSTEM (IMS)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5" id="about">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/facilities/pejabat.jpeg"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to KKTM LEDANG</h1>
                    <p class="mb-4">KKTM Ledang was officially built on 07 September 2005. Inauguration of KKTM Ledang by
                        YB Datuk Seri Hj. Mohd. Shafie bin Hj. Apdal, Minister of Rural and Regional Development (KKLW) at
                        that time. Began to operate fully on June 14, 2010 with the entry of the "first batch" of students
                        on July 12, 2010.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category" id="courses">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/facilities/lab-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Laboratory</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/facilities/diagnostik.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Diagnostic</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/facilities/teraputik-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Therapeutic</h5>
                                    <small class="text-primary"></small>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/facilities/ict.jpg" alt=""
                            style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin:  1px;">
                            <h5 class="m-0">ICT</h5>
                            <small class="text-primary"></small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/facilities/radiologi-4.jpg"
                            alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin:  1px;">
                            <h5 class="m-0">Radiology and Imaging</h5>
                            <small class="text-primary"></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <!-- Team Start -->
    <div class="container-xxl py-5" id="facilities">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">KKTM</h6>
                <h1 class="mb-5">Facilities</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/facilities/studiobusking.png" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Studio Busking</h5>
                            <small>KKTM</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/facilities/fasilitisukan.png" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Sports Facilities</h5>
                            <small>KKTM</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/facilities/gym.png" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Fitness Arena</h5>
                            <small>KKTM</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/facilities/musolaannur.png" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Musolla An-nur</h5>
                            <small>KKTM</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
