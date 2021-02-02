<?php

/**
 * ==== MVC ====
 * 
 * M: MODEL
 * V: VIEW
 * C: CONTROLLER
 * 
 * ================
 * 
 * /Contact Page
 *  Contact Controller => General Controller Class. (Execute the model and the view).
 *  Contact View => Render the page.
 *  Contact Model => Store the required function
*/

// ===========================
// Autoload

/**
 * @return void
 * @param string class
 * 
 * include classes based on their name
*/
$autoload = function(string $class): void {
    include $class . '.php';
};

spl_autoload_register($autoload);

// ===========================
// Load Application
$app = new Application();
$app -> execute();