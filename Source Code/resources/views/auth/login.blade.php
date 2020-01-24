@extends('makiny_front.layout')

@section('content')
<div class="all-body site-blocks-cover overlay" style="background-image: url({{'/front-assets/images/es.jpg'}})">
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">




                <div class="card-body">
                    <h5 class="card-title text-center">تسجيل الدخول</h5>

                    <form method="POST" action="{{ route('login') }}" class="form-signin text-right">
                        @csrf
                            <div class="form-group row">
                            <label for="inputEmail" class="col-md-3 col-form-label lab-size text-md-right">الايميل </label>

                            <div class="col-md-8">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="اضف الاميل">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                             </div>

                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-md-3 col-form-label lab-size text-md-right"> كلمه السر </label>
                            <div class="col-md-8">



                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="باسورد">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                                        </div>
                        </div>






                        <input class="btn btn-lg btn-primary btn-block text-uppercase" value="تسجيل"  type="submit"/>
                                                    <a class="btn btn-link" href={{url('auth.passwords.reset')}}>
                                هل نسيت كلمه السر
                            </a>


                        <hr class="my-4 bt-hov" >
                        <a href="/register" class="btn btn-lg btn-facebook  btn-block text-uppercase" type="submit">حساب جديد  </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
