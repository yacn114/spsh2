<!DOCTYPE html>
<html lang="fa">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>دسته بندی - {{$category_i->name}}</title>
		 
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
			
				@include("main.navigation")

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
								<h1 class="breadcrumb-title font-2">دسته بندی - {{$category_i->name}}</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb p-0 bg-white">
										<li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
										<li class="breadcrumb-item active theme-cl" aria-current="page">{{$category_i->name}}</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Course Detail ================================== -->
			<section class="gray" style="background-color:whitesmoke;">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="short_wraping">
								<div class="row m-0 align-items-center justify-content-between">
								
									<div class="col-lg-4 col-md-5 col-sm-12  col-sm-6">
										<div class="shorting_pagination_laft">
											<h6 class="m-0"> {{ $category_i->name }}</h6>
										</div>
									</div>
							
									<div class="col-lg-8 col-md-7 col-sm-12 col-sm-6">
										<div class="dlks_152">
											<a href="{{route('filter')}}"><button class="btn theme-bg">فیلتر</button></a>

									
										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
					
					<div class="row justify-content-center">
						
							@foreach ($products as $product)
								<x-product-card2 :product="$product" />
							@endforeach
						
					</div>
			
								<!-- Pagination -->
<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<ul class="pagination p-center">

								
	
							
								<hr>
								
								@if ($products->hasMorePages())
								<a href="{{ $products->nextPageUrl() }}">
									<button class="btn btn-info">صفحه بعد</button>
								</a>
							@endif
							@if (!$products->onFirstPage())
							<a href="{{ $products->previousPageUrl() }}">
								<button class="btn btn-info">صفحه قبل</button>

							</a>
						@endif
													<hr>
								
							</ul>
						</div> 
						
				</div>
			</section>
			<!-- ============================ Course Detail ================================== -->
			
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