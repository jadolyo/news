<!doctype html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-1.10.2.min.js"></script>
</head>
<body>

<?php Session::init(); ?>
	
<div id="header">
	<br />
	<a href="<?php echo URL; ?>index">Index</a>
	<a href="<?php echo URL; ?>help">Help</a>
	<?php if (Session::get('loggedIn') == true):?>
		<a href="<?php echo URL; ?>dashboard/logout">Logout</a>	
	<?php else: ?>
		<a href="<?php echo URL; ?>login">Login</a>
	<?php endif; ?>
</div>
	
<div id="content">