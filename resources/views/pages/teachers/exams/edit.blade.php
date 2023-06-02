@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <h3>Sửa bài thi</h3>
            </div>
            <!--end::Card toolbar-->
        </div>
        <div class="card-body pt-0">
            <form class="form" action="{{route('teachers.exams.update',$exam)}}" method="post">
                @csrf<!--begin::Scroll-->
                <div class="row">
                    <!-- begin left side -->
                    <div class="col-md-6">
                        <div class="fv-row mb-4">
                            <label class="fs-5 fw-bold form-label mb-2"
                                   for="name">
                                <span class="required fw-semibold fs-6 mb-2">Tên đề thi</span>
                            </label>
                            <input placeholder="Nhập tên đề thi ví dụ : 61HT_KT" class=" form-control "
                               value="{{$exam->name}}"    type="text" name="name" id="name" required>
                            <div class="fv-plugins-message-container invalid-feedback">@error('name'){{$message}}@enderror</div>
                        </div>
                        <div class="fv-row mb-4">
                            <label class="fs-5 fw-bold form-label mb-2"
                                   for="date_start">
                                <span class="fw-semibold fs-6 mb-2">Ngày bắt đầu</span>
                            </label>
                            <input class=" form-control "
                                   type="date"
                                   name="date_start"
                                   id="date_start"   value="{{$exam->date_start}}" >
                            <div class="fv-plugins-message-container invalid-feedback">@error('date_start'){{$message}}@enderror</div>
                        </div>
                        <div class="fv-row mb-4">
                            <label class="fs-5 fw-bold form-label mb-2"
                                   for="number_question">
                                <span class="fw-semibold fs-6 mb-2">Số câu</span>
                            </label>
                            <input  placeholder="Nhập số câu mỗi đề" min="0" class=" form-control "
                                    value="{{$exam->number_question}}"     type="number" name="number_question" id="number_question">
                            <div class="fv-plugins-message-container invalid-feedback">@error('number_question'){{$message}}@enderror</div>
                        </div>
                        <div class="fv-row mb-4">
                            <div class="form-check mt-10">
                                <input @if($exam->random == 1 ) checked @endif value="{{$exam->random}}"  class="form-check-input" type="checkbox"  name="random" id="random">
                                <label class="fs-5 fw-bold form-label mb-2"
                                       for="random">
                                    <span class="fw-semibold fs-6 mb-2"><b>Trộn đề</b></span>
                                </label>
                                <div class="fv-plugins-message-container invalid-feedback">@error('random'){{$message}}@enderror</div>
                            </div>
                        </div>
                    </div>
                    <!-- end left side -->
                    <!-- begin right side -->
                    <div class="col-md-6">
                        <div class="fv-row mb-4">
                            <label class="fs-5 fw-bold form-label mb-2"
                                   for="minute_time">
                                <span class="required fw-semibold fs-6 mb-2">Thời gian làm bài (phút)</span>
                            </label>
                            <input   value="{{$exam->minute_time}}"  class=" form-control " min="0" type="number" name="minute_time"
                                   id="minute_time" placeholder="Nhập số phút làm bài" required>
                            <div class="fv-plugins-message-container invalid-feedback">@error('minute_time'){{$message}}@enderror</div>
                        </div>
                        <div class="fv-row mb-4">
                            <label class="fs-5 fw-bold form-label mb-2"
                                   for="date_end">
                                <span class="fw-semibold fs-6 mb-2">Ngày kết thúc</span>
                            </label>
                            <input   value="{{$exam->date_end}}"  class=" form-control "
                                   type="date"
                                   name="date_end"
                                   id="date_end">
                            <div class="fv-plugins-message-container invalid-feedback">@error('date_end'){{$message}}@enderror</div>
                        </div>
                        <div class="fv-row mb-4">
                            <label class="fs-5 fw-bold form-label mb-2"
                                   for="password">
                                <span class="fw-semibold fs-6 mb-2">Tạo mật khẩu cho đề thi</span>
                            </label>
                            <input   value="{{$exam->password}}"  placeholder="Nhập mật khẩu để bắt đầu thi" class=" form-control " type="text" name="password"
                                   id="password">
                            <div class="fv-plugins-message-container invalid-feedback">@error('password'){{$message}}@enderror</div>
                        </div>
                        <!--end::Actions-->
                        <div class="mb-4">
                            <label class="fs-5 fw-bold form-label mb-2"
                                   for="note">
                                <span class="fw-semibold fs-6 mb-2">Ghi chú</span>
                            </label>
                            <input   value="{{$exam->note}}"  class=" form-control "
                                   type="text"
                                   name="note"
                                   id="note">
                            <div class="fv-plugins-message-container invalid-feedback">@error('note'){{$message}}@enderror</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end pt-10">
                    <a href="{{route('teachers.exams.index')}}"><button type="button" class="btn btn-light me-3">Hoàn tác</button></a>
                    <button type="submit" class="btn btn-primary ms-5">
                        <span class="indicator-label">Sửa</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
