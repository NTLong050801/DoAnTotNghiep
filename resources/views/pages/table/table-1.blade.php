<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Members Statistics</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span>
        </h3>
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
             data-bs-original-title="Click to add a user" data-kt-initialized="1">
            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
               data-bs-target="#kt_modal_invite_friends">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                <span class="svg-icon svg-icon-3">
						<img src="{{asset('assets/media/icons/duotune/arrows/arr075.svg')}}" alt="">
					</span>
                <!--end::Svg Icon-->New Member</a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">
                    <th class="w-25px">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                   data-kt-check-target=".widget-9-check">
                        </div>
                    </th>
                    <th class="min-w-200px">Authors</th>
                    <th class="min-w-150px">Company</th>
                    <th class="min-w-150px">Progress</th>
                    <th class="min-w-100px text-end">Actions</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-9-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-45px me-5">
                                <img src="assets/media/avatars/300-14.jpg" alt="">
                            </div>
                            <div class="d-flex justify-content-start flex-column">
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Ana Simmons</a>
                                <span
                                    class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">Intertico</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                            </div>
                            <div class="progress h-6px w-100">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-end flex-shrink-0">
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                <span class="svg-icon svg-icon-3">
										<img src="{{asset('assets/media/icons/duotune/general/gen019.svg')}} " alt="">
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
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-9-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-45px me-5">
                                <img src="assets/media/avatars/300-2.jpg" alt="">
                            </div>
                            <div class="d-flex justify-content-start flex-column">
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Jessie Clarcson</a>
                                <span
                                    class="text-muted fw-semibold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">Agoda</a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Houses &amp; Hotels</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                            </div>
                            <div class="progress h-6px w-100">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-end flex-shrink-0">
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                <span class="svg-icon svg-icon-3">
                                        <img src="{{asset('assets/media/icons/duotune/general/gen027.svg')}}" alt="">
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
                        </div>
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
