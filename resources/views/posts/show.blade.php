@extends('layouts.master')

@section('title', 'post')

@section('navposts', 'active')

@section('content')
<div class="flex-center position-ref full-height" style="margin-bottom: 200px;" >
    <div class="content">
        <div class="title m-b-md">
            {{ $post->title }}
        </div>

        <div class="links">
            <a href="#">Mark</a>|
            <a href="#">Nov 10, 2016</a>|
            <a href="#">Technology</a>
        </div>
        <div>
            <a href="#" class="btn">Start Reading</a>
        </div>
    </div>
</div>
<div id="content" class="flex-center position-ref full-height">
    <div class="content" style="width: 60%;">
        <p>
            {{ $post->body }}
        </p>
    </div>
</div>
@endsection