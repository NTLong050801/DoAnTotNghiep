@extends('layouts.auth')

@section('content')
    <!--begin::Form-->
    <form class="form w-100" method="post" action="{{route('login.store')}}">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Đăng nhập</h1>
            <!--end::Title-->
        </div>
        <!--end::Heading-->
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::email-->
            <input type="email" placeholder="Email" name="email" autocomplete="off"
                   class="form-control bg-transparent" required/>
            <!--end::email-->
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
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <!--begin::Link-->
            <a href="{{route('password.request')}}" class="link-danger">Quên mật khẩu ?</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-danger">
                <!--begin::Indicator label-->
                <span class="indicator-label">Đăng nhập</span>
                <!--end::Indicator label-->
            </button>
        </div>
        <!--end::Submit button-->
    </form>
    <!--end::Form-->
@endsection

