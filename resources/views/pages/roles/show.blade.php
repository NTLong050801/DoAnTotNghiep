@extends('layouts.main')
@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="mb-0">{{$role->name}}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card footer-->
                <div class="card-footer pt-0">
                    <a href="{{route('roles.edit',$role)}}" class="btn btn-light btn-active-primary">
                        Edit Role
                    </a>
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-10">
            <!--begin::Card-->
            <div class="card card-flush mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header pt-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="d-flex align-items-center">
                            Users Assigned
                            <span class="text-gray-600 fs-6 ms-1">({{number_format($users->count())}})</span>
                        </h2>
                    </div>
                    <!--end::Card title-->
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
                                        style="width: 90.25px;">Username
                                    </th>
                                    <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_roles_view_table"
                                        rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                        style="width: 314.672px;">Name
                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_roles_view_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Joined Date: activate to sort column ascending"
                                        style="width: 240px;">Joined Date
                                    </th>
                                    <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 148.688px;">Actions
                                    </th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                @foreach($users as $user)
                                    <tr class="odd">
                                        <!--begin::ID-->
                                        <td>{{$user->username}}</td>
                                        <!--begin::ID-->
                                        <!--begin::User=-->
                                        <td class="d-flex align-items-center">
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-gray-800 text-hover-primary mb-1">
                                                    {{$user->name}}
                                                </a>
                                                <span>{{$user->email}}</span>
                                            </div>
                                            <!--begin::User details-->
                                        </td>
                                        <!--end::user=-->
                                        <!--begin::Joined date=-->
                                        <td data-order="{{$user->created_at}}">{{$user->created_at}}</td>
                                        <!--end::Joined date=-->
                                        <!--begin::Action=-->
                                        <td class="d-flex align-items-center justify-content-end">
                                            <a href="#" class="btn btn-light btn-primary">View</a>
                                            <form
                                                action="{{route('roles.remove-role-from-user',[$role,$user])}}"
                                                method="post"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-light btn-danger">
                                                    Remove
                                                </button>
                                            </form>
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
        <!--end::Content-->
    </div>
@endsection
