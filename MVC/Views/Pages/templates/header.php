<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php print self :: _title_ ?></title>
    <link href="<?php echo INCLUDE_PATHl ?>Style/main.css" rel="stylesheet">

</head>

<body>

<h2>Menu Items:</h2>

<br>

<?php foreach($this -> menuItems as $key => $value): ?>

    <h2><?php print $value ?></h2>

<?php endforeach ?>

<br>