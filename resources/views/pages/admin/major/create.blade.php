@extends('layouts.main')
@section('content')
        <div class="container">
            <form method="post" class="m-20" action="{{route('major.store')}}">
                @csrf
                <div class="mb-3 w-50">
                    <label for="major" class="form-label">Tên khoa</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="major" name="name" aria-describedby="major">
                    @error('name')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
@endsection
