<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<meta name="description" content="An experimental CMS using Google Drive Spreadsheets."/>
	<meta name="author" content="Precise Pixels"/>
	<title>google-drive-cms</title>
</head>
<body>
	<?php
	if(($handle = fopen('https://docs.google.com/spreadsheets/d/10nKV3otoPrZA38AanPilGfSQGX2-FGRcG5qVdonby9k/export?gid=0&format=csv', 'r')) !== false) {
	    while(($data = fgetcsv($handle, 1000, ',')) !== false) {
	        echo $data[0] . ' - ' . $data[1] . '<br>';
	        ${$data[0]} = $data[1];
	    }
	    fclose($handle);
	}
	?>

	<p>^ CSV to key-value pairs ^</p>

	<hr>

	<h1><?= $h1; ?></h1>
	<p><?= $paragraph; ?></p>

	<ul>
		<li><a href="#"><?= $nav1; ?></a></li>
		<li><a href="#"><?= $nav2; ?></a></li>
		<li><a href="#"><?= $nav3; ?></a></li>
	</ul>

	<p><?= $text1; ?></p>
</body>
</html>