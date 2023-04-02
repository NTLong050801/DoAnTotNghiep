@extends('admin.home')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-success">
            {{Session::get('error')}}
        </div>
    @endif
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
