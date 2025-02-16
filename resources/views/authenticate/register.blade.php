<!DOCTYPE html>
<html lang="fa">
<head>
    <title>نام نویسی</title>
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
            <form method='POST' id="signup_form" action="{{route('signup-store')}}" class="login100-form validate-form flex-sb flex-w">

                @csrf
                <span class="login100-form-title myfont">
                    ثبت نام در سایت
                </span>
                @if($errors->all())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                @endif

                <div class="p-t-31 p-b-9">
                    <span class="txt1 myfont">
                        نام کاربری
                    </span>
                </div>

                <div class="wrap-input100 validate-input">

                    <input type="text" class="input100" name="name" required placeholder="نام کاربری">
                    <span class="focus-input100"></span>
                </div>
                <div class="p-t-31 p-b-9">
                  <span class="txt1 myfont">
                     نشانی اینترنتی *
                  </span>
                </div>

                <div class="wrap-input100 validate-input">


                    <input type="email" name="email" class="input100" required placeholder="نشانی اینترنتی">
                    <span class="focus-input100"></span>
                </div>
                <div class="p-t-31 p-b-9">
                  <span class="txt1 myfont">
                    گذرواژه*
                  </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">

                        <input type="password" name="password" class="input100" required placeholder="گذرواژه">
                    <span class="focus-input100"></span>
                </div>
                <div class="p-t-31 p-b-9">
                <span class="txt1 myfont">
                  تکرار گذرواژه*
                </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">

                    <input type="password" name="password_confirmation" class="input100" required placeholder="تکرار گذرواژه">

                    <span class="focus-input100"></span>
                </div>


                <div class="container-login100-form-btn m-t-17">
                     
                    <button type="submit" class="login100-form-btn myfont">signup &raquo;</button>
                </div>
                <br>
                <h4 class="with">یا ثبت نام با</h4>
                <a href="#" class="btn-google m-b-20 col-12" dir="ltr">
                    <img src="/auth/images/icons/icon-google.png" alt="GOOGLE">
                    Google
                </a>

                <div class="w-full text-center p-t-55 ">
                    <span class="txt2 myfont">
                        عضوی؟
                    </span>

                    <a href="{{route('login')}}" class="txt2 bo1 myfont">
                        sign-in
                    </a>
                </div>
            </form>

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
</div>
</body>
</html>
