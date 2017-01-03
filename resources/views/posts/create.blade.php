@extends('layouts.master')

@section('title', 'Post')

@section('navposts', 'active')

@section('content')
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1>Create New Post</h1>
					<hr>
					@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
							{{ $error }}
						@endforeach
					</div>
					@endif
					<form method="POST" action="{{ route('posts.store') }}">
						<div class="form-group">
							<label name="title">Title:</label>
							<input id="title" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label name="body">Post Body:</label>
							<textarea id="body" name="body" rows="10" class="form-control"></textarea>
						</div>
						<input type="submit" value="Create Post" class="btn btn-success btn-block" style="margin-top: -100px; margin-bottom: 30px;">
						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</form>
				</div>
			</div>﻿
		</div>
	</div>
@stop