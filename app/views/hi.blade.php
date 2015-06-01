<html>
	<head>
		<title>The Cotery's Library</title>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		{{-- Simple CSS styling, done in place due to small size of webpage--}}
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
				background-color: black;
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}
			a {
				color:#B0BEC5;
				text-decoration: none;
				display: inline-block;
				vertical-align: middle;
				-webkit-transform: translateZ(0);
				transform: translateZ(0);
				box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				-webkit-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-osx-font-smoothing: grayscale;
				-webkit-transition-duration: 0.3s;
				transition-duration: 0.3s;
		  		-webkit-transition-property: transform;
		  		transition-property: transform;
			}
			a:hover{
			 	 -webkit-transform: scale(0.9);
			 	 transform: scale(0.9);
			 	 font-weight: bold;
			}
		</style>

	</head>
<!-- 	Essential title page -->
	<body id="body">	
		<div class="container">
			<div class="content">
				<div class="title"><a href="books"
					onmouseover=document.getElementById('body').style.backgroundImage="url('https://s-media-cache-ak0.pinimg.com/originals/08/18/3d/08183d18323810d884e8428c0f040fbc.jpg')">Books!</a></div>
			</div>
		</div>
	</body>

</html>
