<?php
	// Set defaults
	if (!isset($page_title)) $page_title = "Simply Recipes, Redesign: Style Guide";
	if (!isset($page_basename)) $page_basename = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="hud.css">
	<link rel="stylesheet" href="style.css">
	<?php echo (isset($header_meta)?$header_meta:''); ?>
	<script src="js/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script>
		$( document ).ready(function() {

			/* = HUD TOOLS */

			/* Try out various photo sizes */
			$("#select-photo li").click(function() {
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

			/* Width alert */
			function reportWidth(){
				var body_size = $(window).width()+15;
			    $('#width-alert').html(body_size+'px');
			}
			var resizeTimer;
			$(window).resize(function() {
			  clearTimeout(resizeTimer);
			  resizeTimer = setTimeout(function() {
			  	reportWidth();
			  }, 25);
			});
			reportWidth();

			/* = SITE FUNCTIONALITY */

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