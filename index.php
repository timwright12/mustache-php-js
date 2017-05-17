<?php

	require 'vendor/autoload.php';

	$mustache = new Mustache_Engine( array(
		'loader' => new Mustache_Loader_FilesystemLoader( 'templates' )
	) );
	
	$tpl = $mustache->loadTemplate( 'card' );

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mustache in PHP and JS</title>
		<link rel="stylesheet" href="assets/css/base.css" />
	</head>
	<body>
		<div class="container">
			<h1>Rendering a Mustache Template in PHP and JavaScript</h1>
	
			<?php
				echo $tpl->render(
					array( 
						'permalink' => 'https://en.wikipedia.org/wiki/Bill_Murray',
						'title' => 'PHP -- Bill Murray',
						'imageUrl' => 'http://www.fillmurray.com/300/150',
						'imageAlt' => 'Bill Murray placeholder image',
						'category' => 'Entertainment',
						'excerpt' => 'William James Murray (born September 21, 1950) is an American actor, comedian, and writer. He first gained exposure on Saturday Night Live, a role that earned him his first Emmy Award, and later starred in comedy films—including Meatballs (1979), Caddyshack (1980), Stripes (1981), Tootsie (1982), Ghostbusters (1984), Scrooged (1988), Ghostbusters II (1989), What About Bob? (1991), and Groundhog Day (1993). He also co-directed Quick Change (1990).'
					)
				);
			?>
	
			<div id="js__load-template"></div>
		
		</div><!--/.container-->
		
		<script id="js__template--greeting" type="text/mustache">
			<?php echo file_get_contents( dirname(__FILE__) . '/templates/card.mustache' ); ?>
		</script>
		
		<script src="bower_components/mustache.js/mustache.min.js"></script>
		<script src="assets/js/base.js"></script>
		
	</body>
</html>