@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                  action="{{route('users.store')}}">
                @csrf
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="name">Tên đầy đủ</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="name" id="name" class="form-control form-control-solid mb-3 mb-lg-0"
                           placeholder="Tên đầy đủ" required>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="username">Tên đăng nhập</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="username" id="username"
                           class="form-control form-control-solid mb-3 mb-lg-0"
                           placeholder="Tên đăng nhập" required>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="email">Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="email" name="email" id="email" class="form-control form-control-solid mb-3 mb-lg-0"
                           placeholder="Email" required>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fw-semibold fs-6 mb-2" for="phone">Số điện thoại</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="phone" id="phone" class="form-control form-control-solid mb-3 mb-lg-0"
                           placeholder="Số điện thoại">
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-7">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-5">Phòng ban</label>
                    <!--end::Label-->
                    <!--begin::Roles-->
                    @foreach($roles as $role)
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="role" type="radio"
                                       value="{{$role->name}}"
                                       id="{{Str::slug($role->name)}}">
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
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                        <span class="indicator-label">Submit</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection
