@extends('layouts.main')
@section('content')
    <div class="card pt-4 mb-6 mb-xl-9">
        <!--begin::Card header-->
        <div class="card-header border-0">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Sửa lớp học</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0 pb-5">
            <form action="{{route('teachers.classes.update',$class)}}" method="post">
                @csrf
                <div class="col-12">
                    <label class="fs-5 form-label mb-2 required" for="name">
                        Tên lớp học
                    </label>
                    <div class="col-sm-11 row align-self-center ">
                        <input type="text" name="name" id="name"
                               class="form-control mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                               placeholder="VD: 61HT" required value="{{$class->name}}">
                        @error('name')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary text-center mt-5">Tạo</button>
                </div>
            </form>
        </div>
        <!--end::Card body-->
    </div>
@endsection
