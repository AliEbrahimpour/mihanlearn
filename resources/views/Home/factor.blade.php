@extends('layouts.home')

@section('content')
    <div class="main_content">
        <div class="main_content_cart">
            <div class="cart_top">
                <div class="cart_top_right">
                    <i class="fa fa-caret-left"></i>
                    <p> فاکتور خرید شما </p>
                </div><!--cart_top_right-->
                <div class="cart_top_left">
                    <div class="cart_nahie_btn">
                        <p> چاپ فاکتور </p>
                    </div><!--cart_nahie_btn-->
                </div><!--cart_nahie_btn-->
            </div><!--cart_top-->
            <div class="cart_table">
                <table>
                    <thead>
                    <tr>
                        <td width="500px">شرح محصول</td>
                        <td width="110px">تعداد</td>
                        <td width="200px">قیمت واحد</td>
                        <td>قیمت کل</td>
                        <td class="last_td"></td>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $total_price = 0; ?>
                    @foreach(session()->get('cart') as $key=>$value)
                        <?php $product = \App\Product::find($key); ?>
                        <tr>
                            <td>
                                <div class="td_image"><img src="/images/cart01.jpg"></div>
                                <div class="td_info">
                                    <div class="td_info_p">{{$product->name}}</div>
                                    <div class="td_info_p2"> رنگ : &nbsp;&nbsp;&nbsp;&nbsp;{{$product->color}}</div>
                                    <div class="td_info_p3">{{$product->product_key}}</div>
                                </div>
                            </td>
                            <td>
                                <div class="td_count">
                                    <span>{{$value}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="td_price1">
                                    <p>{{$product->price}}</p>
                                    <p1>تومان</p1>
                                </div>
                            </td>
                            <td>
                                <div class="td_price2">
                                    <?php $total = $product->price * $value; ?>
                                    <?php $total_price += $product->price * $value; ?>
                                    <p>{{$total}}</p>
                                    <p1>تومان</p1>
                                </div>
                            </td>
                            <td bgcolor="#FFEDEE">
                                <i class="fa fa-times"></i>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!--cart_table-->
            <div class="cart_price_table">
                <p1>مبلغ پرداختی شما :</p1>
                <p3>تومان</p3>
                <p2> {{$total_price}} </p2>
            </div><!--cart_price_table-->
            <div class="cart_transid_table">
                <p1>شماره تراکنش شما :</p1>
                <p2> </p2>
            </div><!--cart_price_table-->
            <div class="cart_top">
                <div class="cart_top_left">
                    <div class="cart_nahie_btn">
                        <li><a href="cart.html">
                                <p>چاپ فاکتور</p></a>
                    </div><!--cart_nahie_btn-->
                </div><!--cart_nahie_btn-->
            </div><!--cart_top-->
        </div><!--main_content_cart-->
    </div>
@endsection