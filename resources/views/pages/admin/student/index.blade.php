@extends('layouts.main')
@section('content')
    @include('pages.admin.alert')
    <div class="d-flex justify-content-end">
        <form method="get" action="" class="col-auto">
            <div class="input-group input-group-sm mb-3 ">
                <input class="form-control" name="keyword" type="search"
                       placeholder="Nhập tên sinh viên hoặc email" aria-label="Search"
                       value="{{request()->get('keyword')}}">
                <button class="btn btn-sm btn-success me-15" type="submit">Tìm kiếm</button>
            </div>
        </form>
        <a href="{{route('admin.student.create')}}" class="ms-5">
            <button class="btn btn-sm btn-primary">Thêm sinh viên</button>
        </a>
    </div>
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
        @foreach($students as $student)
            <tr>
                <td class="col-1">{{$loop->iteration+($students->currentPage()-1)*$students->perPage()}}</td>
                <td class="col-3">{{$student->name}}</td>
                <td class="col-2">{{$student->identifier}}</td>
                <td class="col-2">{{$student->email}}</td>
                <td class="col-2">@if(isset($student->major->name)){{$student->major->name}} @endif</td>
                <td class="col-2">
                    <a href="{{route('admin.student.edit',$student)}}">
                        <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    </a>
                    <a href="{{route('admin.student.destroy',$student)}}">
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $students->links() }}
@endsection
