<script>
		var selectedPic;
		var p1 = new Image();
		p1.setAttribute('crossOrigin', 'anonymous');
		p1.src = "./images/Emoji/1f4a4.png";
		var p2 = new Image();
		p2.setAttribute('crossOrigin', 'anonymous');
		p2.src = "./images/Emoji/1f4a9.png";
		var p3 = new Image();
		p3.setAttribute('crossOrigin', 'anonymous');
		p3.src = "./images/Emoji/1f4a2.png";
		var p4 = new Image();
		p4.setAttribute('crossOrigin', 'anonymous');
		p4.src = "./images/Emoji/1f4ae.png";
		var p5 = new Image();
		p5.setAttribute('crossOrigin', 'anonymous');
		p5.src = "./images/Emoji/1f6ab.png";
		var p6 = new Image();
		p6.setAttribute('crossOrigin', 'anonymous');
		p6.src = "./images/Emoji/1f48b.png";
		var p7 = new Image();
		p7.setAttribute('crossOrigin', 'anonymous');
		p7.src = "./images/Emoji/1f49e.png";
		var p8 = new Image();
		p8.setAttribute('crossOrigin', 'anonymous');
		p8.src = "./images/Emoji/1f49f.png";
		function selectPic(num)
		{
			console.log(num);
			var captureButton = document.getElementById('snap');
			var sPic = document.getElementById(num);
			selectedPic = num;
			var pic1 = document.getElementById('pic1');
			var pic2 = document.getElementById('pic2');
			var pic3 = document.getElementById('pic3');
			var pic4 = document.getElementById('pic4');
			var pic5 = document.getElementById('pic5');
			var pic6 = document.getElementById('pic6');
			var pic7 = document.getElementById('pic7');
			var pic8 = document.getElementById('pic8');
			captureButton.disabled=false;
			pic1.style.border='none';
			pic2.style.border='none';
			pic3.style.border='none';
			pic4.style.border='none';
			pic5.style.border='none';
			pic6.style.border='none';
			pic7.style.border='none';
			pic8.style.border='none';
			sPic.style.border='solid 1px rgba(30,144,255, 0.7)';
		}

		var video = document.querySelector("#vid");
		navigator.getUserMedia = navigator.getUserMedia ||
		navigator.webkitGetUserMedia || navigator.mozGetUserMedia || 
		navigator.msGetUserMedia || navigator.oGetUserMedia;
		var input = document.querySelector('input[type=file]'); // see Example 4
		input.onchange = function () 
		{
			var file = input.files[0];
			upload(file);
			drawOnCanvas(file);
			displayAsImage(file);
		};

		function upload(file)
		{
			var form = new FormData(),
			xhr = new XMLHttpRequest();
			form.append('image', file);
			xhr.open('post', 'server.php', true);
			xhr.send(form);
		}

		function drawOnCanvas(file)
		{
			var reader = new FileReader();

			reader.onload = function (e)
			{
				var dataURL = e.target.result,
				c = document.querySelector('canvas'),
				ctx = c.getContext('2d'),
				img = new Image();

				img.onload = function()
				{
					c.width = img.width;
					c.height = img.height;
					ctx.drawImage(img, 0, 0);
				};

				img.src = dataURL;
			};
			reader.readAsDataURL(file);
		}

		function displayAsImage(file)
		{
			var imgURL = URL.createObjectURL(file),
			img = document.createElement('img');

			img.onload = function()
			{
				URL.revokeObjectURL(imgURL);
			};

			img.src = imgURL;
			document.body.appendChild(img);
		}

		var canvas = document.querySelector('canvas');
		var context = canvas.getContext('2d');
		var w, h, ratio;

		video.addEventListener('loadedmetadata', 
			function()
			{
				ratio = video.videoWidth / video.videoHeight;
				w = video.videoWidth - 100;
				h = parseInt(w / ratio, 10);
				canvas.width = w;
				canvas.height = h;			
			}, false);

		function snap()
		{
			context.clearRect(0, 0, 400, 360);
			context.drawImage(video, 0, 0, w, h);
			console.log("sigh");
			console.log(selectedPic);
			if (selectedPic == 'pic1')
				drawP1();
			else if (selectedPic == 'pic2')
				drawP2();
			else if (selectedPic == 'pic3')
				drawP3();
			else if (selectedPic == 'pic4')
				drawP4();
			else if (selectedPic == 'pic5')
				drawP5();
			else if (selectedPic == 'pic6')
				drawP6();
			else if (selectedPic == 'pic7')
				drawP7();
			else if (selectedPic == 'pic8')
				drawP8();
		}

		if (navigator.getUserMedia)
		{       
			navigator.getUserMedia({video: true}, handleVideo,videoError);
		}

		function handleVideo(stream)
		{
			video.src = window.URL.createObjectURL(stream);
		}

		function videoError(e)
		{// do something
		}

		function drawP1()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p1, 0, 0, c.width, c.height);
		}

		function drawP2()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p2, 0, 0, c.width, c.height);
		}

		function drawP3()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p3, 0, 0, c.width, c.height);
		}

		function drawP4()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p4, 0, 0, c.width, c.height);
		}

		function drawP5()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p5, 0, 0, c.width, c.height);
		}

		function drawP6()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p6, 0, 0, c.width, c.height);
		}

		function drawP7()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p7, 0, 0, c.width, c.height);
		}

		function drawP8()
		{
			var c = document.getElementById("canv");
			var context = c.getContext('2d');
			context.drawImage(p8, 0, 0, c.width, c.height);
		}
	</script>