@extends('profile.base')
{{-- @section('content')


<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="dashboard_wrap">
                    
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <h3>اطلاعات سایت</h3>
                    </div>
                </div>
    
    @include('profile.messages')
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form method="post" action="{{route('CategoryCrudStore')}}">
                            @csrf
                            <div class="form-group smalls">
                                <label>نام انگلیسی</label>
                                <input type="text" name="nameE" class="form-control">
                                
                            </div>
                            <div class="form-group smalls">
                                <label>نام پارسی</label>
                                <input type="text" name="nameF" class="form-control">
                            </div>
                       
                 
                       
                            
                            <div class="form-group smalls">
                                <button class="btn btn-warning" type="submit">ذخیره</button>
                            </div>
                        </form>
                    </div>
                
                
            </div>
        </div>
        </div>
    </div>
</div>
        
@endsection --}}

@section('content')
<div class="container">
    <h2>مدیریت اطلاعات سایت</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="storeData" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">نام انگلیسی سایت:</label>
            <input type="text" name="nameE" class="form-control" value="{{ old('nameE', $siteData->nameE ?? '') }}">
            @error('nameE') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">نام فارسی سایت:</label>
            <input type="text" name="nameF" class="form-control" value="{{ old('nameF', $siteData->nameF ?? '') }}">
            @error('nameF') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">لوگو سایت:</label>
            <input type="file" name="logo" class="form-control">
            @if(isset($siteData->logo))
                <img src="{{ asset($siteData->logo) }}" width="100">
            @endif
            @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">درباره سایت:</label>
            <textarea name="about" class="form-control">{{ old('about', $siteData->about ?? '') }}</textarea>
            @error('about') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">آدرس:</label>
            <input type="text" name="address" class="form-control" value="{{ old('address', $siteData->address ?? '') }}">
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">شماره تلفن:</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $siteData->phone ?? '') }}">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">ایمیل:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $siteData->email ?? '') }}">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">ذخیره اطلاعات</button>
    </form>
</div>
@endsection
