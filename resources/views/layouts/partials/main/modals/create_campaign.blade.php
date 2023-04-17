<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Create Campaign</h2>
                <!--end::Modal title-->
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
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper"
                     data-kt-stepper="true">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2">
                        <!--begin::Step 1-->
                        <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Campaign Details</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Creative Uploads</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Audiences</h3>
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Budget Estimates</h3>
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Completed</h3>
                        </div>
                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->
                    <!--begin::Form-->
                    <form class="mx-auto w-100 mw-600px pt-15 pb-10 fv-plugins-bootstrap5 fv-plugins-framework"
                          novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bold d-flex align-items-center text-dark">Setup Campaign Details
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           aria-label="Campaign name will be used as reference within your campaign reports"
                                           data-bs-original-title="Campaign name will be used as reference within your campaign reports"
                                           data-kt-initialized="1"></i>
                                    </h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                                        <a href="#" class="link-primary fw-bold">Help Page</a>.
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="required form-label mb-3">Campaign Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           name="campaign_name" placeholder="" value="">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-block fw-semibold fs-6 mb-5">
                                        <span class="required">Company Logo</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           aria-label="E.g. Select a logo to represent the company that's running the campaign."
                                           data-bs-original-title="E.g. Select a logo to represent the company that's running the campaign."
                                           data-kt-initialized="1"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input placeholder-->

                                    <!--end::Image input placeholder-->
                                    <!--begin::Image input-->
                                    <div
                                        class="image-input image-input-empty image-input-outline image-input-placeholder"
                                        data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            aria-label="Change avatar" data-bs-original-title="Change avatar"
                                            data-kt-initialized="1">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                            data-kt-initialized="1">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                            data-kt-initialized="1">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
                                    <!--end::Label-->
                                    <!--begin::Roles-->
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="0"
                                                   id="kt_modal_update_role_option_0" checked="checked">
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                <div class="fw-bold text-gray-800">Get more visitors</div>
                                                <div class="text-gray-600">Increase impression traffic onto the
                                                    platform
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="1"
                                                   id="kt_modal_update_role_option_1">
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                <div class="fw-bold text-gray-800">Get more messages on chat</div>
                                                <div class="text-gray-600">Increase community interaction and
                                                    communication
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="2"
                                                   id="kt_modal_update_role_option_2">
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                <div class="fw-bold text-gray-800">Get more calls</div>
                                                <div class="text-gray-600">Boost telecommunication feedback to
                                                    provide precise and accurate information
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="3"
                                                   id="kt_modal_update_role_option_3">
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                <div class="fw-bold text-gray-800">Get more likes</div>
                                                <div class="text-gray-600">Increase positive interactivity on social
                                                    media platforms
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="4"
                                                   id="kt_modal_update_role_option_4">
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                <div class="fw-bold text-gray-800">Lead generation</div>
                                                <div class="text-gray-600">Collect contact information for potential
                                                    customers
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <!--end::Roles-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Upload Files</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a>
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dz-clickable" id="kt_modal_create_campaign_files_upload">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                            <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                   <img src="{{asset('assets/media/icons/duotune/files/fil010.svg')}}" alt="">
                                                </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files
                                                    here or click to upload.</h3>
                                                <span class="fw-semibold fs-4 text-muted">Upload up to 10
                                                        files</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                    <!--End::Label-->
                                    <!--begin::Files-->
                                    <div class="mh-300px scroll-y me-n7 pe-7">
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('assets/media/svg/files/pdf.svg')}}" alt="icon">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product
                                                        Specifications</a>
                                                    <div class="fw-semibold text-muted">230kb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select
                                                    class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit" data-select2-id="select2-data-13-y71s"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-15-e254"></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-14-k4k6"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-z80i-container"
                                                            aria-controls="select2-z80i-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-z80i-container" role="textbox"
                                                                aria-readonly="true" title="Edit"><span
                                                                    class="select2-selection__placeholder">Edit</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('assets/media/svg/files/tif.svg')}}" alt="icon">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Creative Poster</a>
                                                    <div class="fw-semibold text-muted">2.4mb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select
                                                    class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit" data-select2-id="select2-data-16-ce6j"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-18-rfti"></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-17-a0h6"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-s4ft-container"
                                                            aria-controls="select2-s4ft-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-s4ft-container" role="textbox"
                                                                aria-readonly="true" title="Edit"><span
                                                                    class="select2-selection__placeholder">Edit</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('assets/media/svg/files/folder-document.svg')}}" alt="icon">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Landing Page Source</a>
                                                    <div class="fw-semibold text-muted">1.12mb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select
                                                    class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit" data-select2-id="select2-data-19-9yfm"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-21-dpca"></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-20-m9kw"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-dyh9-container"
                                                            aria-controls="select2-dyh9-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-dyh9-container" role="textbox"
                                                                aria-readonly="true" title="Edit"><span
                                                                    class="select2-selection__placeholder">Edit</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('assets/media/svg/files/css.svg')}}" alt="icon">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing
                                                        Page Styling</a>
                                                    <div class="fw-semibold text-muted">85kb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select
                                                    class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit" data-select2-id="select2-data-22-37mr"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-24-2ab0"></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-23-k0bs"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-aak2-container"
                                                            aria-controls="select2-aak2-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-aak2-container" role="textbox"
                                                                aria-readonly="true" title="Edit"><span
                                                                    class="select2-selection__placeholder">Edit</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('assets/media/svg/files/ai.svg')}}" alt="icon">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
                                                        Source Files</a>
                                                    <div class="fw-semibold text-muted">48mb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select
                                                    class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit" data-select2-id="select2-data-25-dki8"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-27-dhqs"></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-26-rkjh"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-lmcq-container"
                                                            aria-controls="select2-lmcq-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-lmcq-container" role="textbox"
                                                                aria-readonly="true" title="Edit"><span
                                                                    class="select2-selection__placeholder">Edit</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('assets/media/svg/files/doc.svg')}}" alt="icon">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Plan Document</a>
                                                    <div class="fw-semibold text-muted">27kb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select
                                                    class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit" data-select2-id="select2-data-28-7xal"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-30-1xnj"></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-29-gaeb"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-2g7r-container"
                                                            aria-controls="select2-2g7r-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-2g7r-container" role="textbox"
                                                                aria-readonly="true" title="Edit"><span
                                                                    class="select2-selection__placeholder">Edit</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                    </div>
                                    <!--end::Files-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Configure Audiences</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a>
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Gender
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           aria-label="Show your ads to either men or women, or select 'All' for both"
                                           data-bs-original-title="Show your ads to either men or women, or select 'All' for both"
                                           data-kt-initialized="1"></i></label>
                                    <!--End::Label-->
                                    <!--begin::Row-->
                                    <div class="row g-9" data-kt-buttons="true"
                                         data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                               name="campaign_gender" value="1" checked="checked">
                                                    </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">All</span>
                                                    </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                               name="campaign_gender" value="2">
                                                    </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                                                    </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                               name="campaign_gender" value="3">
                                                    </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                                                    </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Age
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           aria-label="Select the minimum and maximum age of the people who will find your ad relevant."
                                           data-bs-original-title="Select the minimum and maximum age of the people who will find your ad relevant."
                                           data-kt-initialized="1"></i></label>
                                    <!--End::Label-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-stack">
                                        <div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted">
                                            18
                                        </div>
                                        <div id="kt_modal_create_campaign_age_slider"
                                             class="noUi-sm w-100 ms-5 me-8 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect"
                                                         style="transform: translate(7.46269%, 0px) scale(0.328358, 1);">
                                                    </div>
                                                </div>
                                                <div class="noUi-origin"
                                                     style="transform: translate(-92.5373%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                         tabindex="0" role="slider" aria-orientation="horizontal"
                                                         aria-valuemin="13.0" aria-valuemax="40.0" aria-valuenow="18.0"
                                                         aria-valuetext="18.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin"
                                                     style="transform: translate(-59.7015%, 0px); z-index: 6;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1"
                                                         tabindex="0" role="slider" aria-orientation="horizontal"
                                                         aria-valuemin="18.0" aria-valuemax="80.0" aria-valuenow="40.0"
                                                         aria-valuetext="40.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted">
                                            40
                                        </div>
                                    </div>
                                    <!--end::Slider-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Location
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           aria-label="Enter one or more location points for more specific targeting."
                                           data-bs-original-title="Enter one or more location points for more specific targeting."
                                           data-kt-initialized="1"></i></label>
                                    <!--End::Label-->
                                    <!--begin::Tagify-->
                                    <tags class="tagify form-control d-flex align-items-center" tabindex="-1">
                                        <tag title="Argentina" contenteditable="false" spellcheck="false"
                                             class="tagify__tag " value="Argentina" code="AR">
                                            <x title="remove tag" class="tagify__tag__removeBtn"></x>
                                            <div class="d-flex align-items-center"><img
                                                    onerror="this.style.visibility = 'hidden'"
                                                    class="w-25px rounded-circle me-2"
                                                    src="{{asset('assets/media/flags/argentina.svg')}}"><span
                                                    class="tagify__tag-text">Argentina</span></div>
                                        </tag>
                                        <tag title="Australia" contenteditable="false" spellcheck="false"
                                             class="tagify__tag " value="Australia" code="AU"
                                             searchby="beach, sub-tropical">
                                            <x title="remove tag" class="tagify__tag__removeBtn"></x>
                                            <div class="d-flex align-items-center"><img
                                                    onerror="this.style.visibility = 'hidden'"
                                                    class="w-25px rounded-circle me-2"
                                                    src="{{asset('assets/media/flags/australia.svg')}}"><span
                                                    class="tagify__tag-text">Australia</span></div>
                                        </tag>
                                        <span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;"
                                              aria-placeholder="" class="tagify__input" role="textbox"
                                              aria-autocomplete="both" aria-multiline="false"></span>
                                        &ZeroWidthSpace;
                                    </tags>
                                    <input class="form-control d-flex align-items-center" value=""
                                           id="kt_modal_create_campaign_location"
                                           data-kt-flags-path="assets/media/flags/" tabindex="-1">
                                    <!--end::Tagify-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Budget Estimates</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a>
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Campaign Duration
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           aria-label="Choose how long you want your ad to run for"
                                           data-bs-original-title="Choose how long you want your ad to run for"
                                           data-kt-initialized="1"></i></label>
                                    <!--end::Label-->
                                    <!--begin::Duration option-->
                                    <div class="d-flex gap-9 mb-7">
                                        <!--begin::Button-->
                                        <button type="button"
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active"
                                                id="kt_modal_create_campaign_duration_all">Continuous duration
                                            <br>
                                            <span class="fs-7">Your ad will run continuously for a daily
                                                    budget.</span></button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button"
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default"
                                                id="kt_modal_create_campaign_duration_fixed">Fixed duration
                                            <br>
                                            <span class="fs-7">Your ad will run on the specified dates
                                                    only.</span></button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Duration option-->
                                    <!--begin::Datepicker-->
                                    <input class="form-control form-control-solid d-none flatpickr-input"
                                           placeholder="Pick date &amp; time" id="kt_modal_create_campaign_datepicker"
                                           type="hidden"><input
                                        class="form-control form-control-solid d-none form-control input"
                                        placeholder="Pick date &amp; time" tabindex="0" type="text" readonly="readonly">
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Daily Budget
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           aria-label="Choose the budget allocated for each day. Higher budget will generate better results"
                                           data-bs-original-title="Choose the budget allocated for each day. Higher budget will generate better results"
                                           data-kt-initialized="1"></i></label>
                                    <!--end::Label-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-4 mt-1 me-2">$</span>
                                            <span class="fw-bold fs-3x"
                                                  id="kt_modal_create_campaign_budget_label">5</span>
                                            <span class="fw-bold fs-3x">.00</span>
                                        </div>
                                        <div id="kt_modal_create_campaign_budget_slider"
                                             class="noUi-sm noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                            <div class="noUi-base">
                                                <div class="noUi-connects"></div>
                                                <div class="noUi-origin"
                                                     style="transform: translate(-99.1984%, 0px); z-index: 4;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                         tabindex="0" role="slider" aria-orientation="horizontal"
                                                         aria-valuemin="1.0" aria-valuemax="500.0" aria-valuenow="5.0"
                                                         aria-valuetext="5.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Slider-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-12 text-center">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Campaign Created!</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="fw-semibold text-muted fs-4">You will receive an email with with the
                                        summary of your newly created campaign!
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center pb-20">
                                    <button id="kt_modal_create_campaign_create_new" type="button"
                                            class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create
                                        New Campaign
                                    </button>
                                    <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
                                       data-bs-original-title="Coming Soon" data-kt-initialized="1">View Campaign</a>
                                </div>
                                <!--end::Actions-->
                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img src="{{asset('assets/media/illustrations/sketchy-1/9.png')}}" alt=""
                                         class="mww-100 mh-350px">
                                </div>
                                <!--end::Illustration-->
                            </div>
                        </div>
                        <!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                    <span class="svg-icon svg-icon-3 me-1">
                                           <img src="{{asset('assets/media/icons/duotune/arrows/arr063.svg')}}" alt="">
                                        </span>
                                    <!--end::Svg Icon-->Back
                                </button>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">Submit
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-2 me-0">
                                               <img src="{{asset('assets/media/icons/duotune/arrows/arr064.svg')}}" alt="">
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                    Continue
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                                            <img src="{{asset('assets/media/icons/duotune/arrows/arr064.svg')}}" alt="">
                                        </span>
                                    <!--end::Svg Icon-->
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>
