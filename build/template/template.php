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

        <title><?php siteName(); ?> - London Based Web Developer</title>
        <meta name="description" content="Hi I'm Jose, a web developer in London who specializes in front-end and WordPress development.">
        <meta name="author" content="Jose Guerra">

		<link rel="stylesheet" href="http://localhost/resume-cv/build/css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" href="http://localhost/resume-cv/build/css/style.css" media="all" />
    </head>
	
    <body class="home">
		
		<?php pageContent(); ?>
		
        <footer class="siteFooter">
            <small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?>.<br><?php siteVersion(); ?></small>
        </footer>

		<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>');</script>
        <script type="text/javascript" src="js/script.js" async></script>
    </body>
</html>