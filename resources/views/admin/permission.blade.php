 @extends('admin.master')
 @section('main')

 <a href="{{route('addpermission')}}" class=" btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
 <div class="panel-body">
 	<div class="bootstrap-table">
 		<table class="table table-bordered">
 			<thead>
 				<tr class="bg-primary">
 					<th> {{trans('message.permission name')}}</th>
 					<th>{{trans('message.url')}}</th>
 					<th style="width:30%"></th>
 				</tr>
 			</thead>
 			<tbody>
 				@foreach($items as $item)				                 
 				<tr>
 					<td>{{$item->title}}</td>
 					<td>{{$item->url}}</td>
 					<td>
 						<a href="{{route('editpermission',$item->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> </a>
 						<a href="{{route('deletepermission',$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
 					</td>
 				</tr>	
 				@endforeach		              
 			</tbody>
 		</table>
 	</div>
 	<div class="clearfix"></div>
 </div>

 @stop()