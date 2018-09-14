 @extends('admin.master')
 @section('main')

        <div class="panel panel-default">
            <div class="panel-heading">Add Category</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">

                        <div class="form-group">
                            <label> name</label>                           
                            <input class="form-control" type="text" name="name" value="" required>
                        </div>          
                        <button type="submit" class="btn btn-primary" name="submit" style="background: #13a6ef;">add</button>
                        <button type="reset" class="btn btn-default">refresh</button>

                </div>
                {{csrf_field()}}
                </form>
            </div>
        </div>
    </div><!-- /.col-->

@stop()