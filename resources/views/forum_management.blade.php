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
                            مدیریت انجمن ها
                        </h3>
                        <p class="mb-0 font-weight-normal text-sm">
                            می توانید انجمن های ایجاد شده خود را ویرایش یا حتی حذف کنید. برای دنبال کننده های خود یک پست بگزارید!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="px-2">شناسه</th>
                                    <th class="px-2">عنوان</th>
                                    <th class="text-center">پست جدید</th>
                                    <th class="text-center">توضیحات انجمن</th>
                                    <th class="text-center">ویرایش انجمن</th>
                                    <th class="text-center">حذف انجمن</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($forums as $forum)
                                    <tr>
                                        <td> {{$forum->id}} </td>
                                        <td class="text-ellipsis" style="max-width: 200px"><a
                                                href=""></a>{{$forum->title}}</td>
                                        <td class="text-center">
                                            <form action="{{route('post.management',['forum'=> $forum])}}" method="get">
                                                <input type="hidden" name="forum" value="{{$forum->id}}">
                                                @csrf
                                                <i class="text-3xl fa-brands fa-twitter text-success cursor-pointer" onclick="event.preventDefault();this.closest('form').submit();"></i>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <i class="text-3xl fa-duotone fa-subtitles text-info cursor-pointer" data-bs-toggle=modal data-bs-target="#exampleModal{{$forum->id}}"></i>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('forum.edit',['forum' => $forum])}}">
                                                <i class="text-3xl fa-duotone fa-edit text-secondary"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{route('forum.delete',['forum'=> $forum])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <i class="text-3xl fa-duotone fa-trash text-danger cursor-pointer" onclick="event.preventDefault();this.closest('form').submit();"></i>
                                            </form>
                                        </td>
                                        <div class="modal fade" id="exampleModal{{$forum->id}}"
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
                                                        <p>{{$forum->description}}
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
                <div style="language: en; direction: ltr">{{$forums->links()}}</div>
            </div>
        </div>
    </div>
@endsection
