@extends('main.base')
@section('title')
    {{$data->nameE}} | {{$data->nameF}}
@endsection
@section('content')

    <div class="hero_banner image-cover" style="background:#00563B;height:600px" data-overlay="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 col-sm-12">
                    <div class="simple-search-wrap">
                        <div class="hero_search-2 text-center">
                            <form method="get" action="{{route('search')}}">
                                @csrf
                                <h1 class="banner_title mb-4 font-2">میتونی دوره هارو سرچ کنی! <br>( اگه هنوز مطمعن نیستی از کجا شروع کنی راهنمایی رو یه سر بزن )</h1>
                                <div class="input-group simple_search">
                                    <i class="fa fa-search ico"></i>
                                    <input type="text"  name="search" class="form-control" placeholder="نام دوره آموزشی...">
                                    <div class="input-group-append">
                                        <button class="btn theme-bg" type="submit">جستجو</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="gray" style="background-color:whitesmoke;">
        <div class="container">
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h3 class="font-2">دوره های آموزشی <span style="color:rgb(193, 0, 0)"><i class="fas fa-fire"></i> هیجانی </span></h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                 <!-- Single Grid -->


                 <div class="row justify-content-center">
                    @foreach ($product_discount as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
            </div>
            

<hr>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 mt-2">
                    <div class="sec-heading center">
                        <h3 class="font-2">دوره های آموزشی <span style="color:rgb(193, 0, 0)"><i class="fas fa-fire"></i> تخفیفی </span></h3>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($productـdiscount_percent as $product)
                            <x-product-card :product="$product" />
                        @endforeach
                    </div>
                 
                </div>
            </div>
            <hr>
        </div>
    </section>

    <section class="min"  style="background-color:whitesmoke;">
        <div class="container">
        
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h3 class="font-2" id="category">دسته بندی های آموزشی <span class="theme-cl">منتخب</span></h3>
                         <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p> 
                    </div>
                </div>
            </div>
            
            
            <div class="row justify-content-center">
                <!-- Single Category -->
                @foreach ($category_Category as $cat)
                    
                
                
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="crs_cate_wrap style_2">
                        <a href="{{route('cat',$cat->name)}}" class="crs_cate_box">
                            <div class="crs_cate_icon"><img src="{{$cat->image}}" alt="{{$cat->name}}"></div>
                            <div class="crs_cate_caption"><span>{{$cat->name}}</span></div>
                             <div class="crs_cate_count"><span>{{$cat->product_count}} دوره</span></div> 
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>
            
        </div>
    </section>

    <section  style="background-color:whitesmoke;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h3 class="font-2">لیست مقالات <span style="color: brown;">پیشنهادی (بزودی...)</span></h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="tutor-slide">
                        <div class="lios_item">
                            <div class="crs_trt_grid theme-light shadow_none">
                                <div class="crs_trt_thumb">
                                    <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="https://via.placeholder.com/400x250" class="img-fluid" alt=""></a>
                                </div>
                                <div class="crs_trt_caption large"  style="background-color: white;">
                                    <div class="instructor_tag dark"><span>برنامه نویسی</span></div>
                                    <h4 class="crs_title">مقاله تستی</h4>
                                    <p>این یک مقاله تستی است که برای نمایش داده می‌شود.</p>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star-half filled"></i>
                                    <span class="alt_rates">(244 نظر ثبت شده)</span>
                                    <a class="crs_title_link" tabindex="0">مشاهده مقاله</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
