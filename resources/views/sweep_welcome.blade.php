<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Welcome
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/sweep.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_welcome.css')}}">
</head>
<body>
    <header> <!-- Navbar --> 
        <div class="logo"> 
            SWEEP 
        </div>
        <nav>
            <ul>
                <li>
                    <a class="nav_con active" href="sweep_welcome">
                        Home
                    </a>
                </li>
                <li>
                    <a class="nav_con" href="#">
                        Services
                    </a>
                </li>
                <li>
                    <a class="nav_con" href="#">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a class="nav_con" href="#">
                        FAQs
                    </a>
                </li>
                <li>
                    <a class="nav_con" href="#">
                        About Us
                    </a>
                </li>
                <div class="dropdown login_con">
                    <div class="login_inside_con">
                        <button class="login_btn">
                            Log In
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Customer</a>
                            <a href="#">Cleaner</a>
                        </div>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header> <!-- End of Navbar --> 
    
    <div class="welcome_con">
        <div class="welcome_title_con">
            <h1 class="welcome_title">
                The Road to Cleanliness has never been easier.
            </h1>
        </div>
        <div class="welcome_sub_con">
            <h5 class="welcome_sub">
                Making your comfort zones squeaky clean one step at a time.
            </h5>
        </div>
        <div class="signup_con">
            <button type="button" class="btn btn-block btn-primary signup_btn"> 
                Sign Up 
            </button>
        </div>
    </div>
   
    <div class="fixed_footer"> <!-- Footer --> 
        <div class="d-flex">
            <div class="footer_info_con">
                <h5>
                    Do You Want Squeacky-Clean Floors?
                </h5>
                <p>
                    Call <u class="contact_no">09897656345</u> today to get a free estimate on our services.
                </p>
            </div>
            <div class="footer_info_con">
                <p>
                    When you need regular cleaning services for your house, you can rely on the professionals at SWEEP to provide them for you. We're available for recurring cleaning services and short-notice deep cleans when you're preparing for important guests.
                </p>
            </div>
            <div class="form-group footer_sign_con">
            <input type="text" placeholder="Email" class="form-control signup_field">
            <button type="button" class="btn btn-block btn-primary footer_signup_btn"> 
                Sign Up Now
            </button>
        </div>
        </div>
        <div class="footer_content">
            Copyright &copy; 2021 Ateneo de Naga University
        </div>        
    </div> <!-- End of Footer -->
    
</body>
</html>