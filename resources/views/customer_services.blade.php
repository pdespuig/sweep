<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Customer Services</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.menu-toggle').click(function(){
                    $('nav').toggleClass('active')
                })
            })
    </script>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_customer.css')}}">
</head>
<body>
    <header>
        <div class="logo"> 
            SWEEP 
        </div>
        <nav>
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="#">Transaction</a></li>
                <li><a href="#">History</a></li>
                <div class="customer_notif_icon">
                    <button class="btn dropdown-toggle dropdown_notif_icon" type="button" id="menu2" data-toggle="dropdown" >
                        <i class="bi bi-bell"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Notification 1</a>
                    <a class="dropdown-item" href="#">Notification 2</a>
                </div>
                <div class="profile_btn">
                    <button class="btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" >
                        <img src="/img/user.png" class="profile_img">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header>
    <div class="customer_search_con">
        <form action="/action_page.php">
            <input type="text" placeholder="Search" name="search" class="customer_search_field">
        </form>
    </div>
    <div class="col-2 d-flex customer_services_title_con">
        <div>
            <h1 class="customer_cards_title">SERVICES</h1> 
        </div>
    </div>
    <div class="customer_services_con">
        <div class="column col_customer_services">
            <div class="row row_customer_services">
                <div class="card card_customer_services p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_services_broom_img p-1">
                        <div class="d-flex flex-column">
                            <h3 class="customer_services_title">Light Cleaning</h3>
                            <h6 class="customer_services_sub_1">Price starts at P 342.00</h6>
                            <div class="view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong10">
                                    DETAILS
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_services_modal_content">
                                        <div class="modal-header customer_services_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_services_broom_2_1_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="modal_customer_services_title">Light Cleaning</h4>
                                                <h6 class="customer_services_sub_1">Price starts at P 342.00 - P 550.00</h6>
                                                <img src="/img/stars.png" class="five_stars_img">
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_services_modal_body_1_con">
                                            <p class="customer_services_description">
                                                The light cleaning service comprises sweeping and mopping the floors, dusting appliances and cupboards, wiping down countertops, disposing of waste, and performing simple disinfection. This service will ensure that your home is clear of dust, filth, and debris. Additionally, be virus and bacteria-free. Daily/weekly service is recommended.
                                            </p>
                                            <ul class="customer_package_list">
                                                <li><b>Equipment:</b> Vacuum, Mop, Rugs, Microfiber Cloth, Duster.</li>
                                                <br>
                                                <li><b>Materials:</b> Multipurpose Cleaner, Disinfectant, Floor Cleaner, Trash Bag, Bleach.</li>
                                                <br>
                                                <li><b>Personal Protection:</b> Rubber Gloves, PPE, Facemask, Face Shield, Sanitizer</li>
                                                <br>
                                                <li><b>Cleaners:</b> 3 Cleaners</li>       
                                            </ul>
                                            </div>
                                            <div class="d-flex flex-column modal_body_2_con">
                                                <ul class="customer_package_list customer_property_list">
                                                    <li><b>Medium-Upper Class Residential Areas</b></li>
                                                    <li><b>Price: P 545.00</b></li>
                                                    <br>
                                                    <li><b>Apartments</b></li>
                                                    <li><b>Price: P 342.00</b></li>
                                                    <br>
                                                    <li><b>Condominiums</b></li>
                                                    <li><b>Price: P 356.00</b></li> 
                                                </ul> 
                                            </div> 
                                        </div>
                                        <div class="modal-footer customer_services_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary book_now_btn" data-toggle="modal" data-target="#exampleModalLong101">
                                                BOOK NOW
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong101" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_services_modal_content_inside">
                                                        <div class="modal-header customer_services_modal_header_inside">
                                                            <div class="p-3 customer_services_modal_inside_con">
                                                                <h3 class="customer_services_modal_title">Light Cleaning</h3>
                                                            
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Medium-Upper Class Residential Areas
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Apartments
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Condominiums
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex cancel_confirm_con">
                                                                    <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> Cancel </button>
                                                                    <button type="button" class="btn btn-block btn-primary confirm_btn"> Confirm </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column col_customer_services">
            <div class="row row_customer_services">
                <div class="card card_customer_services p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_services_broom_2_img p-1">
                        <div class="d-flex flex-column">
                            <h3 class="customer_services_title">Deep Home Cleaning</h3>
                            <h6 class="customer_services_sub_2">Price starts at P 391.00</h6>
                            <div class="view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong11">
                                    DETAILS
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_services_modal_content">
                                        <div class="modal-header customer_services_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_services_broom_2_2_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="modal_customer_services_title">Deep Home Cleaning</h4>
                                                <h6 class="customer_services_sub_2">Price starts at P 391.00 - P 610.00</h6>
                                                <img src="/img/stars.png" class="five_stars_img">
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_services_modal_body_1_con">
                                            <p class="customer_services_description">
                                                A deeper dive into maintaining a clean environment, this service will include sweeping/vacuuming and mopping the floors, vacuuming carpets, dusting cabinets, wiping down countertops, bathroom cleaning, waste disposal, and wiping down windows, ceilings, lighting fixtures, and walls, as well as simple disinfection. It is recommended to perform this procedure at least once a month.
                                            </p>
                                            <ul class="customer_package_list">
                                                <li><b>Equipment:</b> Vacuum, Mop, Rugs, Microfiber Cloth, Duster.</li>
                                                <br>
                                                <li><b>Materials:</b> Multipurpose Cleaner, Disinfectant, Floor Cleaner, Trash Bag, Bleach.</li>
                                                <br>
                                                <li><b>Personal Protection:</b> Rubber Gloves, PPE, Facemask, Face Shield, Sanitizer</li>
                                                <br>
                                                <li><b>Cleaners:</b> 3 Cleaners</li>       
                                            </ul>
                                            </div>
                                            <div class="d-flex flex-column customer_services_modal_body_2_con">
                                                <ul class="customer_package_list customer_property_list">
                                                <li><b>Medium-Upper Class Residential Areas</b></li>
                                                <li><b>Price: P 600.00 (can be marked up to P 610.00)</b></li>
                                                <br>
                                                <li><b>Apartments</b></li>
                                                <li><b>Price: P 391.00 (Can be marked up to P 395.00)</b></li>
                                                <br>
                                                <li><b>Condominiums</b></li>
                                                <li><b>Price: P 407.00 (Can be marked up to P 410.00)</b></li> 
                                                </ul> 
                                            </div> 
                                        </div>
                                        <div class="modal-footer customer_services_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary book_now_btn" data-toggle="modal" data-target="#exampleModalLong102">
                                                BOOK NOW
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong102" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_services_modal_content_inside">
                                                        <div class="modal-header customer_services_modal_header_inside">
                                                            <div class="p-3 customer_services_modal_inside_con">
                                                                <h3 class="customer_services_modal_title">Deep Home Cleaning</h3>
                                                            
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Medium-Upper Class Residential Areas
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Apartments
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Condominiums
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex cancel_confirm_con">
                                                                    <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> Cancel </button>
                                                                    <button type="button" class="btn btn-block btn-primary confirm_btn"> Confirm </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column col_customer_services">
            <div class="row row_customer_services">
                <div class="card card_customer_services p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_services_broom_3_img p-1">
                        <div class="d-flex flex-column">
                            <h3 class="customer_services_title">Deep Kitchen Cleaning</h3>
                            <h6 class="customer_services_sub_3">Price starts at P 376.00</h6>
                            <div class="view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong12">
                                    DETAILS
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_services_modal_content">
                                        <div class="modal-header customer_services_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_services_broom_2_3_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="modal_customer_services_title">Deep Kitchen Cleaning</h4>
                                                <h6 class="customer_services_sub_3">Price starts at P 376.00 - P 560.00</h6>
                                                <img src="/img/stars.png" class="five_stars_img">
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_services_modal_body_1_con">
                                            <p class="customer_services_description">
                                                This service is designed exclusively for the kitchen, focusing on deep cleaning the countertops, stovetops, and ovens. Additionally, the service includes utensils and materials management.  Dishwashing is not included.
                                            </p>
                                            <ul class="customer_package_list">
                                                <li><b>Equipment:</b> Vacuum, Mop, Rugs, Microfiber Cloth, Duster.</li>
                                                <br>
                                                <li><b>Materials:</b> Multipurpose Cleaner, Disinfectant, Floor Cleaner, Trash Bag, Bleach.</li>
                                                <br>
                                                <li><b>Personal Protection:</b> Rubber Gloves, PPE, Facemask, Face Shield, Sanitizer</li>
                                                <br>
                                                <li><b>Cleaners:</b> 3 Cleaners</li>       
                                            </ul>
                                            </div>
                                            <div class="d-flex flex-column customer_services_modal_body_2_con">
                                                <ul class="customer_package_list customer_property_list">
                                                    <li><b>Medium-Upper Class Residential Areas</b></li>
                                                    <li><b>Price: P 560.00</b></li>
                                                    <br>
                                                    <li><b>Apartments</b></li>
                                                    <li><b>Price: P 376.00 (Can be Marked up to P 380.00)</b></li>
                                                    <br>
                                                    <li><b>Condominiums</b></li>
                                                    <li><b>Price: P 391.00 (Can be Marked up to P 395.00)</b></li> 
                                                </ul> 
                                            </div> 
                                        </div>
                                        <div class="modal-footer customer_services_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary book_now_btn" data-toggle="modal" data-target="#exampleModalLong103">
                                                BOOK NOW
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong103" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_services_modal_content_inside">
                                                        <div class="modal-header customer_services_modal_header_inside">
                                                            <div class="p-3 customer_services_modal_inside_con">
                                                                <h3 class="customer_services_modal_title">Deep Kitchen Cleaning</h3>
                                                            
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Medium-Upper Class Residential Areas
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Apartments
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Condominiums
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex cancel_confirm_con">
                                                                    <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> Cancel </button>
                                                                    <button type="button" class="btn btn-block btn-primary confirm_btn"> Confirm </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column col_customer_services">
            <div class="row row_customer_services">
                <div class="card card_customer_services p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_services_broom_4_img p-1">
                        <div class="d-flex flex-column">
                            <h3 class="customer_services_title">Upholstery Cleaning</h3>
                            <h6 class="customer_services_sub_4">Price starts at P 357.00</h6>
                            <div class="view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong13">
                                    DETAILS
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_services_modal_content">
                                        <div class="modal-header customer_services_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_services_broom_2_4_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="modal_customer_services_title">Upholstery Cleaning</h4>
                                                <h6 class="customer_services_sub_4">Price starts at P 357.00 - P 560.00</h6>
                                                <img src="/img/stars.png" class="five_stars_img">
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_services_modal_body_1_con">
                                            <p class="customer_services_description">
                                                This service will concentrate on cleaning your sofas, pillows, and mattresses in order to eliminate accumulated dust and debris and restore their original appearance. It is recommended to perform this procedure at least once every three months.
                                            </p>
                                            <ul class="customer_package_list">
                                                <li><b>Equipment:</b> Vacuum, Mop, Rugs, Microfiber Cloth, Duster.</li>
                                                <br>
                                                <li><b>Materials:</b> Multipurpose Cleaner, Disinfectant, Floor Cleaner, Trash Bag, Bleach.</li>
                                                <br>
                                                <li><b>Personal Protection:</b> Rubber Gloves, PPE, Facemask, Face Shield, Sanitizer</li>
                                                <br>
                                                <li><b>Cleaners:</b> 3 Cleaners</li>       
                                            </ul>
                                            </div>
                                            <div class="d-flex flex-column customer_services_modal_body_2_con">
                                                <ul class="customer_package_list customer_property_list">
                                                <li><b>Medium-Upper Class Residential Areas</b></li>
                                                <li><b>Price: P 560.00</b></li>
                                                <br>
                                                <li><b>Apartments</b></li>
                                                <li><b>Price: P 357.00 (Can be marked up to P 360.00)</b></li>
                                                <br>
                                                <li><b>Condominiums</b></li>
                                                <li><b>Price: P 371.00 (Can be marked up to P 375.00)</b></li>  
                                                </ul> 
                                            </div> 
                                        </div>
                                        <div class="modal-footer customer_services_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary book_now_btn" data-toggle="modal" data-target="#exampleModalLong104">
                                                BOOK NOW
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong104" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_services_modal_content_inside">
                                                        <div class="modal-header customer_services_modal_header_inside">
                                                            <div class="p-3 customer_services_modal_inside_con">
                                                                <h3 class="customer_services_modal_title">Upholstery Cleaning</h3>
                                                            
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Medium-Upper Class Residential Areas
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Apartments
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Condominiums
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex cancel_confirm_con">
                                                                    <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> Cancel </button>
                                                                    <button type="button" class="btn btn-block btn-primary confirm_btn"> Confirm </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column col_customer_services">
            <div class="row row_customer_services">
                <div class="card card_customer_services p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_services_broom_5_img p-1">
                        <div class="d-flex flex-column">
                            <h3 class="customer_services_title">Maid for a Day</h3>
                            <h6 class="customer_services_sub_5">Price starts at P 442.00</h6>
                            <div class="view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong14">
                                    DETAILS
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_services_modal_content">
                                        <div class="modal-header customer_services_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_services_broom_2_5_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="modal_customer_services_title">Maid for a Day</h4>
                                                <h6 class="customer_services_sub_5">Price starts at P 442.00 - P 1350.00</h6>
                                                <img src="/img/stars.png" class="five_stars_img">
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_services_modal_body_1_con">
                                            <p class="customer_services_description">
                                                This service will provide a worry-free day in the house by having a maid take care of the essential household chores. This service specializes in light dry cleaning, with a focus on simple kitchen and bathroom cleaning and organizing, dishwashing, laundry and ironing as well as modest bedroom organization. The service will last eight hours and will include between one and two maids, depending on the size of the residence. The customer is responsible for providing both equipment and materials.
                                            </p>
                                            <ul class="customer_package_list">
                                            <li><b>Medium-Upper Class Residential Areas</b></li>
                                            <li><b>Number of Cleaners:</b> 1 Cleaner (Customizable)</li>
                                            <li><b>Working Hours:</b> 8 Hours</li>
                                            <li><b>Price: P 780.00</b></li>
                                            <li><b>Number of Cleaners:</b> 2 Cleaners (Customizable)</li>
                                            <li><b>Working Hours:</b> 8 Hours</li>
                                            <li><b>Price: P 1350.00</b></li>
                                            <li><b>Number of Cleaners:</b> 1 Cleaner (Customizable)</li>
                                            <li><b>Working Hours:</b> 4 Hours</li>
                                            <li><b>Price: P 442.00 (can be marked up to P 450.00)</b></li>
                                            <li><b>Number of Cleaners:</b> 2 Cleaners (Customizable)</li>
                                            <li><b>Working Hours:</b> 4 Hours</li>
                                            <li><b>Price: P 780.00</b></li>      
                                            </ul>
                                            </div>
                                            <div class="d-flex flex-column customer_services_modal_body_2_con">
                                                <ul class="customer_package_list customer_property_list">
                                                <li><b>Apartments</b></li>
                                                <li><b>Number of Cleaners:</b> 1 Cleaner (Customizable)</li>
                                                <li><b>Working Hours:</b> 8 Hours</li>
                                                <li><b>Price: P 720.00</b></li>
                                                <li><b>Number of Cleaners:</b> 2 Cleaners (Customizable)</li>
                                                <li><b>Working Hours:</b> 8 Hours</li>
                                                <li><b>Price: P 1248.00 (Can be marked up to P 1250.00)</b></li>
                                                <li><b>Number of Cleaners:</b> 1 Cleaner (Customizable)</li>
                                                <li><b>Working Hours:</b> 4 Hours</li>
                                                <li><b>Price: P 408.00 (can be marked up to P 410.00)</b></li>
                                                <li><b>Number of Cleaners:</b> 2 Cleaners (Customizable)</li>
                                                <li><b>Working Hours:</b> 4 Hours</li>
                                                <li><b>Price: P 720.00</b></li>
                                                <br>
                                                <li><b>Condominiums</b></li>
                                                <li><b>Number of Cleaners:</b> 1 Cleaner (Customizable)</li>
                                                <li><b>Working Hours:</b> 8 Hours</li>
                                                <li><b>Price: P 750.00</b></li>
                                                <li><b>Number of Cleaners:</b> 2 Cleaners (Customizable)</li>
                                                <li><b>Working Hours:</b> 8 Hours</li>
                                                <li><b>Price: P 1300.00 (Can be marked up to P 1250.00)</b></li>
                                                <li><b>Number of Cleaners:</b> 1 Cleaner (Customizable)</li>
                                                <li><b>Working Hours:</b> 4 Hours</li>
                                                <li><b>Price: P 425.00</b></li>
                                                <li><b>Number of Cleaners:</b> 2 Cleaners (Customizable)</li>
                                                <li><b>Working Hours:</b> 4 Hours</li>
                                                <li><b>Price: P 750.00</b></li>
                                                </ul> 
                                            </div> 
                                        </div>
                                        <div class="modal-footer customer_services_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary book_now_btn" data-toggle="modal" data-target="#exampleModalLong105">
                                                BOOK NOW
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong105" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content modal_inside customer_services_modal_content_inside">
                                                        <div class="modal-header customer_services_modal_header_inside">
                                                            <div class="p-3 customer_services_modal_inside_con">
                                                                <h3 class="customer_services_modal_title">Maid for a Day</h3>
                                                            
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Medium-Upper Class Residential Areas
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Apartments
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Condominiums
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex cancel_confirm_con">
                                                                    <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> Cancel </button>
                                                                    <button type="button" class="btn btn-block btn-primary confirm_btn"> Confirm </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <div class="column col_customer_services">
            <div class="row row_customer_services">
                <div class="card card_customer_services p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_services_broom_6_img p-1">
                        <div class="d-flex flex-column">
                            <h3 class="customer_services_title">Sanitation and Germ Proofing</h3>
                            <h6 class="customer_services_sub_6">Price starts at P 355.00</h6>
                            <div class="view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong16">
                                    DETAILS
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_services_modal_content">
                                        <div class="modal-header customer_services_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_services_broom_2_6_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="modal_customer_services_title">Sanitation and Germ Proofing</h4>
                                                <h6 class="customer_services_sub_6">Price starts at P 355.00 - P 580.00</h6>
                                                <img src="/img/stars.png" class="five_stars_img">
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_services_modal_body_1_con">
                                            <p class="customer_services_description">
                                                This service will emphasize thorough sanitation, which will include disinfectant spray and antimicrobial fogging. It is recommended to perform this procedure at least once a month.
                                            </p>
                                            <ul class="customer_package_list">
                                                <li><b>Equipment:</b> Vacuum, Mop, Rugs, Microfiber Cloth, Duster.</li>
                                                <br>
                                                <li><b>Materials:</b> Multipurpose Cleaner, Disinfectant, Floor Cleaner, Trash Bag, Bleach.</li>
                                                <br>
                                                <li><b>Personal Protection:</b> Rubber Gloves, PPE, Facemask, Face Shield, Sanitizer</li>
                                                <br>
                                                <li><b>Cleaners:</b> 3 Cleaners</li>       
                                            </ul>
                                            </div>
                                            <div class="d-flex flex-column customer_services_modal_body_2_con">
                                                <ul class="customer_package_list customer_property_list">
                                                <li><b>Medium-Upper Class Residential Areas</b></li>
                                                <li><b>Price: P 580.00</b></li>
                                                <br>
                                                <li><b>Apartments</b></li>
                                                <li><b>Price: P 355.00 (Can be Marked Up to P 360.00))</b></li>
                                                <br>
                                                <li><b>Condominiums</b></li>
                                                <li><b>Price: P 369.00 (Can be Marked Up to P 375.00)</b></li>
                                                </ul> 
                                            </div> 
                                        </div>
                                        <div class="modal-footer customer_services_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary book_now_btn" data-toggle="modal" data-target="#exampleModalLong106">
                                                BOOK NOW
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong106" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_services_modal_content_inside">
                                                        <div class="modal-header customer_services_modal_header_inside">
                                                            <div class="p-3 customer_services_modal_inside_con">
                                                                <h3 class="customer_services_modal_title">Sanitation and Germ Proofing</h3>
                                                            
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Medium-Upper Class Residential Areas
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Apartments
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Condominiums
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex cancel_confirm_con">
                                                                    <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> Cancel </button>
                                                                    <button type="button" class="btn btn-block btn-primary confirm_btn"> Confirm </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>
</html>
