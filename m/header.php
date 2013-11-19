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
				layout_toggle = '<div id="layout-toggle"><span class="toggle-layout-old inactive">Old</span><span class="toggle-layout-new">New</span></div>'
			} else {
				layout_toggle = '';
			}
			// Do something here if an element with this class exists
			$("#wrap").prepend('<div id="layout-tools">'+layout_toggle+'<div id="width-alert">'+body_size+'px</div> <div id="layout-fullscreen">Fullscreen</div></div>');

			var resizeTimer;
			$(window).resize(function() {
			  clearTimeout(resizeTimer);
			  resizeTimer = setTimeout(function() {
			  	reportWidth();
			  }, 25);
			});
			reportWidth();

			/* HIDE NAV */
			$("#hud-visibility").click(function() {
			    $("body").toggleClass('hud-closed');
			    reportWidth();
			});
			$("#layout-fullscreen").click(function() {
			    $("body").toggleClass('fullscreen');
			    reportWidth();
			});
			$(document).on("mouseover", ".hud-closed #hud", function(e) {
			    $("body").removeClass('hud-closed');
			    reportWidth();
			});
			$(document).on("mouseover", ".hud-closed #hud", function(e) {
			    $("body").removeClass('hud-closed');
			    reportWidth();
			});
			/* LAYOUT CONTROLS */
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

			/* Default to Fullscreen */
			$("body").toggleClass('fullscreen');

			function reportWidth(){
				var body_size = $('#wrap').width();
			    $('#width-alert').html(body_size+'px');
			}
		});
	</script>
</head>
<body class="patterns">
	<?php include(INCLUDE_ROOT . 'hud.php'); ?>
	<div id="wrap">