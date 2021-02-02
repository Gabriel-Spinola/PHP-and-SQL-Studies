<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php print self :: _title_ ?></title>
    <link href="<?php echo INCLUDE_PATHl ?>Style/main.css" rel="stylesheet">

</head>

<body>

    <header>

        <div class="center">
        
            <div class="branch">Logo</div>

            <nav class="menu">
            
                <?php foreach($this -> menuItems as $key => $value): ?>

                    <a href="<?php echo INCLUDE_PATH . strtolower($value) ?>"><?php print $value ?></a>

                <?php endforeach ?>

            </nav><!--menu-->

            <div class="clear"></div>

        </div><!--center-->

    </header>