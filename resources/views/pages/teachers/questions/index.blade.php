@extends('layouts.main')
@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <form action="" method="GET">
                    @csrf
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                    </span>
                        <!--end::Svg Icon-->
                        <div class="input-group-sm d-flex">
                            <input type="text" data-kt-customer-table-filter="search"
                                   class="form-control form-control-solid w-350px ps-15 bg-secondary"
                                   placeholder="Nhập câu hỏi" name="search" value="{{request()->get('search')}}">
                            <button type="submit" class="btn btn-sm btn-success s-15">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div id="toolbar" class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{route('teachers.questions.review')}}" class="align-self-center">
                        <button class="btn btn-sm btn-danger me-5">Tham khảo câu hỏi</button>
                    </a>
                    <!--begin::Export-->
                    <button type="button" class="btn btn-sm btn-light-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#kt_questions_import_modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                        <span class="svg-icon svg-icon-2">
                            <img src="{{asset('assets/media/icons/duotune/arrows/arr082.svg')}}" alt="">
                        </span>
                        <!--end::Svg Icon-->Import
                    </button>
                    <!--end::Export-->


                    <!--begin::Add customer-->
                    <a href="{{route('teachers.questions.create')}}" class="align-self-center">
                        <button type="button" class="btn btn-sm btn-primary">Thêm mới</button>
                    </a>
                    <!--end::Add customer-->
                </div>
                <!-- Modal -->
                <div class="modal fade" id="kt_questions_import_modal" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{route('teachers.questions.import')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập file câu hỏi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body pt-0">
                                    <div class="mb-3">
                                        <label for="file" class="form-label">Chọn file</label>
                                        <input class="form-control" name="file" type="file" id="file">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                                    </button>
                                    <button type="submit" class="btn btn-primary">Nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div id="select" class="d-flex justify-content-end align-items-center d-none"
                     data-kt-customer-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count" id="selected_count">10</span>Selected
                    </div>
                    <button type="button" class="btn btn-sm btn-danger" id="delete_selected"
                            data-kt-customer-table-select="delete_selected">Xóa
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           id="kt_questions_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2 sorting_disabled" aria-label="
            								" style="width: 29.9px;">
                                <div class="form-check form-check-sm me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           id="checkboxAll"
                                           data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                                </div>
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                aria-label="Name: activate to sort column ascending"
                                style="width: 162.125px;">Câu hỏi @if($questions->total()> 0)
                                    <span class="text-danger">({{$questions->total()}})</span>
                                @endif
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                aria-label="Ans: activate to sort column ascending"
                                style="width: 200.712px;">Đáp án
                            </th>
                            <th class="min-w-30px sorting" tabindex="0" aria-controls="kt_customers_table"
                                aria-label="Company: activate to sort column ascending"
                                style="width: 30px;">Ghi chú
                            </th>
                            <th class="text-end min-w-70px sorting_disabled" aria-label="Actions" style="width: 90px;">
                                Actions
                            </th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-semibold">
                        @foreach($questions as $question)
                            <tr class="odd border-bottom border-danger">
                                <!--begin::Checkbox-->
                                <td>
                                    <div
                                        class="form-check form-check-sm me-3 justify-items-center">
                                        <input class="form-check-input" type="checkbox"
                                               value="{{$question->id}}">
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="#"
                                       class="text-gray-800 text-hover-primary mb-1"><span class="text-danger">{{$loop->iteration+($questions->currentPage()-1)*$questions->perPage()}}.</span> {{$question->name}}
                                    </a>
                                    <div class="text-center mt-5">
                                        <a target="_blank" href="{{asset('storage/'.$question->image)}}"><img
                                                src="{{asset('storage/'.$question->image)}}" style="width: 100px"
                                                alt=""></a>
                                    </div>
                                </td>
                                <td class="">
                                    @foreach(json_decode($question->options) as $key=>$option)
                                        <div class="form-check mt-5 ">
                                            <input class="form-check-input" type="radio"
                                                   name="{{$question->id}}"
                                                   id="{{$question->id.$key}}" value="{{$key}}"
                                                   @if($question->ans == $key) checked @endif>
                                            <label class="form-check-label text-black fw-bolder"
                                                   for="{{$question->id.$key}}">
                                                {{$option}}
                                            </label>
                                        </div>
                                    @endforeach
                                </td>
                                <!--end::Name=-->
                                <td>
                                    {{$question->note}}
                                </td>
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Hành động
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                                    <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}"
                                                         alt="">
                                                </span>
                                        <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{route('teachers.questions.edit',$question)}}"
                                               class="menu-link px-3">Sửa</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{route('teachers.questions.destroy',$question)}}"
                                               class="menu-link px-3 text-danger"
                                               data-kt-customer-table-filter="delete_row">Xóa</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                        @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                            <ul>
                                {{$questions->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
@section('javascript')
    <script src="{{asset('assets/js/custom/pages-teachers-question.js')}}"></script>
@endsection
