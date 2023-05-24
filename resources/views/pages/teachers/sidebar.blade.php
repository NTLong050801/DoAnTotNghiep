<div
    id="kt_app_sidebar"
    class="app-sidebar flex-column"
    data-kt-drawer="true"
    data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="225px"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
>
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="#">
            <img alt="Logo" style="width: 145px" src="{{asset('assets\media\logos\default-darkk.jpg')}}"
                 class="h-44px w-144px app-sidebar-logo-default">
            <img alt="Logo" src="{{asset('assets\media\logos\default-smalll.jpg')}}"
                 class="h-20px app-sidebar-logo-minimize">
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div
            id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true"
            data-kt-toggle-state="active"
            data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize"
        >
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-2 rotate-180">
                <img src="{{asset('assets/media/icons/duotune/arrows/arr079.svg')}}" alt=""/>
             </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div
            id="kt_app_sidebar_menu_wrapper"
            class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true"
            data-kt-scroll-activate="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu"
            data-kt-scroll-offset="5px"
            data-kt-scroll-save-state="true"
        >
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-5"
                 id="#kt_app_sidebar_menu"
                 data-kt-menu="true"
                 data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-block">
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="#">
                            <span class="menu-icon"><i class="bi bi-grid-1x2-fill"></i></span>
                            <span class="menu-title">Tổng quan</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{route('teachers.classes.index')}}">
                            <span class="menu-icon"><i class="fa-solid fa-people-group"></i></span>
                            <span class="menu-title">Quản lý lớp học</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{route('teachers.questions.index')}}">
                            <span class="menu-icon"><i class="fa-solid fa-building-columns"></i></span>
                            <span class="menu-title">Ngân hàng câu hỏi</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{route('teachers.exams.index')}}">
                            <span class="menu-icon"><i class="fa-solid fa-address-book"></i></span>
                            <span class="menu-title">Quản lý đề thi</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{route('teachers.results.index')}}">
                            <span class="menu-icon"><i class="fa-solid fa-square-poll-horizontal"></i></span>
                            <span class="menu-title">Kết quả</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                </div>
                <div class="menu-block">

                </div>
                <div class="menu-block">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="#">
                            <span class="menu-icon"><i class="fa-solid fa-users-gear"></i></span>
                            <span class="menu-title">Quản lý sinh viên</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto px-6 pt-2" id="kt_app_sidebar_footer">
        <a href="{{route('profile.edit')}}"
           class="btn btn-flex btn-custom overflow-hidden text-nowrap px-0 w-100"
           data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
           data-bs-original-title="200+ in-house components and 3rd-party plugins" data-kt-initialized="1"
        >
            <img class="avatar" style="width: 50px" src="{{auth()->user()->avatar}}" alt="">
            <div class="btn-label ms-5">
                <div>{{Auth::user()->name}}</div>
                <div>{{Auth::user()->username}}</div>
            </div>
        </a>
    </div>
    <!--end::Footer-->
</div>

