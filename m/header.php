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
</head>
<body class="patterns">
	<?php include('/home/simplyr/public_html/redesign/m/hud.php'); ?>
	<div id="wrap">