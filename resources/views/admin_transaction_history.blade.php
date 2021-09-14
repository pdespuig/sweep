<?php
    use App\Models\Booking;
    use App\Models\Customer;
    use App\Models\Service;
    use App\Models\Price;
    use App\Models\Address;
    use App\Models\User;
    use App\Models\Cleaner;
?>

@extends('head_extention_admin') 

@section('content')
    <title>
        Admin Transaction History Page
    </title>

<body>
    <header> <!-- Navbar -->
        <div class="logo"> 
            SWEEP 
        </div>
        <nav>
            <ul>
                <li>
                    <a href="admin_dashboard">
                        Home
                    </a>
                </li>
                <li>
                    <a href="admin_services">
                        Services
                    </a>
                </li>
                <li>
                    <a href="admin_transaction"  class="active">
                        Transaction
                    </a>
                </li>
                <li>
                    <a href="admin_user">
                        User
                    </a>
                </li>
                <li>
                    <a href="admin_payroll">
                        Payroll
                    </a>
                </li>
                <div class="profile_btn">
                    <button class="btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" >
                        <img class="profile_img" src="/img/user.png">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('auth.logout') }}">
                            Logout
                        </a>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header> <!-- End of Navbar -->

    <div class="row user_btn_con"> <!-- Sub Header -->  
        <a class="user_type_btn"  href="admin_transaction">
            TRANSACTION 
            <p class="total_value">
                ()
            </p>
        </a>
        <a class="user_type_btn active_sub" href="admin_transaction_history">
            HISTORY 
            <p class="total_value">
                ()
            </p>
        </a>
    </div>
  
    <div class="trans_his_con">  <!-- Transaction History Table -->
        <div class="table_detail_con">
            <table class="table history_table" id="history_table">
                <thead>
                    <tr class="table_trans_his_row">
                        <th class="user_table_trans_his_header">
                            Customer Name
                        </th>
                        <th class="user_table_trans_his_header">
                            Service Name
                        </th>
                        <th class="user_table_trans_his_header">
                            Property Type
                        </th>
                        <th class="user_table_trans_his_header">
                            Service Fee
                        </th>
                        <th class="user_table_trans_his_header">
                            Mode of Payment
                        </th>
                        <th class="user_table_trans_his_header">
                            Cleaner ID
                        </th>
                        <th class="user_table_trans_his_header">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php
                        $booking_data = Booking::Where('status', 'Completed')->get();
                    ?>
                    @foreach($booking_data as $key => $value)

                    <?php
                        $service_data = Service::Where('service_id', $value->service_id )->get();
                        $user_data = User::Where('user_id', $value->customer_id )->get();
                        $price = Price::Where('property_type', $value->property_type )->get();
                    ?>
                    @foreach($service_data as $key => $data)
                    @foreach($price as $key => $price_data)
                    @foreach($user_data as $key => $user)

                    <tr class="table_trans_his_row">
                        <th class="user_table_trans_his_header">
                            
                        </th>
                        <td class="user_table_data">
                            
                        </td>
                        <td class="user_table_data">
                            
                        </td>
                        <td class="user_table_data">
                        
                        </td>
                        <td class="user_table_data">
                            
                        </td>
                        <td class="user_table_data">
                            
                        </td>
                        <td class="user_table_data">
                            
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach

                    <tr class="table_trans_his_row">
                        <th class="user_table_data">
                            Leah L. Cortez
                        </th>
                        <td class="user_table_data">
                            Light Cleaning
                        </td>
                        <td class="user_table_data">
                            Apartments 
                        </td>
                        <td class="user_table_data">
                            P342.00
                        </td>
                        <td class="user_table_data">
                            GCash
                        </td>
                        <td class="user_table_data">
                            CL001, CL002
                        </td>
                        <td class="user_table_data">
                            Completed
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="table_trans_his_row">
                        <th class="user_table_trans_his_header">
                            Customer Name
                        </th>
                        <th class="user_table_trans_his_header">
                            Service Name
                        </th>
                        <th class="user_table_trans_his_header">
                            Property Type
                        </th>
                        <th class="user_table_trans_his_header">
                            Service Fee
                        </th>
                        <th class="user_table_trans_his_header">
                            Mode of Payment
                        </th>
                        <th class="user_table_trans_his_header">
                            Cleaner ID
                        </th>
                        <th class="user_table_trans_his_header">
                            Status
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div> <!-- End of Transaction History Table -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    
    <!-- Datatables Scripts -->
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>

    <!-- Datatable -->
    <script>
        $(document).ready( function () {
            $('#history_table').DataTable();
        } );
    </script>
</body>
@endsection