@extends('layout.base2')
@section('content')


<section class="gray" style="background-color:whitesmoke;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="simple-search-wrap text-right">
					<div class="hero_search-2">
						<form method="post" action="{{route('search')}}">
						
							<h4 class="font-lg mb-4">یادت نرفته که قبلش میتونی از راهنمایی کمک بگیری ؟ باهاش میتونی دوره مناسب خودتو پیدا کنی :)</h4>
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
					<h3 class="font-2">نتایج جستجوی : {{$products->count()}} </h3>
				</div>
			</div>
		</div>
		
		<div class="row justify-content-center">
		
@foreach ($products as $product)
    

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="crs_grid">
					<div class="crs_grid_thumb">
						<a href="{{route('single',$product->slug)}}" class="crs_detail_link">
							@if($product->image->first())
    <img src="{{ $product->image->first()->image }}" class="img-fluid rounded" alt="{{ $product->image->first()->alt }}">
@else
    <p>تصویری برای این محصول موجود نیست.</p>
@endif

						</a>

						<div class="crs_locked_ico">
							<i class="fa fa-lock"></i>
						</div>
					</div>
					<div class="crs_grid_caption">
						<div class="crs_flex">
							<div class="crs_fl_first">
								@foreach ($product->categories as $categories)
                                    
                                
								<div class="crs_cates"><a href="{{route('category',$categories->slug)}}"><span>{{$categories->name}}</span></a></div>
                                
                                @endforeach
								
							</div>
							<div class="crs_fl_last">
								<div class="crs_price"><h2><span class="theme-cl">{{$product->discount_action()}}</span><span class="currency">تومان</span></h2></div>
							</div>
						</div>
						<div class="crs_title"><h4><a href="{{route('single',$product->slug)}}" class="crs_title_link">{{$product->name}}</a></h4></div>
						<div class="crs_info_detail">
							<ul>
								<li><i class="fa fa-level-up-alt"></i><span>{{$product->tutorial_level}}</span></li>
								
							</ul>
						</div>
					</div>
					<div class="crs_grid_foot">
						<div class="crs_flex">
						
							<div class="crs_fl_last">
								<div class="foot_list_info">
									<ul class="light">
										<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">{{$product->student_count}}</div></li>
										<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">{{$product->view}}</div></li>
										<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach

			
		</div>
		
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8 mt-2">
				<div class="text-center"><a href="{% url 'product:all' %}" class="btn btn-md theme-bg-light theme-cl">همه آموزش ها</a></div>
			</div>
		</div>
		
	</div>
</section>
@endsection