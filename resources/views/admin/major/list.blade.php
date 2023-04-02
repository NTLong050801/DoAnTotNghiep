@extends('admin.home')
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
                   <th scope="row">{{$key+1}}</th>
                   <td>{{$major->name}}</td>
                   <td></td>
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
    </div>
@endsection
