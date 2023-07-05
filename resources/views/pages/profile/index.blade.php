@extends('layouts.main')
@section('stylesheets')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('sidebar')

@endsection
@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Summary-->
                    <!--begin::User Info-->
                    <div class="d-flex flex-center flex-column py-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            <img src="{{auth()->user()->avatar}}" alt="image"/>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#"
                           class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{auth()->user()->name}}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="mb-9">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-primary d-inline">
                                @if(auth()->user()->role==2)
                                    Admin
                                @elseif(auth()->user()->role==1)
                                    Giảng viên
                                @else
                                    Sinh viên
                                @endif
                            </div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Position-->
                    </div>
                    <!--end::User Info-->
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold rotate collapsible" data-bs-toggle="collapse"
                             href="#kt_user_view_details" role="button" aria-expanded="false"
                             aria-controls="kt_user_view_details">Thông tin chi tiết
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <span>
                            <a href="{{route('profile.edit')}}" class="btn btn-sm btn-light-primary" >Sửa</a>
                        </span>
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator"></div>
                    <!--begin::Details content-->
                    <div id="kt_user_view_details" class="collapse show">
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Họ tên</div>
                            <div class="text-gray-600">{{auth()->user()->name}}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Email</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{auth()->user()->email}}</a>
                            </div>
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Khoa</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{auth()->user()->major->name}}</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <ul
                class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-kt-countup-tabs="true"
                       data-bs-toggle="tab"
                       href="#kt_user_view_overview_security">Bảo mật</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade active show" id="kt_user_view_overview_security"
                     role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Hồ sơ</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5"
                                       id="kt_table_users_login_session">
                                    <!--begin::Table body-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td>Password</td>
                                        <td>******</td>
                                        <td class="text-end">
                                            <a href="{{route('changePassword')}}" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <img src="{{asset('assets/media/icons/duotune/art/art005.svg')}}" alt="">
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    @if(auth()->user()->role == 2)
                    <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">Two Step Authentication</h2>
                                    <div class="fs-6 fw-semibold text-muted">Keep your account
                                        extra secure with a second authentication step.
                                    </div>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Add-->
                                    <button type="button" class="btn btn-light-primary btn-sm"
                                            data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
                                        <span class="svg-icon svg-icon-3">
                                        <img src="{{asset('assets/media/icons/duotune/technology/teh004.svg')}}" alt="">
                                    </span>
                                        <!--end::Svg Icon-->Add Authentication Step
                                    </button>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_add_auth_app">Use
                                                authenticator app</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_add_one_time_password">Enable
                                                one-time password</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Add-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                    </div>
                    @endif
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
{{--    @include('pages.profile.components.modals')--}}
@endsection

