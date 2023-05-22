@extends('layouts.main')
@section('content')
    @include('pages.admin.alert')
    <form class="row m-3" method="get" action="{{route('student.search')}}">
        @csrf
        <input class="form-control mr-sm-2 col-10 me-5" name="search" type="search" style="width: 50%"
               placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 col-1 bg-success" type="submit">Search</button>
    </form>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sinh viên</th>
            <th scope="col">Mã sinh viên</th>
            <th scope="col">Email</th>
            <th scope="col">Khoa</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $key=>$student)
            <tr>
                <td class="col-1">{{$key+1}}</td>
                <td class="col-3">{{$student->name}}</td>
                <td class="col-2">{{$student->identifier}}</td>
                <td class="col-2">{{$student->email}}</td>
                <td class="col-2">{{$student->majors[0]->name}}</td>
                <td class="col-2">
                    <a href="{{route('student.edit',$student->id)}}">
                        <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    </a>
                    <a href="{{route('student.destroy',$student->id)}}">
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $students->links() }}
@endsection
