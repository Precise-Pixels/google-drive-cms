google-drive-cms
================

An experimental CMS using Google Drive Spreadsheets.

Set up the spreadsheet
----------------------

1. Go to https://drive.google.com/
2. Create > Spreadsheet
3. Create key-value pairs where the A column contains the key and the B column contains the value
4. File > Share... > Who has access - Change... > Anyone with the link > Can view

A | B
-----|-----
h1 | This is a header
paragraph | This is a <strong>strong</strong> paragraph
nav1 | About
nav2 | Work
nav3 | Contact
text1 | Hello world!

Access the CMS in PHP
---------------------

Replace `<KEY>` with the spreadsheet key from the URL:

```php
<?php
if(($handle = fopen('https://docs.google.com/spreadsheets/d/<KEY>/export?gid=0&format=csv', 'r')) !== false) {
    while(($data = fgetcsv($handle, 1000, ',')) !== false) {
        ${$data[0]} = $data[1];
    }
    fclose($handle);
}
?>
```

This converts the A column in the spreadsheet into values to be called like so:

```php
<h1><?= $h1; ?></h1>
<p><?= $paragraph; ?></p>

<ul>
    <li><a href="#"><?= $nav1; ?></a></li>
    <li><a href="#"><?= $nav2; ?></a></li>
    <li><a href="#"><?= $nav3; ?></a></li>
</ul>

<p><?= $text1; ?></p>
```