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
                        <input type="text" data-kt-customer-table-filter="search"
                               class="form-control form-control-solid w-350px ps-15 bg-secondary"
                               placeholder="Nhập câu hỏi" name="search" value="{{request()->get('search')}}">
                        <button type="submit" class="btn btn-sm btn-success s-15">Tìm kiếm</button>
                    </div>
                </form>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div id="select" class="d-flex justify-content-end align-items-center d-none"
                     data-kt-customer-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count" id="selected_count">10</span>Selected
                    </div>
                    <button type="button" class="btn btn-danger" id="delete_selected"
                            data-kt-customer-table-select="delete_selected">Thêm tất cả
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
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           id="checkboxAll"
                                           data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                                </div>
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                aria-label="Name: activate to sort column ascending"
                                style="width: 162.125px;">Câu hỏi @if(sizeof($listQuestions) >0) <span id="count" count="{{sizeof($listQuestions)}}" class="text-danger">({{sizeof($listQuestions)}})</span> @endif
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                aria-label="Ans: activate to sort column ascending"
                                style="width: 200.712px;">Đáp án
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
                        @foreach($listQuestions as $question)
                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div
                                            class="form-check form-check-sm form-check-custom form-check-solid justify-items-center">
                                            <input class="form-check-input bg-dark " type="checkbox"
                                                   value="{{$question->id}}">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Name=-->
                                    <td>
                                        <a href="#"
                                           class="text-gray-800 text-hover-primary mb-1">{{$question->name}}</a>
                                        <a target="_blank" href="{{asset('storage/'.$question->image)}}"><img
                                                src="{{asset('storage/'.$question->image)}}" style="width: 100px"
                                                alt=""></a>
                                    </td>
                                    <td class="bg-dark">
                                        @foreach(json_decode($question->options) as $key=>$option)
                                            <div class="form-check mt-5 ">
                                                <input class="form-check-input" type="radio" disabled
                                                       name="{{$question->id}}"
                                                       id="{{$question->id.$key}}" value="{{$key}}"
                                                       @if($question->ans == $key) checked @endif>
                                                <label class="form-check-label" for="{{$question->id.$key}}">
                                                    {{$option}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="{{route('teachers.questions.add',$question)}}" class="btn btn-sm btn-danger btn-active-light-primary"
                                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Thêm vào kho câu hỏi
                                        </a>
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
                                {{--                                {{$questions->links()}}--}}
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
    <script src="{{asset('assets/js/custom/pages-teachers-question-review.js')}}"></script>
@endsection
