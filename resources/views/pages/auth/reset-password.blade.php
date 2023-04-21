@extends('layouts.auth')

@section('content')
    <!--begin::Form-->
    <form class="form w-100" id="kt_password_reset_form" action="{{ route('password.store')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Cài đặt mật khẩu mới</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-6">
                Bạn sẵn sàng cài lại mật khẩu?
                <a href="{{route('login')}}" class="link-primary fw-bold">Đăng nhập</a>
            </div>
            <!--end::Link-->
        </div>
        <!--end::Heading-->
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Username-->
            <input type="text" placeholder="Email" name="email" autocomplete="off"
                   class="form-control bg-transparent" readonly value="{{old('email', $request->email)}}" required/>
            <!--end::Username-->
        </div>
        <!--end::Input group=-->
        <!--begin::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Mật khẩu" name="password" autocomplete="off"
                   class="form-control bg-transparent" required/>
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Xác nhận mật khẩu" name="password_confirmation" autocomplete="off"
                   class="form-control bg-transparent" required/>
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" id="kt_password_reset_submit" class="btn btn-danger me-4">
                <!--begin::Indicator label-->
                <span class="indicator-label">Đổi mật khẩu</span>
                <!--end::Indicator label-->
            </button>
            <a href="{{route('login')}}" class="btn btn-light">Hủy</a>
        </div>
        <!--end::Actions-->
    </form>
@endsection
