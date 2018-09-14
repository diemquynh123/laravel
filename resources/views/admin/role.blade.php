 @extends('admin.master')
 @section('main')

 <a href="{{route('addrole')}}" class=" btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
 <div class="panel-body">
 	<div class="bootstrap-table">
 		<table class="table table-bordered">
 			<thead>
 				<tr class="bg-primary">
 					<th> {{trans('message.role name')}}</th>
 					<th> {{trans('message.permission name')}}</th>
 					<th style="width:30%"></th>
 				</tr>
 			</thead>
 			<tbody>
 				@foreach($roles as $item)				                 
 				<tr>
 					<td>{{$item->title}}</td>
 					<td>
 					@foreach($item->permission as $permiss)
			          {{$permiss->title}} 
			          @if($permiss != $item->permission->last())
			          ,
			          @endif
			        @endforeach
			        </td>
 					<td>
 						<a href="{{route('editrole',$item->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> </a>
 						<a href="{{route('deleterole',$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
 					</td>
 				</tr>	
 				@endforeach		              
 			</tbody>
 		</table>
 	</div>
 	<div class="clearfix"></div>
 </div>

 @stop()