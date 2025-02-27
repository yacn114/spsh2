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
                    <img src="{{ asset('storage/' . $data->logo) }}" id="logo" class="logo" alt="logo" />

                </a>
                <div class="nav-toggle"></div>
               
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">
                    <li @if (Route::is('dashboard')) class="active" @endif><a href="{{route('dashboard')}}">داشبورد</a></li>
                </ul>
                <ul class="nav-menu">
                    <li @if (Route::is('CategoryCrudCreate')) class="active" @endif><a href="{{route('CategoryCrudCreate')}}"> ساخت دسته بندی</a></li>
                </ul>
                <ul class="nav-menu">
                    <li @if (Route::is('createProduct')) class="active" @endif><a href="createProduct"> ساخت محصول</a></li>
                </ul>
                <ul class="nav-menu">
                    <li @if (Route::is('createData')) class="active" @endif><a href="createData"> اطلاعات کلی سایت</a></li>
                </ul>
                <ul class="nav-menu">
                    <li @if (Route::is('createRole')) class="active" @endif><a href="createRole">نقش و دسترسی</a></li>
                </ul>
                <ul class="nav-menu">
                    <li @if (Route::is('addBalance')) class="active" @endif><a href="addBalance">احتمالا عکس</a></li>
                </ul>

            </div>
        </nav>
    </div>
</div>
