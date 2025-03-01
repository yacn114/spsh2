@extends('profile.base')
@section('content')


<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="dashboard_wrap">
                    
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <h3>ساخت محصول</h3>
                    </div>
                </div>
    
    @include('profile.messages')
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form method="post" action="{{route('update-Product',$product)}}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group smalls">
                                <label>نام محصول</label>
                                <input type="text" name="name" class="form-control" value="{{$product->name}}">
                                
                            </div>
                            <div class="form-group smalls">
                                <label>اسلاگ</label>
                                <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
                            </div>
                            <div class="form-group smalls">
                                <label>قیمت</label>
                                <input type="number" name="price" class="form-control" value="{{$product->price}}">
                            </div>
                            <div class="form-group smalls">
                                <label>قیمت هیجانی</label>
                                <input type="number" name="discount" class="form-control" value="{{intval($product->discount_action())}}">
                            </div>
                            <div class="form-group smalls">
                                <label>درصد تخفیف</label>
                                <input type="number" name="discount_percent" class="form-control"  value="{{$product->discount_percent}}">
                            </div>
                            <div class="form-group smalls">
                                <label>دسته بندی</label>
                                
                                <select name="category[]" class="form-control" multiple style="height: auto">
                                    
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}" 
                                            @if(isset($product) && $product->categories->contains($cat->id)) selected @endif>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                
                            </div>
                       
                            <div class="form-group smalls">
                                <label>انتخاب زبان</label>
                                
                                <select name="language" class="form-control">
                                    <option value="" selected>لطفا انتخاب کن</option>
                                    
                                    <option value="fa" @if($product->language == "fa") selected @endif>پارسی</option>
                                    <option value="en" @if($product->language == "en") selected @endif>انگلیسی</option>
                                    
                                </select>
                            </div>
                            <div class="form-group smalls">
                                <label>کپشن</label>
                                <textarea name="description" class="form-control" >{{$product->description}}</textarea>
                            </div>
                            <div class="form-group smalls">
                                <label>نتیجه</label>
                                <textarea name="result" class="form-control">{{$product->result}}</textarea>
                            </div>
                            <div class="form-group smalls">
                                <label>سطح دوره</label>
                                
                                <select name="tutorial_level" class="form-control">
                                    <option value="" selected>لطفا انتخاب کن</option>
                                    
                                    <option value="level1" @if($product->tutorial_level == "level1") selected @endif >مبتدی</option>
                                    <option value="level2" @if($product->tutorial_level == "level2") selected @endif>متوسط</option>
                                    <option value="level3" @if($product->tutorial_level == "level3") selected @endif>پیشرفته</option>
                                    

                                    
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