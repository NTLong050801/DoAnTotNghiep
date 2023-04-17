@extends('layouts.main')
@section('stylesheets')
    <link href="{{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet"
          type="text/css">
@endsection
@section('content')
    <div class="row g-5 g-xl-10">
        @include('pages.dashboard.components.profile-statistic')
        <div class="col-xl-8 mb-5 mb-xl-10">
            <div class="row g-5 g-xl-10">
                @include('pages.dashboard.components.profile')
                @include('pages.dashboard.components.order-status')
            </div>
            @include('pages.dashboard.components.total-candidate')
        </div>
    </div>
    <div class="row g-5 g-xl-10">
        @include('pages.dashboard.components.recent-order')
        @include('pages.dashboard.components.estimate-entry-time')
    </div>
    <div class="row g-5 g-xl-10">
        @include('pages.dashboard.components.recent-candidate')
        @include('pages.dashboard.components.active-profile')
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
