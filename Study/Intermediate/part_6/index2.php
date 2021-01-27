<?php

    session_start();

    if(isset($_SESSION['nome'])) {
        echo $_SESSION['nome'];
    };

    // To Destroy a Variable Session:
    // unset($_SESSION['nome']);

    // To Destroy the Session:
    // session_destroy()

?>