<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>404</title>
</head>
<body>
	<div class="travolta">
		<h1>404</h1>
		<p>It seems you got lost...</p>
		<a href="/">Go back</a>
	</div>
	<style type="text/css">

		@import url(https://fonts.googleapis.com/css?family=Open+Sans:300|Titillium+Web:700);

		body{
			background:url(http://i.giphy.com/jcxtvm2bsZDH2.gif);
			background-repeat:no-repeat;
			background-position:bottom center;
			background-size:100vh cover;
			font-family: 'Titillium Web', sans-serif;
			color:#fff;
			background-color:#1BCF00;
		}

		.travolta{
			display: flex;
			flex-direction:column;
			justify-content: center;
			align-items:center;
			background-color:rgba(0,0,0,0.65);
			min-height:100vh;
			text-align:center;
		}
		h1{
			font-size:10em;
			font-weight:700;
		}

		p{
			font-family: 'Open Sans', sans-serif;
			font-weight:300;
			font-size:5vw;
			margin-bottom:30px;
		}

		a{
			border-radius:25px;
			background:none;
			color:#fff;
			font-size:18px;
			padding:10px 20px;
			border:2px solid #fff;
			text-decoration:none;
			&:hover{
				background:#fff;
				color:#212121;
			}
		}
	</style>
</body>
</html>