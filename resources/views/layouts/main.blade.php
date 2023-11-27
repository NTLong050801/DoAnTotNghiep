<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('assets/media/logos/default-smalll.jpg')}}">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;500;700">
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    @yield('stylesheets')
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css">
    <style>
        .chat_icon {
            display: flex;
            position: fixed;
            cursor: pointer;
            z-index: 105;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            bottom: 100px;
            right: 10px;
            background-color: #0dcaf0;
            box-shadow: var(--bs-scrolltop-box-shadow);
            opacity: 1;
            transition: color 0.2s ease;
            border-radius: 0.475rem;
        }

        .numberChat {
            display: flex;
            position: fixed;
            cursor: pointer;
            z-index: 105;
            justify-content: center;
            align-items: center;
            width: 20px;
            height: 20px;
            bottom: 140px;
            right: 5px;
            background-color: #0dcaf0;
            box-shadow: var(--bs-scrolltop-box-shadow);
            opacity: 1;
            transition: color 0.2s ease;
            border-radius: 0.475rem;
        }
    </style>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body
    id="kt_app_body"
    data-kt-app-layout="dark-sidebar"
    data-kt-app-header-fixed="true"
    data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true"
    data-kt-app-toolbar-enabled="true"
    data-kt-app-toolbar-fixed="false"
    data-kt-app-toolbar-fixed-mobile="true"
    data-kt-app-footer-fixed="true"
    class="app-default"
>
<!--begin::Theme mode setup on page load-->
@yield('page_load')
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        @include('layouts.partials.main.header')
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            @if(auth()->user()->role==2)
                @include('pages.admin.sidebar')
            @endif
            @if(auth()->user()->role==1)
                @include('pages.teachers.sidebar')
            @endif
            @if(auth()->user()->role==0)
                @include('pages.students.sidebar')
            @endif
            {{--            @include('layouts.partials.main.sidebar')--}}
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        @yield('toolbar')
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-fluid">
                            @yield('content')
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                @include('layouts.partials.main.footer')
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
@if(auth()->user()->role != 0)

    <div id="" class="chat_icon ">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="bg-danger numberChat"></span>
        <a href="/chatify/{{auth()->id()}}">
    <span class="svg-icon">
        <img src="{{asset('assets/media/icons/duotune/communication/com012.svg')}}" alt="">
    </span>
        </a>
        <!--end::Svg Icon-->
    </div>
@endif
<!--begin::ScrollTop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <img src="{{asset('assets/media/icons/duotune/arrows/arr066.svg')}}" alt="">
    </span>
    <!--end::Svg Icon-->
</div>
<input type="hidden" id="user_id" value="{{auth()->id()}}">


<!--end::ScrollTop-->
<!--begin::Drawers-->
@include('layouts.partials.main.drawers')
<!--end::Drawers-->
<!--begin::Modals-->
@include('layouts.partials.main.modals')
<!--end::Modals-->
<!--begin::Javascript-->
<script>
    const hostUrl = "{{asset('assets')}}/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>
    // Add an event listener to each link
    user_id = $('#user_id').val()
    // const currentUrl = window.location.href;
    // $('.menu-block .menu-item .menu-link').removeClass('active');
    // $('.menu-block .menu-item .menu-link').each(function () {
    //     if ($(this).attr('href') == currentUrl) {
    //         $(this).addClass('active')
    //     }
    // })

    Pusher.logToConsole = true;

    var pusher = new Pusher('db1f42fb9112815e4728', {
        cluster: 'ap1'
    });
    var channel = pusher.subscribe('SendMessageEvent');
    channel.bind('App\\Events\\SendMessageEvent', function (data) {
        if(data.to_id == user_id){
            loadNumberMessage()
            toastr.info('Bạn có tin nhắn mới!', 'Thông báo',{timeOut: 3000})
        }
    });
    loadNumberMessage()
    function loadNumberMessage() {
        $.ajax({
            url: '/getNumberMessages/',
            method: 'get',
            success:function (res) {
                if(res == 0){
                    $('.numberChat').addClass('d-none')
                }else{
                    $('.numberChat').removeClass('d-none')
                }
                $('.numberChat').html(res)
            }
        });
    }
</script>
@yield('javascript')
<!--end::Vendors Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
