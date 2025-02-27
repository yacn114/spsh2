@extends('profile.base')
@section('content')

<div class="row justify-content-between">
    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="dashboard_wrap d-flex align-items-center justify-content-between">
            <div class="arion">
                <nav class="transparent">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">حساب کاربری</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

<div class="row">
    <div class="col-xl-7 col-lg-6 col-md-12">

    </div>


</div>
<div class="row justify-content-between">

    <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
        <div class="alert alert-light col-12" style="border-radius:10px;" role="alert">
            @if ($user->role->HasPermission('create-category') || $user->role->HasPermission('create-product') || $user->role->HasPermission('create-role') || $user->role->HasPermission('create-siteData'))

                <div class="row g-4">
                    <!-- کارت‌های اطلاعات -->
                    <div class="col-md-3">
                        <div class="card text-white bg-success p-3">
                            <h5>💰 موجودی کل کاربران</h5>
                            <h3>{{number_format($balance)}} تومان </h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success p-3">
                            <h5>👥 کاربران امروز</h5>
                            <h3>{{$userCount}}</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-warning p-3">
                            <h5>👀 بازدیدهای امروز</h5>
                            <h3>{{App\Models\PageView::whereDate('date',\Carbon\Carbon::today())->sum('views')}}</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-warning p-3">
                            <h5>👀 تمام بازدید ها</h5>
                            <h3>{{App\Models\PageView::all()->sum('views')}}</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger p-3">
                            <h5>📥 انتقال و خرید ها</h5>
                            <h3>{{App\Models\Purchases::whereRaw("DATE(datetime(created_at / 1000, 'unixepoch')) = ?", [\Carbon\Carbon::today()->toDateString()])->count()+App\Models\Moving::whereRaw("DATE(datetime(created_at / 1000, 'unixepoch')) = ?", [\Carbon\Carbon::today()->toDateString()])->count()}}</h3>
                        </div>
                    </div>
                </div>
                <hr>
            <h3>5 صفحه ی پر بازدید</h3>
                @foreach(\App\Models\PageView::orderBy('views', 'desc')->limit(5)->get() as $page)
                    <a href="{{ $page->url }}">{{ urldecode($page->url) }}</a> <br>|
                    {{ $page->views }} بازدید|<br>
                    میلادی: {{ \Carbon\Carbon::parse($page->date)->format('Y-m-d') }} |
                    شمسی: {{ \Morilog\Jalali\Jalalian::fromCarbon(\Carbon\Carbon::parse($page->date))->format('Y/m/d') }}<br><hr>
                @endforeach


            @else

            <ul style="list-style: disc;">
                <h5>اطلاعیه :</h5>
                <li><h6>کاربر ({{$user->name}}) به سایت اوپوزکس خوش آمدید.</h6></li>

                <li><h6>{{$data->about}}</h6></li>

            </ul>

            @endif
        </div>
    </div>
</div>

@endsection
