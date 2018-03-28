<!DOCTYPE html>
<html>
 <head>
  <title> Javascript : 2048 puzzle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  ::selection{
  color:black;
  background-color:orange;
  }
  footer{
  background-color:black;
  height:10%
  }
  @media only screen and (max-width: 600px) {
  footer{
  background-color:black;
  height:auto;
  }
  }
  .center1{
  padding:15px;
  }
  .span{
	background-color:#000;
	color:white;
	border-radius:5px;
	padding:5px;
  }
  body {
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-45deg, #EE7752, #e8182b, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
}
@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
  </style>
 </head>
 <body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		  <div class="navbar-header">
			<a class="navbar-brand" href="#">Queen 2048</a>
		  </div>
		  <ul class="nav navbar-nav">
			<li><a style="cursor : pointer;" onclick="return load();">
				<span class="span">new game</span></a></li>
		  </ul>
		</div>
	  </nav>
<div class="container">
	<center>
	<div id="canvas"></div>	
	<h2>Score : <div style="display:inline;" id="score"></div></h2>
	<b>HOW TO PLAY:</b> Use your arrow keys to move the tiles.
	</center>
</div>
<footer>
<center class="center1">
© 2018 Queen 2048.All Rights are Reserved By Sandhya Rani Aalapati
</center>
</footer>	
	<script src="js/script.js"></script>
 </body>
</html>