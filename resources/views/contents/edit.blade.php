@extends('layouts.master')

@section('title', 'Content')

@section('content')
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1>Edit</h1>
					<hr>
					@include('errors.formerrors')
					<form method="POST" action="{{ route('contents.update', $content->id) }}">
						{{ csrf_field() }}
                        {{ method_field('PATCH') }}
						<div class="form-group">
							<label name="meta_value">Title:</label>
							<input id="meta_value" name="meta_value" value="{{ isset($content->meta_value) ? $content->meta_value : old('meta_value') }}" class="form-control">
						</div>
						<!--
						<div class="form-group">
							<label name="body">Content Body:</label>
							<textarea id="body" name="body" rows="10" class="form-control">{{ isset($content->body) ? $content->body : old('body') }}</textarea>
						</div>
						-->
						<input type="submit" value="Save Content" class="btn btn-success btn-block" style="margin-top: -100px; margin-bottom: 30px;">
					</form>					
				</div>
			</div>﻿
		</div>
	</div>
@stop