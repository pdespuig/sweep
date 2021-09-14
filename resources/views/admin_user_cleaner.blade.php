<?php
    use App\Models\User;
    use App\Models\Clearance;
    use App\Models\Cleaner;
    use App\Models\Customer;
?>
@extends('head_extention_admin') 

@section('content')
    <title>
        Admin Cleaner Page
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
                    <a href="admin_transaction">
                        Transaction
                    </a>
                </li>
                <li>
                    <a href="admin_user" class="active">
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

    <?php
        $count = User::count();
        $count_customer = Customer::count();
        $count_cleaner = Cleaner::count();
    ?> 

    <div class="row user_btn_con"> <!-- Sub Header --> 
        <a class="user_type_btn_cleaner" href="admin_user">
            ALL 
            <p class="total_value">
                (<?php echo $count ?>) 
            </p>
        </a>
        <a class="user_type_btn_cleaner" href="admin_user_customer">
            CUSTOMER 
            <p class="total_value">
                (<?php echo $count_customer ?>) 
            </p>
        </a>
        <a class="user_type_btn_cleaner active_sub" href="admin_user_cleaner">
            CLEANER 
            <p class="total_value">
                (<?php echo $count_cleaner ?>) 
            </p>
        </a>
    </div>

    <div class="user_table_con"> <!-- Cleaner Tabler --> 
        <div class="table_detail_con">
            <table class="table user_table" id="user_table">
                <thead>
                    <tr class="user_table_row">
                        <th class="user_table_header">
                            Full Name
                        </th>
                        <th class="user_table_header">
                            Age
                        </th>
                        <th class="user_table_header">
                            Address
                        </th>
                        <th class="user_table_header">
                            Email Address
                        </th>
                        <th class="user_table_header">
                            Contact Number
                        </th>
                        <th class="user_table_header">
                            Valid ID
                        </th>
                        <th class="user_table_header">
                            Description
                        </th>
                        <th class="user_table_header">
                            Requirement
                        </th>
                        <th class="user_table_header"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $user_data = User::Where('user_type', 'Cleaner')->get();
                    ?>
                    @foreach($user_data as $key => $value)

                    <?php
                        $cleaner_id = Cleaner::Where('user_id', $value->user_id)->value('cleaner_id');
                        $cleaner_data = Cleaner::Where('user_id', $value->user_id)->get();
                        $clearance_data = Clearance::Where('cleaner_id', $cleaner_id)->get();
                    ?>
                    @foreach($cleaner_data as $key => $cleaner)
                    @foreach($clearance_data as $key => $clearance)

                    <tr class="user_table_row">
                        <td class="user_table_data">
                            {{ $value->full_name }}
                        </td>
                        <td class="user_table_data">
                            {{ $cleaner->age }}
                        </td>
                        <td class="user_table_data">
                            {{ $cleaner->address }}
                        </td>
                        <td class="user_table_data">
                            {{ $value->email }}
                        </td>
                        <td class="user_table_data">
                            {{ $value->contact_number }}
                        </td>
                        <td class="user_table_data">
                            {{ $value->valid_id }}
                        </td>
                        <td class="user_table_data">
                            {{ $clearance->description }}
                        </td>
                        <td class="user_table_data">
                            {{ $clearance->requirement }}
                        </td>
                        <td class="user_table_data">
                            @if($value->account_status == "To_verify")
                                <div class="verify_con">
                                    <button class="verify_btn">
                                        VERIFY
                                    </button>
                                </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                    @endforeach 
                </tbody>
                <tfoot>
                    <tr class="user_table_row">
                        <th class="user_table_header">
                            Full Name
                        </th>
                        <th class="user_table_header">
                            Age
                        </th>
                        <th class="user_table_header">
                            Address
                        </th>
                        <th class="user_table_header">
                            Email Address
                        </th>
                        <th class="user_table_header">
                            Contact Number
                        </th>
                        <th class="user_table_header">
                            Valid ID
                        </th>
                        <th class="user_table_header">
                            Description
                        </th>
                        <th class="user_table_header">
                            Requirement
                        </th>
                        <th class="user_table_header"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div> <!-- End of Cleaner Table -->

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
            $('#user_table').DataTable();
        } );
    </script>
</body>
@endsection
