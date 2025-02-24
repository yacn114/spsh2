<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
    <div class="crs_grid">
        <div class="crs_grid_thumb">
            <a href="{{ route('single', $product->slug) }}" class="crs_detail_link">
                @if($product->image->first())
                    <img src="{{ $product->image->first()->image ?? ""}}" class="img-fluid rounded" style="height: 250px" alt="{{ $product->image->first()->alt }}">
                @else
                    <p>تصویری برای این محصول موجود نیست.</p>
                @endif
            </a>

            <div class="crs_locked_ico">
                <i class="@if($product->discount_action() == 0) fa fa-unlock @else fa fa-lock @endif"></i>
            </div>
        </div>
        <div class="crs_grid_caption">
            <div class="crs_flex">
                <div class="crs_fl_first">
                    @foreach ($product->categories as $category)
                        <div class="crs_cates"><a href="{{ route('category', $category->slug) }}"><span>{{ $category->name }}</span></a></div>
                    @endforeach
                </div>
                <div class="crs_fl_last">
                    <div class="crs_price"><h2><span class="theme-cl">{{ $product->discount_action() }}</span><span class="currency">تومان</span></h2></div>
                </div>
            </div>
            <div class="crs_title" style="height:30px"><h4><a href="{{ route('single', $product->slug) }}" class="crs_title_link">{{ $product->name }}</a></h4></div>
            <div class="crs_info_detail" style="height:150px;">
                <ul>
                    <li><i class="fa fa-level-up-alt"></i><span>{{ $product->tutorial_level }}</span></li>
                </ul>
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
        <div class="crs_grid_foot mt-5">
            <div class="crs_flex">
                <div class="crs_fl_last">
                    <div class="foot_list_info">
                        <ul class="light">
                            <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">{{ $product->student_count }}</div></li>
                            <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">{{ number_format($product->view) }}</div></li>
                            <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
                            
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
