<?php
if (($handle = fopen('https://docs.google.com/spreadsheet/pub?key=0Ai1UvN4cvedHdGE4eWlfdXQ3OGRVR2R5a0lNM1FqSFE&output=csv', 'r')) !== false) {
  while (($data = fgetcsv($handle, 1000, ",")) !== false) {
    var_dump($data);
    $row++;
    ${$data[0]} = $data[1];
  }
  fclose($handle);
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<meta name="description" content="An experimental CMS using Google Drive."/>
	<meta name="author" content="PrecisePixels"/>
	<title>google-drive-cms</title>
</head>
<body>
	<p>^ CSV to Array data ^</p>

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