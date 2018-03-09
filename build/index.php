<?php

function push_to_browser($as, $uri) {
    header('Link: ' . $uri . '; rel=preload; as=' . $as, false);
}

$assets = array(
    '<//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i>' => 'style',
    '</css/normalize.css>' => 'style',
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

		<link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/style.css" media="all" />
    </head>

    <body>
		<header class="siteHeader">
			<div class="header__top">
				<div class="container">
					<div class="header__title">
						<h1>Jose Guerra</h1>
						<p>Front End Developer</p>
					</div>
					<div class="header__cta">
						<button>View Portfolio</button>
					</div>
				</div>
			</div>
			<div class="header_bottom">
			</div>
		</header>
        <main class="main container">
			<p>Main content goes here</p>
        </main>
        <footer class="siteFooter">
            <p>Copyright <?php echo date('Y'); ?></p>
        </footer>

		<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>');</script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>