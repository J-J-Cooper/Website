<!DOCTYPE HTML>
<html lang="en-uk">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Cooper</title>
		<meta name="description" content="Josh Cooper's personal website.">
		<meta name="author" content="Josh Cooper">

		<meta property="og:title" content="Josh Cooper">
		<meta property="og:type" content="website">
		<meta property="og:url" content="Makadee.com">
		<meta property="og:description" content="Josh Cooper's personal website.">
		<meta property="og:image" content="image.png">

		<link rel="icon" href="/favicon.ico">
		<link rel="icon" href="/favicon.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

		<link rel="stylesheet" href="resources/css/base-page.css">

		<script src="resources/js/scripts.js"></script>
		<script src="https://kit.fontawesome.com/d3a4154980.js" crossorigin="anonymous"></script>
	</head>

	<body onload="navActive()">
		<?php
			include ('resources/navbar.php')
		?>
		
		<div id="main-content">
			<h2 class="main-content__heading">
				Contact me
			</h2>
			<p class="main-content__text">
				<form method="post" action="<?php echo htmlspecialchars($SERVER["PHP_SELF"]);?>">
					<label for="formname"> Your name:</label>
					<input type="text" id="formname" name="name" placeholder="Your name...">

					<label for="message"> Your message:</label>
					<textarea id="message" name="message" placeholder="Your message..."></textarea>

					<input type="submit" value="Submit">
				</form>
			</p>
		</div>
		<!-- PHP footer -->
	</body>
</html>