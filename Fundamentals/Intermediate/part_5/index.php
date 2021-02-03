<?php 
   
    # Refresh When open the page

    session_start();
    $_SESSION['name'] = 'Guilherme'; //check index 2.

    setcookie('name', 'Gabriel', time() + (60 * 60 * 24), '/'); // expire in 1 day
    // and to Destroy The Cookie just put the time negative:
    // setcookie('nome', 'Gabriel', time() - (60 * 60 * 24), '/')

    echo $_COOKIE['name'];
?>