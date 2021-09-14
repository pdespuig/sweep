@extends('head_extention_customer') 

@section('content')
    <title>
        Customer Dashboard Page
    </title>
    <head>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/carousel_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>
                    Light Cleaning
                </h2>
                <p>
                    Focus on high-touch surfaces such as doorknobs, tables, handles, light switches, and countertops.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>
                    Deep Home Cleaning
                </h2>
                <p>
                    Clean other surfaces in your home when they are visibly dirty or as needed. You might also choose to disinfect.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel_3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>
                    Deep Kitchen Cleaning
                </h2>
                <p>
                    Taking special care when cleaning surfaces, equipment, sinks and taps, and general storage areas.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>
                    Upholstery Cleaning
                </h2>
                <p>
                    Keeping your upholstery clean will maintain its appearance, keeping colours bright and textures as they should be.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel_5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>
                    Maid for a Day
                </h2>
                <p>
                    It allows you to create a schedule for services when it is most beneficial for you and your family.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel_6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>
                    Sanitation and Germ Proofing
                </h2>
                <p>
                    Sanitation systems aim to protect health by providing and promoting a clean environment.
                </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>
<div class="banner">
    <div class="book_container">
        <h1 class="no_active">
            Currently, You have no Active Bookings
        </h1>
        <p class="qoute">
            Making your comfort zones squeaky clean one step at a time.
        </p>
        <a class="btn btn-primary down_btn" href="{{ url('/customer/customer_services') }}">{{ __('Book Now') }}</a>
    </div>
</div>

<div class="download">
    <div class="row3">
        <div class="dcont">
            <h2 class="dtitle">Download our App</h2>
                <p class="d-text">Download the app and get your homes clean with just a click of a button. Now available on the Google Play Store.</p>
                <a class="btn btn-primary down_btn" href="{{ 'about_us' }}">{{ __('Download Now') }}</a>
        </div>
    </div>   
</div>

<div class="footer">
        <div class="sweep-title">
            SWEEP © 2021. All Rights Reserved.
        </div>
</div>
</body>
@endsection

    