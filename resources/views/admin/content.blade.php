 @extends('admin.master')
 @section('main')

 <div class="panel-body">
  <div class="bootstrap-table">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-primary">
          <th>{{trans('message.serial')}}</th>
          <th>{{trans('message.Content')}}</th>
          <th style="width:30%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($contents as $item) 
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->title}}</td>
          <td>
            <a href="{{route('tagpost',$item->id)}}" class="btn btn-info"><i class="fa fa-hashtag" aria-hidden="true"></i></a>
             <a href="{{route('cmtpost',$item->id)}}" class="btn btn-info"> <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
            <a href="{{route('edituser',$item->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> </a> 
            <a href="{{route('deleteuser',$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
        </tr> 
        @endforeach                 
      </tbody>
    </table>
  </div>
  <div class="clearfix"></div>
</div>

@stop()