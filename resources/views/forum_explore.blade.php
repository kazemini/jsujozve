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
                            کاوش در دنیای انجمن ها
                        </h3>
                        <p class="mb-0 font-weight-normal text-sm">
                            اینجا انجمن مدنظرت رو پیدا کن تا راحت تر به جزوه ها دسترسی داشته باشی
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
                                    <th class="px-2">ایجاد کننده</th>
                                    <th class="text-center">تاریخ ایجاد</th>
                                    <th class="text-center">توضیحات</th>
                                    <th class="text-center">دنبال می کنم؟</th>
                                    <th class="text-center">دنبال کننده ها</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($forums as $forum)
                                    <tr>
                                        <td style="text-overflow: ellipsis;overflow: hidden; max-width: 110px">{{$forum->title}}</td>
                                        <td class="text-ellipsis" style="max-width: 110px">{{$forum->admin->name}}</td>
                                        <td class="text-center">{{$forum->created_at->toJalali()->format('Y/m/d')}}</td>
                                        <td class="text-center">
                                            <i class="text-2xl fa-duotone fa-subtitles text-info cursor-pointer" data-bs-toggle=modal
                                               data-bs-target="#exampleModal{{$forum->id}}">
                                            </i>
                                        </td>
                                        <td class="text-center">
                                            @if($forum->admin_id == auth()->user()->id)
                                                ایجاد کننده هستید
                                            @else
                                                <form method="post" action="{{route('forum.subscribe',['forum'=>$forum])}}">
                                                    @csrf
                                                    @method('POST')
                                                    <i class="text-2xl fa-duotone fa-people-pulling cursor-pointer
                                                 @if($forum->subscribed->isNotEmpty())
                                                   text-success
                                                 @else
                                                   text-secondary
                                                @endif "
                                                       onclick="event.preventDefault();this.closest('form').submit();"></i>
                                                </form>
                                            @endif
                                        </td>
                                        <td class="text-center">{{$forum->subscribers_count}}</td>
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
