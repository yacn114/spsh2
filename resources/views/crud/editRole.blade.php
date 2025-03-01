@extends('profile.base')

@section('content')

   <div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">

    <h2>ویرایش نقش و دسترسی</h2>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>در نظر داشته باشید برای دادن همه دسترسی ها باید همه تیک هارو بردارین و فقط (همه دسترسی ها) فعال باشه</p>        
    </div>
   @include('profile.messages')
    <form method="post" action="{{ route('updaterole',$role) }}">
        @csrf
        @method("PATCH")
    
        <div>
            <label for="name" value='name'>
            <input type="text" id="name" name="name" class="form-control" required autofocus autocomplete="name" value="{{$role->name}}" >
            
        </div>
    
        
        <div class="form-group smalls">
            @foreach ($permission as $permissions)
            <label class="flex items-center">

        <input id="name" name="Permission[]" value="{{ $permissions->id }}" style="margin: 10px" type="checkbox" class="mt-1 mr-2"
            @checked($role->permissions->contains('id', $permissions->id))>

            
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
