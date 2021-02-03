<?php

/**
 * Output buffering is a way to tell PHP to hold some data before it is sent to the browser.
 *  Then you can retrieve the data and put it in a variable, manipulate it,
 *  and send it to the browser once you’re finished.
*/

// Start Buffer
ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buffers</title>
</head>
<body>
    <p>Content</p>
</body>
</html>

<?php

// Get buffer content
$n = ob_get_contents();

// Clean all buffer content
ob_end_clean();

// print buffer content
print $n;