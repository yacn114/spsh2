@extends('profile.base')
@section('content')


<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            <div class="table-responsive col-8">
                <div class="row"><h2>دسته بندی ها</h2></div>
                @include('profile.messages')
                <table class="table dash_list">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">قیمت(اصلی)</th>
                            <th scope="col">قیمت(تمام شده)</th>
                            <th scope="col">قیمت(درصد تخفیف)</th>
                            <th scope="col">قیمت(هیجانی)</th>
                             <th scope="col">وضعیت</th>
                             <th scope="col">بازدید</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
    
    
                        <tr>
    
    
                        <th scope="row">{{$product->id}}</th>
                        <td><a href="{{route('single',$product->slug)}}"><h6>{{$product->name}}</h6></a></td>
                        <td><span class="trip" style="font-size:15px">{{number_format($product->price)}}</span></td>
                        <td><span class="trip" style="font-size:15px">{{$product->discount_action()}}</span></td>
                        <td><span class="trip" style="font-size:15px">{{$product->discount_percent}}</span></td>
                        <td><span class="trip" style="font-size:15px">{{number_format($product->discount)}}</span></td>
                        <td><span class="trip" style="font-size:15px">{{$product->status}}</span></td>
                        <td><span class="trip" style="font-size:15px">{{number_format($product->view)}}</span></td>
                        

    
                            <td>
                                <div class="row">
                                <a class="m-2" href="{{route('editProduct',$product)}}"><button class="btn btn-info">ویرایش</button></a>
                                @if ($product->status == "active")
                                <a class="m-2" href="{{route("inactiveProduct",$product)}}"><button class="btn btn-warning">غیرفعال کردن</button></a>
                                @else
                                <a class="m-2" href="{{route("activeProduct",$product)}}"><button class="btn btn-primary">فعال کردن</button></a>
                                    
                                @endif
                                <form action="{{route('deleteProduct',$product)}}" class="m-2" method="post">@csrf @method("DELETE")<button class="btn btn-danger" type="submit">حذف</button></form>
                            </div>
                        
                        </td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            	<hr>
<center>
		@if ($products->hasMorePages())
			<a href="{{ $products->nextPageUrl() . '&search=' . request('search') }}">
				<button class="btn btn-info">صفحه بعد</button>
			</a>
		@endif
		
		@if (!$products->onFirstPage())
			<a href="{{ $products->previousPageUrl() . '&search=' . request('search') }}">
				<button class="btn btn-info">صفحه قبل</button>
			</a>
		@endif
	</center>	
		<hr>
            </div>
            
        </div>
    </div>
</div>
        
@endsection