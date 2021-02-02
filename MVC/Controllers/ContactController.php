<?php

namespace Controllers;

/**
 * @Receive $view, $model, execute(): void
 * @From: Controller
 */
class ContactController extends Controller {

    public function __construct() { 
        $this -> view = new \Views\MainView('contact');
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