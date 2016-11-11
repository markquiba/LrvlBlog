@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            All blog posts.
        </div>

        <div class="links">
            @if (empty($people))
                There are no people who has an interest to write a blog.
            @endif
            @unless (empty($people))
                There are some people who has a blog.
            @endunless
            @foreach ($people as $person)
                <a href="#">{{ $person }}</a>
            @endforeach
        </div>
    </div>
</div>
@stop