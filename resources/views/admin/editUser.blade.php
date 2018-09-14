 @extends('admin.master')
 @section('main')

    <div class="col-lg-12">
        <h1 class="page-header">Edit User</h1>
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
                    <form role="form" id="edit-user" method="post" action="{{route('postEdituser')}}">
                         <input type="hidden" name="id" value="{{$user->id}}">

                        <div class="form-group">
                            <label> name</label>                           
                            <input class="form-control" type="text" name="name" value="{{$user->name}}" required="">
                        </div> 
                         <div class="form-group">
                            <label>email</label>                           
                            <input class="form-control" type="text" name="email" value="{{$user->email}}" required="">
                        </div>
                        <div class="form-group" >
                            <label>role</label>
                            @foreach($role as $item)
                            <div class="checkbox">                           
                              <label>
                                @if($user->role->contains('id',$item->id))
                                <input type="checkbox" checked class="role" value="{{$item->id}}">
                                @else
                                <input type="checkbox" class="role" value="{{$item->id}}">
                                @endif
                                {{$item->title}}</label>
                            </div>
                            @endforeach()
                        </div>	
                        <input type="hidden" id="roleid" name="roleid">									
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
                $('#edit-user').click(function(){
                // Khai báo tham số
                    var checkbox = $('.role');
                    var array = [];
                     
                    // Lặp qua từng checkbox để lấy giá trị
                    for (var i = 0; i < checkbox.length; i++){
                        if (checkbox[i].checked === true){
                             array.push(checkbox[i].value );
                        }
                    }
                    $('#roleid').val(array.join(","))
                });
            });
        </script>

@stop()