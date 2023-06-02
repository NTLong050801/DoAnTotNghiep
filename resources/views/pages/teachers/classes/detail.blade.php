@extends('layouts.main')
@section('content')
    <div class="row g-7">
        <!--begin::Contact groups-->
        <div class="col-3 ">
            <!--begin::Contact group wrapper-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{$class->name}}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Contact groups-->
                    <div class="d-flex flex-column gap-5">
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <a href="#"
                               class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">Số sinh
                                viên</a>
                            <div class="badge badge-light-primary" id="countStudent">{{sizeof($students)}}</div>
                        </div>
                        <!--begin::Contact group-->
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <label>Ngày tạo</label>
                            <div class="badge ">{{date('H:i d-m-Y', strtotime($class->created_at))}}</div>
                        </div>
                    </div>
                    <!--end::Contact groups-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contact group wrapper-->
        </div>
        <!--end::Contact groups-->
        <!--begin::Search-->
        <div class="col-5 ">
            <!--begin::Contacts-->
            <div class="card card-flush" id="kt_contacts_list">
                <!--begin::Card header-->

                    <div class="card-header row">
                        <!--begin::Form-->
                        <form class="d-flex align-items-center position-relative m-0 col-7" autocomplete="off">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span
                                class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid ps-13" name="keyword" value=""
                                   placeholder="Search contacts">
                            <!--end::Input-->
                        </form>
                        <!--end::Form-->

                        <button class="btn btn-success btn-sm col-2  align-self-center" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fa-solid fa-user-plus"></i></button>


                        <button class="btn btn-primary btn-sm col-2 align-self-center ms-5 " data-bs-toggle="modal"
                                data-bs-target="#class_student_import_modal"><i class="fa-solid fa-file-import"></i>
                        </button>

                    </div>

                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::List-->
                    <div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header"
                         data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body"
                         data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px"
                         style="max-height: 545px;">
                        <!--begin::User-->
                        <div class="flex-stack" id="classes_students_data">

                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>
        <!--end::Search-->
        <!--begin::Content-->
        <div class="col-4 " id="detail_student">

        </div>
        <!--end::Content-->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" id="add_student_form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm sinh viên -
                                Lớp {{$class->name}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="error"></div>
                            <div class="mb-3">
                                <label for="name" class="form-label required">Họ tên</label>
                                <input type="text" name="name" required class="form-control" id="name"
                                       aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="identifier" class="form-label required">Mã sinh viên</label>
                                <input type="text" required name="identifier" class="form-control" id="identifier"
                                       aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label required">Email</label>
                                <input type="email" required name="email" class="form-control" id="email"
                                       aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label required">Khoa</label>
                                <select name="major" class="form-select" id="major" aria-describedby="name">
                                    @foreach($majors as $major)
                                        <option value="{{$major->id}}">{{$major->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="class_id" id="class_id" value="{{$class->id}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Đóng
                            </button>
                            <button type="submit" class="btn btn-primary" id="btn_add">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="class_student_import_modal" tabindex="-1"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('teachers.classes.students-import')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập file danh sách sinh viên</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="file" class="form-label">Chọn file</label>
                                <input class="form-control" name="file" type="file" id="file">
                            </div>
                            <input type="hidden" name="class_id" value="{{$class->id}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                            </button>
                            <button type="submit" class="btn btn-primary">Nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            function classes_students_data() {
                $.ajax({
                    url: "{{route('teachers.classes.classes-students',$class->id)}}",
                    method: "GET",
                    success: function (res) {
                        $('#classes_students_data').html(res)
                    }
                })
            }

            classes_students_data()
            $('#btn_add').click(function (e) {
                e.preventDefault();
                form = document.getElementById('add_student_form');
                formData = new FormData(form);
                $.ajax({
                    url: '{{route('teachers.classes.createStudent')}}',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Do something with the success value
                        Swal.fire({
                            text: "Thêm thành công !!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (result) {
                            if (result.isConfirmed) {
                                classes_students_data()
                                $('#exampleModal').modal('hide')
                            }
                        });
                    },
                    error: function (response) {
                        if (response.status == 422) {
                            var errors = response.responseJSON.errors;
                            // Loop through the error messages and display them
                            errorhtml = '<div class="alert alert-danger"><ul>'
                            $.each(errors, function (key, value) {
                                errorhtml += '<li>' + value[0] + '</li>';
                            });
                            errorhtml += '</ul> </div>'
                            $('#error').html(errorhtml)
                        }
                    }
                })
            })
            $('#close').click(function () {
                $('#error').html('')
            })
            $(document).on('click', '.delete', function () {
                id_student = $(this).attr('id_student')
                class_id = $('#class_id').val();
                row = $(this).parent().parent();
                Swal.fire({
                    text: "Bạn muốn xóa sinh viên này ?",
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
                            url: "/teachers/classes/deleteStudent/" + id_student + "/" + class_id,
                            method: "get",
                            data: {
                                id_student: id_student,
                                class_id: class_id,
                            },
                            success: function (res) {

                                classes_students_data()
                                countStudent = $('#countStudent').text();
                                $('#countStudent').html(countStudent - 1)
                            }
                        })

                    }
                });
            })
            $(document).on('click', '.detail_student', function (e) {
                e.preventDefault()
                id_student = $(this).attr('id_student')
                $.ajax({
                    url: "/teachers/classes/" + id_student + "/detail-student",
                    method: "get",
                    data: {
                        id_student: id_student
                    }, success: function (res) {
                        $('#detail_student').html(res)
                    }
                })
            })
        })
    </script>
@endsection
