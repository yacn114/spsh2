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
                <a class="nav-brand" href="home:home">
                    <img src="/" id="logo" class="logo" alt="logo" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        {% if request.user.is_authenticated %}
                        <li>
                            <a href="account:home">
                                <span class="embos_45"><i class="fas fa-sign-in-alt ml-1 rotate-img"></i>داشبورد ()</span>
                            </a>
                        </li>

                        {% else %}
                        <li>
                            <a href="account_login">
                                <span class="embos_45"><i class="fas fa-sign-in-alt ml-1 rotate-img"></i>ورود</span>
                            </a>
                        </li>
                        {% endif %}

                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">

                    <li class="active"><a href="home:home">خانه<span class="submenu-indicator"></span></a></li>

                    <li><a href="#category">دسته بندی های آموزشی<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
{{--                            {% for categ in category %}--}}
{{--                            <li><a href="#">{{categ.name}}<span class="submenu-indicator"></span></a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    {% for lan in lang %}--}}
{{--                                    {% for cat in lan.category.all %}--}}
{{--                                    {% if cat.name == categ.name %}--}}
{{--                                    <li><a href="/category/{{lan.hashtag}}">{{lan.nameE}}</a></li>--}}
{{--                                    {% endif %}--}}
{{--                                    {% endfor %}--}}
{{--                                    {% endfor %}--}}

{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            {% endfor %}--}}

                        </ul>
                    </li>
                    <li><a href="#">مشاوره رایگان</a></li>




                </ul>
                <ul class="nav-menu nav-menu-social align-to-left">
{{--                    {% if request.user.is_authenticated %}--}}

                    <li class="add-listing bg-white"><a href="account:home">داشبورد</a></li>
                    <li class="add-listing bg-white"><a href="account:courses">دوره های شما</a></li>

{{--                    {% else %}--}}

                    <li>
                        <a href="account_login">
                            <i class="fas fa-sign-in-alt ml-1 rotate-img"></i><span class="dn-lg">ورود</span>
                        </a>
                    </li>
                    <li class="add-listing bg-white">
                        <a href="account_signup" class="text-white">ثبت نام</a>
                    </li>
{{--                    {% endif %}--}}



                </ul>
            </div>
        </nav>
    </div>
</div>
