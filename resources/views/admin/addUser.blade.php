 @extends('admin.master')
 @section('main')

 <div class="panel panel-default">
    <div class="panel-heading">Add User</div>
    <div class="panel-body">
        <div class="col-md-12">
            <form role="form" method="post" id ="add-user" action="{{route('postadduser')}}">

                <div class="form-group">
                    <label> Name</label>                           
                    <input class="form-control" type="text" name="name" value="" required="">
                </div>
                <div class="form-group">
                    <label> Email</label>                           
                    <input class="form-control" type="email" name="email" value="" required="">
                </div>
                <div class="form-group">
                    <label>Pass word</label>                           
                    <input class="form-control" type="text" name="pass" value="" required="">
                </div>
                <div class="form-group">
                    <label>Level</label>                           
                    <input class="form-control" type="text" name="level" value="" required="">
                </div>
                <div class="form-group" >
                    <label>Roles</label>
                    @foreach($role as $items)
                    <div class="checkbox">
                      <label><input type="checkbox" class="role" value="{{$items->id}}">{{$items->title}}</label>
                  </div>
                  @endforeach()
              </div>
              <input type="hidden" id="roleid" name="roleid">                                                
              <button type="submit" class="btn btn-primary" name="submit" style="background: #13a6ef;">add</button>
              <button type="reset" class="btn btn-default">refresh</button>              
              {{csrf_field()}}
          </form>
      </div>
  </div>
</div><!-- /.col-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#add-user').click(function(){
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