@extends('profile.base')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
a{
    text-decoration: none;
}
.no-underline a {
    text-decoration: none;
}

</style>
<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">خرید ها</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">انتقال ها</button>
                      
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" style="background-color: whitesmoke" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="table-responsive col-8">
                            <h3>دوره های خریداری شده توسط شما</h3>
                            <table class="table dash_list">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">عنوان</th>
                
                                        <th scope="col">وضعیت</th>
                                         <th scope="col">تاریخ خرید</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                        @foreach ($buys as $product)
                                    
                
                                    <tr>
                
                
                                    <th scope="row">{{$loop->index +1}}</th>
                                    <td><a href="{{route('single',$product->product->slug)}}"><h6>{{$product->product->name}}</h6></a></td>
                                        <td><span class="trip" style="font-size:15px">{{$product->product->status}}</span></td>
                                        <td><span class="trip" style="font-size:15px">{{$product->product->created_at}}</span></td>
                
                                        
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" style="background-color: whitesmoke" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="table-responsive col-8">
                            <div class="row">

                                <h3>تراکنش های انتقالی توسط شما</h3>&nbsp;&nbsp;<a href="{{route('wallet')}}" class="btn btn-info">انتقال جدید</a>
                            </div>
                            <table class="table dash_list">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">کاربر فرستنده</th>
                
                                        <th scope="col">کاربر گیرنده</th>
                                         <th scope="col">تاریخ ارسال</th>
                                         <th scope="col">مبلغ ارسال</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                        @foreach ($moves as $product)
                                    
                
                                    <tr>
                
                
                                    <th scope="row">{{$loop->index +1}}</th>
                                    <td><a href="{{route('single',$product->sender->name)}}"><h6>{{$product->sender->name}}</h6></a></td>
                                        <td><span class="trip" style="font-size:15px">{{$product->receiver->name}}</span></td>
                                        <td><span class="trip" style="font-size:15px">{{$product->created_at}}</span></td>
                                        <td><span class="trip" style="font-size:15px">{{number_format($product->amount)}} تومان</span></td>
                
                                        
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                  <!-- Bootstrap CSS -->
             
       

        </div>
        </div>
    </div>
</div>
        
@endsection