<div class="header header-transparent change-logo">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    <img src="{{$data->logo}}" width="70px" height="50px" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="{{route('login')}}" class="crs_yuo12 w-auto text-white theme-bg">
                                <span class="embos_45"><i class="fas fa-sign-in-alt ml-1 rotate-img"></i>ورود</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">

                    {{-- <li class="active"><a href="#">خانه</span></a> --}}
            
                    </li>

                    <li>
                        <a href="#category">دسته بندی های آموزشی</a>
                        <ul class="nav-dropdown nav-submenu">
                            @foreach($parent_categories as $category)
                                @include('main.menu-category', ['category' => $category])
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('filter')}}">جستجوی پیشرفته (فیلتر)</a>

                    </li>
                    <li>
                        <a href="{{route('home')}}">خانه 1</a>
                    </li>
                    <li>
                        <a href="{{route('home2')}}">خانه 2</a>
                    </li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-left">

                    @if(auth()->check())

                    <li class="add-listing bg-white"><a href="{{route('dashboard')}}">داشبورد</a></li>
                    <li class="add-listing bg-white"><a href="account:courses">دوره های شما</a></li>

                    @else

                    <li>
                        <a href="{{route('login')}}">
                            <i class="fas fa-sign-in-alt ml-1 rotate-img"></i><span class="dn-lg">ورود</span>
                        </a>
                    </li>
                    <li class="add-listing bg-white">
                        <a href="{{route('signup')}}" class="text-white">ثبت نام</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
