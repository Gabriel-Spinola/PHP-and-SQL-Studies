<?php

namespace Controllers;

use Models\ContactModel;
use Views\MainView;

/**
 * @namespace Controllers
 * @Receive $view, $model, execute(): void
 * @From Controller
*/
class ContactController extends Controller {

    public function __construct() { 
        $this -> view = new MainView('contact');
    }

    /**
     *### **Send page to the client With custom info**
     * 
     * @return Page-View
     * 
     * - Form Send
     * - Rendering
    */
    public function execute(): void {
        if(isset($_POST['submit'])) {
echo '<div class="mail-bug">';
            ContactModel :: sendForm();
echo "</div>";
        }

        $this -> view -> render([
            'title' => 'Contact Page'
        ]);
    }
}