<?php include( 'bootstrap.php'); ?>
<?php include( INCLUDE_ROOT . 'header.php'); ?>

<header class="local-header">
	<h1>Site Layout: Home</h1>
	<h2>A live demo of our semi-responsive page layout.</h2>
</header>

<section class="grid home">
	<header class="site-header">
		<div class="site-brand">Brand</div>
		<div class="site-search">Search</div>
		<nav class="site-nav">
			<ul>
				<li>Item1</li>
				<li>Item2</li>
				<li>Item3</li>
				<li>Item4</li>
				<li>Item5</li>
			</ul>
		</nav>
	</header>
	<div class="page-content">
		<div class="recent-entries">
			<article class="entry-featured recipe">
				<div class="featured-image">Featured Image</div>
				<header class="entry-header">
					<h3 class="entry-title">Entry Title</h3>
					<p class="entry-byline">Entry Byline</p>
				</header>
				<div class="entry-intro"></div>
			</article>
			<ul class="entry-list-full">
				<li class="recipe">
					<div class="featured-image">Featured Image</div>
					<header class="entry-header">
						<h3 class="entry-title">Entry Title</h3>
						<p class="entry-byline">Entry Byline</p>
					</header>
					<div class="entry-intro"></div>
				</li>
				<li class="recipe">
					<div class="featured-image">Featured Image</div>
					<header class="entry-header">
						<h3 class="entry-title">Entry Title</h3>
						<p class="entry-byline">Entry Byline</p>
					</header>
					<div class="entry-intro"></div>
				</li>
				<li class="recipe">
					<div class="featured-image">Featured Image</div>
					<header class="entry-header">
						<h3 class="entry-title">Entry Title</h3>
						<p class="entry-byline">Entry Byline</p>
					</header>
					<div class="entry-intro"></div>
				</li>
				<li class="recipe">
					<div class="featured-image">Featured Image</div>
					<header class="entry-header">
						<h3 class="entry-title">Entry Title</h3>
						<p class="entry-byline">Entry Byline</p>
					</header>
					<div class="entry-intro"></div>
				</li>
				<li class="recipe">
					<div class="featured-image">Featured Image</div>
					<header class="entry-header">
						<h3 class="entry-title">Entry Title</h3>
						<p class="entry-byline">Entry Byline</p>
					</header>
					<div class="entry-intro"></div>
				</li>
			</ul>
			<ul class="entry-list-terse">
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
				<li>Entry Title</li>
			</ul>
		</div>
		<aside class="sidebar left-sidebar">
			<div class="widget"></div>
			<div class="widget"></div>
			<div class="widget"></div>
			<div class="widget"></div>
		</aside>
		<aside class="sidebar right-sidebar">
			<div class="widget"></div>
			<div class="widget"></div>
			<div class="widget"></div>
			<div class="widget"></div>
		</aside>
	</div>

	<footer class="site-footer">Footer</footer>
</section>

<?php include( INCLUDE_ROOT . 'footer.php'); ?>