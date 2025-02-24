@extends('layout.base2')
@section('title')
{{$data->nameE . ' | ' . $data->nameF}}
@endsection
@section('content')
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->



<!-- ============================ Hero Banner  Start================================== -->
<div class="hero_banner image-cover" style="background:#00563B url(assets/img/banner-3.jpg) no-repeat;" data-overlay="5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12">
                <div class="simple-search-wrap text-right">
                    <div class="hero_search-2">
                        <div class="elsio_tag">طرح تخفیف تابستان آموزشی</div>
                        <h1 class="banner_title mb-4 font-2">در بین هزاران ساعت آموزش جستجو کنید...</h1>
                        <p class="font-lg mb-4">مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        <form action="{{route('search')}}" method="get">
                            @csrf
                        <div class="input-group simple_search">
                            <i class="fa fa-search ico"></i>
                            <input type="text" name="search" class="form-control" placeholder="نام دوره آموزش...">
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
<!-- ============================ Hero Banner End ================================== -->

<!-- ============================ Our Awards Start ================================== -->
<section class="p-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="crp_box sm ovr_top">
                    <div class="row align-items-center m-0">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                            <div class="crt_169">
                                <div class="crt_overt"><h4>4.7</h4></div>
                                <div class="crt_stion">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="crt_io90"><h6>3,272 امتیاز ثبت شده</h6></div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                            <div class="part_rcp">
                                <ul>
                                    <li><div class="crp_img"><img src="assets/img/lg-1.png" class="img-fluid" alt="" /></div></li>
                                    <li><div class="crp_img"><img src="assets/img/lg-5.png" class="img-fluid" alt="" /></div></li>
                                    <li><div class="crp_img"><img src="assets/img/lg-6.png" class="img-fluid" alt="" /></div></li>
                                    <li><div class="crp_img"><img src="assets/img/lg-7.png" class="img-fluid" alt="" /></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Our Awards End ================================== -->

<!-- ============================ Top Categories Start ================================== -->

<section class="min" style="background-color: whitesmoke">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center mb-4">
                    <h3 class="font-2">محورهای آموزشی <span class="theme-cl">پرمنتخب</span></h3>
                    <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach ($categoryCategory as $cat_cat)
        
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="edu_cat_2 cat-{{$loop->index}}">
                    <div class="edu_cat_icons">
                        <a class="pic-main" href="{{route('cat',$cat_cat->name)}}"><img src="{{$cat_cat->image}}" class="img-fluid" alt="{{$cat_cat->name}}" /></a>
                    </div>
                    <div class="edu_cat_data">
                        <h4 class="title"><a href="{{route('cat',$cat_cat->name)}}">{{$cat_cat->name}}</a></h4>
                        <ul class="meta">
                            <li class="video"><i class="ti-video-clapper"></i>{{$cat_cat->product_count}} دوره</li>
                        </ul>
                    </div>
                </div>
            </div>
                @endforeach

          
        </div>

    </div>
</section>
<!-- ============================ Top Categories End ================================== -->

<!-- ============================ How It Works Start ================================== -->

<div class="clearfix"></div>
<!-- ============================ How It Works End ================================== -->

<!-- ============================ Latest Cources Start ================================== -->
<hr>
<section class="min" style="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h3 class="font-2">جدیدترین دوره های <span class="theme-cl">هیجانی و تخفیفی</span></h3>
                    <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- Single Grid -->


            <div class="row justify-content-center">
                @foreach ($products_new as $product)
                    <x-product-card :product="$product" /> 
                @endforeach
            </div>
            
        </div>

    </div>
</section>
<!-- ============================ Latest Cources End ================================== -->

<!-- ============================ Students Reviews ================================== -->
<section class="gray">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h3 class="font-2" >نظرات <span class="theme-cl">دانش آموختگان</span></h3>
                    <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-sm-12">

                <div class="reviews-slide space">
@foreach ($last_comments as $lComment)
    
<!-- Single Item -->
<div class="single_items lios_item">
    <div class="_testimonial_wrios shadow_none">
        <div class="_testimonial_flex">
            <div class="_testimonial_flex_first">
                <div class="_tsl_flex_thumb">
                    <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" class="img-fluid" alt="user-profile">
                </div>
                <div class="_tsl_flex_capst">
                    <h5>{{$lComment->users->name}}</h5>
                    
                    <div class="_ovr_posts"><span><a href="{{route('single',$lComment->products->slug)}}">{{$lComment->products->name}}</a></span></div>
                    <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>{{$lComment->rating}}</div>
                </div>
            </div>
        </div>
        <p>{{$lComment->created_at}}</p>
        
        <div class="facts-detail">
            <p>{{$lComment->comment}}</p>
        </div>
    </div>
</div>
@endforeach

                </div>

            </div>
        </div>

    </div>
</section>
<!-- ============================ Students Reviews End ================================== -->

<!-- ============================ article Start ================================== -->
<section class="min">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h3 class="font-2">آخرین اخبار و <span class="theme-cl">مقالات (بزودی...)</span></h3>
                    <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- Single Item -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="blg_grid_box">
                    <div class="blg_grid_thumb">
                        <a href="blog-detail.html"><img src="assets/img/b-4.png" class="img-fluid" alt="" /></a>
                    </div>
                    <div class="blg_grid_caption">
                        <div class="blg_tag"><span>بازاریابی</span></div>
                        <div class="blg_title"><h4><a href="blog-detail.html">چطور زبان انگلیسی را سریع یاد بگیریم؟</a></h4></div>
                        <div class="blg_desc"><p>لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p></div>
                    </div>
                    <div class="crs_grid_foot">
                        <div class="crs_flex">
                            <div class="crs_fl_first">
                                <div class="crs_tutor">
                                    <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                                </div>
                            </div>
                            <div class="crs_fl_last">
                                <div class="foot_list_info">
                                    <ul>
                                        <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10 بازدید</div></li>
                                        <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 آبان 1400</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="blg_grid_box">
                    <div class="blg_grid_thumb">
                        <a href="blog-detail.html"><img src="assets/img/b-5.png" class="img-fluid" alt="" /></a>
                    </div>
                    <div class="blg_grid_caption">
                        <div class="blg_tag"><span>کسب و کار</span></div>
                        <div class="blg_title"><h4><a href="blog-detail.html">کلید سوالات کنکور برای رشته های مختلف</a></h4></div>
                        <div class="blg_desc"><p>لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p></div>
                    </div>
                    <div class="crs_grid_foot">
                        <div class="crs_flex">
                            <div class="crs_fl_first">
                                <div class="crs_tutor">
                                    <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                                </div>
                            </div>
                            <div class="crs_fl_last">
                                <div class="foot_list_info">
                                    <ul>
                                        <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10 بازدید</div></li>
                                        <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 آبان 1400</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="blg_grid_box">
                    <div class="blg_grid_thumb">
                        <a href="blog-detail.html"><img src="assets/img/b-6.png" class="img-fluid" alt="" /></a>
                    </div>
                    <div class="blg_grid_caption">
                        <div class="blg_tag"><span>حسابداری</span></div>
                        <div class="blg_title"><h4><a href="blog-detail.html">چطور امتحان حضوری موفقی داشته باشیم؟</a></h4></div>
                        <div class="blg_desc"><p>لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p></div>
                    </div>
                    <div class="crs_grid_foot">
                        <div class="crs_flex">
                            <div class="crs_fl_first">
                                <div class="crs_tutor">
                                    <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                                </div>
                            </div>
                            <div class="crs_fl_last">
                                <div class="foot_list_info">
                                    <ul>
                                        <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10 بازدید</div></li>
                                        <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 آبان 1400</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ article End ================================== -->

<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call_action_wrap-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="call_action_wrap">
                    <div class="call_action_wrap-head">
                        <h3 class="font-2">آیا سوالی دارید؟</h3>
                        <span>ما به شما کمک خواهیم کرد تا شغل و رشد خود را افزایش دهید.</span>
                    </div>
                    <a href="#" class="btn btn-call_action_wrap">امروز با ما تماس بگیرید</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================ Call To Action End ================================== -->

@section('script')


@endsection
@endsection