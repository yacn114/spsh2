<!DOCTYPE html>
<html lang="fa">
<head>
    <title>ورود کاربر</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/auth/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="/auth/css/main.css">
    <link rel="stylesheet" type="text/css" href="/auth/css/rtl.css">
    <!--===============================================================================================-->
</head>
<body dir="rtl">
    <div class="limiter">
    <div class="container-login100" style="background-color: #adbfac ;">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form method='post' action="{{ route('login-store') }}" class="login100-form validate-form flex-sb flex-w">


                @foreach($errors->all() as $error)
                <div class="alert alert-warning" role="alert">
                    {{$error}}
                </div>
                @endforeach
                <span class="login100-form-title myfont">
                    ورود به سایت
                </span>


                <div class="p-t-31 p-b-9">
                    <span class="txt1 myfont">
                        ایمیل
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input type="text" name="email" class="input100" required placeholder="ایمیل خود رو وارد کن">

                    <span class="focus-input100"></span>
                </div>

                <div class="p-t-13 p-b-9">
                    <span class="txt1 myfont">
                        رمزعبور
                    </span>

                    <a href="#" class="txt2 bo1 m-l-5 myfont">
                        یادت رفته؟
                    </a>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input type="password" name="password" class="input100" required placeholder="گذرواژه خودت رو وارد کن">
                    <span class="focus-input100"></span>
                </div>
                @csrf

                <div class="container-login100-form-btn m-t-17">

                    <button class="login100-form-btn myfont" type="submit">sigin</button>

                </div>


                <div class="w-full text-center p-t-55 ">
                    <span class="txt2 myfont">
                        عضو نیستی؟
                    </span>

                    <a href="{{route('signup')}}" class="txt2 bo1 myfont">
                        sign-up
                    </a>
                </div>
            </form>
            <h3 class="with">یا ورود با</h3>
            google
        </div>
    </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="/auth/vendor/bootstrap/js/popper.js"></script>
    <script src="/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/auth/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/auth/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/auth/vendor/daterangepicker/moment.min.js"></script>
    <script src="/auth/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/auth/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/auth/js/main.js"></script>

</body>
</html>
