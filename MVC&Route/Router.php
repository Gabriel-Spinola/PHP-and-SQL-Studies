<?php

class Router {
    /**
     * 
    */
    public function route(string $path, $arg) {
        $url = @$_GET['url'];

        if ($url == $path) {
            $arg();
            die;
        }

        $path = explode('/', $path);
        $url = explode('/', @$_GET['url']);

        $ok = true;
        $couple = [];

        if (count($path) == count($url)) {
            foreach ($path as $key => $row) {
                if ($row == '?') {
                    $couple[$key] = $url[$key];
                } else if ($url[$key] != $row) {
                    $ok = false;

                    break;
                }

                if ($ok) {
                    $arg($couple);

                    die;
                }
            }
        }
    }
}