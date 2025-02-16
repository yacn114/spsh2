<style>
    #logo{
        border-radius: 50%;
        height: 50px;
        width:70px;
    }
</style>
<div class="header head-shadow">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{route('home')}}">
                    <img src="{{$data->logo}}" id="logo" class="logo" alt="logo" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        @if(auth()->check())
                        <li>
                            <a href="{{route('dashboard')}}">
                                <span class="embos_45"><i class="fas fa-sign-in-alt ml-1 rotate-img"></i>داشبورد <p>({{auth()->user()->name}})</span></p>
                            </a>
                        </li>

                        @else
                        <li>
                            <a href="{{route('login')}}">
                                <span class="embos_45"><i class="fas fa-sign-in-alt ml-1 rotate-img"></i>ورود</span>
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">
                    <li class="active"><a href="home:home">خانه</a></li>
                    <li>
                        <a href="#category">دسته بندی های آموزشی</a>
                        <ul class="nav-dropdown nav-submenu">
                            @foreach($parent_categories as $category)
                                @include('main.menu-category', ['category' => $category])
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#">مشاوره رایگان</a></li>
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
