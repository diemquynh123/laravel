 @extends('admin.master')
 @section('main')

    <div class="col-lg-12">
        <h1 class="page-header">Edit Permission</h1>
    </div>

        <div class="panel panel-default">
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post" action="{{route('posteditpermission')}}">
                        <input type="hidden" name="id" value="{{$permission->id}}">

                        <div class="form-group">
                            <label> Permission Name</label>                           
                            <input class="form-control" type="text" name="name" value="{{$permission->title}}" required>
                        </div>			
                         <div class="form-group">
                            <label> Url</label>                           
                            <input class="form-control" type="text" name="urlname" value="{{$permission->url}}" required>
                        </div>  											
                        <button type="submit" class="btn btn-primary" name="submit" style="background: #13a6ef;">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>

                </div>
                 {{csrf_field()}}
                </form>
            </div>
        </div>
    </div><!-- /.col-->

@stop()