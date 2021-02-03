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

            header('Location: ' . INCLUDE_PATH . 'contact/success');
            die;
        }

        \Router :: route('contact', function() {
            $this -> view = new MainView('contact');

            $this -> view -> render([
                'title' => 'Contact Page'
            ]);
        });

        \Router :: route('contact/success', function() {
            $this -> view = new MainView('contact-success');

            $this -> view -> render();
        });
    }
}