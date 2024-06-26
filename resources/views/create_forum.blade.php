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
                            ایجاد انجمن جدید
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <div class="card card-plain h-200">
                                <div class="card-header pb-0 p-3">
                                    <h4 class="mb-0">اطلاعات کلی</h4>
                                    <br>

                                    <form role="form" method="post" enctype="multipart/form-data" action="{{route('forum.store')}}">
                                        @csrf

                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">عنوان</label>
                                            <input id="title" name="title" type="text" class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('title') ? '' : 'عنوان اجباری است. حداقل 3، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline input-group-dynamic mb-3">
                                            <textarea id="description" name="description" class="form-control" placeholder="توضیحات انجمن" value="" rows="3"></textarea>
                                        </div>
                                        <p class="text-danger">{{$errors->missing('description') ? '' : 'توضیحات اجباری است. حداکثر 1000 حرف'}}</p>

                                        <div class="text-center">
                                            <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">ایجاد انجمن
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
