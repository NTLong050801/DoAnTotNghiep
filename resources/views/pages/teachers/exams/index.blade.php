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
                        <input type="text" class="form-control form-control-solid ps-10" name="keyword"
                               value="{{request('keyword')}}"
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
                    <div class="col-md-6 col-xxl-4 ">
                        <div class="card card-flush h-md-100" @if($exam->is_end) style="background-color: #e9bbc7" @endif>
                            <!--begin::Card header-->
                            <div class="card-header " >
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
                                <div class="fw-bold text-gray-600 mb-5">Tổng số thí sinh: <b>{{count($exam->user)}}</b>
                                </div>
                                <!--end::Users-->
                                <!--begin::Permissions-->
                                <div class="d-flex flex-column text-gray-600">
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Thời gian làm bài:
                                        <b>{{$exam->minute_time}}</b>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Số câu hỏi:
                                        <b>{{$exam->number_question}}</b>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Ngày bắt đầu
                                        thi: {{\Carbon\Carbon::parse($exam->date_start)->format('d/m/Y')}}
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Mật khẩu: &nbsp <b
                                            class="now_password ms-5" exam_id="{{$exam->id}}">{{$exam->password}}</b>
                                        <button class="ms-5 btn btn-sm btn-secondary btn_copy "><i
                                                class="fa-solid fa-copy"></i></button>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Cho phép xem đáp
                                        án: <b class="text-danger"> &nbsp {{$exam->is_see_answers ? "Có" : "Không"}}</b>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>Trạng thái: &nbsp <b class="text-danger">
                                            @if($exam->status == '1')
                                                Đã kích hoạt
                                            @else
                                                Chưa kích hoạt
                                            @endif</b>
                                    </div>
                                </div>
                                <!--end::Permissions-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer flex-wrap pt-0 align-self-center">
                                <div class=" flex-wrap text-center">
                                    <a href="{{route('teachers.exams.show',$exam)}}"
                                       class="btn btn-sm btn-info btn-active-primary my-1 me-2"
                                       data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                       data-bs-placement="bottom" title="Chi tiết">
                                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                                    </a>
                                    @if($exam->status == '0')
                                        <a href="{{route('teachers.exams.active',[$exam,1])}}">
                                            <button exam_id="{{$exam->id}}"
                                                    class="btn btn-sm btn-success my-1 me-2 activeStatus"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                                    data-bs-placement="bottom" title="Kích hoạt bài thi"
                                            >
                                                <i class="fa-solid fa-lock"></i>
                                            </button>
                                        </a>
                                    @else
                                        <a href="{{route('teachers.exams.active',[$exam,0])}}">
                                            <button class="btn btn-sm btn-success my-1 me-2 cancelStatus"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                                    data-bs-placement="bottom" title="Hủy kích hoạt"
                                            >
                                                <i class="fa-solid fa-lock-open"></i>
                                            </button>
                                        </a>
                                    @endif
                                    <button class="btn btn-sm btn-danger
                                btn-sm btn-active-light-primary my-1 me-2 newPassword" name_exam="{{$exam->name}}"
                                            id_exam="{{$exam->id}}"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                            data-bs-placement="bottom" title="Tạo mật khẩu ngẫu nhiên"
                                    >
                                        <i class="fa-solid fa-key"></i>
                                    </button>
                                    <a href="#" exam_id="{{$exam->id}}"
                                       class="btn btn-sm  btn-active-success my-1 me-2 is_see_answers"
                                       data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                       data-bs-placement="bottom"
                                       title="{{$exam->is_see_answers ?"Không cho phép xem đáp án" :'Cho phép xem đáp án'}}"
                                       style="background-color: #0b6a2a">
                                        @if($exam->is_see_answers )
                                            <i class="fa-regular fa-eye"></i>
                                        @else
                                            <i class="fa-regular fa-eye-slash"></i>
                                        @endif
                                    </a>
                                </div>
                                <div class=" flex-wrap text-center ">
                                    <button class="btn btn-sm btn-primary
                                btn-sm btn-active-light-primary my-1 me-2 chartExams"
                                            id_exam="{{$exam->id}}" name_exam="{{$exam->name}}"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                            data-bs-placement="bottom" title="Thống kê"
                                    >
                                        <i class="fa-solid fa-chart-simple"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger
                                btn-sm btn-active-light-danger my-1 me-2 endExam"
                                            id_exam="{{$exam->id}}" name_exam="{{$exam->name}}"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                            data-bs-placement="bottom" title="Kết thúc"
                                    >
                                        <i class="fa-solid fa-power-off"></i>
                                    </button>
                                    <a href="{{route('teachers.exams.edit',$exam)}}">
                                        <button type="button"
                                                class="btn btn-sm btn-warning btn-active-light-primary  me-2 my-1"
                                                data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                                data-bs-placement="right" title="Sửa bài thi"
                                        >
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>
                                    <a href="{{route('teachers.exams.destroy',$exam)}}"
                                       class="btn btn-sm btn-dark btn-active-primary my-1 me-2"
                                       data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                                       data-bs-placement="right" title="Xóa bài thi"
                                    ><i class="fa-sharp fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                            <!--end::Card footer-->

                        </div>
                    </div>
                    <!--end::Col-->
                @endforeach
            </div>
            <div class="modal" tabindex="-1" id="modal_new_password">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <!--begin::Input group-->
                                    <div class="input-group">
                                        <!--begin::Input-->
                                        <input id="new_password_random" readonly type="text" class="form-control"
                                               placeholder="name@example.com" value="name@example.com"/>
                                        <!--end::Input-->

                                        <!--begin::Button-->
                                        <button class="btn btn-light-primary" id="copyButton">
                                            Copy
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <!-- Modal -->
            <div class="modal fade" id="modal_chart" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="title_chart">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body " id="body_chart ">
                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6 nav-stretch justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_4">Biểu đồ
                                        thanh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_5">Biểu đồ đường </a>
                                </li>

                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                                    <canvas id="myChart"></canvas>
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                                    <canvas id="myChart1"></canvas>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
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
        <div id="kt_project_users_table_pane " class="tab-pane fade " role="tabpanel">
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
                                                        <a href=""
                                                           class="mb-1 text-gray-800 text-hover-primary">{{$exam->name}}</a>
                                                        <div class="fw-semibold fs-6 text-gray-400">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td><span>{{$exam->minute_time}}</span></td>
                                            <td><span>{{$exam->number_question}}</span></td>
                                            <td>
                                                <span
                                                    class="badge badge-light-primary fw-bold px-4 py-3">{{$exam->random ? 'Có' : 'Không'}}</span>
                                            </td>
                                            <td>12313 thí sinh</td>
                                            <td>
                                                <span>{{\Carbon\Carbon::parse($exam->date_start)->format('d/m/Y')}}</span>
                                            </td>
                                            <td><span>{{$exam->status}}</span></td>
                                            <td class="text-end">
                                                <a href="#"
                                                   class="btn btn-light btn-active-light-primary btn-sm show menu-dropdown"
                                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
															<img
                                                                src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}"
                                                                alt="">
															</span>
                                                    <!--end::Svg Icon--></a>
                                                <!--begin::Menu-->
                                                <div
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show"
                                                    data-kt-menu="true" data-popper-placement="top-end"
                                                    style="z-index: 107; position: fixed; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(-59.2px, -88px, 0px);">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{route('teachers.exams.edit',$exam)}}"
                                                           class="menu-link px-3">Sửa</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{route('teachers.exams.destroy',$exam)}}"
                                                           class="menu-link px-3"
                                                           data-kt-users-table-filter="delete_row">Xóa</a>
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
@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.getElementById("copyButton").addEventListener("click", function () {
            var input = document.getElementById("new_password_random");
            input.select();
            input.setSelectionRange(0, 99999); // For mobile devices

            document.execCommand("copy");
            $('#copyButton').html('Copied!!')
            setTimeout(function () {
                $('#copyButton').html('Copy')
            }, 3000)
        });

        $(".btn_copy").click(function () {
            var textToCopy = $(this).prev().text();
            var bElement = $(this).prev("b");
            var tempInput = $("<textarea>");
            tempInput.val(textToCopy);
            $("body").append(tempInput);
            tempInput.select();
            document.execCommand("copy");
            tempInput.remove();

            $(this).addClass("btn-success");
            bElement.addClass("text-success");
            var button = $(this);
            setTimeout(function () {
                button.removeClass("btn-success");
                bElement.removeClass("text-success");
            }, 3000);
        });

        $('.newPassword').click(function () {
            exam_id = $(this).attr('id_exam')
            password = generatePassword();
            name_exam = $(this).attr('name_exam');

            $.ajax({
                url: "/teachers/exams/" + exam_id + '/' + password + "/newPassword",
                method: "get",
                data: {
                    exam_id: exam_id,
                    password: password
                },
                success: function (res) {
                    if (res == 'success') {
                        $('#modal_new_password').modal('show')
                        $('.modal-title').html(name_exam)
                        $('#new_password_random').val(password)
                        $('.now_password').each(function () {
                            exam_id_get = $(this).attr('exam_id')
                            if (exam_id == exam_id_get) {
                                $(this).html(password)
                            }
                        })
                    }
                }
            })
        })

        function generatePassword() {
            var length = 6,
                charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
                retVal = "";
            for (var i = 0, n = charset.length; i < length; ++i) {
                retVal += charset.charAt(Math.floor(Math.random() * n));
            }
            return retVal;
        }

        $('.chartExams').click(function () {
            exam_id = $(this).attr('id_exam')
            name_exam = $(this).attr('name_exam')
            $.ajax({
                url: '/teachers/exams/' + exam_id + '/chart',
                method: "GET",
                data: {
                    exam_id: exam_id
                },
                success: function (res) {
                    $('#title_chart').html(name_exam)
                    $('#modal_chart').modal('show')

                    $('#kt_tab_pane_4 #myChart').remove()
                    $('#kt_tab_pane_4').append('<canvas id="myChart" class="animated fadeIn" height="150"></canvas>')

                    $('#kt_tab_pane_5 #myChart1').remove()
                    $('#kt_tab_pane_5').append('<canvas id="myChart1" class="animated fadeIn" height="150"></canvas>')

                    var ctx = document.getElementById('myChart');
                    var type = 'bar'
                    var label = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']
                    var nameLabel = 'Thi sinh'
                    var data = res
                    chartClass.ChartData(ctx, type, label, nameLabel, data)

                    var ctx1 = document.getElementById('myChart1');
                    var type1 = 'line'
                    var label1 = res
                    var data1 = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']
                    chartClass.ChartData(ctx1, type1, label, nameLabel, data)
                }
            })

            chartClass = {
                ChartData: function (ctx, type, label, nameLabel, data) {
                    new Chart(ctx, {
                        type: type,
                        data: {
                            labels: label,
                            datasets: [{
                                label: nameLabel,
                                data: data,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            }

        })
        $('.is_see_answers').click(function () {
            exam_id = $(this).attr('exam_id')
            title = $(this).attr('aria-label')
            Swal.fire({
                text: title + '?',
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ok!",
                cancelButtonText: 'Hủy',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function (result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/teachers/exams/" + exam_id + "/isSeeAnswers",
                        method: "GET",
                        data: {
                            exam_id: exam_id
                        },
                        success: function (res) {
                            Swal.fire({
                                text: title+ " thành công!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(()=>{
                                location.reload();
                            });

                        }
                    })
                }
            });

        })
    </script>
@endsection
