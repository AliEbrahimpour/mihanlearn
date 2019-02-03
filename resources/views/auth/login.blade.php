<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.6
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
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
</head>

<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group mb-0">


                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                <div class="card p-4">
                    <div class="card-body">
                        <h1>ورود</h1>
                        <p class="text-muted">ورود به حساب کاربری</p>
                        <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                            <input name="email" type="text" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="ایمیل کاربری" value="{{old('email')}}" required>

                            @if ($errors->has('email'))
                            <br>
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="input-group mb-4">
                            <br>
                            <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                            <input name="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="رمز عبور" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">ورود</button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-link px-0">یادآوری رمز عبور </button>
                            </div>
                        </div>
                    </div>
                </div>

                </form>


                {{--register--}}
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>ثبت نام</h2>
                            <p>
                                لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید.<p>
                                <button type="button" class="btn btn-primary active mt-3">ثبت نام نکرده اید؟</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap and necessary plugins -->
<script src="<?= url('js/jquery.min.js') ?>"></script>
<script src="<?= url('js/bootstrap.js') ?>"></script>





</body>

</html>