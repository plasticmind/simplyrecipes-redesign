	<div id="hud">
		<div class="hud-brand">
			<a href="/redesign/"></a>
		</div>
		<nav class="hud-nav">
			<!-- <div id="select-layout"></div> -->
			<div id="select-template">
				<h3>Choose a section...</h3>
				<ul>
					<li<?php if($page_basename=="style-guide") echo ' class="current"'; ?>><a href="styles">Style Guide</a></li>
					<li<?php if($page_basename=="grid-home") echo ' class="current"'; ?>><a href="grid-home">Template: Home</a></li>
					<li<?php if($page_basename=="grid-archive") echo ' class="current"'; ?>><a href="grid-archive">Template: Archive</a></li>
					<li<?php if($page_basename=="grid-recipe") echo ' class="current"'; ?>><a href="grid-recipe">Template: Recipe</a></li>
					<li<?php if($page_basename=="grid-page") echo ' class="current"'; ?>><a href="grid-page">Template: Page</a></li>
				</ul>
			</div>
			<?php if($page_basename=="grid-recipe") : ?>
			<div id="select-photo">
				<ul>
					<li class="toggle-photo-vertical">Vert</li>
					<li class="toggle-photo-horizontal inactive">Horiz</li>
				</ul>
			</div>
			<?php endif; ?>
			<div id="width-alert"></div>
		</nav>
	</div>