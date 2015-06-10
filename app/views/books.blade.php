<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Books</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script type="text/javascript">

/*Dynamically display data / Javascript things*/ 
  	function authorClick(id) {/*gets books from database via ajax*/
  		  $.ajax({
			type: "GET",
			url: 'id',
			data:{id:id},
			success: function(data){ 
				var bookData = data.split('|');
				$(".books").empty();
				$(".info").empty().append('Pick a book!');
				for (var i = 0; i <	bookData.length - 1; i++) {
					var book = $('<li>');
					var tmp = bookData[i].split("+");
					book.attr("id", 'book-'+tmp[0]).append(tmp[1]).click(infoClick.bind(null, tmp[0]));
					$(".books").append(book);
				}
			}

		});
  	}

  	function infoClick(id){ /*gets book info from database via ajax*/
  		 $.ajax({
			type: "GET",
			url: 'info',
			data:{id:id},
			success: function(data){
				$(".info").empty().append($('<p>')).append(data);
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
		.books li { 
			border-bottom: 1px solid #999; 
			border-top: 1px solid #999; 
			border-spacing: 1px;
			border-width: 50%;
		}
		.authors li:hover{
			padding-left: 10px;
			background-color: #999;
			opacity: 0.6;
			color: black;
		}
		.books {
			position:absolute;
			text-align: left; 	
			line-height: 30px;
			color: #999;
			width:10%;
			height: 100%;
			top:40%;
			vertical-align: center;
			font-family: 'Lato';
			margin-left: 10px;
			list-style-type: none;
		}

		.books li:hover{
			padding-left: 10px;
			background-color: #999;
			opacity: 0.6;
			color: black;
		}

		.info{
			position: absolute;
			top:40%;
			left: 24%;
			vertical-align: middle;
			width:45%;
			height: 100%;
			text-align: center;
			vertical-align: center;
			font-size: 13px;
			color: #999;
			font-style: italic;
		}
		
		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
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
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Authors <span class="caret"></span></a>
         
         <ul class="dropdown-menu">
         <div class="authors"> 	
	        @foreach (Author::get() as $author) <!-- Reading pulled data from database to display authors -->
	        <li><div id="{{$author->id}}" onclick="authorClick({{$author->id}})" >{{$author->name}}</div></li>
	        @endforeach
	    </div>
        </ul>
        <li> <a href="add">Add!</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Divs for javascript to push things into -->
<div id="books" class="books"></div>
<div id="info" class="info">Choose an author to start!</div>

</body>
</html>
