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
                                    <br>
                                    <form role="form" method="post" enctype="multipart/form-data"
                                          action="{{route('document.update',['document'=>$document])}}">
                                        @csrf
                                        @method('POST')
                                        @php $log = $document->logs->first() @endphp
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">عنوان</label>
                                            <input id="title" name="newTitle" type="text" value="{{$log->title}}"
                                                   class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">دانشگاه</label>
                                            <input id="university" name="newUniversity" type="text"
                                                   value="{{$log->university}}" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">دانشکده</label>
                                            <input id="department" name="newDepartment" type="text"
                                                   value="{{$log->department}}" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">استاد</label>
                                            <input id="professor" name="newProfessor" type="text"
                                                   value="{{$log->professor}}" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">درس</label>
                                            <input id="lesson" name="newLesson" type="text" value="{{$log->lesson}}"
                                                   class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline input-group-dynamic mb-3">
                                            <textarea id="description" name="newDescription" class="form-control"
                                                      placeholder="توضیحات بیشتر"
                                                      rows="3">{{$log->description}}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="document" class="form-label text-bold">در صورت تمایل به تغییر
                                                فایل جزوه، فایل جدید را اینجا قرار دهید</label>
                                            <div class="row align-items-start">
                                                <div class="col">
                                                    <input id="document" name="newDocument" class="form-control"
                                                           type="file" onclick="selectFile()">
                                                </div>
                                                <div class="col">
                                                    <button id="btnRemoveFile" class="btn btn-outline-danger mb-0" type="button"
                                                            style="float: left; display: none" onclick="removeFile()">حذف
                                                        فایل
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


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

    <script>
        function selectFile() {
            const selected = document.getElementById("document");
            selected.addEventListener('change', function () {
                if (selected) {
                    document.getElementById("btnRemoveFile").style.display = 'inline';
                }
            }, false);
        }

        function removeFile() {
            document.getElementById("document").value = '';
            document.getElementById("btnRemoveFile").style.display = 'none';
        }
    </script>
@endsection
