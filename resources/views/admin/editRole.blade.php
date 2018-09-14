 @extends('admin.master')
 @section('main')

    <div class="col-lg-12">
        <h1 class="page-header">Edit Role</h1>
    </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit Role</div>
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
                    <form role="form" id="edit-role" method="post" action="{{route('postEditrole')}}">
                         <input type="hidden" name="id" value="{{$role->id}}">
                        <div class="form-group">
                            <label> role name</label>                           
                            <input class="form-control" type="text" name="name" value="{{$role->title}}" required="">
                        </div> 	
                        <div class="form-group" >
                            <label>Permission</label>
                            @foreach($permission as $item)
                            <div class="checkbox">                           
                              <label>
                                @if($role->permission->contains('id',$item->id))
                                <input type="checkbox" checked class="permiss" value="{{$item->id}}">
                                @else
                                <input type="checkbox" class="permiss" value="{{$item->id}}">
                                @endif
                                {{$item->title}}</label>
                            </div>
                            @endforeach()
                        </div>	
                        <input type="hidden" id="permissid" name="permissid">									
                        <button type="submit" id="sbm" class="btn btn-primary" name="submit" style="background: #13a6ef;">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                </div>
                {{csrf_field()}}
                </form>
            </div>
        </div>
    </div><!-- /.col-->
     <script type="text/javascript">
            $(document).ready(function () {
                $('#edit-role').click(function(){
                // Khai báo tham số
                    var checkbox = $('.permiss');
                    var array = [];
                    // Lặp qua từng checkbox để lấy giá trị
                    for (var i = 0; i < checkbox.length; i++){
                        if (checkbox[i].checked === true){
                             array.push(checkbox[i].value );
                        }
                    }
                    $('#permissid').val(array.join(","))
                });
            });
        </script>

@stop()