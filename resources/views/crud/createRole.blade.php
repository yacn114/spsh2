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

   <div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">

    <h2>ساخت نقش و دسترسی</h2>

   @include('profile.messages')
    <form method="post" action="{{ route('storeRole') }}">
        @csrf
    
        <div>
            <label for="name" value='name'>
            <input type="text" id="name" name="name" class="form-control" required autofocus autocomplete="name" >
            
        </div>
    
        
        <div class="form-group smalls">
            @foreach ($permission as $permissions)
            <label class="flex items-center">
                <input id="name" name="Permission[]" value="{{$permissions->id}}" style="margin: 10px" type="checkbox" class="mt-1 mr-2"  />
                <span>{{ $permissions->nameF}}</span>
            </label><br>
            @endforeach
            <label class="flex items-center">
                <input id="name" name="Permission[]" value="all" style="margin: 10px" type="checkbox" class="mt-1 mr-2"  />
                <span>همه دسترسی ها</span>
            </label><br>
        </div>
    
        
        <div class="form-group smalls">
            <button class="btn btn-warning" type="submit">ذخیره</button>
        </div>
    </form>

</div>
</div>
</div>
@endsection
