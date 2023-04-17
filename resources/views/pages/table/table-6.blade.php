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
                    <input type="text" data-kt-ecommerce-product-filter="search"
                           class="form-control form-control-solid w-250px ps-14" placeholder="Search Product">
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2"
                            data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status"
                            data-select2-id="select2-data-10-saw5" tabindex="-1" aria-hidden="true"
                            data-kt-initialized="1">
                        <option data-select2-id="select2-data-12-imua"></option>
                        <option value="all">All</option>
                        <option value="published">Published</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                          data-select2-id="select2-data-11-29go" style="width: 100%;">
                        <span class="selection">
                            <span class="select2-selection select2-selection--single form-select form-select-solid"
                                  role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                  aria-disabled="false" aria-labelledby="select2-fzfj-container"
                                  aria-controls="select2-fzfj-container">
                                <span class="select2-selection__rendered" id="select2-fzfj-container" role="textbox"
                                      aria-readonly="true" title="Status">
                                    <span class="select2-selection__placeholder">Status</span>
                                </span>
                                <span class="select2-selection__arrow" role="presentation">
                                    <b role="presentation"></b>
                                </span>
                            </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                    <!--end::Select2-->
                </div>
                <!--begin::Add product-->
                <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add
                    Product</a>
                <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           id="kt_ecommerce_products_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="	"
                                style="width: 29.8906px;">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                           value="1">
                                </div>
                            </th>
                            <th class="min-w-200px sorting" tabindex="0" aria-controls="kt_ecommerce_products_table"
                                rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending"
                                style="width: 275.875px;">Product
                            </th>
                            <th class="text-end min-w-100px sorting" tabindex="0"
                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                aria-label="SKU: activate to sort column ascending" style="width: 139.703px;">SKU
                            </th>
                            <th class="text-end min-w-70px sorting" tabindex="0"
                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                aria-label="Qty: activate to sort column ascending" style="width: 126.016px;">Qty
                            </th>
                            <th class="text-end min-w-100px sorting" tabindex="0"
                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                aria-label="Price: activate to sort column ascending" style="width: 139.703px;">Price
                            </th>
                            <th class="text-end min-w-100px sorting" tabindex="0"
                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                aria-label="Rating: activate to sort column ascending" style="width: 139.703px;">Rating
                            </th>
                            <th class="text-end min-w-100px sorting" tabindex="0"
                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                aria-label="Status: activate to sort column ascending" style="width: 139.703px;">Status
                            </th>
                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 136.156px;">Actions
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
                                <div class="d-flex align-items-center">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/1.gif')}});">
                                        </span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                           data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::SKU=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">04502008</span>
                            </td>
                            <!--end::SKU=-->
                            <!--begin::Qty=-->
                            <td class="text-end pe-0" data-order="7">
                                <span class="badge badge-light-warning">Low stock</span>
                                <span class="fw-bold text-warning ms-3">7</span>
                            </td>
                            <!--end::Qty=-->
                            <!--begin::Price=-->
                            <td class="text-end pe-0">180.00</td>
                            <!--end::Price=-->
                            <!--begin::Rating-->
                            <td class="text-end pe-0" data-order="rating-3">
                                <div class="rating justify-content-end">
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Rating-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Inactive">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Inactive</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
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
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                                <div class="d-flex align-items-center">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="symbol symbol-50px">
                                        <span class="symbol-label"
                                              style="background-image:url({{asset('assets/media//stock/ecommerce/2.gif')}});">
                                        </span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                           class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                           data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::SKU=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">02568004</span>
                            </td>
                            <!--end::SKU=-->
                            <!--begin::Qty=-->
                            <td class="text-end pe-0" data-order="14">
                                <span class="fw-bold ms-3">14</span>
                            </td>
                            <!--end::Qty=-->
                            <!--begin::Price=-->
                            <td class="text-end pe-0">223.00</td>
                            <!--end::Price=-->
                            <!--begin::Rating-->
                            <td class="text-end pe-0" data-order="rating-5">
                                <div class="rating justify-content-end">
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="rating-label checked">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen029.svg')}}"
                                                 alt="">
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Rating-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Scheduled">
                                <!--begin::Badges-->
                                <div class="badge badge-light-primary">Scheduled</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
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
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                           class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                        <div class="dataTables_length" id="kt_ecommerce_products_table_length">
                            <label>
                                <select
                                    name="kt_ecommerce_products_table_length"
                                    aria-controls="kt_ecommerce_products_table"
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
                             id="kt_ecommerce_products_table_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled"
                                    id="kt_ecommerce_products_table_previous">
                                    <a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="0" tabindex="0"
                                       class="page-link"><i
                                            class="previous">
                                        </i>
                                    </a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="1" tabindex="0"
                                       class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                                                          aria-controls="kt_ecommerce_products_table"
                                                                          data-dt-idx="2" tabindex="0"
                                                                          class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                                                          aria-controls="kt_ecommerce_products_table"
                                                                          data-dt-idx="3" tabindex="0"
                                                                          class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                                                          aria-controls="kt_ecommerce_products_table"
                                                                          data-dt-idx="4" tabindex="0"
                                                                          class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                                                          aria-controls="kt_ecommerce_products_table"
                                                                          data-dt-idx="5" tabindex="0"
                                                                          class="page-link">5</a></li>
                                <li class="paginate_button page-item next" id="kt_ecommerce_products_table_next">
                                    <a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="6" tabindex="0"
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
