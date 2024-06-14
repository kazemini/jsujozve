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
                            ویرایش جزوه
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <div class="card card-plain h-200">
                                <div class="card-header pb-0 p-3">
                                    <h4 class="mb-0">اطلاعات کلی</h4>
                                    <p class="mb-0 font-weight-normal text-sm">
                                        با ویرایش این جزوه، به صحت و یکپارچگی داده های ما کمک کنید :)
                                    </p>
                                    <br>
                                    <form role="form" method="post" enctype="multipart/form-data"
                                          action="{{route('document.public-update',['document'=>$document])}}">
                                        @csrf
                                        @method('POST')
                                        @php $log = $document->logs->first() @endphp
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">عنوان</label>
                                            <input id="title" name="newTitle" type="text" value="{{$log->title}}"
                                                   class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('newTitle') ? '' : 'عنوان اجباری است. حداقل 3، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">دانشگاه</label>
                                            <input id="university" name="newUniversity" type="text"
                                                   value="{{$log->university}}" class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('newUniversity') ? '' : 'نام دانشگاه اجباری است. حداقل 2، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">دانشکده</label>
                                            <input id="department" name="newDepartment" type="text"
                                                   value="{{$log->department}}" class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('newDepartment') ? '' : 'نام دانشکده اجباری است. حداقل 2، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">استاد</label>
                                            <input id="professor" name="newProfessor" type="text"
                                                   value="{{$log->professor}}" class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('newProfessor') ? '' : 'نام استاد اجباری است. حداقل 3، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">درس</label>
                                            <input id="lesson" name="newLesson" type="text" value="{{$log->lesson}}"
                                                   class="form-control">
                                        </div>
                                        <p class="text-danger">{{$errors->missing('newLesson') ? '' : 'نام درس اجباری است. حداقل 3، حداکثر 100 حرف'}}</p>
                                        <div class="input-group input-group-outline input-group-dynamic mb-3">
                                            <textarea id="description" name="newDescription" class="form-control"
                                                      placeholder="توضیحات بیشتر"
                                                      rows="3">{{$log->description}}</textarea>
                                        </div>
                                        <p class="text-danger">{{$errors->missing('newDescription') ? '' : 'توضیحات بیشتر اختیاری است. حداکثر 1000 حرف'}}</p>
                                        <div class="text-center">
                                            <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                                                بروزرسانی جزوه
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
