@extends('profile.base')
@section('content')
<div class="row justify-content-between">

    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
       {{-- <div class="row">
        
            @foreach ($data_Purchases as $product)
                <x-product-card :product="$product->product" /> 
                
            @endforeach
        </div>
        --}}
        <div class="table-responsive col-8">
            <h3>دوره های شما</h3>
            <table class="table dash_list">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>

                        <th scope="col">وضعیت</th>
                         <th scope="col">تیکت</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_Purchases as $product)


                    <tr>


                    <th scope="row">{{$loop->index +1}}</th>
                    <td><a href="{{route('single',$product->product->slug)}}"><h6>{{$product->product->name}}</h6></a></td>
                        <td><span class="trip" style="font-size:15px">{{$product->product->status}}</span></td>

                        <td><a href="{{route('ticket')}}"><button class="btn btn-success">تیکت بزن</button></a></td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection