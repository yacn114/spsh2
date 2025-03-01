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
                        <form method="post" action="{{route('storeProduct')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group smalls">
                                <label>نام محصول</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group smalls">
                                <label>اسلاگ</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="form-group smalls">
                                <label>قیمت</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                            <div class="form-group smalls">
                                <label>قیمت هیجانی</label>
                                <input type="number" name="discount" class="form-control">
                            </div>
                            <div class="form-group smalls">
                                <label>درصد تخفیف</label>
                                <input type="number" name="discount_percent" class="form-control">
                            </div>
                            <div class="form-group smalls">
                                <label>دسته بندی</label>
                                <select name="category[]" class="form-control" multiple style="height: auto">
                                    @foreach ($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group smalls">
                                <label>انتخاب زبان</label>
                                <select name="language" class="form-control">
                                    <option value="" selected>لطفا انتخاب کن</option>
                                    <option value="fa">پارسی</option>
                                    <option value="en">انگلیسی</option>
                                </select>
                            </div>
                            <div class="form-group smalls">
                                <label>کپشن</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group smalls">
                                <label>نتیجه</label>
                                <textarea name="result" class="form-control"></textarea>
                            </div>
                            <div class="form-group smalls">
                                <label>سطح دوره</label>
                                <select name="tutorial_level" class="form-control">
                                    <option value="" selected>لطفا انتخاب کن</option>
                                    <option value="level1">مبتدی</option>
                                    <option value="level2">متوسط</option>
                                    <option value="level3">پیشرفته</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>تصویر محصول</label>
                                <input type="file" name="image" class="form-control">
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
