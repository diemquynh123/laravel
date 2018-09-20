 @extends('admin.master')
 @section('main')

        <div class="panel panel-default">
            <div class="panel-heading">Add Permission</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">

                        <div class="form-group">
                            <label> Permission Name</label>                           
                            <input class="form-control" type="text" name="name" value="" required>
                        </div>          
                         <div class="form-group">
                            <label> Url</label>                           
                            <input class="form-control" type="text" name="urlname" value="" required>
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