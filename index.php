<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="getList()">
	<div class="mainContainer">
		<header class="container-fluid jumbotron">
		  <h1 class="display-3">To-Do List</h1>
		  <p class="lead">List your things you want to do.</p>
		  <hr class="my-4">
		  <h5>by Elvin Mendoza</h5>
		</header>
		
		<div class="container">
			<label>To-Do:</label>
			<input class="form-control" type="text" id="user" placeholder="I wanna go shopping.">
			<button type="button" class="btn btn-primary buttonArea" onclick="addUser(); loadPage();">Submit</button>
		</div>

		<div class="container list-group">
			<hr>
			<label>List:</label>
			<ul id="userList"></ul>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>