@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-toolbar">
                <h2>Sửa khoa</h2>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="post" action="{{route('major.update',$major->id)}}">
                @csrf
                <div class="mb-3 w-50">
                    <label for="major" class="form-label">Tên khoa</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="major" value="{{$major->name}}" name="name" aria-describedby="major">
                    @error('name')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end w-50">
                    <a href="{{route('major.index')}}">
                        <button type="button" class="btn btn-sm btn-secondary">Trở về</button>
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary ms-5">Sửa</button>
                </div>

            </form>
        </div>
    </div>
@endsection
