<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 1024px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -512px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}

		a.highlighted
		{
			color: red;
			text-decoration: underline;
			/*font-variant:small-caps;*/

		}
	</style>
</head>
<body>
	<div class="welcome">
		<h1>Sorry, but we want you to specify the model of the phone.</h1>
		<h1>Please, specify in url the id (0 to 5) of phone you want to watch</h1>
		<h1>{{ $url }}/<a class="highlighted">right here</a></h1>
	</div>
</body>
</html>
