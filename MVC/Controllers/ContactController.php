<?php

namespace Controllers;

class ContactController {
    private $view;

    public function __construct() { 
        $this -> view = new \Views\ContactView('contact');
    }

    /**
     * @return void
     * 
     * Run the page 
    */
    public function execute(): void {
        $this -> view -> render();
    }
}