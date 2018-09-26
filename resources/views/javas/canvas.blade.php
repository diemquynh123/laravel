<!DOCTYPE html>
<html>
<head>
	<title>event</title>
	<meta charset="utf-8">
	<style type="text/css">
	canvas{
		background-image: url("{{asset('images/'.$images->img)}}");
	}
</style>
</head>
<body>

	<form method="post" action="{{route('post.canvas')}}">
		<img src="{{asset('images/3.png')}}" id="flow">
		<p id="demo"></p>
		<canvas id= "avt" width="1350px" height="800px"></canvas>
		<a href="{{route('deleteCanvas',$img_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Xóa</a>
		{{csrf_field()}}
	</form>
	<script>
		var url = "{{ route('post.canvas') }} ";
		var token = "{{ csrf_token() }}";
		var imgId = <?php echo $images->id ?>;
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{asset('js/canvas.js')}}"></script>
</body>
</html>
@if(isset($data))
<script>
var paint = false;
	var canvas = document.getElementById('avt');
	function draw(canvas,posx,posy) 
		{
			var paint = true;
			var context = canvas.getContext('2d');
			if(paint){
				var img = document.getElementById("flow");
				context.drawImage(img,posx,posy);
			}
		}
	 var data = <?php echo $data; ?>;
 	data.forEach(function (x) {
		 draw(canvas,x.posx, x.posy);
 	});

</script>
@endif