<html lang="en">


<!-- Mirrored from jituchauhan.com/influence/landingpage/influence/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2019 09:21:27 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- Bootstrap CSS -->


    <!-- <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/circular-std/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="/"><h1>PERLACK</h1></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}"> 
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="name" type="text" placeholder="Name" autocomplete="off"  name="name" value="{{ old('name') }}" required autofocus>
                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" type="email" placeholder="Email" autocomplete="off"  name="email" value="{{ old('email') }}" required autofocus>
                         @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <div class="form-group">
                        <input class="form-control form-control-lg" id="phone_number" type="text" placeholder="Phone Number" autocomplete="off"  name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                         @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                    </div>



                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password" required>
                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group">

                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

                    </div>

                    <div class="form-group">
                        <input class="form-control form-control-lg" id="st_house" type="text" placeholder="Street And House Number" name="st_house" required>
                         @if ($errors->has('st_house'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('st_house') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <div class="form-group">
                        <input class="form-control form-control-lg" id="plz" type="text" placeholder="PLZ and Town Name" name="plz" required>
                         @if ($errors->has('plz'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plz') }}</strong>
                                    </span>
                                @endif
                    </div>




                    <button type="submit" class="btn btn-primary btn-lg btn-block" href="../index.html">Sign up</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                {{-- <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div> --}}
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="/customer/login" class="footer-link">Login</a>
                </div>

            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/influence/landingpage/influence/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2019 09:21:27 GMT -->
</html>
