@extends('admin.master')
@section('main')
<section class="content-header">
  <h1>
    danh sách bài viết
  </h1>
@if(Gate::allows('addproduct',Auth::user()))
  <a href="{{route('addproduct')}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  @else
  <a class="btn btn-primary" disabled> add</a>
  @endif
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>{{trans('message.serial')}}</th>
                <th>{{trans('message.Category')}}</th>
                <th>{{trans('message.Title')}}</th>
                <th>{{trans('message.Author')}}</th>
                <th>{{trans('message.Post-time')}}</th>
                <th>{{trans('message.Status')}}</th>
                <th>{{trans('message.task')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($items as $item )
              <tr>
                <td>{{$item->id}}</td>
                <td>
                  @if(Gate::allows('editproduct',Auth::user()))
                  <a href="{{route('editproduct',$item->id)}}">{{$item->Categories}}</a>
                  @else
                  <a disabled>{{$item->Categories}} </a>
                  @endif
                </td>
                <td> {{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->post_time}}</td>
                <td>
                  @if($item->status == 2)
                  đã đăng
                @else
                  chờ duyệt
                </td>
                @endif
                <td>
                  <a href="{{route('tagproduct',$item->id)}}" class="btn btn-info"><i class="fa fa-hashtag" aria-hidden="true"></i></a>
                  <a href="{{route('cmtproduct',$item->id)}}" class="btn btn-info"><i class="fa fa-commenting-o" aria-hidden="true"></i></a>
                  @if(Gate::allows('editproduct',Auth::user()))
                  <a href="{{route('editproduct',$item->id)}}" class="btn btn-info"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  @else
                  <a class="btn btn-info" disabled> sửa</a>
                  @endif
                  <a href="{{route('deleteprod',$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@stop()