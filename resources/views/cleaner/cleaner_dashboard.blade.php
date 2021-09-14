@extends('head_extention_cleaner') 

@section('content')
    <title>
        Cleaner Dashboard
    </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script type="text/javascript"  id="gwt-pst" src="{{ asset('js/sweep.js')}}"></script>

    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<body>
    <header> <!-- Navbar -->
        <div class="logo"> 
            SWEEP 
        </div>
        <nav>
            <ul>
                <li>
                    <a href="cleaner_dashboard" class="active">
                        Home
                    </a>
                </li>
                <li>
                    <a href="cleaner_job">
                        Jobs
                    </a>
                </li>
                <li>
                    <a href="cleaner_history">
                        History
                    </a>
                </li>
                <div class="customer_notif_icon">
                    <button class="btn dropdown-toggle dropdown_notif_icon" type="button" id="menu2" data-toggle="dropdown" >
                        <i class="bi bi-bell"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">
                        Notification 1
                    </a>
                    <a class="dropdown-item" href="#">
                        Notification 2
                    </a>
                </div>
                <div class="profile_btn">
                    <button class="btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" >
                        <img src="/img/user.png" class="profile_img">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="cleaner_profile">
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        Logout
                    </a>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header> <!-- End of Navbar -->

    <div class="row row_dashboard"> 
        <div class="col-sm-3 col_dashboard_main">
            <div class="local_time_con">
                <div id="pst-container">
                    <div id="pst-time" class="local_time"></div>
                </div>
            </div>
            <h2 class="side_con_title">
                Available Jobs
            </h2>
            <div class="adjust_con_dash"> <!-- Search Field -->
                <input class="form-control searchbar_dash" type="text" id="filter" placeholder="Search.." onkeyup="searchTrans()">
            </div> 
            <div class="row" id="card-lists"> 
                <div class="card available_job_con"> 
                    <div class="d-flex card_body arrow_right_con">
                        <h3 class="card-title service_name"> 
                            Light Cleaning
                        </h3>
                        <div>
                        <a href="/customer/cleaner_job">
                            <span class="right"></span>
                        </a>
                        </div>
                    </div>
                    <h6 class="customer_info">
                        <b>Customer:</b> Lyka C. Casilao
                    </h6>
                    <h6 class="customer_info"> 
                        09341562384
                    </h6>
                    <h6 class="customer_info">
                        Palestina, Pili, Camarines Sur
                    </h6>
                </div> 
                <div class="card available_job_con"> 
                    <div class="d-flex card_body arrow_right_con">
                        <h3 class="card-title service_name"> 
                            General Cleaning
                        </h3>
                        <div>
                        <a href="/customer/cleaner_job">
                            <span class="right"></span>
                        </a>
                        </div>
                    </div>
                    <h6 class="customer_info">
                        <b>Customer:</b> Lyka C. Casilao
                    </h6>
                    <h6 class="customer_info"> 
                        09341562384
                    </h6>
                    <h6 class="customer_info">
                        Palestina, Pili, Camarines Sur
                    </h6>
                </div> 
                <div class="card available_job_con"> 
                    <div class="d-flex card_body arrow_right_con">
                        <h3 class="card-title service_name"> 
                            Deep Cleaning
                        </h3>
                        <div>
                        <a href="/customer/cleaner_job">
                            <span class="right"></span>
                        </a>
                        </div>
                    </div>
                    <h6 class="customer_info">
                        <b>Customer:</b> Lyka C. Casilao
                    </h6>
                    <h6 class="customer_info"> 
                        09341562384
                    </h6>
                    <h6 class="customer_info">
                        Palestina, Pili, Camarines Sur
                    </h6>
                </div> 
            </div>
        </div>
        <div class="container mt-5 calendar_con">
            <div id='full_calendar_events'></div>
        </div>
    </div> <!-- End of Sidebar -->

    <script>
        $(document).ready(function () {

            var SITEURL = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#full_calendar_events').fullCalendar({
                editable: true,
                editable: true,
                events: SITEURL + "/calendar-event",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (event_start, event_end, allDay) {
                    var event_name = prompt('Event Name:');
                    if (event_name) {
                        var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                        var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "/calendar-crud-ajax",
                            data: {
                                event_name: event_name,
                                event_start: event_start,
                                event_end: event_end,
                                type: 'create'
                            },
                            type: "POST",
                            success: function (data) {
                                displayMessage("Event created.");

                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: event_name,
                                    start: event_start,
                                    end: event_end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                    $.ajax({
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            title: event.event_name,
                            start: event_start,
                            end: event_end,
                            id: event.id,
                            type: 'edit'
                        },
                        type: "POST",
                        success: function (response) {
                            displayMessage("Event updated");
                        }
                    });
                },
                eventClick: function (event) {
                    var eventDelete = confirm("Are you sure?");
                    if (eventDelete) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/calendar-crud-ajax',
                            data: {
                                id: event.id,
                                type: 'delete'
                            },
                            success: function (response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                displayMessage("Event removed");
                            }
                        });
                    }
                }
            });
        });

        function displayMessage(message) {
            toastr.success(message, 'Event');            
        }

    </script>
</body>
@endsection