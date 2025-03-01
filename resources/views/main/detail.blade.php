
<!DOCTYPE html>
<html lang="fa">
	
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>opozex - {{$data->nameE}}</title>
		 
        <!-- Custom CSS -->
        <link href="/assets/css/styles.css" rel="stylesheet">
		
    </head>
	
    <body dir="rtl">

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
		@include('layout.navigation')
        
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<div class="ed_detail_head bg-cover" style="background:#f4f4f4 url({{$product->image->first()->image ?? ""}}); " data-overlay="9">
				<div class="container">
					<div class="row align-items-center" style="margin: 100px">
						
						<div class="col-lg-7 col-md-7">
							<div class="ed_detail_wrap light">
								{{-- @foreach ($parent_categories->users as $cat)
                                    
								<div class="crs_cates cl_3"><span>{{$cat->name}}</span></div>
                                @endforeach --}}
								
								<div class="ed_header_caption">
									<h2 class="ed_title">{{$product->name}}</h2>
									<ul>
										<li><i class="ti-calendar"></i>{{$product->tutorial_level}}</li>
										
										<li><i class="ti-user"></i>{{$product->view}} بازدید</li>
									</ul>
								</div>
								<div class="ed_header_short">
									<p>{{$product->description}}.</p>
								</div>
								
								<div class="ed_rate_info">
									 <div class="star_info">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
									</div> 
									<div class="review_counter">
										<strong class="high"></strong> {{$comment->count()}} نظر ثبت شده
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Course Detail ================================== -->
			<section class="gray pt-3" style="background-color: whitesmoke">
				<div class="container">
					<div class="row justify-content-between">
					
						<div class="col-lg-8 col-md-12 order-lg-first">
							
							<!-- All Info Show in Tab -->
							<div class="tab_box_info mt-4">

								<div class="tab-content" id="pills-tabContent">
									
									<!-- Overview Detail -->
									<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
										<!-- Overview -->
										<div class="edu_wraper">
											<h4 class="edu_title">سرفصل و جزئیات آموزش</h4>
						{{$product->description}}
										</div>
										
										
										<!-- Overview -->
										<div class="edu_wraper">
                                            <h4 class="edu_title">بعد دیدن این اموزش به چه سطحی میرسید ؟</h4>
											<ul class="lists-3 row">
                                                <li class="col-xl-4 col-lg-6 col-md-6 m-0">{{$product->result}}</li>
												
											</ul>
										</div>
									</div>
									
									<div class="list-single-main-item fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>دیدگاه دانش آموختگان</h3>
										</div>
										<div class="reviews-comments-wrap">
                                            
                                            @foreach ($comment as $comments)
                                            
											<!-- reviews-comments-item -->  
											<div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" class="img-fluid" alt=""> 
												</div>
												<div class="reviews-comments-item-text">
                                                    
                                                    
                                                    <h4>{{$comments->users->name}}<br><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>{{$comments->created_at}}</span></h4>
													<br>
													<br>
													<div class="clearfix"></div>
													<p>" {{$comments->comment}}. "</p>
													<div class="pull-left reviews-reaction">
                                                        {{-- {% if request.user.is_authenticated %}
														<a href="{% url 'product:like' comment.id %}" class="comment-like active"><i class="ti-thumb-up"></i> {{comment.like.count}}</a>
														<a href="{% url 'product:dislike' comment.id %}" class="comment-dislike active"><i class="ti-thumb-down"></i> {{comment.dislike.count}}</a>
														{% endif %} --}}
                                                        <hr>
													</div>
												</div>
											</div>
											<!--reviews-comments-item end-->  
											@endforeach
										</div>
									</div>
									
									<!-- Submit Reviews -->
									<div class="edu_wraper">
                                        <h4 class="edu_title">ثبت دیدگاه</h4>
										<div class="review-form-box form-submit">
											@session('success')
												<div class="alert alert-success">
													{{ $value }}
												</div>
											@endsession
											@session('warning')
											<div class="alert alert-warning" role="alert">
												{{ $value }}
											  </div>
										@endsession
                                            <form method="post" action="{{route('comment_store',$product->id)}}">
                                                <div class="row">
                                                    
                                                    
                                                    @if(auth()->check())
                                                    @if ($errors->all())
                                                    <div class="alert alert-danger" role="alert">
                                                    @foreach ($errors->all() as $error)
                                                    {{$error}} <br>
                                                    @endforeach

                                                
                                                
                                                

                                                </div>
                                                    
                                                    @endif
													<div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>متن نظر</label>
															<input type="text" name="comment" class="form-control">
														</div>
													</div>
													
													<div class="col-lg-12 col-md-12 col-sm-12">
                                                        @csrf
														<div class="form-group">
                                                            <button type="submit" class="btn theme-bg btn-md">ثبت دیدگاه</button>
														</div>
													</div>
													@else
													<div class="alert alert-primary" role="alert">
                                                        برای ثبت دیدگاه باید ثبت نام کرده باشی...
                                                    </div>
													@endif
													
												</div>
											</form>
										</div>
									</div>
									<!-- Reviews Detail -->
                                    
								</div>
							</div>
							
                            <div class="edu_wraper">
                                <h4 class="edu_title">درباره سایت opozex :</h4>
                                <p>
                                {{$data->about}}
                                </p>
                            </div>
						</div>
						
						<!-- Sidebar -->
						<div class="col-lg-4 col-md-12  order-lg-last">
                            
                            <!-- Course info -->
							<div class="ed_view_box style_3 ovrlio stick_top">
                                
                                <div class="property_video sm">
                                    <div class="thumb">
                                        <img class="pro_img img-fluid w100" src="{{$product->image->first()->image ?? ""}}" alt="{{$product->image->first()->alt ?? ""}}">
										<div class="overlay_icon">
                                            
                                        </div>
									</div>
								</div>
								
								<div class="p-3" style="direction: ltr">

									<h3>{{$product->name}}</h3>
								</div>
								
                                <div style="padding: 20px">
                                    <div class="d-flex justify-content-between" >
                                        <span>قیمت بدون تخفیف :</span><span>{{ number_format($product->price) }} تومان</span>
                                    </div>
                                    
                                    @if ($product->discount != 0)
                                    <div class="d-flex justify-content-between" ><span>قیمت هیجانی :</span><span>{{ number_format($product->discount) }}</span></div>
                                    @endif
                
                                    @if ($product->discount_percent != 0)
                                        <div class="d-flex justify-content-between" ><span>درصد تخفیف :</span><span>{{ $product->discount_percent }}%</span></div>
                                    @endif
                                    <hr>
                                </div>
                                <div class="d-flex justify-content-between total font-weight-bold" style="color: chocolate;padding: 20px">
                                    <span>قیمت تمام شده :</span><h4>{{ $product->discount_action() }} تومان </h4>
                                </div>
								
							
								
								<div class="ed_view_features half_list pl-4 pr-3">
									
									<ul>
										<li><i class="ti-user"></i>{{number_format($product->view)}} بازدید</li>
										<li><i class="bi bi-translate">lang</i>{{$product->language}}</li>
										<li><i class="ti-bar-chart-alt"></i>سطح {{$product->tutorial_level}}</li>
										<li><i class="ti-user"></i>تعداد دانشجو : {{$product->student_count}}</li>
										
									</ul>
								</div>
								<div class="ed_view_link">
									@include('profile.messages')

									<a href="{{route('book',$product)}}" class="btn theme-bg enroll-btn">ثبت نام<i class="ti-angle-left"></i></a>
								</div>
								
							</div>
						</div>
					
					</div>
				</div>
			</section>
			<!-- ============================ Course Detail ================================== -->
			
			<!-- ============================ Related Cources ================================== -->
			<hr>
			{{-- <section style="background-color: whitesmoke">
				<div class="container">
					
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 mb-3">
							<h4 class="font-2">آخرین بازدید‌ و آموزش مرتبط</h4>
						</div>
					</div>
			<hr>
					
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="slide_items">
							
						
								{% for recommand in rec %}
								<div class="lios_item col-lg-10">	
									<div class="crs_grid shadow_none brd">
										<div class="crs_grid_thumb">
											<a href="{% url 'product:detail' recommand.slug %}" class="crs_detail_link">
												<img style="height: auto;" src="/{{recommand.image}}" class="img-fluid rounded" alt="" />
											</a>
										
											<div class="crs_locked_ico">
												<i class="fa fa-lock"></i>
											</div>
										</div>
										<div class="crs_grid_caption">
											<div class="crs_flex">
												<div class="crs_fl_first">
													{% for list in recommand.language.all %}
													<div class="crs_cates cl_{{forloop.counter}}"><span>{{list}}</span></div>
													{% endfor %}
												</div>
												<div class="crs_fl_last">
													<div class="crs_price"><h2><span class="theme-cl">{{recommand.price}}</span><span class="currency">تومان</span></h2></div>
												</div>
											</div>
											<div class="crs_title"><h4><a href="{% url 'product:detail' recommand.slug %}" class="crs_title_link">{{recommand.small_description|truncatechars:150}}</a></h4></div>
											<div class="crs_info_detail">
												<ul>
													
												
												</ul>
											</div>
										
										</div>
										<div class="crs_grid_foot">
											<div class="crs_flex">
											
												<div class="crs_fl_last">
													<div class="foot_list_info">
														<ul>
															<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">{{recommand.student_count}}</div></li>
															<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">{{recommand.view}}</div></li>
															<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.9</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								{% endfor %}
							</div>
						</div>
					</div>
					
				</div>
			</section>  --}}
			<!-- ============================ Course Detail ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
						
			<!-- ============================ Footer Start ================================== -->
		@include('main.footer')
		<!-- ============================ Footer End ================================== -->
		
		<!-- Log In Modal -->
	
		<!-- End Modal -->
		
		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
		

	</div>

	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/select2.min.js"></script>
	<script src="/assets/js/slick.js"></script>
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/daterangepicker.js"></script> 
	<script src="/assets/js/summernote.min.js"></script>
	<script src="/assets/js/metisMenu.min.js"></script>	
	<script src="/assets/js/custom.js"></script>
		<!-- ============================================================== -->		

	</body>

<!-- Mirrored from themezhub.net/skillup-live/skillup/course-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 08:19:25 GMT -->
</html>