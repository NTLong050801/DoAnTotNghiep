@extends('layouts.main')
@section('stylesheets')
    <style>
        td {
            width: 50%;
        }

        tr td:first-child {
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="bg-white mx-auto w-50">
        <table class="table border table-auto fs-2">
            <thead>
            <tr class="text-center fs-2x">
                <th colspan="2">Bài thi {{$examStudent->exam->name}}</th>
            </tr>
            </thead>
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
        <a href="{{route('students.results.index')}}">
            <button class="btn btn-primary">Tới trang quản lý
            </button>
        </a>
    </div>

@endsection
