<?php

namespace Controllers;

/**
 * @namespace Controllers
 * @Receive $view, $model, execute(): void
 * @From: Controller
*/
class ExtraController extends Controller {

    public function __construct() { 
        $this -> view = new \Views\MainView('extra');
    }

    /**
     * @return PageView
     * 
     * Send page to the client With custom info
    */
    public function execute(): void {
        $this -> view -> render([
            'title' => 'Extra'
        ]);
    }
}