<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin Customer Page</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.menu-toggle').click(function(){
                    $('nav').toggleClass('active')
                })
            })
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_admin.css')}}">
</head>
<body>
    <!-- Navbar -->  
    <header>
        <div class="logo"> SWEEP </div>
        <nav>
            <ul>
                <li><a  href="admin_dashboard">Home</a></li>
                <li><a href="admin_services">Services</a></li>
                <li><a href="admin_transaction">Transaction</a></li>
                <li><a  class="active" href="admin_user">User</a></li>
                <li><a href="admin_payroll">Payroll</a></li>
                <div class="profile_btn">
                    <button class="btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" >
                        <img class="profile_img" src="{{ asset('images/profile-icon-white-7.png') }}">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a>
                    </div>
                </div> 
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header>
    <div class="row"> 
        <a class="user_type_btn_customer" id="active" href="admin_user">
            ALL 
            <p class="total_value">(63)</p>
        </a>
        <a class="user_type_btn_customer" href="admin_customer">
            CUSTOMER 
            <p class="total_value">(63)</p>
        </a>
        <a class="user_type_btn_customer" href="admin_cleaner">
            CLEANER 
            <p class="total_value">(63)</p>
        </a>
    </div>
    <div class="search_con">
        <div>
            <input class="searchbar" type="text" placeholder="Search..">
            <button class="search_btn">Search</button>
        </div>
    </div>
    <p class="show_info"> Showing 1-10 of 63 results </p>
    <div class="result_con">
        <p class="show_info"> Results per page: </p>
        <button class="dropdown" id="number">10<span class="caret"></span></button>
    </div>

    <div class="user_table_con">
        <div class="table_detail_con">
            <table class="table user_table" id="user_table">
                <thead>
                    <tr class="user_table_row">
                        <th class="text-center user_table_header">First Name</th>
                        <th class="text-center user_table_header">Last Name</th>
                        <th class="text-center user_table_header">Age</th>
                        <th class="text-center user_table_header">Address</th>
                        <th class="text-center user_table_header">Email Address</th>
                        <th class="text-center user_table_header">Contact Number</th>
                        <th class="text-center user_table_header">Valid ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="user_table_row">
                        <td class="user_table_data"></td>
                        <td class="user_table_data"></td>
                        <td class="user_table_data"></td>
                        <td class="user_table_data"></td>
                        <td class="user_table_data"></td>
                        <td class="user_table_data"></td>
                        <td class="user_table_data"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
