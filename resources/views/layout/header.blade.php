<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="yacn_1414" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkillUp - قالب HTML دوره آنلاین و آموزش</title>

    <!-- Custom CSS -->
    <link href="/assets/css/styles.css" rel="stylesheet">

</head>

<body dir="rtl">

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
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

                        <li class="active"><a href="#">خانه</span></a>
                
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
                            <a href="#category">ارتباط با ما</a>
                        </li>

                        @if(auth()->check())
                            <li><a href="dashboard.html">حساب کاربری</a></li>

                        @endif
                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-left">

                        <li>
                            <a href="{{route('login')}}" class="alio_green">
                                <i class="fas fa-sign-in-alt ml-1 rotate-img"></i><span class="dn-lg">ورود</span>
                            </a>
                        </li>
                        <li class="add-listing theme-bg">
                            <a href="{{route('signup')}}" class="text-white">ثبت نام</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
