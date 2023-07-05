@extends('layouts.main')
@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <form action="{{route('students.results.index')}}" method="get">
                    @csrf
                    <!--begin::Search-->
                    <div class="d-flex align-items-center justify-content-end position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                    </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-customer-table-filter="search" name="keyword"
                               class="form-control form-control-solid w-250px ps-15" value="{{request()->input('keyword')}}" placeholder="Tên bài thi">
                    </div>
                    <!--end::Search-->
                </form>
            </div>
            <!--begin::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>Tên bài thi</th>
                            <th>Thời gian làm bài</th>
                            <th>Ngày thi</th>
                            <th>Số câu đúng</th>
                            <th>Điểm</th>
                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 128.625px;">Hành động
                            </th>
                        </tr>
                        <!--end::Table   row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-semibold">
                        @foreach($examStudents as $examStudent)
                            <tr class="odd">
                                <!--begin::Checkbox-->
                                <td>{{$examStudent->exam->name}}</td>
                                <td>{{$examStudent->exam->minute_time .' phút'}}</td>
                                <td>{{\Carbon\Carbon::parse($examStudent->time_started)->format('d-m-Y')}}</td>
                                <td class="text-danger fs-2">{{(integer)$examStudent->result.'/'.count(json_decode($examStudent->questions)??[])}}</td>
                                <td class="text-danger fs-2">{{number_format((float)$examStudent->result == 0 ? 0 : (float)$examStudent->result*10/count(json_decode($examStudent->questions) ?? []), 2)}}</td>
                                @if($examStudent->exam->is_see_answers)
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Chọn
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->


                                            <div class="menu-item px-3">
                                                <a href="{{route('students.results.answers',$examStudent->exam->id)}}"
                                                   class="menu-link px-3">Đáp án</a>
                                            </div>

                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                @endif
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
@endsection
