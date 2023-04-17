@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                  action="{{route('users.update',$user)}}">
                @csrf
                @method('PATCH')
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="name">Tên đầy đủ</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="name" id="name" class="form-control form-control-solid mb-3 mb-lg-0"
                           placeholder="Tên đầy đủ" value="{{$user->name}}" required>
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
                           placeholder="Tên đăng nhập" value="{{$user->username}}" required>
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
                           placeholder="Email" value="{{$user->email}}" required>
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
                           placeholder="Số điện thoại" value="{{$user->phone}}">
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
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
