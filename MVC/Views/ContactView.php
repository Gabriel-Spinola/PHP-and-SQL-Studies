<?php

namespace Views;

class ContactView {
    public function __construct(
        private $fileName
    ) { }

    /**
     * @return void
     * 
     * Render the target ($this->fileName) Page
    */
    public function render(): void {
        include 'pages/' . $this -> fileName . '.php';
    }
}