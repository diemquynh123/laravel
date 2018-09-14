 @extends('admin.master')
 @section('main')

@if(Gate::allows('adduser',Auth::user()))
  <a href="{{route('adduser')}}" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  @else
  <a class="btn btn-primary" disabled> add</a>
  @endif
 <div class="panel-body">
  <div class="bootstrap-table">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-primary">
          <th>{{trans('message.Name')}}</th>
          <th>{{trans('message.Email')}}</th>
          <th>{{trans('message.Country')}}</th>
          <th>{{trans('message.Role')}}</th>
          <th style="width:30%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $item) 
        <tr>
          <td><a href="{{route('phoneuser',$item->id)}}">{{$item->name}}</a></td>
          <td>{{$item->email}}</td>
          <td>{{$item->country->name}}</td>
          <td>
            @foreach($item->role as $role)
              {{$role->title}} 
              @if($role != $item->role->last())
                ,
              @endif
            @endforeach
          </td>
          <td>
            @if(Gate::allows('adduser',Auth::user()))
            <a href="{{route('edituser',$item->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> </a> @endif
            <a href="{{route('deleteuser',$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
          </td>
        </tr> 
        @endforeach                 
      </tbody>
    </table>
  </div>
  <div class="clearfix"></div>
</div>

@stop()