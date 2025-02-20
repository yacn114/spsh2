<!DOCTYPE html>
<html lang="fa">
	
<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>فیلتر</title>

        <!-- Custom CSS -->
        <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">
		
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
     @include("main/navigation")
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title font-2">فیلتر</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb p-0 bg-white">
										<li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
										<li class="breadcrumb-item active theme-cl" aria-current="page">فیلتر</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ All Cources ================================== -->
			<section class="gray" style="background-color:whitesmoke;">
				<div class="container">
					<div class="row">
					
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar p-0">
								<a class="filter_links" data-toggle="collapse" href="#fltbox" role="button" aria-expanded="false" aria-controls="fltbox">فیلتر پیشرفته<i class="fa fa-sliders-h mr-2"></i></a>							
								<form method="get" action="{{route('filter_show')}}">
								<div class="collapse" id="fltbox">
									<!-- Find New Property -->
									<div class="sidebar-widgets p-4">
										
										<div class="form-group">
											<div class="input-with-icon">

												<input type="text" name="name" class="form-control" placeholder="نام دوره...">
												<i class="ti-search"></i>
											</div>
										</div>
										

										
										
										
										<div class="form-group">
											<h6>سطح مهارت</h6>
											
                                                

                                                <select name="levels" id="levels-select" class="form-control">
                                                  <option value="">--Please choose an option--</option>
                                                    <option value="level1">سطح 1</option>
                                                    <option value="level2">سطح 2</option>
                                                    <option value="level3">سطح 3</option>
                                                </select>
                                                

											
										</div>
										
										<div class="form-group">
											<h6>قیمت</h6>
											<ul class="no-ul-list mb-3">
												<select name="price" id="price-select" class="form-control">
                                                    <option value="">--Please choose an option--</option>
                                                      <option value="free">رایگان</option>
                                                      <option value="hot">هیجانی</option>
                                                      <option value="discount">شامل تخفیف</option>
                                                      <option value="all">همه</option>
                                                  </select>
                                                  

											</ul>
										</div>
										<div class="form-group">
											<h6>بازدید</h6>
											<ul class="no-ul-list mb-3">
												<select name="seen" id="price-select" class="form-control">
                                                    <option value="">--Please choose an option--</option>
													<option value="all">بیشترین بازدید در کل دوره</option>
                                                      <option value="yesterday">بیشترین بازدید در روز اخیر</option>
                                                      <option value="last_week">بیشترین بازدید در هفته اخیر</option>
                                                      <option value="last_mount">بیشترین بازدید در ماه اخیر</option>
                                                  </select>
                                                  

											</ul>
										</div>
										<div class="form-group">
											<h6>زبان</h6>
											<ul class="no-ul-list mb-3">
												<select name="language" id="price-select" class="form-control">
                                                    <option value="">--Please choose an option--</option>
													<option value="fa">فارسی</option>
                                                      <option value="en">انگلیسی</option>
                                                      
                                                  </select>
                                                  

											</ul>
										</div>
										<div class="form-group">
											<h6>دسته بندی</h6>
											<ul class="no-ul-list mb-3">
												<select name="category" id="price-select" class="form-control">
                                                    <option value="">--Please choose an option--</option>
													@foreach ($category as $cat)	
													<option value="{{$cat->slug}}">{{$cat->name}}</option>
													@endforeach

                                                  </select>
                                                  

											</ul>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 pt-4">
												<button type="submit" class="btn theme-bg rounded full-width">فیلتر</button>
											</div>
										</div>
										
									</div>
									@csrf
								</form>
								</div>
							</div>
                        </div>

						<!-- Content -->
						<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="short_wraping">
										<div class="row m-0 align-items-center justify-content-between">
										
											<div class="col-lg-4 col-md-5 col-sm-12  col-sm-6">
												<div class="shorting_pagination_laft">
                                                    <h6 class="m-0"> hi</h6>
												</div>
											</div>
								
										</div>
									</div>
								</div>
							</div>
	
							<div class="row justify-content-center">
                               @if($products_filter)
                               @foreach ($products_filter as $product)
                               <x-product-card :product="$product" />
                           @endforeach 
                               @endif
							</div>
							
							<!-- Pagination -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<ul class="pagination p-center">
		
										
                                        <hr>
								@if($products_filter)
                            @if ($products_filter->hasMorePages())
                                    <a href="{{ $products_filter->nextPageUrl() }}">
                                <button class="btn btn-success">صفحه بعد</button>
                                        </a>
                                    @endif
                                    @if (!$products_filter->onFirstPage())
                                    <a href="{{ $products_filter->previousPageUrl() }}">
                                        <button class="btn btn-success">صفحه قبل</button>
        
                                    </a>
                                @endif
                                @endif
                                <hr>
									</ul>
							</div> 
								
						</div>
							
						</div>
					
					</div>
				</div>
			</section>
			<!-- ============================ All Cources ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
	
			<!-- ============================ Call To Action End ================================== -->
			
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
        <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/popper.min.js"></script>
		<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/select2.min.js"></script>
		<script type="text/javascript" src="/assets/js/slick.js"></script>
		<script type="text/javascript" src="/assets/js/moment.min.js"></script>
		<script type="text/javascript" src="/assets/js/daterangepicker.js"></script> 
		<script type="text/javascript" src="/assets/js/metisMenu.min.js"></script>	
		<script type="text/javascript" src="/assets/js/summernote.min.js"></script>
		<script type="text/javascript" src="/assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>

</html>