@extends('layouts.main')
@section('stylesheets')
    <style>
        .form-check .bg-success {
            background-color: #50cd89 !important;
        }

        .form-check .border-success {
            border-color: #50cd89 !important;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6" style="display: inline-block" >
            <div class="card-toolbar" style="display: inline">
                <h2 class="d-flex">
                    <span class="col-3">Họ tên: {{$examStudents->user->name}}</span>
                    <span class="col-3"> MSV: {{$examStudents->user->identifier}}</span>
                    <span class="col-3 text-danger"> Đúng: {{$examStudents->result.'/'.count(json_decode($examStudents->questions))}}</span>
                    <span class="col-3 text-danger">Điểm: {{$examStudents->result*10/count(json_decode($examStudents->questions))}}</span>
                </h2>
            </div>
        </div>
        <!--end::Card header-->
        <div class="card-body">
            <!--begin::Table-->
            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table table-row-dashed fs-6 gy-5 dataTable no-footer"
                           id="kt_questions_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>STT</th>
                            <th>Câu hỏi</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold ">
                        @foreach($listQuestion as $question)
                            <tr class="odd">
                                <!--begin::Name=-->
                                <td>
                                    {{$index=$loop->iteration}}
                                </td>
                                <td>
                                    <a href="#"
                                       class="text-gray-800 text-hover-primary mb-1">{{$question->name}}</a>
                                    <div class="text-center mt-5">
                                        <a target="_blank" href="{{asset('storage/'.$question->image)}}"><img
                                                src="{{asset('storage/'.$question->image)}}" style="width: 100px"
                                                alt=""></a>
                                    </div>
                                    @foreach(json_decode($question->options) as $key=>$option)
                                        <div class="form-check d-flex align-items-center mt-5 ">
                                            <input class="form-check-input col-1" type="checkbox"
                                                   name="{{$question->id}}"
                                                   id="{{$question->id.$key}}" value="{{$key}}"
                                                   @if($myAnswers[$index-1] == $key) checked @endif>
                                            <label
                                                class="ms-5 p-3 col-11 border rounded-pill
                                                @if($myAnswers[$index-1] == $key)bg-danger border-danger @endif
                                                @if($question->ans == $key) bg-success  border-success  @endif
                                                "
                                                for="{{$question->id.$key}}"
                                            >
                                                {{$option}}
                                            </label>
                                        </div>
                                    @endforeach
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
            </div>
            <!--end::Table-->
        </div>
    </div>
@endsection
