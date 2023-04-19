@extends('layouts.main')
@section('content')
    <div class="container">
        <form method="post" class="m-10" action="{{route('teachers.store')}}">
            @csrf
            <div class="mb-3 w-50">
                <label for="name" class="form-label">Tên giảng viên</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="name">
                @error('name')
                <div  class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3 w-50">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email">
                @error('email')
                <div  class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3 w-50">
                <label for="major" class="form-label">Khoa</label>
                <select class="form-select" name="major_id" id="major_id" aria-label="Default select example">
                    @foreach($majors as $major)
                        <option value="{{$major->id}}">{{$major->name}}</option>
                    @endforeach
                </select>
                @error('major')
                <div  class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
