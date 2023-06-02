@extends('layouts.main')
@section('content')
    @include('pages.admin.alert')
    <div class="d-flex justify-content-end">


        <form method="get" action="" class="col-auto">
            <div class="input-group input-group-sm mb-3 ">
                <input class="form-control" name="keyword" type="search"
                       placeholder="Nhập tên giảng viên hoặc email" aria-label="Search"
                       value="{{request()->get('keyword')}}">
                <button class="btn btn-sm btn-success me-15" type="submit">Search</button>
            </div>
        </form>
        <div class="dropdown ms-5">
            <a class="btn btn-sm btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Xuất
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('teachers.export','xlsx')}}">Excel</a></li>
                <li><a class="dropdown-item" href="{{route('teachers.export','csv')}}">Csv</a></li>
                <li><a class="dropdown-item" href="{{route('teachers.export','pdf')}}">PDF</a></li>
            </ul>
        </div>
        <!-- Button trigger modal -->
        <div class="ms-5">
            <button type="button" class="btn btn-sm btn-info " data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                Nhập Excel
            </button>
        </div>
        <a href="{{route('teachers.create')}}" class="ms-5">
            <button class="btn btn-sm btn-primary">Thêm giảng viên</button>
        </a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('teachers.import')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập file giảng viên</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="file" class="form-label">Chọn file</label>
                            <input class="form-control" name="file" type="file" id="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-sm btn-primary">Nhập</button>
                    </div>
                </form>
            </div>
        </div>
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
                <td class="col-2">{{$teacher->majors[0]->name ?? ''}}</td>
                <td class="col-2">{{$teacher->updated_at}}</td>
                <td class="col-2">
                    <a href="{{route('teachers.edit',$teacher)}}">
                        <button class="btn btn-sm btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    </a>
                    <a href="{{route('teachers.destroy',$teacher)}}">
                        <button class="btn btn-sm btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $teachers->links() }}
@endsection
