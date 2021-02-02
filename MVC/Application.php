<?php

class Application {
    /**
     * @return void
     * 
     * Execute the program.
     * - Get and format url
     * - Check if we have a controller to the url and run it.
    */
    public function execute(): void {
        // in the case of "page1/section1", we only get the "page1"
        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';
        $url = ucfirst($url);

        $url .= "Controller";

        if (file_exists('Controllers/' . $url . '.php')) {
            echo 'loading class: ' . $url;

           $controller = new $url();

           $controller -> execute();
        } else {
            die ("ERROR::APPLICATION | Controller doesn't exists");
        }
    }
}