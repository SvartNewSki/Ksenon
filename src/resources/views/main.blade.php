@extends('layouts.main')
@section('content')
<img src="{{ asset('/images/planet.png') }}">
            <div class="circle"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="project1">
                <a href="about">
                    {{-- <img src="{{ asset('/images/planet.png') }}"> --}}
                </a>
            </div>
            <div class="project2">
                <a href="about">
                    <img src="{{ asset('/images/gamepad.png') }}">
                </a>
            </div>
@endsection

