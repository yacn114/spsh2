<div class="col-lg-3 col-md-3">
    <div class="dashboard-navbar" style="border-radius: 20px;">
        
        <div class="d-user-avater">
            <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" class="img-fluid avater" alt="">
            <h4>{{$user->name}}</h4>
             <span>@if ($user->role->name == "user")
             {{"hi user"}}
             @else
             {{"hi my owner"}}
             @endif</span> 
<hr>
            </div>
        
        <div class="d-navigation">
            <ul id="side-menu">
                
                
                <li @if (Route::is('dashboard')) class="active" @endif><a href="{{route('dashboard')}}"><i class="fas fa-th"></i>داشبورد</a></li>
                <li @if (Route::is('addBalance')) class="active" @endif><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-credit-card"></i>اضافه کردن موجودی به کاربر</a></li>
                <li @if (Route::is('addBalance')) class="active" @endif><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-comment-alt"></i>فعال یا غیرفعال کردن کامنت ها</a></li>
                <li @if (Route::is('AdminTicket')) class="active" @endif><a href="{{route('AdminTicket')}}" style="font-family: sans-serif;"><i class="fas fa-comment"></i>پاسخ دادن به تیکت های کاربران ({{$ticketss}})</a></li>
                <hr>
                <li @if (Route::is('CategoryCrudCreate')) class="active" @endif><a href="{{route('CategoryCrudCreate')}}" style="font-family: sans-serif;"><i class="fas fa-shopping-basket"></i>ساخت دسته بندی</a></li>
                <li @if (Route::is('list-category')) class="active" @endif><a href="{{route('list-category')}}" style="font-family: sans-serif;"><i class="fas fa-shopping-basket"></i>لیست دسته بندی</a></li>
                <hr>
                <li @if (Route::is('createProduct')) class="active" @endif><a href="{{route('createProduct')}}" style="font-family: sans-serif;"><i class="fas fa-plus-circle"></i>ساخت محصول</a></li>
                <li @if (Route::is('listProduct')) class="active" @endif><a href="{{route('listProduct')}}" style="font-family: sans-serif;"><i class="fas fa-plus-circle"></i>لیست محصول</a></li>
                <hr>
                <li @if (Route::is('createData')) class="active" @endif><a href="{{route('createData')}}" style="font-family: sans-serif;"><i class="fas fa-plus"></i>اطلاعات کلی سایت</a></li>
                <hr>
                <li @if (Route::is('createRole')) class="active" @endif><a href="{{route('createRole')}}" style="font-family: sans-serif;"><i class="fas fa-plus-circle"></i>نقش و دسترسی</a></li>
                <li @if (Route::is('listRole')) class="active" @endif><a href="{{route('listRole')}}" style="font-family: sans-serif;"><i class="fas fa-plus-circle"></i>لیست نقش و دسترسی</a></li>
                <hr>
                <li @if (Route::is('addBalance')) class="active" @endif><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-plus"></i>احتمالا عکس</a></li>


                <li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        @method("DELETE")
                        <a class="alert-danger" style="color: red"><i class="fa fa-sign-out-alt"></i><button style="background: none;border: none;color: red" type="submit">خروج</button></span></a>

                    </form>
                    
                </li>

            </ul>
        </div>
        
    </div>
</div>
