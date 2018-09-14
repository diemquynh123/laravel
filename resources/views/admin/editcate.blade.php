 @extends('admin.master')
 @section('main')

        <div class="panel panel-default">
            <div class="panel-heading">Edit Category</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post" action="{{route('posteditcate')}}>
                        <input type="hidden" name="id" value="{{$cates->id}}">

                        <div class="form-group">
                            <label> name</label>                           
                            <input class="form-control" type="text" name="name" value="{{$cates->name}}" required>
                        </div>          
                        <button type="submit" class="btn btn-primary" name="submit" style="background: #13a6ef;">edits</button>
                        <button type="reset" class="btn btn-default">refresh</button>

                </div>
                {{csrf_field()}}
                </form>
            </div>
        </div>
    </div><!-- /.col-->

@stop()