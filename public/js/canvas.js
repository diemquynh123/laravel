		var paint = false;
		var canvas = document.getElementById('avt');
		
		canvas.addEventListener('mouseup',toggledraw);
		//lấy tọa độ khi di click chuột
		canvas.addEventListener('click',
			function(evt)
			{
				paint = true;
				var mousePos = getMousePos(canvas,evt);
				var posx = mousePos.x;
				var posy = mousePos.y;
				var coor = "X coords: " + posx + ", Y coords: " + posy +",imgId : "+ imgId;
				document.getElementById("demo").innerHTML = coor ;
				draw(canvas,posx,posy);
				$(document).ready(function(){
					$.ajax({
						type:'POST',
						url:url,
						data: {posx:posx,posy:posy,imgId:imgId, _token: token },
					});

				});
				 				
			});
		function toggledraw(){
			paint = false;
		}
		//getBoundingClientRect trả về kích thước và vị trí của điểm
		function getMousePos(canvas,evt) 
		{
			var rect = canvas.getBoundingClientRect();
			return{
				x:evt.clientX - rect.left,
				y:evt.clientY - rect.top,
			};
		}

		function draw(canvas,posx,posy) 
		{
			var context = canvas.getContext('2d');
			if(paint){
				var img = document.getElementById("flow");
				context.drawImage(img,posx,posy);
			}
		}