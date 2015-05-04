<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
input, label{
	display: block;
	padding: 5px;
}
label, input, textarea, option, select{
	width: 200px;
		margin: 5px;
}
	</style>
</head>
<body>

<div id="container">
<p>You came to this website</p>
<p><?= $counter ?> Times</p>
<form action="/main/reset" method="POST">
	<input type="submit" value="Reset">
</form>

<a href="/main/reset">Reset</a>
</div>

</body>
</html>