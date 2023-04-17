<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                          <img src="{{asset('assets/media/icons/duotune/arrows/arr061.svg')}}" alt="">
                        </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>
                    <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                     data-kt-search-enter="enter" data-kt-search-layout="inline" data-kt-search="true">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden">
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span
                            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                              <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                            </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search"
                               value="" placeholder="Search by username, full name or email..."
                               data-kt-search-element="input">
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                              data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span
                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                            data-kt-search-element="clear">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                    <img src="{{asset('assets/media/icons/duotune/arrows/arr061.svg')}}" alt="">
                                </span>
                            <!--end::Svg Icon-->
                            </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold mb-5">Recently searched:</h3>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Suggestions-->
                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                   value="0">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Smith</a>
                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-103-bs21" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected"
                                                    data-select2-id="select2-data-105-6x1g">Owner
                                            </option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-104-7c84"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-9qtq-container"
                                                    aria-controls="select2-9qtq-container"><span
                                                        class="select2-selection__rendered" id="select2-9qtq-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Owner">Owner</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                   value="1">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                Macy</a>
                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-106-jsj0" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1" selected="selected"
                                                    data-select2-id="select2-data-108-lobt">Guest
                                            </option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-107-2tdj"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-8mjg-container"
                                                    aria-controls="select2-8mjg-container"><span
                                                        class="select2-selection__rendered" id="select2-8mjg-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Guest">Guest</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                   value="2">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                Smith</a>
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-109-h3dw" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected"
                                                    data-select2-id="select2-data-111-1o61">Can Edit
                                            </option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-110-4r76"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-cab4-container"
                                                    aria-controls="select2-cab4-container"><span
                                                        class="select2-selection__rendered" id="select2-cab4-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Can Edit">Can Edit</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                   value="3">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                Bean</a>
                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-112-3bf4" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected"
                                                    data-select2-id="select2-data-114-dafy">Owner
                                            </option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-113-4eo6"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-u2po-container"
                                                    aria-controls="select2-u2po-container"><span
                                                        class="select2-selection__rendered" id="select2-u2po-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Owner">Owner</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                   value="4">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                Cox</a>
                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-115-gt7c" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected"
                                                    data-select2-id="select2-data-117-y3f2">Can Edit
                                            </option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-116-75f2"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-uzof-container"
                                                    aria-controls="select2-uzof-container"><span
                                                        class="select2-selection__rendered" id="select2-uzof-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Can Edit">Can Edit</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                   value="5">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                Collins</a>
                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-118-09ya" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected"
                                                    data-select2-id="select2-data-120-8vcs">Owner
                                            </option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-119-yu02"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-0zn7-container"
                                                    aria-controls="select2-0zn7-container"><span
                                                        class="select2-selection__rendered" id="select2-0zn7-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Owner">Owner</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                   value="6">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-9.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                Mitcham</a>
                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-121-s268" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected"
                                                    data-select2-id="select2-data-123-kct9">Can Edit
                                            </option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-122-ole2"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-jnlv-container"
                                                    aria-controls="select2-jnlv-container"><span
                                                        class="select2-selection__rendered" id="select2-jnlv-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Can Edit">Can Edit</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                   value="7">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                Wild</a>
                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-124-zo58" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected"
                                                    data-select2-id="select2-data-126-8ta8">Owner
                                            </option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-125-1qw9"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-ndbd-container"
                                                    aria-controls="select2-ndbd-container"><span
                                                        class="select2-selection__rendered" id="select2-ndbd-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Owner">Owner</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                   value="8">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                Owen</a>
                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-127-fpnh" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1" selected="selected"
                                                    data-select2-id="select2-data-129-igyq">Guest
                                            </option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-128-t1gt"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-mdae-container"
                                                    aria-controls="select2-mdae-container"><span
                                                        class="select2-selection__rendered" id="select2-mdae-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Guest">Guest</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                   value="9">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-23.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                Wilson</a>
                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-130-mirq" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected"
                                                    data-select2-id="select2-data-132-5zfp">Can Edit
                                            </option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-131-u7ar"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-epp3-container"
                                                    aria-controls="select2-epp3-container"><span
                                                        class="select2-selection__rendered" id="select2-epp3-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Can Edit">Can Edit</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                   value="10">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Bold</a>
                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-133-zlf3" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected"
                                                    data-select2-id="select2-data-135-38ld">Owner
                                            </option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-134-t69g"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-vjai-container"
                                                    aria-controls="select2-vjai-container"><span
                                                        class="select2-selection__rendered" id="select2-vjai-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Owner">Owner</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                   value="11">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-12.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                Crown</a>
                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-136-7q80" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1" selected="selected"
                                                    data-select2-id="select2-data-138-ig7h">Guest
                                            </option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-137-mn1n"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-d0a1-container"
                                                    aria-controls="select2-d0a1-container"><span
                                                        class="select2-selection__rendered" id="select2-d0a1-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Guest">Guest</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                   value="12">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                Doe</a>
                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-139-02ao" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected"
                                                    data-select2-id="select2-data-141-iz1c">Can Edit
                                            </option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-140-1jxe"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-iia0-container"
                                                    aria-controls="select2-iia0-container"><span
                                                        class="select2-selection__rendered" id="select2-iia0-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Can Edit">Can Edit</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                   value="13">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-13.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                Miller</a>
                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-142-o7ba" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected"
                                                    data-select2-id="select2-data-144-lmb1">Can Edit
                                            </option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-143-dbgu"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-cp32-container"
                                                    aria-controls="select2-cp32-container"><span
                                                        class="select2-selection__rendered" id="select2-cp32-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Can Edit">Can Edit</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                   value="14">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                Kunic</a>
                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-145-kkoj" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected"
                                                    data-select2-id="select2-data-147-w096">Owner
                                            </option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-146-kuwb"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-jtwv-container"
                                                    aria-controls="select2-jtwv-container"><span
                                                        class="select2-selection__rendered" id="select2-jtwv-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Owner">Owner</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                   value="15">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-21.jpg')}}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                Wilder</a>
                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-148-pl95" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1" selected="selected"
                                                    data-select2-id="select2-data-150-ttj5">Guest
                                            </option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-149-fdvb"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-uz6n-container"
                                                    aria-controls="select2-uz6n-container"><span
                                                        class="select2-selection__rendered" id="select2-uz6n-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Guest">Guest</span><span class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                   value="16">
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                Owen</a>
                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select
                                            class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-select2-id="select2-data-151-2p6u" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected"
                                                    data-select2-id="select2-data-153-uv00">Can Edit
                                            </option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="ltr" data-select2-id="select2-data-152-755s"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-l4f2-container"
                                                    aria-controls="select2-l4f2-container"><span
                                                        class="select2-selection__rendered" id="select2-l4f2-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="Can Edit">Can Edit</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">Cancel
                                </button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
                                    Selected Users
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-semibold py-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="{{asset('assets/media/illustrations/sketchy-1/1.png')}}" alt=""
                                     class="w-100 h-200px h-sm-325px">
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
