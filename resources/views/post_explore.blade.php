@extends('layouts.navbar_app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-light mt-2" role="alert">
                <h6>{{ session('status') }}</h6>
            </div>
        @endif

        <div class="container-fluid px-2 px-md-1">
            <div class="page-header min-height-200 border-radius-xl mt-4">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto my-auto h-100">
                        <h3 class="mb-1">
                            کاوش در دنیای پست ها
                        </h3>
                        <p class="mb-0 font-weight-normal text-sm">
                            در انجمن ها عضو شو، تا بتوانی پست هاشون رو اینجا ببینی
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="px-2">نام انجمن</th>
                                    <th class="px-2">متن پست</th>
                                    <th class="text-center">تاریخ ایجاد</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td style="text-overflow: ellipsis;overflow: hidden; max-width: 110px">{{$post->forum->title}}</td>
                                        <td class="cursor-pointer" style="text-overflow: ellipsis;overflow: hidden; max-width: 300px"
                                        data-bs-toggle=modal data-bs-target="#exampleModal{{$post->id}}"><u>{{$post->content}}</u></td>
                                        <td class="text-center">{{$post->created_at->toJalali()->format('Y/m/d')}}</td>
                                        <div class="modal fade" id="exampleModal{{$post->id}}" data-bs-keyboard="false"
                                             tabindex="-1"
                                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">متن پست</h5>
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
