@extends('layout.base2')
@section('title')
نتایج جستجو : {{$searchTerm}}
@endsection
@section('content')


<section class="gray" style="background-color:#00563B;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="simple-search-wrap text-right">
					<div class="hero_search-2">
						<form method="post" action="{{route('search')}}">
							<br>						
							<h4 class="font-lg mb-4" style="color: white;">یادت نرفته که قبلش میتونی از راهنمایی کمک بگیری ؟ باهاش میتونی دوره مناسب خودتو پیدا کنی :)</h4>
							@csrf
						<div class="input-group simple_search">
							<i class="fa fa-search ico"></i>
							<input type="text" name="search" class="form-control" placeholder="جستجو دوره آموزش...">
							<div class="input-group-append">
								<button class="btn theme-bg" type="submit">جستجو</button>
							</div>
						</div>
					
					</form>
					</div>
				</div>
			<div class="col-lg-7 col-md-8">
				<div class="sec-heading center">
				<br>
				<br>
					<h3 class="font-2" style="color:white">نتایج جستجوی : {{$products->count()}} </h3>
				</div>
			</div>
		</div>
		
		<div class="row justify-content-center">
			@foreach ($products as $product)
				<x-product-card :product="$product" />
			@endforeach
		</div>
		
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8 mt-2">
				<div class="text-center"><a href="{{route('filter')}}" class="btn btn-md theme-bg-light theme-cl">صفحه فیلتر</a></div>
			</div>
		</div>
		
	</div>
</section>

@endsection