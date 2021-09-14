<!DOCTYPE html>
<html lang="en">
<head>
    <title>    
        Cleaner Register 
    </title>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- Scripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_admin.css')}}">
</head>
<body class="reg_cleaner_body">
    <div class="register_con">
        <div class="row">
            <h4 class="register_label">
                Create an Account
            </h4>
            <form action="{{ route('auth.save') }}" method="post">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control reg_fields" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}">
                    <span class="text-danger">
                        @error('full_name'){{ $message }} @enderror
                    </span>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control reg_fields" name="age" placeholder="Age" value="{{ old('age') }}">
                    <span class="text-danger">
                        @error('age'){{ $message }} @enderror
                    </span>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control reg_fields" name="address" placeholder="Address" value="{{ old('address') }}">
                        <span class="text-danger">
                            @error('address'){{ $message }} @enderror
                        </span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control reg_fields" name="email" placeholder="Email Address" value="{{ old('email') }}">
                    <span class="text-danger">
                        @error('email'){{ $message }} @enderror
                    </span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control reg_fields" name="contact_number" placeholder="Contact Number" value="{{ old('contact_number') }}">
                    <span class="text-danger">
                        @error('contact_number'){{ $message }} @enderror
                    </span>
                </div>
                <div class="form-group">
                    <div class="password_con">
                        <input type="password" class="form-control login_fields @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                        <div class="eye_con">
                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('password'){{ $message }} @enderror
                    </span>
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control login_fields @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required autocomplete="current-password">        
                </div>
                <div class="upload_con">
                    <div class="form-group">
                        <label class="upload_label">
                            Profile Picture
                        </label>
                        <div class="file_upload_con">
                            <i class="bi bi-file-earmark-image"></i>
                        </div>
                        <input type="file" name="profile_picture" class="form-control upload_file">
                        <span class="text-danger">
                            @error('profile_picture'){{ $message }} @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="upload_label">
                            Valid ID
                        </label>
                        <div class="file_upload_con">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <input type="file" name="valid_id" class="form-control upload_file">
                        <span class="text-danger">
                            @error('valid_id'){{ $message }} @enderror
                        </span>
                        <div class="further_info_id_con">
                            <strong>Recommended ID</strong>
                            <br>
                            <i class="further_info">
                                UMID, Driver's License, Philhealth Card, SSS ID, Passport, Voter's ID and Student's ID.
                            </i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="upload_label">
                            Requirement
                        </label>
                        <div class="file_upload_con">
                            <i class="bi bi-file-richtext"></i>
                        </div>
                        <input type="file" name="requirement" class="form-control upload_file">
                        <span class="text-danger">
                            @error('requirement'){{ $message }} @enderror
                        </span>
                        <div class="further_info_con">
                            <strong>Recommended Document</strong>
                            <br>
                            <i class="further_info">
                                NSO/PSA Birth Certificate, Barangay Clearance, Medical Certificate, Good Moral Certificate and Matriculation Form (if currently enrolled).
                            </i>
                            <br>
                            <p class="further_info">
                                *Please identify what requirement did you uploaded through the description field below.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control reg_fields" name="description" placeholder="Description" value="{{ old('description') }}">
                    <span class="text-danger">
                        @error('description'){{ $message }} @enderror
                    </span>
                </div>
                <button type="submit" class="register_cleaner_btn">
                    Sign Up
                </button>
                <br>
                <a class="login_link_btn" href="{{ route('cleaner.cleaner_login') }}"> 
                    I already have an account, Sign In
                </a>
        </div>
    </div>
    <!-- Toggle Password Visibility -->
    <script type="text/javascript">
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
        });
    </script>
</body>
</html>