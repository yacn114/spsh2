@extends('profile.profile')
@section('content')

<div class="row justify-content-between">
    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="dashboard_wrap d-flex align-items-center justify-content-between">
            <div class="arion">
                <nav class="transparent">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{% url 'home:home' %}">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">حساب کاربری</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

<div class="row">
    <div class="col-xl-7 col-lg-6 col-md-12">
        
    </div>
    

</div>
<div class="row justify-content-between">
    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
        
            <ul style="list-style: disc;">
                <h5>اطلاعیه :</h5>
                <li><h6>کاربر ({{$user->name}}) به سایت اوپوزکس خوش آمدید.</h6></li>
                
                <li><h6>{{$data->about}}</h6></li>
                
            </ul>	
        
    </div>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
        
            <ul style="list-style: disc;">
                 {{-- <h5>تکمیل کردن پروفایل :</h5> --}}
                <a href="{{route('complete')}}">تکمیل پروفایل</a>
                

                
            </ul>	
        
    </div>
    </div>
</div>
@endsection