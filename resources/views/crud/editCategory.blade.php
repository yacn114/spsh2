@extends('profile.base')
@section('content')


<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="dashboard_wrap">
                    
                <div class="row">
                    <h3>ویرایش دسته بندی</h3>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-info" href="{{route('list-category')}}"> لیست دسته بندی ها</a>
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    </div>
                </div>
    
    @include('profile.messages')
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form method="post" action="{{route('update-category',$category)}}">
                            @csrf
                            @method("PATCH")
                            <div class="form-group smalls">
                                <label>نام دسته بندی</label>
                                <input type="text" name="name" value="{{$category->name}}" class="form-control">
                                
                            </div>
                            <div class="form-group smalls">
                                <label>اسلاگ</label>
                                <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
                            </div>
                       
                            <div class="form-group smalls">
                                <label>دسته بندی کلی</label>
                                <select name="other" class="form-control">
                                    <option value="" selected>لطفا انتخاب کن</option>
                                    @foreach ($catcat as $cat)

                                    <option value="{{$cat->id}}" @if($cat->id == $cate->id)selected @endif>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                       
                            <div class="form-group smalls">
                                <label>دسته بندی</label>
                                
                                <select name="category" class="form-control">
                                    <option value="" selected>لطفا انتخاب کن</option>
                                    @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}" @if($cat->id == $category->id)selected @endif>{{$cat->name}}</option>
                                    @endforeach
                                </select>
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
        
@endsection