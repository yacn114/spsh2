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
            <div class="elso_syu89">
                <ul>
                    <li><a href="https://www.twitter.com/opozex"><i class="ti-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/opozex"><i class="ti-instagram"></i></a></li>
                </ul>
            </div>
            <div class="elso_syu77">
                <div class="one_third"><div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i></div><span>امتیازات</span></div>
                <div class="one_third"><a href="{% url 'account:courses' %}"><div class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i></div><span>دوره ها</span></a></div>
                <div class="one_third"><div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div><span>هنرجویان</span></div>
            </div>
        </div>
        
        <div class="d-navigation">
            <ul id="side-menu">
                <li class="active"><a href="{{route('dashboard')}}"><i class="fas fa-th"></i>داشبورد</a></li>
                <li><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-credit-card"></i>اضافه کردن موجودی به کاربر</a></li>
                <li><a href="{{route('AdminTicket')}}" style="font-family: sans-serif;"><i class="fas fa-comment"></i>پاسخ دادن به تیکت های کاربران ({{$ticket}})</a></li>
                <li><a href="{{route('CategoryCrudCreate')}}" style="font-family: sans-serif;"><i class="fas fa-plus"></i>ساخت دسته بندی</a></li>
                <li><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-plus-circle"></i>ساخت محصول</a></li>
                <li><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-plus"></i>اطلاعات کلی سایت</a></li>
                <li><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-plus-circle"></i>نقش و دسترسی</a></li>
                <li><a href="{{route('addBalance')}}" style="font-family: sans-serif;"><i class="fas fa-plus"></i>احتمالا عکس</a></li>


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