@extends('layouts.main')
@section('content')
    <div class="row gy-5 g-xl-10">
        @if(sizeof($examsStudents) > 0)
            @foreach($examsStudents as $examsStudent)
                <div class="col-md-3 col-xl-3 mb-5 mb-xl-10 ">
                    <div class="card card-flush h-md-100 mb-lg-10 "
                         style="background-image:url('{{asset('assets/media/svg/shapes/top-green.png')}}')">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2 fw-bold text-white ">{{$examsStudent->exam->name}}</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-white pt-1 fw-bold fs-6 ">Thời gian: {{$examsStudent->exam->minute_time}} phút</span>
                                @if($examsStudent->exam->date_start)
                                    <span
                                        class="text-white pt-1 fw-bold fs-6 ">Ngày: {{\Carbon\Carbon::parse($examsStudent->exam->date_start)->format('d/m/Y')}}</span>
                                @endif
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <div class="card-body d-flex flex-column justify-content-end ">
                            <div class="text-center">
                                @if($examsStudent->exam->status == '1')
                                    <button class="btn btn-sm btn-danger do-exam" exam_id="{{$examsStudent->exam_id}}">
                                        Thi
                                    </button>
                                @else
                                    <button class="btn btn-sm btn-danger disabled">
                                        Chưa mở
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="card card-flush h-md-100 mb-lg-10 ">
                <!--begin::Header-->
                <div class="card-header p-5 justify-content-center ">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column ">
                        <h3 class="text-primary">Bạn không có bài thi nào</h3>
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
            </div>
        @endif
    </div>
    <div class="modal fade" tabindex="-1" id="modal_password">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    @csrf
                    <div class="modal-body">
                        <div id="error_password"></div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Vui lòng nhập mật khẩu bài
                                thi</label>
                            <input type="text" id="password" class="form-control" placeholder="Nhập mật khẩu"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" id="submitPassword">
                             <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <input type="hidden" id="exam_id" value="">
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            var exam_id;
            $('.do-exam').click(function () {
                exam_id = $(this).attr('exam_id');
                Swal.fire({
                    text: "Bạn chắc chắn muốn thi bài kiểm tra này ?",
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
                        $.ajax({
                            url: "/students/exams/" + exam_id + "/start",
                            method: "get",
                            data: {
                                exam_id: exam_id,
                            },
                            success: function (res) {
                                if (res == 'success') {
                                    window.location.href = "/students/exams/" + exam_id + "/doExam";
                                }
                                if (res == 'password') {
                                    $('#modal_password').modal('show');
                                    $('#error_password').html('')
                                }
                            }
                        })

                    }
                });
            })
            $('#submitPassword').click(function () {
                password = $('#password').val()
                var csrfToken = $('input[name="_token"]').val();
                // Activate indicator
                $(this).attr("data-kt-indicator", "on");

                // Disable indicator after 3 seconds
                setTimeout(function () {
                   $('#submitPassword').attr("data-kt-indicator",'off');
                    $.ajax({
                        url: "/students/exams/checkPassword",
                        method: "POST",
                        data: {
                            password: password,
                            exam_id: exam_id,
                            _token: csrfToken,
                        },
                        success: function (res) {
                            console.log(res)
                            if (res == 'fail') {
                                html = '<div class="alert alert-danger">' + 'Mật khẩu không chính xác , vui lòng thử lại' + '</div>'
                                $('#error_password').html(html)
                                $('#password').val('')
                            } else {
                                window.location.href = "/students/exams/" + exam_id + "/doExam";
                            }
                        }
                    })
                }, 3000);

            })
        })
    </script>
@endsection

