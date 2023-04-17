@extends('admin.home')
@section('content')
    <div class="container m-3 py-12 ">
        <button class="btn btn-sm btn-info ms-5">Import Excel</button>
        <form method="post" class="p-6" action="{{route('student.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="name">Tên sinh viên</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                           id="name" placeholder="Tên sinh viên" value="{{old('name')}}" >
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="identifier">Mã sinh viên</label>
                    <input type="text" class="form-control @error('identifier') is-invalid @enderror " name="identifier"
                           id="name" placeholder="Mã sinh viên" value="{{old('identifier')}}" >
                    @error('identifier')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="domain">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror " value="{{old('email')}}" name="email" id="email"
                           placeholder="Email" >
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="major_id">Khoa</label>
                    <select class="form-select @error('major') is-invalid @enderror" name="major_id" aria-label="Default select example">
                        @foreach($majors as $major)
                            <option value="{{$major->id}}">{{$major->name}}</option>
                        @endforeach
                    </select>
                    @error('major')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <a href="{{route('student.index')}}"><button class="btn btn-secondary" type="button">Cancel</button></a>
            <button class="btn btn-primary bg-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection
