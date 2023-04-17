@extends('layouts.email')

@section('content')
    <table>
        <tr>
            <td>URL</td>
            <th>{{$url}}</th>
        </tr>
        <tr>
            <td>Username</td>
            <th>{{$username}}</th>
        </tr>
        <tr>
            <td>Password</td>
            <th>{{$password}}</td>
        </tr>
    </table>

@endsection
