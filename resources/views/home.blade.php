@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   bạn đã vào rồi!
                </div>
                @if(Gate::allows('admin',Auth::user()))
                 <a href="{{route('admin')}}" class="btn btn-primary">admin</a>
                 @else
                 <a class="btn btn-primary" disabled> admin</a>
                 @endif
            </div>
        </div>
    </div>
</div>
@endsection
