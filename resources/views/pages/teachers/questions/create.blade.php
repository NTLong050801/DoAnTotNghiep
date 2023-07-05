@extends('layouts.main')
@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <h3>Thêm Câu Hỏi</h3>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <form class="form" action="{{route('teachers.questions.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll"
                     data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                     data-kt-scroll-max-height="auto"
                     data-kt-scroll-dependencies="#kt_modal_add_role_header"
                     data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                    <!--begin::Input group-->
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold form-label mb-2" for="name">
                            <span class="required">Câu hỏi</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control" placeholder="Nhập câu hỏi"
                               name="name"
                               id="name" value=""/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <div class="row">
                        <div class="col-sm-6 mt-5">
                            <div class="form-group">
                                <label class="fs-5 fw-bold form-label mb-2" for="option1">Đáp án 1</label>
                                <input type="text" required="required" name="option1" id="option1"
                                       placeholder="Nhập đáp án" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="form-group">
                                <label class="fs-5 fw-bold form-label mb-2" for="option_2">Đáp án 2</label>
                                <input type="text" required="required" name="option2" id="option2"
                                       placeholder="Nhập đáp án 2" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="form-group">
                                <label class="fs-5 fw-bold form-label mb-2" for="option3">Đáp án 3</label>
                                <input type="text" required="required" name="option3" id="option3"
                                       placeholder="Nhập đáp án 3" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="form-group">
                                <label class="fs-5 fw-bold form-label mb-2" for="option4">Đáp án 4</label>
                                <input type="text" required="required" name="option4" id="option4"
                                       placeholder="Nhập đáp án 4" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="row">
                        <div class="form-group col-sm-6 mt-5">
                            <label class="fs-5 fw-bold mb-2" for="ans">
                                <span class="required">Đáp án đúng</span>
                            </label>
                            <select class="form-select" aria-label="Default select example" name="ans" id="ans">
                                <option value="option1">Đáp án 1</option>
                                <option value="option2">Đáp án 2</option>
                                <option value="option3">Đáp án 3</option>
                                <option value="option4">Đáp án 4</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 mt-5">
                            <label class="fs-5 fw-bold mb-2" for="file">
                                <span class="required">Chọn ảnh</span>
                            </label>
                            <input type="file" name="file" class="form-control" id="file">
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Scroll-->
                <!--begin::Actions-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold form-label mb-2" for="note">
                        <span class="">Ghi chú</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control" placeholder="Nhập ghi chú"
                           name="note"
                           id="note" value=""/>
                    <!--end::Input-->
                </div>
                <div class="d-flex mt-5 justify-content-end">
                    <a href="{{route('teachers.questions.index')}}">
                        <button type="button" class="btn btn-light me-3">
                            Trở về
                        </button>
                    </a>
                    <button type="submit" class="btn btn-primary ms-5">
                        <span class="indicator-label">Tạo</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
        <!--end::Card body-->
    </div>
@endsection
