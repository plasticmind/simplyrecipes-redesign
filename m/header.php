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
			/* WIDTH ALERT */
			var body_size = $('#wrap').width();
			if ($(".grid-new")[0]){
   				// Do something here if an element with this class exists
				$("#wrap").prepend('<div id="layout-tools"><div id="layout-toggle">Layout: <span class="toggle-layout-old inactive">Old</span><span class="toggle-layout-new">New</span></div><div id="width-alert">'+body_size+'px</div></div>');
			}
			var resizeTimer;
			$(window).resize(function() {
			  clearTimeout(resizeTimer);
			  resizeTimer = setTimeout(function() {
			    var body_size = $('#wrap').width();
			    $('#width-alert').html(body_size+'px');
			  }, 25);
			});
			/* HIDE NAV */
			$("#hud-visibility").click(function() {
			    $("body").toggleClass('hud-closed').delay(1000);
			});
			$(document).on("mouseover", ".hud-closed #hud", function(e) {
			    $("body").removeClass('hud-closed');
			});
			/* LAYOUT CONTROLS */
			$(document).on("mouseover", ".hud-closed #hud", function(e) {
			    $("body").removeClass('hud-closed');
			});

			$("#layout-toggle span").click(function() {
				if($(this).hasClass('inactive')){
					$(this).removeClass('inactive');
					$(this).siblings().addClass('inactive');
					if($(this).hasClass('toggle-layout-old')){
						$("#wrap").addClass('layout-old').removeClass('layout-new');
					} else {
						$("#wrap").addClass('layout-new').removeClass('layout-old');
					}
				}
			    
			});
		});
	</script>
</head>
<body class="patterns">
	<?php include(INCLUDE_ROOT . 'hud.php'); ?>
	<div id="wrap">