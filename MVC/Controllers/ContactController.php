<?php

namespace Controllers;

class ContactController {
    private $view;

    public function __construct() { 
        $this -> view = new ContactView;
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