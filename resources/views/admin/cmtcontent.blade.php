@extends('admin.master')
@section('main')
	@foreach($content->comments as $comment)
		<h1>{{$comment->comment}}</h1>
	@endforeach
@stop