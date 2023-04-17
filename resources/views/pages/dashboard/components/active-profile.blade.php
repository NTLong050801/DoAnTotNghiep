<!--begin::Col-->
<div class="col-xl-8">
    <!--begin::Chart widget 18-->
    <div class="card card-flush h-xl-100">
        <!--begin::Header-->
        <div class="card-header pt-7">
            <!--begin::Title-->
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">Số lượng hồ sơ Active</span>
            </h3>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                     class="btn btn-sm btn-light d-flex align-items-center px-4">
                    <!--begin::Display range-->
                    <div class="text-gray-600 fw-bold">Loading date range...</div>
                    <!--end::Display range-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                    <span class="svg-icon svg-icon-1 ms-2 me-0">
                        <img src="{{asset('assets/media/icons/duotune/general/gen014.svg')}}" alt="">
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Daterangepicker-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
            <!--begin::Chart-->
            <div id="kt_charts_widget_18_chart"
                 class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
            <!--end::Chart-->
        </div>
        <!--end: Card Body-->
    </div>
    <!--end::Chart widget 18-->
</div>
<!--end::Col-->
