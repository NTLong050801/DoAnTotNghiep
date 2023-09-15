@extends('layouts.auth')

@section('content')
    <!--begin::Form-->
    <form class="form w-100" method="post" action="{{route('register.store')}}">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Đăng ký</h1>
            <!--end::Title-->
        </div>
        <!--end::Heading-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::email-->
            <input type="text" placeholder="Họ tên" name="name" autocomplete="off"
                   class="form-control bg-transparent" required/>
            <!--end::email-->
        </div>
        <!--end::Input group=-->
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
        <!--begin::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Xác nhận mật khẩu" name="password_confirmation" autocomplete="off"
                   class="form-control bg-transparent" required/>
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-danger">
                <!--begin::Indicator label-->
                <span class="indicator-label">Đăng ký</span>
                <!--end::Indicator label-->
            </button>
        </div>
        <!--end::Submit button-->
    </form>
    <!--end::Form-->
@endsection
