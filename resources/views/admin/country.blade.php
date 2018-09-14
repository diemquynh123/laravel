 @extends('admin.master')
 @section('main')


 <div class="panel-body">
  <div class="bootstrap-table">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-primary">
          <th>{{trans('message.serial')}}</th>
          <th>{{trans('message.Country')}}</th>
          <th>{{trans('message.Content')}}</th>
          <th style="width:30%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($countries as $item) 
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>
          @foreach($item->posts as $post)
              {{$post->title}} 
              @if($post != $item->posts->last())
                ,
              @endif
          @endforeach
        </td>
          <td>
            <a href="{{route('edituser',$item->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> </a> 
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