@extends('layouts.master')

@section('title', 'Post Archive')

@section('navposts', 'active')

@section('content')
<div class="flex-center position-ref">
    <div class="content">
        @foreach($posts as $post)
        <div class="title m-b-md">
            <a href="{{ action('PostController@show', [$post->id]) }}">{{ $post->title }}</a>
            <!--
            <a href="/posts/{{-- $post->id --}}">{{-- $post->title --}}</a>-->
        </div>
        <p>{{ $post->body }}</p>
        @endforeach
    </div>
</div>
@endsection