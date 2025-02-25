@extends('profile.base')
@section('content')


<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="dashboard_wrap">
                    
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <h3>فراموشی رمز عبور</h3>
                    </div>
                </div>
    
    @include('profile.messages')
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form method="post" action="{{route('Password-Reset')}}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group smalls">
                                <label>ایمیل شما</label>
                                <input type="email" name="email" class="form-control">
                                
                            </div>
                        
                
    
                            <div class="form-group smalls">
                                <button class="btn btn-warning" type="submit">ارسال ایمیل</button>
                            </div>
                        </form>
                    </div>
                
                
            </div>
        </div>
        </div>
    </div>
</div>
        
@endsection