@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                  action="{{route('password.update')}}">
                @csrf
                @method('Put')
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="current_password">Mật khẩu hiện tại</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="password" name="current_password" id="current_password"
                           class="form-control form-control-solid mb-3 mb-lg-0" required>
                    <!--end::Input-->
                    <div
                        class="fv-plugins-message-container invalid-feedback">@error('current_password') {{$message}} @enderror</div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="password">Mật khẩu mới</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="password" name="password" id="password"
                           class="form-control form-control-solid mb-3 mb-lg-0" required>
                    <!--end::Input-->
                    <div
                        class="fv-plugins-message-container invalid-feedback">@error('password') {{$message}} @enderror</div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="password_confirmation">Xác nhận mật khẩu</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="form-control form-control-solid mb-3 mb-lg-0" required>
                    <!--end::Input-->
                    <div
                        class="fv-plugins-message-container invalid-feedback">@error('password_confirmation') {{$message}} @enderror</div>
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <a href="{{route('profile.index')}}">
                        <button type="button" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Trở về
                        </button>
                    </a>
                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                        <span class="indicator-label">Đổi mật khẩu</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection
