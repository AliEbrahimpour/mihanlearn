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
    {!! Form::open(array('url'=>'admin/coupon','method'=>'post','files'=>true,'class'=>'register-form')) !!}
    <main class="main">
        <div class="card">
            <div class="card-header">
                <strong>اضافه کردن کد تخفیف</strong>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @include('errors')
                    <div class="form-group">
                        {{Form::label('inputname', 'نام کد تخفیف')}}
                        <br>
                        {{Form::text('name',null,['placeholder' => 'نام کد تخفیف...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('prc', 'قیمت کد تخفیف')}}
                        <br>
                        {{Form::number('discount',null,['placeholder' => 'قیمت کد تخفیف...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('prc', 'محصول مورد نظر')}}
                        <br>
                        {{Form::select('product_id',$products,['class' => 'form-control'])}}
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