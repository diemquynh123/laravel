@extends('admin.master')
@section('main')
	@foreach($contents->tags as $tag)
		<h1>{{$tag->name}}</h1>
	@endforeach
@stop