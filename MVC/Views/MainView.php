<?php

namespace Views;

class MainView {
    public function __construct(
        private $fileName,
        private $header = 'header',
        private $footer = 'footer',
    ) { }

    /**
     * @return void
     * 
     * Render the target ($this->fileName) Page
     * 
     * - Include the header (custom or default)
     * - Include the target Page
     * - Include the footer (custom or default)
    */
    public function render(): void {
        include 'Pages/Templates/' . $this -> header . '.php';
        include 'Pages/' . $this -> fileName . '.php';
        include 'Pages/Templates/' . $this -> footer . '.php';
    }
}