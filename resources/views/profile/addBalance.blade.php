@extends('profile.base')
@section('content')


<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="dashboard_wrap">
                    
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <h3>اضافه یا کم کردن موجودی</h3>
                    </div>
                </div>
    
    @include('profile.messages')
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form method="post" action="{{route('edit-balance')}}">
                            @csrf
                            @method('patch')
                            <div class="form-group smalls">
                                <label>نام کاربری شخص</label>
                                <input type="text" name="username" class="form-control">
                                
                            </div>
                            <div class="form-group smalls">
                                <label>مبلغ</label>
                                <input type="number" name="amount" class="form-control">
                            </div>
                            <div class="form-group smalls">
                                <label>کم کردن</label>
                                <input type="checkbox" name="delete">
                            </div>
                            
                                        <div class="form-group smalls">
                                            <label>اضافه کردن</label>
                                            <input type="checkbox" name="add">
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