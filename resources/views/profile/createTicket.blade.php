@extends('profile.base')
@section('content')
<div class="row justify-content-between">

    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            
            
                <div class="dashboard_wrap">
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                            <h3>ساخت تیکت جدید</h3>
                        </div>
                    </div>
        
        @include('profile.messages')
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <form method="post" action="{{route('ticketStore')}}">
                                @csrf
                                <div class="form-group smalls">
                                    <label>تیکت درمورد محصول؟</label>
                                    <select name="product" class="form-control">
                                        <option value="">لطفا محصول مورد نظر خود را انتخاب کنید</option>
                                        @foreach ($products as $product)
                                        <option value="{{$product->product->id}}">{{$product->product->name}}</option>
                                            
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group smalls">
                                    <label>دیگر عنوان ها</label>
                                    <select name="other" class="form-control">
                                        <option value="">لطفا عنوان مورد نظر خود را انتخاب کنید</option>
                                        <option value="reportBug">گزارش باگ</option>
                                        <option value="license">درخواست لایسنس</option>
                                        <option value="finance">بخش مالی</option>
                                        <option value="technical">بخش فنی</option>
                                        <option value="manager">مدیریت</option>
                                    </select>
                                </div>
                                <div class="form-group smalls">
                                    <label>متن تیکت</label>
                                    <textarea name="description" class="form-control"></textarea>
                                    
                                </div>
                            
                    
        
                                <div class="form-group smalls">
                                    <button class="btn btn-warning" type="submit">ثبت تیکت</button>
                                </div>
                            </form>
                        </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection