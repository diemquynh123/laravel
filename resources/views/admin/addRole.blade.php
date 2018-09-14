 @extends('admin.master')
 @section('main')

 <div class="panel panel-default">
    <div class="panel-heading">Add Role</div>
    <div class="panel-body">
        <div class="col-md-12">
            <form role="form" method="post" id ="add-role" action="{{route('postaddrole')}}">

                <div class="form-group">
                    <label> role Name</label>                           
                    <input class="form-control" type="text" name="name" value="" required="">
                </div>
                 <div class="form-group" >
                            <label>Permission</label>
                            @foreach($permissions as $items)
                            <div class="checkbox">
                              <label><input type="checkbox" class="permiss" value="{{$items->id}}">{{$items->title}}</label>
                            </div>
                            @endforeach()
                        </div>
                          <input type="hidden" id="permissid" name="permissid">                                                
                <button type="submit" class="btn btn-primary" name="submit" style="background: #13a6ef;">add</button>
                <button type="reset" class="btn btn-default">refresh</button>              
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div><!-- /.col-->
<script type="text/javascript">
            $(document).ready(function () {
                $('#add-role').click(function(){
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