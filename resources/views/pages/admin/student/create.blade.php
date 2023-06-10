@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <h3>Thêm Sinh Viên</h3>
            </div>
            <!--end::Card toolbar-->
        </div>
        <div class="card-body">
            <div class="m-3">
                <form method="post" class="p-6" action="{{route('admin.student.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Tên sinh viên</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                                   id="name" placeholder="Tên sinh viên" value="{{old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="identifier">Mã sinh viên</label>
                            <input type="text" class="form-control @error('identifier') is-invalid @enderror "
                                   name="identifier"
                                   id="name" placeholder="Mã sinh viên" value="{{old('identifier')}}">
                            @error('identifier')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="domain">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror "
                                   value="{{old('email')}}" name="email" id="email"
                                   placeholder="Email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="major_id">Khoa</label>
                            <select class="form-select @error('major') is-invalid @enderror" name="major_id"
                                    data-control="select2" data-placeholder="Chọn khoa">
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
                    <div class="flex text-end">
                        <a href="{{route('admin.student.index')}}">
                            <button class="btn  btn-sm btn-secondary" type="button">Hủy</button>
                        </a>
                        <button class="btn btn-sm  btn-primary bg-primary" type="submit">Tạo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
