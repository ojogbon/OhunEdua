<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Atunfato | Contact </title>
	<link rel="stylesheet" required="" type="text/css" href="css/style.css">
	<link rel="stylesheet" required="" type="text/css" href="css/mobile.css">
	<script required="" type='text/javascript' src='js/mobile.js'></script>
</head>
<body>
	<!--- <header></header>-->
	<?php include 'nav/head.php'; ?>
	<div id="body">
		<h2>Contact</h2>
		<form action="" method="post" class="contactForm">
			<h3>Inquiries</h3>
			<label for="name">
				<span>Name</span>
				<input required="" type="text" name="name"  id="name">
			</label>
			<label for="email">
				<span>Email</span>
				<input required="" type="text" name="email" id="email">
			</label>
			<label for="subject">
				<span>Subject</span>
				<input required="" type="text" name="subject" id="subject">
			</label>
			<label for="message">
				<span>Message</span>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</label>
			<input required="" type="submit" id="send" name="Submit" value="Send" class="contactUS">
		</form>
		<h1 class="suc"></h1>
	</div>
	<!--- <footer></footer>-->
	<?php include 'nav/foot.php'; ?>
	<script required="" type="text/javascript" src="views/js/brain_wild.js"></script>
</body>
</html>
