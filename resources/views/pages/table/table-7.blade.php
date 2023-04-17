<div class="card mb-5 mb-xl-8">
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-ecommerce-category-filter="search"
                           class="form-control form-control-solid w-250px ps-14" placeholder="Search Category">
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Add customer-->
                <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="btn btn-primary">Add
                    Category</a>
                <!--end::Add customer-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_ecommerce_category_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           id="kt_ecommerce_category_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="	"
                                style="width: 29.8906px;">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           data-kt-check-target="#kt_ecommerce_category_table .form-check-input"
                                           value="1">
                                </div>
                            </th>
                            <th class="min-w-250px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table"
                                rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending"
                                style="width: 788.734px;">Category
                            </th>
                            <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table"
                                rowspan="1" colspan="1" aria-label="Category Type: activate to sort column ascending"
                                style="width: 209.703px;">Category Type
                            </th>
                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 137.422px;">
                                Actions
                            </th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-semibold text-gray-600">
                        <tr class="odd">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/68.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Computers</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Our computers and tablets include all the
                                            big brands.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Automated</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
										<img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="even">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/71.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Watches</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Our range of watches are perfect whether
                                            you’re looking to upgrade
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Automated</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
										<img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="odd">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/58.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Headphones</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Our big range of headphones makes it easy
                                            to upgrade your device at a great price.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-primary">Manual</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="even">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/52.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Footwear</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Whatever your activity needs are, we’ve got
                                            you covered.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Automated</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="odd">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/76.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Cameras</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">You’ll find exactly what you’re looking for
                                            with our huge range of cameras.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-primary">Manual</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="even">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/207.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Shirts</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Any occasion, any time, we have everything
                                            you'll ever need.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Automated</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="odd">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/50.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Household</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Spice up your home decor with our wide
                                            selection.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-primary">Manual</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="even">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/193.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Toys</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Get the perfect gift for the little ones.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Automated</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="odd">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/169.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Handbags</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Great fashion, great selections, great
                                            prices
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-primary">Manual</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <tr class="even">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/177.gif')}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                           data-kt-ecommerce-category-filter="category_name">Wines</a>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7 fw-bold">Great taste, great selections, great
                                            prices
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::Type=-->
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Automated</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Type=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <img src="{{asset('assets/media/icons/duotune/arrows/arr072.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="dataTables_length" id="kt_ecommerce_category_table_length">
                            <label>
                                <select name="kt_ecommerce_category_table_length"
                                        aria-controls="kt_ecommerce_category_table"
                                        class="form-select form-select-sm form-select-solid">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers"
                             id="kt_ecommerce_category_table_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled"
                                    id="kt_ecommerce_category_table_previous">
                                    <a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="0" tabindex="0"
                                       class="page-link">
                                        <i class="previous"></i>
                                    </a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="1" tabindex="0"
                                       class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="2" tabindex="0"
                                       class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item next" id="kt_ecommerce_category_table_next">
                                    <a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="3" tabindex="0"
                                       class="page-link">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
</div>
