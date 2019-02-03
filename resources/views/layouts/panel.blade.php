
<!DOCTYPE html>
<html lang="fa"  dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>CoreUI - Admin Template - rtl Theme</title>

    <!-- Icons -->
    <link href="<?= Url('css/font-awesome.css') ?>" rel="stylesheet">
    <link href="<?= Url('css/simple-line-icons.css') ?>" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="<?= Url('css/panel/style.css') ?>" rel="stylesheet">
    @yield('css')
</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">میزکار</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">کاربران</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">تنظیمات</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="d-md-down-none">سلام {{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>حساب کاربری</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> بروزرسانی ها<span class="badge badge-info">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> پیام ها<span class="badge badge-success">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> کارها<span class="badge badge-danger">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> نظرات<span class="badge badge-warning">42</span></a>
                <div class="dropdown-header text-center">
                    <strong>تنظیمات</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> تنظیمات</a>
                <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> پرداخت ها<span class="badge badge-default">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-file"></i> پروژه ها<span class="badge badge-primary">42</span></a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> قفل کردن حساب کاربری</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> خروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </li>
    </ul>

</header>

<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> میزکار <span class="badge badge-primary">جدید</span></a>
                </li>


                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>کابران</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="components-buttons.html"><i class="icon-list"></i> لیست کابران</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components-social-buttons.html"><i class="icon-plus"></i> افزون عضو جدید</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components-cards.html"><i class="fa fa-cog"></i> تنظیمات</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-product-hunt"></i> محصولات</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/product/create"><i class="icon-plus"></i> افزون محصول جدید</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/product"><i class="icon-list"></i>   لیست محصولات</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-picture"></i> گالری</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="icons-font-awesome.html"><i class="icon-plus"></i> افزون نمایه جدید</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-list"></i>گالری</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-comment"></i> نظرات</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="icons-font-awesome.html"><i class="icon-plus"></i> افزون نظر جدید</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-list"></i>   لیست نظرات</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-shopping-bag"></i> فروشگاه</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/coupon"><i class="fa fa-dollar"></i>تخفیف ها </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons-simple-line-icons.html"><i class="fa fa-cogs"></i>تنظیمات</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-cog"></i> تنظیمات</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="icons-font-awesome.html"><i class="icon-screen-desktop"></i> تعیین ظاهر سایت</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/slider"><i class="fa fa-sliders"></i>   اسلایدر</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>



@yield('body')
</div>

<footer class="app-footer ltr">
    <a href="http://coreui.io">CoreUI - RTL </a> © 2017 creativeLabs.
    <span class="float-left">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
</footer>

<!-- Bootstrap and necessary plugins -->
<script src="<?= url('js/jquery.min.js') ?>"></script>
<script src="<?= url('js/bootstrap.js') ?>"></script>
<script src="<?= url('js/panel/pace.js') ?>"></script>

@yield('script')


<!-- GenesisUI main scripts -->

<script src="<?= url('js/panel/app.js') ?>"></script>




<!-- Plugins and scripts required by this views -->

<!-- Custom scripts required by this view -->
<script src="<?= url('js/panel/main.js') ?>"></script>

</body>

</html>

