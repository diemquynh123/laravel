@extends('admin.master')
@section('main')
	@foreach($product->comments as $comment)
		<h1>{{$comment->comment}}</h1>
	@endforeach
@stop