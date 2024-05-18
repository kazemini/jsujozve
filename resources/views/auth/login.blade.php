@extends('layouts.app')

@section('content')
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div
                            class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                            style="background-image: url('{{url("assets/img/illustrations/illustration-signin.jpg")}}'); background-size: cover;"></div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto me-lg-auto ms-lg-5">
                        <div class="card card-plain">
                            <div class="card-header text-center">
                                <h4 class="font-weight-bolder">ورود به حساب</h4>
                                <p class="mb-0">برای ورود، ایمیل و رمز عبور خود را وارد کنید</p>
                            </div>
                            <div class="card-body mt-2">
                                <form role="form" method="post" action="{{ route('login') }}">
                                    @csrf

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">ایمیل</label>
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">رمز عبور</label>
                                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input ms-3" type="checkbox" id="rememberMe">
                                        <label class="form-check-label mb-0" for="rememberMe">مرا به خاطر بسپار</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">ورود
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    هنوز ثبت نام نکرده اید؟
                                    <a href="{{route('register')}}" class="text-primary text-gradient font-weight-bold">ثبت
                                        نام</a>
                                </p>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        آیا رمزعبور خود را فراموش کرده اید؟
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
