@extends('layouts.panel')

@section('css')

@endsection
@section('script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection

@section('body')
    {!! Form::open(array('url'=>'admin/product','method'=>'post','files'=>true,'class'=>'register-form')) !!}
    <main class="main">
        <div class="card">
            <div class="card-header">
                <strong>اضافه کردن محتوا</strong>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @include('errors')
                    <div class="form-group">
                        {{Form::label('inputname', 'نام محصول')}}
                        <br>
                        {{Form::text('name',null,['placeholder' => 'نام محصول...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('prc', 'قیمت محصول')}}
                        <br>
                        {{Form::number('price',null,['placeholder' => 'قیمت محصول...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('code', 'کد محصول')}}
                        <br>
                        {{Form::text('product_key',null,['placeholder' => 'کد محصول...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('img', 'تصویر محصول')}}
                        <br>
                        {{Form::file('imgpro')}}
                    </div>

                    <div class="form-group">
                        {{Form::label('des', 'توضیحات محصول')}}
                        <br>
                        {{Form::textarea('description',null,['class'=>'ckeditor','placeholder' => 'توضیحات محصول...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('clr', 'رنگ محصول')}}
                        <br>
                        {{ Form::select('color',['white' => 'سفید', 'red' => 'قرمز', 'dark' => 'سیاه'])}}
                    </div>
                </form>
            </div>
            <div class="card-footer">
                {{ Form::button('<i class="fa fa-plus"></i> ثبت اطلاعات', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm'] )  }}
                {{ Form::button('<i class="fa fa-remove"></i> بازیابی', ['class' => 'btn btn-danger btn-sm'] )  }}

            </div>
        </div>
    </main>
    {{ Form::close() }}
@endsection