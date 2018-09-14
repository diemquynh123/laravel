@extends('admin.master')
@section('main')
	@foreach($products->tags as $tag)
		<h1>{{$tag->name}}</h1>
	@endforeach
@stop