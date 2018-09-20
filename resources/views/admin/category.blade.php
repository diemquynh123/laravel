 @extends('admin.master')
 @section('main')

 <div class="panel-body">
  @if(Gate::allows('addcate',Auth::user()))
  <a href="{{route('addcate')}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  @else
  <a class="btn btn-primary" disabled> add</a>
  @endif
  <div class="bootstrap-table">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-primary">
          <th>stt</th>
          <th>name</th>
          <th style="width:30%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($items as $item) 
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>
            @if(Gate::allows('editcate',Auth::user()))
              <a href="{{route('editcate',$item->id)}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> 
            @else
              <a class="btn btn-info" disabled> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            @endif
            @if(Gate::allows('editcate',Auth::user()))
            <a href="{{route('deletecate',$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            @else
             <a class="btn btn-info" disabled> xóa</a>
            @endif
          </td>
        </tr> 
        @endforeach                 
      </tbody>
    </table>
  </div>
  <div class="clearfix"></div>
</div>

@stop()