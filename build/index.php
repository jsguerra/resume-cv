<?php

function push_to_browser($as, $uri) {
    header('Link: ' . $uri . '; rel=preload; as=' . $as, false);
}

$assets = array(
    '</css/bootstrap-reboot.min.css>' => 'style',
    '/css/style.css' => 'style',
    '<//code.jquery.com/jquery-3.3.1.min.js>' => 'script',
    '</js/jquery-3.3.1.min.js>' => 'script'
);

array_walk( $assets, 'push_to_browser');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Jos&eacute; Guerra - London based Web Developer</title>
        <meta name="description" content="Hi I'm Jose, a web developer in London who specializes in front-end and WordPress development.">
        <meta name="author" content="Jose Guerra">

		<link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" href="css/style.css" media="all" />
    </head>

    <body>
		<header class="siteHeader">
			<div class="header__top">
				<div class="container flex-grid">
					<div class="header__title">
						<h1>Jos&eacute; Guerra</h1>
						<p>Front End Developer</p>
					</div>
					<div class="header__cta">
						<a class="button" href="#"><i class="icon-briefcase"></i> Portfolio</a>
					</div>
				</div>
			</div>
			<div class="header__bottom container">
				<img class="profileAvatar alignleft" src="images/avatar.jpg" alt="Jose Guerra" />
				<p>I am a self-driven individual who enjoys challenges and problem solving. I develope responsive websites, pixel perfect designs, SEO and ecommerce websites.</p>
			</div>
		</header>
        <main class="main container">
			<div class="flex-grid">
				<div class="main__sidebar col four">
					<h3>Current Item</h3>
					<div class="item">
						<p>My sidebar</p>
					</div>
					<h3>Second Item</h3>
					<div class="item">
						<p>Second sidebar item</p>
					</div>
				</div>
				<div class="main__content col eight">
					<h3>Current Item</h3>
					<div class="item">
						<div class="item__section">
							<p>My main content area</p>
						</div>
						<div class="item__section">
							<p>My main content area</p>
						</div>
						<div class="item__section">
							<p>My main content area</p>
						</div>
					</div>
				</div>
			</div>
        </main>
        <footer class="siteFooter">
            <p>&copy; Copyright <?php echo date('Y'); ?></p>
        </footer>

		<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>');</script>
        <script type="text/javascript" src="js/script.js" async></script>
    </body>
</html>