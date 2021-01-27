<?php

/**
 * 
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