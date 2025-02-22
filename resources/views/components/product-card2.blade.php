<div class="col-xl-{{$size}} col-lg-{{$size}} col-md-12 col-sm-12">
    <div class="crs_grid_list">
        
        <div class="crs_grid_list_thumb">
            <a href="{{route('single' ,$product->slug)}}">
                @if($product->image->first())
                
                <img src="{{ $product->image->first()->image ?? ""}}" class="img-fluid rounded" alt="{{ $product->image->first()->alt }}"></a>
            @else
                <p>تصویری برای این محصول موجود نیست.</p>
            @endif
        </div>
        
        <div class="crs_grid_list_caption" style="padding: 10px">
            <div class="crs_lt_101">
                @foreach ($product->categories as $category)
                
                <a href="{{ route('category', $category->slug) }}"><span class="est st_{{$loop->index + 1}}">{{$category->name}}</span></a>
            @endforeach
            </div>
            <div class="crs_lt_102">
                <a href="{{route('single' ,$product->slug)}}"><h4 class="crs_tit">{{ $product->name }}</h4></a>
            </div>
            <div class="crs_lt_103">
                <div class="crs_info_detail">
                    <ul>
                        
                        <li><i class="fa fa-user"></i><span>{{$product->student_count}} دانشجو</span></li>
                        <li><i class="fa fa-eye"></i><span>{{number_format($product->view)}} بازدید</span></li>
                        <li><i class="fa fa-level-up-alt"></i><span>{{$product->tutorial_level}}</span></li>
                        <li><i class="fa fa-globe"></i><span>{{$product->language}}</span></li>
                        
                    </ul>
                </div>
            </div>
            <div class="crs_flex">
                <div class="crs_fl_first">
                    <hr>
                    <div>
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
                    <div class="d-flex justify-content-between total font-weight-bold" style="color: chocolate;">
                        <span>قیمت تمام شده</span><h4>{{ $product->discount_action() }} تومان </h4>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="crs_fl_last">
            <div class="crs_linkview"><a href="{{route('book',$product->slug)}}" class="btn btn-success text-light m-2">ثبت نام</a></div>
        </div>

    </div>
</div>