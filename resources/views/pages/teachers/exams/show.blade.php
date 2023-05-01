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
                        <span class="fs-2x fw-bold text-gray-800">{{$exam->name}}</span>
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
                        <div class="col-lg-6 text-center">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Thời gian <span
                                    class=" fs-4 text-danger">{{$exam->minute_time}} phút</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 text-center">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3">Số câu <span
                                    class=" fs-4 text-danger">{{$exam->number_question}}</span></label>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-10 mb-5">
                        <!--begin::Col-->
                        <div class="col-lg-6 text-center">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Ngày bắt đầu <span
                                    class=" fs-4 text-danger">{{$exam->date_start}}</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 text-center">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3">Ngày kết thúc <span
                                    class=" fs-4 text-danger">{{$exam->date_end}}</span></label>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-10 mb-5">
                        <!--begin::Col-->
                        <div class="col-lg-6 text-center">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Tổng số câu hỏi <span
                                    class=" fs-4 text-danger">50 phút</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 text-center">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3">Tổng số thí sinh <span
                                    class=" fs-4 text-danger">50 phút</span></label>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-10 mb-5">
                        <!--begin::Col-->
                        <div class="col-lg-6 text-center">
                            <label class="form-label fs-3 fw-bold text-gray-700 mb-3 ">Trộn đề <span
                                    class=" fs-4 text-danger">{{$exam->random ? 'Có' : 'Không'}}</span></label>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 text-center">
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
        <!--begin::Sidebar-->
        <div class="col-sm-12 mb-10">
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="mb-0">Câu hỏi</h2>

                    </div>
                    <div class="float-end card-title">
                        <button class="btn btn-sm btn-success " data-bs-toggle="modal" data-bs-target="#listQuestion">
                            Thêm
                        </button>
                    </div>
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
                                                                aria-label="Actions" style="width: 136.175px;">Actions
                                                            </th>
                                                        </tr>
                                                        <!--end::Table row-->
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody class="fw-semibold text-gray-600">
                                                        @foreach($questions as $question)
                                                            <tr class="odd" data-question_id="{{$question->id}}">
                                                                <!--begin::Checkbox-->
                                                                <td>
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid ">
                                                                        <input class="form-check-input bg-primary"
                                                                               type="checkbox"
                                                                               value="1">
                                                                    </div>
                                                                </td>
                                                                <!--end::Checkbox-->
                                                                <!--begin::ID-->
                                                                <td>
                                                                    <b>{{$question->name}}</b>
                                                                    <div class="row bg-dark mt-5 p-5">
                                                                        @foreach(json_decode($question->options) as $key=>$option)
                                                                            <div class="form-check col-sm-6 mt-2">
                                                                                <input class="form-check-input"
                                                                                       type="radio" disabled
                                                                                       name="{{$question->id}}"
                                                                                       id="{{$question->id.$key}}"
                                                                                       value="{{$key}}"
                                                                                       @if($question->ans == $key) checked @endif>
                                                                                <label class="form-check-label"
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
                                            aria-label="Actions" style="width: 136.175px;">Actions
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
        <div class="col-sm-6">
            <!--begin::Card-->
            <div class="card card-flush mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header pt-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="d-flex align-items-center">Thí sinh
                            <span class="text-gray-600 fs-6 ms-1">(14)</span></h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1"
                             data-kt-view-roles-table-toolbar="base">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-roles-table-filter="search"
                                   class="form-control form-control-solid w-250px ps-15" placeholder="Search Users">
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
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="
																" style="width: 29.9px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                   data-kt-check-target="#kt_roles_view_table .form-check-input"
                                                   value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-50px sorting" tabindex="0" aria-controls="kt_roles_view_table"
                                        rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending"
                                        style="width: 82.325px;">Tên
                                    </th>
                                    <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_roles_view_table"
                                        rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                        style="width: 289.038px;">Mail
                                    </th>
                                    <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 136.175px;">Actions
                                    </th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::ID-->
                                    <td class="">ID7076</td>
                                    <!--begin::ID-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <span>Olivia Wild</span>
                                    </td>
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                    </td>
                                    <!--end::Action=-->
                                </tr>
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
        <input type="hidden" id="exam_id" exam_id="{{$exam->id}}">
        <!--end::Content-->
    </div>
@endsection
@section('javascript')
{{--    <script src="{{asset('assets/js/custom/pages-teachers-exams-show.js')}}"></script>--}}
<script>
    var exam_id = $('#exam_id').attr('exam_id');
    myQuestion()
    $(document).on('click','.addMyQuestion',function (){
        var row = $(this).closest('tr'); // Get the row
        var question_id = row.data('question_id')
        var count_question = $('#count_question').html();
        $.ajax({
            url : '/teachers/exams-questions',
            method : "GET",
            data : {
                question_id : question_id,
                exam_id : exam_id,
            },
            success : function (res){
                if(res == '1'){
                    Swal.fire({
                        text: "Thêm câu hỏi thành công!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, tiếp!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function (){
                        row.hide();
                        $('#count_question').html(count_question-1)
                        myQuestion()
                    })
                }
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
    $(document).on('click','.deleteExamsQuestion',function(){
        var id_question = $(this).data('id');
        $.ajax({
            url: '/teachers/exams-questions/' + id_question + '/destroy',
            type:"GET",
            data:{
                exam_id : exam_id
            },
            success:function (res){
                Swal.fire({
                    text: "Xóa câu hỏi thành công!.",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, tiếp!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                    }
                }).then(function (){
                    myQuestion();
                })
            }
        })
    })
    function myQuestion() {
        $.ajax({
            url:'/teachers/exams/' + exam_id + '/myQuestion',
            type: "GET",
            success: function (res) {
                $('#tbody_my_question').html(res)
            }
        })
    }
</script>
@endsection

