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
                            مدیریت جزوه ها
                        </h3>
                        <p class="mb-0 font-weight-normal text-sm">
                            می توانید جزوه های منتشر شده خود را ویرایش یا حذف کنید
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
                                    <th class="px-2">دانشگاه</th>
                                    <th class="px-2">دانشکده</th>
                                    <th class="px-2">درس</th>
                                    <th class="px-2">استاد</th>
                                    <th class="px-2">آخرین بروزرسانی</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($documents as $document)
                                    <tr>
                                        @php $log = $document->logs->first() @endphp
                                        <td> {{$document->id}} </td>
                                        <td><a href=""></a>{{$log->title}}</td>
                                        <td><a href=""></a>{{$log->university}}</td>
                                        <td><a href=""></a>{{$log->department}}</td>
                                        <td><a href=""></a>{{$log->lesson}}</td>
                                        <td><a href=""></a>{{$log->professor}}</td>
                                        <td>{{$document->created_at}}</td>
                                        <td>
                                            <a href=""><button type="submit" class="btn btn-info mb-0">ویرایش</button></a>                                                    </td>
                                        <td>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mb-0">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection