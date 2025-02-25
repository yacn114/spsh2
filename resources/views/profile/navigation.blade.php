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
               
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">
                    <li class="active"><a href="{{route('dashboard')}}">داشبورد</a></li>
                </ul>
                <ul class="nav-menu">
                    <li class=""><a href="{{route('CategoryCrudCreate')}}"> ساخت دسته بندی</a></li>
                </ul>
                <ul class="nav-menu">
                    <li class=""><a href="home:home"> ساخت محصول</a></li>
                </ul>
                <ul class="nav-menu">
                    <li class=""><a href="home:home"> اطلاعات کلی سایت</a></li>
                </ul>
                <ul class="nav-menu">
                    <li class=""><a href="home:home">نقش و دسترسی</a></li>
                </ul>
                <ul class="nav-menu">
                    <li class=""><a href="home:home">احتمالا عکس</a></li>
                </ul>
                
            </div>
        </nav>
    </div>
</div>
