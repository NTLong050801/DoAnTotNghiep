@extends('layouts.main')
@section('content')
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <form class="form" action="{{route('teachers.questions.update',$question)}}" method="post" enctype="multipart/form-data">
                @csrf
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll"
                     data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                     data-kt-scroll-max-height="auto"
                     data-kt-scroll-dependencies="#kt_modal_add_role_header"
                     data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold form-label mb-2" for="name">
                            <span class="required">Câu hỏi</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid bg-secondary" placeholder="Nhập câu hỏi"
                               name="name"
                               id="name" value="{{$question->name}}"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <div class="row">
                        @foreach(json_decode($question->options) as $key=>$option)
                            <div class="col-sm-6 mt-5">
                                <div class="form-group">
                                    <label class="fs-5 fw-bold form-label mb-2" for="{{$key}}">Đáp án {{$loop->iteration}}</label>
                                    <input type="text" required="required" name="{{$key}}" id="{{$key}}"
                                           placeholder="Nhập đáp án" class="form-control"
                                           value="{{$option}}"
                                    >
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--begin::Input group-->
                    <div class="row">
                        <div class="form-group col-sm-6 mt-5">
                            <label class="fs-5 fw-bold mb-2" for="ans">
                                <span class="required">Đáp án đúng</span>
                            </label>
                            <select class="form-select" aria-label="Default select example" name="ans" id="ans">
                                <option value="option1" @if($question->ans == 'option1') selected @endif >Đáp án 1</option>
                                <option value="option2" @if($question->ans == 'option2') selected @endif>Đáp án 2</option>
                                <option value="option3" @if($question->ans == 'option3') selected @endif>Đáp án 3</option>
                                <option value="option4" @if($question->ans == 'option4') selected @endif>Đáp án 4</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 mt-5">
                            <label class="fs-5 fw-bold mb-2" for="file">
                                <span class="required">Chọn ảnh</span>
                            </label>
                            <input type="file" name="file" value="{{$question->image}}" class="form-control" id="file">
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Scroll-->
                <!--begin::Actions-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold form-label mb-2" for="note">
                        <span class="required">Ghi chú</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-solid bg-secondary" placeholder="Nhập ghi chú"
                           name="note"
                           id="note" value="{{$question->note}}"/>
                    <!--end::Input-->
                </div>
                <div class="text-center mt-15">
                    <a href="{{route('teachers.questions.index')}}">
                        <button type="button" class="btn btn-light me-3">
                            Trở về
                        </button>
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Sửa</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
        <!--end::Card body-->
    </div>
@endsection
