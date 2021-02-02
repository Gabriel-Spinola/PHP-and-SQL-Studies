<?php

namespace Controllers;

/**
 * @namespace Controllers
 * @Receive $view, $model, execute(): void
 * @From: Controller
*/
class ContactController extends Controller {

    public function __construct() { 
        $this -> view = new \Views\MainView('contact');
    }

    /**
     * @return PageView
     * 
     * Send page to the client With custom info
    */
    public function execute(): void {
        $this -> view -> render([
            'title' => 'Contact Page'
        ]);
    }
}