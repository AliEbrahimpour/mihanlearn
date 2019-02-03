<!--
	Author: AliEbrahimpour
	Author URL: http://Mihanlearn.net
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>فروشگاه اینترنتی میهن لرن</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="mihanlearn.net">
    <meta name="author" content="AliEbrahimpour">
    <!-- css files -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- css files -->
    <meta name="csrf_token" content="{{csrf_token()}}">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap END core CSS -->

    <!-- JS file -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.jcarousel.min.js"></script>
    <!-- JS file -->

    <!--START-----------------------slider-->
    <script
            src="../js/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="../js/slider/ddsmoothmenu.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/slider/jquery.flexslider.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/slider/common.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/slider/home_flexslider.css">
    <link rel="stylesheet" type="text/css" href="../css/slider/style.css">
    <!--END-------------------------slider-->

    @yield('css')
</head>


<body>
<div class="main">

    <!--main_top-->
    <div class="main_top">
        <div class="main_top_top_right">
            <div class="main_top_top_right_top">
                <p>
                    فروشگاه اینترنتی
                    <a href="/index">
                <p> دیجی کالا</p></a>


                <div style="padding-left: 523px;" class="top-right links">
                    @auth
                        <a href="{{ url('/profile') }}">{{ Auth::user()->name }}سلام</a>
                    @else
                        <a id="login" rel="#overlay" href="{{ route('login') }}">ورود</a>
                        <a href="{{ route('register') }}">ثبت نام</a>
                    @endauth
                </div>
                </p>

            </div>
            <!--main_top_top_right_top-->
            <div class="main_top_top_right_bottom">
                <a href="cart.php">
                    <div class="cart_box">
                        <div class="cart_box_icon"><i class="fa fa-cart-arrow-down"></i></div>
                        <!--cart_box_icon-->
                        <div class="cart_box_name">
                            <li><a href="/index/basket"><p> سبد خرید </p></a>
                        </div>
                        @if(auth()->user() && !empty(Session::get('cart')))
                        <span class="badge badge-success">{{sizeof(Session::get('cart')) }}</span>
                        @else
                        <span class="badge badge-success">0</span>
                        @endif

                    </div>
                </a>
                <!--cart_box-->
                <input type="text" class="search_box" placeholder="محصول ، دسته یا برند مورد نظرتان را جستجو کنید ...">
                <div class="icon"><i class="fa fa-search"></i></div>
                <!--icon-->
            </div>
            <!--main_top_top_right_bottom-->
        </div>
        <!--main_top_top_right-->
        <div class="main_top_top_left">
            <a href="/index">
                <div class="logo"></div>
            </a>
            <!--logo-->
        </div>
        <!--main_top_top_left-->
        <div class="main_top_bottom">
            <ul>
                <li><i class="fa fa-angle-down" style="font-size:17px; margin-right:13px"></i> انواع موبایل
                    <ul>
                        <li> اپل</li>
                        <li> سامسونگ</li>
                        <li> سونی</li>
                        <li> الجی</li>
                    </ul>
                </li>
                <li><i class="fa fa-angle-down" style="font-size:17px; margin-right:13px"></i> لپ تاب
                    <ul>
                        <li>سونی</li>
                        <li>hp</li>
                        <li>ایسوس</li>
                        <li>اپل</li>
                    </ul>
                </li>
                <li><i class="fa fa-angle-down" style="font-size:17px; margin-right:13px"></i> تبلت
                    <ul>
                        <li>ایپد</li>
                        <li>گلگسی تب</li>
                        <li>هوآوی</li>
                        <li>فبلت</li>
                    </ul>
                </li>
                <li><i class="fa fa-angle-down" style="font-size:17px; margin-right:13px"></i> قطعات کامپیوتر
                    <ul>
                        <li>رم</li>
                        <li>گرافیک</li>
                        <li>مادربرد</li>
                        <li>پاور</li>
                    </ul>
                </li>
                <li><i class="fa fa-angle-down" style="font-size:17px; margin-right:13px"></i> قطعات جانبی
                    <ul>
                        <li> فلش</li>
                        <li> هارد اکسترنال</li>
                        <li> کابل</li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--main_top_bottom-->
    </div>
    <!--main_top-->
{{----------------------------------------------}}
<!--main_content-->
@yield('content')
<!--main_content-->
{{----------------------------------------------}}
<!--main_bottom-->
    <div class="main_bottom">
        <div class="top">
            <ul class="footer">
                <li><a href="index.html"> صفحه اصلی</a></li>
                <li><a href="user_panel.html"> پنل کاربری</a></li>
                <li><a href="login.html"> ورود </a></li>
                <li><a href="registration.html"> ثبت نام </a></li>
                <li><a href="cart.html"> سبد خرید </a></li>
            </ul>
        </div><!--top-->

        <div class="footer">
            <h3 style="direction: ltr"> Design By Ali Ebrahimpour (MihanLern.Net) </h3>
        </div>

    </div>
    <!--main_bottom-->
    {{----------------------------------------------}}

</div>
<!--main-->

@yield('script')

<?php $url_add = Url('/cart/add')  ?>
<?php $url_plus = Url('/plus'); ?>
<?php $url_min = Url('/min'); ?>
<?php $url_del = Url('/del_cart'); ?>


<script type="text/javascript">
    add_cart = function (id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });
        $.ajax({
            url: '<?= $url_add ?>',
            type: "POST",
            data: 'id=' + id,
            success: function (data) {
                $("#cart").html(data);
            }
        });
    };
    plus_cart = function (id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '<?= $url_plus ?>',
            type: "POST",
            data: 'id=' + id,
            success: function (data) {
                alert('success');
                $("#special").remove();

            }
        });
    };
    min_cart = function (id) {
        /*
        var hol=$("span#"+id+"_span").text();
        var holl=parseInt(hol);
        var strin=String(holl-1);
        $("span#"+id+"_span").remove();
        var ssj="<span id=\" "+id+"_span\"> "+strin+"</span>";
        $("span#"+id+"_span_mother").append(ssj);
        */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '<?= $url_min ?>',
            type: "POST",
            data: 'id=' + id,
            success: function (data) {
                $("#cart").html(data);
            }
        });
    };
    del_cart = function (id) {
        $("li#" + id).remove();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '<?= $url_del ?>',
            type: "POST",
            data: 'id=' + id,
            success: function (data) {
                $("li#" + id).remove();
            }
        });
    };
</script>
</body>
</html>