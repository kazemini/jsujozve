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
                            ایجاد جزوه جدید
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

                                    <form role="form" method="post" enctype="multipart/form-data" action="{{route('document.create')}}">
                                        @csrf

                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">عنوان</label>
                                            <input id="title" name="title" type="text" class="form-control">
                                        </div>
                                            <p class="text-danger">{{$errors->missing('title') ? '' : 'عنوان اجباری است. حداقل 3، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">دانشگاه</label>
                                            <input id="university" name="university" type="text" class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('university') ? '' : 'نام دانشگاه اجباری است. حداقل 2، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">دانشکده</label>
                                            <input id="department" name="department" type="text" class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('department') ? '' : 'نام دانشکده اجباری است. حداقل 2، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">استاد</label>
                                            <input id="professor" name="professor" type="text" class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('professor') ? '' : 'نام استاد اجباری است. حداقل 3، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">درس</label>
                                            <input id="lesson" name="lesson" type="text"
                                                   class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('lesson') ? '' : 'نام درس اجباری است. حداقل 3، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline input-group-dynamic mb-3">
                                            <textarea id="description" name="description" class="form-control" placeholder="توضیحات بیشتر" value="" rows="3"></textarea>
                                        </div>
                                        <p class="text-danger">{{$errors->missing('description') ? '' : 'توضیحات بیشتر اختیاری است. حداکثر 100 حرف'}}</p>
                                        <div class="mb-3">
                                            <label for="document" class="form-label text-bold">فایل جزوه را اینجا قرار دهید</label>
                                            <input id="document" name="document" class="form-control" type="file">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('document') ? '' : 'فایل جزوه اجباری است. حداکثر 20MB'}}</p>


                                        <div class="text-center">
                                            <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">ایجاد جزوه
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
