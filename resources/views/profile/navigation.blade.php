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
                <li class="active"><a href="{% url 'account:home' %}"><i class="fas fa-th"></i>داشبورد</a></li>
                <li><a href="{% url 'Wallet:wallet' %}" style="font-family: sans-serif;"><i class="fas fa-credit-card"></i>کیف پول ({{number_format($user->balance)}}) تومان</a></li>

                <li><a href="{% url "ticket:ticket" %}"><i class="fas fa-comment"></i>تیکت</a></li>
                <li>
                    <a href="{% url 'account:courses' %}"><i class="fas fa-shopping-cart"></i>دوره های خریداری شده</a>
                
                </li>
                <li>
                    <a href="{% url 'account_email' %}"><i class="fas fa-envelope"></i>تغییر ایمیل</a>
                    
                </li>
                <li>
                    <a href="{% url 'account:status' %}"><i class="fas fa-history"></i>تاریخچه ی خرید و انتقالات</a>
                    
                </li>
                
                <li>
                    <a href="{% url 'account_change_password' %}"><i class="fas fa-key ml-1 rotate-img"></i>تغییر رمز عبور</span></a>
                    
                </li>
                <li>
                    <form action="{% url 'account:logout' %}" method="post">
                        
                        <a href="{% url 'account_change_password' %}" class="alert-danger" style="color: red"><i class="fa fa-sign-out-alt"></i>خروج</span></a>

                    </form>
                    
                </li>

            </ul>
        </div>
        
    </div>
</div>