@extends('layouts.main')
@section('content')
    <div class="card" id="fullcard">
        <div class="card-body p-12">
            <!--begin::Form-->
            <form action="" id="kt_invoice_form">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column align-items-start flex-xxl-row">
                    <!--begin::Input group-->
                    <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4"
                         data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Enter invoice number"
                         data-kt-initialized="1">
                        <span class="fs-2x fw-bold text-gray-800 text-center">Tên bài kiểm tra: {{$exam->name}}</span>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Top-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-10"></div>
                <!--end::Separator-->
                <!--begin::Wrapper-->
                <div class="mb-0">
                    <!--begin::Row-->
                    <div class="row gx-10 mb-5 ">
                        <!--begin::Col-->
                        <div class="col-lg-6 ">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Thời gian <span
                                    class=" fs-4 text-danger">{{$exam->minute_time}} phút</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 r">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3">Số câu <span
                                    class=" fs-4 text-danger">{{$exam->number_question}}</span></label>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-10 mb-5">
                        <!--begin::Col-->
                        <div class="col-lg-6 r">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Ngày bắt đầu <span
                                    class=" fs-4 text-danger">{{$exam->date_start}}</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3">Ngày kết thúc <span
                                    class=" fs-4 text-danger">{{$exam->date_end}}</span></label>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-10 mb-5">
                        <!--begin::Col-->
                        <div class="col-lg-6 r">
{{--                            @dd($exam->examQuestions)--}}
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Tổng số câu hỏi <span
                                    class=" fs-4 text-danger">{{!($exam->examQuestions) ? '' : count($exam->examQuestions)}}</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3">Tổng số thí sinh <span
                                    class=" fs-4 text-danger">{{!($exam->examStudents) ? '' : count($exam->examStudents)}}</span></label>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-10 mb-5">
                        <!--begin::Col-->
                        <div class="col-lg-6 ">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Trộn đề <span
                                    class=" fs-4 text-danger">{{$exam->random ? 'Có' : 'Không'}}</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3">Password <span
                                    class=" fs-4 text-danger">{{$exam->password}}</span></label>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--end::Item template-->
                </div>
                <!--end::Wrapper-->
            </form>
            <!--end::Form-->
        </div>
    </div>
    <div class="row mt-5">
        <!--begin::Card-->
        <div class="card card-flush bgi-position-y-center bgi-no-repeat mb-10">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Navs-->
                <div class="d-flex overflow-auto">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6 tab active" data-tab="#tab_question" href="#">
                                Câu hỏi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6 tab" data-tab="#tab_student" href="#">
                                Thí sinh
                            </a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                </div>
                <!--begin::Navs-->
            </div>
            <!--end::Card body-->
            <!--end::Card-->
            <!--begin::Sidebar-->
            <div class="col-sm-12 tab-content" id="tab_question">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="mb-0">Câu hỏi</h2>

                        </div>
                        @if($exam->status == 0)
                            <div class="float-end card-title">
                                <button class="btn btn-sm btn-success " data-bs-toggle="modal"
                                        data-bs-target="#listQuestion">
                                    Thêm
                                </button>
                            </div>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="listQuestion" tabindex="-1" aria-labelledby="listQuestion"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header d-block pb-0">
                                        <!--begin::Card header-->
                                        <div class="card-header pt-5 bg-secondary ">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2 class="d-flex align-items-center">Ngân hàng câu hỏi
                                                    <span class="fs-6 ms-1 text-danger">@if(sizeof($questions) > 0 )
                                                            (<span id="count_question">{{sizeof($questions)}}</span>)
                                                        @endif</span></h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1"
                                                     data-kt-view-roles-table-toolbar="base">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                    <img
                                                        src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}"
                                                        alt="">
                                                </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-roles-table-filter="search"
                                                           name="search_question"
                                                           class="form-control form-control-solid w-250px ps-15"
                                                           placeholder="Tìm kiếm" id="search_question">
                                                </div>
                                                <!--end::Search-->
                                                <!--begin::Group actions-->
                                                <div class="d-flex justify-content-end align-items-center d-none"
                                                     data-kt-view-roles-table-toolbar="selected">
                                                    <div class="fw-bold me-5">
                                                        <span class="me-2"
                                                              data-kt-view-roles-table-select="selected_count"></span>Selected
                                                    </div>
                                                    <button type="button" class="btn btn-danger"
                                                            data-kt-view-roles-table-select="delete_selected">Delete
                                                        Selected
                                                    </button>
                                                </div>
                                                <!--end::Group actions-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <!--begin::Card-->
                                        <div class="card card-flush mb-6 mb-xl-9 position-relative">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0 p-0">
                                                <!--begin::Table-->
                                                <div id="kt_roles_view_table_wrapper"
                                                     class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                                                            id="kt_myQuestion_view_table">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                            <!--begin::Table row-->
                                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                                <th class="w-10px pe-2 sorting_disabled" rowspan="1"
                                                                    colspan="1" aria-label="
																" style="width: 29.9px;">
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               data-kt-check="true"
                                                                               data-kt-check-target="#kt_myQuestion_view_table .form-check-input"
                                                                               value="1">
                                                                    </div>
                                                                </th>
                                                                <th class="min-w-600px sorting" tabindex="0"
                                                                    aria-controls="kt_myQuestion_view_table"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="ID: activate to sort column ascending"
                                                                    style="width: 82.325px;">Câu hỏi
                                                                </th>
                                                                <th class="text-end min-w-30px sorting_disabled"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Actions" style="width: 136.175px;">
                                                                    Actions
                                                                </th>
                                                            </tr>
                                                            <!--end::Table row-->
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody class="fw-semibold text-gray-600">
                                                            @foreach($questions as $question)
                                                                <tr class="odd border-bottom border-danger" data-question_id="{{$question->id}}">
                                                                    <!--begin::Checkbox-->
                                                                    <td>
                                                                        <div
                                                                            class="form-check">
                                                                            <input class="form-check-input bg-primary"
                                                                                   type="checkbox"
                                                                                   value="1">
                                                                        </div>
                                                                    </td>
                                                                    <!--end::Checkbox-->
                                                                    <!--begin::ID-->
                                                                    <td>
                                                                        <b>{{$loop->iteration.'.'.$question->name}}</b>
                                                                        <div class="row mt-5 p-5">
                                                                            @foreach(json_decode($question->options) as $key=>$option)
                                                                                <div class="form-check col-sm-6 mt-2">
                                                                                    <input class="form-check-input fw-bolder"
                                                                                           type="radio"
                                                                                           name="{{$question->id}}"
                                                                                           id="{{$question->id.$key}}"
                                                                                           value="{{$key}}"
                                                                                           @if($question->ans == $key) checked @endif>
                                                                                    <label class="form-check-label fw-bolder"
                                                                                           for="{{$question->id.$key}}">
                                                                                        {{$option}}
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                    <!--begin::ID-->
                                                                    <td class="text-end">
                                                                        <button
                                                                            class="btn btn-sm btn-success text-center addMyQuestion"
                                                                        ><i class="fa-sharp fa-solid fa-plus"></i>
                                                                        </button>
                                                                    </td>
                                                                    <!--end::Action=-->
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Permissions-->
                        <div class="row">
                            <!--begin::Table-->
                            <div id="kt_roles_view_table_wrapper"
                                 class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table
                                        class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                                        id="kt_myQuestion_view_table">
                                        <!--begin::Table head-->
                                        <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-600px sorting" tabindex="0"
                                                aria-controls="kt_myQuestion_view_table"
                                                rowspan="1" colspan="1"
                                                aria-label="ID: activate to sort column ascending"
                                                style="width: 82.325px;">Câu hỏi
                                            </th>
                                            <th class="text-end min-w-30px sorting_disabled"
                                                rowspan="1" colspan="1"
                                                aria-label="Actions" style="width: 136.175px;">Hành động
                                            </th>
                                        </tr>
                                        <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600" id="tbody_my_question">
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Permissions-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="col-sm-12 tab-content" id="tab_student">
                <!--begin::Card-->
                <div class="card card-flush mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header pt-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="d-flex align-items-center">Thí sinh
                                <span class="text-gray-600 fs-6 ms-1">({{count($exam->user)}})</span></h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            @if($exam->status == 0)
                            <button class="btn btn-sm btn-success col-4" data-bs-toggle="modal"
                                    data-bs-target="#modal_add_student">Thêm thí sinh
                            </button>
                            @endif
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1 col-8"
                                 data-kt-view-roles-table-toolbar="base">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                            </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-roles-table-filter="search"
                                       class="form-control form-control-solid w-250px ps-15" id="search_students"
                                       placeholder="Search Users">
                            </div>
                            <div class="modal fade " tabindex="-1" id="modal_add_student">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Thêm sinh viên - đề thi</h3>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                 data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body d-flex">
                                            <div class="col-4">
                                                <form action="" class="mb-5">
                                                    <div class="mb-3">
                                                        <label for="all_class" class="form-label">Lớp học</label>
                                                        <select class="form-select form-control form-select-solid"
                                                                id="all_class" data-control="select2"
                                                                data-placeholder="Select an option">
                                                            @foreach($classes as $class)
                                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary btn-sm float-end"
                                                            id="submit_class">Submit
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-2 text-center align-self-center">
                                                <span class="text-gray-600 text-center">Hoặc</span>
                                            </div>
                                            <div class="col-6">
                                                @csrf
                                                <form action="" class="mb-5" method="post" id="add_student_form"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div id="error"></div>
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label required">Họ tên</label>
                                                        <input type="text" name="name" required class="form-control"
                                                               id="name" aria-describedby="name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="identifier" class="form-label required">Mã sinh
                                                            viên</label>
                                                        <input type="text" required name="identifier"
                                                               class="form-control" id="identifier"
                                                               aria-describedby="name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label required">Email</label>
                                                        <input type="email" required name="email" class="form-control"
                                                               id="email" aria-describedby="name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label required">Khoa</label>
                                                        <select name="major" class="form-select" id="major"
                                                                aria-describedby="name">
                                                            @foreach($majors as $major)
                                                                <option value="{{$major->id}}">{{$major->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="exam_id" value="{{$exam->id}}">
                                                    <button type="submit" class="btn btn-primary btn-sm float-end"
                                                            id="submit_student">Submit
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                 data-kt-view-roles-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-view-roles-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                        data-kt-view-roles-table-select="delete_selected">Delete Selected
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
                        <div id="kt_roles_view_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                                       id="kt_roles_view_table">
                                    <!--begin::Table head-->
                                    <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                                        <th class="min-w-50px sorting" tabindex="0" aria-controls="kt_roles_view_table"
                                            rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending"
                                            style="width: 82.325px;">Họ tên
                                        </th>
                                        <th class="min-w-50px sorting" tabindex="0" aria-controls="kt_roles_view_table"
                                            rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending"
                                            style="width: 82.325px;">Mã sinh viên
                                        </th>
                                        <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_roles_view_table"
                                            rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                            style="width: 289.038px;">Mail
                                        </th>
                                        <th>T/gian bắt đầu</th>
                                        <th>Số cảnh báo</th>
                                        <th>Trạng thái</th>
                                        <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions" style="width: 136.175px;">Actions
                                        </th>
                                    </tr>
                                    <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600" id="tbody_list_student">
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                         id="kt_roles_view_table_paginate">
                                        <ul class="pagination">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal_result" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kết quả bài thi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table border table-auto fs-2">
                            <thead>
                            <tr class="text-center fs-2x">
                                <th colspan="2">Kết quả</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Họ tên :</td>
                                <td id="nameStudent">4 phút</td>
                            </tr>

                            <tr>
                                <td>Cảnh báo :</td>
                                <td id="result_warning"></td>
                            </tr>
                            <tr>
                                <td>Đúng :</td>
                                <td class="text-danger" id="check_result">0/4</td>
                            </tr>
                            <tr>
                                <td>Điểm :</td>
                                <td class="text-danger" id="point_result">0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="exam_id" exam_id="{{$exam->id}}">
        <input type="hidden" id="user_id"  value="{{auth()->id()}}">
        <!--end::Content-->
    </div>
@endsection
@section('javascript')
    {{--    <script src="{{asset('assets/js/custom/pages-teachers-exams-show.js')}}"></script>--}}
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
         exam_id = $('#exam_id').attr('exam_id');
         user_id = $('#user_id').val();

        myQuestion()
        StudentInClass()
        $(document).on('click', '.addMyQuestion', function () {
            var row = $(this).closest('tr'); // Get the row
            var question_id = row.data('question_id')
            var count_question = $('#count_question').html();
            $.ajax({
                url: '/teachers/exams-questions',
                method: "GET",
                data: {
                    question_id: question_id,
                    exam_id: exam_id,
                },
                success: function (res) {
                    if (res == '1') {
                        Swal.fire({
                            text: "Thêm câu hỏi thành công!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, tiếp!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            row.hide();
                            $('#count_question').html(count_question - 1)
                            myQuestion()
                        })
                    }
                }
            })
        })
        $('#tab_student').hide()
        $('.nav-item .tab').click(function (e) {
            e.preventDefault();
            tab = $(this).data('tab');
            $('.nav-item .tab').removeClass('active')
            $(this).addClass('active')
            $('.tab-content').hide();
            $('.tab-content').each(function () {
                if (tab == '#' + $(this).attr('id')) {
                    $('' + tab + '').show()
                }
            })
        })
        $('#search_question').keyup(function () {
            var search = $(this).val();
            $.ajax({
                url: '/teachers/exams/' + exam_id + '/addQuestion',
                type: "GET",
                data: {
                    search: search
                },
                success: function (res) {
                    $('.modal-body .card-body').html(res)
                }
            })
        })
        $(document).on('click', '.deleteExamsQuestion', function () {
            var id_question = $(this).data('id');
            $.ajax({
                url: '/teachers/exams-questions/' + id_question + '/destroy',
                type: "GET",
                data: {
                    exam_id: exam_id
                },
                success: function (res) {
                    Swal.fire({
                        text: "Xóa câu hỏi thành công!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, tiếp!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function () {
                        myQuestion();
                    })
                }
            })
        })
        $('#search_students').keyup(function () {
            keyword = $(this).val()
            if (keyword != '') {
                StudentInClass(keyword)
            } else {
                StudentInClass('')
            }

        })

        function myQuestion() {
            $.ajax({
                url: '/teachers/exams/' + exam_id + '/myQuestion',
                type: "GET",
                success: function (res) {
                    $('#tbody_my_question').html(res)
                }
            })
        }
        setInterval(StudentInClass, 10000);
        function StudentInClass(keyword) {
            $.ajax({
                url: '/teachers/exams/' + exam_id + '/studentInClass/' + keyword,
                type: "GET",
                data: {
                    exam_id: exam_id,
                    keyword: keyword,
                },
                success: function (res) {
                    $('#tbody_list_student').html(res)
                }
            })
        }

        $('#submit_class').click(function (e) {
            e.preventDefault();
            class_id = $('#all_class').val()
            $.ajax({
                url: "/teachers/exams/" + exam_id + "/addClass/" + class_id,
                method: "GET",
                data: {
                    class_id: class_id,
                    exam_id: exam_id
                },
                success: function (res) {
                    Swal.fire({
                        text: "Thêm thành công !!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            StudentInClass()
                        }
                    });
                }
            })
        })
        $('#submit_student').click(function (e) {
            e.preventDefault();
            form = document.getElementById('add_student_form');
            formData = new FormData(form);
            console.log(formData)
            $.ajax({
                url: '/teachers/exams/' + exam_id + '/addStudent',
                type: 'POST',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (response) {
                    // Do something with the success value
                    Swal.fire({
                        text: "Thêm thành công !!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            StudentInClass()
                            //$('#exampleModal').hide()
                        }
                    });
                },
                error: function (response) {
                    if (response.status == 422) {
                        var errors = response.responseJSON.errors;
                        // Loop through the error messages and display them
                        errorhtml = '<div class="alert alert-danger"><ul>'
                        $.each(errors, function (key, value) {
                            errorhtml += '<li>' + value[0] + '</li>';
                        });
                        errorhtml += '</ul> </div>'
                        $('#error').html(errorhtml)
                    }
                }
            })
        })

        $(document).on('click', '.delete_student', function () {
            user_id = $(this).parent().data('user_id');
            Swal.fire({
                text: "Xóa sinh viên khỏi đề thi ?",
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ok,Xóa!",
                cancelButtonText: 'Hủy',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function (result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/teachers/exams/" + exam_id + "/deleteStudent/" + user_id,
                        method: "GET",
                        data: {
                            exam_id: exam_id,
                            user_id: user_id,
                        },
                        success: function (res) {
                            Swal.fire({
                                text: "Xóa thành công!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok !!",
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(() => {
                                StudentInClass()
                            });
                        }
                    })
                }
            });
        })
        $(document).on('click', '.reset_exam', function () {
            user_id = $(this).parent().data('user_id');
            Swal.fire({
                text: "Reset bài thi này ?",
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ok,reset!",
                cancelButtonText: 'Hủy',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function (result) {
                if (result.isConfirmed) {
                    $.ajax({
                            url: "/teachers/exams/" + exam_id + "/resetExam/" + user_id,
                            method: "GET",
                            data: {
                                exam_id: exam_id,
                                user_id: user_id,
                            },
                            success: function (res) {
                            Swal.fire({
                                text: "Reset thành công!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok !!",
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(() => {
                                StudentInClass()
                            });
                        }
                    })
                }
            });
        })
        $(document).on('click', '.show_result', function () {
            user_id = $(this).data('user_id')
            nameStudent = $(this).parent().parent().children().first().html();
            $('#modal_result').modal('show')
            $.ajax({
                url: "/teachers/exams/" + exam_id + "/resultExam/" + user_id,
                method: "GET",
                data: {
                    exam_id: exam_id,
                    user_id: user_id,
                },
                success: function (res) {
                    var stringArray = res['questions'];
                    var array = JSON.parse(stringArray);
                    var count = 0;
                    if(array != null){
                         count = array.length;
                    }
                    $('#check_result').html(res['result']+'/'+count)
                    $('#nameStudent').html(nameStudent)
                    $('#result_warning').html(res['warning'])
                    $('#point_result').html(res['result']*10/count)

                }
            })
        })
        $(document).on('click', '.endExam', function () {
            user_id = $(this).parent().data('user_id')
            nameStudent = $(this).parent().parent().children().first().html();
            Swal.fire({
                text: "Kết thúc bài thi của sinh viên "+nameStudent+ " ?",
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Kêt thúc!",
                cancelButtonText: 'Hủy',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then(function (result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/teachers/exams/" + exam_id + "/endExam/" + user_id,
                        method: "GET",
                        data: {
                            exam_id: exam_id,
                            user_id: user_id,
                        },
                        success: function (res) {
                            StudentInClass()
                            Swal.fire({
                                text: "Thành công!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok !!",
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                        }
                    })
                }
            });
        })
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('db1f42fb9112815e4728', {
            cluster: 'ap1'
        });
        // var channel = pusher.subscribe('StartExamEvent');
        // channel.bind('App\\Events\\StartExamEvent', function(data) {
        //     console.log('my get : '+exam_id + ','+user_id);
        //     console.log('data get : '+data.exam_id + ','+data.user_id)
        //     if(exam_id == data.exam_id && user_id == data.user_id){
        //         console.log('ok')
        //         StudentInClass()
        //     }else{
        //         console.log('faile')
        //     }
        // });
    </script>
@endsection
<script>

</script>

