@extends('layouts.main')
@section('content')
    <div class="row g-5 g-xl-10">
        {{--        thong ke de thi--}}
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::Lists Widget 19-->
            <div class="card card-flush h-xl-100">
                <!--begin::Heading-->
                <div
                    class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                    style="background-image:url('{{asset('assets/media/svg/shapes/top-green.png')}}')"
                    data-bs-theme="light">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                        <span class="fw-bold fs-2x mb-3">Thống kê đề thi</span>
                        <div class="fs-4 text-white">
                            <span class="opacity-75">Bạn có</span>
                            <span class="position-relative d-inline-block">
                        <a href="" class="link-white opacity-75-hover fw-bold d-block mb-1">4 đề thi</a>
                                <!--begin::Separator-->
                        <span
                            class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                <!--end::Separator-->
                    </span>
                            <span class="opacity-75">mới trong hôm nay</span>
                        </div>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    {{-------}}
                    <!--end::Toolbar-->
                </div>
                <!--end::Heading-->
                <!--begin::Body-->
                <div class="card-body mt-n20">
                    <!--begin::Stats-->
                    <div class="mt-n20 position-relative">
                        <!--begin::Row-->
                        <div class="row g-3 g-lg-6">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <img src="{{asset('assets/media/icons/duotune/medicine/med005.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Đã kết thúc</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <img src="{{asset('assets/media/icons/duotune/finance/fin001.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Đã kích hoạt</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <img src="{{asset('assets/media/icons/duotune/general/gen020.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Chưa kích hoạt</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <img src="{{asset('assets/media/icons/duotune/general/gen013.svg')}}" alt="">
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Xí nghiệp</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Lists Widget 19-->
        </div>
        <!--end::Col-->
        {{--end thong ke de thi--}}
        <div class="col-xl-8 mb-5 mb-xl-10">
            <div class="row g-5 g-xl-10">
{{--                left--}}
                <!--begin::Col-->
                <div class="col-xl-6 mb-xl-10">
                    <!--begin::Slider Widget 1-->
                    <div id="kt_sliders_widget_1_slider"
                         class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel"
                         data-bs-interval="5000">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Đề thi</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-7">đề thi của bạn trên hệ thống</span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Carousel Indicators-->
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="active ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
                                </ol>
                                <!--end::Carousel Indicators-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-6">
                            <!--begin::Carousel-->
                            <div class="carousel-inner mt-n5">
                                <!--begin::Item-->
                                <div class="carousel-item active show">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Chart-->
                                        <div class="w-80px flex-shrink-0 me-2">
                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_1" style="height: 100px"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->3 đã kết thúc</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">

                                        </span>
                                                        <!--end::Svg Icon-->1 đã kích hoạt</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">

                                        </span>
                                                        <!--end::Svg Icon-->50 chưa kích hoạt</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->72 Hồ sơ</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-2">Chi tiết</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Chart-->
                                        <div class="w-80px flex-shrink-0 me-2">
                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2" style="height: 100px"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->3 chưa trúng tuyển</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->1 đã trúng tuyển</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon--> 5 đã xuất cảnh</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->72 hồ sơ</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-2">Chi tiết</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Chart-->
                                        <div class="w-80px flex-shrink-0 me-2">
                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_3" style="height: 100px"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->3 chưa trúng tuyển</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->1 đã trúng tuyển</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon--> 5 đã xuất cảnh</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                          <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}" alt="">
                                        </span>
                                                        <!--end::Svg Icon-->72 hồ sơ</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-2">Chi tiết</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Carousel-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Slider Widget 1-->
                </div>
                <!--end::Col-->
{{--                right--}}
                <!--begin::Col-->
                <div class="col-xl-6 mb-5 mb-xl-10">
                    <!--begin::Slider Widget 2-->
                    <div id="kt_sliders_widget_2_slider"
                         class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel"
                         data-bs-interval="5500">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-7">24 events on all activities</span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Carousel Indicators-->
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1"></li>
                                </ol>
                                <!--end::Carousel Indicators-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-6">
                            <!--begin::Carousel-->
                            <div class="carousel-inner">
                                <!--begin::Item-->
                                <div class="carousel-item active show">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-9">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-70px symbol-circle me-5">
                            <span class="symbol-label bg-light-success">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                    <img src="{{asset('assets/media/icons/duotune/abstract/abs025.svg')}}" alt="">
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->5 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->60 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->137 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-2">Chi tiết</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-9">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-70px symbol-circle me-5">
                            <span class="symbol-label bg-light-danger">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
                                <span class="svg-icon svg-icon-3x svg-icon-danger">
                                    <img src="{{asset('assets/media/icons/duotune/abstract/abs026.svg')}}" alt="">
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->5 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->60 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->137 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-2">Chi tiết</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-9">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-70px symbol-circle me-5">
                            <span class="symbol-label bg-light-primary">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
                                <span class="svg-icon svg-icon-3x svg-icon-primary">
                                    <img src="{{asset('assets/media/icons/duotune/abstract/abs038.svg')}}" alt="">
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->5 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->60 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <img src="{{asset('assets/media/icons/duotune/general/gen057.svg')}}"
                                                 alt="">
                                        </span>
                                                        <!--end::Svg Icon-->137 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-2">Chi tiết</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Carousel-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Slider Widget 2-->
                </div>
                <!--end::Col-->

            </div>
            <!--begin::Engage widget 4-->
            <div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
                <!--begin::Body-->


                <div class="card-body d-flex ps-xl-15">
                    <!--begin::Wrapper-->
                    <div class="m-0">
                        <!--begin::Title-->
                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                <span class="me-2">Chúng ta đang có
                    <span class="position-relative d-inline-block text-danger">
                        <a href="#" class="text-danger opacity-75-hover">2300 </a>
                        <!--begin::Separator-->
                        <span
                            class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100">
                        </span>
                        <!--end::Separator-->
                    </span>
                </span>
                            câu hỏi.
                            <br>
                            <span class="fs-4">Truy cập ngay kho câu hỏi để xem thông tin</span>

                        </div>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <div class="mb-3">
                            <a href="#" class="btn btn-danger fw-semibold me-2">Xem cho tiết</a>
                        </div>
                        <!--begin::Action-->
                    </div>
                    <!--begin::Wrapper-->
                    <!--begin::Illustration-->
                    <img src="{{asset('assets/media/illustrations/sigma-1/17-dark.png')}}"
                         class="position-absolute me-3 bottom-0 end-0 h-200px" alt="">
                    <!--end::Illustration-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 4-->

        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
@endsection
