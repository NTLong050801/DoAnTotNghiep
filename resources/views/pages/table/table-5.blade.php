<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Over 500 orders</span>
        </h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                <span class="svg-icon svg-icon-2">
                    <img src="{{asset('assets/media/icons/duotune/general/gen024.svg')}}" alt="">
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--begin::Menu 2-->
            <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Ticket</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Customer</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                    <!--begin::Menu item-->
                    <a href="#" class="menu-link px-3">
                        <span class="menu-title">New Group</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--end::Menu item-->
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Admin Group</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Staff Group</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Member Group</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Contact</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mt-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu 2-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">
                    <th class="w-25px">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                   data-kt-check-target=".widget-13-check">
                        </div>
                    </th>
                    <th class="min-w-150px">Order Id</th>
                    <th class="min-w-140px">Country</th>
                    <th class="min-w-120px">Date</th>
                    <th class="min-w-120px">Company</th>
                    <th class="min-w-120px">Total</th>
                    <th class="min-w-120px">Status</th>
                    <th class="min-w-100px text-end">Actions</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-13-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">56037-XDER</a>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Brasil</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: PH</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
                    </td>
                    <td class="text-dark fw-bold text-hover-primary fs-6">$3560</td>
                    <td>
                        <span class="badge badge-light-success">Approved</span>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen019.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/art/art005.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen027.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-13-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">05822-FXSP</a>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Belarus</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BY</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">04/18/2021</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Agoda</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Houses &amp; Hotels</span>
                    </td>
                    <td class="text-dark fw-bold text-hover-primary fs-6">$4850</td>
                    <td>
                        <span class="badge badge-light-warning">In Progress</span>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen019.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/art/art005.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen027.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-13-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">4472-QREX</a>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Phillipines</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BH</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">07/23/2019</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">RoadGee</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
                    </td>
                    <td class="text-dark fw-bold text-hover-primary fs-6">$8376</td>
                    <td>
                        <span class="badge badge-light-danger">Success</span>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen019.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/art/art005.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen027.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-13-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">00347-BCLQ</a>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Argentina</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BR</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">12/21/2021</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">The Hill</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                    </td>
                    <td class="text-dark fw-bold text-hover-primary fs-6">$9486</td>
                    <td>
                        <span class="badge badge-light-info">Rejected</span>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen019.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/art/art005.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen027.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-13-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">59486-XDER</a>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Agoda</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BT</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Phillipines</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
                    </td>
                    <td class="text-dark fw-bold text-hover-primary fs-6">$8476</td>
                    <td>
                        <span class="badge badge-light-primary">Approved</span>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen019.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/art/art005.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <img src="{{asset('assets/media/icons/duotune/general/gen027.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </td>
                </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
