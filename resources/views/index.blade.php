@extends('main.base')

@section('content')

    <div class="hero_banner image-cover" style="background:#03B97C;height:600px" data-overlay="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 col-sm-12">
                    <div class="simple-search-wrap">
                        <div class="hero_search-2 text-center">
                            <form method="post">
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
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h3 class="font-2">دوره های آموزشی <span style="color:rgb(193, 0, 0)"><i class="fas fa-fire"></i> HOT </span></h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid">
                        <div class="crs_grid_thumb">
                            <img src="https://via.placeholder.com/400x250" class="img-fluid" alt="Course Image">
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <h4 class="crs_title">دوره آموزشی تستی</h4>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_price"><h4><span class="theme-cl">$49</span></h4></div>
                                </div>
                            </div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-clock"></i><span>10 ساعت</span></li>
                                    <li><i class="fa fa-video"></i><span>20 ویدیو</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_last">
                                    <div class="foot_list_info">
                                        <ul class="light">
                                            <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">100 دانشجو</div></li>
                                            <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">500 بازدید</div></li>
                                            <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 mt-2">
                </div>
            </div>
        </div>
    </section>

    <section class="min"  style="background-color:whitesmoke;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h3 class="font-2" id="category">دسته بندی های آموزشی <span class="theme-cl">منتخب</span></h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="crs_cate_wrap style_2">
                        <div class="crs_cate_icon"><i class="fa fa-code"></i></div>
                        <div class="crs_cate_caption">
                            <h4>برنامه نویسی</h4>
                            <span>50 دوره</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section  style="background-color:whitesmoke;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h3 class="font-2">لیست مقالات <span style="color: brown;">پیشنهادی</span></h3>
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
