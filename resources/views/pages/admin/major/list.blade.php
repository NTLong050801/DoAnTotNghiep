@extends('layouts.main')
@section('content')
    <div class="container ms-10">
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
      <div class="row">
          <a href="{{route('major.create')}}" class="col"> <button class="btn btn-sm btn-primary">Thêm mới khoa</button></a>

          <form action="" method="get" class="col-auto" >
              <div class="input-group input-group-sm mb-3 " >
                  <input type="text" name="search" placeholder="Nhập ...." class="form-control"
                         value="{{request()->get('search')}}">
                  <button class="btn btn-sm btn-success me-15" type="submit">Tìm kiếm</button>
              </div>
          </form>
      </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khoa</th>
                <th scope="col">Số tài khoản</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($majors as $key=>$major)
                <tr>
                    <th scope="row">{{(($majors->currentPage())-1)*10+$key+1}}</th>
                    <td>{{$major->name}}</td>
                    <td>{{$major->users_count}}</td>
                    <td>
                        <a href="{{route('major.edit',$major->id)}}">
                            <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        </a>
                        <a href="{{route('major.destroy',$major->id)}}">
                            <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            {{ $majors->links() }}
    </div>
@endsection
