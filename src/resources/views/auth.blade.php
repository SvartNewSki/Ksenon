@extends('layouts.main')
@section('content')
@foreach ($post as $movie)
        <div>{{$movie->title}}</div>
    @endforeach    
Auth page
@endsection