@extends('layouts.main')
@section('content')
    @include('pages.admin.alert')
    <div class="flex">
        <a href="{{route('teachers.create')}}" class="justify-content-start">
            <button class="btn btn-primary">Thêm giảng viên</button>
        </a>
        <a href="{{route('teacher.export')}}" class="justify-content-start">
            <button class="btn btn-primary">Export</button>
        </a>
        <form class="row m-3 justify-content-center" method="get" action="">
            <input class="form-control mr-sm-2 col-10 me-5" name="keyword" type="search" style="width: 50%"
                   placeholder="Nhập tên giảng viên hoặc email" aria-label="Search"
                   value="{{request()->get('keyword')}}">
            <button class="btn btn-outline-success my-2 my-sm-0 col-1 bg-success" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên giảng viên</th>
            <th scope="col">Email</th>
            <th scope="col">Khoa</th>
            <th scope="col">Cập nhật mới nhất</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $key=>$teacher)
            <tr>
                <td class="col-1">{{$key+1}}</td>
                <td class="col-3">{{$teacher->name}}</td>
                <td class="col-2">{{$teacher->email}}</td>
                <td class="col-2">{{$teacher->majors[0]->name}}</td>
                <td class="col-2">{{$teacher->updated_at}}</td>
                <td class="col-2">
                    <a href="{{route('teachers.edit',$teacher)}}">
                        <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    </a>
                    <a href="{{route('teachers.destroy',$teacher)}}">
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $teachers->links() }}
@endsection
