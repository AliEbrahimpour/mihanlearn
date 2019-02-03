@extends('layouts.Home')

@section('css')
    <link rel="stylesheet" href="<?= Url('css/star-rating.min.css')?>"/>
@endsection


@section('content')
    <div class="main_content" style="background: white !important;">

        <div id="app"  class="main_content_single_post">
            <div  class="info_detail">
                <div class="right">
                    <img src="<?= Url($product->imgpro) ?>">
                </div><!--right-->
                <div class="left">
                    <div   class="title">
                        <p  style="direction: rtl;font-size: 35px;"> {{$product->name}}</p>
                    </div><!--title-->
                    <div class="color">
                        <div class="color_title">انتخاب رنگ</div>
                        <div class="color_box">
                            <input type="radio" name="color"><label>سفید</label>
                        </div>
                        <div class="color_box">
                            <input type="radio" name="color"><label>آبی </label>
                        </div>
                        <div class="color_box">
                            <input type="radio" name="color"><label> سیاه</label>
                        </div>
                    </div><!--color-->
                    <div class="granti">
                        <div class="granti_title">انتخاب گارانتی</div>
                        <div class="granti_box">
                            <select name="garanti">
                                <option>18 ماه گارانتی هماهنگ</option>
                                <option>18 ماه گارانتی ایران + گواهی تعمیر</option>
                            </select>
                        </div><!--granti_box-->
                    </div><!--granti-->

                    <form action="{{ route('star.save') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="rating">
                            <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5"
                                   data-step="1" value="{{ $product->userAverageRating }}" data-size="xs">
                            <input type="hidden" name="id" required="" value="{{ $product->id }}">
                            <br/>
                            <button class="btn btn-success">Submit Review</button>
                        </div>
                    </form>

                    <div class="price">
                        <div class="price_right">
                            <p>قیمت اصلی{{$product->price}}تومان </p>
                            <br>
                        </div><!--price_right-->
                        @if(!empty($coupon))
                            <div style="width: 140px;" class="price_left">
                                <p> تخفیف {{$coupon->discount}} تومان </p>
                            </div><!--price_left-->
                        @endif
                    </div><!--price-->

                    {{--<form action="/product/payment" method="post">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<input type="hidden" name="Product_id" value="{{$product->id}}">--}}
                    {{--<button  class="btn btn-success" type="submit">افزودن به سبد خرید</button>--}}
                    {{--</form>--}}

                    <button onclick="add_cart({{$product->id}})" class="btn btn-success">افزودن به سبد خرید</button>

                    {{--<div class="add_box">--}}
                    {{--<div class="add_box_icon"> <i class="fa fa-cart-arrow-down"></i> </div>--}}
                    {{--<!--add_box_icon-->--}}
                    {{--<div class="add_box_name">--}}
                    {{--<p>افزودن به سبد خرید </p>--}}
                    {{--</div>--}}
                    {{--<!--add_box_name-->--}}
                    {{--</div>--}}
                    <div class="final_price">
                        @if(!empty($coupon))
                            <p>قیمت برای شما :</p>
                            <p1>{{$product->price - $coupon->discount}}</p1>
                            <p2>تومان</p2>
                        @else
                            <p>قیمت برای شما :</p>
                            <p1>{{$product->price}}</p1>
                            <p2>تومان</p2>
                        @endif
                    </div><!--final_price-->


                    <div class="left_left">
                        <ul style="padding-top: 241px;">
                            <li>تعداد سیم کارت: دو سیم کارته</li>
                            <li>شبکه های ارتباطی: 4G</li>
                            <li>رزولوشن عکس: 20 مگاپیکسل</li>
                            <li>فرکانس پردازنده‌ی مرکزی: 0.312 گیگاهرتز</li>
                            <li>بازه‌ی سایز صفحه نمایش: 5.0 تا 5.4 اینچ</li>
                        </ul>
                    </div><!--left_left-->
                </div><!--left-->
            </div><!--info_detail-->
            <div class="description">
                <div class="description_title">
                    <p> معرفی اجمالی محصول </p>
                </div><!--description_title-->
                <div class="description_content">
                    <p>
                        {{$product->description}}
                    </p>
                </div><!--description_content-->
            </div><!--description-->
        </div><!--main_content_single_post-->

    </div>


    @if(auth()->check())
        <div class="well">
            <form style="direction: rtl" action="/comment" method="post">
                {{csrf_field()}}
                <input name="name" placeholder="نام">
                <div>
                    <textarea name="context" placeholder="متن نظر"></textarea>
                </div>
                <button type="submit">ارسال نظر</button>
            </form>
        </div>
    @else
        <label>برای گذاشتن نظر در سایت عضو شوید یا لاگین کنید</label>
    @endif

    @include('Home.comment')

@endsection

@section('script')
    <script type="text/javascript">

        $("#input-id").rating();

    </script>
    <script src="/js/star-rating.min.js"></script>

@endsection