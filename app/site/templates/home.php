<!-- the landing template that fetches all sites and snippets and renders it into the index.php -->

<?php

	snippet('header');
	snippet('slider');

	foreach($pages->visible() as $section) {
	  snippet($section->uid(), array('data' => $section));
	}

	snippet('footer');

?>
