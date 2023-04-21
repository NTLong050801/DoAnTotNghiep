@extends('layouts.auth')

@section('content')
    <!--begin::Form-->
    <form class="form w-100" id="kt_password_reset_form" action="{{ route('password.email') }}" method="post">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Quên mật khẩu?</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-6">Nhập email của bạn để lấy lại mật khẩu.</div>
            <!--end::Link-->
        </div>
        <!--end::Heading-->
        @if (session()->has('status'))
            <div class="alert alert-info">{{session()->get('status')}}</div>
        @endif
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off"
                   class="form-control bg-transparent" required/>
            <!--end::Email-->
        </div>
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" id="kt_password_reset_submit" class="btn btn-danger me-4">
                <!--begin::Indicator label-->
                <span class="indicator-label">Gửi</span>
                <!--end::Indicator label-->
            </button>
            <a href="{{route('login')}}" class="btn btn-light">Hủy</a>
        </div>
        <!--end::Actions-->
    </form>
@endsection
