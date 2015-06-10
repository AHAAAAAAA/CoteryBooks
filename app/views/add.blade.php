	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Update</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		function formFill(id){
			$.ajax({
				type: "GET",
				url: 'authorname',
				data:{id:id},
				success: function(data){ 	
					$("#author").empty();
					document.getElementById("author").value=data;

				}
			});
		}
		function updateDB(authorid,booktitle,bookinfo){
			$("#author").css("border-color","grey");
			$("#booktitle").css("border-color","grey");
			$("#bookinfo").css("border-color","grey");
			$.ajax({
				type: "GET",
				url: 'updateDB',
				data:{authorid:authorid,booktitle:booktitle,bookinfo:bookinfo},
				success: function(data){
				$(".info").css("color","#999"); 	
					if (data=="true"){
						$(".info").empty().append($('<p>').append("Success!"));
						$(".info").css("color","green");
					document.getElementById("author").value="";
					document.getElementById("booktitle").value="";
					document.getElementById("bookinfo").value="";
				}
					else{
						var Errors= data.split('<br');
						for (var i = 0; i <	Errors.length - 1; i++) {
						var ErrorType=Errors[i].split(' ');
						if (ErrorType[1]=="author"){
							$("#author").css("border-color","red");
							document.getElementById("author").value="";
						}
						else if (ErrorType[1]=="title")
						{
							$("#booktitle").css("border-color","red");
							document.getElementById("booktitle").value="";
						}
						else if (ErrorType[1]=="text"){
							$("#bookinfo").css("border-color","red");
							document.getElementById("bookinfo").value="";
						}
						}
						$(".info").empty().append($('<p>').append(data));

					}
				}
			});
		}
		</script>
		
		{{-- Simple CSS styling, done in place due to small size of webpage--}}
		<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		.authors{
			margin-left: 10px;
			font-family: 'Lato';
			color: #999;
		}
		.authors li:hover{
			padding-left: 10px;
			background-color: #999;
			opacity: 0.6;
			color: black;
		}

		#forms{
			position: absolute;
			width: 100%;
			height: 100%;
			vertical-align: center;
			left:40%;
			top:45%;}
		#authforms{
			position: absolute;
			width: 100%;
			height: 100%;
			vertical-align: center;
			left:40%;
			top:40%;
		}
		#GO{
			position: absolute;
			left:180%;
			margin-top:5px;
		}
		#bookinfo{
			margin-top: 4px;
		}
		
		.info{
			color: #999;
			font-style: italic;
			position: absolute;
			left:41%;
			top:60%;
			text-align: left;
			width: 250px;
			word-wrap:normal;
		}
		.authors{
			margin-left: 10px;
			font-family: 'Lato';
			color: #999;
		}

		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">The Cotery's Library</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li><a href="books">Authors</a></li>
						<li><a href="add">Add books</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="authforms">
			<div class="col-lg-2">
				<div class="input-group">
					<div class="input-group-btn">
						<button id="authbut" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Authors <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<div class="authors">
							@foreach (Author::get() as $author) <!-- Reading pulled data from database to display authors -->
							<li><div id="{{$author->id}}" onclick= formFill({{$author->id}})>{{$author->name}}</div></li>
							@endforeach</div><!-- /btn-group --></div>
						</ul>
						<input id="author" type="text" class="form-control" placeholder="Author ID">
					</div>
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 --><br>
		</div>
		<div id="forms" class="forms">
			<div class="col-lg-2">
				
					<input id="booktitle" type="text" class="form-control" placeholder="Book name">
					<input id="bookinfo" type="paragraph" class="form-control" placeholder="Book synoposis">
					<span class="input-group-btn">
						<button id="GO" class="btn btn-default" type="button" onclick= 'updateDB($("#author").val(), $("#booktitle").val(), $("#bookinfo").val())'>Add!</button>
					</span>
				</div>
			</div>

			<div id="info" class="info"></div>


		</body>
		</html>
