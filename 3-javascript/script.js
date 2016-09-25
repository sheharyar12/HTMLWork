		var start = new Date().getTime();
			function makeShapeAppear(){
				var top = Math.random() * 400;
				var left = Math.random() * 500;
				var width = Math.random() * 300;
				
				
				document.getElementById("shape").style.top = top + "px";
				document.getElementById("shape").style.left = left + "px";
				document.getElementById("shape").style.width = width + "px";
				document.getElementById("shape").style.height = width + "px";
				document.getElementById("shape").style.display = "block";
				var start = new Date().getTime();
			}
			function appearAfterDelay(){
				setTimeout(makeShapeAppear, Math.random()*2000);
			
			}
			appearAfterDelay();
			
			setTimeout(makeShapeAppear, Math.random()*2000);
		
			document.getElementById("shape").onclick = function(){
				document.getElementById("shape").style.display = "none"
				var end = new Date().getTime();
				var timetaken = (end - start)/1000;
				document.getElementById("timeTaken").innerHTML = timetaken + "s";
				
				appearAfterDelay();
			
			}

			