@extends('layouts.main')
@section('content')
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-ecommerce-order-filter="search"
                           class="form-control form-control-solid w-250px ps-14" placeholder="Tìm kiếm">
                </div>
                <!--end::Search-->
                <!--begin::Export buttons-->
                <div id="kt_ecommerce_report_customer_orders_export" class="d-none">
                    <div class="dt-buttons btn-group flex-wrap">
                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                            <span>Copy</span></button>
                        <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                            <span>Excel</span></button>
                        <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>CSV</span>
                        </button>
                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>PDF</span>
                        </button>
                    </div>
                </div>
                <!--end::Export buttons-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Filter-->
                <div class="w-150px">
                    <select class="form-select" id="select_exams" data-control="select2"
                            data-placeholder="Chọn bài thi">
                        <option></option>
                        @foreach($exams as $exam)
                            <option @if(request('exam_id') == $exam->id) selected
                                    @endif value="{{$exam->id}}">{{$exam->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!--end::Filter-->
                @if($examsStudents != null)
                    <!--begin::Export dropdown-->
                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                        <span class="svg-icon svg-icon-2">
                        <img src="{{asset('assets/media/icons/duotune/arrows/arr078.svg')}}" alt="">
                    </span>
                        <!--end::Svg Icon-->Export
                    </button>
                    <div id="kt_ecommerce_report_customer_orders_export_menu"
                         class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                         data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                @endif

                <!--end::Menu-->
                <!--end::Export dropdown-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            @if($examsStudents != null)
                <div id="kt_ecommerce_report_customer_orders_table_wrapper"
                     class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                               id="kt_ecommerce_report_customer_orders_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>Thời gian bắt đầu</th>
                                <th>Tổng số câu đúng</th>
                                <th>Số câu không chọn</th>
                                <th>Số cảnh bảo</th>
                                <th>Tổng điểm</th>
                                <th>Hành động</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                            @foreach($examsStudents as $examsStudent)

                                <tr>
                                    <td class="col-1">{{$loop->iteration}}</td>
                                    <td style="width: 15%">{{$examsStudent->user->name}}</td>
                                    <td style="width: 15%">{{$examsStudent->user->email}}</td>
                                    <td style="width: 15%">{{$examsStudent->time_started ? $examsStudent->time_started : '--'}}</td>
                                    <td style="width: 5%">
                                        @if($examsStudent->questions != null && $examsStudent->result != null)
                                            {{$examsStudent->result.'/'.count(json_decode($examsStudent->questions))}}
                                        @else
                                        --
                                        @endif

                                    </td>
                                    <td style="width: 5%">0</td>
                                    <td style="width: 5%">{{$examsStudent->warning}}</td>
                                    <td style="width: 5%"></td>
                                    <td style="width: 5%">
                                        <button class="btn btn-sm btn-info">View</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div class="row">
                        <div
                            class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="dataTables_length" id="kt_ecommerce_report_customer_orders_table_length">
                                <label><select name="kt_ecommerce_report_customer_orders_table_length"
                                               aria-controls="kt_ecommerce_report_customer_orders_table"
                                               class="form-select form-select-sm form-select-solid">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div
                            class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="dataTables_paginate paging_simple_numbers"
                                 id="kt_ecommerce_report_customer_orders_table_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="kt_ecommerce_report_customer_orders_table_previous">
                                        <a href="#"
                                           aria-controls="kt_ecommerce_report_customer_orders_table"
                                           data-dt-idx="0"
                                           tabindex="0"
                                           class="page-link"><i
                                                class="previous"></i></a></li>
                                    <li class="paginate_button page-item active">
                                        <a href="#"
                                           aria-controls="kt_ecommerce_report_customer_orders_table"
                                           data-dt-idx="1" tabindex="0"
                                           class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled"
                                        id="kt_ecommerce_report_customer_orders_table_next">
                                        <a href="#"
                                           aria-controls="kt_ecommerce_report_customer_orders_table"
                                           data-dt-idx="2" tabindex="0"
                                           class="page-link"><i class="next"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h3 class="text-success text-center">Vui lòng chọn đề thi</h3>
            @endif
        </div>
        <!--end::Card body-->
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            $('#select_exams').change(function () {
                exam_id = $(this).val()
                window.location.href = "/teachers/results/" + exam_id;

            })
        })
    </script>
@endsection
