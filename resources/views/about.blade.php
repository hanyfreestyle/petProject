@extends('layouts.app')

@section('content')

    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button -->
                <div class="back-button">
                    <a href="pages.html">
                        <i class="bi bi-arrow-left-short"></i>
                    </a>
                </div>

                <!-- Page Title -->
                <div class="page-heading">
                    <h6 class="mb-0">About</h6>
                </div>

                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas"
                     aria-controls="affanOffcanvas">
                    <span class="d-block"></span>
                    <span class="d-block"></span>
                    <span class="d-block"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper py-3">
        <div class="container">
            <div class="card image-gallery-card direction-rtl">
                <div class="card-body">
                    <img class="mb-3 rounded" src="img/bg-img/13.jpg" alt="">
                    <h5>Why do we use it?</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout.</p>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                        using 'Content here, content here', making it look like readable English.</p>
                    <a class="btn btn-primary mb-4" href="#">Get A Quote</a>


                    <h5>Where can I get some?</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                    <!-- Single Skill Progress Bar -->
                    <div class="skill-progress-bar d-flex align-items-center">
                        <!-- Skill Icon -->
                        <div class="skill-icon shadow-sm p-2">
                            <i class="bi bi-code text-dark fz-20"></i>
                        </div>

                        <div class="skill-data">
                            <!-- Skill Name -->
                            <div class="skill-name d-flex align-items-center justify-content-between">
                                <p class="mb-1">HTML5</p>
                                <small class="mb-1">
                                    <span class="counter">78</span>%
                                </small>
                            </div>

                            <!-- Progress -->
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" style="width: 78%;" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Skill Progress Bar -->
                    <div class="skill-progress-bar d-flex align-items-center">
                        <!-- Skill Icon -->
                        <div class="skill-icon shadow-sm p-2">
                            <i class="bi bi-heart text-danger fz-20"></i>
                        </div>

                        <div class="skill-data">
                            <!-- Skill Name -->
                            <div class="skill-name d-flex align-items-center justify-content-between">
                                <p class="mb-1">PHP 8</p>
                                <small class="mb-1">
                                    <span class="counter">96</span>%
                                </small>
                            </div>

                            <!-- Progress -->
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-success" style="width: 96%;" role="progressbar" aria-valuenow="96"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Skill Progress Bar -->
                    <div class="skill-progress-bar d-flex align-items-center">
                        <!-- Skill Icon -->
                        <div class="skill-icon shadow-sm p-2 fz-20">
                            <i class="bi bi-bootstrap text-primary"></i>
                        </div>

                        <div class="skill-data">
                            <!-- Skill Name -->
                            <div class="skill-name d-flex align-items-center justify-content-between">
                                <p class="mb-1">Bootstrap 5</p>
                                <small class="mb-1">
                                    <span class="counter">88</span>%
                                </small>
                            </div>

                            <!-- Progress -->
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-info" style="width: 88%;" role="progressbar" aria-valuenow="88"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <p class="mb-4">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                        embarrassing hidden in the middle of text.</p>

                    <div class="row">
                        <!-- Single Counter -->
                        <div class="col-4">
                            <div class="single-counter-wrap text-center mb-4">
                                <i class="bi bi-basket mb-1 text-success"></i>
                                <h4 class="mb-0 text-success">
                                    <span class="counter">1400</span>+
                                </h4>
                            </div>
                        </div>

                        <!-- Single Counter -->
                        <div class="col-4">
                            <div class="single-counter-wrap text-center mb-4">
                                <i class="bi bi-cup mb-1 text-primary"></i>
                                <h4 class="mb-0 text-primary">
                                    <span class="counter">16</span>k
                                </h4>
                            </div>
                        </div>

                        <!-- Single Counter -->
                        <div class="col-4">
                            <div class="single-counter-wrap text-center mb-4">
                                <i class="bi bi-emoji-smile mb-1 text-danger"></i>
                                <h4 class="mb-0 text-danger">
                                    <span class="counter">963</span>+
                                </h4>
                            </div>
                        </div>
                    </div>



                    <a href="#" class="btn btn-primary mt-3 w-100">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
@endsection

