@extends('layouts.home')

@section('content')
    <div class="main_content">
        <div class="main_content_right">
            <div class="right_menu">
                <div class="right_menu_top">
                    <h3> جدیدترین محصولات</h3>
                </div>
                <!--right_menu_top-->
                <div class="right_menu_content">
                    <ul>
                        @foreach($products as $product)
                        <li>
                            <div class="right"><img src="<?= Url($product->imgpro) ?>"></div>
                            <div class="left">
                                <a href="{{$product->path()}}">{{$product->name}}</a>

                                <p style="color:#A7A0A0; font-size:16px;">قیمت: {{$product->price   }} تومان</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--right_menu_content-->
                <div class="right_menu_bottom"> <a href="/showproducts"> + مشاهده محصولات بیشتر</a> </div>
            </div>
            <!--right_menu-->
            <div class="view_box"><img src="/images/885e2c80.jpg"></div>
            <div class="view_box"><img src="/images/bb693031-a89b-4190-8d2e-980ae16a2860.jpg"></div>
            <div class="right_menu">
                <div class="right_menu_top">
                    <h3> تازه ترین خبرها</h3>
                </div>
                <!--right_menu_top-->
                <div class="right_menu_content">
                    <ul>
                        <li>
                            <div class="right"><img src="/images/eca008d4-05eb-49e3-a17b-6e91e8edaeff.jpg"></div>
                            <div class="left">
                                <p>بررسی گلکسی A7</p>
                                <p style="color:#A7A0A0; font-size:16px;"> بازدید : 9032</p>
                            </div>
                        </li>
                        <li>
                            <div class="right"><img src="/images/Mobile-Phone-Apple-iPhone-6s-64GB9b1ca1.jpg"></div>
                            <div class="left">
                                <p>نقد و بررسی ایفون6s</p>
                                <p style="color:#A7A0A0; font-size:16px;"> بازدید : 9032</p>
                            </div>
                        </li>
                        <li>
                            <div class="right"><img src="/images/Mobile-Phone-Apple-iPhone-6-128GBbf23a9.jpg"></div>
                            <div class="left">
                                <p>آیفون با حافظه ی 128گیگ</p>
                                <p style="color:#A7A0A0; font-size:16px;"> بازدید : 9032</p>
                            </div>
                        </li>
                        <li>
                            <div class="right"><img src="/images/Notebook-HP-Spectre-X360-13t-4185nr52cfcd.jpg"></div>
                            <div class="left">
                                <p> غول HP در راه است</p>
                                <p style="color:#A7A0A0; font-size:16px;"> بازدید : 9032</p>
                            </div>
                        </li>
                        <li>
                            <div class="right"><img src="/images/Notebook-HP-Pavilion-15-ab236neeae445.jpg"></div>
                            <div class="left">
                                <p>سری جدید پاویلون از hp</p>
                                <p style="color:#A7A0A0; font-size:16px;"> بازدید : 9032</p>
                            </div>
                        </li>
                        <li>
                            <div class="right"><img src="/images/Sony_Xperia_C5_Ultra_Review.jpg"></div>
                            <div class="left">
                                <p>فبلت سونی با نام C5 الترا</p>
                                <p style="color:#A7A0A0; font-size:16px;"> بازدید : 9032</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--right_menu_content-->
                <div class="right_menu_bottom"> <a href=""> + مشاهده اخبار بیشتر</a> </div>
                <!--right_menu_bottom-->
            </div>
            <!--right_menu-->

        </div>
        <div class="main_content_left">
            <div class="main_content_left_slider">
                <section class="banner-wrapper">
                    <div class="banner-block container">
                        <div class="flexslider">
                            <ul class="slides">
                                @foreach($images as $image)
                                <li><img title="Banner" alt="Banner" src="<?= Url($image->image) ?>" /></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!--main_content_left_slider-->
            <div class="main_content_left_box_info">
                <ul>
                    <li><img src="/images/ico-usp-2.png">
                        <p>پرداخت در محل</p>
                    </li>
                    <li><img src="/images/ico-usp-3.png">
                        <p> ضمانت اصل بودن</p>
                    </li>
                    <li><img src="/images/ico-usp-4.png">
                        <p> تحویل اکسپرس</p>
                    </li>
                    <li><img src="/images/ico-usp-5.png">
                        <p>تضمین بهترین قیمت</p>
                    </li>
                </ul>
            </div>
            <!--main_content_left_box_info-->
            <div class="main_content_left_listproduct">
                <div class="top">
                    <h3> محبوب ترین کالاها</h3>
                    <li><a href="view_page.html">  <h4> لیست کامل +</h4></a>
                </div>
                <div class="content_listproduct">
                    <div class="wrap">
                        <div class="chain-box" id="chain-box-2">
                            <ul class="chain">
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Mobile-Phone-Samsung-Galaxy-A7-201602c3f4.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">گلکسی A7</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-3-col.php"><img src="/images/Mobile-Phone-LG-G506b1a5.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-3-col.php" class="title">LG G5</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-1-col.php"><img src="/images/Notebook-HP-Pavilion-15-ab236neeae445.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-1-col.php" class="title">نوت بوک اچ پی </a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Mobile-Samsung-Galaxy-S3-I9300I-Dual-SIM0102e8.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">گلکسی s3</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-3-col.php"><img src="/images/Computer-Net-D-Link-DSL-2750U-New9210c5.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-3-col.php" class="title">مودم سفید</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Computer-Net-D-Link-DSL-2740U-ADSL2-Plus-Modem-with-Wireless.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">مودم سیاه</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-1-col.php"><img src="/images/Computer-External-HDD-Western-Digital-My-Passport-Ultra-Prem.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-1-col.php" class="title">هارد اکسترنال</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Mobile-Samsung-Galaxy-Star-Plus-S7262-Dual-SIM3eccab.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">سامسونگ</a>
                                    <!--title--></li>

                            </ul>
                            <a href="#" class="arrow3-left"></a><!--arrow3-left-->
                            <a href="#" class="arrow3-right"></a><!--arrow3-right-->
                        </div>
                        <!--chain-box-->
                    </div>
                    <!--content-->
                </div>
                <!--main_content_left_listproduct-->
            </div>
            <div class="main_content_left_listproduct">
                <div class="top">
                    <h3> پرفروش ترین کالاها</h3>
                    <li><a href="view_page.html">    <h4> لیست کامل +</h4></a>
                </div>
                <div class="content_listproduct">
                    <div class="wrap1">
                        <div class="chain-box1s" id="chain-box-21s">
                            <ul class="chain1s">
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Phone-Panasonic-KX-TG3611BXf66ccc.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">گوشی پاناسونیک</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-3-col.php"><img src="/images/Mobile-Samsung-Galaxy-Star-Plus-S7262-Dual-SIM3eccab.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-3-col.php" class="title">گلکسی استار</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-1-col.php"><img src="/images/Computer-HDD-Silicon-Armor-A80-1TB030b68.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-1-col.php" class="title">هارد اکسترنال</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Computer-HDD-WD-Elements-Portable-1TBa1558e.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">هارد اکسترنال WD</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-3-col.php"><img src="/images/Mobile-Phone-Apple-iPhone-6s-64GB9b1ca1.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-3-col.php" class="title">آیفون 6</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/eca008d4-05eb-49e3-a17b-6e91e8edaeff.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">گلکسی A7</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-1-col.php"><img src="/images/Mobile-Phone-LG-G506b1a5.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-1-col.php" class="title">LG G5</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Computer-Net-D-Link-DSL-2740U-ADSL2-Plus-Modem-with-Wireless.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">مودم دی لینک</a>
                                    <!--title--></li>
                            </ul>
                            <a href="#" class="arrow3-left1s"></a><!--arrow3-left-->
                            <a href="#" class="arrow3-right1s"></a><!--arrow3-right-->
                        </div>
                        <!--chain-box-->
                    </div>
                    <!--content-->
                </div>
                <!--main_content_left_listproduct-->
            </div>
            <div class="main_content_left_listproduct">
                <div class="top">
                    <h3> جدید ترین کالاها</h3>
                    <li><a href="view_page.html"><h4> لیست کامل +</h4></a>
                </div>
                <div class="content_listproduct">
                    <div class="wrap2">
                        <div class="chain-box2s" id="chain-box-22s">
                            <ul class="chain2s">
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Phone-Panasonic-KX-TG3611BXf66ccc.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">گوشی پاناسونیک</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-3-col.php"><img src="/images/Mobile-Samsung-Galaxy-S3-I9300I-Dual-SIM0102e8.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-3-col.php" class="title">گلکسی اس 3</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-1-col.php"><img src="/images/Mobile-Phone-LG-G506b1a5.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-1-col.php" class="title">LG G5</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Mobile-LG-L70-Dual-D325d3ffd2.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">LG L70</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-3-col.php"><img src="/images/Notebook-HP-Pavilion-15-ab236neeae445.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-3-col.php" class="title">اچ پی پاویلون</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Notebook-HP-Spectre-X360-13t-4185nr52cfcd.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">اچ پی Spectre-X360</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-1-col.php"><img src="/images/Notebook-Lenovo-E5080-A04c9ac.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-1-col.php" class="title">نوت بوک لنوو</a>
                                    <!--title--></li>
                                <li>
                                    <div class="image"><a href="portfolio-2-col.php"><img src="/images/Notebook-ASUS-UX303UB-Cafd9fc.jpg" alt="" /></a></div>
                                    <!--image-->
                                    <a href="portfolio-2-col.php" class="title">نوت بوک ایسوس</a>
                                    <!--title--></li>
                            </ul>
                            <a href="#" class="arrow3-left2s"></a><!--arrow3-left-->
                            <a href="#" class="arrow3-right2s"></a><!--arrow3-right-->
                        </div>
                        <!--chain-box-->
                    </div>
                    <!--content-->
                </div>
                <!--main_content_left_listproduct-->
            </div>

            <!--main_content_left-->
        </div
        ></div>
@endsection