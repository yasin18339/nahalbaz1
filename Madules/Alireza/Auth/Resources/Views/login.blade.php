@extends('Auth::layouts.master')

@section('title', 'ورود')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            @include('Auth::section.logo')
            <div class="card">

                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <h4 class="text-uppercase mt-0">ورود به حساب کاربری</h4>
                    </div>
                    @error('data_problem')
                    <div class="alert alert-danger">{{$message}}</div>

                    @enderror
                    <form action="{{ route('auth.login.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                   type="email" id="email" name="email" placeholder="ایمیل خود را وارد کنید">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">رمز عبور</label>
                            <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
                                   type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>

                            @enderror
                        </div>
                            <div class="form-group">
                                <p>
                                    رمز عبور خود را فراموش کردید؟<a href="{{ route('auth.password.email') }}"> بازیابی رمز عبور</a>
                                </p>
                            </div>

                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> ورود </button>
                        </div>

                    </form>

                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">حساب کاربری ندارید؟
                        <a href="{{ route('auth.register') }}" class="text-dark ml-1"><b>ساخت حساب کاربری</b></a>
                    </p>
                </div>
            </div>


        </div>
    </div>
@endsection
