<?php

namespace Views;

class MainView {
    public function __construct(
        private $fileName,
        private $header = 'header.php',
        private $footer = 'footer.php',
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