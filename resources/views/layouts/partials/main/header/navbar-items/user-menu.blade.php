<div class="app-navbar-item ms-1 ms-md-3"
     id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
         data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
         data-kt-menu-attach="parent"
         data-kt-menu-placement="bottom-end">
        <img src="{{auth()->user()->avatar}}"
             alt="user">
    </div>
    <!--begin::User account menu-->
    <div
        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo"
                         src="{{auth()->user()->avatar}}">
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->name}}
                        <span
                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">
                            @if(auth()->user()->role==2)
                                Admin
                            @elseif(auth()->user()->role==1)
                                Teacher
                            @else
                                Student
                            @endif
                        </span>
                    </div>
                    <a href="#"
                       class="fw-semibold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->

        <!--begin::Menu item-->
        <div class="menu-item px-5 my-1">
            <a href="{{route('profile.index')}}"
               class="menu-link px-5">Cài đặt tài khoản</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <form class="menu-link px-5" action="{{route('logout')}}" method="get">
                @csrf
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                >Đăng xuất</a>
            </form>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::User account menu-->
    <!--end::Menu wrapper-->
</div>
