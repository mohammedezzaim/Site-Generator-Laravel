<div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
            <img   src="{{ asset('images/Black___Blue_Minimalist_Modern_Initial_Font_Logo__1_-removebg-preview (1).png') }}" alt="" style="width:100px;height: 55px;">
        </a>
        <div class="navbar-collapse" id="navbarSupportedContent">
                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->

            <ul class="navbar-nav">
                <!-- <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li> -->
                
                <!-- <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{route('templates')}}">Templates </a></li>
                <li class="nav-item"><a class="nav-link" href="/home">my projects</a></li>
                <li class="nav-item">
                    <div >
                    <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <a class=" nav-link ">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                    </x-dropdown>
                    </div>
                </li>
            </ul>
         </div>
    </nav>
</div>
       































<!-- 
<!DOCTYPE html>
<html lang="en">

<head> -->
    <!-- Basic -->
    <!-- <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <!-- Mobile Metas -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
    <!-- Site Metas -->
    <!-- <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>home | GenerativeIA</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->

    <!-- bootstrap core css -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" /> -->

    <!-- font awesome v5.5.0 free version -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet"> -->

    <!-- bootstrap version v4.0.0 -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- fonts style -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> -->

    <!--owl slider stylesheet -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />



    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body> -->
    <!-- <div class="hero_area"> -->
    
       
        
            <!-- <header class="header_section"> -->
            <!-- <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.html"> -->
                        <!-- <span>GenerativeIA</span> -->
                         <!-- <img   src="{{ asset('images/Black___Blue_Minimalist_Modern_Initial_Font_Logo__1_-removebg-preview (1).png') }}" alt="" style="width:100px;height: 55px;">
                    </a>
                    <div class="navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->

                    <!-- <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> -->
                            <!-- <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('templates')}}">Templates </a></li>

                            




                            <li class="nav-item">
            <div >
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <a class=" nav-link ">
                            <div>{{ Auth::user()->name }}</div> -->
<!-- 
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link> -->

                        <!-- Authentication -->
                        <!-- <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            </li> -->
                            
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="./login/index.html"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                            </li> -->
<!-- 
                            <li class="nav-item">
                                <a class="nav-link"  href="#loginModal2" data-toggle="modal"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                            </li> -->


                        <!-- </ul>
                    </div>
                </nav>
            </div> -->
        <!-- </header> -->
        
   <!-- @include('partials.login_Modal') -->
    
    <!-- </div> -->


    <!-- <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->
