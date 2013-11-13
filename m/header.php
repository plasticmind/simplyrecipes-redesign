<?php
	// Set defaults
	if (!isset($page_title)) $page_title = "Simply Recipes, Redesign: Style Guide";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css">
	<?php echo (isset($header_meta)?$header_meta:''); ?>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script>
		$( document ).ready(function() {
			var body_size = $('#wrap').width();
			$("#wrap").prepend('<div id="width-logger">'+body_size+'px</div>');
			var resizeTimer;
			$(window).resize(function() {
			  clearTimeout(resizeTimer);
			  resizeTimer = setTimeout(function() {
			    var body_size = $('#wrap').width();
			    $('#width-logger').html(body_size+'px');
			  }, 25);
			});
		});
	</script>
</head>
<body class="patterns">
	<?php include(INCLUDE_ROOT . 'hud.php'); ?>
	<div id="wrap">