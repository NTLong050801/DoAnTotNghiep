@extends('layouts.main')
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
                            <img src="{{$user->avatar}}" alt="image"/>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{$user->name}}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="mb-9">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-primary d-inline">
                                {{$user->username}}
                            </div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Position-->
                        <!--begin::Info-->
                        <!--begin::Info heading-->
                        <div class="fw-bold mb-3">Assigned Tickets
                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                               data-bs-toggle="popover" data-bs-trigger="hover"
                               data-bs-html="true"
                               data-bs-content="Number of support tickets assigned, closed and pending this week."></i>
                        </div>
                        <!--end::Info heading-->
                        <div class="d-flex flex-wrap flex-center">
                            <!--begin::Stats-->
                            <div
                                class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                <div class="fs-4 fw-bold text-gray-700">
                                    <span class="w-75px">243</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr066.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-semibold text-muted">Total</div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Stats-->
                            <div
                                class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                <div class="fs-4 fw-bold text-gray-700">
                                    <span class="w-50px">56</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-danger">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr065.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-semibold text-muted">Solved</div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Stats-->
                            <div
                                class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                <div class="fs-4 fw-bold text-gray-700">
                                    <span class="w-50px">188</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr066.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-semibold text-muted">Open</div>
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User Info-->
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold rotate collapsible" data-bs-toggle="collapse"
                             href="#kt_user_view_details" role="button" aria-expanded="false"
                             aria-controls="kt_user_view_details">Details
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <span data-bs-toggle="tooltip" data-bs-trigger="hover"
                              title="Edit customer details">
                            <a href="{{route('users.edit',$user)}}" class="btn btn-sm btn-light-primary">Edit</a>
                        </span>
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator"></div>
                    <!--begin::Details content-->
                    <div id="kt_user_view_details" class="collapse show">
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Username</div>
                            <div class="text-gray-600">{{$user->username}}</div>
                            <!--end::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Name</div>
                            <div class="text-gray-600">{{$user->name}}</div>
                            <!--end::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Email</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{$user->email}}</a>
                            </div>
                            <!--end::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Phone</div>
                            <div class="text-gray-600">{{$user->phone}}</div>
                            <!--end::Details item-->
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
            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Bảo mật</h2>
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
                                <td>
                                    <form method="post" action="{{route('users.reset-password',$user)}}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-light-primary btn-sm">
                                            Đặt lại mật khẩu
                                        </button>
                                    </form>
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
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h2>Phòng ban</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Form-->
                    <form class="form" method="post" action="{{route('users.update-role',$user)}}">
                        @csrf
                        @method('PATCH')
                        <!--begin::Roles-->
                        @foreach($roles as $role)
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="role" type="radio"
                                           value="{{$role->name}}"
                                           id="{{Str::slug($role->name)}}" {{$user->hasRole($role->name)?'checked':''}}>
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="{{Str::slug($role->name)}}">
                                        <div class="fw-bold text-gray-800">{{$role->name}}</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            @if(!$loop->last)
                                <div class="separator separator-dashed my-5"></div>
                            @endif
                        @endforeach
                        <!--end::Roles-->
                        <div class="d-flex justify-content-end align-items-center mt-12">
                            <!--begin::Button-->
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <!--end::Card footer-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
@endsection
