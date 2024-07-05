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
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <div class="card card-plain h-200">
                                <div class="card-header pb-0 p-3">
                                    <h4 class="mb-0">ایجاد پست جدید</h4>
                                    <br>

                                    <form role="form" method="post" action="{{route('post.store',['forum'=>$forum])}}">
                                        @csrf
                                        <div class="input-group input-group-outline input-group-dynamic mb-3">
                                            <textarea id="content" name="post_content" class="form-control" placeholder="متن پست" value="" rows="3"></textarea>
                                        </div>
                                        <p class="text-danger">{{$errors->missing('post_content') ? '' : 'متن پست اجباری است. حداکثر 1000 حرف'}}</p>

                                        <div class="text-center">
                                            <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-20 mt-4 mb-0">ایجاد پست
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row gx-4 mb-2">
                    <div class="col-auto my-auto h-100">
                        <h3 class="mb-1">
                            لیست پست ها
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">زمان انتشار</th>
                                    <th class="text-center">آخرین ویرایش</th>
                                    <th class="text-center">محتوا</th>
                                    <th class="text-center">ویرایش</th>
                                    <th class="text-center">حذف</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)

                                    <tr>
                                        <td class="text-center">{{$post->created_at->toJalali()->format('Y/m/d')}}</td>
                                        <td class="text-center">{{$post->updated_at->toJalali()->format('Y/m/d')}}</td>

                                        <td class="text-center">
                                            <i class="text-3xl fa-duotone fa-subtitles text-info cursor-pointer" data-bs-toggle=modal data-bs-target="#exampleModal{{$post->id}}"></i>
                                        </td>
                                        <td class="text-center">
                                            <a href="">
                                                <i class="text-3xl fa-duotone fa-edit text-secondary"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <i class="text-3xl fa-duotone fa-trash text-danger cursor-pointer" onclick="event.preventDefault();this.closest('form').submit();"></i>
                                            </form>
                                        </td>
                                        <div class="modal fade" id="exampleModal{{$post->id}}"
                                             data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">توضیحات</h5>
                                                        <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{$post->content}}
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                                data-bs-dismiss="modal">متوجه شدم
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="language: en; direction: ltr">{{$posts->links()}}</div>
            </div>
        </div>
    </div>
@endsection
