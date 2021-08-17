<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Customer Transactions</title>

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
    <div class="col-2 d-flex customer_trans_title_con">
        <div>
            <h1 class="customer_cards_title">BOOKINGS</h1> 
        </div>
    </div>
    <div class="customer_trans_con">
        <div class="column col_customer_trans">
            <div class="row row_customer_trans">
                <div class="card card_customer_trans p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_trans_broom_img p-1">
                        <div class="d-flex flex-column">
                            <h5 class="customer_trans_status">Pending</h5>
                            <h3 class="customer_trans_title">Light Cleaning</h3>
                            <h6 class="customer_trans_date_1_1">July 22, 2021</h6>
                            <h6 class="customer_trans_price_1">P545.00</h6>
                            <div class="d-flex view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong10">
                                    DETAILS
                                </button>
                                <button type="button" class="btn btn-block btn-primary pay_btn" data-toggle="modal" data-target="#exampleModalLong1010"> 
                                    Pay 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong1010" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <!-- Modal content-->
                                        <div class="modal-content customer_trans_modal_content_inside_inside">
                                            <div class="modal-header customer_trans_modal_header_inside_inside">
                                                <div class="p-3 modal_inside_inside_con">
                                                    <h3 class="customer_trans_title_pay">Light Cleaning</h3>
                                                    <h6 class="customer_trans_price_pay_1">Total Amount: P545.00</h6>
                                                    <div class="d-flex payments_con">
                                                        <img src="/img/gcash.png" class="gcash_img">
                                                        <img src="/img/paypal.png" class="paypal_img">
                                                    </div> 
                                                    <div class="d-flex cancel_confirm_pay_con">
                                                        <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> CANCEL </button>
                                                        <button type="button" class="btn btn-block btn-primary confirm_btn"> CONFIRM </button>
                                                    </div>  
                                                </div>
                                                <button type="button" class="close pl-2" data-dismiss="modal">&times;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_trans_modal_content">
                                        <div class="modal-header customer_trans_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_trans_broom_2_1_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="customer_trans_modal_title">Light Cleaning</h4>
                                                <h6 class="customer_trans_modal_date_1_1">July 22, 2021</h6>
                                                <h6 class="customer_trans_modal_amount_1">Total Amount: P545.00</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_trans_modal_body_1_con">
                                            <p class="customer_trans_description">
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
                                        </div>
                                        <div class="modal-footer customer_trans_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary big_cancel_btn" data-toggle="modal" data-target="#exampleModalLong1011">
                                                CANCEL
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong1011" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_trans_modal_content_inside">
                                                        <div class="modal-header customer_trans_modal_header_inside">
                                                            <div class="p-3 customer_trans_modal_inside_con">
                                                                <h3 class="cancel_booking_question">Are you sure you want to cancel your booking?</h3>
                                                                <div class="d-flex no_yes_con">
                                                                    <button type="button" class="btn btn-block btn-primary no_btn" data-dismiss="modal"> NO </button>
                                                                    <button type="button" class="btn btn-block btn-primary yes_btn" data-toggle="modal" data-target="#exampleModalLong10111"> 
                                                                        YES 
                                                                    </button>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalLong10111" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <!-- Modal content-->
                                                                        <div class="modal-content customer_trans_modal_content_inside_inside">
                                                                            <div class="modal-header customer_trans_modal_header_inside_inside">
                                                                                <div class="customer_trans_modal_inside_con">
                                                                                    <h3 class="provide_reason_title">Provide Reason</h3>
                                                                                    <div class="provide_reason_con">
                                                                                        <form action="/action_page.php">
                                                                                            <textarea type="text" id="reason" class="provide_reason_field"></textarea>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="d-flex cancel_confirm_con">
                                                                                        <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> CANCEL </button>
                                                                                        <button type="button" class="btn btn-block btn-primary confirm_btn"> CONFIRM </button>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        <div class="column col_customer_trans">
            <div class="row row_customer_trans">
                <div class="card card_customer_trans p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_trans_broom_2_img p-1">
                        <div class="d-flex flex-column">
                            <h5 class="customer_trans_status">On-Progress</h5>
                            <h3 class="customer_trans_title">Deep Home Cleaning</h3>
                            <h6 class="customer_trans_date_2_2">July 22, 2021</h6>
                            <h6 class="customer_trans_price_2">P600.00</h6>
                            <div class="d-flex view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong11">
                                    DETAILS
                                </button>
                                <button type="button" class="btn btn-block btn-primary pay_btn" data-toggle="modal" data-target="#exampleModalLong2020"> 
                                    Pay 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong2020" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <!-- Modal content-->
                                        <div class="modal-content customer_trans_modal_content_inside_inside">
                                            <div class="modal-header customer_trans_modal_header_inside_inside">
                                                <div class="p-3 customer_trans_modal_inside_con">
                                                    <h3 class="customer_trans_title_pay">Deep Home Cleaning</h3>
                                                    <h6 class="customer_trans_price_pay_2">Total Amount: 600.00</h6>
                                                    <div class="d-flex payments_con">
                                                        <img src="/img/gcash.png" class="gcash_img">
                                                        <img src="/img/paypal.png" class="paypal_img">
                                                    </div> 
                                                    <div class="d-flex cancel_confirm_pay_con">
                                                        <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> CANCEL </button>
                                                        <button type="button" class="btn btn-block btn-primary confirm_btn"> CONFIRM </button>
                                                    </div>  
                                                </div>
                                                <button type="button" class="close pl-2" data-dismiss="modal">&times;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_trans_modal_content">
                                        <div class="modal-header customer_trans_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_trans_broom_2_2_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="customer_trans_modal_title">Deep Home Cleaning</h4>
                                                <h6 class="customer_trans_modal_date_2_2">July 22, 2021</h6>
                                                <h6 class="customer_trans_modal_amount_2">Total Amount: P600.00</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_trans_modal_body_1_con">
                                            <p class="customer_trans_description">
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
                                        </div>
                                        <div class="modal-footer customer_trans_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary big_cancel_btn" data-toggle="modal" data-target="#exampleModalLong1022">
                                                CANCEL
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong1022" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_trans_modal_content_inside">
                                                        <div class="modal-header customer_trans_modal_header_inside">
                                                            <div class="p-3 customer_trans_modal_inside_con">
                                                                <h3 class="cancel_booking_question">Are you sure you want to cancel your booking?</h3>
                                                                <div class="d-flex no_yes_con">
                                                                    <button type="button" class="btn btn-block btn-primary no_btn" data-dismiss="modal"> NO </button>
                                                                    <button type="button" class="btn btn-block btn-primary yes_btn" data-toggle="modal" data-target="#exampleModalLong10222"> 
                                                                        YES 
                                                                    </button>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalLong10222" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <!-- Modal content-->
                                                                        <div class="modal-content customer_trans_modal_content_inside_inside">
                                                                            <div class="modal-header customer_trans_modal_header_inside_inside">
                                                                                <div class="customer_trans_modal_inside_con">
                                                                                    <h3 class="provide_reason_title">Provide Reason</h3>
                                                                                    <div class="provide_reason_con">
                                                                                        <form action="/action_page.php">
                                                                                            <textarea type="text" id="reason" class="provide_reason_field"></textarea>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="d-flex cancel_confirm_con">
                                                                                        <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> CANCEL </button>
                                                                                        <button type="button" class="btn btn-block btn-primary confirm_btn"> CONFIRM </button>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        <div class="column col_customer_trans">
            <div class="row row_customer_trans">
                <div class="card card_customer_trans p-4">
                    <div class="d-flex">
                        <img src="/img/broom.png" class="customer_trans_broom_3_img p-1">
                        <div class="d-flex flex-column">
                            <h5 class="customer_trans_status">On-Progress</h5>
                            <h3 class="customer_trans_title">Deep Kitchen Cleaning</h3>
                            <h6 class="customer_trans_date_3_3">July 22, 2021</h6>
                            <h6 class="customer_trans_price_3">P572.00</h6>
                            <div class="d-flex view_details_con">
                                <button type="button" class="btn btn-link customer_view_details_btn" data-toggle="modal" data-target="#exampleModalLong12">
                                    DETAILS
                                </button>
                                <button type="button" class="btn btn-block btn-primary pay_btn" data-toggle="modal" data-target="#exampleModalLong3030"> 
                                    Pay 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong3030" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <!-- Modal content-->
                                        <div class="modal-content customer_trans_modal_content_inside_inside">
                                            <div class="modal-header customer_trans_modal_header_inside_inside">
                                                <div class="p-3 customer_trans_modal_inside_con">
                                                    <h3 class="customer_trans_title_pay">Deep Kitchen Cleaning</h3>
                                                    <h6 class="customer_trans_price_pay_3">Total Amount: P572.00</h6>
                                                    <div class="d-flex payments_con">
                                                        <img src="/img/gcash.png" class="gcash_img">
                                                        <img src="/img/paypal.png" class="paypal_img">
                                                    </div> 
                                                    <div class="d-flex cancel_confirm_pay_con">
                                                        <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> CANCEL </button>
                                                        <button type="button" class="btn btn-block btn-primary confirm_btn"> CONFIRM </button>
                                                    </div>  
                                                </div>
                                                <button type="button" class="close pl-2" data-dismiss="modal">&times;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <!-- Modal content-->
                                    <div class="modal-content p-4 customer_trans_modal_content">
                                        <div class="modal-header customer_trans_modal_header">
                                        <div class="d-flex pt-5">
                                            <img src="/img/broom.png" class="customer_trans_broom_2_3_img p-1">
                                            <div class="d-flex flex-column">
                                                <h4 class="customer_trans_modal_title">Deep Kitchen Cleaning</h4>
                                                <h6 class="customer_trans_modal_date_3_3">July 22, 2021</h6>
                                                <h6 class="customer_trans_modal_amount_3">Total Amount: P572.00</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body d-flex p-4">
                                            <div class="customer_trans_modal_body_1_con">
                                            <p class="customer_trans_description">
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
                                        </div>
                                        <div class="modal-footer customer_trans_modal_footer">
                                            <button type="button" class="btn btn-block btn-primary big_cancel_btn" data-toggle="modal" data-target="#exampleModalLong1033">
                                                CANCEL
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong1033" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <!-- Modal content-->
                                                    <div class="modal-content customer_trans_modal_content_inside">
                                                        <div class="modal-header customer_trans_modal_header_inside">
                                                            <div class="p-3 customer_trans_modal_inside_con">
                                                                <h3 class="cancel_booking_question">Are you sure you want to cancel your booking?</h3>
                                                                <div class="d-flex no_yes_con">
                                                                    <button type="button" class="btn btn-block btn-primary no_btn" data-dismiss="modal"> NO </button>
                                                                    <button type="button" class="btn btn-block btn-primary yes_btn" data-toggle="modal" data-target="#exampleModalLong10333"> 
                                                                        YES 
                                                                    </button>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalLong10333" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <!-- Modal content-->
                                                                        <div class="modal-content customer_trans_modal_content_inside_inside">
                                                                            <div class="modal-header customer_trans_modal_header_inside_inside">
                                                                                <div class="customer_trans_modal_inside_con">
                                                                                    <h3 class="provide_reason_title">Provide Reason</h3>
                                                                                    <div class="provide_reason_con">
                                                                                        <form action="/action_page.php">
                                                                                            <textarea type="text" id="reason" class="provide_reason_field"></textarea>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="d-flex cancel_confirm_con">
                                                                                        <button type="button" class="btn btn-block btn-primary cancel_btn" data-dismiss="modal"> CANCEL </button>
                                                                                        <button type="button" class="btn btn-block btn-primary confirm_btn"> CONFIRM </button>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
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
