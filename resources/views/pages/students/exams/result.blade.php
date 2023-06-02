@extends('layouts.main')
@section('stylesheets')
    {{--    <style>--}}
    {{--        td {--}}
    {{--            width: 50%;--}}
    {{--        }--}}

    {{--        tr td:first-child {--}}
    {{--            text-align: center;--}}
    {{--        }--}}
    {{--    </style>--}}
@endsection
@section('content')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-toolbar">
                <h2>Kết quả bài thi: {{$examStudent->exam->name}}</h2>
            </div>
        </div>
        <div class="card-body">
            <table class="table fs-2">
                <tbody>
                <tr>
                    <td>Thời gian làm bài :</td>
                    <td>{{$examStudent->exam->minute_time}} phút</td>
                </tr>
                <tr>
                    <td>Ngày thi:</td>
                    <td>{{\Carbon\Carbon::parse($examStudent->time_started)->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td>Thời gian bắt đầu làm bài:</td>
                    <td>{{ \Carbon\Carbon::parse($examStudent->time_started)->format('H:i:s')}}</td>
                </tr>
                <tr>
                    <td>Cảnh báo :</td>
                    <td>{{$examStudent->warning}}</td>
                </tr>
                <tr>
                    <td>Đúng :</td>
                    <td class="text-danger">{{(integer)$examStudent->result.'/'.count(json_decode($examStudent->questions))}}</td>
                </tr>
                <tr>
                    <td>Điểm :</td>
                    <td class="text-danger">{{(float)$examStudent->result*10/count(json_decode($examStudent->questions))}}</td>
                </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end m-5 p-5">
                @if($examStudent->exam->is_see_answers)
                    <a href="{{route('students.results.answers',$examStudent->exam->id)}}">
                        <button class="btn btn-sm btn-success">Xem đáp án
                        </button>
                    </a>
                @endif
                <a href="{{route('students.results.index')}}" class="ms-5">
                    <button class="btn btn-sm btn-primary">Tới trang quản lý
                    </button>
                </a>
            </div>
        </div>

    </div>

@endsection
