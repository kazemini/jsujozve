@extends('layouts.navbar_app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-light mt-2" role="alert">
                <h6>{{ session('status') }}</h6>
            </div>
        @endif

        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-200 border-radius-xl mt-4">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto my-auto h-100">
                        <h3 class="mb-1">
                            {{auth()->user()->name}}
                        </h3>
                        <p class="mb-0 font-weight-normal text-sm">
                            کاربری تایید شده
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <div class="card card-plain h-200">
                                <div class="card-header pb-0 p-3">
                                    <h4 class="mb-0">ویرایش اطلاعات کاربری</h4>
                                    <br>
                                    <form role="form" method="post" action="{{ route('profile.update') }}">
                                        @csrf
                                        @method('PATCH')

                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">ایمیل</label>
                                            <input name="email" type="email" disabled value="{{auth()->user()->email}}" class="form-control">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">نام</label>
                                            <input name="name" type="text" value="{{auth()->user()->name}}"
                                                   class="form-control @error('name') is-invalid @enderror value="{{ old('name') }}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

{{--                                        <div class="input-group input-group-outline mb-3">--}}
{{--                                            <label class="form-label">رمز عبور</label>--}}
{{--                                            <input name="password" type="password" autocomplete="new-password"--}}
{{--                                                   class="form-control @error('password') is-invalid @enderror">--}}
{{--                                            @error('password')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                        <div class="input-group input-group-outline mb-3">--}}
{{--                                            <label class="form-label" autocomplete="new-password">تکرار رمز عبور</label>--}}
{{--                                            <input name="password_confirmation" type="password" class="form-control">--}}
{{--                                        </div>--}}
                                        <div class="text-center">
                                            <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">تغییر
                                                اطلاعات
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr class="vertical dark">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
