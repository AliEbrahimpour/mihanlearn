@extends('layouts.home')

@section('content')
    <div class="main_content">
        <div class="main_content_user_panel">
            <div class="user_panel_info">
                <div class="user_panel_info_top">
                    <div class="top_icon">
                        <i class="fa fa-user"></i>
                    </div><!--top_icon-->
                    <div class="top_title">
                        <p>اطلاعات کاربر</p>
                    </div><!--top_title-->
                </div><!--user_panel_info_top-->
                <div class="user_panel_info_content">
                    <div class="top">
                        <p>اطلاعات مشتری حقیقی&nbsp;&nbsp;&nbsp;&nbsp; .................................................................................................................................................................................................................................................................................................................................</p>
                    </div><!--top-->
                    <div class="content">
                        <div class="box"><p>نام و نام خانوادگی :</p><p1> یه بنده ی خوب خدا</p1></div>
                        <div class="box"><p>آدرس الکترونیکی :</p><p1> 123456@gmail.com</p1></div>
                        <div class="box"><p>کد ملی :</p><p1> 12345678910</p1></div>

                        <div class="box"><p4>شماره تلفن ثابت :</p4><p2> 024-1111</p2></div>
                        <div class="box"><p4>شماره تلفن همراه :</p4><p2> 09300000000</p2></div>
                        <div class="box"><p4>تاریخ تولد:</p4><p2> 1310/10/10</p2></div>
                        <div class="box"><p5>جنسیت :</p5><p3> مرد</p3></div>
                        <div class="box"><p5>محل سکونت  :</p5><p3> زنجان - انصاریه</p3></div>
                        <div class="box"><p5>شماره کارت :</p5><p3> 6737-0000-0000-0000</p3></div>
                        <div class="user_panel_info_btn">
                            <div class="btn_box1">
                                <i class="fa fa-key"></i>
                                <p> تغییر کلمه عبور</p>
                            </div>
                            <div class="btn_box2">
                                <i class="fa fa-pencil-square-o"></i>
                                <p> ویرایش اطلاعات</p>
                            </div><!--btn_box2-->
                        </div><!--user_panel_info_btn-->

                    </div><!--content-->
                </div><!--user_panel_info_content-->
            </div><!--user_panel_info-->
            <!--شروع فرم سفارشات-->
            <div class="user_panel_info">
                <div class="user_panel_info_top">
                    <div class="top_icon">
                        <i class="fa fa-truck"></i>
                    </div><!--top_icon-->
                    <div class="top_title">
                        <p>سفارشات شما</p>
                    </div><!--top_title-->
                </div><!--user_panel_info_top-->
                <div class="user_panel_info_content">
                    <div class="content">
                        <br>
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">

                            <tbody>
                            <tr>
                                <td>کد رهگیری</td>
                                <td>زمان</td>
                                <td>شماره محصول</td>
                                <td>مشاهده</td>
                            </tr>
            @foreach($payment as $pay)
                            <tr class="odd gradeX">
                                <td>{{$pay->code}}</td>
                                <td>{{$pay->time}}</td>
                                <td>{{$pay->product_id}}</td>
                                <td>مشاهده</td>
                            </tr>
                @endforeach
                            </tbody>
                        </table>
                    </div><!--content-->
                </div><!--user_panel_info_content-->
            </div><!--user_panel_info-->
        </div><!--main_content_user_panel-->
    </div>

@endsection