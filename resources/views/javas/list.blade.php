<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List</title>
</head>
<body>
<table>
    <tr>
    @foreach($images as $img)
        <td>
        <a href="{{route('get.canvas',$img->id)}}"><img width="200px" src="{{asset('images/'.$img->img)}}" class="thumbnail"></a> 
        </td>
    @endforeach()
    </tr>
</table>
</body>
</html>