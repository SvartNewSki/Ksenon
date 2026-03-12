@extends('layouts.main')
@section('content')
     @foreach ($movie as $movie)
        <div>{{$movie->title}}</div>
    @endforeach
    film page
@endsection
   
