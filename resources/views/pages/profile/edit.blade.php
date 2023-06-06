@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-toolbar">
                <h2>Sửa Thông Tin Cá Nhân</h2>
            </div>
        </div>
        <div class="card-body">
            <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                  action="{{route('profile.update')}}">
                @csrf
                @method('PATCH')
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="name">Họ và tên</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="name" id="name" class="form-control  mb-3 mb-lg-0"
                           placeholder="Tên đầy đủ" value="{{auth()->user()->name}}" required>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback">@error('name'){{$message}}@enderror</div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2" for="email">Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="email" name="email" id="email" class="form-control  mb-3 mb-lg-0"
                           placeholder="Email" value="{{auth()->user()->email}}" required>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback">@error('email'){{$message}}@enderror</div>
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <a href="{{route('profile.index')}}"><button type="button" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Trở về</button></a>
                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                        <span class="indicator-label">Sửa</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection
