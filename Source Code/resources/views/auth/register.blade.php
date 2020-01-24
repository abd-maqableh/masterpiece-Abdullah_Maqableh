@extends('makiny_front.layout')

@section('content')
<div class="all-body site-blocks-cover overlay" style="background-image: url({{'/front-assets/images/es.jpg'}})">
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">


                

                <div class="card-body">
                    <h5 class="card-title text-center">تسجيل الدخول</h5>

                   
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label lab-size text-md-right">الاسم</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label lab-size text-md-right">الايميل</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label lab-size text-md-right">كلمه السر</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-3 col-form-label lab-size text-md-right">تأكيد كلمه السر</label>

                                <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-3 offset-md-4">
                                    <input class="btn btn-lg btn-primary btn-block text-uppercase" value="تسجيل"  type="submit"/>

                                </div>

                            </div>
                            <hr class="my-4 bt-hov" >
                            <a href="login.html" class="btn btn-lg btn-facebook  btn-block text-uppercase" type="submit"> تسجيل الدخول  </a>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 

@endsection
