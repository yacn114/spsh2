@extends('profile.base')
@section('content')

<div class="row">
    <div class="col-xl-5 col-lg-6 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">


                        <div class="form-group smalls">
                            <a href="{% url 'Wallet:pay_afzayesh' %}"><button class="btn theme-bg text-white">افزایش موجودی</button></a>
                          <a href="{{route('history')}}"> <button class="btn btn-info text-white">تاریخچه موجودی</button></a>
                            
                        </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-lg-6 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">انتقال موجودی</h6>
                </div>
            </div>

@include('profile.messages')
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <form method="post" action="{{route('moveStore')}}">
                        @csrf
                        <div class="form-group smalls">
                            <label>مبلغ*</label>
                            <input type="number" name="balance" class="form-control">
                            <h6 style="font-family: sans-serif;"> <span style="font-family: IRANSans;">قابل انتقال</span> : {{number_format($user->balance)}} </h6>
                        </div>
                        <div class="form-group smalls">
                            <label>نام کاربری*</label>
                            <input type="text" name="username" class="form-control">


                        </div>
                            
            

                        <div class="form-group smalls">
                            <button class="btn btn-warning" style="color: whitesmoke;" type="submit">انتقال</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

            <div class="alert alert-info" role="alert">
                <b>نکته !</b>
                <p>
                    <ul>
                        <li>حداقل پرداخت 100 هزار تومان میباشد</li>
                        <li>برداشت موجود امکان پذیر نمیباشد پس در هنگام واریز دقت فرمایید</li>
                        <li>شما از طریق انتقال موجود میتوانید به دوستان خود موجودی انتقال دهید</li>
                    </ul>
                </p>
              </div>

    
</div>

@endsection