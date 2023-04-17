<div class="app-navbar-item ms-1 ms-md-3">
    <!--begin::Menu- wrapper-->
    <div
        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
        <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
        <span class="svg-icon svg-icon-2 svg-icon-md-1">
                        <img src="{{asset('assets/media/icons/duotune/general/gen022.svg')}}" alt="">
                   </span>
        <!--end::Svg Icon-->
    </div>
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
         data-kt-menu="true">
        <!--begin::Heading-->
        <div class="d-flex flex-column bgi-no-repeat rounded-top"
             style="background-image:url('{{asset('assets/media/misc/menu-header-bg.jpg')}}')">
            <!--begin::Title-->
            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                <span class="fs-8 opacity-75 ps-3">24 reports</span>
            </h3>
            <!--end::Title-->
            <!--begin::Tabs-->
            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9"
                role="tablist">
                <li class="nav-item"
                    role="presentation">
                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                       data-bs-toggle="tab"
                       href="#kt_topbar_notifications_1"
                       aria-selected="false"
                       tabindex="-1"
                       role="tab">Alerts</a>
                </li>
                <li class="nav-item"
                    role="presentation">
                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                       data-bs-toggle="tab"
                       href="#kt_topbar_notifications_2"
                       aria-selected="true"
                       role="tab">Updates</a>
                </li>
                <li class="nav-item"
                    role="presentation">
                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                       data-bs-toggle="tab"
                       href="#kt_topbar_notifications_3"
                       aria-selected="false"
                       tabindex="-1"
                       role="tab">Logs</a>
                </li>
            </ul>
            <!--end::Tabs-->
        </div>
        <!--end::Heading-->
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab panel-->
            <div class="tab-pane fade"
                 id="kt_topbar_notifications_1"
                 role="tabpanel">
                <!--begin::Items-->
                <div class="scroll-y mh-325px my-5 px-8">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                           <span class="symbol-label bg-light-primary">
                                               <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                               <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                  <img src="{{asset('assets/media/icons/duotune/technology/teh008.svg')}}" alt="">
                                               </span>
                                               <!--end::Svg Icon-->
                                           </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#"
                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                    Alice</a>
                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 hr</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                           <span class="symbol-label bg-light-danger">
                                               <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                               <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                    <img src="{{asset('assets/media/icons/duotune/general/gen044.svg')}}" alt="">
                                               </span>
                                               <!--end::Svg Icon-->
                                           </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#"
                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                    Confidential</a>
                                <div class="text-gray-400 fs-7">Confidential staff documents
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                           <span class="symbol-label bg-light-warning">
                                               <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                               <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                 <img src="{{asset('assets/media/icons/duotune/finance/fin006.svg')}}" alt="">
                                               </span>
                                               <!--end::Svg Icon-->
                                           </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#"
                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                    HR</a>
                                <div class="text-gray-400 fs-7">Corporeate staff profiles
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                           <span class="symbol-label bg-light-success">
                                               <!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
                                               <span class="svg-icon svg-icon-2 svg-icon-success">
                                                <img src="{{asset('assets/media/icons/duotune/files/fil023.svg')}}" alt="">
                                               </span>
                                               <!--end::Svg Icon-->
                                           </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#"
                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                    Redux</a>
                                <div class="text-gray-400 fs-7">New frontend admin theme
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                           <span class="symbol-label bg-light-primary">
                                               <!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
                                               <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                  <img src="{{asset('assets/media/icons/duotune/maps/map001.svg')}}" alt="">
                                               </span>
                                               <!--end::Svg Icon-->
                                           </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#"
                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                    Breafing</a>
                                <div class="text-gray-400 fs-7">Product launch status update
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                           <span class="symbol-label bg-light-info">
                                               <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                               <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <img src="{{asset('assets/media/icons/duotune/general/gen006.svg')}}" alt="">
                                               </span>
                                               <!--end::Svg Icon-->
                                           </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#"
                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                    Assets</a>
                                <div class="text-gray-400 fs-7">Collection of banner images
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                           <span class="symbol-label bg-light-warning">
                                               <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                               <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                    <img src="{{asset('assets/media/icons/duotune/art/art002.svg')}}" alt="">
                                               </span>
                                               <!--end::Svg Icon-->
                                           </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#"
                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                    Assets</a>
                                <div class="text-gray-400 fs-7">Collection of SVG icons
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">20 March</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
                <!--begin::View more-->
                <div class="py-3 text-center border-top">
                    <a href="#"
                       class="btn btn-color-gray-600 btn-active-color-primary">View All
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-5">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr064.svg')}}" alt="">
                                   </span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::View more-->
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div class="tab-pane fade show active"
                 id="kt_topbar_notifications_2"
                 role="tabpanel">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column px-9">
                    <!--begin::Section-->
                    <div class="pt-10 pb-0">
                        <!--begin::Title-->
                        <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="text-center text-gray-600 fw-semibold pt-1">Outlines
                            keep you honest. They stoping you from amazing poorly about
                            drive
                        </div>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="text-center mt-5 mb-9">
                            <a href="#"
                               class="btn btn-sm btn-primary px-6"
                               data-bs-toggle="modal"
                               data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4">
                        <img class="mw-100 mh-200px"
                             alt="image"
                             src="{{asset('assets/media/illustrations/sketchy-1/1.png')}}">
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div class="tab-pane fade"
                 id="kt_topbar_notifications_3"
                 role="tabpanel">
                <!--begin::Items-->
                <div class="scroll-y mh-325px my-5 px-8">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200
                                           OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">New
                                order</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Just now</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500
                                           ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">New
                                customer</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200
                                           OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">Payment
                                process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300
                                           WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">Search
                                query</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200
                                           OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">API
                                connection</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 week</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200
                                           OK</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">Database
                                restore</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Mar 5</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300
                                           WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">System
                                update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">May 15</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300
                                           WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">Server
                                OS update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Apr 3</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300
                                           WRN</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">API
                                rollback</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jun 30</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500
                                           ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">Refund
                                process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jul 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500
                                           ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Sep 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500
                                           ERR</span>
                            <!--end::Code-->
                            <!--begin::Title-->
                            <a href="#"
                               class="text-gray-800 text-hover-primary fw-semibold">Mail
                                tasks</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Dec 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
                <!--begin::View more-->
                <div class="py-3 text-center border-top">
                    <a href="#"
                       class="btn btn-color-gray-600 btn-active-color-primary">View All
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-5">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr064.svg')}}" alt="">
                                   </span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::View more-->
            </div>
            <!--end::Tab panel-->
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>
