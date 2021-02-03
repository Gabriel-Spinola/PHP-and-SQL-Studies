<?php

session_start();

if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}

// To Destroy a Variable Session:
// unset($_SESSION['nome']);

// To Destroy the Session:
// session_destroy()