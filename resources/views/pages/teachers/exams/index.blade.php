@extends('layouts.main')
@section('content')
    <!--begin::Form-->
    <form action="#" method="get">
        <!--begin::Card-->
        <div class="card mb-7">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Compact form-->
                <div class="d-flex align-items-center">
                    <!--begin::Input group-->
                    <div class="position-relative w-md-400px me-md-2">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span
                            class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                            <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" class="form-control form-control-solid ps-10" name="keyword" value="{{request('keyword')}}"
                               placeholder="Search">
                    </div>
                    <!--end::Input group-->
                    <!--begin:Action-->
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-primary me-5">Search</button>
                    </div>
                    <!--end:Action-->
                </div>
                <!--end::Compact form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </form>
    <!--end::Form-->
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack pb-7">
        <!--begin::Title-->
        <div class="d-flex flex-wrap align-items-center my-1">
            <h3 class="fw-bold me-5 my-1">{{$exams->count() ? 'Tất cả: '.$exams->count().' đề thi' : 'Chưa có đề thi nào'}}
        </div>
        <!--end::Title-->
        <!--begin::Controls-->
        <div class="d-flex flex-wrap my-1">
            <!--begin::Tab nav-->
            <ul class="nav nav-pills me-6 mb-2 mb-sm-0" role="tablist">
                <li class="nav-item m-0" role="presentation">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                       data-bs-toggle="tab" href="#kt_project_users_card_pane" aria-selected="true" role="tab">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <img src="{{asset('assets/media/icons/duotune/general/gen024.svg')}}" alt="">
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </li>
                <li class="nav-item m-0" role="presentation">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab"
                       href="#kt_project_users_table_pane" aria-selected="false" role="tab" tabindex="-1">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2">
                            <img src="{{asset('assets/media/icons/duotune/abstract/abs015.svg')}}" alt="">
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </li>
            </ul>
            <!--end::Tab nav-->
            <!--begin::Actions-->
            <div class="d-flex my-0">
                <!--begin::Select-->
                <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter"
                        class="form-select form-select-sm border-body bg-body w-150px me-5 select2-hidden-accessible"
                        data-select2-id="select2-data-16-bqep" tabindex="-1" aria-hidden="true"
                        data-kt-initialized="1">
                    <option value="1" data-select2-id="select2-data-18-6v0j">Recently Updated</option>
                    <option value="2">Last Month</option>
                    <option value="3">Last Quarter</option>
                    <option value="4">Last Year</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                               data-select2-id="select2-data-17-g4ss" style="width: 100%;"><span
                        class="selection"><span
                            class="select2-selection select2-selection--single form-select form-select-sm border-body bg-body w-150px me-5"
                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                            aria-disabled="false" aria-labelledby="select2-status-3f-container"
                            aria-controls="select2-status-3f-container"><span class="select2-selection__rendered"
                                                                              id="select2-status-3f-container"
                                                                              role="textbox" aria-readonly="true"
                                                                              title="Recently Updated">Recently Updated</span><span
                                class="select2-selection__arrow" role="presentation"><b
                                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                                                                       aria-hidden="true"></span></span>
                <!--end::Select-->
                <!--begin::Select-->
                <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export"
                        class="form-select form-select-sm border-body bg-body w-100px select2-hidden-accessible"
                        data-select2-id="select2-data-19-6tnf" tabindex="-1" aria-hidden="true"
                        data-kt-initialized="1">
                    <option value="1" data-select2-id="select2-data-21-aeo0">Excel</option>
                    <option value="1">PDF</option>
                    <option value="2">Print</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                               data-select2-id="select2-data-20-4d8h" style="width: 100%;"><span
                        class="selection"><span
                            class="select2-selection select2-selection--single form-select form-select-sm border-body bg-body w-100px"
                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                            aria-disabled="false" aria-labelledby="select2-status-h5-container"
                            aria-controls="select2-status-h5-container"><span class="select2-selection__rendered"
                                                                              id="select2-status-h5-container"
                                                                              role="textbox" aria-readonly="true"
                                                                              title="Excel">Excel</span><span
                                class="select2-selection__arrow" role="presentation"><b
                                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                                                                       aria-hidden="true"></span></span>
                <!--end::Select-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Controls-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Tab Content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div id="kt_project_users_card_pane" class="tab-pane fade active show" role="tabpanel">
            <!--begin::Row-->
            <div class="row g-6 g-xl-9">
                <div class="col-md-6 col-xxl-4">
                    <!--begin::Card-->
                    <div class="card h-md-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center">
                            <a href="{{route('teachers.exams.create')}}"> <!--begin::Button-->
                                <button type="button" class="btn btn-clear d-flex flex-column flex-center"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                                    <!--begin::Illustration-->
                                    <img src="{{asset('assets/media/illustrations/sketchy-1/4.png')}}" alt=""
                                         class="mw-100 mh-150px mb-7">
                                    <!--end::Illustration-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Tạo đề thi</div>
                                    <!--end::Label-->
                                </button>
                                <!--begin::Button-->
                            </a>

                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                @foreach($exams as $exam)
                    <!--begin::Col-->
                    <div class="col-md-6 col-xxl-4">
                        <div class="card card-flush h-md-100">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{$exam->name}}</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-1">
                                <!--begin::Users-->
                                <div class="fw-bold text-gray-600 mb-5">Tổng số thí sinh: <b>5</b></div>
                                <!--end::Users-->
                                <!--begin::Permissions-->
                                <div class="d-flex flex-column text-gray-600">
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Thời gian làm bài: <b>{{$exam->minute_time}}</b>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Số câu hỏi: <b>{{$exam->number_question}}</b>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Trộn đề: <b>@if($exam->random) Có @else Không @endif</b>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Ngày bắt đầu thi: {{\Carbon\Carbon::parse($exam->date_start)->format('d/m/Y')}}
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Ngày kết thúc thi: {{\Carbon\Carbon::parse($exam->date_end)->format('d/m/Y')}}
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Mật khẩu:{{$exam->password}}
                                    </div>
                                </div>
                                <!--end::Permissions-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer flex-wrap pt-0">
                                <a href="#"
                                   class="btn btn-info btn-active-primary my-1 me-2">Chi tiết</a>
                                <a href="{{route('teachers.exams.edit',$exam)}}">
                                    <button type="button" class="btn btn-warning btn-active-light-primary my-1">Sửa
                                    </button>
                                </a>
                                <a href="{{route('teachers.exams.destroy',$exam)}}"
                                   class="btn btn-danger btn-active-primary my-1 me-2">Xóa bài thi</a>
                            </div>
                            <!--end::Card footer-->
                        </div>
                    </div>
                    <!--end::Col-->
                @endforeach
            </div>
            <!--end::Row-->
            <!--begin::Pagination-->
            <div class="d-flex flex-stack flex-wrap pt-10">
                <!--begin::Pages-->
                <ul class="pagination">
                        {{$exams->links()}}
                </ul>
                <!--end::Pages-->
            </div>
            <!--end::Pagination-->
        </div>
        <!--end::Tab pane-->
        <!--begin::Tab pane-->
        <div id="kt_project_users_table_pane" class="tab-pane fade" role="tabpanel">
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <div id="kt_project_users_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table id="kt_project_users_table"
                                       class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable no-footer">
                                    <!--begin::Head-->
                                    <thead class="fs-7 text-gray-400 text-uppercase">
                                    <tr>
                                        <th class="min-w-150px sorting" tabindex="0"
                                            aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                            aria-label="Manager: activate to sort column ascending"
                                            style="width: 0px;">Tên đề thi
                                        </th>
                                        <th class="min-w-50px sorting" tabindex="0"
                                            aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                            aria-label="Date: activate to sort column ascending"
                                            style="width: 0px;">Thời gian làm bài (phút)
                                        </th>
                                        <th class="min-w-90px sorting" tabindex="0"
                                            aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                            aria-label="Amount: activate to sort column ascending"
                                            style="width: 0px;">Số câu hỏi
                                        </th>
                                        <th class="min-w-90px sorting" tabindex="0"
                                            aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                            aria-label="Amount: activate to sort column ascending"
                                            style="width: 0px;">Trộn đề
                                        </th>
                                        <th class="min-w-90px sorting" tabindex="0"
                                            aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                            aria-label="Amount: activate to sort column ascending"
                                            style="width: 0px;">Số thí sinh
                                        </th>
                                        <th class="min-w-90px sorting" tabindex="0"
                                            aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                            aria-label="Amount: activate to sort column ascending"
                                            style="width: 0px;">Ngày bắt đầu
                                        </th>
                                        <th class="min-w-90px sorting" tabindex="0"
                                            aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending"
                                            style="width: 0px;">Trạng thái
                                        </th>
                                        <th class="min-w-100px text-end sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Details" style="width: 0px;">Hành động
                                        </th>
                                    </tr>
                                    </thead>
                                    <!--end::Head-->
                                    <!--begin::Body-->
                                    <tbody class="fs-6">
                                        @foreach($exams as $exam)
                                            <tr class="odd">
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="mb-1 text-gray-800 text-hover-primary">{{$exam->name}}</a>
                                                            <div class="fw-semibold fs-6 text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td><span>{{$exam->minute_time}}</span></td>
                                                <td><span>{{$exam->number_question}}</span></td>
                                                <td>
                                                    <span class="badge badge-light-primary fw-bold px-4 py-3">{{$exam->random ? 'Có' : 'Không'}}</span>
                                                </td>
                                                <td>12313 thí sinh</td>
                                                <td><span>{{\Carbon\Carbon::parse($exam->date_start)->format('d/m/Y')}}</span></td>
                                                <td><span>{{$exam->status}}</span></td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
															<img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
															</span>
                                                        <!--end::Svg Icon--></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 107; position: fixed; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(-59.2px, -88px, 0px);">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{route('teachers.exams.edit',$exam)}}" class="menu-link px-3">Sửa</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{route('teachers.exams.destroy',$exam)}}" class="menu-link px-3" data-kt-users-table-filter="delete_row">Xóa</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Body-->
                                </table>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                         id="kt_project_users_table_paginate">
                                        <ul class="pagination">
                                            {{$exams->links()}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Tab pane-->
    </div>
    <!--end::Tab Content-->
@endsection