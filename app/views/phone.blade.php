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

		.info {
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
	<div class="info">{{ $content }}</div>
</body>
</html>
