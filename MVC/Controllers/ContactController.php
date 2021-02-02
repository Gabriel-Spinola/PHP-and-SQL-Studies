<?php

namespace Controllers;

use Models\ContactModel;

/**
 * @namespace Controllers
 * @Receive $view, $model, execute(): void
 * @From Controller
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
        if(isset($_POST['submit'])) {
echo '<div class="mail-bug">';
            \Models\ContactModel :: sendForm();
echo "</div>";
        }

        $this -> view -> render([
            'title' => 'Contact Page'
        ]);
    }
}