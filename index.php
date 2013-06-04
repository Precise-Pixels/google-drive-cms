<?php
// $csv = file_get_contents("https://docs.google.com/spreadsheet/pub?key=0Ai1UvN4cvedHdGE4eWlfdXQ3OGRVR2R5a0lNM1FqSFE&output=csv");
// echo "CSV file_get_contents:<br>" . $csv;
// $contentArray = str_getcsv($csv);
// echo "<br>============<br>";
// var_dump($contentArray);

// $csv = fopen('https://docs.google.com/spreadsheet/pub?key=0Ai1UvN4cvedHdGE4eWlfdXQ3OGRVR2R5a0lNM1FqSFE&output=csv', 'r');
// var_dump($csv);
// $csv2 = fgetcsv($csv);
// var_dump($csv2);

$row = 1;
if (($handle = fopen('https://docs.google.com/spreadsheet/pub?key=0Ai1UvN4cvedHdGE4eWlfdXQ3OGRVR2R5a0lNM1FqSFE&output=csv', 'r')) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
    }
  }
  fclose($handle);
}