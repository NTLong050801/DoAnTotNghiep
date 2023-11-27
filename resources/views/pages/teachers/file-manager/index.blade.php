@extends('layouts.main')
@section('content')

    @foreach ($items as $item)
        <div class="row">
            @if ($item['type'] === 'directory')

                <i class="fa-solid fa-folder"></i><strong>{{ $item['name'] }}</strong>

            @else
                <i class="fa-solid fa-file"></i>{{ $item['name'] }}
            @endif
        </div>
    @endforeach

@endsection
