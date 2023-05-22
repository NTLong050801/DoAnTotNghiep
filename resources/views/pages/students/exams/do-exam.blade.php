@extends('layouts.main')
@section('stylesheets')
    <style>
        #fullscreen-div {
            background-color: #f5f8fa;
        }
    </style>
@endsection
@section('content')
    <div class="d-flex flex-column flex-xl-row" id="fullscreen-div">
        <div id="toggle-fullscreen" class="justify-content-center btn btn-danger"
             style="margin: auto;margin-top: 100px">
            <h1>Vào chế độ toàn màn hình</h1>
        </div>

        <form action="" id="form_do_exam" method="post" class="d-flex flex-column flex-xl-row col-12 d-none"
              enctype="multipart/form-data">
            @csrf
            <div class="d-flex col-9 flex-row-fluid me-xl-9 mb-10 mb-xl-0">
                <!--begin::Pos food-->
                <div class="card card-flush card-p-0 bg-transparent border-0 col-12">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Tab Content-->
                        @foreach($listQuestion as $question)
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade @if($loop->iteration == '1') show active @endif"
                                     id="kt_pos_food_content_{{$loop->iteration}}"
                                     role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <h3 class="card-title fw-bold text-gray-800 fs-1qx">
                                                    Câu {{$index=$loop->iteration}}
                                                    : {{$question->name}}</h3>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                @if($question->image)
                                                    <img src="{{asset($question->image)}}"
                                                         class="rounded-3 mb-4 w-350px h-250px w-xxl-200px h-xxl-250px"
                                                         alt="">
                                                @endif
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-start listAnswers">
                                                        @foreach(json_decode($question->options) as $key=>$option)
                                                            <div class="form-check mt-5 ">
                                                                <input class="form-check-input" type="radio"
                                                                       name="{{$question->id}}"
                                                                       id="{{$question->id.$key}}" value="{{$key}}"
                                                                       @if($key == $myAnswers[$index-1]) checked @endif
                                                                >
                                                                <label
                                                                    class="form-check-label fw-bold text-gray-800 cursor-pointer text-hover-primary"
                                                                    for="{{$question->id.$key}}">
                                                                    {{$option}}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                        <input type="radio"  @if(0 == $myAnswers[$index-1]) checked @endif  name="{{$question->id}}"
                                                               hidden="hidden" value="0">
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                            </div>

                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        @endforeach
                        <div class="mt-5">
                            <button type="button" class="btn btn-success btn-sm float-start" id="back-btn"><i
                                    class="fa-solid fa-arrow-left"></i></button>
                            <button type="button" class="btn btn-success btn-sm float-end" id="next-btn"><i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Pos food-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-row-auto col-3">
                <!--begin::Pos order-->
                <div class="card card-flush bg-body" id="kt_pos_form">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <!--begin::Summary-->
                        <div class="d-flex flex-stack bg-warning rounded-3 p-6 mb-11 justify-content-center">
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white">
                                <span class="d-block fs-3 lh-1" id="countdown"></span>
                                <input type="hidden" id="time_end" value="{{$totalSeconds}}">
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Summary-->
                        <ul class="nav nav-pills d-flex nav-pills-custom gap-3 mb-6" role="tablist">
                            @foreach($listQuestion as $question)
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0 col-2 indexQuestion" role="presentation">
                                    <!--begin::Nav link-->
                                    <a class="nav-link link-questions @if($myAnswers[$loop->index] != 0) bg-success text-white @endif nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary
                                flex-column flex-stack page-bg
                                show
                                @if($loop->iteration == '1') active start @endif
                                 @if($loop->iteration == sizeof($listQuestion)) end @endif"
                                       data-bs-toggle="tab" href="#kt_pos_food_content_{{$loop->iteration}}"
                                       aria-selected="false" role="tab" tabindex="-1">
                                        {{$loop->iteration}}
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                            @endforeach
                        </ul>
                        <!--begin::Payment Method-->
                        <div class="m-0">
                            <button type="submit" class="btn btn-primary fs-1 w-100 py-4" id="btn_submit">Nộp bài
                            </button>
                        </div>
                        <!--end::Payment Method-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Pos order-->
            </div>
            <!--end::Sidebar-->
            <input type="hidden" name="exam_id" id="exam_id" value="{{$examStudent->exam_id}}">
            <input type="hidden" name="tab" id="tab_warning" value="{{$examStudent->warning}}">

        </form>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            // Initialize variables
            var tabs = $('.link-questions[data-bs-toggle="tab"]');
            var activeTab = tabs.filter('.active');
            var activeTabIndex = tabs.index(activeTab);
            var numTabs = tabs.length;
            exam_id = $('#exam_id').val()
            var csrfToken = $('input[name="_token"]').val();
            var totalSeconds = $('#time_end').val()
            form = document.getElementById('form_do_exam');
            // set up the countdown timer
            var countdown = document.getElementById('countdown');
            var tab = parseInt($('#tab_warning').val());
            var status_warning = '1';
            var submit = 0;
            $('.link-questions').click(function () {
                activeTab = tabs.filter('.active');
                activeTabIndex = tabs.index(activeTab);
                updateButtons();
            })
            $('.form-check .form-check-input').click(function () {
                item = $(this).parent().parent()
                var index = $('.listAnswers').index(item);
                answer = $(this).val()
                $.ajax({
                    url: "/students/exams/" + exam_id + "/updateAnswers/" + index + "/" + answer,
                    method: "GET",
                    data: {
                        exam_id: exam_id,
                        index: index,
                        answer: answer
                    },
                    success: function (res) {
                        if (res == true) {
                            submitExam()
                            if (document.fullscreenElement) {
                                if (document.fullscreenElement) {
                                    document.exitFullscreen();
                                }
                                status_warning = 0;
                                Swal.fire({
                                    text: "Bài thi đã kết thúc !!",
                                    icon: "warning",
                                    buttonsStyling: false,
                                    confirmButtonText: "Đồng ý",
                                    timer: 3000,
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-danger",
                                    }
                                }).then(function (result) {
                                    submit = 1
                                    window.location.href = "/students/exams/" + exam_id + "/result";
                                })
                            }
                        }
                    }
                })
            });

            // Show/hide back/next buttons based on active tab
            function updateButtons() {
                if (activeTabIndex == 0) {
                    $('#back-btn').hide();
                } else {
                    $('#back-btn').show();
                }
                if (activeTabIndex == numTabs - 1) {
                    $('#next-btn').hide();
                } else {
                    $('#next-btn').show();
                }
            }

            updateButtons();
            // Add event listeners to back button
            $('#back-btn').click(function () {
                if (activeTabIndex > 0) {
                    // Go to previous tab
                    activeTabIndex--;
                    activeTab = tabs.eq(activeTabIndex);
                    activeTab.tab('show');
                    updateButtons();
                }
            });

            // Add event listeners to next button
            $('#next-btn').click(function () {
                if (activeTabIndex < numTabs - 1) {
                    // Go to next tab
                    activeTabIndex++;
                    activeTab = tabs.eq(activeTabIndex);
                    activeTab.tab('show');
                    updateButtons();
                }
            });

            // Hide back button on first tab and next button on last tab
            if (activeTabIndex == 0) {
                $('#back-btn').hide();
            }
            if (activeTabIndex == numTabs - 1) {
                $('#next-btn').hide();
            }
            $('input[type=radio]').change(function () {
                if (this.checked) {
                    activeTab = tabs.filter('.active');
                    activeTab.addClass('bg-success text-white')
                    // Add your code here to handle the radio button being checked
                } else {
                    console.log('Radio button unchecked!');
                    // Add your code here to handle the radio button being unchecked
                }
            });
            // get the total seconds from the PHP variable

            var interval = setInterval(function () {
                // calculate the remaining minutes and seconds
                var minutes = Math.floor(totalSeconds / 60);
                var seconds = totalSeconds % 60;

                // format the remaining time as MM:SS
                var formattedTime = ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);

                // update the countdown timer in the DOM
                countdown.innerHTML = formattedTime;

                // decrement the total seconds by one
                totalSeconds--;

                if (totalSeconds == 180) {
                    Swal.fire({
                        text: "Thời gian làm bài còn 3 phút !",
                        icon: "warning",
                        buttonsStyling: false,
                        confirmButtonText: "Ok!",
                        timer: 3000,
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
                // stop the timer when it reaches zero

                if (totalSeconds < 0) {
                    clearInterval(interval);
                    if (document.fullscreenElement) {
                        document.exitFullscreen();
                    }
                    submitExam()
                    countdown.innerHTML = 'Time\'s up!';
                    Swal.fire({
                        text: "Nộp bài thành công",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Đã hiểu",
                        customClass: {
                            confirmButton: "btn btn-success"
                        }
                    })
                }
            }, 1000);
            $('#btn_submit').click(function (e) {
                e.preventDefault();
                if (document.fullscreenElement) {
                    if (document.fullscreenElement) {
                        document.exitFullscreen();
                    }
                    status_warning = 0;
                    Swal.fire({
                        text: "Bạn chắc chắn muốn kết thúc bài thi ?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Đồng ý",
                        cancelButtonText: "Không, hủy",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            submitExam()
                            status_warning = 1;
                        }
                    })
                }

            })

            function submitExam() {
                formData = new FormData(form);
                $.ajax({
                    url: '/students/exams/checkResult',
                    type: 'post',
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        submit = 1
                        window.location.href = "/students/exams/" + exam_id + "/result";
                    }
                })
            }

            function updateWarning() {
                $.ajax({
                    url: "/students/exams/updateWarning",
                    method: "POST",
                    data: {
                        exam_id: exam_id,
                        tab: tab,
                        _token: csrfToken,
                    }
                })
            }

            const fullScreenElement = document.querySelector("#fullscreen-div");

            function fullscreenchanged(event) {
                if (document.fullscreenElement) {
                    $('#form_do_exam').removeClass('d-none')
                    $('#form_do_exam').addClass('d-block')
                    $('#toggle-fullscreen').addClass('d-none');
                } else {
                    $('#form_do_exam').removeClass('d-block')
                    $('#form_do_exam').addClass('d-none')
                    $('#toggle-fullscreen').removeClass('d-none')
                }
            }

            // window.addEventListener('blur', function () {
            //     // The user switched to another tab or minimized the window
            //     $('#form_do_exam').removeClass('d-block')
            //     $('#form_do_exam').addClass('d-none')
            //     $('#toggle-fullscreen').removeClass('d-none')
            //     if (document.fullscreenElement) {
            //         document.exitFullscreen();
            //     }
            //     status_warning = 0
            //     tab += 1;
            //     updateWarning()
            //     Swal.fire({
            //         text: "Vui lòng không chuyển trang !! Cảnh báo lần " + tab,
            //         icon: "warning",
            //         buttonsStyling: false,
            //         confirmButtonText: "Đã hiểu",
            //         customClass: {
            //             confirmButton: "btn btn-warning"
            //         }
            //     }).then(() => {
            //         $('#toggle-fullscreen').addClass('d-block');
            //         status_warning = 1
            //     });
            // });
            document.addEventListener("visibilitychange", function () {
                if (submit == 0) {
                    if (document.hidden) {
                        // The user switched to another tab or minimized the window
                        $('#form_do_exam').removeClass('d-block')
                        $('#form_do_exam').addClass('d-none')
                        $('#toggle-fullscreen').removeClass('d-none')
                        if (document.fullscreenElement) {
                            document.exitFullscreen();
                        }
                        status_warning = 0
                        tab += 1;
                        updateWarning()
                        Swal.fire({
                            text: "Vui lòng không chuyển trang !! Cảnh báo lần " + tab,
                            icon: "warning",
                            buttonsStyling: false,
                            confirmButtonText: "Đã hiểu",
                            customClass: {
                                confirmButton: "btn btn-warning"
                            }
                        }).then(() => {
                            $('#toggle-fullscreen').addClass('d-block');
                            status_warning = 1
                        });
                    } else {
                        console.log("Tab is visible");
                    }
                }

            });
            document.addEventListener("fullscreenchange", fullscreenchanged);
            document.getElementById("toggle-fullscreen").addEventListener("click", () => {
                fullScreenElement.requestFullscreen();
            });
            document.addEventListener("fullscreenchange", function () {
                if (!document.fullscreenElement && status_warning == 1 && submit == 0) {
                    tab += 1;
                    updateWarning()
                    Swal.fire({
                        text: "Vào chế độ toàn màn hình !! Cảnh báo lần " + tab,
                        icon: "warning",
                        buttonsStyling: false,
                        confirmButtonText: "Đã hiểu",
                        customClass: {
                            confirmButton: "btn btn-warning"
                        }
                    }).then(() => {
                        $('#toggle-fullscreen').addClass('d-block');
                        status_warning = 1
                    });
                }
            });
        });
    </script>
@endsection
