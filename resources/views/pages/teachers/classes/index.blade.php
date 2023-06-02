@extends('layouts.main')
@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <form action="" method="get">
                        @csrf
                        <!--end::Svg Icon-->
                        <div class="d-flex input-group-sm">
                            <input type="text"
                                   class="form-control w-250px ps-14" name="keyword"
                                   placeholder="Tên lớp học">
                            <button class="btn btn-success btn-sm ms-2" type="submit">
                                <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                            </button>
                        </div>
                    </form>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                    <!--begin::Add subscription-->
                    <a href="{{route('teachers.classes.create')}}" class="btn btn-sm btn-primary">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-2">
                            <img src="{{asset('assets/media/icons/duotune/arrows/arr075.svg')}}" alt="">
                        </span>
                        <!--end::Svg Icon-->Thêm lớp học</a>
                    <!--end::Add subscription-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           id="kt_subscriptions_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    #
                                </div>
                            </th>
                            <th class="min-w-125px sorting" tabindex="0"
                                rowspan="1" colspan="1">Tên lớp học
                            </th>
                            <th class="min-w-125px sorting" tabindex="0"
                                rowspan="1" colspan="1">Số sinh viên
                            </th>
                            <th class="min-w-125px sorting" tabindex="0"
                                rowspan="1" colspan="1" aria-label="Billing: activate to sort column ascending">Ngày tạo
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" rowspan="1" colspan="1">Cập nhật gần nhất
                            </th>
                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions">Hành động
                            </th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-semibold">
                        @foreach($classes as $class)
                            <tr class="odd">
                                <!--begin::Checkbox-->
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Customer=-->
                                <td>
                                    <a href="#"
                                       class="text-gray-800 text-hover-primary mb-1">{{$class->name}}</a>
                                </td>
                                <!--end::Customer=-->
                                <!--begin::Status=-->
                                <td>
                                    61
                                </td>
                                <!--end::Status=-->
                                <!--begin::Billing=-->
                                <td>
                                    {{ date('H:i d-m-Y', strtotime($class->created_at))}}
                                </td>
                                <!--end::Billing=-->
                                <!--begin::Product=-->
                                <td>{{date('H:i d-m-Y', strtotime( $class->updated_at))}}</td>
                                <!--end::Product=-->
                                <!--begin::Date=-->
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="{{route('teachers.classes.edit',$class)}}">
                                        <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>
                                    <a href="{{route('teachers.classes.destroy',$class)}}">
                                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </a>
                                    <a href="{{route('teachers.classes.show',$class)}}">
                                        <button class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></button>
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
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="kt_subscriptions_table_paginate">
                            <ul class="pagination">
                                {{$classes->links()}}
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
