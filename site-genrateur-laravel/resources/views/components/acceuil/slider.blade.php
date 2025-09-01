        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Create Your Website <br>
                                            in 5 Minutes!
                                        </h1>
                                        <p>
                                            Welcome to our website! We're delighted to welcome you and offer you a
                                            unique experience. Explore our services and
                                            discover all we have to offer
                                        </p>

                                        <div class="btn-box">
                                            @if (Auth()->check())
                                                <a href="{{ route('gener-sit-web') }}" class="btn1">
                                                    Gener site web
                                                </a>
                                            @else
                                                <a href="#loginModal1" data-toggle="modal" class="btn1">
                                                    Gener site web
                                                </a>
                                            @endif

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Create Your Website <br>
                                            in 5 Minutes!
                                        </h1>
                                        <p>
                                            Welcome to our website! We're delighted to welcome you and offer you a
                                            unique experience. Explore our services and
                                            discover all we have to offer
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                gener site web
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Create Your Website <br>
                                            in 5 Minutes!
                                        </h1>
                                        <p>
                                            Welcome to our website! We're delighted to welcome you and offer you a
                                            unique experience. Explore our services and
                                            discover all we have to offer
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>

            </div>

        </section>
        <!-- end slider section -->
