 @extends('admin.master')
 @section('main')
 <section class="content-header">
  <h1>
   sửa bài viết
 </h1>
 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Forms</a></li>
  <li class="active">Editors</li>
</ol>
</section>
<section class="content">
  <form method="post" action="{{route('posteditproduct')}}">
    <div class="row">
      <div class="col-md-12">
        <div>
          <div class="form-group" >
            <label>tiêu đề</label>
            <input required type="text" name="title" class="form-control" value="{{$prod->title}}">
          </div>
          <div class="form-group" >
            <label>Chuyên mục</label>
            <input required type="text" name="categories" class="form-control" value="{{$prod->Categories}}">
          </div>
          <div class="form-group" >
            <label>tên tác giả</label>
            <input required type="text" name="author" class="form-control" value="{{$prod->author}}">
          </div>
          <div class="form-group">
            <label>ngày viết</label>
            <input required type="dateTime" name="date" value="{{$prod->post_time}}">
          </div>
          <div class="form-group">
            <label>trạng thái</label> 
            <select required name = "status" class=" form-control">
              <option value="1">đã đăng</option>
              <option value="0"> chờ phê duyệt</option>
            </select>
          </div>

        </div>
          <div class="form-group">
         <label>Nội Dung bài viết</label>
          <script type="text/javascript" src="{{asset('style/bower_components/ckeditor/ckeditor.js')}}"></script>
          <script type="text/javascript" src="{{asset('style/bower_components/ckfinder/ckfinder.js')}}"></script>
           <textarea required name="content" class="ckeditor">{{$prod->content}}</textarea>
       </div>
        <!-- /.box -->

      </div>
      <input type="submit" name="sbm" class="btn btn-primary">
      <button type="button" class="btn btn-danger"> xóa </button>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  {{csrf_field()}}
  </form>
</section>
 <script src="{{asset('style/bower_components/ckfinder/ckfinder.js')}}"></script>
 <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript">
  function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#avatar').click(function(){
            $('#img').click();
        });
    });
</script>
@stop()