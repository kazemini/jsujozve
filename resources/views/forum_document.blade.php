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
                                    <h4 class="mb-0">
                                        @php $forumTitle =  ' انجمن '.$forum->title @endphp
                                        {{$forumTitle}}
                                    </h4>
                                    <br>

                                    <form role="form" method="get" action="{{route('forum.documents',['forum'=>$forum])}}">
                                        @csrf
                                        <div class="input-group input-group-outline input-group-dynamic mb-3">
                                            <div class="w-100">
                                                <input id="search" name="search" class="w-50 mt-4 mb-0 h-75 border-radius-2xl" placeholder="عبارت جستجو"  value="">
                                                <button type="submit"
                                                        class="btn bg-gradient-info w-30 mb-0">جستجو
                                                </button>
                                            </div>
                                        </div>
                                        <p class="text-danger">{{$errors->missing('post_content') ? '' : 'متن جستجو اجباری است'}}</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row mt-3">
                        <div class="col-12 col-md-12 col-xl-12 position-relative">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="px-2">نویسنده</th>
                                    <th class="px-2">ویرایشگر</th>
                                    <th class="px-2">عنوان</th>
                                    <th class="px-2">دانشگاه</th>
                                    <th class="px-2">دانشکده</th>
                                    <th class="px-2">درس</th>
                                    <th class="px-2">استاد</th>
                                    <th class="px-2">بروزرسانی</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($documents as $document)
                                    @php
                                        $log = $document->logs->first();
                                        $publisher = $document->publisher;
                                        $editor = $log->editor;
                                    @endphp
                                    <tr>
                                        <td style="text-overflow: ellipsis;overflow: hidden; max-width: 110px"><a
                                                href=""></a>{{$publisher->name}}</td>
                                        <td class="text-ellipsis" style="max-width: 120px"><a
                                                href=""></a>{{$editor->name}}</td>
                                        <td class="text-ellipsis" style="max-width: 140px"><a
                                                href=""></a>{{$log->title}}</td>
                                        <td class="text-ellipsis" style="max-width: 110px"><a
                                                href=""></a>{{$log->university}}</td>
                                        <td class="text-ellipsis" style="max-width: 110px"><a
                                                href=""></a>{{$log->department}}</td>
                                        <td class="text-ellipsis" style="max-width: 120px"><a
                                                href=""></a>{{$log->lesson}}</td>
                                        <td class="text-ellipsis" style="max-width: 140px"><a
                                                href=""></a>{{$log->professor}}</td>
                                        <td>{{$log->created_at->toJalali()->format('Y/m/d')}}</td>
                                        <td>
                                            <i class="text-2xl fa-duotone fa-subtitles text-info cursor-pointer" data-bs-toggle=modal
                                               data-bs-target="#exampleModal{{$log->id}}">
                                            </i>
                                        </td>
                                        <td>
                                            <a href="{{ Storage::url($document->download_link)}}">
                                                <i class="text-2xl fa-duotone fa-download text-success">
                                                </i>
                                            </a>
                                        </td>
                                        <div class="modal fade" id="exampleModal{{$log->id}}"
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
                                                        <p>{{$log->description}}
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
                <div style="language: en; direction: ltr">{{$documents->links()}}</div>
            </div>
        </div>
    </div>
@endsection
