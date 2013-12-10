<?php
	// Set defaults
	if (!isset($page_title)) $page_title = "Simply Recipes, Redesign: Style Guide";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="sandbox.css">
	<link rel="stylesheet" href="style.css">
	<?php echo (isset($header_meta)?$header_meta:''); ?>
	<script src="js/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script>
		$( document ).ready(function() {

			/* WIDTH ALERT */
			var body_size = $('#wrap').width();
			if ($(".grid-new")[0]){
				layout_toggle = '<div id="layout-toggle"><span class="toggle-layout-new">New</span><span class="toggle-layout-old inactive">Old</span></div>'
			} else {
				layout_toggle = '';
			}
			// Do something here if an element with this class exists
			$("#wrap").prepend('<div id="layout-tools"><div id="photo-toggle"><span class="toggle-photo-vertical">Vert</span><span class="toggle-photo-horizontal inactive">Horiz</span></div> '+layout_toggle+'<div id="width-alert">'+body_size+'px</div> <div id="layout-fullscreen">Fullscreen</div></div>');

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
			$("#photo-toggle span").click(function() {
				if($(this).hasClass('inactive')){
					$(this).removeClass('inactive');
					$(this).siblings().addClass('inactive');
					if($(this).hasClass('toggle-photo-horizontal')){
						$("#wrap").addClass('photo-horizontal').removeClass('photo-vertical');
						$('.featured-image').html('<img src="i/photo-horizontal.jpg" alt="">');
					} else {
						$("#wrap").addClass('photo-vertical').removeClass('photo-horizontal');
						$('.featured-image').html('<img src="i/photo-vertical.jpg" alt="">');
					}
				}
			});

			/* Default to fullscreen for now... */
			if ($(".single")[0]){
			$("body").toggleClass('fullscreen');
			}

			function reportWidth(){
				if ($(".fullscreen")[0]){ 
					var body_size = $('body').width();
				} else {
					var body_size = $('#wrap').width();
				}
			    $('#width-alert').html(body_size+'px');
			}

			/* SITE FUNCTIONALITY */

			/* Collapsing sidebar nav */
			$(".widget-nav h4").click(function(){
				$(".widget-nav .widget-section").removeClass('active');
				$(this).parent().toggleClass('active');
			})

		});
	</script>
</head>
<body class="patterns">
	<?php include(INCLUDE_ROOT . 'hud.php'); ?>
	<div id="wrap">