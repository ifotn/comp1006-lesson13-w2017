@extends('layouts.app')

@section('content')
<h1>Albums</h1>

    <table class="table table-striped table-hover">
        <tr>
            <td>Title</td>
            <td>Year</td>
            <td>Artist</td>
        </tr>

        @foreach($albums as $album)
            <tr>
                <td>{{$album->title}}</td>
                <td>{{$album->year}}</td>
                <td>{{$album->artist}}</td>
            </tr>
        @endforeach

    </table>

@endsection
