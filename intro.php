<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hav.oc</title>

	<style>
		* {
			margin: 0px;
			padding:0px;

			
		}

		#introVid{
			display: inherit;
			margin-top: -70px;
			height: 100%;
		}

		body {
			background-color:black;

			overflow: hidden;
		}

		button {
			
			display:none;
		}

		#entryTextBox{
			background: black;
			font-family: monospace;
			display: none;
			color: #fff;

			outline: none;
			width: 330px;
			height:150px;
			
			font-family: monospace;
			color: white;
			font-size: 2em;
			line-height: 120px;

			position:absolute;

			margin:auto;

			top: -webkit-calc(50% - 95px);
			top: calc(50% - 95px);
			
			left: -webkit-calc(50% - 165px);
			left: calc(50% - 165px);

			background-color:black;

		}


		@keyframes blink {
		  to { visibility: hidden; }
		}
		@-webkit-keyframes blink {
		  to { visibility: hidden; }
		}

		#entryTextBox p{
			display: inline-block;
		}

		.blinker{
			width: 10px;
			height: 20px;
			background: #fff;
			display: inline-block;

			animation: blink 1s steps(5, start) infinite;
 			-webkit-animation: blink 1s steps(5, start) infinite;
		}

		.nonBlinker{
			width: 10px;
			height: 20px;
			background: #fff;
			display: inline-block;
		}

	</style>

	<script>
		var typing = false;

		window.onload = function () {
			var video = document.getElementById('introVid');

			video.onended = function (e) {
				var video = document.querySelector('#introVid');
				video.style.display = 'none';

				var input = document.querySelector('#entryTextBox');
				input.style.display = 'inline-block'
				typeText(input.querySelector('p'), 'Are you a cop? Y/N');
				input.focus();

				document.onkeyup = handle_keys;

			}
		}

		function handle_keys(e){

			if (e.which == 89) {
				//document.getElementById('entryTextBox').innerHTML = '';
				document.querySelector('.blinker').className = 'nonBlinker';
				typeText(document.querySelector('.blahtext'), 'Goodbye . . .', function(){
					window.setInterval(function () {
						location.href = 'http://www.google.com';
					}, 3000);
				});

				
			}
			else if (e.which == 78) {
				location.href = 'http://ryan.kelly.yoobee.net.nz/hav.oc/public/';
			}
		}

		function typeText (target, string, callback) {
			if(typing) return;
			
			typing = true;

			var currentLetter = 0,
				 strArr = string.split('');

			target.innerHTML = '';


			var intervalId = setInterval(function () {
				if(typeof target.value != 'undefined'){
					
					target.value += strArr[currentLetter];
				}else{
					target.innerHTML += strArr[currentLetter];
				}
				
				if (currentLetter == strArr.length-1) {
					window.clearInterval(intervalId);
					typing = false;
					document.querySelector('.nonBlinker').className = 'blinker';
					if(typeof callback != 'undefined') callback();
				}
				currentLetter++;
			}, 150);
		}


	</script>
</head>
<body>
	<video id='introVid' autoplay width='100%'>
		<source src='public/assets/img/havocv.mp4'> 
	</video>
	<div id='entryTextBox'>
		<p class="blahtext"></p>
		<div class="nonBlinker"></div>
	</div>
</body>
</html>