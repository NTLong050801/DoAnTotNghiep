<!--begin::Contacts-->
<div class="card card-flush h-lg-100" id="kt_contacts_main">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_chat_contacts_header">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
            <span class="svg-icon svg-icon-1 me-2">
                                <img src="{{asset('assets/media/icons/duotune/communication/com005.svg')}}" alt="">
                            </span>
            <h2>Thông tin sinh viên</h2>
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar gap-3">
            <!--begin::Action menu-->
            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                <span class="svg-icon svg-icon-2">
										<img src="{{asset('assets/media/icons/duotune/general/gen052.svg')}}" alt="">
                                </span>
                <!--end::Svg Icon-->
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Edit</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" id="kt_contact_delete" data-kt-redirect="../../demo1/dist/apps/contacts/getting-started.html">Delete</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
            <!--end::Action menu-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-5">
        <!--begin::Profile-->
        <div class="d-flex gap-7 align-items-center">
            <!--begin::Avatar-->
            <div class="symbol symbol-circle symbol-100px">
                <img src="{{$user->avatar}}" alt="image">
            </div>
            <!--end::Avatar-->
            <!--begin::Contact details-->
            <div class="d-flex flex-column gap-2">
                <!--begin::Name-->
                <h3 class="mb-0">{{$user->name}}</h3>
                <!--end::Name-->
                <!--begin::Email-->
                <div class="d-flex align-items-center gap-2">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                    <span class="svg-icon svg-icon-2">
                                        <img src="{{asset('assets/media/icons/duotune/communication/com011.svg')}}" alt="">
                                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-muted text-hover-primary">{{$user->email}}</a>
                </div>
                <!--end::Email-->
                <!--begin::Phone-->
                <div class="d-flex align-items-center gap-2">
                    <!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
                    <span class="svg-icon svg-icon-2">
                                       <img src="{{asset('assets/media/icons/duotune/electronics/elc003.svg')}}" alt="">
                                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-muted text-hover-primary">MSV: {{$user->identifier}}</a>
                </div>
                <!--end::Phone-->
            </div>
            <!--end::Contact details-->
        </div>
        <!--end::Profile-->
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8" role="tablist">
            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_contact_view_general" aria-selected="true" role="tab">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                    <span class="svg-icon svg-icon-4 me-1">
                                        <img src=" {{asset('assets/media/icons/duotune/general/gen001.svg')}}" alt="">
                                    </span>
                    <!--end::Svg Icon-->Chung</a>
            </li>
            <!--end:::Tab item-->
        </ul>
        <!--end:::Tabs-->
        <!--begin::Tab content-->
        <div class="tab-content" id="">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">
                <!--begin::Additional details-->
                <div class="d-flex flex-column gap-5 mt-7">
                    <!--begin::Company name-->
                    <div class="d-flex flex-column gap-1">
                        <div class="fw-bold text-muted">Khoa</div>
                        <div class="fw-bold fs-5">{{$user->major->name}}</div>
                    </div>
                    <!--end::Company name-->

                </div>
                <!--end::Additional details-->
            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Contacts-->
